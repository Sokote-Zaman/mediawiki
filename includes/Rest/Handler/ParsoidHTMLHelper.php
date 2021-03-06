<?php

/**
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @file
 * @ingroup Page
 */
namespace MediaWiki\Rest\Handler;

use MediaWiki\Linker\LinkTarget;
use MediaWiki\MediaWikiServices;
use MediaWiki\Page\WikiPageFactory;
use MediaWiki\Rest\LocalizedHttpException;
use ParserCache;
use ParserOptions;
use ParserOutput;
use Title;
use Wikimedia\Message\MessageValue;
use Wikimedia\Parsoid\Config\PageConfig;
use Wikimedia\Parsoid\Core\ClientError;
use Wikimedia\Parsoid\Core\ResourceLimitExceededException;
use Wikimedia\Parsoid\Parsoid;
use Wikimedia\UUID\GlobalIdGenerator;
use WikiPage;

/**
 * Helper for getting output of a given wikitext page rendered by parsoid.
 *
 * @since 1.36
 *
 * @unstable Pending consolidation of the Parsoid extension with core code.
 *           Part of this class should probably become a service.
 */
class ParsoidHTMLHelper {

	private const RENDER_ID_KEY = 'parsoid-render-id';

	/** @var ParserCache */
	private $parserCache;

	/** @var WikiPageFactory */
	private $wikiPageFactory;

	/** @var GlobalIdGenerator */
	private $globalIdGenerator;

	/** @var Title|null */
	private $title = null;

	/** @var Parsoid|null */
	private $parsoid = null;

	/**
	 * @param ParserCache $parserCache
	 * @param WikiPageFactory $wikiPageFactory
	 * @param GlobalIdGenerator $globalIdGenerator
	 */
	public function __construct(
		ParserCache $parserCache,
		WikiPageFactory $wikiPageFactory,
		GlobalIdGenerator $globalIdGenerator
	) {
		$this->parserCache = $parserCache;
		$this->wikiPageFactory = $wikiPageFactory;
		$this->globalIdGenerator = $globalIdGenerator;
	}

	/**
	 * @param Title $title
	 */
	public function init( Title $title ) {
		$this->title = $title;
	}

	/**
	 * @param LinkTarget $title
	 * @return ParserOutput
	 * @throws LocalizedHttpException
	 */
	private function parse( LinkTarget $title ): ParserOutput {
		$parsoid = $this->createParsoid();
		$pageConfig = $this->createPageConfig( $title );
		try {
			$pageBundle = $parsoid->wikitext2html( $pageConfig, [
				'discardDataParsoid' => true,
				'pageBundle' => true,
			] );
			$fakeParserOutput = new ParserOutput( $pageBundle->html );
			// TODO: when we make tighter integration with Parsoid, render ID should become
			// a standard ParserOutput property. Nothing else needs it now, so don't generate
			// it in ParserCache just yet.
			$fakeParserOutput->setExtensionData( self::RENDER_ID_KEY, $this->globalIdGenerator->newUUIDv1() );
			return $fakeParserOutput;
		} catch ( ClientError $e ) {
			throw new LocalizedHttpException(
				MessageValue::new( 'rest-html-backend-error' ),
				400,
				[ 'reason' => $e->getMessage() ]
			);
		} catch ( ResourceLimitExceededException $e ) {
			throw new LocalizedHttpException(
				MessageValue::new( 'rest-resource-limit-exceeded' ),
				413,
				[ 'reason' => $e->getMessage() ]
			);
		}
	}

	/**
	 * Assert that Parsoid services are available.
	 * TODO: once parsoid glue services are in core,
	 * this will become a no-op and will be removed.
	 * See T265518
	 * @throws LocalizedHttpException
	 */
	private function assertParsoidInstalled() {
		$services = MediaWikiServices::getInstance();
		if ( $services->has( 'ParsoidSiteConfig' ) &&
			$services->has( 'ParsoidPageConfigFactory' ) &&
			$services->has( 'ParsoidDataAccess' )
		) {
			return;
		}
		throw new LocalizedHttpException(
			MessageValue::new( 'rest-html-backend-error' ),
			501
		);
	}

	/**
	 * @return Parsoid
	 * @throws LocalizedHttpException
	 */
	private function createParsoid(): Parsoid {
		$this->assertParsoidInstalled();
		if ( $this->parsoid === null ) {
			// TODO: Once parsoid glue services are in core,
			// this will need to use normal DI.
			// At that point, we may want to extract a more high level
			// service for rendering a revision, and inject that into this class.
			// See T265518
			$services = MediaWikiServices::getInstance();
			$this->parsoid = new Parsoid(
				$services->get( 'ParsoidSiteConfig' ),
				$services->get( 'ParsoidDataAccess' )
			);
		}
		return $this->parsoid;
	}

	/**
	 * @param LinkTarget $linkTarget
	 * @return PageConfig
	 * @throws LocalizedHttpException
	 */
	private function createPageConfig( LinkTarget $linkTarget ): PageConfig {
		$this->assertParsoidInstalled();
		// Currently everything is parsed as anon since Parsoid
		// can't report the used options.
		// Already checked that title/revision exist and accessible.
		return MediaWikiServices::getInstance()
			->get( 'ParsoidPageConfigFactory' )
			->create( $linkTarget );
	}

	/**
	 * @return ParserOutput a tuple with html and content-type
	 * @throws LocalizedHttpException
	 */
	public function getHtml(): ParserOutput {
		$wikiPage = $this->wikiPageFactory->newFromLinkTarget( $this->title );
		$parserOptions = ParserOptions::newCanonical( 'canonical' );
		$parserOutput = $this->parserCache->get( $wikiPage, $parserOptions );
		if ( $parserOutput ) {
			return $parserOutput;
		}
		$fakeParserOutput = $this->parse( $this->title );
		$this->parserCache->save( $fakeParserOutput, $wikiPage, $parserOptions );
		return $fakeParserOutput;
	}

	public function getCacheMetadata( WikiPage $page ) {
		// The cache time of the metadata belongs to the ParserOutput
		// variant cached last. While we are not differentiating the
		// parser options, it's fine. Once we start supporting non-anon
		// parses, we would need to fetch the actual ParserOutput to find
		// out it's cache time.
		return $this->parserCache->getMetadata(
			$page,
			ParserCache::USE_CURRENT_ONLY
		);
	}

	/**
	 * Returns an ETag uniquely identifying the HTML output.
	 * @return string|null
	 */
	public function getETag(): ?string {
		$parserOutput = $this->getHtml();
		$renderId = $parserOutput->getExtensionData( self::RENDER_ID_KEY );
		// Fallback for backwards compatibility with older cached entries.
		if ( !$renderId ) {
			$renderId = $this->getLastModified();
		}
		return "\"{$parserOutput->getCacheRevisionId()}/{$renderId}\"";
	}

	/**
	 * Returns the time at which the HTML was rendered.
	 *
	 * @return string|null
	 */
	public function getLastModified(): ?string {
		return $this->getHtml()->getCacheTime();
	}

}
