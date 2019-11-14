<?php
// Master WordPress configuration

if ( file_exists( __DIR__ . '/wp-config.dev.php' ) ) {
	require __DIR__ . '/wp-config.dev.php';

	/** Sets up WordPress vars and included files. */
	require_once(ABSPATH . 'wp-settings.php');
	return;
}
if ( gethostname() == '131method.com' ) {
      define( 'DB_HOST', 'prod-131wp.cr0vdw93vl1b.us-east-1.rds.amazonaws.com' );
      define( 'LIVE_PAYMENT_MODE', true );
      define( 'DOMAIN_CURRENT_SITE', '131method.com' );
      define( 'WP_DEBUG', false );
      define( 'DB_NAME', 'one3one' );
      define( 'DB_USER', 'root' );
      define( 'DB_PASSWORD', 'Vl6QKmrTkAcdAJnvkUEZ' );

} else if ( gethostname() == 'dev.131.spiral.world' ) {
	define( 'DB_HOST', 'localhost' );
	define( 'LIVE_PAYMENT_MODE', false );
	define( 'DOMAIN_CURRENT_SITE', 'dev.131.spiral.world' );
	define( 'WP_DEBUG', false );
	define( 'SCRIPT_DEBUG', true );
	define( 'MAIL_DEBUG', true );
	define( 'DB_NAME', 'one3one' );
	define( 'DB_USER', 'one3one' );
	define( 'DB_PASSWORD', 'W43eXAEtFdm3w8puPZyaLj6879txTDudKb4JrdAg2r' );
	define( 'NOBLOGREDIRECT', 'https://dev.131.spiral.world' );

} else if ( gethostname() == 'ubuntu-s-3vcpu-1gb-fra1-01' ) {
	define( 'DB_HOST', 'localhost' );
	define( 'LIVE_PAYMENT_MODE', false );
	define( 'DOMAIN_CURRENT_SITE', '131method.devpoint.me' );
	define( 'WP_DEBUG', true );
	define( 'SCRIPT_DEBUG', false );
	define( 'MAIL_DEBUG', true );
	define( 'DB_NAME', '131method' );
	define( 'DB_USER', '131method' );
	define( 'DB_PASSWORD', '131method_DB_pass!' );
	define( 'NOBLOGREDIRECT', 'https://131method.devpoint.me' );

} else {
	define( 'DB_HOST', 'localhost' );
	define( 'LIVE_PAYMENT_MODE', true );
	define( 'DOMAIN_CURRENT_SITE', '131method.com' );
	define( 'WP_DEBUG', false );
	define( 'DB_NAME', 'one3one' );
	define( 'DB_USER', 'one3one' );
	define( 'DB_PASSWORD', 'tobeconfigured' );
	define( 'NOBLOGREDIRECT', 'https://131method.com' );
}


// Default WordPress configuration for Pressjitsu.
// Feel free to change this file.

define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

define( 'AUTH_KEY',         'Fh7mkHR07BXTqbAZHjbRgV-pPcvmbrqoOwZUFuwOUSBBlA1IfuYGijgbA9fHcGlMIq0=' );
define( 'SECURE_AUTH_KEY',  '_I0dXqBXQAw7b9mCSNJ3jnsvCtWLfUAirNyvsDncQfF_cjQGBC8kY0oqQoMm9WFSJr4=' );
define( 'LOGGED_IN_KEY',    'hjS_jkRjXTt65lSjCtxqtbH7o2pqTYlQFjSqXTmv9Vq8KZH9t6uDO7OzAbTRk5RHrL0=' );
define( 'NONCE_KEY',        'KA61USmDEZ62KWuYyKnkbP3KMXNQ964UxfQ_YKmGayykLGiadvOub2B2C9Jg8IQVGp4=' );
define( 'AUTH_SALT',        '1FJcjevSITx1q2Don1suhDvm5nJhkTT70d1WpDiUViZF9HUMHUIDpw-4CfzmMNwd3MM=' );
define( 'SECURE_AUTH_SALT', '9xZqo0aLo_Oc0L2KnTmugNmEicHtK88wxo7kKd1lJY-rtVHfC9TPbLN7qggZfATDfXE=' );
define( 'LOGGED_IN_SALT',   'LudP1V7KocX-HYDuOUIQEddw_1wmb1qgDcmpQKHt6vbhGxKlAXPNe0TM_SfKgzWvRfE=' );
define( 'NONCE_SALT',       'SmRQY_DB4lRXZf7-UZPm_ob6Qn2_8TN48iEXn_DLCDdcBjlo2w6z6qXirW8w6Yh3jtw=' );

$table_prefix = 'wp_';

define( 'COOKIE_DOMAIN', $_SERVER['HTTP_HOST'] );
define( 'WP_CACHE', true );

$_SERVER['HTTPS'] = 'on';

define( 'WP_ALLOW_MULTISITE', true );
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', true );
$base = '/';
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );
define( 'DISALLOW_FILE_EDIT', true );
define( 'DISALLOW_FILE_MODS', true );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

// Pressjitsu Environment
// $_filename = '/var/pj-addons/loaders/pj-init.php';
//if ( file_exists( $_filename ) )
//	require_once( $_filename );

// define( 'WP_REDIS_HOST', pj_user_config()['page_cache']['redis_host'] );

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
