<?php

/** This enables .env file support */
require __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

define( 'YOURLS_DB_USER', $_ENV['YOURLS_DB_USER'] );
define( 'YOURLS_DB_PASS', $_ENV['YOURLS_DB_PASS'] );
define( 'YOURLS_DB_NAME', $_ENV['YOURLS_DB_NAME'] );
define( 'YOURLS_DB_HOST', $_ENV['YOURLS_DB_HOST'] );
define( 'YOURLS_DB_PREFIX', $_ENV['YOURLS_DB_PREFIX'] );
define( 'YOURLS_SITE', $_ENV['YOURLS_SITE'] );
define( 'YOURLS_HOURS_OFFSET', $_ENV['YOURLS_HOURS_OFFSET'] );
define( 'YOURLS_COOKIEKEY', $_ENV['YOURLS_COOKIEKEY'] );

/** YOURLS language or "locale".
 ** Change this setting to "localize" YOURLS (use a translation instead of the default English). A corresponding .mo file
 ** must be installed in the user/language directory.
 ** See http://yourls.org/translations for more information */
define( 'YOURLS_LANG', '' );

/** Allow multiple short URLs for a same long URL
 ** Set to true to have only one pair of shortURL/longURL (default YOURLS behavior)
 ** Set to false to allow multiple short URLs pointing to the same long URL (bit.ly behavior) */
define( 'YOURLS_UNIQUE_URLS', false );

/** Private means the Admin area will be protected with login/pass as defined below.
 ** Set to false for public usage (eg on a restricted intranet or for test setups)
 ** Read http://yourls.org/privatepublic for more details if you're unsure */
define( 'YOURLS_PRIVATE', true );

/** Username(s) and password(s) allowed to access the site. Passwords either in plain text or as salted hashes.
 ** Read http://yourls.org/userpassword for more information */
$yourls_user_passwords = json_decode($_ENV['YOURLS_USER_PASSWORDS'], true);

/*
 ** URL Shortening settings
 */

/** URL shortening method: 36 or 62 */
define( 'YOURLS_URL_CONVERT', 62 );
/*
 * 36: generates all lowercase keywords (ie: 13jkm)
 * 62: generates mixed case keywords (ie: 13jKm or 13JKm)
 * Stick to one setting. It's best not to change after you've started creating links.
 */

/**
* Reserved keywords (so that generated URLs won't match them)
* Define here negative, unwanted or potentially misleading keywords.
*/
$yourls_reserved_URL = array(
	'porn', 'faggot', 'sex', 'nigger', 'fuck', 'cunt', 'dick', 'gay',
);

/*
 ** Personal settings would go after here.
 */

