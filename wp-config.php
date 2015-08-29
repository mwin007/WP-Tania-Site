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
define('DB_NAME', 'testdb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'hinh1234');

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
define('AUTH_KEY',         'SOxJm;sjwWMT7Z?#MTTrS|EO;U>xedX+P+CvoWu6HQNmAc2aVwM,91>t4>Iy-ED>');
define('SECURE_AUTH_KEY',  '_)AcRc?5QFv>2GGUl}:WlY}xt@+[+|Q|TwE)>uW*PmZbiS$$M*uesL$x|N2Fd*^a');
define('LOGGED_IN_KEY',    'Xno4GH[@tgj4!9G<F[|LIb(pRCs+a=@R|Ga=-cpv%Mks6Gf50f4NHNr6w~ 1`*uW');
define('NONCE_KEY',        'O9msvqA3(Y,$j9xsr<|VMBN)u$2F4gK79WS4($;sWWZQz;xufEj;1lI-xw {%qib');
define('AUTH_SALT',        'aT{gnSvq(TiIp}o!2`jCwo_kb1naa3%*MyPgBfg}O3dX5J2r.+Yu9?!kj(^w) p+');
define('SECURE_AUTH_SALT', '=ACO4!ryJt@+iq@ rV9Q6d(f8nmL3M*@[5Z~^-=Nh^Gi;<vD+B/d89?mATnmVGZ?');
define('LOGGED_IN_SALT',   '`n/.gUIzMrwHaO}GN&h!Q,W@1p>D@&lxkDnIFnMr^-M5VR#NkvbLBQ0TvP&?gXI5');
define('NONCE_SALT',       '}x.}hHwE?7V]2q +5(]/O-cl?3m>mz8{6q=#i3p7HYXW%fWlcr&g1nw8b~jZ^/)b');

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
