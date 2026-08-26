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
define( 'DB_NAME', 'mysite' );

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
define( 'AUTH_KEY',         '>02bhR<8cx<h8<HrH4Jcpj[$FT_Ds2Cw),4?F,lyo/&_xi]fpF8+ZPO&<N 8w.-A' );
define( 'SECURE_AUTH_KEY',  'LKm.@5_NT6y2gblYU>e8|qCa4y>x:1{v8E8oZ Neib&&}l5wPeaP=^LR@+eX^^[~' );
define( 'LOGGED_IN_KEY',    'T0sdix[zQ&!]jJL^Z$f>E7gVu#fQfJ:L8e) fZ._;u0l3,p7i@DZf>S!VxXKHeIB' );
define( 'NONCE_KEY',        '=+W@/kC-as!-HY3@wlE(#Hu{8hAbC%HzS|eH>He~IEKU8x}^>D]gz6bP]=11f4`m' );
define( 'AUTH_SALT',        ';BQ#E_X+b3fAR8KSyuf>5,{Uu9b=p<B|vU~v/}[ _/#{$t60EPE}.QXosS:Lbn}S' );
define( 'SECURE_AUTH_SALT', 'bfW:CGJ76A)=Yy3ckcguJW <B-[=LtO+7HXS}g`W/A3|uZ+?0=90bE@*}y.mb<{V' );
define( 'LOGGED_IN_SALT',   '_^{_mBG7u4_zFM6x|oYzS=ZFVzZ=jCkh1<5@&-DmnYo0fjf@(VT6(|Am1N&6LBC:' );
define( 'NONCE_SALT',       ']kq|~qJd-K96By8~mxgx3H6O|X&!Qh9h;`dL|K&X2w`frzhQc>d0 &Hg+@`5sBAc' );

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
