<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kost_culinary' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '4t/`t6ldfJ(d#A+Clc!?HvyzxKR7eLHjH#An_+r#bj,3.8`GaP:L,_hsO/6qm Or' );
define( 'SECURE_AUTH_KEY',  'ePWG=7V!`f7>cm7y;7ilo)w84>iGd9t3#3(W/XM<VNxPDo6Yo2^A} 8.it3N.?}X' );
define( 'LOGGED_IN_KEY',    'S?^?8py4hwS3+r2_,k&%^/Cz?F0GA>-Q@(T#sXYn.v5QA*[)m&91-=vog8 pB2j~' );
define( 'NONCE_KEY',        'xr$pffqSpI@zW|czVP92v*<e=F`j@StQ0[?v`Xy<%8]y3A7g{c,YOZM<eII8M0mF' );
define( 'AUTH_SALT',        'uXWd7d.Y+%?bIg^c:+QLgsk7vi:zZnnaM&Iuvy`CL^OQ-#]DnC>.8y=^nbUR@79b' );
define( 'SECURE_AUTH_SALT', 'A}I3zgK?U,vHyEEG@=+G%Obp<aj-4c8E_FY| er`[17;w%9)ylD4#0x*P8}a%V6C' );
define( 'LOGGED_IN_SALT',   'nQjM:#*xTk;gTmj=^JOn|_i7e/IO8K+u.F+HSPQ()5/EMe5xqlu8H]jAPlp-Hq?.' );
define( 'NONCE_SALT',       'C8bc]hI_u;]gTo3z,V?kQ]1!V#SEQaCa.mkgd(nUkIF=RqD<|u`|o/$G6<=jjUpR' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'kost_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
