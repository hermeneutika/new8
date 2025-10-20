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
define( 'DB_USER', 'michael' );

/** Database password */
define( 'DB_PASSWORD', 'A7ndromeda!1' );

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
define( 'AUTH_KEY',         'ufKZEyo1rYUg<T^[dWjil;0~yY^Zi@uoz W!@?Z#xV@_A(X.(GI68xJ*X1ER?oB>' );
define( 'SECURE_AUTH_KEY',  '-{}MKh(C)u;w{`LkVcZ+|{ym1-?GYAclH4?Xl/31E;h-i%6jG?*As>3Pi&-OlM}p' );
define( 'LOGGED_IN_KEY',    'De T_(?x4l>*;p3>xggz#a*&>FV$=,A~mzC=IKZ$N~Y$[paT[UvnU>&kG/,9.^P5' );
define( 'NONCE_KEY',        '@5t*=~p1I,wmES.EVd==3]Grp-F)VWcDGb86r/wRm(bBdR<%gr(SB=^-mpf.{s$N' );
define( 'AUTH_SALT',        '`ZZLN00WJ+_gH-d>?m@xqi[:eT*1:{0@Js]J.MP<1QT(E%i&ho_[<HP[vXnLE}T%' );
define( 'SECURE_AUTH_SALT', 'Z@_;2U&S|lVV&- 9Jc+a{~-A04Z2y<s9B_CB;gL[/lDO(=q GKh?t5_Xxl;UX($S' );
define( 'LOGGED_IN_SALT',   'DMQ{5[oodk#B5pqne:C;3Id&xR(^T97x}~IMIW`Qih=ql%2jFpr8M0KJ|^#27xsH' );
define( 'NONCE_SALT',       '_nTB<w,C6{1YWQzv pH2{V`8d,P8Kug_]i8q%@}K6 mEqpK+7Qh&8R?#_pN`cI|/' );

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
