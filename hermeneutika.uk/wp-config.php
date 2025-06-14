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
define( 'DB_NAME', 'wordpress2' );

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
define( 'AUTH_KEY',         'o*>V3@zLG/tH+.1!|f&P1[EH5Lu?u1fW8*;=L(?14n8=?sR?N>@7IcZW`k~6AR!+' );
define( 'SECURE_AUTH_KEY',  '}I}362`iMDqtbE99m0sejc#5[WVV[E14`3,mZe]Wch!y(,h{moryT&$9r^v:C*},' );
define( 'LOGGED_IN_KEY',    'fN!*-?Y.Y&MD>:x(6pa%rFd7:{1p;5&$dN6<Y=0%>B&b8=NA[:N;XT-F*iKYgx|n' );
define( 'NONCE_KEY',        'nI_?MkrnE93bR0{Ec`% pXa;9`H=7PDJ^2GA?n~1>l.5AH43nR&8%u^Q)rw`cmh$' );
define( 'AUTH_SALT',        '>r(e1u:;M]|KuzI^]B0BImp/p(KEiYTL$v*<J7:F3<w%?yuM:ziKh+JR8UmV;!H?' );
define( 'SECURE_AUTH_SALT', '`fy<N!2V$G[Gl,oSK<4iF[cT=3xWBIpl31%y7f~Z6TnCXKS5?3]OU5{|GHE@L4(P' );
define( 'LOGGED_IN_SALT',   '/~G<ii*x!D5T8eD}td8+S:MPE8ueyt}:L4BgC1,#RO_r3AP9NVC#plBD]|JP*!n=' );
define( 'NONCE_SALT',       'Vc$o@:WlgYjCMO<!Wb:3Wr G@>Lo?TG2+A9Ho&P=c1[F$2f{09Kybuv5+7+!ny}{' );

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
