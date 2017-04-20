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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'c}il]c|-ePKYLUNoxEGp*2< XhCM.gk>02;OFV32 gd[[6Z?L6?=|^>9m.eX*ENQ');
define('SECURE_AUTH_KEY',  'L%!`lz[i>r5]tPer57SnBm_QaqkgR_MOiIl@U(X,Aw>K35,)+<u%n4EfGLot1GRR');
define('LOGGED_IN_KEY',    'a}F;Gox`(k$$lJ.q-(r.2!<=<gw2nW-Q%([i9siN9i~=Y=9m@7UdMf<Y943ZgS^s');
define('NONCE_KEY',        '@K!>!]G`4RZ[?0%bz?T^%6.^hA!{z%bQZ_KVo?(5)`FBCbrTD/$=wI>Na-am4^@{');
define('AUTH_SALT',        'b`fnYJaFNbMCEB<d2>~bt)7q3y!:7% `,x.?467YG;sz681=rk#43{}JL+?y;E!s');
define('SECURE_AUTH_SALT', 'bqN!4d6x,:WHM$/MgE^{IJ4X7Gm;?9A0.gI]y2dMx00_8wBKLJTPsZg$7sx[,g_3');
define('LOGGED_IN_SALT',   'm,:bn].PSyDutfte5;d:Tj!IY_aV>-EnC(j1HK1&Mak^F(<eS~nM+W|t@]o7r<}k');
define('NONCE_SALT',       '9_`z6e=w|b<IJD4p^.b4+>bYkB{#7%7jFtep0YGipoc#2LAdZ{39/Gg=#&R$MhMb');

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
