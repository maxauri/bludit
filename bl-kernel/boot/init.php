<?php defined('BLUDIT') or die('Bludit CMS.');

// Bludit version
define('BLUDIT_VERSION',	'2.0');
define('BLUDIT_CODENAME',	'');
define('BLUDIT_RELEASE_DATE',	'2017-10-04');
define('BLUDIT_BUILD',		'20171004');

// Debug mode
// Change to FALSE, for prevent warning or errors on browser
define('DEBUG_MODE', TRUE);
error_reporting(0); // Turn off all error reporting
if (DEBUG_MODE) {
	// Turn on all error reporting
	ini_set("display_errors", 1);
	ini_set('display_startup_errors',1);
	ini_set("track_errors", 1);
	ini_set("html_errors", 1);
	error_reporting(E_ALL | E_STRICT | E_NOTICE);
}

// PHP paths
// PATH_ROOT and PATH_BOOT are defined in index.php
define('PATH_LANGUAGES',		PATH_ROOT.'bl-languages'.DS);
define('PATH_THEMES',			PATH_ROOT.'bl-themes'.DS);
define('PATH_PLUGINS',			PATH_ROOT.'bl-plugins'.DS);
define('PATH_KERNEL',			PATH_ROOT.'bl-kernel'.DS);
define('PATH_CONTENT',			PATH_ROOT.'bl-content'.DS);

define('PATH_ABSTRACT',			PATH_KERNEL.'abstract'.DS);
define('PATH_RULES',			PATH_KERNEL.'boot'.DS.'rules'.DS);
define('PATH_HELPERS',			PATH_KERNEL.'helpers'.DS);
define('PATH_AJAX',			PATH_KERNEL.'ajax'.DS);
define('PATH_JS',			PATH_KERNEL.'js'.DS);
define('PATH_CSS',			PATH_KERNEL.'css'.DS);

define('PATH_PAGES',			PATH_CONTENT.'pages'.DS);
define('PATH_DATABASES',		PATH_CONTENT.'databases'.DS);
define('PATH_PLUGINS_DATABASES',	PATH_CONTENT.'databases'.DS.'plugins'.DS);
define('PATH_TMP',			PATH_CONTENT.'tmp'.DS);
define('PATH_UPLOADS',			PATH_CONTENT.'uploads'.DS);

define('PATH_UPLOADS_PROFILES',		PATH_UPLOADS.'profiles'.DS);
define('PATH_UPLOADS_THUMBNAILS',	PATH_UPLOADS.'thumbnails'.DS);

define('PATH_ADMIN',			PATH_KERNEL.'admin'.DS);
define('PATH_ADMIN_THEMES',		PATH_ADMIN.'themes'.DS);
define('PATH_ADMIN_CONTROLLERS',	PATH_ADMIN.'controllers'.DS);
define('PATH_ADMIN_VIEWS',		PATH_ADMIN.'views'.DS);

define('DEBUG_FILE',			PATH_CONTENT.'debug.txt');

// PAGES DATABASE
define('DB_PAGES', PATH_DATABASES.'pages.php');
define('DB_SITE', PATH_DATABASES.'site.php');
define('DB_CATEGORIES', PATH_DATABASES.'categories.php');
define('DB_TAGS', PATH_DATABASES.'tags.php');
define('DB_SYSLOG', PATH_DATABASES.'syslog.php');
define('DB_USERS', PATH_DATABASES.'users.php');
define('DB_SECURITY', PATH_DATABASES.'security.php');

// Log separator
define('LOG_SEP', ' | ');

// JSON pretty print
if(!defined('JSON_PRETTY_PRINT')) {
	define('JSON_PRETTY_PRINT', 128);
}

// Protecting against Symlink attacks
define('CHECK_SYMBOLIC_LINKS', TRUE);

// Alert status ok
define('ALERT_STATUS_OK', 0);

