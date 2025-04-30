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
define( 'AUTH_KEY',         'twL?!p=}fqn:k]_|ME2ekaXyKY{3T(JyQ4=a@yBF+u:a7WbAdQ[KPP@w:?LV;7Ii' );
define( 'SECURE_AUTH_KEY',  '(rfCkT7A@k5@_*G!+&>FsTk@dRjGIIt?Z;$CMFyVEctk,-:/fw$kNbmK>!sTlt(0' );
define( 'LOGGED_IN_KEY',    'Iy3,F3YB{JPK9-tQTu#Yl)9_z=m#@;t#b{j|uOLFwv{AKzy-n!&Z1UkcqjY$LUGo' );
define( 'NONCE_KEY',        'KsKZHtY<E$V|5@j!F 7x)da]3thIiA6E$e_)?6PIQhA~B6imelU$zp(GJPN&9Tyj' );
define( 'AUTH_SALT',        'za7<y?3JWbszcmt.>}Ng]6KsVU|Ck?;]%Q^?L>fmD7bhu& !eT.o`VICVVom*xhv' );
define( 'SECURE_AUTH_SALT', 'T<Dg`N0u -M?)A|$*@QTX[1k`e$~XH4.bU0:kQy/K+rU9jmF58VVx6U**7N(GKry' );
define( 'LOGGED_IN_SALT',   's+}md,RPz1BjWsY5PLk-z5aIqh9+AhD[1F.W-`E%aW6;%^@| /4)(w}.Q nliin2' );
define( 'NONCE_SALT',       '-`_Y[XJ2<3Dx<1lriJ|KOTey9du%|R{g]B_*I>zTI@*kT!Pjk#j)3hqC3S5[!-]_' );

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
