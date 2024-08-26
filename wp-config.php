<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'omaralhetarr' );

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
define( 'AUTH_KEY',         '}8L:Q!aPQ##4<H.li8jqIBk:%;`BP}Or2v`@E2Eh4RZ<6Lg3#U/RaX)}/sV,51$]' );
define( 'SECURE_AUTH_KEY',  'Y({`T33J`E=;Zh>|3@Nc/48)PtE+y)5,)~fzzabQXegNmr8r,=HjBy<bwu`Pxebf' );
define( 'LOGGED_IN_KEY',    'yx8_1@IF*$sC?|9Y-0hxis0J{s(wptCI6quvSo_F{=lcH|wlo[Y T4 -Mw/tK]_G' );
define( 'NONCE_KEY',        'n9u+)Eq4$o<gjvyC7sT^G{qt1]`W 68s[Flj|]I&66V:u>(7Y][juN2|H:(thLr2' );
define( 'AUTH_SALT',        'D)c@QvK5$eC3y34v#YAEOY>[@%5JACN^G~=#Y.;2b#s!f(2h_>JBLv)x9>sO&urZ' );
define( 'SECURE_AUTH_SALT', 'sP%}F5|nc[E&g>Lt[|RSjh-dI5w2Wkq/9.37,}<@%u+/ZaQNF6xdN=xul2TkX;R)' );
define( 'LOGGED_IN_SALT',   'Yt4emv/iE#Y;g{dKrh`unv#W:(+SI}273tVey+yQsUXKq_NSPLl6G:1l-`n!xp08' );
define( 'NONCE_SALT',       'kN8$3}^FMT^Y7A~hRHWML<CG}*t~Hd9#rZw?Jp)=(68r4W.I[=r<pL<K8X;R/e;o' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