// Alert status fail
define('ALERT_STATUS_FAIL', 1);

// Amount of thumbnails shown on Bludit Quick images
define('THUMBNAILS_AMOUNT', 6);

// Thubmnails size
define('THUMBNAILS_WIDTH', 400);
define('THUMBNAILS_HEIGHT', 400);
define('THUMBNAILS_QUALITY', 100); // 100%

// Profile image size
define('PROFILE_IMG_WIDTH', 400);
define('PROFILE_IMG_HEIGHT', 400);
define('PROFILE_IMG_QUALITY', 100); // 100%

// Password length
define('PASSWORD_LENGTH', 6);

// Password salt length
define('SALT_LENGTH', 8);

// Page brake string
define('PAGE_BREAK', '<!-- pagebreak -->');

// Parent key for the array $pagesByParents
define('PARENT', 'BLUDIT3849abb4cb7abd24c2d8dac17b216f17');

// Items per page for admin area
define('ITEMS_PER_PAGE_ADMIN', 10);

// Cli mode, status for new pages
define('CLI_STATUS', 'published');

// Cli mode, username for new pages
define('CLI_USERNAME', 'admin');

// Filename
define('FILENAME', 'index.txt');

// Database date format
define('DB_DATE_FORMAT', 'Y-m-d H:i:s');

// Sitemap date format
define('SITEMAP_DATE_FORMAT', 'Y-m-d');

// Date format for Dashboard schedule posts
define('SCHEDULED_DATE_FORMAT', 'd M - h:i a');

// Notifications date format
define('NOTIFICATIONS_DATE_FORMAT', 'F j, Y, g:i a');

// Amount of items to show on notification panel
define('NOTIFICATIONS_AMOUNT', 10);

// Token time to live for login via email. The offset is defined by http://php.net/manual/en/datetime.modify.php
define('TOKEN_EMAIL_TTL', '+15 minutes');

// Charset, default UTF-8.
define('CHARSET', 'UTF-8');

// EXTREME FRIENDLY URL, TRUE for dissmiss internet standard. Experimental!
define('EXTREME_FRIENDLY_URL', FALSE);

// Permissions for new directories
define('DIR_PERMISSIONS', 0755);

// Admin URI filter to access to the admin panel
define('ADMIN_URI_FILTER', 'admin');

// Default language file, in this case is English
define('DEFAULT_LANGUAGE_FILE', 'en.json');

// Session timeout server side, gc_maxlifetime
// 3600 = 1hour
define('SESSION_GC_MAXLIFETIME', 3600);

// Session lifetime of the cookie in seconds which is sent to the browser
// The value 0 means until the browser is closed
define('SESSION_COOKIE_LIFE_TIME', 0);

// Set internal character encoding
mb_internal_encoding(CHARSET);

// Set HTTP output character encoding
mb_http_output(CHARSET);

// Inclde Abstract Classes
include(PATH_ABSTRACT.'dbjson.class.php');
include(PATH_ABSTRACT.'dblist.class.php');
include(PATH_ABSTRACT.'plugin.class.php');

// Inclde Classes
include(PATH_KERNEL.'dbpages.class.php');
include(PATH_KERNEL.'dbusers.class.php');
include(PATH_KERNEL.'dbtags.class.php');
include(PATH_KERNEL.'dblanguage.class.php');
include(PATH_KERNEL.'dbsite.class.php');
include(PATH_KERNEL.'dbcategories.class.php');
include(PATH_KERNEL.'dbsyslog.class.php');
include(PATH_KERNEL.'page.class.php');
include(PATH_KERNEL.'user.class.php');
include(PATH_KERNEL.'url.class.php');
include(PATH_KERNEL.'login.class.php');
include(PATH_KERNEL.'parsedown.class.php');
include(PATH_KERNEL.'parsedownextra.class.php');
include(PATH_KERNEL.'security.class.php');

// Include functions
include(PATH_KERNEL.'functions.php');

