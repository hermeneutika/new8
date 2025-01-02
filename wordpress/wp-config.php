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
define( 'DB_NAME', 'wordpress-new' );

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
define( 'AUTH_KEY',         '$q~rE=m))eRFNYfv$8JNw<7w>T:t@^{{ }.AU 9@).~ vd <NAjlBOIAKgpV)mt]' );
define( 'SECURE_AUTH_KEY',  'njs[6BbfY6^}Zl= (~zZBl1nvMmL1uD<T._QaT2YI2sa`9vjNT#.^UCXX=j3FawK' );
define( 'LOGGED_IN_KEY',    '~*Ij_FI_eooU,$hfZ/?Mqhpr!.gytUAyK{!GXPNo5 Kqks0}2nkL]h2{TSnrD~PP' );
define( 'NONCE_KEY',        'TI`vJuv|RB6d=:SMn@w9n:cyO:pA%H%JmdbTK_S[tjE^,Af))aCwZjY[oWEphJJ>' );
define( 'AUTH_SALT',        '+7y$v:jPHXhth5NB~d)hd8Dg*+R=u|U8dbi8G[j`vx/UWm%:fF(PDEBB`r2hr3OI' );
define( 'SECURE_AUTH_SALT', 'oyCHUShO;.>Im>jct{%nrW(FofHCUX SEGqv.A_jTt@fJG>FEy^T?=|5I-(XMCU.' );
define( 'LOGGED_IN_SALT',   'A7x#OK-Q:V}5ns?EDMAWGPfHya+4s1ZL=$(lO[F&U|)ToA7NDzPw9=(B#]Y-zc9[' );
define( 'NONCE_SALT',       'ep20V-1}QCBEc*;`kP-k<j-|8N3+)RhY*G+59G ?4XWY`|uT)otM[ZpsMK9_<na]' );

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
