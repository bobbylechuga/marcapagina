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
define('DB_NAME', 'marcapagina');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'n-Zm$_qF<+{N*)TD._/.cG)Rujv/gGps3#po@>ju]CrG&=@;X-R2%PYAT`=zI5[*');
define('SECURE_AUTH_KEY',  '-E 1bVGb `Fd:QyQ.MTf*0-Oikh-IF_b9F},{Ph>2[fso t:9Bq;6?}f@2gG,Q]s');
define('LOGGED_IN_KEY',    'sgI;Qk.IM8cgwoIe-yfh(7m ot#pXfUl3c9$meTf()h{R27iL5V8hT5j^~C[;o6g');
define('NONCE_KEY',        'VAnG_Zc>ebE#aZf]@%AY3.{TDoMZJr=m6#lv:`,F=4P?P-WBZ#Ml[Q~{>@by?V-R');
define('AUTH_SALT',        '_9:kLEbVB>,,ZZDf*/QGrh=Wqq?iXR{M7E76d?&::>@6A3Q&=97O=X?s;[cPaUqN');
define('SECURE_AUTH_SALT', 'ex1N/KPad[#1h((w2EX3l.~G#&vEIY3/F&9OF{XV!u ?t!U#hgwX;<JCuYc{+<j+');
define('LOGGED_IN_SALT',   'c~EB}48/c`%tr.Dc{0 D:@V}-E6#KP*(@^^Ls:iwI+wnboav`c<E^HX&ZBx?[1h7');
define('NONCE_SALT',       '7H~d4GsA{N:37Szs:w`,;N*GksIq}$N|E)%KRZL6dQY7Ax~WUyWM%d;e]sY*G>Wh');

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