// Include Helpers Classes
include(PATH_HELPERS.'text.class.php');
include(PATH_HELPERS.'log.class.php');
include(PATH_HELPERS.'date.class.php');
include(PATH_HELPERS.'theme.class.php');
include(PATH_HELPERS.'session.class.php');
include(PATH_HELPERS.'redirect.class.php');
include(PATH_HELPERS.'sanitize.class.php');
include(PATH_HELPERS.'valid.class.php');
include(PATH_HELPERS.'email.class.php');
include(PATH_HELPERS.'filesystem.class.php');
include(PATH_HELPERS.'alert.class.php');
include(PATH_HELPERS.'paginator.class.php');
include(PATH_HELPERS.'image.class.php');
include(PATH_HELPERS.'tcp.class.php');
include(PATH_HELPERS.'dom.class.php');

if (file_exists(PATH_KERNEL.'bludit.pro.php')) {
	include(PATH_KERNEL.'bludit.pro.php');
}

// Session
Session::start();
if (Session::started()===false) {
	exit('Bludit CMS. Session initialization failure.');
}

// Objects
$dbPages 	= new dbPages();
$dbUsers 	= new dbUsers();
$dbTags 	= new dbTags();
$dbCategories 	= new dbCategories();
$Site 		= new dbSite();
$Url 		= new Url();
$Parsedown 	= new Parsedown();
$Security	= new Security();
$Syslog 	= new dbSyslog();

// --- Relative paths ---
// This paths are relative for the user / web browsing.

// Base URL
// The user can define the base URL.
// Left empty if you want to Bludit try to detect the base URL.
$base = '';

if (!empty($_SERVER['DOCUMENT_ROOT']) && !empty($_SERVER['SCRIPT_NAME']) && empty($base)) {
	$base = str_replace($_SERVER['DOCUMENT_ROOT'], '', $_SERVER['SCRIPT_NAME']);
	$base = dirname($base);
} elseif (empty($base)) {
	$base = empty( $_SERVER['SCRIPT_NAME'] ) ? $_SERVER['PHP_SELF'] : $_SERVER['SCRIPT_NAME'];
	$base = dirname($base);
}

if (strpos($_SERVER['REQUEST_URI'], $base)!==0) {
	$base = '/';
} elseif ($base!=DS) {
	$base = trim($base, '/');
	$base = '/'.$base.'/';
} else {
	// Workaround for Windows Web Servers
	$base = '/';
}

define('HTML_PATH_ROOT', 		$base);
define('HTML_PATH_THEMES',		HTML_PATH_ROOT.'bl-themes/');
define('HTML_PATH_THEME',		HTML_PATH_THEMES.$Site->theme().'/');
define('HTML_PATH_THEME_CSS',		HTML_PATH_THEME.'css/');
define('HTML_PATH_THEME_JS',		HTML_PATH_THEME.'js/');
define('HTML_PATH_THEME_IMG',		HTML_PATH_THEME.'img/');
define('HTML_PATH_ADMIN_ROOT',		HTML_PATH_ROOT.ADMIN_URI_FILTER.'/');
define('HTML_PATH_ADMIN_THEME',		HTML_PATH_ROOT.'bl-kernel/admin/themes/'.$Site->adminTheme().'/');
define('HTML_PATH_ADMIN_THEME_JS',	HTML_PATH_ADMIN_THEME.'js/');
define('HTML_PATH_ADMIN_THEME_CSS',	HTML_PATH_ADMIN_THEME.'css/');
define('HTML_PATH_ADMIN_THEME_IMG',	HTML_PATH_ADMIN_THEME.'img/');
define('HTML_PATH_CORE_JS',		HTML_PATH_ROOT.'bl-kernel/js/');
define('HTML_PATH_CORE_CSS',		HTML_PATH_ROOT.'bl-kernel/css/');
define('HTML_PATH_UPLOADS',		HTML_PATH_ROOT.'bl-content/uploads/');
define('HTML_PATH_UPLOADS_PROFILES',	HTML_PATH_UPLOADS.'profiles/');
define('HTML_PATH_UPLOADS_THUMBNAILS',	HTML_PATH_UPLOADS.'thumbnails/');
define('HTML_PATH_PLUGINS',		HTML_PATH_ROOT.'bl-plugins/');

