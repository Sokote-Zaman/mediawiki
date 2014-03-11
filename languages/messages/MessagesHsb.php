<?php
/** Upper Sorbian (hornjoserbsce)
 *
 * See MessagesQqq.php for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Derbeth
 * @author Dundak
 * @author J budissin
 * @author Kaganer
 * @author Michawiki
 * @author Nemo bis
 * @author Shirayuki
 * @author Tchoř
 * @author Tlustulimu
 * @author לערי ריינהארט
 */

$fallback = 'de';

$namespaceNames = array(
	NS_MEDIA            => 'Media',
	NS_SPECIAL          => 'Specialnje',
	NS_TALK             => 'Diskusija',
	NS_USER             => 'Wužiwar',
	NS_USER_TALK        => 'Diskusija_z_wužiwarjom',
	NS_PROJECT_TALK     => '$1_diskusija',
	NS_FILE             => 'Dataja',
	NS_FILE_TALK        => 'Diskusija_k_dataji',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'MediaWiki_diskusija',
	NS_TEMPLATE         => 'Předłoha',
	NS_TEMPLATE_TALK    => 'Diskusija_k_předłoze',
	NS_HELP             => 'Pomoc',
	NS_HELP_TALK        => 'Pomoc_diskusija',
	NS_CATEGORY         => 'Kategorija',
	NS_CATEGORY_TALK    => 'Diskusija_ke_kategoriji',
);

$namespaceAliases = array(
	'Wobraz' => NS_FILE,
	'Diskusija_k_wobrazej' => NS_FILE_TALK,
);

$namespaceGenderAliases = array(
        NS_USER => array( 'male' => 'Wužiwar', 'female' => 'Wužiwarka' ),
        NS_USER_TALK => array( 'male' => 'Diskusija_z_wužiwarjom', 'female' => 'Diskusija_z_wužiwarku' ),
);

$datePreferences = array(
	'default',
	'dmy',
	'ISO 8601',
);

$defaultDateFormat = 'dmy';

$dateFormats = array(
	'dmy time' => 'H:i',
	'dmy date' => 'j. xg Y',
	'dmy both' => 'j. xg Y, H:i',
);

$specialPageAliases = array(
	'Activeusers'               => array( 'Aktiwni_wužiwarjo' ),
	'Allmessages'               => array( 'MediaWiki-zdźělenki' ),
	'Allpages'                  => array( 'Wšě_strony' ),
	'Ancientpages'              => array( 'Najstarše_strony' ),
	'Blankpage'                 => array( 'Prózdna_strona' ),
	'Block'                     => array( 'Blokować' ),
	'Booksources'               => array( 'Pytanje_po_ISBN' ),
	'BrokenRedirects'           => array( 'Skóncowane_daleposrědkowanja' ),
	'Categories'                => array( 'Kategorije' ),
	'ChangePassword'            => array( 'Hesło_wróćo_stajić' ),
	'Confirmemail'              => array( 'E-Mejl_potwjerdźić' ),
	'Contributions'             => array( 'Přinoški' ),
	'CreateAccount'             => array( 'Konto_wutworić' ),
	'Deadendpages'              => array( 'Strony_bjez_wotkazow' ),
	'DeletedContributions'      => array( 'Zničene_přinoški' ),
	'DoubleRedirects'           => array( 'Dwójne_daleposrědkowanja' ),
	'Emailuser'                 => array( 'E-Mejl' ),
	'Export'                    => array( 'Eksport' ),
	'Fewestrevisions'           => array( 'Strony_z_najmjenje_wersijemi' ),
	'FileDuplicateSearch'       => array( 'Duplikatowe_pytanje' ),
	'Filepath'                  => array( 'Datajowy_puć' ),
	'Import'                    => array( 'Importować' ),
	'Invalidateemail'           => array( 'Njepłaćiwa_e-mejl' ),
	'BlockList'                 => array( 'Blokowane_IP-adresy' ),
	'LinkSearch'                => array( 'Wotkazowe_pytanje' ),
	'Listadmins'                => array( 'Administratorojo' ),
	'Listbots'                  => array( 'Boćiki' ),
	'Listfiles'                 => array( 'Dataje' ),
	'Listgrouprights'           => array( 'Prawa_skupinow' ),
	'Listredirects'             => array( 'Daleposrědkowanja' ),
	'Listusers'                 => array( 'Wužiwarjo' ),
	'Lockdb'                    => array( 'Datowu_banku_zamknyć' ),
	'Log'                       => array( 'Protokol' ),
	'Lonelypages'               => array( 'Wosyroćene_strony' ),
	'Longpages'                 => array( 'Najdlěše_strony' ),
	'MergeHistory'              => array( 'Stawizny_zjednoćić' ),
	'MIMEsearch'                => array( 'Pytanje_po_MIME' ),
	'Mostcategories'            => array( 'Strony_z_najwjace_kategorijemi' ),
	'Mostimages'                => array( 'Z_najwjace_stronami_zwjazane_dataje' ),
	'Mostlinked'                => array( 'Z_najwjace_stronami_zwjazane_strony' ),
	'Mostlinkedcategories'      => array( 'Najhusćišo_wužiwane_kategorije' ),
	'Mostlinkedtemplates'       => array( 'Najhusćišo_wužiwane_předłohi' ),
	'Mostrevisions'             => array( 'Strony_z_najwjace_wersijemi' ),
	'Movepage'                  => array( 'Přesunyć' ),
	'Mycontributions'           => array( 'Moje_přinoški' ),
	'Mypage'                    => array( 'Moja_wužiwarska_strona' ),
	'Mytalk'                    => array( 'Moja_diskusijna_strona' ),
	'Newimages'                 => array( 'Nowe_dataje' ),
	'Newpages'                  => array( 'Nowe_strony' ),
	'Popularpages'              => array( 'Najwoblubowaniše_strony' ),
	'Preferences'               => array( 'Nastajenja' ),
	'Prefixindex'               => array( 'Prefiksindeks' ),
	'Protectedpages'            => array( 'Škitane_strony' ),
	'Protectedtitles'           => array( 'Škitane_titule' ),
	'Randompage'                => array( 'Připadna_strona' ),
	'Randomredirect'            => array( 'Připadne_daleposrědkowanje' ),
	'Recentchanges'             => array( 'Aktualne_změny' ),
	'Recentchangeslinked'       => array( 'Změny_zwjazanych_stronow' ),
	'Revisiondelete'            => array( 'Wušmórnjenje_wersijow' ),
	'Search'                    => array( 'Pytać' ),
	'Shortpages'                => array( 'Najkrótše_strony' ),
	'Specialpages'              => array( 'Specialne_strony' ),
	'Statistics'                => array( 'Statistika' ),
	'Tags'                      => array( 'Taflički' ),
	'Uncategorizedcategories'   => array( 'Njekategorizowane_kategorije' ),
	'Uncategorizedimages'       => array( 'Njekategorizowane_dataje' ),
	'Uncategorizedpages'        => array( 'Njekategorizowane_strony' ),
	'Uncategorizedtemplates'    => array( 'Njekategorizowane_předłohi' ),
	'Undelete'                  => array( 'Wobnowić' ),
	'Unlockdb'                  => array( 'Datowu_banku_wotamknyć' ),
	'Unusedcategories'          => array( 'Njewužiwane_kategorije' ),
	'Unusedimages'              => array( 'Njewužiwane_dataje' ),
	'Unusedtemplates'           => array( 'Njewužiwane_předłohi' ),
	'Unwatchedpages'            => array( 'Njewobkedźbowane_strony' ),
	'Upload'                    => array( 'Nahraće' ),
	'Userlogin'                 => array( 'Přizwjewić' ),
	'Userlogout'                => array( 'Wotzjewić' ),
	'Userrights'                => array( 'Prawa' ),
	'Version'                   => array( 'Wersija' ),
	'Wantedcategories'          => array( 'Požadane_kategorije' ),
	'Wantedfiles'               => array( 'Falowace_dataje' ),
	'Wantedpages'               => array( 'Požadane_strony' ),
	'Wantedtemplates'           => array( 'Falowace_předłohi' ),
	'Watchlist'                 => array( 'Wobkedźbowanki' ),
	'Whatlinkshere'             => array( 'Lisćina_wotkazow' ),
	'Withoutinterwiki'          => array( 'Falowace_mjezyrěčne_wotkazy' ),
);

$messages = array(
# User preference toggles
'tog-underline' => 'Wotkazy podšmórnić:',
'tog-hideminor' => 'Snadne změny w aktualnych změnach schować',
'tog-hidepatrolled' => 'Dohladawane změny w aktualnych změnach schować',
'tog-newpageshidepatrolled' => 'Dohladowane strony z lisćiny nowych stronow schować',
'tog-extendwatchlist' => 'Lisćinu wobkedźbowankow wočinić, zo by wšě změny widźał, nic jenož najnowše',
'tog-usenewrc' => 'Změny po stronje w aktualnych změnach a wobkedźbowankach zeskupjeć',
'tog-numberheadings' => 'Nadpisma awtomatisce čisłować',
'tog-showtoolbar' => 'Wobdźěłowansku lajstu pokazać',
'tog-editondblclick' => 'Strony z dwójnym kliknjenjom wobdźěłować',
'tog-editsectiononrightclick' => 'Wobdźěłowanje wotrězkow přez kliknjenje z prawej tastu na nadpisma wotrězkow zmóžnić',
'tog-rememberpassword' => 'Přizjewjenje na tutym wobhladowaku sej spomjatkować (za maksimalnje $1 {{PLURAL:$1|dźeń|dnjej|dny|dnjow}})',
'tog-watchcreations' => 'Strony, kotrež wutworjam a dataje, kotrež nahrawam, swojim wobkedźbowankam přidać',
'tog-watchdefault' => 'Strony a dataje, kotrež wobdźěłuju, swojim wobkedźbowankam přidać',
'tog-watchmoves' => 'Sam přesunjene strony a dataje wobkedźbowankam přidać',
'tog-watchdeletion' => 'Sam wušmórnjene strony a dataje wobkedźbowankam přidać',
'tog-minordefault' => 'Wšě změny standardnje jako snadne woznamjenić',
'tog-previewontop' => 'Přehlad před wobdźěłanskim polom pokazać',
'tog-previewonfirst' => 'Při prěnim wobdźěłanju přehlad pokazać',
'tog-enotifwatchlistpages' => 'E-mejlku pósłać, hdyž so strona abo dataja z wobkedźbowankow změni',
'tog-enotifusertalkpages' => 'E-mejlku pósłać, hdyž so moja wužiwarska diskusijna strona změni',
'tog-enotifminoredits' => 'Tež za snadne změny stronow a datajow e-mejl pósłać',
'tog-enotifrevealaddr' => 'Moju e-mejlowu adresu w e-mejlowych zdźělenkach wotkryć',
'tog-shownumberswatching' => 'Ličbu wobkedźbowacych wužiwarjow pokazać',
'tog-oldsig' => 'Eksistowaca signatura:',
'tog-fancysig' => 'Ze signaturu kaž z wikitekstom wobchadźeć  (bjez awtomatiskeho wotkaza)',
'tog-uselivepreview' => 'Live-přehlad wužiwać (eksperimentalny)',
'tog-forceeditsummary' => 'Mje skedźbnić, jeli zabudu zjeće',
'tog-watchlisthideown' => 'Moje změny we wobkedźbowankach schować',
'tog-watchlisthidebots' => 'Změny awtomatiskich programow (botow) we wobkedźbowankach schować',
'tog-watchlisthideminor' => 'Snadne změny we wobkedźbowankach schować',
'tog-watchlisthideliu' => 'Změny přizjewjenych wužiwarjow z wobkedźbowankow schować',
'tog-watchlisthideanons' => 'Změny anonymnych wužiwarjow z wobkedźbowankow schować',
'tog-watchlisthidepatrolled' => 'Dohladowane změny we wobkedźbowankach schować',
'tog-ccmeonemails' => 'Mi kopije e-mejlkow pósłać, kotrež druhim wužiwarjam pósćelu',
'tog-diffonly' => 'Jenož rozdźěle pokazać (nic pak zbytny wobsah)',
'tog-showhiddencats' => 'Schowane kategorije pokazać',
'tog-norollbackdiff' => 'Rozdźěl po wróćostajenju zanjechać',
'tog-useeditwarning' => 'Warnować, hdyž so wobdźěłowanska strona z njeskładowanymi změnami wopušća',
'tog-prefershttps' => 'Po přizjewjenju přeco wěsty zwisk wužiwać',

'underline-always' => 'Přeco',
'underline-never' => 'Ženje',
'underline-default' => 'Standard drasty abo wobhladowaka',

# Font style option in Special:Preferences
'editfont-style' => 'Pismowy stil wobdźěłowanskeho pola:',
'editfont-default' => 'Standard wobhladowaka',
'editfont-monospace' => 'Pismo z krutej šěrokosću',
'editfont-sansserif' => 'Bjezserifowe pismo',
'editfont-serif' => 'Serifowe pismo',

# Dates
'sunday' => 'Njedźela',
'monday' => 'Póndźela',
'tuesday' => 'Wutora',
'wednesday' => 'Srjeda',
'thursday' => 'Štwórtk',
'friday' => 'Pjatk',
'saturday' => 'Sobota',
'sun' => 'Nje',
'mon' => 'Pón',
'tue' => 'Wut',
'wed' => 'Srj',
'thu' => 'Štw',
'fri' => 'Pja',
'sat' => 'Sob',
'january' => 'januar',
'february' => 'februar',
'march' => 'měrc',
'april' => 'apryl',
'may_long' => 'meja',
'june' => 'junij',
'july' => 'julij',
'august' => 'awgust',
'september' => 'september',
'october' => 'oktober',
'november' => 'nowember',
'december' => 'december',
'january-gen' => 'januara',
'february-gen' => 'februara',
'march-gen' => 'měrca',
'april-gen' => 'apryla',
'may-gen' => 'meje',
'june-gen' => 'junija',
'july-gen' => 'julija',
'august-gen' => 'awgusta',
'september-gen' => 'septembra',
'october-gen' => 'oktobra',
'november-gen' => 'nowembra',
'december-gen' => 'decembra',
'jan' => 'jan',
'feb' => 'feb',
'mar' => 'měr',
'apr' => 'apr',
'may' => 'mej',
'jun' => 'jun',
'jul' => 'jul',
'aug' => 'awg',
'sep' => 'sep',
'oct' => 'okt',
'nov' => 'now',
'dec' => 'dec',
'january-date' => '$1. januara',
'february-date' => '$1. februara',
'march-date' => '$1. měrca',
'april-date' => '$1. apryla',
'may-date' => '$1. meje',
'june-date' => '$1. junija',
'july-date' => '$1. julija',
'august-date' => '$1. awgusta',
'september-date' => '$1. septembra',
'october-date' => '$1. oktobra',
'november-date' => '$1. nowembra',
'december-date' => '$1. decembra',

# Categories related messages
'pagecategories' => '{{PLURAL:$1|Kategorija|Kategoriji|Kategorije|Kategorije}}',
'category_header' => 'Nastawki w kategoriji „$1”',
'subcategories' => 'Podkategorije',
'category-media-header' => 'Medije w kategoriji „$1”',
'category-empty' => "''Tuta kategorija tuchwilu žane nastawki abo medije njewobsahuje.''",
'hidden-categories' => '{{PLURAL:$1|Schowana kategorija|Schowanej kategoriji|Schowane kategorije|Schowanych kategorijow}}',
'hidden-category-category' => 'Schowane kategorije',
'category-subcat-count' => '{{PLURAL:$2|Tuta kategorija ma jenož slědowacu podkategoriju.|Tuta kategorija ma {{PLURAL:$1|slědowacu podkategoriju|$1 slědowacej podkategoriji|$1 slědowace podkategorije|$1 slědowacych podkategorijow}} z dohromady $2.}}',
'category-subcat-count-limited' => 'Tuta kategorija ma {{PLURAL:$1|slědowacu podkategoriju|slědowacej $1 podkategoriji|slědowace $1 podkategorije|slědowacych $1 podkategorijow}}:',
'category-article-count' => '{{PLURAL:$2|Tuta kategorija wobsahuje jenož slědowacu stronu.|{{PLURAL:$1|Slědowaca strona je|Slědowacej $1 stronje stej|Slědowace $1 strony su|Slědowacych $1 stronow je}} w tutej kategoriji z dohromady $2.}}',
'category-article-count-limited' => '{{PLURAL:$1|Slědowaca strona je|Slědowacej $1 stronje stej|Slědowace $1 strony su|Slědowacych $1 stronow je}} w tutej kategoriji:',
'category-file-count' => '{{PLURAL:$2|Tuta kategorija wobsahuje jenož slědowacu stronu.|{{PLURAL:$1|Slědowaca dataja je|Slědowacej $1 dataji stej|Slědowace $1 dataje|Slědowacych $1 datajow je}} w tutej kategoriji z dohromady $2.}}',
'category-file-count-limited' => '{{PLURAL:$1|Slědowaca dataj je|Slědowacej $1 dataji stej|Slědowace $1 dataje su|Slědowacych $1 je}} w tutej kategoriji:',
'listingcontinuesabbrev' => '(pokročowanje)',
'index-category' => 'Indicěrowane strony',
'noindex-category' => 'Njeindicěrowane strony',
'broken-file-category' => 'Strony z njepłaćiwymi datajowymi wotkazami',

'about' => 'Wo',
'article' => 'Nastawk',
'newwindow' => '(wočinja so w nowym woknje)',
'cancel' => 'Přetorhnyć',
'moredotdotdot' => 'Wjace…',
'morenotlisted' => 'Tuta lisćina dospołna njeje.',
'mypage' => 'Strona',
'mytalk' => 'Diskusija',
'anontalk' => 'Diskusijna strona tuteje IP.adresy',
'navigation' => 'Nawigacija',
'and' => '&#32;a',

# Cologne Blue skin
'qbfind' => 'Namakać',
'qbbrowse' => 'Přepytować',
'qbedit' => 'Wobdźěłać',
'qbpageoptions' => 'Tuta strona',
'qbmyoptions' => 'Moje strony',
'faq' => 'Husto stajene prašenja (FAQ)',
'faqpage' => 'Project:Husto stajene prašenja (FAQ)',

# Vector skin
'vector-action-addsection' => 'Temu přidać',
'vector-action-delete' => 'wušmórnyć',
'vector-action-move' => 'přesunyć',
'vector-action-protect' => 'škitać',
'vector-action-undelete' => 'Wobnowić',
'vector-action-unprotect' => 'Škit wotstronić',
'vector-view-create' => 'Wutworić',
'vector-view-edit' => 'Wobdźěłać',
'vector-view-history' => 'Stawizny',
'vector-view-view' => 'Čitać',
'vector-view-viewsource' => 'Žórło sej wobhladać',
'actions' => 'Akcije',
'namespaces' => 'Mjenowe rumy',
'variants' => 'Warianty',

'navigation-heading' => 'Nawigaciski meni',
'errorpagetitle' => 'Zmylk',
'returnto' => 'Wróćo k stronje $1.',
'tagline' => 'z {{GRAMMAR:genitiw|{{SITENAME}}}}',
'help' => 'Pomoc',
'search' => 'Pytać',
'searchbutton' => 'Pytać',
'go' => 'Pytać',
'searcharticle' => 'Pytać',
'history' => 'Wersije strony',
'history_short' => 'wersije',
'updatedmarker' => 'Změny z mojeho poslednjeho wopyta',
'printableversion' => 'Ćišćomna wersija',
'permalink' => 'Trajny wotkaz',
'print' => 'Ćišćeć',
'view' => 'Wobhladać',
'edit' => 'wobdźěłać',
'create' => 'Wutworić',
'editthispage' => 'Tutu stronu wobdźěłać',
'create-this-page' => 'Stronu wutworić',
'delete' => 'wušmórnyć',
'deletethispage' => 'Stronu wušmórnyć',
'undeletethispage' => 'Tutu stronu wobnowić',
'undelete_short' => '{{PLURAL:$1|jednu wersiju|$1 wersiji|$1 wersije|$1 wersijow}} wobnowić',
'viewdeleted_short' => '{{PLURAL:$1|jednu wušmórnjenu změnu|$1 wušmórnjenej změnje|$1 wušmórnjene změny|$1 wušmórnjenych změnow}} sej wobhladać',
'protect' => 'škitać',
'protect_change' => 'změnić',
'protectthispage' => 'Stronu škitać',
'unprotect' => 'Škit wotstronić',
'unprotectthispage' => 'Tutu stronu hižo nješkitać',
'newpage' => 'Nowa strona',
'talkpage' => 'Tutu stronu diskutować',
'talkpagelinktext' => 'diskusija',
'specialpage' => 'Specialna strona',
'personaltools' => 'Wosobinske nastroje',
'postcomment' => 'Nowy wotrězk',
'articlepage' => 'Nastawk',
'talk' => 'diskusija',
'views' => 'Zwobraznjenja',
'toolbox' => 'Nastroje',
'userpage' => 'Wužiwarsku stronu pokazać',
'projectpage' => 'Projektowu stronu pokazać',
'imagepage' => 'Datajowu stronu sej wobhladać',
'mediawikipage' => 'Zdźělenku pokazać',
'templatepage' => 'Předłohu pokazać',
'viewhelppage' => 'Pomocnu stronu pokazać',
'categorypage' => 'Kategoriju pokazać',
'viewtalkpage' => 'Diskusiju pokazać',
'otherlanguages' => 'W druhich rěčach',
'redirectedfrom' => '(ze strony $1 sposrědkowany)',
'redirectpagesub' => 'Daleposrědkowanje',
'lastmodifiedat' => 'Strona bu posledni raz dnja $1 w $2 hodź. změnjena.',
'viewcount' => 'Strona bu {{PLURAL:$1|jónu|dwójce|$1 razy|$1 razow}} wopytana.',
'protectedpage' => 'Škitana strona',
'jumpto' => 'Dźi do:',
'jumptonavigation' => 'Nawigacija',
'jumptosearch' => 'Pytać',
'view-pool-error' => 'Wodaj, serwery su we wokomiku přećežene.
Přewjele wužiwarjow pospytuje sej tutu stronu wobhladać.
Prošu wočakń chwilku, prjedy hač pospytuješ sej tutu stronu hišće raz wobhladać.

$1',
'pool-timeout' => 'Timeout, doniž zawrjenje skónčene njeje.',
'pool-queuefull' => 'Poolowa čakanska rynka je połna',
'pool-errorunknown' => 'Njeznaty zmylk:',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage).
'aboutsite' => 'Wo {{GRAMMAR:lokatiw|{{SITENAME}}}}',
'aboutpage' => 'Project:Wo',
'copyright' => 'Wobsah pod $1 k dispoziciji steji, jeli njeje so hinak podało.',
'copyrightpage' => '{{ns:project}}:Awtorske prawa',
'currentevents' => 'Aktualne podawki',
'currentevents-url' => 'Project:Aktualne podawki',
'disclaimers' => 'Licencne postajenja',
'disclaimerpage' => 'Project:Impresum',
'edithelp' => 'Pomoc za wobdźěłowanje',
'helppage' => 'Help:Wobsah',
'mainpage' => 'Hłowna strona',
'mainpage-description' => 'Hłowna strona',
'policy-url' => 'Project:Směrnicy',
'portal' => 'Portal {{GRAMMAR:genitiw|{{SITENAME}}}}',
'portal-url' => 'Project:Portal',
'privacy' => 'Škit datow',
'privacypage' => 'Project:Škit datow',

'badaccess' => 'Nimaš trěbne prawa',
'badaccess-group0' => 'Nimaš trěbne prawa za tutu akciju.',
'badaccess-groups' => 'Akcija, kotruž sy požadał, wobmjezuje so na wužiwarjow w {{PLURAL:$2|skupinje|jednej ze skupinow}}: $1.',

'versionrequired' => 'Wersija $1 softwary MediaWiki trěbna',
'versionrequiredtext' => 'Wersija $1 MediaWiki je trěbna, zo by so tuta strona wužiwać móhła. Hlej [[Special:Version|wersijowu stronu]]',

'ok' => 'W porjadku',
'retrievedfrom' => 'Z "$1"',
'youhavenewmessages' => 'Maš $1 ($2).',
'youhavenewmessagesfromusers' => 'Maš $1 wot {{PLURAL:$3|druheho wužiwarja|$3 wužiwarjow|$3 wužiwarjow|$3 wužiwarjow}} ($2).',
'youhavenewmessagesmanyusers' => 'Maš $1 wot wjele wužiwarjow ($2).',
'newmessageslinkplural' => '{{PLURAL:$1|nowu powěsć|999=nowej powěsći|999=nowe powěsći}}',
'newmessagesdifflinkplural' => '{{PLURAL:$1|poslednja změna|999=poslednjej změnje|999=poslednje změny}}',
'youhavenewmessagesmulti' => 'Maš nowe powěsće: $1',
'editsection' => 'wobdźěłać',
'editold' => 'wobdźěłać',
'viewsourceold' => 'žórło wobhladać',
'editlink' => 'wobdźěłać',
'viewsourcelink' => 'žórło wobhladać',
'editsectionhint' => 'Wotrězk wobdźěłać: $1',
'toc' => 'Wobsah',
'showtoc' => 'pokazać',
'hidetoc' => 'schować',
'collapsible-collapse' => 'Schować',
'collapsible-expand' => 'Pokazać',
'thisisdeleted' => '$1 pokazać abo wobnowić?',
'viewdeleted' => '$1 pokazać?',
'restorelink' => '{{PLURAL:$1|1 wušmórnjenu wersiju|$1 wušmórnjenej wersiji|$1 wušmórnjene wersije|$1 wušmórnjenych wersijow}}',
'feedlinks' => 'Kanal:',
'feed-invalid' => 'Njepłaćiwy typ kanaloweho abonementa.',
'feed-unavailable' => 'Syndikaciske kanale k dispoziciji njesteja',
'site-rss-feed' => '$1 RSS kanal',
'site-atom-feed' => 'Atom-kanal za $1',
'page-rss-feed' => 'RSS-kanal za „$1“',
'page-atom-feed' => 'Atom-Kanal za „$1“',
'red-link-title' => '$1 (strona njeeksistuje)',
'sort-descending' => 'Spadowacy sortěrować',
'sort-ascending' => 'Postupowacy sortěrować',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main' => 'nastawk',
'nstab-user' => 'Wužiwarska strona',
'nstab-media' => 'Medijowa strona',
'nstab-special' => 'Specialna strona',
'nstab-project' => 'Projektowa strona',
'nstab-image' => 'Dataja',
'nstab-mediawiki' => 'zdźělenka',
'nstab-template' => 'Předłoha',
'nstab-help' => 'Pomoc',
'nstab-category' => 'Kategorija',

# Main script and global functions
'nosuchaction' => 'Žana tajka akcija',
'nosuchactiontext' => 'Akcija, kotruž URL podawa, je njepłaćiwa.
Sy so snano při zapodaću URL zapisał abo sy wopačnemu wotkazej slědował.
To móhło tež programowanski zmylk w {{GRAMMAR:lokatiw|{{SITENAME}}}} być.',
'nosuchspecialpage' => 'Tuta specialna strona njeeksistuje.',
'nospecialpagetext' => '<strong>Tuta specialna strona njeeksistuje.</strong>

Płaćiwe specialne strony hodźa so pod [[Special:SpecialPages|lisćinu specialnych stronow]] namakać.',

# General errors
'error' => 'Zmylk',
'databaseerror' => 'Zmylk w datowej bance',
'databaseerror-text' => 'Zmylk w datowej bance je wustupił.
To móže na programowy zmylk w softwarje pokazać.',
'databaseerror-textcl' => 'Zmylk w datowej bance je wustupił.',
'databaseerror-query' => 'Wotprašenje: $1',
'databaseerror-function' => 'Funkcija: $1',
'databaseerror-error' => 'Zmylk: $1',
'laggedslavemode' => "'''Kedźbu:''' Je móžno, zo strona žane zaktualizowanja njewobsahuje.",
'readonly' => 'Datowa banka je zawrjena',
'enterlockreason' => 'Zapodaj přičinu za zawrjenje a přibližny čas, hdy budźe zawrjenje zběhnjene',
'readonlytext' => 'Datowa banka je tuchwilu za nowe zapiski a druhe změny zawrjena, najskerje wothladowanskich dźěłow dla; po jich zakónčenju budźe wšitko zaso normalne.

Administrator, kiž je datowu banku zawrěł, je jako přičinu podał: $1',
'missing-article' => 'Datowa banka njenamaka tekst strony z mjenom "$1" $2, kotryž dyrbjał so namakać.

To so zwjetša zawinuje, hdyž so njepłaćiwa změna abo zapisk stawiznow na stronu wotkazuje, kotraž bu wušmórnjena.

Jeli to njetrjechi, sy najskerje programowy zmylk w softwarje namakał.
Zdźěl to prošu [[Special:ListUsers/sysop|admininistratorej]] podawajo wotpowědny URL.',
'missingarticle-rev' => '(Wersijowe čisło: $1)',
'missingarticle-diff' => '(Rozdźěl: $1, $2)',
'readonly_lag' => 'Datowa banka bu awtomatisce zawrjena, mjeztym zo pospytuja wotwisne serwery datowych bankow  hłowny serwer docpěć',
'internalerror' => 'Znutřkowny zmylk',
'internalerror_info' => 'Znutřkowny zmylk: $1',
'fileappenderrorread' => '"$1" njeda so čitać při připowěšenju.',
'fileappenderror' => 'Njeje móžno było "$1" k "$2" připowěsnyć.',
'filecopyerror' => 'Njebě móžno dataju „$1” do „$2” kopěrować.',
'filerenameerror' => 'Njebě móžno dataju „$1” do „$2” přemjenować.',
'filedeleteerror' => 'Njebě móžno dataju „$1” wušmórnyć.',
'directorycreateerror' => 'Zapis „$1“ njeda so wutworić.',
'filenotfound' => 'Njebě móžno dataju „$1” namakać.',
'fileexistserror' => 'Njebě móžno do dataje „$1“ pisać: Dataja eksistuje.',
'unexpected' => 'Njewočakowana hódnota: "$1"="$2".',
'formerror' => 'Zmylk: Njebě móžno formular wotesłać.',
'badarticleerror' => 'Tuta akcija njeda so na tutej stronje wuwjesć.',
'cannotdelete' => 'Strona abo dataja "$1" njeje so dała wušmórnyć.
Móže być, zo je hižo wot někoho druheho wušmórnjena.',
'cannotdelete-title' => 'Strona "$1" njehodźi so zhašeć',
'delete-hook-aborted' => 'Zhašenje přez hoku přetorhnjene.
Njeje žane wujasnjenje podała.',
'no-null-revision' => 'Nowa nulowa wersija za stronu "$1" njeda so wutworić',
'badtitle' => 'Wopačny titul',
'badtitletext' => 'Požadane mjeno strony běše njepłaćiwy, prózdny abo njekorektny titul z mjezyrěčneho abo interwikijoweho wotkaza. Snano wobsahuje jedne znamješko abo wjacore znamješka, kotrež w titulach dowolene njejsu.',
'perfcached' => 'Slědowace daty pochadźeja z pufrowaka a njejsu snano cyle aktualne. Maksimalnje {{PLURAL:$1|jedyn wuslědk|$1 wuslědkaj|$1 wuslědki|$1 wuslědkow}} w pufrowaku k dispoziciji {{PLURAL:$1|steji|stejitej|steja|steji}}.',
'perfcachedts' => 'Slědowace daty su z pufrowaka a buchu $1 posledni raz zaktualizowane. Maksimalnje {{PLURAL:$4|jedyn wuslědk|$4 wuslědkaj|$4 wuslědki|$4 wuslědkow}} w pufrowaku k dispoziciji {{PLURAL:$4|steji|stejitej|steja|steji}}.',
'querypage-no-updates' => 'Aktualizacije za tutu stronu su tuchwilu znjemóžnjene. Daty so hač na dalše njewobnowja.',
'viewsource' => 'žórło wobhladać',
'viewsource-title' => 'Žórłowy tekst za $1 sej wobhladać',
'actionthrottled' => 'Akcije wobmjezowane',
'actionthrottledtext' => 'Jako připrawa přećiwo spamej, je častosć wuwjedźenja tuteje akcije w krótkej dobje wobmjezowana a ty sy tutón limit překročił. Prošu spytaj za něšto mjeńšiny hišće raz.',
'protectedpagetext' => 'Tuta strona je přećiwo wobdźěłowanju abo druhim akcijam škitana.',
'viewsourcetext' => 'Móžeš sej žórłowy tekst tuteje strony wobhladać a jón kopěrować:',
'viewyourtext' => "Móžeš sej žórłowy tekst '''swojich změnow''' wobhladać a do slědowaceje strony kopěrować:",
'protectedinterface' => 'Tuta strona wobsahuje tekst za wužiwarski powjerch softwary na tutym wikiju a je škitana, zo by so znjewužiwanje zadźěwało.
Zo by přełožki za wšě wikije přidał abo změnił, wužij prošu [//translatewiki.net/ translatewiki.net], projekt MediaWiki za lokalizaciju.',
'editinginterface' => "'''Warnowanje:''' Wobdźěłuješ stronu, kotraž so wužiwa, zo by tekst za wužiwarski powjerch softwary k dispoziciji stajiła. Změny na stronje  wuskutkuja so na napohlad wužiwarskeho powjercha za druhich wužiwarjow na tutym wikiju. Zo by přełožki za wšě wikije přidał abo změnił, wužij prošu [//translatewiki.net/ translatewiki.net], projekt MediaWiki za lokalizaciju.",
'cascadeprotected' => 'Tuta strona je za wobdźěłowanje zawrjena, dokelž je w {{PLURAL:$1|slědowacej stronje|slědowacymaj stronomaj|slědowacych stronach|slědowacych stronach}} zapřijata, {{PLURAL:$1|kotraž je|kotrejž stej|kotrež su|kotrež su}} přez kaskadowu opciju {{PLURAL:$1|škitana|škitanej|škitane|škitane}}:
$2',
'namespaceprotected' => "Nimaš dowolnosć, zo by stronu w mjenowym rumje '''$1''' wobdźěłał.",
'customcssprotected' => 'Nimaš prawo, zo by tutu CSS-stronu wobdźěłał, dokelž wosobinske nastajenja druheho wužiwarja wobsahuje.',
'customjsprotected' => 'Nimaš prawo, zo by tutu JavaScript-stronu wobdźěłał, dokelž wosobinske nastajenja druheho wužiwarja wobsahuje.',
'mycustomcssprotected' => 'Nimaš prawo tutu CSS-stronu wobdźěłać.',
'mycustomjsprotected' => 'Nimaš prawo tutu JavaScript-stronu wobdźěłać.',
'myprivateinfoprotected' => 'Nimaš prawo swoje priwatne informacije wobdźěłać.',
'mypreferencesprotected' => 'Nimaš prawo swoje nastajenja wobdźěłać.',
'ns-specialprotected' => 'Specialne strony njedadźa so wobdźěłać.',
'titleprotected' => 'Tutón titul bu přećiwo wutworjenju přez [[User:$1|$1]] škitany.
Podata přičina je \'\'"$2"\'\'.',
'filereadonlyerror' => 'Njeje móžno dataju "$1" změnić, dokelž datajowy repozitorij "$2" je jenož čitajomny.

Administrator, kiž je jón zawrěł, je tule přičinu podał: "$3".',
'invalidtitle-knownnamespace' => 'Njepłaćiwy titul z mjenowym rumom "$2" a tekstom "$3"',
'invalidtitle-unknownnamespace' => 'Njepłaćiwy titul z njeznatym mjenowym rumom $1 a tekstom "$2"',
'exception-nologin' => 'Njejsy přizjewjeny',
'exception-nologin-text' => 'Prošu [[Special:Userlogin|přizjew so]], zo by přistup na tutu stronu abo akciju měł.',
'exception-nologin-text-manual' => 'Zo by přistup na tutu stronu abo akciju měł, dyrbiš so $1.',

# Virus scanner
'virus-badscanner' => "Špatna konfiguracija: Njeznaty wirusowy skener: ''$1''",
'virus-scanfailed' => 'Skenowanje njeporadźiło (kode $1)',
'virus-unknownscanner' => 'njeznaty antiwirus:',

# Login and logout pages
'logouttext' => "'''{{GENDER:|Sy|Sy}} nětko {{GENDER:|wotzjewjeny|wotzjewjena}}.'''

Kedźbu: Je móžno, zo někotre strony so snano takle pokazuja, kaž by ty hišće přizjewjeny był, doniž pufrowak twojeho wobhladowaka njewuprózdniš.",
'welcomeuser' => 'Witaj $1',
'welcomecreation-msg' => 'Twoje konto bu wutworjene.
Njezabudź swoje [[Special:Preferences|nastajenja za {{GRAMMAR:akuzatiw|{{SITENAME}}}}]] změnić.',
'yourname' => 'Wužiwarske mjeno:',
'userlogin-yourname' => 'Wužiwarske mjeno',
'userlogin-yourname-ph' => 'Zapodaj swoje wužiwarske mjeno',
'createacct-another-username-ph' => 'Wužiwarske mjeno zapodać',
'yourpassword' => 'Hesło:',
'userlogin-yourpassword' => 'Hesło',
'userlogin-yourpassword-ph' => 'Zapodaj swoje hesło',
'createacct-yourpassword-ph' => 'Zapodaj hesło',
'yourpasswordagain' => 'Hesło znowa zapodać:',
'createacct-yourpasswordagain' => 'Hesło wobkrućić',
'createacct-yourpasswordagain-ph' => 'Zapodaj hesło hišće raz',
'remembermypassword' => 'Na tutym ličaku přizjewjeny wostać (za maksimalnje $1 {{PLURAL:$1|dźeń|dnjej|dny|dnjow}})',
'userlogin-remembermypassword' => 'Přizjewjeny wostać',
'userlogin-signwithsecure' => 'Wěsty zwisk wužiwać',
'yourdomainname' => 'Twoja domejna:',
'password-change-forbidden' => 'Njemóžeš hesła na tutym wikiju změnić.',
'externaldberror' => 'Běše pak eksterny zmylk awtentifikacije datoweje banki, pak njesměš swoje eksterne konto aktualizować.',
'login' => 'Přizjewić',
'nav-login-createaccount' => 'Konto wutworić abo so přizjewić',
'loginprompt' => 'Za přizjewjenje do {{GRAMMAR:genitiw|{{SITENAME}}}} dyrbja placki zmóžnjene być.',
'userlogin' => 'Załožće konto abo přizjewće so',
'userloginnocreate' => 'Přizjewić',
'logout' => 'wotzjewić',
'userlogout' => 'wotzjewić',
'notloggedin' => 'Njepřizjewjeny',
'userlogin-noaccount' => 'Nimaš žane konto?',
'userlogin-joinproject' => 'Konto za {{GRAMMAR:akuzatiw|{{SITENAME}}}} załožić',
'nologin' => 'Nimaš žane konto? $1.',
'nologinlink' => 'Konto załožić',
'createaccount' => 'Konto załožić',
'gotaccount' => 'Maš hižo wužiwarske konto? $1.',
'gotaccountlink' => 'Přizjewić',
'userlogin-resetlink' => 'Přizjewjenske daty zabył?',
'userlogin-resetpassword-link' => 'Sy swoje hesło zabył?',
'helplogin-url' => 'Help:Přizjewić',
'userlogin-helplink' => '[[{{MediaWiki:helplogin-url}}|Pomoc za přizjewjenje]]',
'userlogin-loggedin' => 'Sy hižo jako {{GENDER:$1|$1 přizjewjeny|$1 přizjewjena}}. Wužij slědowacy formular, zo by so jako druhi wužiwar přizjewił.',
'userlogin-createanother' => 'Dalše konto załožić',
'createacct-join' => 'Zapodaj deleka swoje informacije.',
'createacct-another-join' => 'Zapodaj deleka informacije noweho konta.',
'createacct-emailrequired' => 'E-mejlowa adresa',
'createacct-emailoptional' => 'E-mejlowa adresa (opcionalny)',
'createacct-email-ph' => 'Zapodaj swoju e-mejlowu adresu',
'createacct-another-email-ph' => 'E-mejlowu adresu zapodać',
'createaccountmail' => 'Nachwilne připadne hesło wužiwać a jo na slědowacu e-mejlowu adresu pósłać',
'createacct-realname' => 'Woprawdźite mjeno (opcionalny)',
'createaccountreason' => 'Přičina:',
'createacct-reason' => 'Přičina',
'createacct-reason-ph' => 'Čehodla załožuješ druhe konto?',
'createacct-captcha' => 'Wěstotna kontrola',
'createacct-imgcaptcha-ph' => 'Zapodaj tekst, kotryž deleka widźiš',
'createacct-submit' => 'Twoje konto załožić',
'createacct-another-submit' => 'Dalše konto załožić',
'createacct-benefit-heading' => '{{SITENAME}} je so wot ludźi kaž ty wutworił.',
'createacct-benefit-body1' => '{{PLURAL:$1|změna|změnje|změny|změnow}}',
'createacct-benefit-body2' => '{{PLURAL:$1|strona|stronje|strony|stronow}}',
'createacct-benefit-body3' => '{{PLURAL:$1|aktiwny sobuskutkowar|aktiwnej sobuskutkowarjej|aktiwni sobuskutkowarjo}}',
'badretype' => 'Hesle, kotrejž sy zapodał, so njekryjetej.',
'userexists' => 'Wužiwarske mjeno, kotrež sy zapodał, so hižo wužiwa.
Prošu wubjer druhe mjeno.',
'loginerror' => 'Zmylk při přizjewjenju',
'createacct-error' => 'Zmylk při załožowanju konta',
'createaccounterror' => 'Wužiwarske konto njeda so załožić: $1',
'nocookiesnew' => 'Wužiwarske konto bu załožene, njejsy pak přizjewjeny. {{SITENAME}} wužiwa placki (cookies), zo bychu so wužiwarjo přizjewili. Sy placki znjemóžnił. Prošu zmóžń je a přizjew so potom ze swojim nowym wužiwarskim mjenom a hesłom.',
'nocookieslogin' => '{{SITENAME}} wužiwa placki za přizjewjenje wužiwarjow.
Sy placki znjemóžnił. 
Prošu zmóžń je a spytaj hišće raz.',
'nocookiesfornew' => 'Wužiwarske konto njeje so załožiło, dokelž njemóžachmy jeho žórło wobkrućić.
Přeswědč so, zo placki su zmóžnjene, ačitaj tutu stronu znowa a spytaj hišće raz.',
'noname' => 'Njejsy płaćiwe wužiwarske mjeno podał.',
'loginsuccesstitle' => 'Přizjewjenje wuspěšne',
'loginsuccess' => "'''Sy nětko jako \"\$1\" w {{GRAMMAR:lokatiw|{{SITENAME}}}} {{GENDER:|přizjewjeny|přizjewjena|přizjewjene}}.'''",
'nosuchuser' => 'Njeje wužiwar z mjenom "$1".
Wužiwarske mjena wobkedźbuja wulkopisanje.
Přepruwuj swój prawopis abo [[Special:UserLogin/signup|wutwor nowe konto]].',
'nosuchusershort' => 'Wužiwarske mjeno „$1” njeeksistuje. Prošu skontroluj prawopis.',
'nouserspecified' => 'Dyrbiš wužiwarske mjeno podać',
'login-userblocked' => 'Tutón wužiwar je zablokowany. Přizjewjenje njedowolene.',
'wrongpassword' => 'Hesło, kotrež sy zapodał, je wopačne. Prošu spytaj hišće raz.',
'wrongpasswordempty' => 'Hesło, kotrež sy zapodał, běše prózdne. Prošu spytaj hišće raz.',
'passwordtooshort' => 'Hesła dyrbja znajmjeńša {{PLURAL:$1|1 znamješko|$1 znamješce|$1 znamješka|$1 znamješkow}} měć.',
'password-name-match' => 'Twoje hesło dyrbi so wot twojeho wužiwarskeho mjena rozeznać.',
'password-login-forbidden' => 'Wužiwanje tutoho wužiwarskeho mjena a heska je zakazane.',
'mailmypassword' => 'Hesło wróćo stajić',
'passwordremindertitle' => 'Nowe nachwilne hesło za {{GRAMMAR:akuzatiw|{{SITENAME}}}}',
'passwordremindertext' => 'Něchtó z IP-adresu $1 (najskerje ty) je wo nowe hesło za přizjewjenje za {{GRAMMAR:akuzatiw|{{SITENAME}}}} ($4) prosył. Nachwilne hesło za wužiwarja "$2" je so wutworiło a je nětko "$3". Jeli je to twój wotpohlad było dyrbiš so nětko přizjewić a nowe hesło wubrać. Twoje nachwilne hesło spadnje za {{PLURAL:$5|jeden dźeń|$5 dnjej|$5 dny|$5 dnjow}}.

Jeli něchtó druhi wo nowe hesło prosył abo ty sy so zaso na swoje hesło dopomnił a hižo nochceš je změnić, móžeš tutu powěsć ignorować a swoje stare hesło dale wužiwać.',
'noemail' => 'Za wužiwarja "$1" žana e-mejlowa adresa podata njeje.',
'noemailcreate' => 'Dyrbiš płaćiwu e-mejlowa adresu podać',
'passwordsent' => 'Nowe hesło bu na e-mejlowu adresu zregistrowanu za wužiwarja „$1” pósłane.
Prošu přizjew so znowa, po tym zo sy je přijał.',
'blocked-mailpassword' => 'Twoja IP-adresa je přećiwo wobdźěłowanju zablokowana, a tohodla njeje dowolene, funkciju za wobnowjenje hesłow wužiwać, zo by znjewužiwanju zadźěwało.',
'eauthentsent' => 'Wobkrućenska e-mejlka je so na podatu e-mejlowu adresu pósłała.
Prjedy hač so druha e-mejlka na konto pósćele, dyrbiš so po instrukcijach w e-mejlce měć, zo by wobkrućił, zo konto woprawdźe tebi słuša.',
'throttled-mailpassword' => 'E-mejl za anulowanje hesło je so za {{PLURAL:$1|poslednju hodźinu|poslednjej $1 hodźinje|poslednje $1 hodźiny|poslednich $1 hodźin}} pósłała. Zo by znjewužiwanju zadźěwało, so jenož jedna e-mejl za anulowanje hesła na {{PLURAL:$1|hodźinu|$1 hodźinje|$1 hodźiny|$1 hodźin}} pósćele.',
'mailerror' => 'Zmylk při słanju e-mejlki: $1',
'acct_creation_throttle_hit' => 'Wopytowarjo tutoho wikija, kotřiž twoju IP-adresu wužiwaja, su {{PLURAL:$1|1 konto|$1 kontaj|$1 konty|$1 kontow}} posledni dźeń wutworił, štož je maksimalna ličba za tutu periodu. Wopytowarjo, kotřiž tutu IP-adresu wužiwaja, njemóža tuchwilu dalše konta wutworić.',
'emailauthenticated' => 'Twoja e-mejlowa adresa je so $2 $3 hodź. wobkrućiła.',
'emailnotauthenticated' => 'Twoja e-mejlowa adresa hišće wobkrućena njeje. Žana e-mejlka budźe so za slědowace funkcije słać.',
'noemailprefs' => 'Podaj e-mejlowu adresu w swojich nastajenjach, zo bychu tute funkcije k dispoziciji stali.',
'emailconfirmlink' => 'Swoju e-mejlowu wobkrućić',
'invalidemailaddress' => 'E-mejlowa adresa so njeakceptuje, dokelž ma po zdaću njepłaćiwy format. Prošu zapodaj płaćiwu adresu abo wuprózdń te polo.',
'cannotchangeemail' => 'Kontowe e-mejlowe adresy njehodźa so na tutym wikiju změnić.',
'emaildisabled' => 'Tute sydło njemóže e-mejle pósłać.',
'accountcreated' => 'Wužiwarske konto załožene',
'accountcreatedtext' => 'Wužiwarske konto za [[{{ns:User}}:$1|$1]] ([[{{ns:User talk}}:$1|diskusiju]]) bu załožene.',
'createaccount-title' => 'Wutworjenje wužiwarskeho konta za {{SITENAME}}',
'createaccount-text' => 'Něchtó je wužiwarske konto za twoju e-mejlowu adresu na {{SITENAME}} ($4) z mjenom "$2" z hesłom "$3" wutworił. Ty měł so nětko přizjewić a swoje hesło změnić.

Móžeš tutu zdźělenku ignorować, jeli so wužiwarske konto zmylnje wutworiło.',
'usernamehasherror' => 'Wužiwarske mjeno njesmě hašowe znamješka wpbsahować',
'login-throttled' => 'Sy přehusto spytał so přizjewić. Počakaj prošu $1, prjedy hač hišće raz spytaš.',
'login-abort-generic' => 'Twoje přizjewjenje njebě wuspěšne - přetorhnjene',
'loginlanguagelabel' => 'Rěč: $1',
'suspicious-userlogout' => 'Twoje naprašowanje za wotzjewjenje bu wotpokazane, dokelž zda so, jako by so přez wobškodźeny wobhladowak abo pufrowacy proksy pósłało',
'createacct-another-realname-tip' => '* Woprawdźite mjeno je opcionalne.
Jeli jo podaš, budźe so to wužiwać, zo by přinoški přirjadowało.',
'pt-login' => 'Přizjewić',
'pt-createaccount' => 'Konto załožić',
'pt-userlogout' => 'Wotzjewić',

# Email sending
'php-mail-error-unknown' => 'Njeznaty zmylk w PHP-funkciji mail()',
'user-mail-no-addy' => 'Je so spytało e-mejl bjez e-mejloweje adresy słać.',
'user-mail-no-body' => 'Je so spytało, e-mejl bjez teksta abo z překrótkim tekstom pósłać',

# Change password dialog
'changepassword' => 'Hesło změnić',
'resetpass_announce' => 'Zo by přizjewjenje skónčił, dyrbiš nowe hesło postajić.',
'resetpass_text' => '<!-- Tu tekst zasunyć -->',
'resetpass_header' => 'Kontowe hesło změniś',
'oldpassword' => 'Stare hesło:',
'newpassword' => 'Nowe hesło:',
'retypenew' => 'Nowe hesło wospjetować:',
'resetpass_submit' => 'Hesło posrědkować a so přizjewić',
'changepassword-success' => 'Twoje hesło je so wuspěšnje změniło!',
'changepassword-throttled' => 'Sy přehusto spytał so přizjewić. Počakaj prošu $1, prjedy hač hišće raz spytaš.',
'resetpass_forbidden' => 'Hesła njedadźa so změnić.',
'resetpass-no-info' => 'Dyrbiš so přizjewić, zo by direktny přistup na tutu stronu měł.',
'resetpass-submit-loggedin' => 'Hesło změnić',
'resetpass-submit-cancel' => 'Přetorhnyć',
'resetpass-wrong-oldpass' => 'Njepłaćiwe nachwilne abo aktualne hesło.
Snano sy swoje hesło hižo wuspěšnje změnił abo nowe nachwilne hesło požadał.',
'resetpass-recycled' => 'Prošu staj swoje hesło na druhe hesło hač twoje aktualne hesło.',
'resetpass-temp-emailed' => 'Sy so z nachwilnym e-mejlowym kodom přizjewił.
Zo by přizjewjenje skónčił, dyrbiš tu nowe hesło postajić:',
'resetpass-temp-password' => 'Nachwilne hesło:',
'resetpass-abort-generic' => 'Měnjenje hesła je so přez rozšěrjenje přetorhnyło.',
'resetpass-expired' => 'Twoje hesło je spadnyło. Prošu postaj nowe hesło za přizjewjenje.',
'resetpass-expired-soft' => 'Twoje hesło je spadnyło a dyrbi so wróćo stajić. Prošu wubjer nětko druhe hesło abo klikń na "{{int:resetpass-submit-cancel}}", zo by jo pozdźišo wróćo stajił.',

# Special:PasswordReset
'passwordreset' => 'Hesło wróćo stajić',
'passwordreset-text-one' => 'Wupjelń tutón formular, zo by swoje hesło anulował.',
'passwordreset-text-many' => '{{PLURAL:$1|Wupjelń jedne z polow, zo by nachwilne hesło přez e-mejl dóstał.}}',
'passwordreset-legend' => 'Hesło wróćo stajić',
'passwordreset-disabled' => 'Wróćostajenje hesłow je so na  tutym wikiju znjemóžniło.',
'passwordreset-emaildisabled' => 'E-mejlowe funkcije su so na tutym wikiju znjemóžnili.',
'passwordreset-username' => 'Wužiwarske mjeno:',
'passwordreset-domain' => 'Domena:',
'passwordreset-capture' => 'E-mejlku sej wobhladać?',
'passwordreset-capture-help' => 'Jeli nakřižuješ tutón kašćik, budźe so e-mejlka z nachwilnym hesło pokazować a tež wužiwarjej pósłać.',
'passwordreset-email' => 'E-mejlowa adresa:',
'passwordreset-emailtitle' => 'Kontowe podrobnosće na {{GRAMMAR:lokatiw|{{SITENAME}}}}',
'passwordreset-emailtext-ip' => 'Něchtó (najskerje ty, z IP-adresu $1) je anulowanje hesła za {{GRAMMAR:akuzatiw|{{SITENAME}}}} požadał ($4).  {{PLURAL:$3|Slědowace wužiwarske konto je|Slědowacej wužiwarskej konće stej|Slědowace wužiwarske konta su}} z tutej e-mejlowej adresu {{PLURAL:$3|zwjazane|zwjazanej|zwjazane}}:

$2

{{PLURAL:$3|Tute nachwilne hesło spadnje|Tutej nachwilnej hesle spadnjetej|Tute nachwilne hesła spadnu}} za {{PLURAL:$5|jedyn dźeń|$5 dnjej|$5 dny|$5 dnjow}}.
Ty měł so nětko přizjewić a nowe hesło wubrać. Jeli něchtó druhi je tute naprašowanje pósłał, abo jeli sy so zaso na prěnjotne hesło dopomnił a wjace nochceš jo změnić, móžeš tutu zdźělenku ignorować a swoje stare hesło dale wužiwać.',
'passwordreset-emailtext-user' => 'Wužiwar $1 na {{GRAMMAR:lokatiw|{{SITENAME}}}} je anulowanje twojeho hesła za {{GRAMMAR:akuzatiw|{{SITENAME}}}} požadał ($4).  {{PLURAL:$3|Slědowace wužiwarske konto je|Slědowacej wužiwarskej konće stej|Slědowace wužiwarske konta su}} z tutej e-mejlowej adresu {{PLURAL:$3|zwjazane|zwjazanej|zwjazane}}:

$2

{{PLURAL:$3|Tute nachwilne hesło spadnje|Tutej nachwilnej hesle spadnjetej|Tute nachwilne hesła spadnu}} za {{PLURAL:$5|jedyn dźeń|$5 dnjej|$5 dny|$5 dnjow}}.
Ty měł so nětko přizjewić a nowe hesło wubrać. Jeli něchtó druhi je tute naprašowanje pósłał, abo jeli sy so zaso na prěnjotne hesło dopomnił a wjace nochceš jo změnić, móžeš tutu zdźělenku ignorować a swoje stare hesło dale wužiwać.',
'passwordreset-emailelement' => 'Wužiwarske mjeno: $1
Nachwilne hesło: $2',
'passwordreset-emailsent' => 'E-mejl za anulowanje hesło je so pósłała.',
'passwordreset-emailsent-capture' => 'E-mejl za anulowanje hesła je so pósłała, kotraž so deleka pokazuje.',
'passwordreset-emailerror-capture' => 'E-mejl za anulowanje hesła je so wutworiła, kotraž so deleka pokazuje, ale słanje {{GENDER:$2|wužiwarjej|wužiwarce}} je so njeporadźiło: $1',

# Special:ChangeEmail
'changeemail' => 'E-mejlowu adresu změnić',
'changeemail-header' => 'Kontowu e-mejlowu adresu změnić',
'changeemail-text' => 'Wupjelń tutón formular, zo by swoju e-mejlowu adresu změnił. Dyrbiš swoje hesło zapodać, zo by tutu změnu wobkrućił.',
'changeemail-no-info' => 'Dyrbiš so přizjewić, zo by direktny přistup na tutu stronu měł.',
'changeemail-oldemail' => 'Aktualna e-mejlowa adresa:',
'changeemail-newemail' => 'Nowa e-mejlowa adresa:',
'changeemail-none' => '(žana)',
'changeemail-password' => 'Twoje hesło za {{GRAMMAR:akuzatiw|{{SITENAME}}}}',
'changeemail-submit' => 'E-mejlowu adresu změnić',
'changeemail-cancel' => 'Přetorhnyć',
'changeemail-throttled' => 'Sy přehusto spytał so přizjewić.
Počakaj prošu $1, prjedy hač hišće raz spytaš.',

# Special:ResetTokens
'resettokens' => 'Tokeny wróćo stajić',
'resettokens-text' => 'Móžeš tokeny wróćo stajić, kotrež přistup na wěste priwatne daty dowoleja, kotrež su z twojim kontom zwjazane.

Ty dyrbjał zo činić, jeli sy je zmylnje z někim dźělił abo jelic twoje konto je so napadało.',
'resettokens-no-tokens' => 'Tokeny za wróćostajenje njejsu.',
'resettokens-legend' => 'Tokeny wróćo stajić',
'resettokens-tokens' => 'Tokeny:',
'resettokens-token-label' => '$1 (aktualna hódnota: $2)',
'resettokens-watchlist-token' => 'Token za webkanal (Atom/RSS) [[Special:Watchlist|změnow na stronach w twojich wobkedźbowankach]]',
'resettokens-done' => 'Tokeny wróćostajene.',
'resettokens-resetbutton' => 'Wubrane tokeny wróćo stajić',

# Edit page toolbar
'bold_sample' => 'Tučny tekst',
'bold_tip' => 'Tučny tekst',
'italic_sample' => 'Kursiwny tekst',
'italic_tip' => 'Kursiwny tekst',
'link_sample' => 'Mjeno wotkaza',
'link_tip' => 'Znutřkowny wotkaz',
'extlink_sample' => 'http://www.example.com mjeno wotkaza',
'extlink_tip' => 'Zwonkowny wotkaz (pomysli sej na prefiks http://)',
'headline_sample' => 'Tekst nadpisma',
'headline_tip' => 'Nadpismo runiny 2',
'nowiki_sample' => 'Tu njeformatowany tekst zasunyć',
'nowiki_tip' => 'Wikiformatowanje ignorować',
'image_sample' => 'Přikład.jpg',
'image_tip' => 'Zasadźena dataja',
'media_sample' => 'Přikład.ogg',
'media_tip' => 'Datajowy wotkaz',
'sig_tip' => 'Twoja signatura z časowym kołkom',
'hr_tip' => 'Wodoruna linija (zrědka wužiwać!)',

# Edit pages
'summary' => 'Zjeće:',
'subject' => 'Tema/Nadpismo:',
'minoredit' => 'Snadna změna',
'watchthis' => 'Stronu wobkedźbować',
'savearticle' => 'Stronu składować',
'preview' => 'Přehlad',
'showpreview' => 'Přehlad pokazać',
'showlivepreview' => 'Hnydomny přehlad',
'showdiff' => 'Změny pokazać',
'anoneditwarning' => "'''Kedźbu:''' Njejsy přizjewjeny. Twoja IP-adresa budźe so do wersijowych stawiznow strony přijimać.",
'anonpreviewwarning' => "''Njejsy přizjewjeny. Składowanje přenošuje twoju IP-adresu do wobdźěłowanskeje historije tuteje strony.''",
'missingsummary' => "'''Kedźbu:''' Njejsy žane zjeće zapodał. Jeli hišće raz na \"{{int:savearticle}}\" kliknješ, budźe so twoja změna bjez njeho składować.",
'missingcommenttext' => 'Prošu zapodaj komentar.',
'missingcommentheader' => "'''Kedźbu:''' Njejsy temu/nadpis za tutón komentar podał. Jeli na „{{int:savearticle}}” kliknješ, składuje so twoja změna bjez temy/nadpisa.",
'summary-preview' => 'Přehlad zjeća:',
'subject-preview' => 'Přehlad temy/napisma:',
'blockedtitle' => 'Wužiwar je zablokowany',
'blockedtext' => "'''Twoje wužiwarske mjeno bu zablokowane abo twoja IP-adresa bu zablokowana.'''

Blokowar je $1.
Podata přičina je ''$2''.

* Spočatk blokowanja: $8
* Kónc blokowanja: $6
* Zablokowany wužiwar: $7

Móžeš $1 abo druheho [[{{MediaWiki:Grouppage-sysop}}|administratora]] kontaktować, zo by wo blokowanju diskutował.
Njemóžeš funkciju 'Tutomu wužiwarjej e-mejlować' wužiwać, chibazo sy płaćiwu e-mejlowu adresu w swojich [[Special:Preferences|kontowych nastajenjach]] podał a njebu přećiwo jeje wužiwanju zablokowany.
Twoja tuchwilna IP-adresa je $3 a blokowanski ID je #$5. Prošu podaj wšě horjeka naspomnjene podrobnosće w swojich naprašowanjach.",
'autoblockedtext' => 'Twoja IP-adresa bu awtomatisce blokowana, dokelž ju druhi wužiwar wužiwaše, kiž bu wot $1 zablokowany.
Přičina blokowanja bě:

:\'\'$2\'\'

* Započatk blokowanja: $8
* Kónc blokowanja: $6
* Zablokowany wužiwar: $7

Móžeš $1 abo jednoho z druhich [[{{MediaWiki:Grouppage-sysop}}|administratorow]] kontaktować, zo by blokowanje diskutował.

Wobkedźbuj, zo njemóžeš funkciju "Wužiwarjej mejlku pósłać" wužiwać, jeli nimaš płaćiwu e-mejlowu adresu, kotraž je w twojich [[Special:Preferences|wužiwarskich nastajenjach]] zregistrowana a njebi blokowany ju wužiwać.

Twój aktualna adresa IP je $3 a ID blokowanja je #$5.
Prošu podaj wšě horjeka naspomnjene podrobnosće w naprašowanjach, kotrež činiš.',
'blockednoreason' => 'žana přičina podata',
'whitelistedittext' => 'Dyrbiš so $1, zo by strony wobdźěłować móhł.',
'confirmedittext' => 'Dyrbiš swoju e-mejlowu adresa wobkrućić, prjedy hač móžeš strony wobdźěłować. Prošu zapodaj a wobkruć swoju e-mejlowu adresu we [[Special:Preferences|wužiwarskich nastajenjach]].',
'nosuchsectiontitle' => 'Wotrězk njeda so namakać',
'nosuchsectiontext' => 'Sy spytał, wotrězk wobdźěłać, kotryž njeeksistuje.
Móžno, zo je so přesunył abo zhašał, mjeztym zo sej wobhladuješ stronu.',
'loginreqtitle' => 'Přizjewjenje trěbne',
'loginreqlink' => 'přizjewić',
'loginreqpagetext' => 'Dyrbiš so $1, zo by strony čitać móhł.',
'accmailtitle' => 'Hesło bu pósłane.',
'accmailtext' => "Připadnje spłodźene hesło za [[User talk:$1|$1]] bu na $2 pósłane. Daj so na stronje ''[[Special:ChangePassword|hesło změnić]]'' při přizjewjenju změnić.",
'newarticle' => '(Nowy)',
'newarticletext' => 'Sy wotkaz k stronje slědował, kotraž hišće njeeksistuje. Zo by stronu wutworił, wupjelń slědowace tekstowe polo (hlej [[{{MediaWiki:Helppage}}|stronu pomocy]] za dalše informacije). Jeli sy zmylnje tu, klikń prosće na tłóčatko <b>Wróćo</b> we swojim wobhladowaku.',
'anontalkpagetext' => "---- ''To je diskusijna strona za anonymneho wužiwarja, kiž hišće konto wutworił njeje abo je njewužiwa. Dyrbimy tohodla numerisku IP-adresu wužiwać, zo bychmy jeho/ju identifikowali. Tajka IP-adresa hodźi so wot wjacorych wužiwarjow zhromadnje wužiwać. Jeli sy anonymny wužiwar a měniš, zo buchu irelewantne komentary k tebi pósłane, [[Special:UserLogin/signup|wutwor prošu konto]] abo [[Special:UserLogin|přizjew so]], zo by přichodnu šmjatańcu z anonymnymi wužiwarjemi wobešoł.''",
'noarticletext' => 'Tuchwilu tuta strona žadyn tekst njewobsahuje. Móžeš [[Special:Search/{{PAGENAME}}|tutón titul strony na druhich stronach pytać]], <span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} wotpowědne protokole pytać] abo [{{fullurl:{{FULLPAGENAME}}|action=edit}} tutu stronu wobdźěłać]</span>.',
'noarticletext-nopermission' => 'Tuchwilu žadyn tekst na tutej stronje njeje.
Móžeš [[Special:Search/{{PAGENAME}}|tutón titul strony]] na druhich stronach pytać abo <span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} pytaj wotpowědne protokole]</span>, ale nimaš prawo, strou wutworić.',
'missing-revision' => 'Wersija #$1 strony z mjenom "{{PAGENAME}}" njeeksistuje.

Přičina je zwjetša zestarjeny wotkaz w stawiznach k stronje, kotraž je so zhašała.
Podrobnosće móžeš w  [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} protokolu wušmórnjenjow] namakać.',
'userpage-userdoesnotexist' => 'Wužiwarske konto „$1“ njeje zregistrowane. Prošu pruwuj, hač chceš tutu stronu woprawdźe wutworić/wobdźěłać.',
'userpage-userdoesnotexist-view' => 'Wužiwarske konto "$1" njeje zregistrowane.',
'blocked-notice-logextract' => 'Tutón wužiwar je tuchwilu zablokowany. Najnowši protokolowy zapisk so deleka jako referenca podawa:',
'clearyourcache' => "'''Kedźbu: Po składowanju dyrbiš snano pufrowak swojeho wobhladowaka wuprózdnić, zo by změny widźał.''' 
* '''Firefox/Safari:''' Tłóč na ''Umsch'' kliknjo na ''Znowa'' abo tłóč ''Strg-F5'' abo ''Strg-R'' (''⌘-R'' na Macintosh);
* '''Google Chrome:''' Tłóč na ''Strg-Umsch-R'' (''⌘-Umsch-R'' na Mac)
* '''Internet Explorer:''' Dźěrź ''Strg'' tłóčeny kliknjo na ''Znowa,'' abo tłóč ''Strg-F5''.
* '''Opera:''' Wuprózdń pufrowak w ''Extras → Einstellungen'';",
'usercssyoucanpreview' => "'''Pokiw:''' Wužij tłóčku '{{int:showpreview}}', zo by swój nowy css do składowanja testował.",
'userjsyoucanpreview' => "'''Pokiw:''' Wužij tłóčatko \"{{int:showpreview}}\", zo by swój nowy JavaScript do składowanja testował.",
'usercsspreview' => "'''Wobkedźbujće, zo sej jenož přehlad swojeho wužiwarskeho CSS wobhladuješ. Hišće njeje składowany!'''",
'userjspreview' => "'''Dźiwaj na to, zo jenož swój wužiwarski JavaScript testuješ/sej wobhladuješ.'''
'''Hišće njeje so składował!'''",
'sitecsspreview' => "'''Wobkedźbujće, zo sej jenož přehlad tutoho CSS wobhladuješ.'''
'''Wón hišće składowany njeje!'''",
'sitejspreview' => "'''Wobkedźbujće, zo sej jenož přehlad tutoho JavaScriptoweho koda wobhladuješ.'''
'''Wón hišće składowany njeje!'''",
'userinvalidcssjstitle' => "'''Warnowanje:''' Drasta z mjenom „$1” njeeksistuje. Prošu mysli na to, zo wosobinske strony .css a .js titul z małym pismikom wuwziwaja, na př. {{ns:user}}:Foo/vector.css město {{ns:user}}:Foo/Vector.css.",
'updated' => '(Zaktualizowany)',
'note' => "'''Kedźbu:'''",
'previewnote' => "'''Wobmysl, zo to je jenož přehlad.'''
Twoje změny hišće njejsu składowane!",
'continue-editing' => 'K wobdźěłowanskemu polu',
'previewconflict' => 'Tutón přehlad zwobraznja tekst w hornim tekstowym polu,  kaž so zjewi, jeli jón składuješ.',
'session_fail_preview' => "'''Njemóžachmy twoju změnu předźěłać, dokelž su so posedźenske daty zhubili.'''
Spytaj prošu hišće raz.
Jeli přeco hišće njefunguje, [[Special:UserLogout|wotzjew so]] a přizjew so znowa.",
'session_fail_preview_html' => "'''Njemóžachmy twoju změnu předźěłać, dokelž su so posedźenske daty zhubili.'''

''Dokelž je we {{GRAMMAR:lokatiw|{{SITENAME}}}} luty HTML zmóžnjeny, je přehlad jako wěstotna naprawa přećiwo atakam přez JavaScript schowany.''

'''Jeli to je chutnje měnjeny wobdźěłowanski pospyt, spytaj prošu hišće raz. Jeli přeco hišće njefunguje, [[Special:UserLogout|wotzjew so]] a přizjew so znowa.'''",
'token_suffix_mismatch' => "'''Twoja změna je so wotpokazała, dokelž twój wobhladowak je znamješka skepsał.
Składowanje móže wobsah strony zničić. Móže so to na přikład přez wopačnje dźěłowacy proksy stać.'''",
'edit_form_incomplete' => "'''Někotre dźěle wobdźěłowanskeho formulara njejsu serwer docpěli; prošu přepruwuj, hač twoje změny su w porjadku a spytaj hišće raz.'''",
'editing' => 'Wobdźěłanje strony $1',
'creating' => '$1 so wutworja',
'editingsection' => 'Wobdźěłanje strony $1 (wotrězk)',
'editingcomment' => '$1 so wobdźěłuje (nowy wotrězk)',
'editconflict' => 'Wobdźěłowanski konflikt: $1',
'explainconflict' => "Něchtó druhi je stronu změnił, po tym zo sy započał, ju wobdźěłować.
Hornje tekstowe polo wobsahuje tekst strony kaž tuchwilu eksistuje.
Twoje změny so w delnim tekstowym polu pokazuja.
Dyrbiš swoje změny do eksistowaceho teksta zadźěłać.
'''Jenož''' tekst w hornim tekstowym polu so składuje, hdyž znowa na „{{int:savearticle}}” kliknješ.",
'yourtext' => 'Twój tekst',
'storedversion' => 'Składowana wersija',
'nonunicodebrowser' => "'''KEDŹBU: Twój wobhladowak z Unikodom kompatibelny njeje.'''
Prowizoriske rozrisanje steji k dispoziciji, zo by ći zmóžnił, strony wěsće wobdźěłał: Nic-ASCII-znamješka budu so we wobdźěłowanskim polu jako heksadecimalne kody jewić.",
'editingold' => "'''Kedźbu: Wobdźěłuješ staršu wersiju tuteje strony.'''
Jeli ju składuješ, zhubja so wšě změny, kotrež sy wot tuteje wersije činił.",
'yourdiff' => 'Rozdźěle',
'copyrightwarning' => "Prošu wobkedźbuj, zo wšě přinoški k {{GRAMMAR:datiw|{{SITENAME}}}} $2 podleže (hlej $1 za podrobnosće). Jeli nochceš, zo so twój přinošk po dobrozdaću wobdźěłuje a znowa rozšěrja, njeskładuj jón.<br />
Lubiš tež, zo sy to sam napisał abo ze zjawneje domejny abo z podobneho žórła kopěrował.
Kopěrowanje tekstow, kiž su přez awtorske prawa škitane, je zakazane! '''NJESKŁADUJ PŘINOŠKI Z COPYRIGHTOM BJEZ DOWOLNOSĆE!'''",
'copyrightwarning2' => "Prošu wobkedźbuj, zo wšě přinoški k {{GRAMMAR:datiw|{{SITENAME}}}} hodźa so wot druhich wužiwarjow wobdźěłować, změnić abo wotstronić. Jeli nochceš, zo so twój přinošk po dobrozdaću wobdźěłuje, njeskładuj jón.<br />

Lubiš nam tež, zo sy jón sam napisał abo ze zjawneje domejny abo z podobneho swobodneho žórła kopěrował (hlej $1 za podrobnosće).

'''NJESKŁADUJ PŘINOŠKI Z COPYRIGHTOM BJEZ DOWOLNOSĆE!'''",
'longpageerror' => "'''ZMYLK: Tekst, kotryž pospytuješ składować, je {{PLURAL:$1| jedyn kilobajt|$1 kilobajtaj|$1 kilobajty|$1 kilobajtow}} dołho, maksimalna wulkosć pak je {{PLURAL:$2|jedyn kilobajt|$1 kilobajtaj|$1 kilobajty|$1 kilobajtow}}.''' Njehodźi so składować.",
'readonlywarning' => "'''KEDŹBU: Datowa banka bu wothladowanja dla zawrjena, tohodla njemóžeš swoje změny nětko składować.'''
Móžeš tekst do tekstoweje dataje kopěrować a jón za pozdźišo składować.

Administrator, kiž je ju zawrjena, je tutu přičinu podał: $1",
'protectedpagewarning' => "'''KEDŹBU: Tuta strona bu zawrjena, tak zo jenož wužiwarjo z prawami administratora móža ju wobdźěłać.'''
Najnowši protokolowy zapisk je deleka jako referenca podaty:",
'semiprotectedpagewarning' => "'''Kedźbu:''' Tuta strona bu zawrjena, tak zo jenož zregistrowani wužiwarjo móža ju wobdźěłać.
Najnowši protokolowy zapisk je deleka jako referenca podaty:",
'cascadeprotectedwarning' => "'''KEDŹBU:''' Tuta strona je škitana, tak zo móža ju jenož wužiwarjo z prawami administratora wobdźělać, dokelž je w {{PLURAL:$1|slědowacej stronje|slědowacych stronach}} zapřijata, {{PLURAL:$1|kotraž je|kotrež su}} přez kaskadowu opciju {{PLURAL:$1|škitana|škitane}}:",
'titleprotectedwarning' => "'''WARNOWANJE: Tuta strona bu zawrjena, tak zo [[Special:ListGroupRights|wosebite prawa]] su trěbne, zo by so wutworił.'''
Najnowši protokolowy zapisk je deleka jako referenca podaty:",
'templatesused' => 'Na tutej stronje {{PLURAL:$1|wužiwana předłoha|wužiwanej předłoze|wužiwane předłohi|wužiwane předłohi}}:',
'templatesusedpreview' => 'W tutym přehledźe {{PLURAL:$1|wužiwana předłoha|wužiwanej předłoze|wužiwane předłohi|wužiwane předłohi}}:',
'templatesusedsection' => 'W tutym wotrězku {{PLURAL:$1|wužiwana předłoha|wužiwanej předłoze|wužiwane předłohi|wužiwane předłohi}}:',
'template-protected' => '(škitana)',
'template-semiprotected' => '(škitana za njepřizjewjenych wužiwarjow a nowačkow)',
'hiddencategories' => 'Tuta strona je čłon w {{PLURAL:$1|1 schowanej kategoriji|$1 schowanymaj kategorijomaj|$1 schowanych kategorijach|$1 schowanych kategorijach}}:',
'edittools' => '<!-- Tutón tekst so spody wobdźěłowanskich a nahrawanskich formularow pokazuje. -->',
'nocreatetext' => 'Na {{GRAMMAR:lokatiw|{{SITENAME}}}} bu wutworjenje nowych stronow wobmjezowane. Móžeš wobstejace strony wobdźěłać abo [[Special:UserLogin|so přizjewić abo wužiwarske konto wutworić]].',
'nocreate-loggedin' => 'Nimaš prawo, zo by nowe strony wutworił.',
'sectioneditnotsupported-title' => 'Wobdźěłowanje wotrězka so njepodpěruje',
'sectioneditnotsupported-text' => 'Wobdźěłowanje wotrězka so na tutej wobdźěłowanskej stronje njepodpěruje.',
'permissionserrors' => 'Woprawnjenski zmylk',
'permissionserrorstext' => 'Nimaš prawo, zo by tutu akciju wuwjedł. {{PLURAL:$1|Přičina|Přičiny}}:',
'permissionserrorstext-withaction' => 'Nimaš prawo $2. {{PLURAL:$1|Přičina|Přičinje|Přičiny|Přičiny}}:',
'recreate-moveddeleted-warn' => "'''Kedźbu: Wutworiš stronu, kiž bu prjedy wušmórnjena.'''

Prošu přepruwuj, hač je přihódne z wobdźěłowanjom tuteje strony pokročować.
Protokol wušmórnjenjow a přesunjenjow za tutu stronu su tu za informaciju:",
'moveddeleted-notice' => 'Tuta strona bu wušmórnjena. Protokol wušmórnjenjow a přesunjenjow za  stronu so deleka jako referenca podawa.',
'log-fulllog' => 'Dospołny protokol sej wobhladać',
'edit-hook-aborted' => 'Wobdźěłanje přez hoku přetorhnjene.
Njeje žane wujasnjenje podała.',
'edit-gone-missing' => 'Strona njeje so aktualizować dała.
Zda so, zo je hîžo wušmórnjena.',
'edit-conflict' => 'Wobdźěłanski konflikt.',
'edit-no-change' => 'Waše wobdźěłanje bu ignorowane, dokelž tekst njebu zm,ěnjeny.',
'postedit-confirmation' => 'Twoja změna je so składowała.',
'edit-already-exists' => 'Njebě móžno nowu stronu wutworić.
Eksistuje hižo.',
'defaultmessagetext' => 'Standardny tekst zdźělenki',
'content-failed-to-parse' => 'Parsowanje wobsaha $2 za model $1 je so njeporadźiło: $3',
'invalid-content-data' => 'Njepłaćiwe wobsahowe daty',
'content-not-allowed-here' => 'Wobsah "$1" njeje na stronje [[$2]] dowoleny',
'editwarning-warning' => 'Hdyž so strona wopušća, móža so změny zhubić, kotrež sy přewjedł. Jeli sy přizjewjeny, móžeš tute warnowanje we wotrězku "{{int:prefs-editing}}" swojich nastajenjow znjemóžnić.',
'editpage-notsupportedcontentformat-title' => 'Wobsahowy format so njepodpěruje',
'editpage-notsupportedcontentformat-text' => 'Wobsahowy format $1 so přez wobsahowy model $2 njepodpěruje.',

# Content models
'content-model-wikitext' => 'wikitekst',
'content-model-text' => 'luty tekst',
'content-model-javascript' => 'JavaScript',
'content-model-css' => 'CSS',

# Parser/template warnings
'expensive-parserfunction-warning' => 'Warnowanje: Tuta strona wobsahuje přewjele parserowych wołanjow.

Dyrbjała mjenje hač $2 {{PLURAL:$2|wołanje|wołanjej|wołanja|wołanjow}} měć, {{PLURAL:$1|je nětko $1 wołanje|stej nětko $1 wołanjej|su nětko $1 wołanja|je nětko $1 wołanjow}}.',
'expensive-parserfunction-category' => 'Strony, kotrež tajke parserowe funkcije přehusto wołaja, kotrež serwer poćežuja.',
'post-expand-template-inclusion-warning' => 'Warnowanje: Wulkosć zapřijatych předłohow je přewulka. Někotre předłohi so njezapřijmu.',
'post-expand-template-inclusion-category' => 'Strony, hdźež maksimalna wulkosć zapřijatych předłohow je překročena',
'post-expand-template-argument-warning' => 'Warnowanje: Tuta strona wobsahuje znajmjeńša jedyn předłohowy argument, kotryž ma přewulku espansisku wulkosć. Tute argumenty bu wuwostajene.',
'post-expand-template-argument-category' => 'Strony, kotrež wuwostajene předłohowe argumenty wobsahuja',
'parser-template-loop-warning' => 'Předłohowa sekla wotkryta: [[$1]]',
'parser-template-recursion-depth-warning' => 'Limit za rekursijnu hłubokosć předłohi překročeny ($1)',
'language-converter-depth-warning' => 'Limit hłubokosće rěčneho konwertera překročena ($1)',
'node-count-exceeded-category' => 'Strony, hdźež ličba sukow je překročena',
'node-count-exceeded-warning' => 'Strona je ličbu sukow překročiła',
'expansion-depth-exceeded-category' => 'Strony, hdźež ekspansiska hłubokosć je překročena',
'expansion-depth-exceeded-warning' => 'Strona je ekspansisku hłubokosć překročił',
'parser-unstrip-loop-warning' => 'Njeskónčna sekla namakana',
'parser-unstrip-recursion-limit' => 'Rekursiska hranica překročena ($1)',
'converter-manual-rule-error' => 'Zmylk w manuelnym prawidle rěčneho konwertowanja namakany',

# "Undo" feature
'undo-success' => 'Wersija je so wuspěšnje wotstroniła. Prošu přepruwuj deleka w přirunanskim napohledźe, hač twoja změna bu přewzata a klikń potom na „Składować”, zo by změnu składował.',
'undo-failure' => 'Wobdźěłanje njehodźeše so wotstronić, dokelž wotpowědny wotrězk bu mjeztym změnjeny.',
'undo-norev' => 'Změna njeda so cofnyć, dokelž njeeksistuje abo bu wušmórnjena.',
'undo-nochange' => 'Zda so, zo změna je so hižo cofnyła.',
'undo-summary' => 'Změna $1 [[Special:Contributions/$2|$2]] ([[User talk:$2|diskusija]]) bu cofnjena.',
'undo-summary-username-hidden' => 'Změna $1 schowaneho wužiwarja je so anulowała',

# Account creation failure
'cantcreateaccounttitle' => 'Wužiwarske konto njeda so wutworić.',
'cantcreateaccount-text' => "Wutworjenje wužiwarskeho konta z IP-adresy '''$1''' bu wot [[User:$3|$3]] zablokowane.

Přičina za blokowanje, podata wot $3, je: ''$2''",
'cantcreateaccount-range-text' => "Załoženje kontow z IP-adresow we wobłuku '''$1'', kotryž twoju IP-adresu wobsahuje ('''$4'''), je so wot [[User:$3|$3]] zablokowało.

Přičina podata wot $3 je ''$2''",

# History pages
'viewpagelogs' => 'protokole tuteje strony pokazać',
'nohistory' => 'Njeje žanych staršich wersijow strony.',
'currentrev' => 'Aktualna wersija',
'currentrev-asof' => 'Aktualna wersija wot $1',
'revisionasof' => 'Wersija wot $1',
'revision-info' => 'Wersija wot $1 wužiwarja $2',
'previousrevision' => '← Starša wersija',
'nextrevision' => 'Nowša wersija →',
'currentrevisionlink' => 'Aktualna wersija',
'cur' => 'akt',
'next' => 'přichodny',
'last' => 'posl',
'page_first' => 'spočatk',
'page_last' => 'kónc',
'histlegend' => 'Diff wubrać: Wubjer opciske pola za přirunanje a tłóč na enter abo tłóčku deleka.

Legenda: (akt) = rozdźěl k tuchwilnej wersiji, (posl) = rozdźěl k předchadnej wersiji, S = snadna změna.',
'history-fieldset-title' => 'Stawizny přepytać',
'history-show-deleted' => 'Jenož wušmórnjene',
'histfirst' => 'najstaršu',
'histlast' => 'najnowšu',
'historysize' => '({{PLURAL:$1|1 bajt|$1 bajtaj|$1 bajty|$1 bajtow}})',
'historyempty' => '(prózdna)',

# Revision feed
'history-feed-title' => 'Stawizny wersijow',
'history-feed-description' => 'Stawizny wersijow za tutu stronu w {{GRAMMAR:lokatiw|{{SITENAME}}}}',
'history-feed-item-nocomment' => '$1 w $2 hodź.',
'history-feed-empty' => 'Strona, kotruž sy požadał, njeeksistuje. Bu snano z wikija wotstronjena abo přesunjena. Móžeš tu [[Special:Search|w {{SITENAME}}]] za stronami z podobnym titulom pytać.',

# Revision deletion
'rev-deleted-comment' => '(Zjeće wotstronjene)',
'rev-deleted-user' => '(wužiwarske mjeno wotstronjene)',
'rev-deleted-event' => '(Protokolowa akcija bu wotstronjena)',
'rev-deleted-user-contribs' => '[wužiwarske mjeno wotstronjene abo IP-adresa wotstronjena - změna mjez přinoškami schowana]',
'rev-deleted-text-permission' => "Tuta wersija strony bu '''wušmórnjena'''.
Hlej podrobnosće w [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} protokolu wušmórnjenjow].",
'rev-deleted-text-unhide' => "Tuta wersija strony bu '''wušmórnjena'''.
Hlej podrobnosće w [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} protokolu wušmórnjenjow].
Móžeš [$1 sej tutu wersiju wobhladać], jeli chceš pokročować.",
'rev-suppressed-text-unhide' => "Tuta wersija strony bu '''potłóčena'''.
Hlej podrobnosće w [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} protokolu potłóčenjow].
Móžeš [$1 sej tutu wersiju wobhladać], jeli chceš pokročować.",
'rev-deleted-text-view' => "Tuta wersija strony bu '''wušmórnjena'''.
Móžeš sej ju wobhladać; hlej podrobnosće w [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} protokolu wušmórnjenjow].",
'rev-suppressed-text-view' => "Tuta wersija strony bu '''potłóčena'''.
Móžeš sej ju wobhladać; hlej podrobnosće w [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} protokolu potłóčenjow].",
'rev-deleted-no-diff' => "Njemóžeš sej tutón rozdźěl wobhladać, dokelž jedna z wersijow bu '''wušmórnjena'''.
Hlej podrobnosće w [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} protokolu wušmórnjenjow].",
'rev-suppressed-no-diff' => "Njemóžeš sej tutón rozdźěl wobhladać, dokelž jedna z wersijow bu '''zničena'''.",
'rev-deleted-unhide-diff' => "Jedna z wersijow tutoho rozdźěla bu '''wušmórnjena'''.
Podrobnosće hlej w [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} protokolu wušmórnjenjow].
Móžeš hišće [$1 sej tutón rozdźěl wobhladać], jeli chceš pokročować.",
'rev-suppressed-unhide-diff' => "Jedna z wersijow tutoho rozdźěla je so '''potłóčiła'''.
Za podrobnosće hlej [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} protokolu potłóčenjow].
Móžeš hišće [$1 sej tutón rozdźěl wobhladać], jeli chceš pokročować.",
'rev-deleted-diff-view' => "Jedna z wersijow tutoho rozdźěla je so '''wušmórnyła'''.
Móžeš sej tutón rozdźěl wobhladać; podrobnosće namakaš w [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} protokolu wušmórnjenjow].",
'rev-suppressed-diff-view' => "Jedna z wersijow tutoho rozdźěla je so '''potłóčiła'''.
Móžeš sej tutón rozdźěl wobhladać; podrobnosće namakaš w [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} protokolu potłóčenjow].",
'rev-delundel' => 'pokazać/schować',
'rev-showdeleted' => 'pokazać',
'revisiondelete' => 'Wersije wušmórnyć/wobnowić',
'revdelete-nooldid-title' => 'Njepłaćiwa cilowa wersija',
'revdelete-nooldid-text' => 'Pak njejsy cilowu wersiju podał, zo by tutu funkciju wuwjedł, podata wersija njeeksistuje pak pospytuješ aktualnu wersiju schować.',
'revdelete-no-file' => 'Podata dataja njeeksistuje.',
'revdelete-show-file-confirm' => 'Chceš sej woprawdźe wušmórnjenu wersiju dataje "<nowiki>$1</nowiki>" wot $2 $3  wobhladać?',
'revdelete-show-file-submit' => 'Haj',
'revdelete-selected' => "'''{{PLURAL:$2|Wubrana wersija|Wubranej wersiji|Wubrane wersije|Wubranych wersijow}} wot [[:$1]]:'''",
'logdelete-selected' => "'''{{PLURAL:$1|Wubrany zapisk z protokola|Wubranej zapiskaj z protokola|Wubrane zapiski z protokola|Wubrane zapiski z protokola}} za '''$1:''''''",
'revdelete-text' => "'''Wušmórnjene wersije a podawki so w stawiznach a protokolach dale jewja, ale dźěle jich wobsaha budu njepřistupne za zjawnosć.'''
Druzy administratorojo na {{GRAMMAR:lokatiw|{{SITENAME}}}} móža hišće na schowany tekst přistup měć a jón z pomocu samsneho interfejsa wobnowić, chibazo tež přidatne prawa su wobmjezowane.",
'revdelete-confirm' => 'Prošu potwjerdź, zo chceš to činić, zo rozumiš konsekwency a zo činiš to po [[{{MediaWiki:Policy-url}}|prawidłach]].',
'revdelete-suppress-text' => "Potłóčenje dyrbjało so '''jenož''' za slědowace pady wužiwać:
* Potencielnje křiwdźace informacije
* Njepřihódne wosobinske informacije
*: ''Bydlenske adresy a telefonowe čisła, čisła socialneho zawěsćenja atd.''",
'revdelete-legend' => 'Wobmjezowanja za widźomnosć nastajić',
'revdelete-hide-text' => 'Tekst wersije',
'revdelete-hide-image' => 'Wobsah wobraza schować',
'revdelete-hide-name' => 'Akciju a cil schować',
'revdelete-hide-comment' => 'Zjeće změnow',
'revdelete-hide-user' => 'Mjeno/IP-adresa wobdźěłarja',
'revdelete-hide-restricted' => 'Daty wot administratorow kaž tež te druhich wužiwarjow potłóčić',
'revdelete-radio-same' => '(njezměnić)',
'revdelete-radio-set' => 'Schowany',
'revdelete-radio-unset' => 'Widźomny',
'revdelete-suppress' => 'Přičinu wušmórnjenja tež za administratorow schować',
'revdelete-unsuppress' => 'Wobmjezowanja za wobnowjene wersije zběhnyć',
'revdelete-log' => 'Přičina:',
'revdelete-submit' => 'Na {{PLURAL:$1|wubranu wersiju|wubranej wersiji|wubrane wersije|wubrane wersije}} nałožować',
'revdelete-success' => "'''Widźomnosć wersije bu wuspěšnje zaktualizowana.'''",
'revdelete-failure' => "'''Wersijowa widźomnosć njeda so aktualizować:'''
$1",
'logdelete-success' => 'Widźomnosć zapiska bu wuspěšnje změnjena.',
'logdelete-failure' => "'''Protokolowa widźomnosć njeda so nastajić:'''
$1",
'revdel-restore' => 'Widźomnosć změnić',
'pagehist' => 'Stawizny strony',
'deletedhist' => 'Wušmórnjene stawizny',
'revdelete-hide-current' => 'Zmylk při chowanju zapiska wot $2, $1: to je aktualna wersija.
Njeda so schować.',
'revdelete-show-no-access' => 'Zmylk při pokazowanju zapiska wot $2, $1: tutón zapisk bu jako "wobmjezowany" markěrowany.
Nimaš přistup na njón.',
'revdelete-modify-no-access' => 'Zmylk při změnjenju zapiska wot $2, $1: tutón zapisk bu jako "wobmjezowany" markěrowany.
Nimaš přistup na njón.',
'revdelete-modify-missing' => 'Zmylk při změnjenju zapiska ID $1: pobrachuje w datowej bance!',
'revdelete-no-change' => "'''Warnowanje:''' zapisk wot $2, $1 je hižo požadane nastajenja widźomnosće měł.",
'revdelete-concurrent-change' => 'Zmylk při změnjenju zapiska wot $2, $1: zda so, zo jeho status je so wot někoho druheho změnił, mjeztym zo sy spytał jón změnić.
Prošu přepruwuj protokole.',
'revdelete-only-restricted' => 'Zmylk při chowanju zapiska wot $2, $1; njemóžeš zapiski před wočemi administratorow potłóčić, bjez toho zo wuběraš tež jednu z druhich widźomnosćowych opcijow.',
'revdelete-reason-dropdown' => '*Zwučene přičiny za wušmórnjenje
** Přeńdźenje awtorskeho prawa
** Njepřihódne komentary abo wosobinske informacije
** Njepřihódne wužiwarske mjeno
** Potencielnje ranjace informacije',
'revdelete-otherreason' => 'Druha/přidatna přičina:',
'revdelete-reasonotherlist' => 'Druha přičina',
'revdelete-edit-reasonlist' => 'Přičiny za wušmórnjenje wobdźěłać',
'revdelete-offender' => 'Awtor wersije:',

# Suppression log
'suppressionlog' => 'Protokol potłóčenjow',
'suppressionlogtext' => 'Deleka je lisćina wušmórnjenjow a zablokowanjow, inkluziwnje wobsaha schowaneho wot administratorow.
Hlej [[Special:BlockList|Lisćinu blokowanjow]] za lisćinu tuchwilnych zablokowanjow.',

# History merging
'mergehistory' => 'Stawizny stronow zjednoćić',
'mergehistory-header' => 'Tuta strona ći dowola wersije stawiznow žórłoweje strony na nowej stronje zjednoćić.
Zawěsć, zo tuta změna stawiznisku kontinuitu strony wobchowuje.',
'mergehistory-box' => 'Wersije dweju stronow zjednoćić:',
'mergehistory-from' => 'Žórłowa strona:',
'mergehistory-into' => 'Cilowa strona:',
'mergehistory-list' => 'Zjednoćujomne wersijowe stawizny',
'mergehistory-merge' => 'Slědowace wersije wot [[:$1|$1]] hodźa so z [[:$2|$2]] zjednoćić. Wužij špaltu z opciskimi tłóčatkami, zo by jenož te wersije zjednoćił, kotrež su so w podatym času a bo před nim wutworili. Wobkedźbuj, zo wužiwanje nawigaciskich wotkazow budźe tutu špaltu wróćo stajeć.',
'mergehistory-go' => 'Zjednoćujomne změny pokazać',
'mergehistory-submit' => 'Wersije zjednoćić',
'mergehistory-empty' => 'Njehodźa so žane wersije zjednoćeć.',
'mergehistory-success' => '$3 {{PLURAL:$3|wersija|wersiji|wersije|wersijow}} wot [[:$1]] wuspěšnje z [[:$2]] {{PLURAL:$3|zjednoćena|zjednoćenej|zjednoćene|zjednoćene}}.',
'mergehistory-fail' => 'Njeje móžno zjednócenje stawiznow přewjesć, prošu přepruwuj stronu a časowe parametry.',
'mergehistory-no-source' => 'Žórłowa strona $1 njeeksistuje.',
'mergehistory-no-destination' => 'Cilowa strona $1 njeeksistuje.',
'mergehistory-invalid-source' => 'Žórłowa strona dyrbi płaćiwy titul być.',
'mergehistory-invalid-destination' => 'Cilowa strona dyrbi płaćiwy titul być.',
'mergehistory-autocomment' => '[[:$1]] z [[:$2]] zjednoćeny',
'mergehistory-comment' => '[[:$1]] z [[:$2]] zjednoćeny: $3',
'mergehistory-same-destination' => 'Žórłowa a cilowa strona njesmějetej identiskej być',
'mergehistory-reason' => 'Přičina:',

# Merge log
'mergelog' => 'Protokol zjednoćenja',
'pagemerge-logentry' => '[[$1]] z [[$2]] zjednoćeny (do $3 {{PLURAL:$3|wersije|wersijow|wersijow|wersijow}})',
'revertmerge' => 'Zjednoćenje cofnyć',
'mergelogpagetext' => 'Deleka je lisćina najaktualnišich zjednoćenjow stawiznow dweju stronow.',

# Diffs
'history-title' => '$1: Wersijowe stawizny',
'difference-title' => '$1: Rozdźěl mjez wersijomaj',
'difference-title-multipage' => '$1 a $2: Rozdźěl mjez stronami',
'difference-multipage' => '(Rozdźěl mjez stronami)',
'lineno' => 'Rjadka $1:',
'compareselectedversions' => 'Wubranej wersiji přirunać',
'showhideselectedversions' => 'Wubrane wersije pokazać/schować',
'editundo' => 'cofnyć',
'diff-empty' => '(Žadyn rozdźěl)',
'diff-multi-sameuser' => '({{PLURAL:$1|Jedna mjezywersija|$1 mjezywersiji|$1 mjezywersije|$1 mjezywersijow}} wot samsneho wužiwarja {{PLURAL:$1|njepokazana|njepokazanej|njepokazane|njepokazanych}})',
'diff-multi-otherusers' => '({{PLURAL:$1|Jedna mjezywersija|$1 mjezywersiji|$1 mjezywersije|$1 mjezywersijow}} wot {{PLURAL:$2|jednoho dalšeho wužiwarja|$2 wužiwarjow}} {{PLURAL:$1|njepokazana|njepokazanej|njepokazane|njepokazanych}})',
'diff-multi-manyusers' => '({{PLURAL:$1|Jedna mjezywersija|$1 mjezywersiji|$1 mjezywersije|$1 mjezywersijow}} wot wjace hač {{PLURAL:$2|jednoho wužiwarja|$2 wužiwarjow|$2 wužiwarjow|$2 wužiwarjow}} {{PLURAL:$1|njepokazana|njepokazanej|njepokazane|njepokazane}})',
'difference-missing-revision' => '{{PLURAL:$2|Jedna wersija|$2 wersiji|$2 wersije|$2 wersijow}} tutoho rozdźěla ($1) {{PLURAL:$2|njeje so namakała|njejstej so namakałoj|njejsu namakali|njeje so namakało}}.

Přičina je zwjetša zestarjeny diferencny wotkaz k stronje, kotraž je so zhašała.
Podrobnosće móžeš w [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} protokolu wušmórnjenjow] namakać.',

# Search results
'searchresults' => 'Pytanske wuslědki',
'searchresults-title' => 'Pytanske wuslědki za "$1"',
'toomanymatches' => 'Přewjele pytanskich wuslědkow, prošu spytaj druhe wotprašenje.',
'titlematches' => 'Strony z wotpowědowacym titulom',
'textmatches' => 'Strony z wotpowědowacym tekstom',
'notextmatches' => 'Žane strony z wotpowědowacym tekstom',
'prevn' => '{{PLURAL:$1|předchadny $1|předchadnej $1|předchadne $1|předchadnych $1}}',
'nextn' => '{{PLURAL:$1|přichodny $1|přichodnej $1|přichodne $1|přichodnych $1}}',
'prevn-title' => '{{PLURAL:$1|Předchadny wuslědk|Předchadnej $1 wuslědkaj|Předchadne $1 wuslědki|Předchadnych $1 wuslědkow}}',
'nextn-title' => '{{PLURAL:$1|Přichodny wuslědk|Přichodnej $1 wuslědkaj|Přichodne $1 wuslědki|Přichodnych $1 wuslědkow}}',
'shown-title' => '$1 {{PLURAL:$1|wuslědk|wuslědkaj|wuslědki|wuslědkow}} na stronu pokazać',
'viewprevnext' => '($1 {{int:pipe-separator}} $2) ($3) pokazać',
'searchmenu-exists' => "'''Je strona z mjenom \"[[\$1]]\" na tutym wikiju'''",
'searchmenu-new' => '<strong>Wutwor stronu "[[:$1]]" na tutym wikiju!</strong> {{PLURAL:$2|0=|Hlej tež stronu namakanu z twojim pytanjom.|Hlej tež namakane pytanske wuslědki.}}',
'searchprofile-articles' => 'Wobsahowe strony',
'searchprofile-project' => 'Pomoc a projektowe strony',
'searchprofile-images' => 'Multimedia',
'searchprofile-everything' => 'Wšitko',
'searchprofile-advanced' => 'Rozšěrjeny',
'searchprofile-articles-tooltip' => 'W $1 pytać',
'searchprofile-project-tooltip' => 'W $1 pytać',
'searchprofile-images-tooltip' => 'Za datajemi pytać',
'searchprofile-everything-tooltip' => 'Cyły wobsah přepytać (inkluziwnje diskusijne strony)',
'searchprofile-advanced-tooltip' => 'W swójskich mjenowych rumach pytać',
'search-result-size' => '$1 ({{PLURAL:$2|1 słowo|$2 słowje|$2 słowa|$2 słowow}})',
'search-result-category-size' => '{{PLURAL:$1|1 čłon|$1 čłonaj|$1 čłonojo|$1 čłonow}} ({{PLURAL:$2|1 podkategorija|$2 podkategoriji|$2 podkategorije|$2 podkategorijow}}, {{PLURAL:$3|1 dataja|$3 dataji|$3 dataje|$3 datajow}})',
'search-result-score' => 'Relewanca: $1 %',
'search-redirect' => '(Daleposrědkowanje $1)',
'search-section' => '(wotrězk $1)',
'search-file-match' => '(wotpowěduje datajowemu wobsahej)',
'search-suggest' => 'Měnješe ty $1?',
'search-interwiki-caption' => 'Sotrowske projekty',
'search-interwiki-default' => '$1 wuslědki:',
'search-interwiki-more' => '(dalše)',
'search-relatedarticle' => 'Přiwuzne',
'searcheverything-enable' => 'We wšěch mjenowych rumach pytać',
'searchrelated' => 'přiwuzny',
'searchall' => 'wšě',
'showingresults' => "Deleka so hač {{PLURAL:$1|'''1''' wuslědk pokazuje|'''$1''' wuslědkaj pokazujetej|'''$1''' wuslědki pokazuja|'''$1''' wuslědkow pokazuje}}, započinajo z #'''$2'''.",
'showingresultsinrange' => 'Deleka so do {{PLURAL:$1|<strong>1</strong> wuslědka|<strong>$1</strong> wuslědkow}} we wobłuku <strong>$2</strong> hač do <strong>$3</strong> pokazuje.',
'showingresultsnum' => "Deleka so {{PLURAL:$3|'''1''' wuslědk pokazuje|'''$3''' wuslědkaj pokazujetej|'''$3''' wuslědki pokazuja|'''$3''' wuslědkow pokazuje}}, započinajo z #'''$2'''.",
'showingresultsheader' => "{{PLURAL:$5|Wuslědk '''$1''' z '''$3'''|Wuslědki '''$1 - $2''' z '''$3'''}} za '''$4'''",
'search-nonefound' => 'Njebuchu wuslědki namakane, kotrež naprašowanju wotpowěduja.',
'powersearch-legend' => 'Rozšěrjene pytanje',
'powersearch-ns' => 'W mjenowych rumach pytać:',
'powersearch-redir' => 'Daleposrědkowanja nalistować',
'powersearch-togglelabel' => 'Kontrolować:',
'powersearch-toggleall' => 'Wšě',
'powersearch-togglenone' => 'Žadyn',
'search-external' => 'Eksterne pytanje',
'searchdisabled' => 'Pytanje w {{GRAMMAR:lokatiw|{{SITENAME}}}} tuchwilu móžne njeje. Móžeš mjeztym z Google pytać. Wobkedźbuj, zo móža wuslědki z wobsaha {{GRAMMAR:genitiw|{{SITENAME}}}} zestarjene być.',
'search-error' => 'Při pytanju je so zmylk wustupił: $1',

# Preferences page
'preferences' => 'Nastajenja',
'mypreferences' => 'Nastajenja',
'prefs-edits' => 'Ličba změnow:',
'prefsnologintext2' => 'Dyrbiš so $1, zo by wužiwarske nastajenja postajił.',
'prefs-skin' => 'Drasta',
'skin-preview' => 'Přehlad',
'datedefault' => 'Žane nastajenje',
'prefs-beta' => 'Betafunkcije',
'prefs-datetime' => 'Datum a čas',
'prefs-labs' => 'Laborowe funkcije',
'prefs-user-pages' => 'Wužiwarske strony',
'prefs-personal' => 'Wužiwarski profil',
'prefs-rc' => 'Aktualne změny',
'prefs-watchlist' => 'Wobkedźbowanki',
'prefs-watchlist-days' => 'Ličba dnjow, kotrež maja so we wobkedźbowankach pokazać:',
'prefs-watchlist-days-max' => 'Maksimalnje $1 {{PLURAL:$1|dźeń|dnjej|dny|dnjow}}',
'prefs-watchlist-edits' => 'Ličba změnow, kotrež maja so we wobkedźbowankach pokazać:',
'prefs-watchlist-edits-max' => 'Maksimalna ličba: 1000',
'prefs-watchlist-token' => 'Marka wobkedźbowankow:',
'prefs-misc' => 'Wšelake nastajenja',
'prefs-resetpass' => 'Hesło změnić',
'prefs-changeemail' => 'E-mejl změnić',
'prefs-setemail' => 'E-mejlowu adresu postajić',
'prefs-email' => 'E-mejlowe opcije',
'prefs-rendering' => 'Napohlad',
'saveprefs' => 'Składować',
'restoreprefs' => 'Wšě standardne nastajenja wobnowić (w druhich wotrězkach)',
'prefs-editing' => 'Wobdźěłowanje',
'rows' => 'Rjadki:',
'columns' => 'Stołpiki:',
'searchresultshead' => 'Pytać',
'stub-threshold' => 'Wotkazowe formatowanje <a href="#" class="stub">małych stronow</a> (w bajtach):',
'stub-threshold-disabled' => 'Znjemóžnjeny',
'recentchangesdays' => 'Ličba dnjow w lisćinje aktualnych změnow:',
'recentchangesdays-max' => '(Maksimalnje $1 {{PLURAL:$1|dźeń|dnjej|dny|dnjow}})',
'recentchangescount' => 'Ličba stronow, kotraž ma so po standardźe pokazać:',
'prefs-help-recentchangescount' => 'To zapřijima aktualne změny, stawizny stronow a protokole.',
'prefs-help-watchlist-token2' => 'To je tajny kluč k webkanalej twojich wobkedźbowankow.
Něchtó, kotryž jón znaje, móže twoje wobkedźbowanki čitać, njedźěl jón tohodla.
[[Special:ResetTokens|Klikń tu, jeli dybiš jón wróćo stajić]].',
'savedprefs' => 'Nastajenja buchu składowane.',
'timezonelegend' => 'Časowe pasmo:',
'localtime' => 'Lokalny čas:',
'timezoneuseserverdefault' => 'Wikijowy standard serwera wužiwać ($1)',
'timezoneuseoffset' => 'Druhe (pódaj wotchilenje)',
'servertime' => 'Čas serwera:',
'guesstimezone' => 'Z wobhladowaka přewzać',
'timezoneregion-africa' => 'Afrika',
'timezoneregion-america' => 'Amerika',
'timezoneregion-antarctica' => 'Antarktika',
'timezoneregion-arctic' => 'Arktis',
'timezoneregion-asia' => 'Azija',
'timezoneregion-atlantic' => 'Atlantiski ocean',
'timezoneregion-australia' => 'Awstralija',
'timezoneregion-europe' => 'Europa',
'timezoneregion-indian' => 'Indiski ocean',
'timezoneregion-pacific' => 'Pacifiski ocean',
'allowemail' => 'Mejlki wot druhich wužiwarjow přijimować',
'prefs-searchoptions' => 'Pytać',
'prefs-namespaces' => 'Mjenowe rumy',
'defaultns' => 'Hewak w tutych mjenowych rumach pytać:',
'default' => 'standard',
'prefs-files' => 'Dataje',
'prefs-custom-css' => 'Swójski CSS',
'prefs-custom-js' => 'Swójski JS',
'prefs-common-css-js' => 'Zhromadny CSS/JS za w32 šaty:',
'prefs-reset-intro' => 'You can use this page to reset your preferences to the site defaults. This cannot be undone.
Móžeš tutu stronu wužiwać, zo by swoje nastajenja na standardne hódnoty sydła wróćo stajić. To njeda so anulować.',
'prefs-emailconfirm-label' => 'E-mejlowe wobkrućenje:',
'youremail' => 'E-mejl:',
'username' => 'Mjeno {{GENDER:$1|wužiwarja|wužiwarki}}:',
'uid' => 'ID {{GENDER:$1|wužiwarja|wužiwarki}}:',
'prefs-memberingroups' => '{{GENDER:$2|Čłon|Čłonka}} {{PLURAL:$1|wužiwarskeje skupiny|wužiwarskeju skupinow|wužiwarskich skupinow}}:',
'prefs-registration' => 'Čas registracije:',
'yourrealname' => 'Woprawdźite mjeno:',
'yourlanguage' => 'Rěč:',
'yourvariant' => 'Rěčna warianta:',
'prefs-help-variant' => 'Twoja preferowana warianta abo ortografija, w kotrejž so wikistrony maja zwobraznić.',
'yournick' => 'Podpis:',
'prefs-help-signature' => 'Komentary na diskusijnch stronach měli so přez "<nowiki>~~~~</nowiki>" podpisać, kotrež so do twojeje signatury a časoweho kołka konwertuje.',
'badsig' => 'Njepłaćiwa signatura, prošu HTML přepruwować.',
'badsiglength' => 'Twoja signatura je předołha.
Smě mjenje hač $1 {{PLURAL:$1|znamješko|znamješce|znamješka|znamješkow}} dołha być.',
'yourgender' => 'Što chceš podać?',
'gender-unknown' => 'Nochcu ničo wo tym podać',
'gender-male' => 'Wón wobdźěłuje wikistrony',
'gender-female' => 'Wona wobdźěłuje wikistrony',
'prefs-help-gender' => 'Tute podaće je opcionalne:
Softwara wužiwa jeho hódnotu, zo by će z pomocu wotpowědneho gramatikaliskeho roda narěčała a druhich na tebje pokazała.
Tuta informacija budźe zjawna.',
'email' => 'E-mejl',
'prefs-help-realname' => '* Woprawdźite mjeno (opcionalne): jeli so rozsudźiš to zapodać, budźe to so wužiwać, zo by tebi woprawnjenje za twoje dźěło dało.',
'prefs-help-email' => 'E-mejlowa adresa je opcionalna, ale zmóžnja ći nowe hesło emejlować, jeli sy swoje hesło zabył.',
'prefs-help-email-others' => 'Móžeš tež druhim dowolić, so z tobu přez swoju diskusijnu stronu do zwiska stajić, bjeztoho zo dyrbiš swoju identitu přeradźić.',
'prefs-help-email-required' => 'E-mejlowa adresa je trěbna.',
'prefs-info' => 'Zakładne informacije',
'prefs-i18n' => 'Internacionalizacija',
'prefs-signature' => 'Podpis',
'prefs-dateformat' => 'Datumowy format',
'prefs-timeoffset' => 'Časowe wotchilenje',
'prefs-advancedediting' => 'Powšitkowne nastajenja',
'prefs-editor' => 'Editor',
'prefs-preview' => 'Přehlad',
'prefs-advancedrc' => 'Rozšěrjene opcije',
'prefs-advancedrendering' => 'Rozšěrjene opcije',
'prefs-advancedsearchoptions' => 'Rozšěrjene opcije',
'prefs-advancedwatchlist' => 'Rozšěrjene opcije',
'prefs-displayrc' => 'Zwobraznjenske opcije',
'prefs-displaysearchoptions' => 'Zwobraznjenske opcije',
'prefs-displaywatchlist' => 'Zwobraznjenske opcije',
'prefs-tokenwatchlist' => 'Token',
'prefs-diffs' => 'Rozdźěle',
'prefs-help-prefershttps' => 'Tute nastajenje so po twojim přichodnym přizjewjenju wuskutkuje.',
'prefs-tabs-navigation-hint' => 'Tip: Móžeš lěwy a prawy šipk wužiwać, zo byšće mjez rajtarkami w lisćinje rajtarkow nawigował.',

# User preference: email validation using jQuery
'email-address-validity-valid' => 'Zda so, zo e-mejlowa adresa je płaćiwa',
'email-address-validity-invalid' => 'Zapodaj płaćiwu e-mejlowu adresu',

# User rights
'userrights' => 'Zrjadowanje wužiwarskich prawow',
'userrights-lookup-user' => 'Wužiwarske skupiny zrjadować',
'userrights-user-editname' => 'Wužiwarske mjeno:',
'editusergroup' => 'Wužiwarske skupiny wobdźěłać',
'editinguser' => "Změni wužiwarske prawa wužiwarja '''[[User:$1|$1]]''' $2",
'userrights-editusergroup' => 'Wužiwarske skupiny wobdźěłać',
'saveusergroups' => 'Wužiwarske skupiny składować',
'userrights-groupsmember' => 'Čłon wot:',
'userrights-groupsmember-auto' => 'Implicitny čłon wot:',
'userrights-groups-help' => 'Móžeš skupiny změnić, w kotrychž wužiwar je.
* Markěrowany kašćik woznamjenja, zo wužiwar je w tej skupinje.
* Njemarkěrowany kašćik woznamjenja, zo wužiwar w tej skupinje njeje.
* "*" podawa, zo njemóžeš skupinu wotstronić, tak ruče kaž sy ju přidał abo nawopak.',
'userrights-reason' => 'Přičina:',
'userrights-no-interwiki' => 'Nimaš prawo wužiwarske prawa w druhich wikijach změnić.',
'userrights-nodatabase' => 'Datowa banka $1 njeeksistuje abo lokalna njeje.',
'userrights-nologin' => 'Dyrbiš so z admininstratorowym kontom [[Special:UserLogin|přizjewić]], zo by wužiwarske prawa změnił.',
'userrights-notallowed' => 'Nimaš trěbne prawa, zo by wužiwarske prawa přidźěliło abo zebrało.',
'userrights-changeable-col' => 'Skupiny, kotrež móžeš změnić',
'userrights-unchangeable-col' => 'Skupiny, kotrež njemóžeš změnić',
'userrights-conflict' => 'Konflikt změnow wužiwarskich prawow! Prošu přepruwuj a wobkruć swoje změny.',
'userrights-removed-self' => 'Sy swoje prawa wuspěšnje wotstronił. Tohodla nimaš hižo přistup na tutu stronu měć.',

# Groups
'group' => 'Skupina:',
'group-user' => 'wužiwarjo',
'group-autoconfirmed' => 'Awtomatisce potwjerdźeni wužiwarjo',
'group-bot' => 'Boty',
'group-sysop' => 'Administratorojo',
'group-bureaucrat' => 'Běrokraća',
'group-suppress' => 'dohladowarjo',
'group-all' => '(wšě)',

'group-user-member' => '{{GENDER:$1|wužiwar|wužiwarka}}',
'group-autoconfirmed-member' => '{{GENDER:$1|awtomatisce potwjerdźeny wužiwar|awtomatisce potwjerdźena wužiwarka}}',
'group-bot-member' => '{{GENDER:$1|bot}}',
'group-sysop-member' => '{{GENDER:$1|administrator|administratorka}}',
'group-bureaucrat-member' => '{{GENDER:$1|běrokrat|běrokratka}}',
'group-suppress-member' => '{{GENDER:$1|dohladowar|dohladowarka}}',

'grouppage-user' => '{{ns:project}}:Wužiwarjo',
'grouppage-autoconfirmed' => '{{ns:project}}:Awtomatisce potwjerdźeni wužiwarjo',
'grouppage-bot' => '{{ns:project}}:Boćiki',
'grouppage-sysop' => '{{ns:project}}:Administratorojo',
'grouppage-bureaucrat' => '{{ns:project}}:Běrokraća',
'grouppage-suppress' => '{{ns:project}}:Dohladowanje',

# Rights
'right-read' => 'Strony čitać',
'right-edit' => 'Strony wobdźěłać',
'right-createpage' => 'Strony wutworić (kotrež diskusijne strony njejsu)',
'right-createtalk' => 'Diskusijne strony wutworić',
'right-createaccount' => 'Nowe wužiwarske konta wutworić',
'right-minoredit' => 'Změny jako snadne markěrować',
'right-move' => 'Strony přesunyć',
'right-move-subpages' => 'Strony z jich podstronami přesunyć',
'right-move-rootuserpages' => 'Hłowne wužiwarske strony přesunyć',
'right-movefile' => 'Dataje přesunyć',
'right-suppressredirect' => 'Při přesunjenju strony ze stareho mjena žane daleposrědkowanje wutworić',
'right-upload' => 'Dataje nahrać',
'right-reupload' => 'Eksistowacu dataju přepisać',
'right-reupload-own' => 'Eksistowacu dataju, kotraž bu wot samsneho wužiwarja nahrata, přepisać',
'right-reupload-shared' => 'Dataje w hromadźe wužiwanej repozitoriju lokalnje přepisać',
'right-upload_by_url' => 'Dataju z URL-adresy nahrać',
'right-purge' => 'Pufrowak sydła za stronu bjez wobkrućenskeje strony wuprózdnić',
'right-autoconfirmed' => 'Žane wobmjezowanje přez IP-bazowane limity',
'right-bot' => 'Ma so jako awtomatiski proces wobjednać',
'right-nominornewtalk' => 'Snadne změny k diskusijnym stronam zwobraznjenje nowych powěsćow wuwołać njedać',
'right-apihighlimits' => 'Wyše limity wi API-naprašowanjach wužiwać',
'right-writeapi' => 'writeAPI wužiwać',
'right-delete' => 'Strony zhašeć',
'right-bigdelete' => 'Strony z dołhimi stawiznami zničić',
'right-deletelogentry' => 'Jednotliwe protokolowe zapiski zhašeć a wobnowić',
'right-deleterevision' => 'Jednotliwe wersije wušmórnyć a wobnowić',
'right-deletedhistory' => 'Wušmórnjene zapiski stawiznow bjez přisłušneho teksta wobhladać',
'right-deletedtext' => 'Wušmórnjeny tekst a změny mjez wušmórnjenymi wersijemi sej wobhladać',
'right-browsearchive' => 'Zhašane strony pytać',
'right-undelete' => 'Strony wobnowić',
'right-suppressrevision' => 'Wersije, kotrež su před administratorami schowane, přepruwować a wobnowić',
'right-suppressionlog' => 'Priwatne protokole wobhladać',
'right-block' => 'Druhich wužiwarjow při wobdźěłowanju haćić',
'right-blockemail' => 'Wužiwarja při słanju e-mejlow haćić',
'right-hideuser' => 'Wužiwarske mjeno blokować a schować',
'right-ipblock-exempt' => 'Blokowanja IP, awtomatiske blokowanje a blokowanja wobwodow wobeńć',
'right-proxyunbannable' => 'Automatiske blokowanja proksyjow wobeńć',
'right-unblockself' => 'Swójske blokowanje zběhnyć',
'right-protect' => 'Škitowe schodźenki změnić a z kaskadami škitane strony wobdźěłać',
'right-editprotected' => 'Strony wobdźěłać, kotrež su přez "{{int:protect-level-sysop}}" škitane',
'right-editsemiprotected' => 'Strony wobdźěłać, kotrež su přez "{{int:protect-level-autoconfirmed}}" škitane',
'right-editinterface' => 'Wužiwarski powjerch wobdźěłać',
'right-editusercssjs' => 'Dataje CSS a JS druhich wužiwarjow wobdźěłać',
'right-editusercss' => 'Dataje CSS druhich wužiwarjow wobdźěłać',
'right-edituserjs' => 'Dataje JS druhich wužiwarjow wobdźěłać',
'right-editmyusercss' => 'Twoje swójske wužiwarske CSS-dataje wobdźěłać',
'right-editmyuserjs' => 'Twoje swójske wužiwarske JavaScript-dataje wobdźěłać',
'right-viewmywatchlist' => 'Sej swójske wobkedźbowanki wobhladać',
'right-editmywatchlist' => 'Swoje wobkedźbowanki wobdźěłać. Wobkedźbuj, zo někotre akcije hišće bjez tutoho prawa strony přidawaja.',
'right-viewmyprivateinfo' => 'Swójske priwatne daty sej wobhladać (na př. e-mejlowu adresu, woprawdźite mjeno)',
'right-editmyprivateinfo' => 'Swójske priwatne daty wobdźěłać (na př. e-mejlowu adresu, woprawdźite mjeno)',
'right-editmyoptions' => 'Twoje swójske nastajenja wobdźěłać',
'right-rollback' => 'Poslednjeho wužiwarja, kotryž wěstu stronu wobdźěła, spěšnje rewertować',
'right-markbotedits' => 'Rewertowane změny jako botowe změny markěrować',
'right-noratelimit' => 'Přez žane limity wobmjezowane',
'right-import' => 'Strony z druhich wikijow importować',
'right-importupload' => 'Strony přez nahraće datajow importować',
'right-patrol' => 'Změny jako dohladowane markěrować',
'right-autopatrol' => 'Změny awtomatisce jako dohladowane markěrować dać',
'right-patrolmarks' => 'Kontrolowe marki w najnowšich změnach wobhladać',
'right-unwatchedpages' => 'Lisćinu njewobkedźbowanych stronow wobhladać',
'right-mergehistory' => 'Stawizny stronow zjednoćić',
'right-userrights' => 'Wužiwarske prawa wobdźěłać',
'right-userrights-interwiki' => 'Wužiwarske prawa wužiwarjow druhich wikijow wobdźěłać',
'right-siteadmin' => 'Datowu banku zawrěć abo wotewrić',
'right-override-export-depth' => 'Strony inkluziwnje wotkazanych stronow hač do hłubokosće 5 eksportować',
'right-sendemail' => 'Druhim wužiwarjam e-mejl pósłać',
'right-passwordreset' => 'E-mejlki za wróćostajenje hesłow sej wobhladać',

# Special:Log/newusers
'newuserlogpage' => 'Protokol nowych wužiwarjow',
'newuserlogpagetext' => 'To je protokol wutworjenja nowych wužiwarskich kontow.',

# User rights log
'rightslog' => 'Protokol zrjadowanja wužiwarskich prawow',
'rightslogtext' => 'To je protokol změnow wužiwarskich prawow.',

# Associated actions - in the sentence "You do not have permission to X"
'action-read' => 'tutu stronu čitać',
'action-edit' => 'tutu stronu wobdźěłać',
'action-createpage' => 'strony wutworić',
'action-createtalk' => 'diskusijne strony wutworić',
'action-createaccount' => 'wužiwarske konto załožić',
'action-minoredit' => 'tutu změnu jako snadnu markěrować',
'action-move' => 'tutu stronu přesunyć',
'action-move-subpages' => 'tutu stronu a jeje podstrony přesunyć',
'action-move-rootuserpages' => 'hłowne wužiwarske strony přesunyć',
'action-movefile' => 'Tutu dataju přesunyć',
'action-upload' => 'tutu dataju nahrać',
'action-reupload' => 'eksistowacu dataju přepisać',
'action-reupload-shared' => 'tutu dataju na zhromadnym repozitoriju přepisać',
'action-upload_by_url' => 'Tutu dataju z webadresy (URL) nahrać',
'action-writeapi' => 'API za napisanje wužiwać',
'action-delete' => 'tutu stronu zničić',
'action-deleterevision' => 'tutu wersiju wušmórnyć',
'action-deletedhistory' => 'Zničene wersije tuteje strony zwobraznić',
'action-browsearchive' => 'Zničene strony pytać',
'action-undelete' => 'tutu stronu wobnowić',
'action-suppressrevision' => 'Tutu schowanu wersiju přepruwować a wobnowić',
'action-suppressionlog' => 'Tutón priwatny protokol wobhladać',
'action-block' => 'Wobdźěłanju přez wužiwarja zadźěwać',
'action-protect' => 'škitowe runiny za tutu stronu změnić',
'action-rollback' => 'Změny poslednjeho wužiwarja, kiž je wěstu stronu wobdźěłał, spěšnje wróćo stajić',
'action-import' => 'Strony z druheho wikija importować',
'action-importupload' => 'Strony z datajoweho nahraća importować',
'action-patrol' => 'Změny druhich wužiwarjiw jako dohladowane markować',
'action-autopatrol' => 'twoju změnu jako dohladowanu markować dać',
'action-unwatchedpages' => 'lisćinu njewobkedźbowanych stronow zwobraznić',
'action-mergehistory' => 'stawizny tuteje strony zjednoćić',
'action-userrights' => 'wšě wužiwarske prawa wobdźěłać',
'action-userrights-interwiki' => 'Wužiwarske prawa wužiwarjow w druhich wikijach wobdźěłać',
'action-siteadmin' => 'Datowu banku zawrěć abo wotewrić',
'action-sendemail' => 'E-mejle pósłać',
'action-editmywatchlist' => 'twoje wobkedźbowanki wobdźěłać',
'action-viewmywatchlist' => 'Sej swójske wobkedźbowanki wobhladać',
'action-viewmyprivateinfo' => 'twoje priwatne informacije sej wobhladać',
'action-editmyprivateinfo' => 'twoje priwatne informacije wobdźěłać',

# Recent changes
'nchanges' => '$1 {{PLURAL:$1|změna|změnje|změny|změnow}}',
'enhancedrc-since-last-visit' => '$1 {{PLURAL:$1|wot poslednjeho wopyta}}',
'enhancedrc-history' => 'historija',
'recentchanges' => 'Aktualne změny',
'recentchanges-legend' => 'Opcije aktualnych změnow',
'recentchanges-summary' => 'Na tutej stronje móžeš najaktualniše změny w {{GRAMMAR:lokatiw|{{SITENAME}}}} wobkedźbować.',
'recentchanges-noresult' => 'Žane změny za daty čas tutym kriterijam njewotpowěduja.',
'recentchanges-feed-description' => 'Slěduj najaktualniše změny {{GRAMMAR:genitiw|{{SITENAME}}}} w tutym kanalu.',
'recentchanges-label-newpage' => 'Tuta změna je nowu stronu wutworiła',
'recentchanges-label-minor' => 'To je snadna změna',
'recentchanges-label-bot' => 'Tuta změna bu přez roboćik přewjedźena',
'recentchanges-label-unpatrolled' => 'Tuta změnu hišće njebu přepruwowana',
'recentchanges-label-plusminus' => 'Změnjena wulkosć strony (w bajtach)',
'recentchanges-legend-heading' => "'''Legenda:'''",
'recentchanges-legend-newpage' => '(hlej tež [[Special:NewPages|lisćinu nowych stronow]])',
'recentchanges-legend-plusminus' => "(''±123'')",
'rcnotefrom' => 'Deleka so změny wot <strong>$2</strong> pokazuja (hač k <strong>$1</strong>).',
'rclistfrom' => 'Nowe změny pokazać, započinajo z $1',
'rcshowhideminor' => 'snadne změny $1',
'rcshowhideminor-show' => 'Pokazać',
'rcshowhideminor-hide' => 'Schować',
'rcshowhidebots' => 'Boćiki $1',
'rcshowhidebots-show' => 'Pokazać',
'rcshowhidebots-hide' => 'Schować',
'rcshowhideliu' => 'Zregistrowani wužiwarjo $1',
'rcshowhideliu-show' => 'Pokazać',
'rcshowhideliu-hide' => 'Schować',
'rcshowhideanons' => 'Anonymni wužiwarjo $1',
'rcshowhideanons-show' => 'Pokazać',
'rcshowhideanons-hide' => 'Schować',
'rcshowhidepatr' => 'Dohladowane změny $1',
'rcshowhidepatr-show' => 'Pokazać',
'rcshowhidepatr-hide' => 'Schować',
'rcshowhidemine' => 'moje změny $1',
'rcshowhidemine-show' => 'Pokazać',
'rcshowhidemine-hide' => 'Schować',
'rclinks' => 'Poslednje $1 změnow poslednich $2 dnjow pokazać<br />$3',
'diff' => 'rozdźěl',
'hist' => 'wersije',
'hide' => 'schować',
'show' => 'pokazać',
'minoreditletter' => 'S',
'newpageletter' => 'N',
'boteditletter' => 'B',
'number_of_watching_users_pageview' => '[$1 {{PLURAL:$1|wobkedźbowacy wužiwar|wobkedźbowacaj wužiwarjej|wobkedźbowacy wužiwarjo|wobkedźbowacych wužiwarjow}}]',
'rc_categories' => 'Jenož kategorije (dźělene z "|")',
'rc_categories_any' => 'wšě',
'rc-change-size' => '$1 {{PLURAL:$1|bajt|bajtaj|bajty|bajtow}}',
'rc-change-size-new' => '$1 {{PLURAL:$1|bajt|bajtaj|bajty|bajtow}} po změnje',
'newsectionsummary' => 'Nowy wotrězk: /* $1 */',
'rc-enhanced-expand' => 'Podrobnosće pokazać',
'rc-enhanced-hide' => 'Podrobnosće schować',
'rc-old-title' => 'prěnjotnje wutworjeny jako "$1"',

# Recent changes linked
'recentchangeslinked' => 'Změny na zwjazanych stronach',
'recentchangeslinked-feed' => 'Změny zwjazanych stron',
'recentchangeslinked-toolbox' => 'Změny na zwjazanych stronach',
'recentchangeslinked-title' => 'Změny na stronach, kotrež su z „$1“ wotkazane',
'recentchangeslinked-summary' => "Tuta strona nalistuje poslednje změny na wotkazanych stronach (resp. pola kategorijow na čłonach kategorije).
Strony na [[Special:Watchlist|wobkedźbowankach]] su '''tučne'''.",
'recentchangeslinked-page' => 'Mjeno strony:',
'recentchangeslinked-to' => 'Změny na stronach pokazać, kotrež na datu stronu wotkazuja',

# Upload
'upload' => 'Dataju nahrać',
'uploadbtn' => 'Dataju nahrać',
'reuploaddesc' => 'Nahraće přetorhnyć a so k nahrawanskemu formularej wróćić.',
'upload-tryagain' => 'Změnjene datajowe wopisanje wotpósłać',
'uploadnologin' => 'Njepřizjewjeny',
'uploadnologintext' => 'Dyrbiš so $1, zo by dataje nahrawać móhł.',
'upload_directory_missing' => 'Zapis nahraćow ($1) faluje a njeda so přez webserwer wutworić.',
'upload_directory_read_only' => 'Nahrawanski zapis ($1) njehodźi so přez webserwer popisować.',
'uploaderror' => 'Zmylk při nahrawanju',
'upload-recreate-warning' => "'''Warnowanje: Dataja z tym mjenom je so zhašała abo přesunyła.'''

Protokolej zhašenjow a přesunjenjow za tutu stronu stej tu k dobroćiwemu wužiwanju podatej:",
'uploadtext' => "Wužij slědowacy formular, zo by nowe dataje nahrał.
Zo by prjedy nahrate dataje wobhladał abo pytał dźi k [[Special:FileList|lisćinje nahratych datajow]], nahraća so tež w [[Special:Log/upload|protokolu nahraćow]], wušmórnjenja  [[Special:Log/delete|protokolu wušmornjenjow]] protokoluja.

Zo by dataju do strony zapřijał, wužij wotkaz w jednej ze slědowacych formow:
* '''<code><nowiki>[[</nowiki>{{ns:file}}<nowiki>:Dataja.jpg]]</nowiki></code>''', zo by połnu wersiju dataje wužiwał
* '''<code><nowiki>[[</nowiki>{{ns:file}}<nowiki>:Dataja.png|200px|thumb|left|alternatiwny tekst]]</nowiki></code>''', zo by wobraz ze šěrokosću 200 pikselow do kašćika na lěwej kromje z alternatiwnym tekstom jako wopisanje wužiwał
* '''<code><nowiki>[[</nowiki>{{ns:media}}<nowiki>:Dataja.ogg]]</nowiki></code>''' zo by direktnje k dataji wotkazał, bjeztoho zo by so dataja zwobrazniła",
'upload-permitted' => 'Dowolene datajowe typy: $1.',
'upload-preferred' => 'Preferowane datajowe typy: $1.',
'upload-prohibited' => 'Zakazane datajowe typy: $1.',
'uploadlog' => 'Protokol nahraćow',
'uploadlogpage' => 'Protokol nahraćow',
'uploadlogpagetext' => 'Deleka je lisćina najnowšich nahratych datajow.
Hlej [[Special:NewFiles|galeriju nowych datajow]] za wizuelny přehlad.',
'filename' => 'Mjeno dataje',
'filedesc' => 'Zjeće',
'fileuploadsummary' => 'Zjeće:',
'filereuploadsummary' => 'Datajowe změny:',
'filestatus' => 'Licenca:',
'filesource' => 'Žórło:',
'uploadedfiles' => 'Nahrate dataje',
'ignorewarning' => 'Warnowanje ignorować a dataju najebać toho składować.',
'ignorewarnings' => 'Wšě warnowanja ignorować',
'minlength1' => 'Datajowe mjena dyrbja znajmjeńša jedyn pismik dołhe być.',
'illegalfilename' => 'Mjeno dataje „$1” wobsahuje znamješka, kotrež w titlach stronow dowolene njejsu. Prošu přemjenuj dataju a spytaj ju znowa nahrać.',
'filename-toolong' => 'Datajowe mjena njesmědźa dlěše hač 240 bajtow być.',
'badfilename' => 'Mjeno dataje bu do „$1” změnjene.',
'filetype-mime-mismatch' => 'Datajowy sufiks ".$1" njewotpowěduje MIME-typej dataje ($2).',
'filetype-badmime' => 'Dataje typa MIME „$1” njesmědźa so nahrać.',
'filetype-bad-ie-mime' => 'Tuta dataja njeda so nahrać, dokelž Internet Explorer by ju jako "$1" interpretował, kotryž je njedowoleny a potencielnje strašny datajowy typ.',
'filetype-unwanted-type' => "'''\".\$1\"''' je njepožadany datajowy typ.
{{PLURAL:\$3|Preferowany datajowy typ je|Preferowanej datajowej typaj stej|Preferowane datajowe typy su|Preferowane datajowe typy su}} \$2.",
'filetype-banned-type' => '\'\'\'".$1"\'\'\' {{PLURAL:$4|dowoleny datajowy typ njeje|dowolenej datajowej typaj njejstej|dowolene datajowe typy njejsu|dowolene datajowe typy njejsu}}.
{{PLURAL:$3|Dowoleny datajowy typ je|Dowolenej datajowej typaj stej|Dowolene datajowe typy su|Dowolene datajowe typy su}} $2.',
'filetype-missing' => 'Dataja nima kóncowku (na přikład „.jpg“).',
'empty-file' => 'Dataja, kotruž sy wotpósłał, bě prózdna.',
'file-too-large' => 'Dataja, kotruž sy wotpósłał, bě přewulka.',
'filename-tooshort' => 'Datajowe mjeno je překrótke.',
'filetype-banned' => 'Tutón datajowy typ je zatamany.',
'verification-error' => 'Tuta dataja žane datajowe přepruwowanje njepřeběhny.',
'hookaborted' => 'Změna, kotruž pospytowaše přewjesć, bu přez rozšěrjensku hoku přetorhnjena.',
'illegal-filename' => 'Datajowe mjeno njeje dowolene.',
'overwrite' => 'Přepisowanje eksistowaceje dataje njeje dowolene.',
'unknown-error' => 'Njeznaty zmylk je wustupił.',
'tmp-create-error' => 'Temporerna dataja njeda so wutworić.',
'tmp-write-error' => 'Zmylk při pisanju temporerneje dataje.',
'large-file' => 'Doporuča so, zo dataje wjetše hač $1 njejsu; tuta dataja ma $2.',
'largefileserver' => 'Dataja je wjetša hač serwer dowoluje.',
'emptyfile' => 'Dataja, kotruž sy nahrał, zda so prózdna być. Z přičinu móhł pisanski zmylk w mjenje dataje być. Prošu pruwuj hač chceš ju woprawdźe nahrać.',
'windows-nonascii-filename' => 'Tutón wiki datajowe mjena ze specialnymi znamješkami njepodpěruje.',
'fileexists' => 'Dataja z tutym mjenom hižo eksistuje.
Jeli kliknješ na „Składować”, so wona přepisuje.
Prošu pruwuj <strong>[[:$1]]</strong> jeli njejsy wěsty hač chceš ju změnić.
[[$1|thumb]]',
'filepageexists' => 'Wopisanska strona za tutu dataju bu hižo pola <strong>[[:$1]]</strong> wutworjena,
ale tuchwilu dataja z tutym mjenom njeeksistuje.
Zjeće, kotrež zapodaš, njebudźe so na wopisanskej stronje jewić.
Zo by so twoje zjeće tam jewiło, dyrbiš ju manuelnje wobdźěłać.
[[$1|thumb]]',
'fileexists-extension' => 'Dataja z podobnym mjenom hižo eksistuje: [[$2|thumb]]
* Mjeno dataje, kotruž chceš nahrać: <strong>[[:$1]]</strong>
* Mjeno eksistowaceje dataje: <strong>[[:$2]]</strong>
Prošu wubjer druhe mjeno.',
'fileexists-thumbnail-yes' => "Dataja zda so minaturka ''(thumbnail)'' być. [[$1|thumb]]
Prošu přepruwuj dataju <strong>[[:$1]]</strong>.
Jeli je to wobraz w originalnej wulkosći, njetrjebaš minaturku nahrać.",
'file-thumbnail-no' => "Mjeno dataje započina so z <strong>$1</strong>. Zda so, zo to je wobraz z redukowanej wulkosću ''(thumbnail)'' pokazać.
Jeli maš tutón wobraz z połnym rozeznaćom, nahraj tutón, hewak změń prošu datajowe mjeno.",
'fileexists-forbidden' => 'Dataja z tutym mjenom hižo eksistuje a njeda so přepisać. Jeli hišće chceš swoju dataju nahrać, dźi  prošu wróćo a wuž nowe mjeno. [[File:$1|thumb|center|$1]]',
'fileexists-shared-forbidden' => 'Dataja z tutym mjenom hižo eksistuje w zhromadnej chowarni. Jeli hišće chceš swoju dataju nahrać,  dźi prošu wróćo a wužij nowe mjeno. [[File:$1|thumb|center|$1]]',
'file-exists-duplicate' => 'Tuta dataja je duplikat {{PLURAL:$1|slědowaceje dataje|slědowaceju datajow|slědowacych datajow|slědowacych datajow}}:',
'file-deleted-duplicate' => 'Dataja, kotraž je identiska z tutej dataju ([[:$1]]), je so prjedy zničiła. Ty měł stawizny zničenja tuteje dataje přepruwować, prjedy pokročuješ z jeje zasonahrawanjom.',
'file-deleted-duplicate-notitle' => 'Z tutej dataju identiska dataja je so prjedy zhašała, a titul je so potłóčił. Ty měł so někoho prašeć, kotryž ma móžnosć, sej potłóčene daty wobhladać, zo by situaciju přepruwował, prjedy hač ju znowa nahraješ.',
'uploadwarning' => 'Warnowanje',
'uploadwarning-text' => 'Prošu změń slědowace datajowe wopisanje a spytaj hišće raz.',
'savefile' => 'Dataju składować',
'uploadedimage' => 'je dataju „[[$1]]” nahrał',
'overwroteimage' => 'je nowu wersiju dataje „[[$1]]“ nahrał',
'uploaddisabled' => 'Wodaj, nahraće je znjemóžnjene.',
'copyuploaddisabled' => 'Nahraće přez URL znjemóžnjene.',
'uploadfromurl-queued' => 'Twoje nahraće je nětko w čakanskim rynku.',
'uploaddisabledtext' => 'Nahraće datajow je znjemóžnjene.',
'php-uploaddisabledtext' => 'Nahraća PHP-datajow su znjemóžnjene. Prošu skontroluj nastajenje file_uploads.',
'uploadscripted' => 'Dataja wobsahuje HTML- abo skriptowy kod, kotryž móhł so mylnje přez wobhladowak wuwjesć.',
'uploadscriptednamespace' => "Tuta SVG-dataja wobsahuje njedowoleny mjenowy rum '$1'",
'uploadinvalidxml' => 'XML w nahratej dataji njeda so parsować.',
'uploadvirus' => 'Dataja wirus wobsahuje! Podrobnosće: $1',
'uploadjava' => 'Tuta dataja je ZIP-dataja, kotraž .class-dataju z Javy wobsahuje.
Nahraće datajow Javy njeje dowolene, dokelž móhli wobeńdźenje wěstotnych wobmjezowanjow zmóžnić.',
'upload-source' => 'Žórłowa dataja',
'sourcefilename' => 'Mjeno žórłoweje dataje:',
'sourceurl' => 'URL žórła:',
'destfilename' => 'Mjeno ciloweje dataje:',
'upload-maxfilesize' => 'Maksimalna datajowa wulkosć: $1',
'upload-description' => 'Datajowe wopisanje',
'upload-options' => 'Nahrawanske opcije',
'watchthisupload' => 'Tutu dataju wobkedźbować',
'filewasdeleted' => 'Dataja z tutym mjenom bu prjedy nahrata a pozdźišo wušmórnjena. Prošu přepruwuj $1 prjedy hač ju znowa składuješ.',
'filename-bad-prefix' => "Datajowe mjeno započina so z '''„$1“'''. To je powšitkownje datajowe mjeno, kotrež digitalna kamera zwjetša dawa a kotrež tohodla jara wuprajiwe njeje. Prošu wubjer bóle wuprajiwe mjeno za twoju dataju.",
'filename-prefix-blacklist' => ' #<!-- Njezměń tutu linku! --> <pre>
# Syntaksa:
#   * Wšo wot znamješka "#" hač ke kóncej linki je komentar
#   * Kóžda njeprózdna linka je prefiks za typiske datajowe mjena,
# kotrež so awtomatisce přez digitalne kamery připokazuja
CIMG # Casio
DSC_ # Nikon
DSCF # Fuji
DSCN # Nikon
DUW # někptre mobilne telefony
IMG # generic
JD # Jenoptik
MGP # Pentax
PICT # misc.
 #</pre> <!-- Njezměń tutu linku! -->',
'upload-success-subj' => 'Dataja bu wuspěšnje nahrata',
'upload-success-msg' => 'Twoje nahraće z [$2] je wuspěšne było: Steji tu k dispoziciji: [[:{{ns:file}}:$1]]',
'upload-failure-subj' => 'Nahrawanski problem',
'upload-failure-msg' => 'Bě problem z twojim nahraćom [$2]:

$1',
'upload-warning-subj' => 'Nahraćowe warnowanje',
'upload-warning-msg' => 'Bě problem z twojim nahraćom [$2]. Wróć so k [[Special:Upload/stash/$1|nahrawanskemu formularej]], zo by tutón problem wotstronił.',

'upload-proto-error' => 'Wopačny protokol',
'upload-proto-error-text' => 'URL dyrbi so z <code>http://</code> abo <code>ftp://</code> započeć.',
'upload-file-error' => 'Nutřkowny zmylk',
'upload-file-error-text' => 'Nutřkowny zmylk wustupi při pospytu, nachwilnu dataju na serwerje wutworić. Prošu skontaktuj [[Special:ListUsers/sysop|administratora]].',
'upload-misc-error' => 'Njeznaty zmylk při nahraću',
'upload-misc-error-text' => 'Njeznaty zmylk wustupi při nahrawanju. Prošu přepruwuj, hač URL je płaćiwy a přistupny a spytaj hišće raz. Jeli problem dale eksistuje, skontaktuj [[Special:ListUsers/sysop|administratora]].',
'upload-too-many-redirects' => 'URL wobsahowaše přewjele daleposrědkowanjow',
'upload-unknown-size' => 'Njeznata wulkosć',
'upload-http-error' => 'HTTP-zmylk je wustupił: $1',
'upload-copy-upload-invalid-domain' => 'Kopijowe nahraća z tuteje domeny k dispoziciji njesteji.',

# File backend
'backend-fail-stream' => 'Dataja $1 njeda so přenjesć.',
'backend-fail-backup' => 'Dataja $1 njeda so zawěsćić.',
'backend-fail-notexists' => 'Dataja $1 njeeksistuje.',
'backend-fail-hashes' => 'Sypanske hódnoty dataje njedadźa so za přirunanje wotwołać.',
'backend-fail-notsame' => 'Dataja, kotraž identiska njeje, hižo pola $1 eksistuje.',
'backend-fail-invalidpath' => '$1 płaćiwy pućik za składowanje njeje.',
'backend-fail-delete' => 'Dataja $1 njeda so zhašeć.',
'backend-fail-describe' => 'Metadaty za dataju "$1" njedadźa so změnić.',
'backend-fail-alreadyexists' => 'Dataja $1 hižo eksistuje.',
'backend-fail-store' => 'Dataja $1 njeda so pod $2 składować',
'backend-fail-copy' => 'Dataja $1 njeda so do $2 kopěrować',
'backend-fail-move' => 'Dataja $1 njeda so do $2 přesunyć',
'backend-fail-opentemp' => 'Temporerna dataja njeda so wočinić.',
'backend-fail-writetemp' => 'Njeda so do temporerneje dataje pisać.',
'backend-fail-closetemp' => 'Temporerna dataja njeda so začinić.',
'backend-fail-read' => 'Dataja $1 njeda so čitać',
'backend-fail-create' => 'Dataja $1 njeda so pisać.',
'backend-fail-maxsize' => 'Dataja $1 njeda so pisać, dokelž je wjetša hač {{PLURAL:$2|jedyn bajt|$2 bajtaj|$2 bajty|$2 bajtow}}.',
'backend-fail-readonly' => 'Składowanski backend "$1" da so tuchwilu jenož čitać. Přičina je była: "$2"',
'backend-fail-synced' => 'Dataja "$1" je znutřka interneho składowanskeho backenda w inkonsistentnym stawje',
'backend-fail-connect' => 'Zwisk z datajowym składowanskim backendom "$1" móžno njeje.',
'backend-fail-internal' => 'W składowanskim backendźe "$1" je njeznaty zmylk wustupił.',
'backend-fail-contenttype' => 'Wobsahowy typ dataje, kotraž ma so na "$1" składować, njeda so zwěsćić.',
'backend-fail-batchsize' => 'Staplowa dataja, kotraž {{PLURAL:$1|jednu operaciju|$1 operaciji|$1 operacije|$1 operacijow}} wobsahuje,  je so  na składowanski backend pósłała; limit je $2 {{PLURAL:$2|operaciju|operaciji|operacije|operacijow}} .',
'backend-fail-usable' => 'Dataja "$1" njeda so njedosahacych prawow  abo falowacych zapisow dla ani čitać ani pisać.',

# File journal errors
'filejournal-fail-dbconnect' => 'Njeje žadyn zwisk ze žurnalowej datowej banku za składowanski backend "$1" móžno.',
'filejournal-fail-dbquery' => 'Žurnalowa datowa banka za składowanski backend "$1" njeda so aktualizować.',

# Lock manager
'lockmanager-notlocked' => '"$1" njeda so wotewrić; njeje zawrjeny.',
'lockmanager-fail-closelock' => 'Zawrjenska dataja njeda so za "$1" začinić.',
'lockmanager-fail-deletelock' => 'Zawrjenska dataja njeda so za "$1" zhašeć.',
'lockmanager-fail-acquirelock' => 'Zawěra za "$1" njeda so dóstać.',
'lockmanager-fail-openlock' => 'Zawrjenska dataja njeda so za "$1" wočinić.',
'lockmanager-fail-releaselock' => 'Zawěra za "$1" njeda so dopušćić.',
'lockmanager-fail-db-bucket' => 'W zběrniku $1 njeda so dosć zawrjenskich datowych bankow kontaktować',
'lockmanager-fail-db-release' => 'Zawěry na datowu banku $1 njedadźa so dopušćić',
'lockmanager-fail-svr-acquire' => 'Zawěry na serwer $1 njehodźa so wotwołać.',
'lockmanager-fail-svr-release' => 'Zawěry na serwer $1 njedadźa so dopušćić',

# ZipDirectoryReader
'zip-file-open-error' => 'Při wočinjenju dataje za ZIP-přepruwowanje je zmylk wustupił.',
'zip-wrong-format' => 'Podata dataja ZIP-dataja njebě.',
'zip-bad' => 'Tute ZIP-dataja je wobškodźena abo z hinašich přičinow nječitajomna.
Tohodla njeda so jeje wěstota porjadnje přepruwować.',
'zip-unsupported' => 'Tuta dataja je ZIP-dataja, kotraž ZIP-funkcije wužiwa, kotrež so wot MediaWiki njepodpěruja.
Tohodla njeda so jeje wěstota porjadnje přepruwować.',

# Special:UploadStash
'uploadstash' => 'Schowanje nahratych datajow',
'uploadstash-summary' => 'Tuta strona zmóžnja přistup k datajam, kotrež su nahrate (abo so nahrawaja), ale hišće njejsu do wikija wozjejwene. Tute dataje  za nikoho widźomne njejsu, jenož za wužiwarja, kiž je je nahrał.',
'uploadstash-clear' => 'Schowane nahrate dataje zhašeć',
'uploadstash-nofiles' => 'Nimaš žane schowane nahrate dataje.',
'uploadstash-badtoken' => 'Wuwjedźenje teje akcije je so njeporadźiło, snano dokelž twoje wobdźěłowanske daty su spadnjene. Spytaj hišće raz.',
'uploadstash-errclear' => 'Wotstronjenje datajow je so njeporadźiło.',
'uploadstash-refresh' => 'Lisćinu datajow aktualizować',
'invalid-chunk-offset' => 'Njepłaćiwy startowy dypk',

# img_auth script messages
'img-auth-accessdenied' => 'Přistup wotpokazany',
'img-auth-nopathinfo' => 'PATH_INFO faluje.
Twój serwer njeje za to konfigurował, zo by tute informacije dale posrědkował.
By móhł na CGI bazować a ani njemóže img_auth podpěrać.
Hlej https://www.mediawiki.org/wiki/Manual:Image_Authorization.',
'img-auth-notindir' => 'Požadana šćežka w konfigurowanym nahraćowym zapisu njeje.',
'img-auth-badtitle' => 'Njeje móžno z "$1" płaćiwy titul tworić.',
'img-auth-nologinnWL' => 'Njejsy přizjewjeny a "$1" w běłej lisćinje njeje.',
'img-auth-nofile' => 'Dataja "$1" njeeksistuje.',
'img-auth-isdir' => 'Popsytuješ na zapis "$1" přistup měć.
Jenož datajowy přistup je dowoleny.',
'img-auth-streaming' => '"$1" so prudźi.',
'img-auth-public' => 'Funkcija img_auth.php je za wudaće datjow z priwatneho wikija.
Tutón wiki je jako zjawny wiki konfigurowany.
Za optimalnu wěstotu je img_auth.php znjemóžnjeny.',
'img-auth-noread' => 'Wužiwar nima přistup, zo by "$1" čitał.',
'img-auth-bad-query-string' => 'URL ma njepłaćiwy naprašowanski znamješkowy rjećazk.',

# HTTP errors
'http-invalid-url' => 'Njepłaćiwy URL: $1',
'http-invalid-scheme' => 'URL ze šemu „$1“ so njepodpěruja.',
'http-request-error' => 'Naprašowanje HTTP je so njeznateho zmylka dla njeporadźiło.',
'http-read-error' => 'Čitanski zmylk HTTP.',
'http-timed-out' => 'Naprašowanje HTTP je čas překročiło.',
'http-curl-error' => 'Zmylk při wołanju URL: $1',
'http-bad-status' => 'Problem je za HTTP-naprašowanje wustupił: $1 $2',

# Some likely curl errors. More could be added from <http://curl.haxx.se/libcurl/c/libcurl-errors.html>
'upload-curl-error6' => 'URL docpějomny njeje.',
'upload-curl-error6-text' => 'Podaty URL njehodźeše so docpěć. Prošu přepruwuj, hač URL je korektny a sydło docpějomne.',
'upload-curl-error28' => 'Překročenje časa při nahrawanju',
'upload-curl-error28-text' => 'Sydło za wotmołwu předołho trjebaše. Prošu pruwuj, hač sydło je docpějomne, čakaj wokomik a spytaj hišće raz. Spytaj hewak w druhim času hišće raz.',

'license' => 'Licenca:',
'license-header' => 'Licencowanje',
'nolicense' => 'žadyn wuběr',
'license-nopreview' => '(žadyn přehlad k dispoziciji)',
'upload_source_url' => ' (płaćiwy, zjawnje docpějomny URL)',
'upload_source_file' => ' (dataja na twojim ličaku)',

# Special:ListFiles
'listfiles-summary' => 'Tuta specialna strona pokazuje wšě nahrate dataje.',
'listfiles_search_for' => 'Za mjenom wobraza pytać:',
'imgfile' => 'dataja',
'listfiles' => 'Lisćina datajow',
'listfiles_thumb' => 'Wobrazk',
'listfiles_date' => 'datum',
'listfiles_name' => 'mjeno dataje',
'listfiles_user' => 'wužiwar',
'listfiles_size' => 'wulkosć (byte)',
'listfiles_description' => 'wopisanje',
'listfiles_count' => 'Wersije',
'listfiles-show-all' => 'Stare wersije wobrazow zapřijeć',
'listfiles-latestversion' => 'Aktualna wersija',
'listfiles-latestversion-yes' => 'Haj',
'listfiles-latestversion-no' => 'Ně',

# File description page
'file-anchor-link' => 'Dataja',
'filehist' => 'Wersije dataje',
'filehist-help' => 'Klikń na wěsty čas, zo by wersiju dataje w tutym času zwobraznił.',
'filehist-deleteall' => 'wšě wersije wušmórnyć',
'filehist-deleteone' => 'tutu wersiju wušmórnyć',
'filehist-revert' => 'cofnyć',
'filehist-current' => 'aktualnje',
'filehist-datetime' => 'Čas',
'filehist-thumb' => 'Wobrazowy napohlad',
'filehist-thumbtext' => 'Wobrazowy napohlad za wersiju wot $1',
'filehist-nothumb' => 'Žadyn wobrazowy napohlad',
'filehist-user' => 'Wužiwar',
'filehist-dimensions' => 'Rozeznaće',
'filehist-filesize' => 'Wulkosć dataje',
'filehist-comment' => 'Komentar',
'filehist-missing' => 'Dataja pobrachuje',
'imagelinks' => 'Datajowe wužiwanje',
'linkstoimage' => '{{PLURAL:$1|Slědowaca strona wotkazuje|Slědowacej $1 stronje wotkazujetej|Slědowace $1 strony wotkazuja|Slědowacych $1 stronow wotkazuje}} na tutu dataju:',
'linkstoimage-more' => 'Wjace hač $1 {{PLURAL:$1|strona wotkazuje|stronje wotkazujetej|strony wotkazuja|stronow wotkazuje}} na tutu dataju.
Slědowaca lisćina pokazuje jenož {{PLURAL:$1|prěni wotkaz strony|prěnjej $1 wotkazaj strony|prěnje $1 wotkazy strony|prěnich $1 wotkazow strony}} na tutu dataju.
[[Special:WhatLinksHere/$2|Dospołna lisćina]] steji k dispoziciji.',
'nolinkstoimage' => 'Njejsu strony, kotrež na tutu dataju wotkazuja.',
'morelinkstoimage' => '[[Special:WhatLinksHere/$1|Dalše wotkazy]] k tutej dataji wobhladać.',
'linkstoimage-redirect' => '$1 (datajowe dalesposrědkowanje) $2',
'duplicatesoffile' => '{{PLURAL:$1|Slědowaca dataja je duplikat|Slědowacej $1 dataji stej duplikata|Slědowace $1 dataje su duplikaty|Slědowacych $1 duplikatow je duplikaty}} tuteje dataje ([[Special:FileDuplicateSearch/$2|dalše podrobnosće]])::',
'sharedupload' => 'Tuta dataja je z $1 a da so za druhe projekty wužiwać.',
'sharedupload-desc-there' => 'Tuta dataja je z $1 a da so přez druhe projekty wužiwać. Prošu hlej [$2 stronu datajoweho wopisanja] za dalše informacije.',
'sharedupload-desc-here' => 'Tuta dataja je z $1 a da so přez druhe projekty wužiwać. Wopisanje na jeje [$2 stronje datajoweho wopisanja] so deleka pokazuje.',
'sharedupload-desc-edit' => 'Tuta dataja je z $1 a da so w druhich projektach wužiwać.
Snano chceš wopisanje na jeje [$2 stronje datajoweho wopisanja] wobdźěłać.',
'sharedupload-desc-create' => 'Tuta dataja je z $1 a da so w druhich projektach wužiwać.
Snano chceš wopisanje na jeje [$2 stronje datajoweho wopisanja] wobdźěłać.',
'filepage-nofile' => 'Dataja z tutym mjenom njeeksistuje.',
'filepage-nofile-link' => 'Dataju z tutym mjenom njeeksistuje, ale móžeš [$1 ju nahrać].',
'uploadnewversion-linktext' => 'nowu wersiju tuteje dataje nahrać',
'shared-repo-from' => 'z $1',
'shared-repo' => 'zhromadny repozitorij',
'upload-disallowed-here' => 'Njemóžeš tutu dataju přepisać.',

# File reversion
'filerevert' => 'Wersiju $1 cofnyć',
'filerevert-legend' => 'Dataju wróćo stajeć',
'filerevert-intro' => "Stajiš dataju '''[[Media:$1|$1]]''' na [$4 wersiju wot $2, $3 hodź.] wróćo.",
'filerevert-comment' => 'Přičina:',
'filerevert-defaultcomment' => 'wróćo stajene na wersiju wot $1, $2 hodź.',
'filerevert-submit' => 'Cofnyć',
'filerevert-success' => "'''[[Media:$1|$1]]''' bu na [$4 wersiju wot $2, $3 hodź.] wróćo stajeny.",
'filerevert-badversion' => 'W zapodatym času žana wersija dataje njeje.',

# File deletion
'filedelete' => '„$1“ wušmórnyć',
'filedelete-legend' => 'Wušmórnju dataju',
'filedelete-intro' => "Šmórnješ dataju '''[[Media:$1|$1]]''' zhromadnje z jeje cyłymi stawiznami.",
'filedelete-intro-old' => "Wušmórnješ wersiju '''[[Media:$1|$1]]''' wot [$4 wot $2, $3 hodź].",
'filedelete-comment' => 'Přičina:',
'filedelete-submit' => 'Wušmórnyć',
'filedelete-success' => "Strona '''„$1“''' bu wušmórnjena.",
'filedelete-success-old' => "Wersija '''[[Media:$1|$1]]''' wot $2, $3 hodź. bu zničena.",
'filedelete-nofile' => "'''„$1“''' njeeksistuje.",
'filedelete-nofile-old' => "Njeje žana archiwowana wersija '''$1''' z podatymi atributami.",
'filedelete-otherreason' => 'Druha/přidatna přičina:',
'filedelete-reason-otherlist' => 'Druha přičina',
'filedelete-reason-dropdown' => '*Powšitkowne přičina za wušmórnjenja
** Zranjenje awtorksich prawow
** Dwójna dataja',
'filedelete-edit-reasonlist' => 'Přičiny za wušmórnjenje wobdźěłać',
'filedelete-maintenance' => 'Wušmórnjenje a wobnowjenje datajow stej wothladowanja dla nachilu znjemóžnjenej.',
'filedelete-maintenance-title' => 'Dataja njeda so zhašeć',

# MIME search
'mimesearch' => 'Pytanje za typom MIME',
'mimesearch-summary' => 'Na tutej specialnej stronje hodźa so dataje po typje MIME filtrować. Dyrbiš přeco typ MIME a podtyp zapodać: <code>image/jpeg</code> (hlej stronu z wopisanjom wobraza).',
'mimetype' => 'Typ MIME:',
'download' => 'Sćahnyć',

# Unwatched pages
'unwatchedpages' => 'Njewobkedźbowane strony',

# List redirects
'listredirects' => 'Lisćina daleposrědkowanjow',

# Unused templates
'unusedtemplates' => 'Njewužiwane předłohi',
'unusedtemplatestext' => 'Tuta strona nalistuje wšě strony w mjenowym rumje {{ns:template}}, kotrež so w druhich stronach njewužiwaja. Prošu přepruwuj druhe wotkazy k předłoham, prjedy hač je wušmórnješ.',
'unusedtemplateswlh' => 'Druhe wotkazy',

# Random page
'randompage' => 'Připadny nastawk',
'randompage-nopages' => 'W {{PLURAL:$2|slědowacym mjenowym rumje|slědowacymaj mjenowymaj rumomaj|slědowacych mjenowych rumach|slědowacych mjenowych rumach}} žane strony njejsu: $1',

# Random page in category
'randomincategory' => 'Připadna strona w kategoriji',
'randomincategory-invalidcategory' => '"$1" płaćiwe kategorijowe mjeno njeje.',
'randomincategory-nopages' => 'W kategoriji [[:Category:$1|$1]] žane strony njejsu.',
'randomincategory-selectcategory' => 'Připadna strona z kategorija: $1 $2',
'randomincategory-selectcategory-submit' => 'Wotesłać',

# Random redirect
'randomredirect' => 'Připadne daleposrědkowanje',
'randomredirect-nopages' => 'Žane daleposrědkowanja w mjenowym rumje "$1".',

# Statistics
'statistics' => 'Statistika',
'statistics-header-pages' => 'Statistika stronow',
'statistics-header-edits' => 'Wobdźěłanska statistika',
'statistics-header-views' => 'Statistiku wobhladać',
'statistics-header-users' => 'Statistika wužiwarjow',
'statistics-header-hooks' => 'Druha statistika',
'statistics-articles' => 'Wobsahowe strony',
'statistics-pages' => 'Strony',
'statistics-pages-desc' => 'Wšě strony we wikiju, inkluziwnje diskusijnych stronow, daleposrědkowanja atd.',
'statistics-files' => 'Nahrate dataje',
'statistics-edits' => 'Změny stronow wot załoženja {{SITENAME}}',
'statistics-edits-average' => 'Změny na stronu w přerězku',
'statistics-views-total' => 'Zwobraznjenja dohromady',
'statistics-views-total-desc' => 'Pohlady do njeeksistowacych stronow a specialnych stronow njejsu zapřijate',
'statistics-views-peredit' => 'Zwobraznjenja na změnu',
'statistics-users' => 'Zregistrowani [[Special:ListUsers|wužiwarjo]]',
'statistics-users-active' => 'Aktiwni wužiwarjo',
'statistics-users-active-desc' => 'Wužiwarjo, kotřiž su {{PLURAL:$1|wčera|w zańdźenymaj $1 dnjomaj|w zańdźenych $1 dnjach|w zańdźenych $1 dnjach}} aktiwni byli',
'statistics-mostpopular' => 'Najhusćišo wopytowane strony',

'pageswithprop' => 'Strony z kajkosću strony',
'pageswithprop-legend' => 'Strony z kajkosću strony',
'pageswithprop-text' => 'Tuta strona nalistuje strony, kotrež wěstu kajkosć strony wužiwaja.',
'pageswithprop-prop' => 'Mjeno kajkosće:',
'pageswithprop-submit' => 'Wotpósłać',
'pageswithprop-prophidden-long' => 'Hódnota kajkosće dołheho teksta schowana ($1)',
'pageswithprop-prophidden-binary' => 'binarna kajkostna hódnota schowana ($1)',

'doubleredirects' => 'Dwójne daleposrědkowanja',
'doubleredirectstext' => 'Tuta strona nalistuje strony, kotrež k druhim daleposrědkowanskim stronam dale posrědkuja.
Kóžda rjadka wobsahuje wotkazy k prěnjemu a druhemu daleposrědkowanju kaž tež cil druheho daleposrědkowanja, kotryž je zwjetša  "woprawdźita" cilowa strona, na kotruž prěnje daleposrědkowanje měło pokazać. <del>Přešmórnjene</del> zapiski su hižo sčinjene.',
'double-redirect-fixed-move' => '[[$1]] bu přesunjeny, je nětko daleposrědkowanje do [[$2]]',
'double-redirect-fixed-maintenance' => 'Dwójne dalesposrědkowanje wot [[$1]] do [[$2]] so porjedźuje',
'double-redirect-fixer' => 'Porjedźer daleposrědkowanjow',

'brokenredirects' => 'Skóncowane daleposrědkowanja',
'brokenredirectstext' => 'Slědowace daleposrědkowanja wotkazuja na njeeksistowace strony:',
'brokenredirects-edit' => 'wobdźěłać',
'brokenredirects-delete' => 'wušmórnyć',

'withoutinterwiki' => 'Strony bjez mjezyrěčnych wotkazow',
'withoutinterwiki-summary' => 'Sćěhowace strony njewotkazuja na druhe rěčne wersije:',
'withoutinterwiki-legend' => 'Prefiks',
'withoutinterwiki-submit' => 'Pokazać',

'fewestrevisions' => 'Strony z najmjenje wersijemi',

# Miscellaneous special pages
'nbytes' => '$1 {{PLURAL:$1|bajt|bajtaj|bajty|bajtow}}',
'ncategories' => '$1 {{PLURAL:$1|jedna kategorija|kategoriji|kategorije|kategorijow}}',
'ninterwikis' => '$1 {{PLURAL:$1|mjezyrěčny wotkaz|mjezyrěčnej wotkazaj|mjezyrěčne wotkazy|mjezyrěčnych wotkazow}}',
'nlinks' => '$1 {{PLURAL:$1|wotkaz|wotkazaj|wotkazy|wotkazow}}',
'nmembers' => '{{PLURAL:$1|$1 čłon|$1 čłonaj|$1 čłony|$1 čłonow}}',
'nmemberschanged' => '$1 → $2 {{PLURAL:$2|čłon|čłonaj|čłonojo|čłonow}}',
'nrevisions' => '$1 {{PLURAL:$1|wobdźěłanje|wobdźěłani|wobdźěłanja|wobdźěłanjow}}',
'nviews' => '$1 {{PLURAL:$1|jedyn wopyt|wopytaj|wopyty|wopytow}}',
'nimagelinks' => 'Wužiwa so na $1 {{PLURAL:$1|stronje|stronomaj|stronach|stronach}}',
'ntransclusions' => 'wužiwa so na $1 {{PLURAL:$1|stronje|stronomaj|stronach|stronach}}',
'specialpage-empty' => 'Tuchwilu žane zapiski.',
'lonelypages' => 'Wosyroćene strony',
'lonelypagestext' => 'Slědowace strony njejsu wotkazowe cile druhich stronow abo njezapřijimaja so do druhich stronow w {{SITENAME}}.',
'uncategorizedpages' => 'Njekategorizowane strony',
'uncategorizedcategories' => 'Njekategorizowane kategorije',
'uncategorizedimages' => 'Njekategorizowane dataje',
'uncategorizedtemplates' => 'Njekategorizowane předłohi',
'unusedcategories' => 'Njewužiwane kategorije',
'unusedimages' => 'Njewužiwane dataje',
'popularpages' => 'Často wopytowane strony',
'wantedcategories' => 'Požadane kategorije',
'wantedpages' => 'Požadane strony',
'wantedpages-badtitle' => 'Njepłaćiwy titul we wuslědku: $1',
'wantedfiles' => 'Požadane dataje',
'wantedfiletext-cat' => 'Slědowace dataje so wužiwaja, ale njeeksistuju. Dataje z cuzych repozitorijow hodźa so nalistować, byrnjež eksistowali. Tajke wopačne pozitiwy su <del>přešmórnjene</del>. Nimo toho so strony w [[:$1]] nalistuja, kotrež dataje zasadźuja, kotrež njeeksistuja.',
'wantedfiletext-nocat' => 'Slědowace dataje so wužiwaja, ale njeeksistuja. Dataje z cuzych repozitorijow hodźa so nalistować, byrnjež eksistowali. Tajke wopačne pozitiwy su <del>přešmórnjene</del>.',
'wantedtemplates' => 'Falowace předłohi',
'mostlinked' => 'Z najwjace stronami zwjazane strony',
'mostlinkedcategories' => 'Z najwjace stronami zwjazane kategorije',
'mostlinkedtemplates' => 'Najhusćišo wužiwane předłohi',
'mostcategories' => 'Strony z najwjace kategorijemi',
'mostimages' => 'Z najwjace stronami zwjazane dataje',
'mostinterwikis' => 'Strony z najwjace mjezyrěčnymi wotkazami',
'mostrevisions' => 'Nastawki z najwjace wersijemi',
'prefixindex' => 'Wšě strony z prefiksom',
'prefixindex-namespace' => 'Wšě strony z prefiksom (mjenowy rum $1)',
'prefixindex-strip' => 'Prefiks w lisćinje wotrězać',
'shortpages' => 'Krótke nastawki',
'longpages' => 'Dołhe nastawki',
'deadendpages' => 'Nastawki bjez wotkazow',
'deadendpagestext' => 'Slědowace strony njejsu z druhimi stronami w tutym wikiju zwjazane.',
'protectedpages' => 'Škitane strony',
'protectedpages-indef' => 'Jenož strony z njewobmjezowanym škitom',
'protectedpages-summary' => 'Tuta specialna strona naliči wšě strony, kotrež su přećiwo přesunjenju abo wobdźěłowanju škitane.',
'protectedpages-cascade' => 'Jenož strony z kaskadowym škitom',
'protectedpages-noredirect' => 'Dalesposrědkowanja schować',
'protectedpagesempty' => 'Tuchwilu žane.',
'protectedpages-timestamp' => 'Časowy kołk',
'protectedpages-page' => 'Strona',
'protectedpages-expiry' => 'Płaćiwy hač do',
'protectedpages-performer' => 'Škitacy wužiwar',
'protectedpages-params' => 'Škitowe parametry',
'protectedpages-reason' => 'Přičina',
'protectedpages-unknown-timestamp' => 'Njeznaty',
'protectedpages-unknown-performer' => 'Njeznaty wužiwar',
'protectedtitles' => 'Škitane titule',
'protectedtitles-summary' => 'Tuta strona nalistuje titule, kotrež su tuchwilu přećiwo wutworjenju škitane. Za lisćinu eksistowacych stronow, kotrež su škitane, hlej [[{{#special:ProtectedPages}}]].',
'protectedtitlesempty' => 'Žane titule njejsu tuchwilu z tutymi parametrami škitane.',
'listusers' => 'Lisćina wužiwarjow',
'listusers-editsonly' => 'Jenož wužiwarjow ze změnami pokazać',
'listusers-creationsort' => 'Po datumje wutworjenja sortěrować',
'listusers-desc' => 'Po spadowacym porjedźe sortěrować',
'usereditcount' => '$1 {{PLURAL:$1|změna|změnje|změny|změnow}}',
'usercreated' => 'je so $1 $2 hodź. {{GENDER:$3|wutworił|wutworiła}}',
'newpages' => 'Nowe strony',
'newpages-username' => 'Wužiwarske mjeno:',
'ancientpages' => 'Najstarše nastawki',
'move' => 'přesunyć',
'movethispage' => 'Stronu přesunyć',
'unusedimagestext' => 'Slědowace dataje eksistuja, njejsu wšak do strony zasadźene.
Prošu wobkedźbuj, zo druhe websydła móža na dataju z direktnym URL wotkazować a móža so tu hišće jewić, byrnjež w altiwnym wužiwanju byli.',
'unusedcategoriestext' => 'Slědowace kategorije eksistuja, hačrunjež žana druha strona abo kategorija je njewužiwa.',
'notargettitle' => 'Žadyn cil',
'notargettext' => 'Njejsy cilowu stronu abo wužiwarja podał, zo by funkciju wuwjesć móhł.',
'nopagetitle' => 'Žana tajka cilowa strona',
'nopagetext' => 'Cilowa strona, kotruž sće podał, njeeksistuje.',
'pager-newer-n' => '{{PLURAL:$1|nowši 1|nowšej $1|nowše $1|nowšich $1}}',
'pager-older-n' => '{{PLURAL:$1|starši 1|staršej $1|starše $1|staršich $1}}',
'suppress' => 'Dohladowanje',
'querypage-disabled' => 'Tuta specialna strona je z wukonowych přičinow znjemóžnjena.',

# Book sources
'booksources' => 'Pytanje po ISBN',
'booksources-search-legend' => 'Žórła za knihi pytać',
'booksources-go' => 'Pytać',
'booksources-text' => 'To je lisćina wotkazow k druhim sydłam, kotrež nowe a trjebane knihi předawaja. Tam móžeš tež dalše informacije wo knihach dóstać, kotrež pytaš:',
'booksources-invalid-isbn' => 'Podate ISBN-čisło njezda so płaćiwe być; přepruwuj za zmylkami, z tym zo z orginialneho žórła kopěruješ.',

# Special:Log
'specialloguserlabel' => 'Wukonjer:',
'speciallogtitlelabel' => 'Cil (titul abo wužiwar):',
'log' => 'Protokole',
'all-logs-page' => 'Wšě zjawne protokole',
'alllogstext' => 'Kombinowane zwobraznjenje wšěch k dispozicij stejacych protokolow w {{GRAMMAR:lokatiw|{{SITENAME}}}}. Móžeš napohlad wobmjezować, wuběrajo typ protokola, wužiwarske mjeno (dźiwajo na wulkopisanje) abo potrjechu stronu (tež dźiwajo na wulkopisanje).',
'logempty' => 'Žane wotpowědowace zapiski w protokolu.',
'log-title-wildcard' => 'Titul započina so z …',
'showhideselectedlogentries' => 'Wubrane protokolowe zapiski pokazać/schować',

# Special:AllPages
'allpages' => 'Wšě nastawki',
'alphaindexline' => '$1 do $2',
'nextpage' => 'přichodna strona ($1)',
'prevpage' => 'předchadna strona ($1)',
'allpagesfrom' => 'Strony pokazać, započinajo z:',
'allpagesto' => 'Strony pokazać, kotrež kónča so na:',
'allarticles' => 'Wšě nastawki',
'allinnamespace' => 'Wšě strony (mjenowy rum $1)',
'allpagessubmit' => 'Pokazać',
'allpagesprefix' => 'Strony pokazać z prefiksom:',
'allpagesbadtitle' => 'Mjeno strony, kotrež sy zapodał, njebě płaćiwe. Měješe pak mjezyrěčny, pak mjezywikijowy prefiks abo wobsahowaše jedne abo wjace znamješkow, kotrež w titlach dowolene njejsu.',
'allpages-bad-ns' => 'Mjenowy rum „$1" w {{grammar:lokatiw|{{SITENAME}}}} njeeksistuje.',
'allpages-hide-redirects' => 'Dalesposrědkowanja schować',

# SpecialCachedPage
'cachedspecial-viewing-cached-ttl' => 'Wobhladuješ sej pufrowanu wersiju tuteje strony, kotraž móže do $1 stara być.',
'cachedspecial-viewing-cached-ts' => 'Wobhladuješ sej pufrowanu wersiju tuteje strony, kotraž móhła njeaktualna być.',
'cachedspecial-refresh-now' => 'Aktualnu wersiju sej wobhladać.',

# Special:Categories
'categories' => 'Kategorije',
'categoriespagetext' => '{{PLURAL:$1|Slědowaca kategorija wobsahuje|Slědowacej kategoriji wobsahujetej|Slědowace kategorije wobsahuja|Slědowace kategorije wobsahuja}} strony abo medije.
[[Special:UnusedCategories|Njewužiwane kategorije]] so tu njepokazuja.
Hlej tež [[Special:WantedCategories|požadane kategorije]].',
'categoriesfrom' => 'Kategorije pokazać, započinajo z:',
'special-categories-sort-count' => 'Po ličbje sortěrować',
'special-categories-sort-abc' => 'Alfabetisce sortěrować',

# Special:DeletedContributions
'deletedcontributions' => 'wušmórnjene přinoški',
'deletedcontributions-title' => 'wušmórnjene přinoški',
'sp-deletedcontributions-contribs' => 'přinoški',

# Special:LinkSearch
'linksearch' => 'Pytanje eksternych wotkazow',
'linksearch-pat' => 'Pytanski muster:',
'linksearch-ns' => 'Mjenowy rum:',
'linksearch-ok' => 'Pytać',
'linksearch-text' => 'Zastupniske znamješka kaž "*.wikipedia.org" móža so wužiwać.
Znajmjeńša hłowna domena je trěbna, na přikład "*.org".<br />
{{PLURAL:$2|Podpěrowany protokol|Podpěrowanej protokolej|Podpěrowane protokole}}: <code>$1</code> (standard je http://, jeli žadyn protokol njeje podaty).',
'linksearch-line' => '$1 je z $2 wotkazany.',
'linksearch-error' => 'Zastupniske znamjenja dadźa so jenož na spočatku URL wužiwać.',

# Special:ListUsers
'listusersfrom' => 'Započinajo z:',
'listusers-submit' => 'Pokazać',
'listusers-noresult' => 'Njemóžno wužiwarjow namakać. Prošu wobkedźbuj, zo so mało- abo wulkopisanje na wotprašowanje wuskutkuje.',
'listusers-blocked' => '(blokowany)',

# Special:ActiveUsers
'activeusers' => 'Lisćina aktiwnych wužiwarjow',
'activeusers-intro' => 'To je lisćina wužiwarjow, kotřiž běchu aktiwni za {{PLURAL:$1|posledni dźeń|poslednjej $1 dnjej|poslednje $1 dny|poslednich $1 dnjow}}:',
'activeusers-count' => '$1 {{PLURAL:$1|akcija|akciji|akcije|akcijow}} w {{PLURAL:$3|zańdźenej dnju|zańdźenymaj $3 dnjomaj|zańdźenych $3 dnjach}}',
'activeusers-from' => 'Wužiwarjow zwobraznić, započinajo z:',
'activeusers-hidebots' => 'Boćiki schować',
'activeusers-hidesysops' => 'Administratorow schować',
'activeusers-noresult' => 'Žani wužiwarjo namakani.',

# Special:ListGroupRights
'listgrouprights' => 'Prawa wužiwarskeje skupiny',
'listgrouprights-summary' => 'Slěduje lisćina wužiwarskich skupinow na tutej wikiju z jich wotpowědnymi přistupnymi prawami. Tu móžeš [[{{MediaWiki:Listgrouprights-helppage}}|dalše informacije]] wo jednotliwych prawach namakać.',
'listgrouprights-key' => 'Legenda:
* <span class="listgrouprights-granted">Garantowane prawo</span>
* <span class="listgrouprights-revoked">Wotwołane prawo</span>',
'listgrouprights-group' => 'Skupina',
'listgrouprights-rights' => 'Prawa',
'listgrouprights-helppage' => 'Help:Skupinske prawa',
'listgrouprights-members' => '(lisćina čłonow)',
'listgrouprights-addgroup' => 'Wužiwar hodźi so {{PLURAL:$2|tutej skupinje|tutymaj skupinomaj|tutym skupinam|tutym skupinam}} přidać: $1',
'listgrouprights-removegroup' => 'Wužiwar hodźi so z {{PLURAL:$2|tuteje skupiny|tuteju skupinow|tutych skupinow|tutych skupinow}} wotstronić: $1',
'listgrouprights-addgroup-all' => 'Hodźa so wšě skupiny přidać',
'listgrouprights-removegroup-all' => 'Hodźa so wše skupiny wotstronić',
'listgrouprights-addgroup-self' => 'Móže {{PLURAL:$2|skupinu|skupinje|skupiny|skupinow}} swójskemu kontu přidać: $1',
'listgrouprights-removegroup-self' => 'Móže {{PLURAL:$2|skupinu|skupinje|skupiny|skupinow}} ze swójskeho konta wotstronić: $1',
'listgrouprights-addgroup-self-all' => 'Móže wšě skupiny swójskemu kontu přidać',
'listgrouprights-removegroup-self-all' => 'Móže wšě skupiny ze swójskeho konta wotstronić',

# Email user
'mailnologin' => 'Njejsy přizjewjeny.',
'mailnologintext' => 'Dyrbiš [[Special:UserLogin|přizjewjeny]] być a płaćiwu e-mejlowu adresu w swojich [[Special:Preferences|nastajenjach]] měć, zo by druhim wužiwarjam mejlki pósłać móhł.',
'emailuser' => 'Wužiwarjej mejlku pósłać',
'emailuser-title-target' => 'E-mejl na {{GENDER:$1|tutomu wužiwarjej|tutej wužiwarce}} pósłać',
'emailuser-title-notarget' => 'Wužiwarjej mejlku pósłać',
'emailpage' => 'Wužiwarjej mejlku pósłać',
'emailpagetext' => 'Móžeš slědowacy formular wužiwać, zo by tutomu {{GENDER:$1|wužiwarjej}} e-mejlku pósłał.
E-mejlowa adresa, kotruž sy w [[Special:Preferences|swojich wužiwarskich nastajenjach]] zapodał, zjewi so jako adresa "Wot" e-mejlki, tak zo přijimowar móže ći direktnje wotmołwić.',
'usermailererror' => 'E-mejlowy objekt je zmylk wróćił:',
'defemailsubject' => '{{SITENAME}} - e-mejlka wot wužiwarja "$1"',
'usermaildisabled' => 'Wužiwarska e-mejl znjemóžnjena',
'usermaildisabledtext' => 'Njemóžeš na tutym wikiju druhim wužiwarjam e-mejl pósłać',
'noemailtitle' => 'Žana e-mejlowa adresa podata',
'noemailtext' => 'Tutón wužiwar njeje płaćiwu e-mejlowu adresu podał.',
'nowikiemailtitle' => 'Žana e-mejl dowolena',
'nowikiemailtext' => 'Tutón wužiwar nochce žane e-mejlki wot druhich wužiwarjow dóstać.',
'emailnotarget' => 'Njeeksistowace abo njepłaćiwe wužiwarske mjeno za přijimowarja.',
'emailtarget' => 'Wužiwarske mjeno přijimowarja zapodać',
'emailusername' => 'Wužiwarske mjeno:',
'emailusernamesubmit' => 'Wotpósłać',
'email-legend' => 'E-mejlku druhemu wužiwarjej {{GRAMMAR:genitiw|{{SITENAME}}}} pósłać',
'emailfrom' => 'Wot:',
'emailto' => 'Komu:',
'emailsubject' => 'Tema:',
'emailmessage' => 'Powěsć:',
'emailsend' => 'Wotesłać',
'emailccme' => 'E-mejluj mi kopiju mojeje powěsće.',
'emailccsubject' => 'Kopija twojeje powěsće wužiwarjej $1: $2',
'emailsent' => 'Mejlka wotesłana',
'emailsenttext' => 'Twoja mejlka bu wotesłana.',
'emailuserfooter' => 'Tuta e-mejlka bu z pomocu funkcije "Wužiwarjej mejlku pósłać" na {{SITENAME}} wot $1 do $2 pósłana.',

# User Messenger
'usermessage-summary' => 'Systemowu  zdźělenku zawostajić.',
'usermessage-editor' => 'Systemowy powěstnik',

# Watchlist
'watchlist' => 'Wobkedźbowanki',
'mywatchlist' => 'Wobkedźbowanki',
'watchlistfor2' => 'Za wužiwarja $1 $2',
'nowatchlist' => 'Nimaš žane strony w swojich wobkedźbowankach.',
'watchlistanontext' => 'Dyrbiš so $1, zo by swoje wobkedźbowanki wobhladać abo wobdźěłać móhł.',
'watchnologin' => 'Njejsy přizjewjeny.',
'watchnologintext' => 'Dyrbiš [[Special:UserLogin|přizjewjeny]] być, zo by swoje wobkedźbowanki změnić móhł.',
'addwatch' => 'K wobkedźbowankam přidać',
'addedwatchtext' => 'Strona [[:$1]] bu k twojim [[Special:Watchlist|wobkedźbowankam]] přidata.
Přichodne změny tuteje strony a přisłušneje diskusijneje strony budu so tam nalistować.',
'removewatch' => 'Z wobkedźbowankow wotstronić',
'removedwatchtext' => 'Strona "[[:$1]]" bu z [[Special:Watchlist|twojich wobkedźbowankow]] wotstronjena.',
'watch' => 'wobkedźbować',
'watchthispage' => 'stronu wobkedźbować',
'unwatch' => 'njewobkedźbować',
'unwatchthispage' => 'wobkedźbowanje skónčić',
'notanarticle' => 'njeje nastawk',
'notvisiblerev' => 'Wersija bu wušmórnjena',
'watchlist-details' => '{{PLURAL:$1|$1 wobkedźbowana strona|$1 wobkedźbowanej stronje|$1 wobkedźbowane strony|$1 wobkedźbowanych stronow}}, diskusijne strony wuwzate.',
'wlheader-enotif' => 'E-mejlowa zdźělenska słužba je zmóžnjena.',
'wlheader-showupdated' => "Strony, kotrež su so po twojim poslednim wopyće změnili, so '''tučne''' pokazuja.",
'watchmethod-recent' => 'Aktualne změny za wobkedźbowane strony přepruwować',
'watchmethod-list' => 'Wobkedźbowanki za aktualnymi změnami přepruwować',
'watchlistcontains' => 'Maš $1 {{PLURAL:$1|stronu|stronje|strony|stronow}} w swojich wobkedźbowankach.',
'iteminvalidname' => 'Problem ze zapiskom „$1“, njepłaćiwe mjeno.',
'wlnote2' => 'Slěduja změny {{PLURAL:$1|zańdźeneje hodźiny|zańdźeneju <strong>$1</strong> hodźinow|zańdźenych <strong>$1</strong> hodźin}} Staw: $2, $3.',
'wlshowlast' => 'Poslednje $1 hodź. - $2 dnjow - $3 pokazać',
'watchlist-options' => 'Opcije wobkedźbowankow',

# Displayed when you click the "watch" button and it is in the process of watching
'watching' => 'Wobkedźbuju…',
'unwatching' => 'Njewobkedźbuju…',
'watcherrortext' => 'Při měnjenju nastajenjow wašich wobkedźbowankow za "$1" je zmylk wustupił.',

'enotif_mailer' => '{{SITENAME}} E-mejlowe zdźělenje',
'enotif_reset' => 'Wšě strony jako wopytane woznamjenić',
'enotif_impersonal_salutation' => 'wužiwar {{GRAMMAR:genitiw|{{SITENAME}}}}',
'enotif_subject_deleted' => 'Strona {{GRAMMAR:genitiw|{{SITENAME}}}} $1 je so wot {{GENDER:$2|$2}} zhašała',
'enotif_subject_created' => 'Strona {{GRAMMAR:genitiw|{{SITENAME}}}} $1 je so wot {{GENDER:$2|$2}} wutworiła',
'enotif_subject_moved' => 'Strona {{GRAMMAR:genitiw|{{SITENAME}}}} $1 je so wot {{GENDER:$2|$2}} přesunyła',
'enotif_subject_restored' => 'Strona {{GRAMMAR:genitiw|{{SITENAME}}}} $1 je so wot {{GENDER:$2|$2}} wobnowiła',
'enotif_subject_changed' => 'Strona {{GRAMMAR:genitiw|{{SITENAME}}}} $1 je so wot {{GENDER:$2|$2}} změniła',
'enotif_body_intro_deleted' => 'Strona {{GRAMMAR:genitiw|{{SITENAME}}}} $1 je so na $PAGEEDITDATE wot {{GENDER:$1|$2}} zhašała, hlej $3.',
'enotif_body_intro_created' => 'Strona {{GRAMMAR:genitiw|{{SITENAME}}}} $1 je so na $PAGEEDITDATE wot {{GENDER:$2|$2}} wutworiła, hlej $3 za aktualnu wersiju',
'enotif_body_intro_moved' => 'Strona {{GRAMMAR:genitiw|{{SITENAME}}}} $1 je so na $PAGEEDITDATE wot {{GENDER:$2|$2}} přesunyła, hlej $3 za aktualnu wersiju',
'enotif_body_intro_restored' => 'Strona {{GRAMMAR:genitiw|{{SITENAME}}}} $1 je so na $PAGEEDITDATE wot {{GENDER:$2|$2}} wobnowiła, hlej $3 za aktualnu wersiju',
'enotif_body_intro_changed' => 'Strona {{GRAMMAR:genitiw|{{SITENAME}}}} $1 je so na $PAGEEDITDATE wot {{GENDER:$2|$2}} změniła, hlej $3 za aktualnu wersiju',
'enotif_lastvisited' => 'Hlej $1 za wšě změny po twojim poslednim wopyće.',
'enotif_lastdiff' => 'Hlej $1 za tutu změnu.',
'enotif_anon_editor' => 'anonymny wužiwar $1',
'enotif_body' => 'Luby $WATCHINGUSERNAME,

$PAGEINTRO $NEWPAGE


Zjeće wobdźěłarja: $PAGESUMMARY $PAGEMINOREDIT

Staj so z wobdźěłarjom do zwiska:
e-mejl: $PAGEEDITOR_EMAIL
wiki: $PAGEEDITOR_WIKI

Njebudu žane druhe zdźělenki w padźe dalšeje aktiwity, chibazo wopytaš tutu stronu. mjeztym zo sy přizjewjeny.
Móžeš tež zdźělenske marki za wšě swoje wobkedźbowane strony we swojich wobkedźbowankach wróćo stajić.

Twój přećelny zdźělenski system {{GRAMMAR:genitiw|{{SITENAME}}}}

--
Zo by swoje nastajenja za e-mejlowe zdźělenja změnił, wopytaj
{{canonicalurl:{{#special:Preferences}}}}

Zo by nastajenja swojich wobkedźbowankow změnił, wopytaj
{{canonicalurl:{{#special:EditWatchlist}}}}

Zo by stronu ze swojich wobkedźbowankow zhašał, wopytaj
$UNWATCHURL


Wotmołwy a dalša pomoc:
{{canonicalurl:{{MediaWiki:Helppage}}}}',
'created' => 'wutworjena',
'changed' => 'změnjena',

# Delete
'deletepage' => 'Stronu zhašeć',
'confirm' => 'Wobkrućić',
'excontent' => "wobsah běše: '$1'",
'excontentauthor' => "wobsah bě: '$1' (a jenički wobdźěłowar bě '[[Special:Contributions/$2|$2]]')",
'exbeforeblank' => "wobsah do wuprózdnjenja běše: '$1'",
'exblank' => 'strona běše prózdna',
'delete-confirm' => '„$1“ wušmórnyć',
'delete-legend' => 'Wušmórnyć',
'historywarning' => "'''KEDŹBU:''' Strona, kotruž chceš wušmórnyć, ma stawizny z přibližnje $1 {{PLURAL:$1|wersiju|wersijomaj|wersijemi|wersijemi}}:",
'confirmdeletetext' => 'Sy so rozsudźił stronu ze jeje stawiznami wušmórnić.
Prošu potwjerdź, zo maš wotpohlad to činić, zo rozumiš sćěwki a zo to wotpowědujo [[{{MediaWiki:Policy-url}}|zasadam tutoho wikija]] činiš.',
'actioncomplete' => 'Dokónčene',
'actionfailed' => 'Akcija je so njeporadźiła',
'deletedtext' => 'Strona „$1” bu wušmórnjena. Hlej $2 za lisćinu aktualnych wušmórnjenjow.',
'dellogpage' => 'Protokol wušmórnjenjow',
'dellogpagetext' => 'Deleka je lisćina najaktualnišich wušmórnjenjow.',
'deletionlog' => 'Protokol wušmórnjenjow',
'reverted' => 'Na staršu wersiju cofnjene',
'deletecomment' => 'Přičina:',
'deleteotherreason' => 'Druha/přidatna přičina:',
'deletereasonotherlist' => 'Druha přičina',
'deletereason-dropdown' => '* Zwučene přičiny za wušmórnjenje
** Spam
** Wandalizm
** Přeńdźenje awtorskeho prawa
** Požadanje awtora
** Defektne dalesposrědkowanje',
'delete-edit-reasonlist' => 'Přičiny za wušmórnjenje wobdźěłać',
'delete-toobig' => 'Tuta strona ma z wjace hač $1 {{PLURAL:$1|wersiju|wersijomaj|wersijemi|wersijemi}} wulke wobdźěłanske stawizny. Wušmórnjenje tajkich stronow bu wobmjezowane, zo by připadne přetorhnjenje {{SITENAME}} wobešło.',
'delete-warning-toobig' => 'Tuta strona ma z wjace hač $1 {{PLURAL:$1|wersiju|wersijomaj|wersijemi|wersijemi}} wulke wobdźěłanske stawizny. Wušmórnjenje móže operacije datoweje banki {{SITENAME}} přetorhnyć; pokročuj z kedźbliwosću.',
'deleting-backlinks-warning' => "'''Warnowanje:''' Druhe strony wotkazuja k stronje abo strona je druhdźe zapřijata, kotruž chceš zhašeć.",

# Rollback
'rollback' => 'Změny cofnyć',
'rollback_short' => 'Cofnyć',
'rollbacklink' => 'Cofnyć',
'rollbacklinkcount' => '$1 {{PLURAL:$1|změnu|změnje|změny|změnow}} cofnyć',
'rollbacklinkcount-morethan' => 'přez $1 {{PLURAL:$1|změnu|změnje|změny|změnow}} cofnyć',
'rollbackfailed' => 'Cofnjenje njeporadźiło',
'cantrollback' => 'Njemóžno změnu cofnyć; strona nima druhich awtorow.',
'alreadyrolled' => 'Njemóžno poslednu změnu [[:$1]] přez wužiwarja [[User:$2|$2]] ([[User talk:$2|Diskusija]]{{int:pipe-separator}}[[Special:Contributions/$2|{{int:contribslink}}]]) cofnyć; něchtó druhi je stronu wobdźěłał abo změnu hižo cofnył.

Poslednja změna bě wot wužiwarja [[User:$3|$3]] ([[User talk:$3|Diskusija]]{{int:pipe-separator}}[[Special:Contributions/$3|{{int:contribslink}}]]).',
'editcomment' => "Zjeće wobdźěłanja bě: \"''\$1''\".",
'revertpage' => 'Změny [[Special:Contributions/$2|$2]] ([[User talk:$2|Diskusija]]) cofnjene a nawróćene k poslednjej wersiji wužiwarja [[User:$1|$1]]',
'revertpage-nouser' => 'Změny su so wot schowaneho wužiwarja anulowali a předchadna wersija wužiwarja {{GENDER:$1|[[User:$1|$1]]}} je so wobnowiła',
'rollback-success' => 'Změny wužiwarja $1 cofnjene; wróćo na wersiju wužiwarja $2.',

# Edit tokens
'sessionfailure-title' => 'Posedźenski zmylk',
'sessionfailure' => 'Zda so, zo je problem z twojim přizjewjenjom; tuta akcija bu wěstosće dla přećiwo zadobywanju do posedźenja znjemóžniła. Prošu klikń na "Wróćo" a začitaj stronu, z kotrejež přińdźeš, znowa; potom spytaj hišće raz.',

# Protect
'protectlogpage' => 'Protokol škita',
'protectlogtext' => 'To je lisćina škitanych stronow a nješkitanych stronow.
Hlej [[Special:ProtectedPages|lisćinu škitanych stronow]] za lisćinu tuchwilu škitanych stron.',
'protectedarticle' => 'je stronu [[$1]] škitał',
'modifiedarticleprotection' => 'je škit strony [[$1]] změnił',
'unprotectedarticle' => 'je škit za [[$1]] wotstronił',
'movedarticleprotection' => 'škitowe nastajenja z "[[$2]]" do "[[$1]]" přesunjene',
'protect-title' => 'Stronu „$1” škitać',
'protect-title-notallowed' => 'Škitny stopjeń za "$1" pokazać',
'prot_1movedto2' => 'je [[$1]] pod hesło [[$2]] přesunył',
'protect-badnamespace-title' => 'Nješkitajomny mjenowy rum',
'protect-badnamespace-text' => 'Strony w tutym mjenowym rumje njehodźa so škitać.',
'protect-norestrictiontypes-text' => 'Tuta strona njeda so škitać, dokelž žane wobmjezowanja k dispoziciji njesteja.',
'protect-norestrictiontypes-title' => 'Nješkitajomna strona',
'protect-legend' => 'Škit wobkrućić',
'protectcomment' => 'Přičina:',
'protectexpiry' => 'Čas škita:',
'protect_expiry_invalid' => 'Njepłaćiwy čas spadnjenja.',
'protect_expiry_old' => 'Čas škita leži w zańdźenosći.',
'protect-unchain-permissions' => 'Dalše škitne opcije dopušćić',
'protect-text' => 'Tu móžeš status škita strony <b>$1</b> wobhladać a změnić.',
'protect-locked-blocked' => "Njemóžeš škit strony změnič, dokelž twoje konto je zablokowane. Tu widźiš aktualne škitne nastajenja za stronu'''„$1“:'''",
'protect-locked-dblock' => "Datowa banka je zawrjena, tohodla njemóžeš škit strony změnić. Tu widźiš aktualne škitne nastajenja za stronu'''„$1“:'''",
'protect-locked-access' => "Nimaš trěbne prawa, zo by škit strony změnił. Tu widźiš aktualne škitne nastajenja za stronu'''„$1“:'''",
'protect-cascadeon' => 'Tuta strona je tuchwilu škitana, dokelž je w {{PLURAL:$1|slědowacej stronje|slědowacych stronach}} zapřijata, {{PLURAL:$1|kotraž je|kotrež su}} přez kaskadowu opciju {{PLURAL:$1|škitana|škitane}}. Móžeš škitowy status strony změnić, to wšak wliw na kaskadowy škit nima.',
'protect-default' => 'Wšěch wužiwarjow dowolić',
'protect-fallback' => 'Jenož wužiwarjow z prawom "$1" dowolić',
'protect-level-autoconfirmed' => 'Jenož awtomatisce wobkrućenych wužiwarjow dowolić',
'protect-level-sysop' => 'Jenož administratorow dowolić',
'protect-summary-cascade' => 'kaskadowacy',
'protect-expiring' => 'spadnje $1 (UTC)',
'protect-expiring-local' => 'płaćiwy hač do $1',
'protect-expiry-indefinite' => 'njewobmjezowany',
'protect-cascade' => 'Kaskadowacy škit – wšě w tutej stronje zapřijate strony so škituja.',
'protect-cantedit' => 'Njemóžeš škitowe runiny tuteje strony změnić, dokelž nimaš dowolnosć, zo by ju wobdźěłał.',
'protect-othertime' => 'Druhi čas:',
'protect-othertime-op' => 'druhi čas',
'protect-existing-expiry' => 'Eksistowacy čas spadnjenja: $2, $3 hodź.',
'protect-otherreason' => 'Druha/přidatna přičina:',
'protect-otherreason-op' => 'Druha přičina',
'protect-dropdown' => '*Powšitkowne škitowe přičiny
** Ekscesiwny wandalizm
** Ekscesiwne spamowanje
** Wobdźěłanska wójna
** Strona z jara wjele změnami',
'protect-edit-reasonlist' => 'Škitowe přičiny wobdźěłać',
'protect-expiry-options' => '1 hodźinu:1 hour,1 dźeń:1 day,1 tydźeń:1 week,2 njedźeli:2 weeks,1 měsać:1 month,3 měsacy:3 months,6 měsacow:6 months,1 lěto:1 year,na přeco:infinite',
'restriction-type' => 'Škitowy status',
'restriction-level' => 'Runina škita:',
'minimum-size' => 'Minimalna wulkosć:',
'maximum-size' => 'Maksimalna wulkosć:',
'pagesize' => '(bajtow)',

# Restrictions (nouns)
'restriction-edit' => 'wobdźěłać',
'restriction-move' => 'přesunyć',
'restriction-create' => 'Wutworić',
'restriction-upload' => 'Nahrać',

# Restriction levels
'restriction-level-sysop' => 'dospołnje škitany',
'restriction-level-autoconfirmed' => 'połškitany (móže so jenož přez přizjewjenych wužiwarjow wobdźěłać, kiž nowačcy njejsu)',
'restriction-level-all' => 'wšě',

# Undelete
'undelete' => 'Wušmórnjenu stronu wobnowić',
'undeletepage' => 'Wušmórnjene strony wobnowić',
'undeletepagetitle' => "'''Slědowace wudaće pokazuje wušmórnjene wersije wot [[:$1]]'''.",
'viewdeletedpage' => 'Wušmórnjene strony wobhladać',
'undeletepagetext' => '{{PLURAL:$1|Slědowaca strona bu wušmórnjena, ale je|Slědowacej $1 stronje buštej wušmórnjenej, ale stej|Slědowace $1 strony buchu wušmórnjene, ale su|Slědowacych $1 bu wušmórnjene, ale je}} hišće w archiwje a {{PLURAL:$1|da so|datej so|dadźa so|da so}} wobnowić.
Archiw da so periodisce wuprózdnić.',
'undelete-fieldset-title' => 'Wersije wobnowić',
'undeleteextrahelp' => "Zo by wšě stawizny strony wobnowił, wostaj prošu wšě kontrolowe kašćiki njewubrane a klikń na '''''{{int:undeletebtn}}'''''.
Zo by selektiwne wobnowjenje přewjedł, wubjer kašćiki, kotrež wersijam wotpowěduja, kotrež maja so wobnowić, a klikń na '''''{{int:undeletebtn}}'''''.",
'undeleterevisions' => '$1 {{PLURAL:$1|wersija|wersiji|wersije|wersijow}} {{PLURAL:$1|archiwowana|archiwowanej|archiwowane|archiwowane}}',
'undeletehistory' => 'Jeli tutu stronu wobnowiš, so wšě (tež prjedy wušmórnjene) wersije zaso do stawiznow wobnowja. Jeli bu po wušmórnjenju nowa strona ze samsnym mjenom wutworjena, budu so wobnowjene wersije w prjedawšich stawiznach jewić.',
'undeleterevdel' => 'Wobnowjenje so njepřewjedźe, jeli je najwyša strona docpěta abo datajowa wersija budźe so zdźěla wušmórnje.
W tutym padźe dyrbiš najnowšu wušmórnjenu wersiju znjemóžnić abo pokazać.',
'undeletehistorynoadmin' => 'Strona bu wušmórnjena. Přičina za wušmórnjenje so deleka w zjeću pokazuje, zhromadnje z podrobnosćemi wužiwarjow, kotřiž běchu tutu stronu do zničenja wobdźěłali. Tuchwilny wobsah strony je jenož administratoram přistupny.',
'undelete-revision' => 'Wušmórnjena wersija strony $1 (wot $4, $5 hodź.) wot $3:',
'undeleterevision-missing' => 'Njepłaćiwa abo pobrachowaca wersija. Pak je wotkaz wopačny, pak bu wotpowědna wersija z archiwa wobnowjena abo wotstronjena.',
'undelete-nodiff' => 'Předchadna wersija njeeksistuje.',
'undeletebtn' => 'Wobnowić',
'undeletelink' => 'wobhladać sej/wobnowić',
'undeleteviewlink' => 'wobhladać sej',
'undeleteinvert' => 'Wuběr wobroćić',
'undeletecomment' => 'Přičina:',
'undeletedrevisions' => '$1 {{PLURAL:$1|wersija|wersiji|wersije|wersijow}} {{PLURAL:$1|wobnowjena|wobnowjenej|wobnowjene|wobnowjene}}',
'undeletedrevisions-files' => '$1 {{PLURAL:$1|wersija|wersiji|wersije|wersijow}} a $2 {{PLURAL:$2|dataja|dataji|dataje|datajow}} {{PLURAL:$2|wobnowjena|wobnowjenej|wobnowjene|wobnowjene}}',
'undeletedfiles' => '$1 {{PLURAL:$1|dataja|dataji|dataje|datajow}} {{PLURAL:$1|wobnowjena|wobnowjenej|wobnowjene|wobnowjene}}.',
'cannotundelete' => 'Wobnowjenje zwrěšćiło:
$1',
'undeletedpage' => "'''Strona $1 bu z wuspěchom wobnowjena.'''

Hlej [[Special:Log/delete|protokol]] za lisćinu aktualnych wušmórnjenjow a wobnowjenjow.",
'undelete-header' => 'Hlej [[Special:Log/delete|protokol wušmórnjenjow]] za njedawno wušmórnjene strony.',
'undelete-search-title' => 'Wušmórnjene strony pytać',
'undelete-search-box' => 'Wušmórnjene strony pytać',
'undelete-search-prefix' => 'Strony pokazać, kotrež započinaja so z:',
'undelete-search-submit' => 'Pytać',
'undelete-no-results' => 'Žane přihódne strony w archiwje namakane.',
'undelete-filename-mismatch' => 'Datajowa wersija z časowym kołkom $1 njeda so wobnowić: Datajowej mjenje njehodźitej so jedne k druhemu.',
'undelete-bad-store-key' => 'Datajowa wersija z časowym kołkom $1 njeda so wobnowić: dataja před zničenjom hižo njeeksistowaše.',
'undelete-cleanup-error' => 'Zmylk při wušmórnjenju njewužita wersija $1 z archiwa.',
'undelete-missing-filearchive' => 'Dataja z archiwowym ID $1 njeda so wobnowić, dokelž w datowej bance njeje. Snano bu wona hižo wobnowjena.',
'undelete-error' => 'Zmylk při wušmórnjenju strony',
'undelete-error-short' => 'Zmylk při wobnowjenju dataje $1',
'undelete-error-long' => 'Buchu zmylki při wobnowjenju dataje zwěsćene:

$1',
'undelete-show-file-confirm' => 'Chceš sej woprawdźe zničenu wersiju dataje "<nowiki>$1</nowiki>" wot $2 $3 wobhladać?',
'undelete-show-file-submit' => 'Haj',

# Namespace form on various pages
'namespace' => 'Mjenowy rum:',
'invert' => 'Wuběr wobroćić',
'tooltip-invert' => 'Klikń na tutón kašćik, zo by změny na stronach we wubranym mjenowym rumje schował (a, jeli wubrany, w zwjazanym mjenowym rumje)',
'namespace_association' => 'Nawjazany mjenowy rum',
'tooltip-namespace_association' => 'Klikń na tutón kašćik, zo by diskusijny mjenowy rum abo temowy mjenowy rum, kotryž je z wubranym mjenowym rumom zwjazany, tež zapřijał',
'blanknamespace' => '(Nastawki)',

# Contributions
'contributions' => 'Přinoški {{GENDER:$1|wužiwarja|wužiwarki}}',
'contributions-title' => 'Wužiwarske přinoški wot „$1“',
'mycontris' => 'Přinoški',
'contribsub2' => 'Za {{GENDER:$3|$1}} ($2)',
'nocontribs' => 'Žane změny, kotrež podatym kriterijam wotpowěduja.',
'uctop' => '(aktualny)',
'month' => 'wot měsaca (a do toho):',
'year' => 'wot lěta (a do toho):',

'sp-contributions-newbies' => 'jenož přinoški nowačkow pokazać',
'sp-contributions-newbies-sub' => 'Za nowačkow',
'sp-contributions-newbies-title' => 'Wužiwarske přinoški za nowe konta',
'sp-contributions-blocklog' => 'protokol zablokowanjow',
'sp-contributions-deleted' => 'wušmórnjene wužiwarske přinoški',
'sp-contributions-uploads' => 'nahraća',
'sp-contributions-logs' => 'protokole',
'sp-contributions-talk' => 'diskusija',
'sp-contributions-userrights' => 'Zrjadowanje wužiwarskich prawow',
'sp-contributions-blocked-notice' => 'Tutón wužiwar je tuchwilu zablokowany. Najnowši protokolowy zapisk so deleka jako referenca podawa:',
'sp-contributions-blocked-notice-anon' => 'Tuta IP-adresa je tuchwilu zablokowana.
Najnowši zapisk w protokolu blokowanjow so deleka jako referenca podawa:',
'sp-contributions-search' => 'Přinoški pytać',
'sp-contributions-suppresslog' => 'potłóčene wužiwarske přinoški',
'sp-contributions-username' => 'IP-adresa abo wužiwarske mjeno:',
'sp-contributions-toponly' => 'Jenož wyše wersije pokazać',
'sp-contributions-newonly' => 'Jenož změny pokazać, kotrež su wutworjenja stronow',
'sp-contributions-submit' => 'OK',

# What links here
'whatlinkshere' => 'Što wotkazuje sem',
'whatlinkshere-title' => 'Strony, kotrež na „$1“ wotkazuja',
'whatlinkshere-page' => 'Strona:',
'linkshere' => "Sćěhowace strony na stronu '''[[:$1]]''' wotkazuja:",
'nolinkshere' => "Žane strony na '''[[:$1]]''' njewotkazuja.",
'nolinkshere-ns' => "Žane strony njewotkazuja na '''[[:$1]]''' we wubranym mjenowym rumje.",
'isredirect' => 'daleposrědkowanje',
'istemplate' => 'zapřijeće předłohi',
'isimage' => 'Datajowy wotkaz',
'whatlinkshere-prev' => '{{PLURAL:$1|předchadny|předchadnej|předchadne|předchadne $1}}',
'whatlinkshere-next' => '{{PLURAL:$1|přichodny|přichodnej|přichodne|přichodne $1}}',
'whatlinkshere-links' => '← wotkazy',
'whatlinkshere-hideredirs' => 'Daleposrědkowanja $1',
'whatlinkshere-hidetrans' => 'Zapřijeća $1',
'whatlinkshere-hidelinks' => 'Wotkazy $1',
'whatlinkshere-hideimages' => 'Datajowe wotkazy $1',
'whatlinkshere-filters' => 'Filtry',

# Block/unblock
'autoblockid' => '#$1 awtomatisce blokować',
'block' => 'Wužiwarja blokować',
'unblock' => 'Blokowanje wužiwarja zběhnyć',
'blockip' => 'Wužiwarja zablokować',
'blockip-legend' => 'Wužiwarja blokować',
'blockiptext' => 'Wužij slědowacy formular deleka, zo by pisanski přistup za podatu IP-adresu abo wužiwarske mjeno blokował. To měło so jenož stać, zo by wandalizmej zadźěwało a woptpowědujo [[{{MediaWiki:Policy-url}}|zasadam]]. Zapodaj deleka přičinu (na př. citujo wosebite strony, kotrež běchu z woporom wandalizma).',
'ipadressorusername' => 'IP-adresa abo wužiwarske mjeno',
'ipbexpiry' => 'Spadnjenje',
'ipbreason' => 'Přičina:',
'ipbreason-dropdown' => '*powšitkowne přičiny
** wandalizm
** wutworjenje njezmyslnych stronow
** linkspam
** wobobinske nadběhi
*specifiske přičiny
** njepřihódne wužiwarske mjeno
** znowapřizjewjenje na přeco zablokowaneho wužiwarja
** proksy, wandalizma jednotliwych wužiwarjow dla dołhodobnje zablokowany',
'ipb-hardblock' => 'Přizjewjenym wužiwarjam zadźěwać, pod tutej IP-adresu změny přewjesć',
'ipbcreateaccount' => 'Wutworjenju nowych kontow zadźěwać',
'ipbemailban' => 'Wotpósłanje mejlkow znjemóžnić',
'ipbenableautoblock' => 'IP-adresy blokować kiž buchu přez tutoho wužiwarja hižo wužiwane kaž tež naslědne adresy, z kotrychž so wobdźěłanje pospytuje',
'ipbsubmit' => 'Wužiwarja zablokować',
'ipbother' => 'Druha doba',
'ipboptions' => '2 hodźinje:2 hours,1 dźeń:1 day,3 dny:3 days,1 tydźeń:1 week,2 njedźeli:2 weeks,1 měsać:1 month,3 měsacy:3 months,6 měsacow:6 months,1 lěto:1 year,na přeco:infinite',
'ipbhidename' => 'Wužiwarske mjeno stawiznach a lisćinach schować',
'ipbwatchuser' => 'Wužiwarsku a diskusijnu stronu tutoho wužiwarja wobkedźbować',
'ipb-disableusertalk' => 'Tutomu wužiwarjej zadźěwać, swoju diskusijnu stronu wobdźěłać, mjeztym zo je zablokowany',
'ipb-change-block' => 'Wužiwarja z tutymi nastajenjemi znowa blokować',
'ipb-confirm' => 'Blokowanje wobkrućić',
'badipaddress' => 'Njepłaćiwa IP-adresa',
'blockipsuccesssub' => 'Zablokowanje wuspěšne',
'blockipsuccesstext' => '[[Special:Contributions/$1|$1]] bu {{GENDER:$1|zablokowany|zablokowana}}.<br />
Hlej [[Special:BlockList|lisćinu blokowanjow]], zo by zablokowanjow pruwował.',
'ipb-blockingself' => 'Chceš samoho blokować! Chceš to woprawdźe činić?',
'ipb-confirmhideuser' => 'Chceš runje wužiwarja z nastajenjom "wužiwarja schować" blokować. To k tomu dowjedźe, zo mjeno wužiwarja so we wšch lisćinach a protokolowych zapiskach potłóči. Chceš to woprawdźe činić?',
'ipb-confirmaction' => 'Jeli sy sej wěsty, zo chceš to woprawdźe činić, přepruwuj prošu deleka polo "{{int:ipb-confirm}}".',
'ipb-edit-dropdown' => 'přičiny zablokowanjow wobdźěłać',
'ipb-unblock-addr' => 'zablokowanje wužiwarja „$1“ zběhnyć',
'ipb-unblock' => 'zablokowanje wužiwarja abo IP-adresy zběhnyć',
'ipb-blocklist' => 'tuchwilne blokowanja zwobraznić',
'ipb-blocklist-contribs' => 'Přinoški za $1',
'unblockip' => 'Zablokowanje zběhnyć',
'unblockiptext' => 'Wužij formular deleka, zo by blokowanje IP-adresy abo wužiwarskeho mjena zběhnył.',
'ipusubmit' => 'Tute blokěrowanje skónčić',
'unblocked' => 'Blokowanje wužiwarja [[User:$1|$1]] bu zběhnjene',
'unblocked-range' => 'Blokowanje za $1 je so zběhnyło',
'unblocked-id' => 'Blokowanje ID $1 bu zběhnjene.',
'blocklist' => 'Zablokowani wužiwarjo',
'ipblocklist' => 'Zablokowani wužiwarjo',
'ipblocklist-legend' => 'Pytanje za zablokowanym wužiwarjom',
'blocklist-userblocks' => 'Kontowe blokowanja schować',
'blocklist-tempblocks' => 'Nachwilne blokowanja schować',
'blocklist-addressblocks' => 'Blokowanja jednotliwych IP-adresow schować',
'blocklist-rangeblocks' => 'Blokowanja wobłukow schować',
'blocklist-timestamp' => 'Časowy kołk',
'blocklist-target' => 'Cil',
'blocklist-expiry' => 'Spadnje',
'blocklist-by' => 'Blokowacy administrator',
'blocklist-params' => 'Blokowanske parametry',
'blocklist-reason' => 'Přičina',
'ipblocklist-submit' => 'Pytać',
'ipblocklist-localblock' => 'Lokalne blokowanje',
'ipblocklist-otherblocks' => '{{PLURAL:$1|Druhe blokowanje|Druhej blokowani|Druhe blokowanja|Druhe blokowanja}}',
'infiniteblock' => 'na přeco',
'expiringblock' => 'spadnje $1 $2',
'anononlyblock' => 'jenož anonymnych blokować',
'noautoblockblock' => 'awtoblokowanje znjemóžnjene',
'createaccountblock' => 'wutworjenje wužiwarskich kontow znjemóžnjene',
'emailblock' => 'Wotpósłanje mejlkow bu znjemóžnjene',
'blocklist-nousertalk' => 'njemóže swójsku diskusijnu stronu wobdźěłać',
'ipblocklist-empty' => 'Liścina blokowanjow je prózdna.',
'ipblocklist-no-results' => 'Požadana IP-adresa/požadane wužiwarske mjeno njeje zablokowane.',
'blocklink' => 'zablokować',
'unblocklink' => 'blokowanje zběhnyć',
'change-blocklink' => 'Blokowanje změnić',
'contribslink' => 'přinoški',
'emaillink' => 'E-mejl pósłać',
'autoblocker' => 'Awtomatiske blokowanje, dokelž twoja IP-adresa bu njedawno wot wužiwarja „[[User:$1|$1]]” wužita. Přičina, podata za blokowanje $1, je: "$2"',
'blocklogpage' => 'Protokol zablokowanjow',
'blocklog-showlog' => 'Tutón wužiwar bu prjedy zablokowany. Protokol blokowanjow so deleka jako referenca podawa:',
'blocklog-showsuppresslog' => 'Tutón wužiwar bu prjedy zablokowany a schowany. Protokol potłóčenjow  so deleka jako referenca podawa:',
'blocklogentry' => 'je wužiwarja [[$1]] zablokował z časom spadnjenja $2 $3',
'reblock-logentry' => 'změni blokowanske nastajenja za [[$1]] z časom spadnjenja $2 $3',
'blocklogtext' => 'To je protokol blokowanja a wotblokowanja wužiwarjow. Awtomatisce blokowane IP-adresy so njenalistuja. Hlej [[Special:BlockList|lisćinu blokowanjow]] za lisćinu tuchwilnych wuhnaćow a zablokowanjow.',
'unblocklogentry' => 'zablokowanje wužiwarja $1 bu zběhnjene',
'block-log-flags-anononly' => 'jenož anonymnych',
'block-log-flags-nocreate' => 'wutworjenje wužiwarskich kontow znjemóžnjene',
'block-log-flags-noautoblock' => 'awtomatiske zablokowanje znjemóžnjene',
'block-log-flags-noemail' => 'wotpósłanje mejlkow bu znjemóžnjene',
'block-log-flags-nousertalk' => 'njeje móžno swójsku diskusijnu stronu wobdźěłać',
'block-log-flags-angry-autoblock' => 'polěpšene awtomatiske blokowanje zmóžnjene',
'block-log-flags-hiddenname' => 'wužiwarske mjeno schowane',
'range_block_disabled' => 'Kmanosć administratorow, cyłe wobłuki IP-adresow blokować, je znjemóžnjena.',
'ipb_expiry_invalid' => 'Čas spadnjenja je njepłaćiwy.',
'ipb_expiry_temp' => 'Blokowanja schowanych wužiwarskich mjenow maja permanentne być.',
'ipb_hide_invalid' => 'Njeje móžno tute konto potłóčić; ma přez {{PLURAL:$1|jednu změnu|$1 změnje|$1 změny|$1 změnow}}.',
'ipb_already_blocked' => 'Wužiwar „$1” je hižo zablokowany.',
'ipb-needreblock' => '$1 je hižo zablokowany. Chceš nastajenja změnić?',
'ipb-otherblocks-header' => '{{PLURAL:$1|Druhe blokowanje|Druhej blokowani|Druhe blokowanja|Druhe blokowanja}}',
'unblock-hideuser' => 'Njemóžeš blokowanje za tutoho wužiwarja zběhnyć, dokelž jeho wužiwarske mjeno je so schowało.',
'ipb_cant_unblock' => 'Zmylk: Njemóžno ID zablokowanja $1 namakać. Zablokowanje je so najskerje mjeztym zběhnyło.',
'ipb_blocked_as_range' => 'Zmylk: IP $1 njeje direktnje zablokowana a njeda so wublokować. Blokuje so wšak jako dźěl wobwoda $2, kotryž da so wublokować.',
'ip_range_invalid' => 'Njepłaciwy wobłuk IP-adresow.',
'ip_range_toolarge' => 'Wobłukowe bloki, kotrež su wjetše hač /$1, njejsu dowolene.',
'proxyblocker' => 'Awtomatiske blokowanje wotewrjenych proksy-serwerow',
'proxyblockreason' => 'Twoja IP-adresa bu zablokowana, dokelž je wotewrjeny proksy. Prošu skontaktuj swojeho prowidera abo syćoweho administratora a informuj jeho wo tutym chutnym wěstotnym problemje.',
'sorbs' => 'SORBS DNSbl',
'sorbsreason' => 'Twoja IP-adresa je jako wotewrjeny proksy na DNSBL {{GRAMMAR:genitiw|{{SITENAME}}}} zapisana.',
'sorbs_create_account_reason' => 'Twoja IP-adresa je jako wotewrjeny proksy na DNSBL {{GRAMMAR:genitiw|{{SITENAME}}}} zapisana. Njemóžeš konto wutworić.',
'xffblockreason' => 'IP-adresa w header X-Forwarded-For, pak twoja pak ta proksy-serwera, kotryž wužiwaš, je so zablokowała. Prěnjotna přičina za blokowanje bě: $1',
'cant-see-hidden-user' => 'Wužiwar, kotrehož pospytuješ blokować, bu hižo zablokowany a schowany. Dokelž nimaš prawo wužiwarja schować, njemóžeš blokowanje wužiwarja widźeć abo wobdźěłać.',
'ipbblocked' => 'Njemóžeš druhich wužiwarjow blokować abo wotblokować, dokelž ty sam sy zablokowany',
'ipbnounblockself' => 'Njesměš so samoho wotblokować',

# Developer tools
'lockdb' => 'Datowu banku zamknyć',
'unlockdb' => 'Datowu banku wotamknyć',
'lockdbtext' => 'Zamknjenje datoweje banki znjemóžni wšěm wužiwarjam strony wobdźěłać, jich nastajenja změnić, jich wobkedźbowanki wobdźěłać a wšě druhe dźěła činić, kotrež sej změny w datowej bance žadaja. Prošu wobkruć, zo chceš datowu banku woprawdźe zamknyć a zo chceš ju zaso wotamknyć, hdyž wothladowanje je sčinjene.',
'unlockdbtext' => 'Wotamknjenje datoweje banki zaso wšěm wužiwarjam zmóžni strony wobdźěłać, jich nastajenja změnić, jich wobkedźbowanki wobdźěłać a wšě druhe dźěła činić, kotrež sej změny w datowej bance žadaja. Prošu wobkruć, zo chceš datowu banku woprawdźe wotamknyć.',
'lockconfirm' => 'Haj, chcu datowu banku woprawdźe zamknyć.',
'unlockconfirm' => 'Haj, chcu datowu banku woprawdźe wotamknyć.',
'lockbtn' => 'Datowu banku zamknyć',
'unlockbtn' => 'Datowu banku wotamknyć',
'locknoconfirm' => 'Njejsy kontrolowy kašćik nakřižował.',
'lockdbsuccesssub' => 'Datowa banka bu wuspěšnje zamknjena.',
'unlockdbsuccesssub' => 'Datowa banka bu wuspěšnje wotamknjena.',
'lockdbsuccesstext' => 'Datowa banka bu zamknjena.
<br />Njezabudź [[Special:UnlockDB|wotzamknyć]], po tym zo wothladowanje je sčinjene.',
'unlockdbsuccesstext' => 'Datowa banka bu wotamknjena.',
'lockfilenotwritable' => 'Do dataje zamknjenja datoweje banki njeda so zapisować. Za zamknjenje abo wotamknjenje datoweje banki dyrbi webowy serwer pisanske prawo měć.',
'databasenotlocked' => 'Datajowa banka zamknjena njeje.',
'lockedbyandtime' => '(wot {{GENDER:$1|$1}} dnja $2 $3)',

# Move page
'move-page' => '$1 přesunyć',
'move-page-legend' => 'Stronu přesunyć',
'movepagetext' => "Wužiwanje formulara deleka budźe stronu přemjenować, suwajo jeje cyłe stawizny pod nowe mjeno. Stary titl budźe daleposrědkowanje na nowy titl.  Móžeš dalesposrědkowanja, kotrež na prěnjotny titl pokazać, awtomatisce aktualizować. Pruwuj za [[Special:DoubleRedirects|dwójnymi]] abo [[Special:BrokenRedirects|skóncowanymi daleposrědkowanjemi]]. Dyrbiš zaručić, zo wotkazy na stronu pokazuja, na kotruž dyrbja dowjesć.

Wobkedźbuj, zo strona so '''nje'''přesunje, jeli strona z nowym titlom hizo eksistuje, chibazo poslednja je dalesposrědkowanje a nima zašłe stawizny. To woznamjenja, zo móžeš stronu tam wróćo přemjenować, hdźež bu runje přemjenowana, jeli zmylk činiš a njemóžeš wobstejacu stronu přepisować.

'''Kedźbu!''' Móže to drastiska a njewočakowana změna za woblubowanu stronu być; prošu budź sej wěsty, zo sćěwki rozumiš, prjedy hač pokročuješ.",
'movepagetext-noredirectfixer' => "Wužiwajo slědowacy formular, móžeš stronu přemjenować a wšě jich daty do stawiznow noweho titula přesunyć.
Stary titul budźe dalesposrědkowanska strona k nowemu titulej.
Skontroluj za [[Special:DoubleRedirects|dwójnymi]] abo [[Special:BrokenRedirects|wobškodźenymi dalesposrědkowanjemi]].
Sy za to zamołwity, zo wotkazy na tón cil pokazuja, na kotryž maja pokazować.

Dźiwaj na to, zo strona so '''nje'''přesunje, jeli je hižo strona z nowym titulom, chibazo wona je prózdna abo dalesposrědkowanje a nima stawizny změnow.
To woznamjenja, zo móžeš stronu do stareho mjena wróćopřemjenować, jeli činiš zmylk a njemóžeš eksistowacu stronu přepisać.

'''Warnowanje!'''
To móže drastiska a njewočakowana změna za woblubowanu stronu być:
prošu wuwědomće sej konsekwency, prjedy hač pokročuješ.",
'movepagetalktext' => 'Přisłušna diskusijna strona přesunje so awtomatisce hromadźe z njej, <b>chibazo:</b>
*Njeprózdna diskusijna strona pod nowym mjenom hižo eksistuje abo
*wotstronješ hóčku z kašćika deleka.

W tutych padach dyrbiš stronu manuelnje přesunyć abo zaměšeć, jeli sej to přeješ.',
'movearticle' => 'Stronu přesunyć',
'moveuserpage-warning' => "'''Warnowanje:''' Sy při tym wužiwarsku stronu přesunyć. Prošu dźiwaj na to, zo so jenož strona posunje a wužiwar so ''nje''budźe přemjenować.",
'movenologintext' => 'Dyrbiš zregistrowany wužiwar a [[Special:UserLogin|přizjewjeny]] być, zo by stronu přesunył.',
'movenotallowed' => 'Nimaš prawo, zo by strony přesunył.',
'movenotallowedfile' => 'Nimaš prawo dataje přesunyć.',
'cant-move-user-page' => 'Nimaš prawo wužiwarske strony přesunyć (wothladajo wot podstronow)',
'cant-move-to-user-page' => 'Nimaš prawo stronu do wužiwarskeje strony přesunyć (z wuwzaćom do wužiwarskeje podstrony).',
'newtitle' => 'pod nowe hesło',
'move-watch' => 'Stronu wobkedźbować',
'movepagebtn' => 'Stronu přesunyć',
'pagemovedsub' => 'Přesunjenje wuspěšne',
'movepage-moved' => '\'\'\'Strona "$1" bu do "$2" přesunjena.\'\'\'',
'movepage-moved-redirect' => 'Daleposrědkowanje je so wutworiło.',
'movepage-moved-noredirect' => 'Wutworjenje daleposrědkowanja bu potłóčene.',
'articleexists' => 'Strona z tutym mjenom hižo eksistuje abo mjeno, kotrež sy wuzwolił, płaćiwe njeje. Prošu wuzwol druhe mjeno.',
'cantmove-titleprotected' => 'Njemóžeš stronu do tutoho městna přesunyć, dokelž nowy titul bu přećiwo wutworjenju škitany',
'movetalk' => 'Přisłušnu diskusijnu stronu tohorunja přesunyć',
'move-subpages' => 'Wšě podstrony (hač do $1) přesunyć',
'move-talk-subpages' => 'Wšě podstrony diskusijneje strony (hač do $1) přesunyć',
'movepage-page-exists' => 'Strona $1 hižo eksistuje a njeda so awtomatisce přepisać.',
'movepage-page-moved' => 'Strona $1 bu do $2 přesunjena.',
'movepage-page-unmoved' => 'Strona $1 njeda so do $2 přesunyć.',
'movepage-max-pages' => 'Maksimalna ličba $1 {{PLURAL:$1|strony|stronow|stronow|stronow}} bu přesunjena, dalše strony so awtomatisce njepřesunu.',
'movelogpage' => 'Protokol přesunjenjow',
'movelogpagetext' => 'Deleka je lisćina wšěch přesunjenych stronow.',
'movesubpage' => '{{PLURAL:$1|Podstrona|Podstronje|Podstrony|Podstronow}}',
'movesubpagetext' => 'Strona ma {{PLURAL:$1|slědowacu podstronu|slědowacej $1 podstronje|slědowace $1 podstrony|slědowacych $1 podstronow}}.',
'movenosubpage' => 'Tuta strona podstrony nima.',
'movereason' => 'Přičina:',
'revertmove' => 'wróćo přesunyć',
'delete_and_move' => 'wušmórnyć a přesunyć',
'delete_and_move_text' => '== Wušmórnjenje trěbne ==

Cilowa strona „[[:$1]]” hižo eksistuje. Chceš ju wušmórnyć, zo by so přesunjenje zmóžniło?',
'delete_and_move_confirm' => 'Haj, stronu wušmórnyć.',
'delete_and_move_reason' => 'Wušmórnjena, zo by so rum za přesunjenje z "[[$1]]" wutworił.',
'selfmove' => 'Žórłowy a cilowy titl stej samsnej; strona njehodźi so na sebje samu přesunyć.',
'immobile-source-namespace' => 'njemóže strony w mjenowym rumje "$1" přesunyć',
'immobile-target-namespace' => 'njemóže strono do mjenoweho ruma "$1" přesunyć',
'immobile-target-namespace-iw' => 'Interwiki-wotkaz njeje płaćiwy cil za přesunjenja stronow.',
'immobile-source-page' => 'Strona njeda so přesunyć.',
'immobile-target-page' => 'Njemóžno do teje ciloweje strony přesunyć.',
'bad-target-model' => 'Požadany cil wužiwa druhi wobsahowy model. $1 njeda so do $2 konwertować.',
'imagenocrossnamespace' => 'Wobraz njeda so do druheho mjenoweho ruma hač wobraz přesunyć',
'nonfile-cannot-move-to-file' => 'Njedataje njedadźa so do datajoweho mjenoweho ruma přesunyć',
'imagetypemismatch' => 'Nowa dataja swojemu typej njewotpowěduje',
'imageinvalidfilename' => 'Mjeno ciloweje dataje je njepłaćiwe',
'fix-double-redirects' => 'Daleposrědkowanja aktualizować, kotrež na prěnjotny titul pokazuja',
'move-leave-redirect' => 'Daleposrědkowanje zawostajić',
'protectedpagemovewarning' => "'''WARNOWANJE:''' Tuta strona bu zawrjena, zo bychu jenož wužiwarjo z prawami administratora móhli ju přesunyć.
Najnowši protokolowy zapisk je deleka jako referenca podaty:",
'semiprotectedpagemovewarning' => "'''Kedźbu:''' Tuta strona bu zawrjena, zo bychu jenož zregistrowani wužiwarjo móhli ju přesunyć.
Najnowši protokolowy zapisk je deleka jako referenca podaty:",
'move-over-sharedrepo' => '== Dataja eksistuje ==
[[:$1]] eksistuje w hromadźe wužiwanym repozitoriju. Přesunjenje dataje k tutomu titulej budźe hromadźe wužiwanu dataju přepisować.',
'file-exists-sharedrepo' => 'Wubrane datajowe mjeno so hižo w hromadźe wužiwanym repozitoriju wužiwa.
Prošu wubjer druhe mjeno.',

# Export
'export' => 'Strony eksportować',
'exporttext' => 'Móžeš tekst a stawizny wěsteje strony abo skupiny stronow, kotrež su w XML zawite, eksportować. To da so potom do druheho wikija, kotryž ze software MediaWiki dźěła, přez [[Special:Import|importowansku stronu]] importować.

Zo by strony eksportował, zapodaj title deleka do tekstoweho pola, jedyn titul na linku, a wubjer, hač chceš aktualnu wersiju kaž tež stare wersije z linkami stawiznow strony abo jenož aktualnu wersiju z informacijemi wo poslednjej změnje eksportować.

W poslednim padźe móžeš tež wotkaz wužiwać, na př. „[[{{#Special:Export}}/{{MediaWiki:Mainpage}}]]” za stronu „[[{{MediaWiki:Mainpage}}]]”.',
'exportall' => 'Wšě strony eksportować',
'exportcuronly' => 'Jenož aktualnu wersiju zapřijeć, nic dospołne stawizny',
'exportnohistory' => '----
<b>Kedźbu:</b> Eksport cyłych stawiznow přez tutón formular bu z přičin wukonitosće serwera znjemóžnjeny.',
'exportlistauthors' => 'Za kóždu stronu lisćinu wobdźěłarjow zapřijeć',
'export-submit' => 'Eksportować',
'export-addcattext' => 'Strony z kategorije dodawać:',
'export-addcat' => 'Dodawać',
'export-addnstext' => 'Strony z mjenoweho ruma přidać:',
'export-addns' => 'Přidać',
'export-download' => 'Jako XML-dataju składować',
'export-templates' => 'Předłohi zapřijeć',
'export-pagelinks' => 'Wotkazane strony zapřijeć, do hłubokosće wot:',

# Namespace 8 related
'allmessages' => 'Systemowe zdźělenki',
'allmessagesname' => 'Mjeno',
'allmessagesdefault' => 'Standardny tekst',
'allmessagescurrent' => 'Aktualny tekst',
'allmessagestext' => 'To je lisćina systemowych zdźělenkow, kotrež w mjenowym rumje MediaWiki k dispoziciji steja. Prošu wopytaj [https://www.mediawiki.org/wiki/Localisation lokalizaciju MediaWiki] a [//translatewiki.net translatewiki.net], jeli chceš k powšitkownej lokalizaciji MediaWiki přinošować.',
'allmessagesnotsupportedDB' => "Tuta strona njeda so wužiwać, dokelž '''\$wgUseDatabaseMessages''' bu znjemóžnjeny.",
'allmessages-filter-legend' => 'Filter',
'allmessages-filter' => 'Po přiměrjenskim stawje filtrować:',
'allmessages-filter-unmodified' => 'Njezměnjeny',
'allmessages-filter-all' => 'Wšě',
'allmessages-filter-modified' => 'Změnjeny',
'allmessages-prefix' => 'Po prefiksu filtrować:',
'allmessages-language' => 'Rěč:',
'allmessages-filter-submit' => 'Wotesłać',
'allmessages-filter-translate' => 'Přełožić',

# Thumbnails
'thumbnail-more' => 'powjetšić',
'filemissing' => 'Dataja pobrachuje',
'thumbnail_error' => 'Zmylk při wutworjenju miniaturki: $1',
'thumbnail_error_remote' => 'Zmylkowa zdźělenka wot $1:
$2',
'djvu_page_error' => 'Strona DjVU zwonka wobłuka strony',
'djvu_no_xml' => 'Daty XML njemóža so za dataju DjVU wotwołać',
'thumbnail-temp-create' => 'Temporerna dataja za miniaturny wobrazk njeda so wutworić',
'thumbnail-dest-create' => 'Miniaturny wobrazk njeda so na cilowym městnje składować',
'thumbnail_invalid_params' => 'Njepłaćiwe parametry miniaturki',
'thumbnail_dest_directory' => 'Njemóžno cilowy zapis wutworić.',
'thumbnail_image-type' => 'Wobrazowy typ so njepodpěruje',
'thumbnail_gd-library' => 'Njedospołna konfiguracija GD-biblioteki: falowaca funkcija $1',
'thumbnail_image-missing' => 'Zda so, zo dataja faluje: $1',
'thumbnail_image-failure-limit' => 'Njedawno je přewjele pospytow było, kotrež je so nimokuliło ($1 abo wjace), zo by tutu miniaturu rysowało. Prošu spytajće pozdźišo hišće raz.',

# Special:Import
'import' => 'Strony importować',
'importinterwiki' => 'Import z druheho wikija',
'import-interwiki-text' => 'Wuběr wiki a stronu za importowanje. Daty wersijow a mjena awtorow so zachowaja. Wšě akcije za transwiki-importy so w [[Special:Log/import|protokolu importow]] protokoluja.',
'import-interwiki-source' => 'Žórłowy wiki/Žórłowa strona:',
'import-interwiki-history' => 'Wšě wersije ze stawiznow tuteje strony kopěrować',
'import-interwiki-templates' => 'Wšě předłohi zapřijeć',
'import-interwiki-submit' => 'Importować',
'import-interwiki-namespace' => 'Cilowy mjenowy rum:',
'import-interwiki-rootpage' => 'Cilowa korjenjowa strona (opcionalna):',
'import-upload-filename' => 'Datajowe mjeno:',
'import-comment' => 'Přičina:',
'importtext' => 'Prošu eksportuj dataju ze žórłoweho wikija z pomocu funkcije [[Special:Export|Strony eksportować]]. Składuj ju na swojim ličaku a nahraj ju tu.',
'importstart' => 'Importuju…',
'import-revision-count' => '$1 {{PLURAL:$1|wersija|wersiji|wersije|wersijow}}',
'importnopages' => 'Žane strony za importowanje.',
'imported-log-entries' => '$1 {{PLURAL:$1|protokolowy zapisk importowany|protokolowej zapiskaj importowanej|protokolowe zapiski importowane|protokolowych zapiskow importowanych}}.',
'importfailed' => 'Import zwrěšćił: $1',
'importunknownsource' => 'Njeznate importowe žórło',
'importcantopen' => 'Importowa dataja njeda so wočinjeć.',
'importbadinterwiki' => 'Wopačny interwiki-wotkaz',
'importnotext' => 'Prózdny abo žadyn tekst',
'importsuccess' => 'Import wuspěšny!',
'importhistoryconflict' => 'Je konflikt ze stawiznami strony wustupił. Snano bu strona hižo prjedy importowana.',
'importnosources' => 'Žane importowanske žórła za transwiki wubrane. Direktne nahraće stawiznow je znjemóžnjene.',
'importnofile' => 'Žana importowanska dataja wubrana.',
'importuploaderrorsize' => 'Nahraće importoweje dataje je so njeporadźiło. Dataja je wjetša hač dowolena datajowa wulkosć.',
'importuploaderrorpartial' => 'Nahraće importoweje dataje je so njeporadźiło. Dataja je so jenož zdźěla nahrała.',
'importuploaderrortemp' => 'Nahraće importoweje dataje je so njeporadźiło. Temporarny zapis faluje.',
'import-parse-failure' => 'Zmylk za XML-import:',
'import-noarticle' => 'Žadyn nastawk za import!',
'import-nonewrevisions' => 'Žane wersije zaimportowane (wšě pak su hižo eksistowali pak su so zmylkow dla přeskočili).',
'xml-error-string' => '$1 linka $2, špalta $3, (bajt $4): $5',
'import-upload' => 'XML-daty nahrać',
'import-token-mismatch' => 'Strata posedźenskich datow. Prošu spytaj hišće raz.',
'import-invalid-interwiki' => 'Njeje móžno z podateho wikija importować.',
'import-error-edit' => 'Strona "$1" so njeimportuje, dokelž nimaš prawo ju wobdźěłać.',
'import-error-create' => 'Strona "$1" so njeimportuje, dokelž nimaš prawo ju wutworić.',
'import-error-interwiki' => 'Strona "$1" so njeimportuje, dokelž jeje mjeno je za eksterne wotkazowanje (interwiki) wuměnjene.',
'import-error-special' => 'Strona "$1" so njeimportuje, dokelž k wosebitemu mjenowemu rumej słuša, kotryž strony njedowola.',
'import-error-invalid' => 'Strona "$1" so njeimportuje, dokelž jeje mjeno je njepłaćiwe.',
'import-error-unserialize' => 'Wersija $2 strony "$1" njeda so wotserializować. Wersija je so zdźěliła za wužiwanje wobsahoweho modela $3, kotryž je jako $4 serializowany.',
'import-error-bad-location' => 'Wersija $2, kotraž wobsahowy model $3 wužiwa, njeda so pod "$1" w tutym wikiju składować, dokelž so model na tutej stronje njepodpěruje.',
'import-options-wrong' => '{{PLURAL:$2|Wopačna opcija|Wopačnej opciji|Wopačne opcije|Wopačne opcije}}: <nowiki>$1</nowiki>',
'import-rootpage-invalid' => 'Podata korjenjowa strona je njepłaćiwa.',
'import-rootpage-nosubpage' => 'Mjenowy rum "$1" korjenjoweje strony njedowola podstrony.',

# Import log
'importlogpage' => 'Protokol importow',
'importlogpagetext' => 'To je lisćina importowanych stronow ze stawiznami z druhich wikijow.',
'import-logentry-upload' => 'strona [[$1]] bu přez nahraće importowana',
'import-logentry-upload-detail' => '$1 {{PLURAL:$1|wersija|wersiji|wersije|wersijow}}',
'import-logentry-interwiki' => 'je stronu $1 z druheho wikija přenjesł',
'import-logentry-interwiki-detail' => '$1 {{PLURAL:$1|wersija|wersiji|wersije|wersijow}} z $2 {{PLURAL:$1|importowana|importowanej|importowane|importowane}}',

# JavaScriptTest
'javascripttest' => 'JavaScriptowy test',
'javascripttest-title' => 'Testy $1 so přewjedu',
'javascripttest-pagetext-noframework' => 'Tuta strona je za přewjedźenje javascriptowych testow přewostajena.',
'javascripttest-pagetext-unknownframework' => 'Njeznaty wobłuk "$1".',
'javascripttest-pagetext-frameworks' => 'Prošu wubjer jedyn ze slědowacych testowanskich wobłukow: $1',
'javascripttest-pagetext-skins' => 'Wubjer drastu za přewjedźenje testow:',
'javascripttest-qunit-intro' => 'Hlej [$1 testowansku dokumentaciju] na mediawiki.org.',
'javascripttest-qunit-heading' => 'MediaWiki JavaScript QUnit Test Suite',

# Tooltip help for the actions
'tooltip-pt-userpage' => 'Twoja wužiwarska strona',
'tooltip-pt-anonuserpage' => 'Wužiwarska strona IP-adresy, z kotrejž tuchwilu dźěłaš',
'tooltip-pt-mytalk' => 'Twoja diskusijna strona',
'tooltip-pt-anontalk' => 'Diskusija wo změnach z tuteje IP-adresy',
'tooltip-pt-preferences' => 'moje nastajenja',
'tooltip-pt-watchlist' => 'lisćina stronow, kotrež wobkedźbuješ',
'tooltip-pt-mycontris' => 'Lisćina twojich přinoškow',
'tooltip-pt-login' => 'Móžeš so woměrje přizjewić, to pak zawjazowace njeje.',
'tooltip-pt-logout' => 'so wotzjewić',
'tooltip-ca-talk' => 'diskusija wo stronje',
'tooltip-ca-edit' => 'Móžeš stronu wobdźěłać. Prošu wužij tłóčku „Přehlad” do składowanja.',
'tooltip-ca-addsection' => 'Nowy wotrězk započeć',
'tooltip-ca-viewsource' => 'Strona je škitana. Móžeš pak jeje žórło wobhladać.',
'tooltip-ca-history' => 'stawizny tuteje strony',
'tooltip-ca-protect' => 'stronu škitać',
'tooltip-ca-unprotect' => 'Tutu stronu hižo nješkitać',
'tooltip-ca-delete' => 'stronu wušmórnyć',
'tooltip-ca-undelete' => 'změny wobnowić, kotrež buchu do wušmórnjenja sčinjene',
'tooltip-ca-move' => 'stronu přesunyć',
'tooltip-ca-watch' => 'stronu  wobkedźbowankam přidać',
'tooltip-ca-unwatch' => 'stronu z wobkedźbowankow wotstronić',
'tooltip-search' => '{{GRAMMAR:akuzatiw|{{SITENAME}}}} přepytać',
'tooltip-search-go' => 'Dźi k stronje z runje tutym mjenom, jeli eksistuje',
'tooltip-search-fulltext' => 'Strony za tutym tekstom přepytać',
'tooltip-p-logo' => 'hłowna strona',
'tooltip-n-mainpage' => 'hłownu stronu pokazać',
'tooltip-n-mainpage-description' => 'Hłownu stronu wopytać',
'tooltip-n-portal' => 'wo projekće, što móžeš činić, hdźe móžeš informacije namakać',
'tooltip-n-currentevents' => 'pozadkowe informacije wo aktualnych podawkach pytać',
'tooltip-n-recentchanges' => 'lisćina aktualnych změnow w tutym wikiju',
'tooltip-n-randompage' => 'připadny nastawk wopytać',
'tooltip-n-help' => 'pomocna strona',
'tooltip-t-whatlinkshere' => 'lisćina wšěch stronow, kotrež sem wotkazuja',
'tooltip-t-recentchangeslinked' => 'aktualne změny w stronach, na kotrež tuta strona wotkazuje',
'tooltip-feed-rss' => 'RSS-feed za tutu stronu',
'tooltip-feed-atom' => 'Atom-feed za tutu stronu',
'tooltip-t-contributions' => 'přinoški tutoho wužiwarja wobhladać',
'tooltip-t-emailuser' => 'wužiwarjej mejlku pósłać',
'tooltip-t-upload' => 'Dataje nahrać',
'tooltip-t-specialpages' => 'lisćina wšěch specialnych stronow',
'tooltip-t-print' => 'ćišćowy napohlad tuteje strony',
'tooltip-t-permalink' => 'trajny wotkaz k tutej wersiji strony',
'tooltip-ca-nstab-main' => 'stronu wobhladać',
'tooltip-ca-nstab-user' => 'wužiwarsku stronu wobhladać',
'tooltip-ca-nstab-media' => 'datajowu stronu wobhladać',
'tooltip-ca-nstab-special' => 'To je specialna strona. Njemóžeš ju wobdźěłać.',
'tooltip-ca-nstab-project' => 'projektowu stronu wobhladać',
'tooltip-ca-nstab-image' => 'Datajowu stronu pokazać',
'tooltip-ca-nstab-mediawiki' => 'systemowu zdźělenku wobhladać',
'tooltip-ca-nstab-template' => 'předłohu wobhladać',
'tooltip-ca-nstab-help' => 'pomocnu stronu wobhladać',
'tooltip-ca-nstab-category' => 'kategorijnu stronu wobhladać',
'tooltip-minoredit' => 'jako snadnu změnu woznamjenić',
'tooltip-save' => 'změny składować',
'tooltip-preview' => 'twoje změny přehladnyć, prošu čiń to do składowanja!',
'tooltip-diff' => 'změny pokazać, kotrež sy w teksće činił',
'tooltip-compareselectedversions' => 'rozdźěle mjez wubranymaj wersijomaj tuteje strony pokazać',
'tooltip-watch' => 'tutu stronu wobkedźbowankam přidać',
'tooltip-watchlistedit-normal-submit' => 'Titule wotstronić',
'tooltip-watchlistedit-raw-submit' => 'Wobkedźbowanki aktualizować',
'tooltip-recreate' => 'stronu znowa wutworić, hačrunjež bu wumšmórnjena',
'tooltip-upload' => 'nahraće startować',
'tooltip-rollback' => '"Rollback" anuluje změny strony poslednjeho sobudźěłaćerja přez jedne kliknjenje.',
'tooltip-undo' => 'anuluje tutu změnu a wočinja wobdźěłowanski formular w přehladowym modusu. Zmóžnja přičinu w zjeću přidać.',
'tooltip-preferences-save' => 'Nastajenja składować',
'tooltip-summary' => 'Zapodaj krótke zjeće',
'interlanguage-link-title' => '$1 – $2',

# Stylesheets
'common.css' => '/* CSS w tutej dataji budźe so na wšěch stronow wuskutkować. */',
'monobook.css' => '/* CSS wobdźěłać, zo by so skin „monobook” za wšěčh wužiwarjow tutoho skina priměrił */',

# Scripts
'common.js' => '/* Kóždy JavaScript tu so za wšěch wužiwarjow při kóždym zwobraznjenju někajkeje strony začita. */',
'monobook.js' => '/* Slědowacy JavaScript začita so za wužiwarjow, kotřiž šat MonoBook wužiwaja */',

# Metadata
'notacceptable' => 'Serwer wikija njemóže daty we formaće poskićić, kotryž twój wudawanski nastroj móže čitać.',

# Attribution
'anonymous' => '{{PLURAL:$1|Anonymny wužiwar|Anonymnaj wužiwarjej|Anonymni wužiwarjo|Anonymni wužiwarjo}} we {{GRAMMAR:lokatiw|{{SITENAME}}}}',
'siteuser' => 'wužiwarja $1 na {{GRAMMAR:lokatiw|{{SITENAME}}}}',
'anonuser' => 'anonymny wužiwar $1 na {{GRAMMAR:lokatiw|{{SITENAME}}}}',
'lastmodifiedatby' => 'Strona bu dnja $1 w $2 hodź. wot $3 změnjena.',
'othercontribs' => 'Bazěruje na dźěle wužiwarja $1.',
'others' => 'druhich',
'siteusers' => ' {{PLURAL:$2|wužiwarja|wužiwarjeju|wužiwarjow|wužiwarjow}} $1 na {{GRAMMAR:lokatiw|{{SITENAME}}}}',
'anonusers' => ' {{PLURAL:$2|anonymny wužiwar|anonymnaj wužiwarjej|anonymni wužiwarjo|anonymnych wužiwarjow}} $1 na {{GRAMMAR:lokatiw|{{SITENAME}}}}',
'creditspage' => 'Dźak awtoram',
'nocredits' => 'Za tutu stronu žane informacije wo zasłužbach njejsu.',

# Spam protection
'spamprotectiontitle' => 'Spamowy filter',
'spamprotectiontext' => 'Strona, kotruž sy spytał składować, bu přez spamowy filter zablokowana. To so najskerje přez wotkaz na  eksterne sydło w čornej lisćinje zawinuje.',
'spamprotectionmatch' => 'Sćěhowacy tekst je naš spamowy filter wotpokazał: $1',
'spambot_username' => 'MediaWiki čisćenje wot spama',
'spam_reverting' => 'wróćo na poslednju wersiju, kotraž wotkazy na $1 njewobsahuje',
'spam_blanking' => 'Wšě wersije z wotkazami do $1 so porjedźeja',
'spam_deleting' => 'Wšě wersije z wotkazami do $1 so zhašeja',
'simpleantispam-label' => "Kontrola přećiwo spamej.
Tu '''NIČO''' njezapisać!",

# Info page
'pageinfo-title' => 'Informacije za stronu "$1"',
'pageinfo-not-current' => 'Bohužel njedadźa so tute informacije za stare wersije podać.',
'pageinfo-header-basic' => 'Zakładne informacije',
'pageinfo-header-edits' => 'Stawizny wobdźěłać',
'pageinfo-header-restrictions' => 'Škit strony',
'pageinfo-header-properties' => 'Kajkosće strony',
'pageinfo-display-title' => 'Zwobraznjenski titul',
'pageinfo-default-sort' => 'Standardny sortěrowanski kluč',
'pageinfo-length' => 'Dołhosć strony (w bajtach)',
'pageinfo-article-id' => 'ID strony',
'pageinfo-language' => 'Rěč wobsaha strony',
'pageinfo-content-model' => 'Model wobsaha strony',
'pageinfo-robot-policy' => 'Indicěrowanje přez roboty',
'pageinfo-robot-index' => 'Dowoleny',
'pageinfo-robot-noindex' => 'Zakazany',
'pageinfo-views' => 'Ličba zwobraznjenjow',
'pageinfo-watchers' => 'Ličba wobkedźbowarjow strony',
'pageinfo-few-watchers' => 'Mjenje hač $1 {{PLURAL:$1|wobkedźbowar|wobkedźbowarjej|wobkedźbowarje|wobkedźbowarjow}}',
'pageinfo-redirects-name' => 'Ličba dalesposrědkowanjow k tutej stronje',
'pageinfo-redirects-value' => '$1',
'pageinfo-subpages-name' => 'Podstrony tuteje strony',
'pageinfo-subpages-value' => '$1 ($2 {{PLURAL:$2|dalesposrědkowanje|dalesposrědkowani|dalesposrědkowanja|dalesposrědkowanjow}}; $3 {{PLURAL:$3|njedalesposrědkowanje|njedalesposrědkowani|njedalesposrědkowanja|njedalesposrědkowanjow}})',
'pageinfo-firstuser' => 'Awtor strony',
'pageinfo-firsttime' => 'Datum wutworjenja strony',
'pageinfo-lastuser' => 'Posledni wobdźěłar',
'pageinfo-lasttime' => 'Datum poslednjeje změny',
'pageinfo-edits' => 'Cyłkowna ličba změnow',
'pageinfo-authors' => 'Cyłkowna ličba rozdźělnych awtorow',
'pageinfo-recent-edits' => 'Ličba najnowšich změnow (za zańdźenych $1)',
'pageinfo-recent-authors' => 'Najnowša ličba rozdźělnych awtorow',
'pageinfo-magic-words' => '{{PLURAL:$1|Magiske słowo|Magiskej słowje|Magiske słowa|Magiske słowa}} ($1)',
'pageinfo-hidden-categories' => '{{PLURAL:$1|Schowana kategorija|Schowanej kategoriji|Schowane kategorije|Schowane kategorije}} ($1)',
'pageinfo-templates' => '{{PLURAL:$1|Zapřijata předłoha|Zapřijatej předłoze|Zapřijate předłohi|Zapřijate předłohi}} ($1)',
'pageinfo-transclusions' => '{{PLURAL:$1|Strona zapřijata|Stronje zapřijatej|Strony zapřijate}}  do ($1)',
'pageinfo-toolboxlink' => 'Informacije wo stronje',
'pageinfo-redirectsto' => 'Sposrědkuje k',
'pageinfo-redirectsto-info' => 'Info',
'pageinfo-contentpage' => 'Liči so jako wobsahowa strona',
'pageinfo-contentpage-yes' => 'Haj',
'pageinfo-protect-cascading' => 'Kaskadowy škit wottud',
'pageinfo-protect-cascading-yes' => 'Haj',
'pageinfo-protect-cascading-from' => 'Kaskadowy škit wot',
'pageinfo-category-info' => 'Kategorijowe informacije',
'pageinfo-category-pages' => 'Ličba rěkow',
'pageinfo-category-subcats' => 'Ličba podkategorijow',
'pageinfo-category-files' => 'Ličba datajow',

# Skin names
'skinname-cologneblue' => 'Kölnjanska módrina',
'skinname-monobook' => 'MonoBook',
'skinname-modern' => 'Moderny',

# Patrolling
'markaspatrolleddiff' => 'Změnu jako přepruwowanu woznamjenić',
'markaspatrolledtext' => 'Tutu změnu nastawka jako přepruwowanu woznamjenić',
'markedaspatrolled' => 'Změna bu jako přepruwowana woznamjenjena.',
'markedaspatrolledtext' => 'Wubrana wersija [[:$1]] bu jako dohladowana woznamjenjena.',
'rcpatroldisabled' => 'Přepruwowanje aktualnych změnow je znjemóžnjene.',
'rcpatroldisabledtext' => 'Funkcija přepruwowanja aktualnych změnow je tuchwilu znjemóžnjena.',
'markedaspatrollederror' => 'Njemóžno jako přepruwowanu woznamjenić.',
'markedaspatrollederrortext' => 'Dyrbiš wersiju podać, kotraž so ma jako přepruwowana woznamjenić.',
'markedaspatrollederror-noautopatrol' => 'Njesměš swoje změny jako přepruwowane woznamjenjeć.',
'markedaspatrollednotify' => 'Tuta změna do $1 je so jako dohladowana markěrowała.',
'markedaspatrollederrornotify' => 'Markěrowanje jako dohladowane je so njeporadźiło.',

# Patrol log
'patrol-log-page' => 'Protokol přepruwowanjow',
'patrol-log-header' => 'To je protokol dohladowanych wersijow.',
'log-show-hide-patrol' => 'Protokol dohladowanja $1',

# Image deletion
'deletedrevision' => 'Stara wersija $1 wušmórnjena',
'filedeleteerror-short' => 'Zmylk při zničenju dataje: $1',
'filedeleteerror-long' => 'Buchu zmylki při zničenju dataje zwěsćene:

$1',
'filedelete-missing' => 'Dataja "$1" njeda so zničić, dokelž njeeksistuje.',
'filedelete-old-unregistered' => 'Podata datajowa wersija "$1" w datowej bance njeje.',
'filedelete-current-unregistered' => 'Podata dataja "$1" w datowej bance njeje.',
'filedelete-archive-read-only' => 'Do archiwoweho zapisa "$1" njeda so z webowym serwerom pisać.',

# Browsing diffs
'previousdiff' => '← Předchadna změna',
'nextdiff' => 'Přichodna změna →',

# Media information
'mediawarning' => "'''Warnowanje''': Tutón datajowy typ móhł złowólny kod wobsahować. Hdyž so wuwjedźe,  móhł so twój system wobškodźić.",
'imagemaxsize' => "Maksimalna wobrazowa wulkosć:<br />''(za strony datajoweho wopisanja)''",
'thumbsize' => 'Wulkosć miniaturkow (thumbnails):',
'widthheight' => '$1x$2',
'widthheightpage' => '$1 × $2, $3 {{PLURAL:$3|strona|stronje|strony|stronow}}',
'file-info' => 'Wulkosć dataje: $1, typ MIME: $2',
'file-info-size' => '$1 × $2 pikselow, wulkosć dataje: $3, typ MIME: $4',
'file-info-size-pages' => '$1 × $2 pikselow, wulkosć dataje: $3, MIME-typ: $4, $5 {{PLURAL:$5|strona|stronje|strony|stronow}}',
'file-nohires' => 'Za tutu dataju žane wyše rozeznaće njeje.',
'svg-long-desc' => 'SVG-dataja, zakładna wulkosć: $1 × $2 pikselow, datajowa wulkosć: $3',
'svg-long-desc-animated' => 'Animěrowana SVG-dataja, zakładnej wotměraj $1 × $2 pikselow, datajowa wulkosć: $3',
'svg-long-error' => 'Njepłaćiwa SVG-dataja: $1',
'show-big-image' => 'Originalna dataja',
'show-big-image-preview' => 'Wulkosć tutoho přehlada: $1.',
'show-big-image-other' => '{{PLURAL:$2|Druhe rozeznaće|Druhej rozeznaći|Druhe rozeznaća|Druhe rozeznaća}}: $1.',
'show-big-image-size' => '$1 × $2 pikselow',
'file-info-gif-looped' => 'Bjezkónčna sekla',
'file-info-gif-frames' => '$1 {{PLURAL:$1|wobłuk|wobłukaj|wobłuki|wobłukow}}',
'file-info-png-looped' => 'Sekla',
'file-info-png-repeat' => '{{PLURAL:$1|$1 raz|dwójce|$1 razy|$1 razow}} wotehrata',
'file-info-png-frames' => '$1 {{PLURAL:$1|wobłuk|wobłukaj|wobłuki|wobłukow}}',
'file-no-thumb-animation' => "'''Kedźbu: Techniskich wobmjezowanjow dla přehladne wobrazki tuteje dataje so njeaniměruja.'''",
'file-no-thumb-animation-gif' => "'''Kedźbu: Techniskich wobmjezowanjow dla přehladne wobrazki wysokeho rozeznaća GIF-wobrazow kaž tutoho njebudu so animěrować.'''",

# Special:NewFiles
'newimages' => 'Nowe dataje',
'imagelisttext' => "Deleka je lisćina '''$1''' {{PLURAL:$1|dataje|datajow|datajow|datajow}}, kotraž je po $2 sortěrowana.",
'newimages-summary' => 'Tuta specialna strona naliči aktualnje nahrate wobrazy a druhe dataje.',
'newimages-legend' => 'Filter',
'newimages-label' => 'Datajowe mjeno (abo dźěl z njeho):',
'showhidebots' => '(bots $1)',
'noimages' => 'Žane dataje.',
'ilsubmit' => 'Pytać',
'bydate' => 'datumje',
'sp-newimages-showfrom' => 'Nowe dataje pokazać, započinajo wot $1, $2',

# Video information, used by Language::formatTimePeriod() to format lengths in the above messages
'seconds' => '{{PLURAL:$1|$1 sekundu|$1 sekundomaj|$1 sekundami|$1 sekundami}}',
'minutes' => '{{PLURAL:$1|$1 mjeńšinu|$1 mjeńšinomaj|$1 mjeńšinami|$1 mjeńšinami}}',
'hours' => '{{PLURAL:$1|$1 hodźinu|$1 hodźinomaj|$1 hodźinami|$1 hodźinami}}',
'days' => '{{PLURAL:$1|$1 dnjom|$1 dnjomaj|$1 dnjemi|$1 dnjemi}}',
'weeks' => '{{PLURAL:$1|$1 tydźeń|$1 njedźeli|$1 njedźele|$1 njedźel}}',
'months' => '{{PLURAL:$1|$1 měsacom|$1 měsacomaj|$1 měsacami}}',
'years' => '{{PLURAL:$1|$1 lětom|$1 lětomaj|$1 lětami}}',
'ago' => 'před $1',
'just-now' => 'runje',

# Human-readable timestamps
'hours-ago' => 'před $1 {{PLURAL:$1|hodźinu|hodźinomaj|hodźinami}}',
'minutes-ago' => 'před $1 {{PLURAL:$1|mjeńšinu|mjeńšinomaj|mjeńšinami}}',
'seconds-ago' => 'před $1 {{PLURAL:$1|sekundu|sekundomaj|sekundami}}',
'monday-at' => 'Póndźela $1',
'tuesday-at' => 'Wutora $1',
'wednesday-at' => 'Srjeda $1',
'thursday-at' => 'Štwórtk $1',
'friday-at' => 'Pjatk $1',
'saturday-at' => 'Sobota $1',
'sunday-at' => 'Njedźela $1',
'yesterday-at' => 'Wčera $1',

# Bad image list
'bad_image_list' => 'Format:

Jenož zapiski lisćiny (linki, kotrež so z * započinaja), so wobkedźbuja. Prěni wotkaz na lince dyrbi wotkaz k njewitanemu wobrazej być.
Nasledne wotkazy na samsnej lince definuja wuwzaća, hdźež so wobraz smě najebać toho jewić.',

# Metadata
'metadata' => 'Metadaty',
'metadata-help' => 'Dataja wobsahuje přidatne informacije, kotrež pochadźa z digitalneje kamery abo skenera. Jeli dataja bu wot toho změnjena je móžno, zo někotre podrobnosće z nětčišeho stawa wotchila.',
'metadata-expand' => 'Podrobnosće pokazać',
'metadata-collapse' => 'Podrobnosće schować',
'metadata-fields' => 'Slědowace pola metadatow, kotrež su w tutej zdźělence podate, budu so do stronow wopisanje wobrazow zapřijimać, hdyž tabela metadatow je sfałdowana. Druhe so po standardźe njepokazuja.
* make
* model
* datetimeoriginal
* exposuretime
* fnumber
* isospeedratings
* focallength
* artist
* copyright
* imagedescription
* gpslatitude
* gpslongitude
* gpsaltitude',

# Exif tags
'exif-imagewidth' => 'Šěrokosć',
'exif-imagelength' => 'Wysokosć',
'exif-bitspersample' => 'Bitow na barbowu komponentu',
'exif-compression' => 'Metoda kompresije',
'exif-photometricinterpretation' => 'Zestajenje pikselow',
'exif-orientation' => 'Wusměrjenje kamery',
'exif-samplesperpixel' => 'Ličba komponentow',
'exif-planarconfiguration' => 'Porjad datow',
'exif-ycbcrsubsampling' => 'Poměr podwotmasanja (Subsampling) wot Y do C',
'exif-ycbcrpositioning' => 'Zaměstnjenje Y a C',
'exif-xresolution' => 'Wodorune rozeznaće',
'exif-yresolution' => 'Padorune rozeznaće',
'exif-stripoffsets' => 'Městno wobrazowych datow',
'exif-rowsperstrip' => 'Ličba rjadkow na pas',
'exif-stripbytecounts' => 'Bajty na komprimowany pas',
'exif-jpeginterchangeformat' => 'Offset k JPEG SOI',
'exif-jpeginterchangeformatlength' => 'Bajty JPEG datow',
'exif-whitepoint' => 'Barbowa kwalita běłeho dypka',
'exif-primarychromaticities' => 'Barbowa kwalita primarnych barbow',
'exif-ycbcrcoefficients' => 'Koeficienty matriksy za transformaciju barbneho ruma',
'exif-referenceblackwhite' => 'Por čorneje a běłeje referencneje hódnoty',
'exif-datetime' => 'Datum a čas datajoweje změny',
'exif-imagedescription' => 'Titl wobraza',
'exif-make' => 'Zhotowjer kamery',
'exif-model' => 'Model kamery',
'exif-software' => 'Wužiwana softwara',
'exif-artist' => 'Awtor',
'exif-copyright' => 'Mějićel awtorskich prawow',
'exif-exifversion' => 'Wersija EXIF',
'exif-flashpixversion' => 'Podpěrowana wersija Flashpix',
'exif-colorspace' => 'Barbny rum',
'exif-componentsconfiguration' => 'Woznam kóždeje komponenty',
'exif-compressedbitsperpixel' => 'Modus wobrazoweje kompresije',
'exif-pixelydimension' => 'Šěrokosć wobraza',
'exif-pixelxdimension' => 'Wysokosć wobraza',
'exif-usercomment' => 'Přispomjenja wužiwarja',
'exif-relatedsoundfile' => 'Zwjazana zynkowa dataja',
'exif-datetimeoriginal' => 'Datum a čas wutworjenja datow',
'exif-datetimedigitized' => 'Datum a čas digitalizowanja',
'exif-subsectime' => 'Dźěle sekundy za DateTime',
'exif-subsectimeoriginal' => 'Dźěle sekundy za DateTimeOriginal',
'exif-subsectimedigitized' => 'Dźěle sekundy za DateTimeDigitized',
'exif-exposuretime' => 'Naswětlenski čas',
'exif-exposuretime-format' => '$1 sek. ($2)',
'exif-fnumber' => 'Zasłona',
'exif-exposureprogram' => 'Naswětlenski program',
'exif-spectralsensitivity' => 'Spektralna cutliwosć',
'exif-isospeedratings' => 'Cutliwosć filma abo sensora (ISO)',
'exif-shutterspeedvalue' => 'Čas zasłonoweje zawěrki APEX',
'exif-aperturevalue' => 'Zasłonowa šěrokosć APEX',
'exif-brightnessvalue' => 'APEX-swětłosć',
'exif-exposurebiasvalue' => 'Naswětlenska korektura',
'exif-maxaperturevalue' => 'Najwjetša zasłona',
'exif-subjectdistance' => 'Zdalenje k předmjetej',
'exif-meteringmode' => 'Měrjenska metoda',
'exif-lightsource' => 'Žórło swěcy',
'exif-flash' => 'Błysk',
'exif-focallength' => 'Palnišćowa zdalenosć',
'exif-subjectarea' => 'Wobwod předmjeta',
'exif-flashenergy' => 'Sylnosć błyska',
'exif-focalplanexresolution' => 'Wodorune rozeznaće sensora',
'exif-focalplaneyresolution' => 'Padorune rozeznaće sensora',
'exif-focalplaneresolutionunit' => 'Jednotka rozeznaća sensora',
'exif-subjectlocation' => 'Městno předmjeta',
'exif-exposureindex' => 'Naswětlenski indeks',
'exif-sensingmethod' => 'Měrjenska metoda',
'exif-filesource' => 'Žórło dataje',
'exif-scenetype' => 'Typ sceny',
'exif-customrendered' => 'Wot wužiwarja definowane předźěłanje wobrazow',
'exif-exposuremode' => 'Naswětlenski modus',
'exif-whitebalance' => 'Balansa běłeho dypka',
'exif-digitalzoomratio' => 'Digitalny zoom',
'exif-focallengthin35mmfilm' => 'Palnišćowa zdalenosć za film 35 mm přeličena',
'exif-scenecapturetype' => 'Družina sceny',
'exif-gaincontrol' => 'Regulowanje sceny',
'exif-contrast' => 'Kontrast',
'exif-saturation' => 'Nasyćenosć',
'exif-sharpness' => 'Wótrosć',
'exif-devicesettingdescription' => 'Nastajenja nastroja',
'exif-subjectdistancerange' => 'Zdalenosć k motiwej',
'exif-imageuniqueid' => 'ID wobraza',
'exif-gpsversionid' => 'Wersija ID GPS',
'exif-gpslatituderef' => 'Sewjerna abo južna šěrina',
'exif-gpslatitude' => 'Geografiska šěrina',
'exif-gpslongituderef' => 'Wuchodna abo zapadna dołhosć',
'exif-gpslongitude' => 'Geografiska dołhosć',
'exif-gpsaltituderef' => 'Referencna wyšina',
'exif-gpsaltitude' => 'Wyšina',
'exif-gpstimestamp' => 'Čas GPS (atomowy časnik)',
'exif-gpssatellites' => 'Satelity wužiwane za měrjenje',
'exif-gpsstatus' => 'Status přijimaka',
'exif-gpsmeasuremode' => 'Měrjenska metoda',
'exif-gpsdop' => 'Měrjenska dokładnosć',
'exif-gpsspeedref' => 'Jednotka spěšnosće',
'exif-gpsspeed' => 'Spěšnosć přijimaka GPS',
'exif-gpstrackref' => 'Referenca za směr pohiba',
'exif-gpstrack' => 'Směr pohiba',
'exif-gpsimgdirectionref' => 'Referenca za wusměrjenje wobraza',
'exif-gpsimgdirection' => 'Wobrazowy směr',
'exif-gpsmapdatum' => 'Wužiwane geodetiske daty',
'exif-gpsdestlatituderef' => 'Referenca za šěrinu',
'exif-gpsdestlatitude' => 'Šěrina',
'exif-gpsdestlongituderef' => 'Referenca dołhosće',
'exif-gpsdestlongitude' => 'Dołhosć',
'exif-gpsdestbearingref' => 'Referenca za wusměrjenje',
'exif-gpsdestbearing' => 'Wusměrjenje',
'exif-gpsdestdistanceref' => 'Referenca za zdalenosć k cilej',
'exif-gpsdestdistance' => 'Zdalenosć k cilej',
'exif-gpsprocessingmethod' => 'Metoda předźěłanja GPS',
'exif-gpsareainformation' => 'Mjeno wobwoda GPS',
'exif-gpsdatestamp' => 'Datum GPS',
'exif-gpsdifferential' => 'Diferencialna korektura GPS',
'exif-jpegfilecomment' => 'Komentar JPEG-dataje',
'exif-keywords' => 'Klučowe słowa',
'exif-worldregioncreated' => 'Swětowy region, w kotrymž bu sfotografowane',
'exif-countrycreated' => 'Kraj, w kotrymž bu sfotografowane',
'exif-countrycodecreated' => 'Kod za kraj, w kotrymž je so sfotografowało',
'exif-provinceorstatecreated' => 'Zwjazkowy kraj, w kotrymž bu sfotografowane',
'exif-citycreated' => 'Město, w kotrymž bu sfotografowane',
'exif-sublocationcreated' => 'Wobwod města, w kotrymž wobraz je so sfotografował',
'exif-worldregiondest' => 'Pokazany swětowy region',
'exif-countrydest' => 'Pokazany kraj',
'exif-countrycodedest' => 'Kod za pokazany kraj',
'exif-provinceorstatedest' => 'Pokazany zwjazkowy kraj',
'exif-citydest' => 'Pokazane město',
'exif-sublocationdest' => 'Wobwod pokazaneho města',
'exif-objectname' => 'Krótki titul',
'exif-specialinstructions' => 'Wosebite instrukcije',
'exif-headline' => 'Nadpis',
'exif-credit' => 'Mjenowanje/Poskićowar',
'exif-source' => 'Žórło',
'exif-editstatus' => 'Wobdźěłowanski status wobraza',
'exif-urgency' => 'Nuznosć',
'exif-fixtureidentifier' => 'Mjeno kolumny',
'exif-locationdest' => 'Zwobraznjene městno',
'exif-locationdestcode' => 'Kod za zwobraznjene městno',
'exif-objectcycle' => 'Čas dnja, za kotryž medij je mysleny',
'exif-contact' => 'Kontaktowe informacije',
'exif-writer' => 'Spisar',
'exif-languagecode' => 'Rěč',
'exif-iimversion' => 'IIM-wersija',
'exif-iimcategory' => 'Kategorija',
'exif-iimsupplementalcategory' => 'Přidatne kategorije',
'exif-datetimeexpires' => 'Njewužiwać po',
'exif-datetimereleased' => 'Wozjewjeny dnja',
'exif-originaltransmissionref' => 'Kod městna, wot kotrehož je so foto přenjesło',
'exif-identifier' => 'Identfikator',
'exif-lens' => 'Wužity objektiw',
'exif-serialnumber' => 'Serijowe čisło kamery',
'exif-cameraownername' => 'Wobsedźer kamery',
'exif-label' => 'Pomjenowanje',
'exif-datetimemetadata' => 'Datum, hdyž su so metadaty posledni raz změnili',
'exif-nickname' => 'Zwučene mjeno wobraza',
'exif-rating' => 'Pohódnoćenje (z 5)',
'exif-rightscertificate' => 'Certifikat zarjadowanja prawow',
'exif-copyrighted' => 'Status awtorskeho prawa:',
'exif-copyrightowner' => 'Mějićel awtorskeho prawa',
'exif-usageterms' => 'Wužiwanske wuměnjenja',
'exif-webstatement' => 'Online-deklaracija wo awtorskim prawje',
'exif-originaldocumentid' => 'Jednozmyslny ID originalneho dokumenta',
'exif-licenseurl' => 'URL za licencu awtorskeho prawa',
'exif-morepermissionsurl' => 'Alternatiwne licencne informacije',
'exif-attributionurl' => 'Při zasowužiwanju tutoho dźěła, wotkazaj prošu do:',
'exif-preferredattributionname' => 'Při zasowužiwanju tutoho dźěła, naspomń prošu',
'exif-pngfilecomment' => 'Komentar PNG-dataje',
'exif-disclaimer' => 'Wuzamknjenje rukowanja',
'exif-contentwarning' => 'Wobsahowe warnowanje',
'exif-giffilecomment' => 'Komentar GIF-dataje',
'exif-intellectualgenre' => 'Typ medija',
'exif-subjectnewscode' => 'Temowy kod',
'exif-scenecode' => 'IPTC-kod napohlada',
'exif-event' => 'Zwobraznjeny podawk',
'exif-organisationinimage' => 'Zwobraznjena organizacija',
'exif-personinimage' => 'Zwobraznjena wosoba',
'exif-originalimageheight' => 'Wysokosć wobraza před přitřihowanjom',
'exif-originalimagewidth' => 'Šěrokosć wobraza před přitřihowanjom',

# Exif attributes
'exif-compression-1' => 'Njekomprimowany',
'exif-compression-2' => 'CCITT skupina 3 jednodimensionalne modificěrowane kodowanje Huffman běhoweje dołhosće',
'exif-compression-3' => 'CCITT skupina 3 faksowe kodowanje',
'exif-compression-4' => 'CCITT skupina 4 faksowe kodowanje',

'exif-copyrighted-true' => 'Přez awtorske prawo škitany',
'exif-copyrighted-false' => 'Status awtorskeho prawa njepostajeny',

'exif-unknowndate' => 'Njeznaty datum',

'exif-orientation-1' => 'Normalnje',
'exif-orientation-2' => 'Wodorunje wobroćeny',
'exif-orientation-3' => '180° zwjertnjeny',
'exif-orientation-4' => 'Padorunje wobroćeny',
'exif-orientation-5' => '90° přećiwo směrej časnika zwjertneny a padorunje wobroćeny',
'exif-orientation-6' => '90° přećiwo směrej časnika zwjertnjeny',
'exif-orientation-7' => '90° w směrje časnika zwjertnjeny a padorunje wobroćeny',
'exif-orientation-8' => '90° w směrje časnika zwjertnjeny',

'exif-planarconfiguration-1' => 'Škropawy format',
'exif-planarconfiguration-2' => 'Płony format',

'exif-colorspace-65535' => 'Njekalibrowany',

'exif-componentsconfiguration-0' => 'Njeeksistuje',

'exif-exposureprogram-0' => 'Njeznaty',
'exif-exposureprogram-1' => 'Manuelny',
'exif-exposureprogram-2' => 'Normalny program',
'exif-exposureprogram-3' => 'Priorita zasłony',
'exif-exposureprogram-4' => 'Priorita zawěrki',
'exif-exposureprogram-5' => 'Kreatiwny program (za hłubokosć wótrosće)',
'exif-exposureprogram-6' => 'Akciski program (za wyšu spěšnosć zawěrki)',
'exif-exposureprogram-7' => 'Portretowy modus (za fota z blikosće z pozadkom zwonka fokusa)',
'exif-exposureprogram-8' => 'Krajinowy modus (za fota krajinow z pozadkom we fokusu)',

'exif-subjectdistance-value' => '$1 m',

'exif-meteringmode-0' => 'Njeznata',
'exif-meteringmode-1' => 'Přerězk',
'exif-meteringmode-2' => 'Srjedźa wusměrjeny',
'exif-meteringmode-3' => 'Spotowe měrjenje',
'exif-meteringmode-4' => 'Multispot',
'exif-meteringmode-5' => 'Šema',
'exif-meteringmode-6' => 'Dźělna',
'exif-meteringmode-255' => 'Druha',

'exif-lightsource-0' => 'Njeznata',
'exif-lightsource-1' => 'Dnjowe swětło',
'exif-lightsource-2' => 'Fluorescentne',
'exif-lightsource-3' => 'Žehlawka',
'exif-lightsource-4' => 'Błysk',
'exif-lightsource-9' => 'Rjane wjedro',
'exif-lightsource-10' => 'Pomróčene',
'exif-lightsource-11' => 'Sćin',
'exif-lightsource-12' => 'Dnjowe swětło fluoreskowace (D 5700 – 7100K)',
'exif-lightsource-13' => 'Dnjowoběły fluoreskowacy (N 4600 – 5400K)',
'exif-lightsource-14' => 'Zymnoběły fluoreskowacy (W 3900 – 4500K)',
'exif-lightsource-15' => 'běły fluoroskowacy (WW 3200 – 3700K)',
'exif-lightsource-17' => 'Standardne swětło A',
'exif-lightsource-18' => 'Standardne swětło B',
'exif-lightsource-19' => 'Standardne swětło C',
'exif-lightsource-24' => 'ISO studijowa wolframowa žehlawka',
'exif-lightsource-255' => 'Druhe žórło swětła',

# Flash modes
'exif-flash-fired-0' => 'Błysk so njepušći',
'exif-flash-fired-1' => 'Błysk zahibany',
'exif-flash-return-0' => 'žana funkcija za spóznaće błyskoweje refleksije',
'exif-flash-return-2' => 'žana refleksija błyska wotkryta',
'exif-flash-return-3' => 'refleksija błyska wotkryta',
'exif-flash-mode-1' => 'wunućeny błysk',
'exif-flash-mode-2' => 'Wunućeny błysk potłóčeny',
'exif-flash-mode-3' => 'awtomatiski modus',
'exif-flash-function-1' => 'Žana błyskowa funkcija',
'exif-flash-redeye-1' => 'Redukcija čerwjenych wočow',

'exif-focalplaneresolutionunit-2' => 'cól',

'exif-sensingmethod-1' => 'Njedefinowany',
'exif-sensingmethod-2' => 'Jednočipowy barbowy přestrjenjowy sensor',
'exif-sensingmethod-3' => 'Dwučipowy barbowy přestrjenjowy sensor',
'exif-sensingmethod-4' => 'Třičipowy barbowy přestrjenjowy sensor',
'exif-sensingmethod-5' => 'Sekwencielny barbowy přestrjenjowy sensor',
'exif-sensingmethod-7' => 'Třilinearny sensor',
'exif-sensingmethod-8' => 'Barbowy sekwencielny linearny sensor',

'exif-filesource-3' => 'Digitalna stejenskowobrazowa kamera',

'exif-scenetype-1' => 'Direktnje fotografowany wobraz',

'exif-customrendered-0' => 'Normalne wobdźěłanje',
'exif-customrendered-1' => 'Wužiwarske wobdźěłanje',

'exif-exposuremode-0' => 'Awtomatiske naswětlenje',
'exif-exposuremode-1' => 'Manuelne naswětlenje',
'exif-exposuremode-2' => 'Rjad naswětlenjow (Bracketing)',

'exif-whitebalance-0' => 'Automatiske wurunanje běłeho',
'exif-whitebalance-1' => 'Manuelne wurunanje běłeho',

'exif-scenecapturetype-0' => 'Standard',
'exif-scenecapturetype-1' => 'Krajina',
'exif-scenecapturetype-2' => 'Portret',
'exif-scenecapturetype-3' => 'Nócna scena',

'exif-gaincontrol-0' => 'Žane',
'exif-gaincontrol-1' => 'Snadne',
'exif-gaincontrol-2' => 'Wysoke zesylnjenje',
'exif-gaincontrol-3' => 'Niske wosłabjenje',
'exif-gaincontrol-4' => 'Wysoke wosłabjenje',

'exif-contrast-0' => 'Normalny',
'exif-contrast-1' => 'Mjechki',
'exif-contrast-2' => 'Sylny',

'exif-saturation-0' => 'Normalna nasyćenosć',
'exif-saturation-1' => 'Niska nasyćenosć',
'exif-saturation-2' => 'Wysoka nasyćenosć',

'exif-sharpness-0' => 'Normalna',
'exif-sharpness-1' => 'Mjechka',
'exif-sharpness-2' => 'Sylna',

'exif-subjectdistancerange-0' => 'Njeznata',
'exif-subjectdistancerange-1' => 'Makro',
'exif-subjectdistancerange-2' => 'Bliski pohlad',
'exif-subjectdistancerange-3' => 'Zdaleny pohlad',

# Pseudotags used for GPSLatitudeRef and GPSDestLatitudeRef
'exif-gpslatitude-n' => 'Sewjerna šěrina',
'exif-gpslatitude-s' => 'Južna šěrina',

# Pseudotags used for GPSLongitudeRef and GPSDestLongitudeRef
'exif-gpslongitude-e' => 'Wuchodna dołhosć',
'exif-gpslongitude-w' => 'Zapadna dołhosć',

# Pseudotags used for GPSAltitudeRef
'exif-gpsaltitude-above-sealevel' => '$1 {{PLURAL:$1|meter|metraj|metry|metrow}} nad mórskej hładźinu',
'exif-gpsaltitude-below-sealevel' => '$1 {{PLURAL:$1|meter|metraj|metry|metrow}} pod mórskej hładźinu',

'exif-gpsstatus-a' => 'Měrjenje běži',
'exif-gpsstatus-v' => 'Interoperabilita měrjenja',

'exif-gpsmeasuremode-2' => 'dwudimensionalne měrjenje',
'exif-gpsmeasuremode-3' => 'třidimensionalne měrjenje',

# Pseudotags used for GPSSpeedRef
'exif-gpsspeed-k' => 'km/h',
'exif-gpsspeed-m' => 'mila/h',
'exif-gpsspeed-n' => 'Suki',

# Pseudotags used for GPSDestDistanceRef
'exif-gpsdestdistance-k' => 'Kilometry',
'exif-gpsdestdistance-m' => 'Mile',
'exif-gpsdestdistance-n' => 'Mórske mile',

'exif-gpsdop-excellent' => 'Wuběrny ($1)',
'exif-gpsdop-good' => 'Dobry ($1)',
'exif-gpsdop-moderate' => 'Srěni ($1)',
'exif-gpsdop-fair' => 'Akceptabelny ($1)',
'exif-gpsdop-poor' => 'Špatny ($1)',

'exif-objectcycle-a' => 'Jenož rano',
'exif-objectcycle-p' => 'Jenož wječor',
'exif-objectcycle-b' => 'Rano kaž tež wječor',

# Pseudotags used for GPSTrackRef, GPSImgDirectionRef and GPSDestBearingRef
'exif-gpsdirection-t' => 'Woprawdźity směr',
'exif-gpsdirection-m' => 'Magnetiski směr',

'exif-ycbcrpositioning-1' => 'Centrowano',
'exif-ycbcrpositioning-2' => 'Susodny',

'exif-dc-contributor' => 'Sobuskutkowarjo',
'exif-dc-coverage' => 'Městny abo časny wobłuk medija',
'exif-dc-date' => 'Datumowe podaća',
'exif-dc-publisher' => 'Wudawaćel',
'exif-dc-relation' => 'Přiwuzne medije',
'exif-dc-rights' => 'Prawa',
'exif-dc-source' => 'Žórło medija',
'exif-dc-type' => 'Typ medija',

'exif-rating-rejected' => 'Wotpokazany',

'exif-isospeedratings-overflow' => 'Wjetše hač 65535',

'exif-iimcategory-ace' => 'Wuměłstwo, kultura a zabawa',
'exif-iimcategory-clj' => 'Kriminalita a prawo',
'exif-iimcategory-dis' => 'Katastrofy a njezboža',
'exif-iimcategory-fin' => 'Hospodarstwo a wobchody',
'exif-iimcategory-edu' => 'Zdźěłanosć',
'exif-iimcategory-evn' => 'Wobswět',
'exif-iimcategory-hth' => 'Strowosć',
'exif-iimcategory-hum' => 'Zajimowy wobwod',
'exif-iimcategory-lab' => 'Dźěło',
'exif-iimcategory-lif' => 'Žiwjenske wašnje a swobodny čas',
'exif-iimcategory-pol' => 'Politika',
'exif-iimcategory-rel' => 'Nabožina a wěra',
'exif-iimcategory-sci' => 'Wědomosć a technika',
'exif-iimcategory-soi' => 'Socialne problemy',
'exif-iimcategory-spo' => 'Sport',
'exif-iimcategory-war' => 'Wójna, konfikty a zběžki',
'exif-iimcategory-wea' => 'Wjedro',

'exif-urgency-normal' => 'Normalna ($1)',
'exif-urgency-low' => 'Niska ($1)',
'exif-urgency-high' => 'Wysoka ($1)',
'exif-urgency-other' => 'Swójska priorita ($1)',

# 'all' in various places, this might be different for inflected languages
'watchlistall2' => 'wšě',
'namespacesall' => 'wšě',
'monthsall' => 'wšě',

# Email address confirmation
'confirmemail' => 'Emailowu adresu wobkrućić',
'confirmemail_noemail' => 'Njejsy płaćiwu e-mejlowu adresu w swojich [[Special:Preferences|nastajenjach]] podał.',
'confirmemail_text' => 'Tutón wiki žada, zo swoju e-mejlowu adresu wobkrućiš, prjedy hač e-mejlowe funkcije wužiješ. Zaktiwuzij tłóčatko deleka, zo by swojej adresy wobkrućensku mejlku pósłał. Mejlka zapřijmje wotkaz, kotryž kod wobsahuje; wočiń wotkaz we swojim wobhladowaku, zo by wobkrućił, zo twoja e-mejlowa adresa je płaćiwa.',
'confirmemail_pending' => ' Potwjerdźenski kod bu hižo z e-mejlu připósłany. Jeli sy runje swoje konto wutworił, wočakaj prošu někotre mjeńšiny, prjedy hač sej nowy kod žadaš.',
'confirmemail_send' => 'Wobkrućenski kod pósłać',
'confirmemail_sent' => 'Wobkrućenska mejlka bu wotesłana.',
'confirmemail_oncreate' => 'Wobkrućenski kod bu na twoju e-mejlowu adresu pósłany. Tutón kod za přizjewjenje trěbne njeje, trjebaš jón pak, zo by e-mejlowe funkcije we wikiju aktiwizował.',
'confirmemail_sendfailed' => '{{SITENAME}} njemóžeše twoje potwjerdźensku e-mejlku pósłać. Přepytaj prošu swoju e-mejlowu adresu za njepłaćiwymi znamješkami.

E-mejlowy program je wróćił: $1',
'confirmemail_invalid' => 'Njepłaćiwy wobkrućacy kod. Kod je snano spadnył.',
'confirmemail_needlogin' => 'Dyrbiš so $1, zo by e-mejlowu adresu wobkrućić móhł.',
'confirmemail_success' => 'Twoja e-mejlowa adresa bu wobkrućena. Móžeš so nětko přizjewić.',
'confirmemail_loggedin' => 'Twoja e-mejlowa adresu bu nětko wobkrućena.',
'confirmemail_subject' => '{{SITENAME}} – wobkrućenje e-mejloweje adresy',
'confirmemail_body' => 'Něchtó, najskerje ty z IP-adresu $1, je wužiwarske konto "$2" z tutej e-mejlowej adresu we {{GRAMMAR:lokatiw|{{SITENAME}}}} zregistrował.

Zo by so wobkrućiło, zo tute konto woprawdźe tebi słuša a zo bychu so e-mejlowe funkcije we {{GRAMMAR:lokatiw|{{SITENAME}}}} zaktiwizowali, wočiń tutón wotkaz w swojim wobhladowaku:

$3

Jeli *njej*sy konto zregistrował, slěduj wotkaz, zo by wobkrućenje e-mejloweje adresy přetorhnył:

$5

Tute wobkrućenski kod spadnje $4.',
'confirmemail_body_changed' => 'Něchtó, najskerje ty z IP-adresu $1, je e-mejlowu adresu konta "$2" do tuteje adresy na {{GRAMMAR:lokatiw|{{SITENAME}}}} změnił.

Zo by so wobkrućiło, zo tute konto woprawdźe tebi słuša a zo bychu so e-mejlowe funkcije na {{GRAMMAR:lokatiw|{{SITENAME}}}} znowa zaktiwizowali, wočiń tutón wotkaz w swojim wobhladowaku:

$3

Jeli konto ći *nje*słuša, slěduj wotkaz, zo by wobkrućenje e-mejloweje adresy přetorhnył:

$5

Tute wobkrućenski kod spadnje $4.',
'confirmemail_body_set' => 'Něchtó, najskerje ty, wot IP-adresy $1,
je e-mejlowu adresu konta "$2" na {{GRAMMAR:lokatiw|{{SITENAME}}}} na tutu adresu stajił.

Zo by wobkrućił, zo tute konto ći woprawdźe słuša a zo bychu so e-mejlowe funkcije na {{GRAMMAR:lokatiw|{{SITENAME}}}} aktiwizowali, wočiń tutón wotkaz w swojim wobhladowaku:

$3

Jeli konto ći *nje*słuša, slěduj tutón wotkaz, 
zo by wobkrućenje e-mejloweje adresy přetorhnył:

$5

Tutón wobkrućenski kod spadnje $4.',
'confirmemail_invalidated' => 'E-mejlowe potwjerdźenje přetorhnjene',
'invalidateemail' => 'E-mejlowe potwjerdźenje přetorhnyć',

# Scary transclusion
'scarytranscludedisabled' => '[Zapřijeće mjezyrěčnych wotkazow je znjemóžnjene]',
'scarytranscludefailed' => '[Zapřijimanje předłohi za $1 je so njeporadźiło]',
'scarytranscludefailed-httpstatus' => '[Wotwołanje předłohi za $1 je so njeporadźiło: HTTP $2]',
'scarytranscludetoolong' => '[URL je předołhi]',

# Delete conflict
'deletedwhileediting' => "'''Kedźbu''': Tuta strona bu wušmórnjena, po tym zo sy započał ju wobdźěłać!",
'confirmrecreate' => "Wužiwar [[User:$1|$1]] ([[User talk:$1|diskusija]]) je stronu wušmórnył, po tym zo sy započał ju wobdźěłać. Přičina:
: ''$2''
Prošu potwjerdź, zo chceš tutu stronu woprawdźe znowa wutworić.",
'confirmrecreate-noreason' => 'Wužiwar [[User:$1|$1]] ([[User talk:$1|diskusija]]) je tutu stronu zhašał, po tym zo sće wobdźěłanje započał. Prošu wobkruć, zo woprawdźe chceš tutu stronu znowa wutworić.',
'recreate' => 'Znowa wutworić',

# action=purge
'confirm_purge_button' => 'W porjadku',
'confirm-purge-top' => 'Pufrowak strony wuprózdnić?',
'confirm-purge-bottom' => 'Wuprózdnja pufrowak a wunuzuje zwobraznjenje aktualneje wersije.',

# action=watch/unwatch
'confirm-watch-button' => 'W porjadku',
'confirm-watch-top' => 'Tutu stronu wobkedźbowankam přidać?',
'confirm-unwatch-button' => 'W porjadku',
'confirm-unwatch-top' => 'Tutu stronu z wobkedźbowankow wotstronić?',

# Separators for various lists, etc.
'quotation-marks' => '"$1"',

# Multipage image navigation
'imgmultipageprev' => '← předchadna strona',
'imgmultipagenext' => 'přichodna strona →',
'imgmultigo' => 'Dźi!',
'imgmultigoto' => 'Dźi k stronje $1',

# Language selector for translatable SVGs
'img-lang-default' => '(standardna rěč)',
'img-lang-info' => 'Tutón wobraz w $1 rysować. $2',
'img-lang-go' => 'Wotpósłać',

# Table pager
'ascending_abbrev' => 'postupowacy',
'descending_abbrev' => 'zestupowacy',
'table_pager_next' => 'přichodna strona',
'table_pager_prev' => 'předchadna strona',
'table_pager_first' => 'prěnja strona',
'table_pager_last' => 'poslednja strona',
'table_pager_limit' => '$1 {{PLURAL:$1|wuslědk|wuslědkaj|wuslědki|wuslědkow}} na stronu pokazać',
'table_pager_limit_label' => 'Zapiski na stronu:',
'table_pager_limit_submit' => 'Wotpósłać',
'table_pager_empty' => 'Žane wuslědki',

# Auto-summaries
'autosumm-blank' => 'Je stronu wuprózdnił',
'autosumm-replace' => "Strona bu z hinašim tekstom přepisana: '$1'",
'autoredircomment' => 'posrědkuju k stronje „[[$1]]”',
'autosumm-new' => "Wutwori stronu z '$1'",

# Size units
'size-kilobytes' => '$1 kB',

# Live preview
'livepreview-loading' => 'Čita so…',
'livepreview-ready' => 'Začitanje… Hotowe!',
'livepreview-failed' => 'Dynamiski přehlad njemóžno!
Spytaj normalny přehlad.',
'livepreview-error' => 'Zwisk njemóžno: $1 "$2"
Spytaj normalny přehlad.',

# Friendlier slave lag warnings
'lag-warn-normal' => 'Změny {{PLURAL:$1|zašłeje $1 sekundy|zašłeju $1 sekundow|zašłych $1 sekundow|zašłych $1 sekundow}} so w tutej lisćinje hišće njezwobraznjeja.',
'lag-warn-high' => 'Wućeženja datoweje banki dla so změny {{PLURAL:$1|zašłeje $1 sekundy|zašłeje $1 sekundow|zašłych $1 sekundow|zašłych $1 sekundow}} w tutej lisćinje hišće njepokazuja.',

# Watchlist editor
'watchlistedit-numitems' => 'Twoje wobkedźbowanki wobsahuja {{PLURAL:$1|1 zapisk|$1 zapiskaj|$1 zapiski|$1 zapiskow}}, diskusijne strony njejsu ličene.',
'watchlistedit-noitems' => 'Twoje wobkedźbowanki su prózdne.',
'watchlistedit-normal-title' => 'Wobkedźbowanki wobdźěłać',
'watchlistedit-normal-legend' => 'Zapiski z wobkedźbowankow wotstronić',
'watchlistedit-normal-explain' => 'Tu su zapiski z twojich wobkedźbowankow. Zo by zapisk wušmórnył, markěruj kašćik pódla njeho a klikń na {{int:Watchlistedit-normal-submit}}". Móžeš tež swoje wobkedźbowanki [[Special:EditWatchlist/raw|w lisćinowym formaće wobdźěłać]].',
'watchlistedit-normal-submit' => 'Zapiski wotstronić',
'watchlistedit-normal-done' => '{{PLURAL:$1|1 zapisk bu|$1 zapiskaj buštej|$1 zapiski buchu|$1 zapiskow  bu}} z twojich wobkedźbowankow {{PLURAL:$1|wotstronjeny|wotstronjenej|wotstronjene|wotstronjene}}:',
'watchlistedit-raw-title' => 'Wobkedźbowanki w lisćinowym formaće wobdźěłać',
'watchlistedit-raw-legend' => 'Wobkedźbowanki w lisćinowym formaće wobdźěłać',
'watchlistedit-raw-explain' => 'Titule mjez twojimi wobkedźbowankach so deleka pokazuja, a dadźa so lisćinje přidać abo z njeje wotstronić;
jedyn titul na linku.
Hdyž sy hotowy, klikń na "{{int:Watchlistedit-raw-submit}}".
Móžeš tež [[Special:EditWatchlist|standardnu wobdźěłowansku stronu]] wužiwać.',
'watchlistedit-raw-titles' => 'Zapiski:',
'watchlistedit-raw-submit' => 'Wobkedźbowanki składować',
'watchlistedit-raw-done' => 'Twoje wobkedźbowanki buchu składowane.',
'watchlistedit-raw-added' => '{{PLURAL:$1|1 zapisk bu dodaty|$1 zapiskaj buštej dodatej|$1 zapiski buchu dodate|$1 zapiskow buchu dodate}}:',
'watchlistedit-raw-removed' => '{{PLURAL:$1|1 zapisk bu wotstronjeny|$1 zapiskaj buštej wotstronjenej|$1 zapiski buchu wotstronjene|$1 zapiskow buchu wotstronjene}}:',

# Watchlist editing tools
'watchlisttools-view' => 'Wobkedźbowanki: Změny',
'watchlisttools-edit' => 'normalnje wobdźěłać',
'watchlisttools-raw' => 'Lisćinowy format wobdźěłać (import/eksport)',

# Iranian month names
'iranian-calendar-m2' => 'Ordibehešt',

# Signatures
'signature' => '[[{{ns:user}}:$1|$2]] ([[{{ns:user_talk}}:$1|diskusija]])',

# Core parser functions
'unknown_extension_tag' => 'Njeznata taflička rozšěrjenja "$1"',
'duplicate-defaultsort' => 'Warnowanje: Standardny sortěrowonski kluč (DEFAULTSORTKEY) "$2" přepisa prjedawšu sortěrowanski kluč "$1".',

# Special:Version
'version' => 'Wersija',
'version-extensions' => 'Instalowane rozšěrjenja',
'version-specialpages' => 'Specialne strony',
'version-parserhooks' => 'Parserowe hoki',
'version-variables' => 'Wariable',
'version-antispam' => 'Škit přećiwo spamej',
'version-skins' => 'Šaty',
'version-other' => 'Druhe',
'version-mediahandlers' => 'Předźěłaki medijow',
'version-hooks' => 'Hoki',
'version-parser-extensiontags' => "Parserowe rozšěrjenja ''(taflički)''",
'version-parser-function-hooks' => 'Parserowe funkcije',
'version-hook-name' => 'Mjeno hoki',
'version-hook-subscribedby' => 'Abonowany wot',
'version-version' => '(Wersija $1)',
'version-license' => 'Licenca MediaWiki',
'version-ext-license' => 'Licenca',
'version-ext-colheader-name' => 'Rozšěrjenje',
'version-ext-colheader-version' => 'Wersija',
'version-ext-colheader-license' => 'Licenca',
'version-ext-colheader-description' => 'Wopisanje',
'version-ext-colheader-credits' => 'Awtorojo',
'version-license-title' => 'Licenca za $1',
'version-license-not-found' => 'Za tute rozšěrjenje njejsu so žane nadrobne licencne informacije namakali.',
'version-credits-title' => 'Dźakprajenja za $1',
'version-credits-not-found' => 'Za tute rozšěrjenje njejsu žane dźakprajenske informacije namakali.',
'version-poweredby-credits' => "Tutón wiki so wot  '''[https://www.mediawiki.org/ MediaWiki]''', copyright © 2001-$1 $2 podpěruje.",
'version-poweredby-others' => 'druzy',
'version-poweredby-translators' => 'Přełožowarjo na translatewiki.net',
'version-credits-summary' => 'Dźakujemy so slědowacym wosobam za jich přinoški k [[Special:Version|MediaWiki]]',
'version-license-info' => 'MediaWiki je swobodna softwara: móžeš ju pod wuměnjenjemi licency GNU General Public License, wozjewjeneje wot załožby Free Software Foundation, rozdźělić a/abo změnić: pak pod wersiju 2 licency pak pod někajkej pozdźišej wersiju.

MediaWiki so w nadźiji rozdźěla, zo budźe wužitny, ale BJEZ GARANTIJU: samo bjez wobsahowaneje garantije PŘEDAWAJOMNOSĆE abo PŘIHÓDNOSĆE ZA WĚSTY ZAMĚR. Hlej GNU general Public License za dalše podrobnosće.

Ty měł [{{SERVER}}{{SCRIPTPATH}}/COPYING kopiju licency GNU General Public License] hromadźe z tutym programom dóstanu měć: jeli nic, napisaj do załožby Free Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA abo [//www.gnu.org/licenses/old-licenses/gpl-2.0.html přečitaj ju online].',
'version-software' => 'Instalowana software',
'version-software-product' => 'Produkt',
'version-software-version' => 'Wersija',
'version-entrypoints' => 'URL zastupneho dypka',
'version-entrypoints-header-entrypoint' => 'Zastupny dypk',
'version-entrypoints-header-url' => 'URL',

# Special:Redirect
'redirect' => 'Po datajowym mjenje, wužiwarju, stronje abo wersijowym ID dale sposrědkować',
'redirect-legend' => 'Do dataje abo strony dale sposrědkować',
'redirect-summary' => 'Tuta specialna strona so do dataje (datajowe mjeno je podate), strony (wersijowy ID abo ID strony je podaty) abo wužiwarskeje strony (numeriski wužiwarski ID je podaty) dale sposrědkuje. Wužiće:
[[{{#Special:Redirect}}/file/Přikład.jpg]], [[{{#Special:Redirect}}/page/64308]], [[{{#Special:Redirect}}/revision/328429]] abo [[{{#Special:Redirect}}/user/101]].',
'redirect-submit' => 'Los',
'redirect-lookup' => 'Pytać:',
'redirect-value' => 'Hódnota:',
'redirect-user' => 'ID wužiwarja',
'redirect-page' => 'ID strony',
'redirect-revision' => 'Wersija strony',
'redirect-file' => 'Datajowe mjeno',
'redirect-not-exists' => 'Hódnota njeje so namakała',

# Special:FileDuplicateSearch
'fileduplicatesearch' => 'Dwójne dataje pytać',
'fileduplicatesearch-summary' => 'Pytanje za duplikatnymi datajemi na zakładźe jich hašoweje hódnoty.',
'fileduplicatesearch-legend' => 'Duplikaty pytać',
'fileduplicatesearch-filename' => 'Datajowe mjeno:',
'fileduplicatesearch-submit' => 'Pytać',
'fileduplicatesearch-info' => '$1 × $2 pikselow<br />Datajowa wulkosć: $3<br />Typ MIME: $4',
'fileduplicatesearch-result-1' => 'Dataja "$1" identiske duplikaty nima.',
'fileduplicatesearch-result-n' => 'Dataja "$1" ma {{PLURAL:$2|1 identiski duplikat|$2 identiskej duplikataj|$2 identiske duplikaty|$2 identiskich duplikatow}}.',
'fileduplicatesearch-noresults' => 'Žana dataja z mjenom "$1" namakana.',

# Special:SpecialPages
'specialpages' => 'Specialne strony',
'specialpages-note-top' => 'Legenda',
'specialpages-note' => '* Normalne specialne strony.
* <span class="mw-specialpagerestricted">Specialne strony z wobmjezowanym přistupom.</span>',
'specialpages-group-maintenance' => 'Hladanske lisćiny',
'specialpages-group-other' => 'Druhe specialne strony',
'specialpages-group-login' => 'Přizjewić/Konto załožić',
'specialpages-group-changes' => 'Poslednje změny a protokole',
'specialpages-group-media' => 'Medije',
'specialpages-group-users' => 'Wužiwarjo a prawa',
'specialpages-group-highuse' => 'Často wužiwane strony',
'specialpages-group-pages' => 'Lisćiny stronow',
'specialpages-group-pagetools' => 'Nastroje stronow',
'specialpages-group-wiki' => 'Daty a nastroje',
'specialpages-group-redirects' => 'Daleposrědkowace specialne strony',
'specialpages-group-spam' => 'Spamowe nastroje',

# Special:BlankPage
'blankpage' => 'Prózdna strona',
'intentionallyblankpage' => 'Tuta strona je z wotpohladom prózdna.',

# External image whitelist
'external_image_whitelist' => ' #Wostaj tutu linku eksaktnje kaž je<pre>
#Zapodaj deleka fragmenty regularnych wurazow (jenož tón dźěl mjez //)
#Tute přirunuja so z URL eksternych wobrazow
#Přihódne zwobraznja so jako wobrazy, hewak so jenož wotkaz k wobrazej pokaza
#Z linkami, kotrež so z # započinaja, wobchadźeja kaž komentary
#To na wulkopisanje njedźiwa

#Zapodaj wšě fragmenty regularnych wurazow nad tutej linku. Wostaj tutu linku eksaktnje kaž je</pre>',

# Special:Tags
'tags' => 'Płaćiwe taflički změnow',
'tag-filter' => 'Filter [[Special:Tags|tafličkow]]:',
'tag-filter-submit' => 'Filter',
'tag-list-wrapper' => '([[Special:Tags|{{PLURAL:$1|Značka|Značce|Znački}}]]: $2)',
'tags-title' => 'Taflički',
'tags-intro' => 'Tuta strona nalistuje taflički, z kotrymiž softwara móže změnu markěrować a jich woznam.',
'tags-tag' => 'Mjeno taflički',
'tags-display-header' => 'Napohlad na lisćinach změnow',
'tags-description-header' => 'Dospołne wopisanje woznama',
'tags-active-header' => 'Aktiwny?',
'tags-hitcount-header' => 'Změny z tafličkami',
'tags-active-yes' => 'Haj',
'tags-active-no' => 'Ně',
'tags-edit' => 'změnić',
'tags-hitcount' => '$1 {{PLURAL:$1|změna|změnje|změny|změnow}}',

# Special:ComparePages
'comparepages' => 'Strony přirunać',
'compare-page1' => 'Strona 1',
'compare-page2' => 'Strona 2',
'compare-rev1' => 'Wersija 1',
'compare-rev2' => 'Wersija 2',
'compare-submit' => 'Přirunać',
'compare-invalid-title' => 'Titul, kotryž sy podał, je njepłaćiwy.',
'compare-title-not-exists' => 'Titul, kotryž sy podał, njeeksistuje.',
'compare-revision-not-exists' => 'Wersija, kotruž sy podał, njeeksistuje.',

# Database error messages
'dberr-header' => 'Tutón wiki ma problem',
'dberr-problems' => 'Wodaj! Tute sydło ma techniske ćežkosće.',
'dberr-again' => 'Počakń někotre mjeńšiny a zaktualizuj stronu.',
'dberr-info' => '(Njeje móžno ze serwerom datoweje banki zwjazać: $1)',
'dberr-info-hidden' => '(Kontakt z datobankowym serwerom móžno njeje)',
'dberr-usegoogle' => 'Mjeztym móžeš z pomocu Google pytać.',
'dberr-outofdate' => 'Wobkedźbuj, zo jich indeksy našeho wobsaha móhli zestarjene być.',
'dberr-cachederror' => 'Slědowaca je pufrowana kopija požadaneje strony a móhła zestarjena być.',

# HTML forms
'htmlform-invalid-input' => 'Su problemy z twojim zapodaćom',
'htmlform-select-badoption' => 'Hódnota, kotruž sy zapodał, płaćiwa opcija njeje.',
'htmlform-int-invalid' => 'Hódnota, kotruž sy zapodał, cyła ličba njeje.',
'htmlform-float-invalid' => 'Hódnota, kotruž sy podał, ličba njeje.',
'htmlform-int-toolow' => 'Hódnota, kotruž sy zapodał, je mjeńša hač minimum $1.',
'htmlform-int-toohigh' => 'Hódnota, kotruž sy zapodał, je wjetša hač maksimum $1.',
'htmlform-required' => 'Tuta hódnota je trěbna',
'htmlform-submit' => 'Wotpósłać',
'htmlform-reset' => 'Změny cofnyć',
'htmlform-selectorother-other' => 'Druhe',
'htmlform-no' => 'Ně',
'htmlform-yes' => 'Haj',
'htmlform-chosen-placeholder' => 'Wubjer móžnosć',

# SQLite database support
'sqlite-has-fts' => '$1 połnotekstowe pytanje podpěruje.',
'sqlite-no-fts' => '$1 połnotekstowe pytanje njepodpěruje',

# New logging system
'logentry-delete-delete' => '$1 je stronu $3 {{GENDER:$1|zhašał|zhašała}}',
'logentry-delete-restore' => '$1 je stronu $3 {{GENDER:$1wobnowił|wobnowiła}}',
'logentry-delete-event' => '$1 je widźomnosć {{PLURAL:$5|protokoloweho zapiska|$5 protokoloweju zapiskow|$5 protokolowych zapiskow}} na $3 {{GENDER:$2|změnił|změniła}}: $4',
'logentry-delete-revision' => '$1 je widźomnosć {{PLURAL:$5|jedneje wersije|$5 wersijow}} na $3 {{GENDER:$2|změnił|změniła}}: $4',
'logentry-delete-event-legacy' => '$1 je widźomnosć protokolowych zapiskow na $3 {{GENDER:$2|změnił|změniła}}',
'logentry-delete-revision-legacy' => '$1 je widźomnosć wersijow na stronje $3 {{GENDER:$2|změnił|změniła}}',
'logentry-suppress-delete' => '$1 je stronu $3 {{GENDER:$2|potłóčił|potłóčiła}}',
'logentry-suppress-event' => '$1 je skradźu widźomnosć {{PLURAL:$5|protokoloweho zapiska|$5 protokoloweju zapiskow|$5 protokolowych zapiskow}} na $3 {{GENDER:$2|změnił|změniła}}: $4',
'logentry-suppress-revision' => '$1 je skradźu widźomnosć {{PLURAL:$5|jedneje wersije|$5 wersijow}} na stronje $3 {{GENDER:$2|změnił|změniła}}: $4',
'logentry-suppress-event-legacy' => '$1 je skradźu widźomnosć protokolowych zapiskow na $3 {{GENDER:$2|změnił|změniła}}',
'logentry-suppress-revision-legacy' => '$1 je skradźu widźomnosć wersijow na stronje $3 {{GENDER:$2|změnił|změniła}}',
'revdelete-content-hid' => 'wobsah schowany',
'revdelete-summary-hid' => 'Zjeće schowane',
'revdelete-uname-hid' => 'wužiwarske mjeno schowane',
'revdelete-content-unhid' => 'wobsah widźomny',
'revdelete-summary-unhid' => 'zjeće widźomne',
'revdelete-uname-unhid' => 'wužiwarske mjeno widźomne',
'revdelete-restricted' => 'na administratorow nałožene wobmjezowanja',
'revdelete-unrestricted' => 'Wobmjezowanja za administratorow wotstronjene',
'logentry-move-move' => '$1 je stronu $3 do $4 {{GENDER:$2|přesunył|přesunyła}}',
'logentry-move-move-noredirect' => '$1 je stronu $3 do $4 {{GENDER:$2|přesunył|přesunyła}}, bjeztoho zo by dalesposrědkowanje {{GENDER:$2|wutworił|wutworiła}}',
'logentry-move-move_redir' => '$1 je stronu $3 do $4 {{GENDER:$2|přesunył|přesunyła}} přepisujo dalesposrědkowanje',
'logentry-move-move_redir-noredirect' => '$1 je stronu $3 do $4 {{GENDER:$2|přesunył|přesunyła}} přepisujo dalesposrědkowanje, bjeztoho zo by dalesposrědkowanje {{GENDER:$2|wutworił|wutworiła}}',
'logentry-patrol-patrol' => '$1 je wersiju $4 strony $3 jako dohladowanu {{GENDER:$2|markěrował|markěrowała}}',
'logentry-patrol-patrol-auto' => '$1 je wersiju $4 strony $3 awtomatisce jako dohladowanu {{GENDER:$2|markěrował|markěrowała}}',
'logentry-newusers-newusers' => 'Wužiwarske konto $1 je so {{GENDER:$2|załožiło}}',
'logentry-newusers-create' => 'Wužiwarske konto $1 je so {{GENDER:$2|załožiło}}',
'logentry-newusers-create2' => '$1 je wužiwarske konto $3 {{GENDER:$2|załožił|załožiła}}',
'logentry-newusers-byemail' => '$1 je wužiwarske konto $3 {{GENDER:$2|załožił|załožiła}} a hesło je so přez e-mejl pósłało.',
'logentry-newusers-autocreate' => 'Wužiwarske konto $1 je so awtomatisce {{GENDER:$2|załožiło}}',
'logentry-rights-rights' => '$1 je skupinske čłonstwo za $3 z $4 do $5 {{GENDER:$2|změnił|změniła}}',
'logentry-rights-rights-legacy' => '$1 je skupinske čłonstwo za $3 {{GENDER:$2|změnił|změniła}}',
'logentry-rights-autopromote' => '$1 je so awtomatisce wot $4 do $5 {{GENDER:$2|přirjadował|přirjadowała}}',
'rightsnone' => '(ničo)',

# Feedback
'feedback-bugornote' => 'Jeli sy zwólniwy, techniski problem nadrobnje wopisać, [$1 zdźěl prošu zmylk].
Hewak móžeš slědowacy jednory formular wužiwać. Twój komentar přida so stronje "[$3 $2]", z twojim wužiwarskim mjenom a z wobhladowakom, kotryž wužiwaš.',
'feedback-subject' => 'Tema:',
'feedback-message' => 'Powěsć:',
'feedback-cancel' => 'Přetorhnyć',
'feedback-submit' => 'Komentar wotpósłać',
'feedback-adding' => 'Komentar so stronje přidawa...',
'feedback-error1' => 'Zmylk: Njepřipóznaty wuslědk wot API',
'feedback-error2' => 'Zmylk: Wobdźěłanje je so njeporadźiło',
'feedback-error3' => 'Zmylk: Žana wotmołwa wot API',
'feedback-thanks' => 'Dźakujemy so! Twój komentar je so k stronje "[$2 $1]" pósłał.',
'feedback-close' => 'Dokónčeny',
'feedback-bugcheck' => 'Wulkotnje! Skontroluj jenož, hač to jedyn z [$1 znatych zmylkow] njeje.',
'feedback-bugnew' => 'Sym to skontrolował. Nowy zmylk zdźělić',

# Search suggestions
'searchsuggest-search' => 'Pytać',
'searchsuggest-containing' => 'wobsahuje...',

# API errors
'api-error-badaccess-groups' => 'Nimaš prawo dataje do tutoho wikija nahrać.',
'api-error-badtoken' => 'Nutřkowny zmylk: Wopačny token.',
'api-error-copyuploaddisabled' => 'Nahrawanje přez URL je na tutym serwerje znjemóžnjene.',
'api-error-duplicate' => '{{PLURAL:$1|Je|Stej|Su|Je}} hižo {{PLURAL:$1|[$2 druha dataja]|[$2 druhej dataji]|[$2 druhe dataje]|[$2 druhich datajow]}} ze samsnym wobsahom na sydle',
'api-error-duplicate-archive' => '{{PLURAL:$1|Bě [$2 druha dataja]|Běštej [$2 druhej dataji]|Běchu [$2 druhe dataje]|Bě [$2 druhich datajow]}} hižo na websydle ze samsnym wobsahom, ale {{PLURAL:$1|je so zhašała|stej so zhašałoj|su so zhašeli|je so zhašało}}.',
'api-error-duplicate-archive-popup-title' => '{{PLURAL:$1|Dwójna dataja, kotraž je|Dwójnej dataji, kotrejž stej|Dwójne dataje, kotrež su|Dwójne dataje, kotrež su}} so hižo {{PLURAL:$1|zhašała|zhašałoj|zhašeli|zhašeli}}',
'api-error-duplicate-popup-title' => '{{PLURAL:$1|Dwójna dataja|Dwójnej dataji|Dwójne dataje|Dwójne dataje}}',
'api-error-empty-file' => 'Dataja, kotruž sy nahrał, je prózdna.',
'api-error-emptypage' => 'Wutworjenje nowych, prózdnych stronow njeje dowolene.',
'api-error-fetchfileerror' => 'Nutřkowny zmylk: při wobstarowanju dataje je so něšto nimokuliło.',
'api-error-fileexists-forbidden' => 'Dataja z mjenom "$1" hižo eksistuje, a njeda so přepisać.',
'api-error-fileexists-shared-forbidden' => 'Dataja z mjenom "$1" hižo eksistuje w zhromadnym datajowym repozitoriju a njeda so přepisać.',
'api-error-file-too-large' => 'Dataja, kotruž sy nahrał, bě přewulka.',
'api-error-filename-tooshort' => 'Datajowe mjeno překrótko',
'api-error-filetype-banned' => 'Tutón datajowy typ je zawrjeny.',
'api-error-filetype-banned-type' => '$1 {{PLURAL:$4|dowoleny datajowy typ njeje|dowolenej datajowej typaj njejstej|dowolene datajowe typy njejsu|dowolene datajowe typy njejsu}}. {{PLURAL:$3|Dowoleny datajowy typ je|Dowolenej datajowej typaj stej|Dowolene datajowe typy su|Dowolene datajowe typy su}} $2.',
'api-error-filetype-missing' => 'Dataja nima datajowu kóncowku.',
'api-error-hookaborted' => 'Změna, kotruž pospytowaše přewjesć, bu přez rozšěrjensku hoku přetorhnjena.',
'api-error-http' => 'Nutřkowny zmylk: Zwisk ze serwerom njemóžno.',
'api-error-illegal-filename' => 'Datajowe mjeno njedowolene.',
'api-error-internal-error' => 'Nutřkowny zmylk: Při předźěłowanju twojeho nahraća na wiki je so něšto nimokuliło.',
'api-error-invalid-file-key' => 'Nutřkowny zmylk: dataja njeje so w nachwilnym składowaku namakała.',
'api-error-missingparam' => 'Nutřkowny zmylk: falowace parametry při naprašowanju.',
'api-error-missingresult' => 'Nutřkowny zmylk: njeda so zwěsćić, hač kopěrowanje je so poradźiło.',
'api-error-mustbeloggedin' => 'Dyrbiš přizjewjeny być, zo by dataje nahrał.',
'api-error-mustbeposted' => 'Nutřkowny zmylk: Naprašowanje wužaduje sej HTTP POST.',
'api-error-noimageinfo' => 'Nahraće je so poradźiło, ale serwer njeje nam žane informacije wo dataji dał.',
'api-error-nomodule' => 'Nutřkowny zmylk: Žadyn modul nastajeny.',
'api-error-ok-but-empty' => 'Nutřkowny zmylk: žana wotmołwa wot serwera.',
'api-error-overwrite' => 'Přepisowanje eksistowaceje dataje njeje dowolene.',
'api-error-stashfailed' => 'Nutřkowny zmylk: Serwer njemóžeše nachwilnu dataju składować.',
'api-error-publishfailed' => 'Nutřkowny zmylk: Serwer njemóžeše nachwilnu dataju wozjewić.',
'api-error-stasherror' => 'Při nahrawanju dataje do chowanki je zmylk wusutpił.',
'api-error-timeout' => 'Serwer njeje znutřka wočakowaneho časa wotmołwił.',
'api-error-unclassified' => 'Njeznaty zmylk je wustupił.',
'api-error-unknown-code' => 'Njeznaty zmylk: "$1"',
'api-error-unknown-error' => 'Nutřkowny zmylk: Při nahrawanju twojeje dataje je so něšto nimokuliło.',
'api-error-unknown-warning' => 'Njeznate warnowanje: $1',
'api-error-unknownerror' => 'Njeznaty zmylk: "$1".',
'api-error-uploaddisabled' => 'Nahraća su na tutym wikiju znjemóžnjene.',
'api-error-verification-error' => 'Tuta dataja móhła wobkškodźena być abo wopačny sufiks měć.',

# Durations
'duration-seconds' => '$1 {{PLURAL:$1|sekunda|sekundźe|sekundy|sekundow}}',
'duration-minutes' => '$1 {{PLURAL:$1|mjeńšina|mjeńšinje|mjeńšiny|mjeńšin}}',
'duration-hours' => '$1 {{PLURAL:$1|hodźina|hodźinje|hodźiny|hodźin}}',
'duration-days' => '$1 {{PLURAL:$1|dźeń|dnjej|dny|dnjow}}',
'duration-weeks' => '$1 {{PLURAL:$1|tydźeń|njedźeli|njedźele|njedźel}}',
'duration-years' => '$1 {{PLURAL:$1|lěto|lěće|lěta|lět}}',
'duration-decades' => '$1 {{PLURAL:$1|lětdźesatk|lětdźesatkaj|lětdźesatki|lětdźesatkow}}',
'duration-centuries' => '$1 {{PLURAL:$1|lětstotk|lětstotkaj|lětstotki|lětstotkow}}',
'duration-millennia' => '$1 {{PLURAL:$1|lěttysac|lěttysacaj|lěttysacy|lěttysacow}}',

# Image rotation
'rotate-comment' => 'Wobraz wo $1 {{PLURAL:$1|stopjeń|stopnjej|stopnje|stopnjow}} w směrje časnika wjerćany',

# Limit report
'limitreport-title' => 'Profilowanske daty parsera:',
'limitreport-cputime' => 'Časowe wužiwanje CPU',
'limitreport-cputime-value' => '$1 {{PLURAL:$1|sekunda|sekundźe|sekundy|sekundow}}',
'limitreport-walltime' => 'Wužiwanje woprawdźiteho časa',
'limitreport-walltime-value' => '$1 {{PLURAL:$1|sekunda|sekundźe|sekundy|sekundow}}',
'limitreport-ppvisitednodes' => 'Ličba wopytanych sukow preprocesora',
'limitreport-ppgeneratednodes' => 'Spłodźena ličba sukow preprocesora',
'limitreport-postexpandincludesize' => 'Wulkosć zapřijimanja po ekspandowanju',
'limitreport-postexpandincludesize-value' => '$1/$2 {{PLURAL:$2|bajt|bajtaj|bajty|bajtow}}',
'limitreport-templateargumentsize' => 'Wulkosć předłohoweho argumenta',
'limitreport-templateargumentsize-value' => '$1/$2 {{PLURAL:$2|bajt|bajtaj|bajty|bajtow}}',
'limitreport-expansiondepth' => 'Najwyša ekspansijowa hłubokosć',
'limitreport-expensivefunctioncount' => 'Ličba naročnych parserowych funkcijow',

# Special:ExpandTemplates
'expandtemplates' => 'Předłohi ekspandować',
'expand_templates_intro' => 'Na tutej specialnej stronje móžeš tekst zapodać a wšitke do njeje zapřijate předłohi so rekursiwnje ekspanduja. Tež funkcije parsera kaž <code><nowiki>{{</nowiki>#language:...}}</code> a wariable kaž <code><nowiki>{{</nowiki>CURRENTDAY}}</code> so wuhódnočeja – faktisce wšo, štož steji mjezy dwójnymaj wopušatymaj spinkomaj.',
'expand_templates_title' => 'Kontekstowy titul, za {{FULLPAGENAME}} atd.:',
'expand_templates_input' => 'Tekst zapodać:',
'expand_templates_output' => 'Wuslědk',
'expand_templates_xml_output' => 'Wudaće XML',
'expand_templates_html_output' => 'Hrube HTML-wudaće',
'expand_templates_ok' => 'W porjadku',
'expand_templates_remove_comments' => 'Komentary wotstronić',
'expand_templates_remove_nowiki' => 'Taflički <nowiki> we wuslědku potłóčić',
'expand_templates_generate_xml' => 'Analyzowy štom XML pokazać',
'expand_templates_generate_rawhtml' => 'Hruby HTML pokazać',
'expand_templates_preview' => 'Přehlad',

);
