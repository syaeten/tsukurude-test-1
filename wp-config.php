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
define( 'DB_NAME', 'test_1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ');^ECMFD`Wa4^~n1O96kEIKkTS]U nL_4]nwX @rKInR Sw??fLW4!ybjaq#Nc%c' );
define( 'SECURE_AUTH_KEY',  '_p6g]f|{/=`TgMke.@big]4)*~XEfU+i&n=rqlN~C1VqwFkj4~DQYN$^V[w%!W:X' );
define( 'LOGGED_IN_KEY',    '9Bfmm+hxHa }c!L7o{Vtm_=!?poiY&vg7H(%.~@A!Y1j#b,zvV1;#KBVU@drvo|$' );
define( 'NONCE_KEY',        '@&y/)wQx@$7*TeP_;)hD@UI<1jIlqcEh~Cf~*$an4G pW&6kYqDDqXi)+i)KRxGC' );
define( 'AUTH_SALT',        '[G0BSZw/ii[6/$KuGfHmQ=kw%@3tzHm>YHi;t^I0zj=`6{.7<lgRglWlRH0j4[[4' );
define( 'SECURE_AUTH_SALT', '_(ZWt,`<eC:a*%^$;8>oru>5T4[l5GyV5 ?R:e4^WE?QOg(d^h-irazV2Cjxa@tp' );
define( 'LOGGED_IN_SALT',   '`gM#U]X>*_+vH{R,}+JR!*f.s3h^l9;Re(/Nh%Vc7R];34wpSvRZZapos;5nd|?F' );
define( 'NONCE_SALT',       '4l2$[Krz~GMe0}+KAQ9#z8DwPd]}FE;gWg)e%)~8lC{C8>yb{)f([X5N^4k6;i]f' );

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