// --- Objects with dependency ---
$Language 	= new dbLanguage( $Site->language() );
$Login 		= new Login( $dbUsers );
$Url->checkFilters( $Site->uriFilters() );

// --- CONSTANTS with dependency ---

// Tag URI filter
define('TAG_URI_FILTER', $Url->filters('tag'));

// Category URI filter
define('CATEGORY_URI_FILTER', $Url->filters('category'));

// Page URI filter
define('PAGE_URI_FILTER', $Url->filters('page'));

// Blog URI filter
define('BLOG_URI_FILTER', $Url->filters('blog'));

// Content order by: date / position
define('ORDER_BY', $Site->orderBy());

// --- PHP paths with dependency ---
// This paths are absolutes for the OS
define('THEME_DIR',			PATH_ROOT.'bl-themes'.DS.$Site->theme().DS);
define('THEME_DIR_PHP',			THEME_DIR.'php'.DS);
define('THEME_DIR_CSS',			THEME_DIR.'css'.DS);
define('THEME_DIR_JS',			THEME_DIR.'js'.DS);
define('THEME_DIR_IMG',			THEME_DIR.'img'.DS);
define('THEME_DIR_LANG',		THEME_DIR.'languages'.DS);

// --- Absolute paths with domain ---
// This paths are absolutes for the user / web browsing.
define('DOMAIN',			$Site->domain());
define('DOMAIN_BASE',			DOMAIN.HTML_PATH_ROOT);
define('DOMAIN_CORE_JS',		DOMAIN.HTML_PATH_CORE_JS);
define('DOMAIN_CORE_CSS',		DOMAIN.HTML_PATH_CORE_CSS);
define('DOMAIN_THEME',			DOMAIN.HTML_PATH_THEME);
define('DOMAIN_THEME_CSS',		DOMAIN.HTML_PATH_THEME_CSS);
define('DOMAIN_THEME_JS',		DOMAIN.HTML_PATH_THEME_JS);
define('DOMAIN_THEME_IMG',		DOMAIN.HTML_PATH_THEME_IMG);
define('DOMAIN_UPLOADS',		DOMAIN.HTML_PATH_UPLOADS);
define('DOMAIN_UPLOADS_PROFILES',	DOMAIN.HTML_PATH_UPLOADS_PROFILES);
define('DOMAIN_UPLOADS_THUMBNAILS',	DOMAIN.HTML_PATH_UPLOADS_THUMBNAILS);

define('DOMAIN_ADMIN',			DOMAIN_BASE.ADMIN_URI_FILTER);

define('DOMAIN_TAGS',			Text::addSlashes(DOMAIN_BASE.TAG_URI_FILTER, false, true));
define('DOMAIN_CATEGORIES',		Text::addSlashes(DOMAIN_BASE.CATEGORY_URI_FILTER, false, true));
define('DOMAIN_PAGES',			Text::addSlashes(DOMAIN_BASE.PAGE_URI_FILTER, false, true));
define('DOMAIN_BLOG',			Text::addSlashes(DOMAIN_BASE.BLOG_URI_FILTER, false, true));

$ADMIN_CONTROLLER = '';
$ADMIN_VIEW = '';
$ID_EXECUTION = uniqid(); // string 13 characters long
$WHERE_AM_I = $Url->whereAmI();

// --- Objects shortcuts ---
$L = $Language;

// DEBUG: Print constants
// $arr = array_filter(get_defined_constants(), 'is_string');
// echo json_encode($arr);
// exit;
