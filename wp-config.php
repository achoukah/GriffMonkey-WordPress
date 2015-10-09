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
define('DB_NAME', 'griffmonkey');

/** MySQL database username */
define('DB_USER', 'thesun');

/** MySQL database password */
define('DB_PASSWORD', 'thesun');

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
define('AUTH_KEY',         '^)bpO1$v+`:8tIC7_^Ib!Zj`-k:xJ1t|vPN|)s8bqlF<n7Yg> n]/EV}x*EkIb}~');
define('SECURE_AUTH_KEY',  'BIcjUgQ=_YU^9b2kCrDv%^6i^0v;Ip2!~1;EZz+v</s/rizi[%SZ&A:DO;) ]>Jk');
define('LOGGED_IN_KEY',    '0<!$wGONS&U.tUgf,sFC-C}J%dJLFO,nYz#^)W]lURTnHQ>_R;Imh)V_v>e|z[OC');
define('NONCE_KEY',        'O|YJ+lrfe[`tVV5YW#)cBj|_^uj=iZ|pPK@JnH.2WmAK[9!T|&<@u2lZFm;WMK^C');
define('AUTH_SALT',        '2[zCT./)T?4cB)b,/QVw_Cs2<3@RM+k&w?fMBh|-ODpA`ga1[{X]o{pauT JsA^.');
define('SECURE_AUTH_SALT', '|c%||p|!C0.`QVKA; *%`+`s_cY3*@p7Gk<Y|0x:tGdiAf|.c0;K]EHux2DHQ%:r');
define('LOGGED_IN_SALT',   '(F^^g[h!v;?!7Ahk/Szy|3AXh2>`0.0m@|$1Z._P9VUl^k%s|up;#D2d*xqDj {h');
define('NONCE_SALT',       'L+%V9H8vxAi#G2yr_:hZp7d!@nC9tT^s,sG2jcOk6n6ciuyu^~xsZ<V|oF<7oGEK');

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
