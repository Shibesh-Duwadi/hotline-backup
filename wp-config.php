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
define('DB_NAME', 'hotlinekhabar_pankaj');

/** MySQL database username */
define('DB_USER', 'hotlinekhabar_news');

/** MySQL database password */
define('DB_PASSWORD', '2%yOPGcPg6YH');

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
define('AUTH_KEY',         '1uz.rbGW>Y;c 2!plyX)x$lX:XLY##o`&N`S8(c^p*Ijo&16C:pzubkoywC)bagy');
define('SECURE_AUTH_KEY',  'E/y@3ZfP=^<3We^4I|o^YM.jh?B7AWr#WZUJ/~FI)L7*Qsb9o8e4Y!R:a%E6TD/{');
define('LOGGED_IN_KEY',    '[5JW@KIe=TXuA_h50EjpnZazV|Rf/fBv#;9Oj6*18.wOi!,^)i2jPrKqXEqRUp2W');
define('NONCE_KEY',        'sZ[aLJ+BJh0FP$&ly/c}N.$$!Rk<Xdpf-G<p1vG42M;CnX,7Qq H^du6?}Rk97?^');
define('AUTH_SALT',        '+^>8U1fw v7qNy^i7nNx-Hn?`H/fleL~e&ff>_h~?qZYZ/5>qKo84wJ,Aqrq!1oJ');
define('SECURE_AUTH_SALT', '{&)IfF[v~B&&Z$bRc(o[!A)(OM?p2l_93ObdQrO?^U;7 ^8(-l^&|hv3`zyh|Hhs');
define('LOGGED_IN_SALT',   ',)J`nG3Xi>7?GrJS*r{N{2)WgLF#s+zMIt#nhWh$elXw;|A/&d; gCc01PK!sl{-');
define('NONCE_SALT',       '[%}Ip2pT_gz2Hqd>;27h>qK(s>yz%&oe5w~G@_^|0oz@%y{*b_C^L@h?+OvnO@Fe');
define('WP_MAX_MEMORY_LIMIT', '512M' );
define('WP_MEMORY_LIMIT', '360M');
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
