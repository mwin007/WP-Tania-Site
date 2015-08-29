<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bitnami_wordpress');

/** MySQL database username */
define('DB_USER', 'bn_wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'a0fc009c53');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '670c7dc204de1fd3bba7b07f76798f9107efe95d533098db11b28b8e9f0364f4');
define('SECURE_AUTH_KEY', 'ebfd493399f29c16d7c2325ad57bd4d8ebeb2dee2de4c0d2b573e35b77334983');
define('LOGGED_IN_KEY', 'a20dfa4ebc2d918c5704ea940eab2af861bae44bef655c88858742155573e391');
define('NONCE_KEY', '0846ff0fd9d4b24250de473352c2adb13617c2eb21e98206bf123b6733fa3e68');
define('AUTH_SALT', 'fe4d73edd8967fbd20c34d5de2fffe80ba7b64cf9e9c57e0bd99180371de326b');
define('SECURE_AUTH_SALT', '7a9fb316737774725f36b5a1b46c464acb99349457dcfb34908773f0fa133756');
define('LOGGED_IN_SALT', 'f260331876bd5a4f9572fd0049300f3da006275e28b2af9fad0e445ac2d57675');
define('NONCE_SALT', '2c7aec56eea8a30b79424107a228dfa023148dfe35b1865bdb3185c645b18253');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
