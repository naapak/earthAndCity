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
define('DB_NAME', 'earthandcity');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'RE~!x]*-u)W%t;y+y#F.JiZ+?!|Md0=()KPL!VRRLiI-VQ06<FN19OGftvw%]mfP');
define('SECURE_AUTH_KEY',  'f&[[](cWeUFN8(x$:Z,ou2[8*G0d83T^|H&$l}Sf:fij&llw _|{]Ca_WafBQcUx');
define('LOGGED_IN_KEY',    'D$d!{dHgn5cPO I88>[r]Nh8%s%JiM(cP(Z/&m:P`mUd{{%WfUzT1j-Hx>Q!p74q');
define('NONCE_KEY',        'Y sc+SO,2QKnv)H#4wl`Lf%Yt^]H30}zA(:uc}^h[8Hnjx>?+]Kq)n~;^+~Z1dF&');
define('AUTH_SALT',        '%twTPLZ{0gXo5N##qf2?cv_d*axPVX2V59sZ/+3w.w-p8V?Fmes}VS6v}w~;dt0c');
define('SECURE_AUTH_SALT', '8{QO]0{.`05-jag~`<Ws$6JBIw:95(ew4)D3 -`Rix|xmoi+T9kQdGdo~GcU<@ #');
define('LOGGED_IN_SALT',   'k@h%A&_/ zoUMJ_+2Ci>^#YQLcNS*,g3/>~1rAvi)t<;(T|fz{3!_RWo1sA^Ef]o');
define('NONCE_SALT',       'WuD>m+0yXmWJb4`^ri~ -Txor@B4:qnbmP3ZhbGoxd%.vBzb/49|H OXOgypA%ph');

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
