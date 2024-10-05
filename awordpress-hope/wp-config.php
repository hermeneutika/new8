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
define( 'AUTH_KEY',         'rOXM;^8sEzhD(U/&LADyz{*9J}iqE@F$f$:NdJ4=o`_L;s.N LdG]}Z<1:R]3*f*' );
define( 'SECURE_AUTH_KEY',  '/HXgA_sWlys^$X2aE9NOo5-2ML%0i >_hUehd}fadfTKdM9XAZ=]jo@gb+Np9ko0' );
define( 'LOGGED_IN_KEY',    ';Wld,=T.4 5 Fw?0J6:<`]}@h*swO%KA#`aK~d:(~{$_/Ta8`j)+hX:%y(eTx>Vk' );
define( 'NONCE_KEY',        'wGT9i#Ux5tQd~$ZhwY~Y_.ctb@:jWmHYm4E%XE%lmhv9WA{cM$~Grs66SJX_$e,D' );
define( 'AUTH_SALT',        'Inm)Um_s:yd!:3 B*TvX?8jzb;Y3fj~|LC1MPM1zn/=/QIHHC-F:VKr{/BjQu#<T' );
define( 'SECURE_AUTH_SALT', 'cnCzPti|2wv1?/h]D;n$~dT0UnS7ws,%t;xO4Ld,?[!+*nzk:i9GvBf),v^l>_a[' );
define( 'LOGGED_IN_SALT',   'R$-{{,c*{kgE_Le)O o]r(48u5 < o-]6j6^ju^8CuCR aKvrsc,[r< hbaD.X2c' );
define( 'NONCE_SALT',       'n@5&g|7_oF;im/RlY~zSs|g_`7e4q8~_MY:Hn?&/ip{x_~G-8s2-APz*dpG2r,SK' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
