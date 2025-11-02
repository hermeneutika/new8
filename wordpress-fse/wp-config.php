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
define( 'DB_NAME', 'wordpress-fse' );

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
define( 'AUTH_KEY',         'f{W>Tn#igUQ`d0rUQ&}|.lh%CFzQJN;-Z<ib+ql3*,E}.H$[rVxB/.@b? C?eGc,' );
define( 'SECURE_AUTH_KEY',  ';lNIl[ho!@LEBp+UjlIjG|9[M0r)OH@KZ_8nNmvEAtq^-n|R&};!r:lP)=t=Go@H' );
define( 'LOGGED_IN_KEY',    'KI[c$& 6.~6[&z+u#1N<;fXH}=U(!;4vBDf&cQr/ha+30NTUf][Ob8ubWa^$).<!' );
define( 'NONCE_KEY',        'h:-]LWUQ3A_9A<f%#2vGzfG`k@VG/^^jpw0@}v,p 9+&@P:()K!fEV)pA_R.OP3|' );
define( 'AUTH_SALT',        '6#8JW jHMCR^0^n>;<iy/pA-7Z=JRl?~]|Kjp4i3-9a/P6J%J@=JfETCZnCb>3~?' );
define( 'SECURE_AUTH_SALT', ',/pUYie0,)!]ef eopEP=nuQ{(cEX+ t_5yL|EykHe_kPgtc!NCQdzZ@d_?4hkR?' );
define( 'LOGGED_IN_SALT',   '!0z)L)H)=*]C:1:Xl8k44}yLw+[ X$@F0IlE!z!XqBNMB`Rq<LD.-4x<-`<f{UrU' );
define( 'NONCE_SALT',       'l,zJLgv4z*](AN5eOU|[6a=[P~j890r>p1(*A,iu1|@. nJdvIun8N[WL}m~d)s~' );

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
