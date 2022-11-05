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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'antombeiz' );

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
define( 'AUTH_KEY',         'rj  kiX,mq UKK_QHbdaQ8yu%{.?LHOFV/#1@t2M0A/9}9fmt#-tE[5A/#C:X1JO' );
define( 'SECURE_AUTH_KEY',  '`@HL{A10{d]nOQ?}Q.{SAr=IpLXFo8Q ) cK79y*-}v2w;N_g~S&f+Z@%z&2B;ML' );
define( 'LOGGED_IN_KEY',    'yHf7r+Vi N++$210BYRk!&6gzB({3|N]}W]KxCx6z1?K/z}Ywnz&P-~yx*SXJ-&`' );
define( 'NONCE_KEY',        '=Ru^JP4~c/km4-:9}HLjGqXz.uSUE}Uilq:O`)ez(Rj*HvDqT}D_1a(yWnI#|Cn{' );
define( 'AUTH_SALT',        '!tLJI)E$CLi%WJ7IDYl;8Xyr:3^7;Q.Oc:JB.MwZ9)4*fsGFzn3[[`:xJi#mf^X/' );
define( 'SECURE_AUTH_SALT', 'UhHlD5G*JFmDV4L&7B122_4LrE9R8CU*X|U6rR,y(3HAY8 b?)0$kSPkmACbBg{F' );
define( 'LOGGED_IN_SALT',   'u4o(Khz|9z !XJ_~ywG9G2kv!at7^`9x4^h]wa7xl$r2_;3YUwv4 nvtw+o]hJ.h' );
define( 'NONCE_SALT',       '_H3_VhUPVF^scZC}M5c_`5=wLvmXnuFoCM>[M2r+ Azh8#2Aurn%/f(VF5L1O+Ok' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpantom_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
