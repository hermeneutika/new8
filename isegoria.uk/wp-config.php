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
define( 'AUTH_KEY',         '~u/dZ^$z36[ekL_ !nDiZ7kx/.&Kd>`GsBz612%fIo4A3 ?ESPtfrx:~[meowxk~' );
define( 'SECURE_AUTH_KEY',  '.A1M_Yu>Lk~itC`)X_Fo1dMC^W^0DA^.)@ VT/pS~bJ>td4N89CnF~LC/R,MWoQj' );
define( 'LOGGED_IN_KEY',    'r &.HIT>I)rGI!!xX:K7Y=YuF7sSOnUY!/Aj3Egrq&:LVXt6W]bd!F+aZHbs/O[$' );
define( 'NONCE_KEY',        '2lrUs~a]>>Cl2ZlE 8q_;beyb<1c2(aNpt(#rZ?%OHoVI/Z@ ;IinQb/Subax]mT' );
define( 'AUTH_SALT',        'XY!_UazC7E8`yuLe^FZcb^-7PDprd45vzpR:LVjHB/sP{z2gIO_JDx@ludy@@:4F' );
define( 'SECURE_AUTH_SALT', '}oYK3aAG,nVFjdm76MJ3H5m<-a)vF?:O wQ3eK&@3}-8ATDNr*E.rm~`;;>DM<Q!' );
define( 'LOGGED_IN_SALT',   'p;LYe ~)m&C,:E=$Z%5|,~:IQ>X?E)xJh|wmlX,&LWXr%`8A$zTVhz+_VcsIMsGT' );
define( 'NONCE_SALT',       'o0&JLPuNXxFL=/y:M=7<x2OL7Cm4&63zQ .S/&P).nW_}*`7=M}35>9U=_nPlQL.' );

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
define('WP_DEBUG', false); // (Optional) Turn off debugging mode if not already set
define('FTP_USER', 'michael');
define('FTP_PASS', 'A7ndromeda!1');
define('FTP_HOST', 'localhost'); // Example: yourdomain.com or ftp.yourdomain.com
define('FTP_SSL', true); // Set to true if using SFTP

  define('FS_METHOD', 'direct');


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
