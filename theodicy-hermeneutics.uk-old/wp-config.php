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
define( 'DB_NAME', 'wordpress1' );

/** Database username */
define( 'DB_USER', 'michael3' );

/** Database password */
define( 'DB_PASSWORD', 'a7NDROMEDA!1' );

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
define( 'AUTH_KEY',         ';O889jj9b|lYD*}GK/cI_<@fjEmH0W8w1heWGW]x>#=FVXhdaU*7J%G%`ZuKk=$<' );
define( 'SECURE_AUTH_KEY',  '}_,f8]{boqa?:]-i:nUe$[&C>G >wo>I7)F]ub*.Beaujjp8C,Bv26~_D>lWG&/$' );
define( 'LOGGED_IN_KEY',    'x=`9h8&E:-!awj,53@uLp[&F1zh_#f<PySn|Q[EM}Utx`(,q${4t>}K=}Y:W:A#^' );
define( 'NONCE_KEY',        'RNk|{4R+W=FaGZ#++hy@!p}VT+q5k<.cMvm?-X$+WF4o8L^#Je>^d$$}0GXXfR{9' );
define( 'AUTH_SALT',        'Tf77Rj &xpFQsSL<I`8+#I3w]h6m(pKhLfJ=dgL]Ms$FgE4`x#lVp<+.JD5K01w]' );
define( 'SECURE_AUTH_SALT', '..;I6t|`L|nYR^`r,vp.VG$n)_d/fRymK/{^^8x93;{7{s+vQuXTz!J#_>sUoq@S' );
define( 'LOGGED_IN_SALT',   'QTSAPhQ_$07~s%q-+@B@y*..h7P@id/-  7{N~|D6lzgvv[{W%5<j`Y},(b.G{:j' );
define( 'NONCE_SALT',       '8_{ArQdlpB$LZ%xCtWQJ{f+:pJev#s8Iy{ag&Sdfm,rPK>y6q)Hs,c@z.0#mm.P#' );

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
