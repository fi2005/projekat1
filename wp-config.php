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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '?Uu?A}H5~$LZGx-=rFT=3Fz)wS[^~Q1.<J.>4R`(K=$}4Gx|$ Gg-/>YzEM*$PEO' );
define( 'SECURE_AUTH_KEY',  'AXYdrB[)2G:Bw%w]o&`$:b7#l 3-BkJ-y?P&#k&un=[*RracK0o%3S^^/;x{`LrR' );
define( 'LOGGED_IN_KEY',    '{:<+,q62xFq09G,zO(j~OI=}qx!H1@+ 0<`$f |m~&$HdwL:,$!!xzg-&BUg+5Yd' );
define( 'NONCE_KEY',        '7r,</[5/iTU 86M,.X4i yq?n!f eb+m&cjg6rD*-N-WU!^5)/)?=S2GP@x)ac|D' );
define( 'AUTH_SALT',        'C)G*,TX2C?QJ@EuY+NG*icRxy(JR+;c9^|P$FfR@Rt/ea|553.JGs+$E4:4Ry$ R' );
define( 'SECURE_AUTH_SALT', 'VXNI[-|`-rkSwUUhS@gS]p?@.WKbzlL44>of4}0/g{d?]W14l_=Kd_eTzL)Wkr=k' );
define( 'LOGGED_IN_SALT',   'x;MeK*#_S4,7sv8Fn2i.V*exm3L$Wgo>s=(cJ9l,7-H+h.wg^/j:<fl;sTr&}OY!' );
define( 'NONCE_SALT',       '#bM8N+T~1svZ6txQvhGu4 j;.)J|HvYN[9ztiRG+T(fmqw%d8wqR;#A%IlFP9f: ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
