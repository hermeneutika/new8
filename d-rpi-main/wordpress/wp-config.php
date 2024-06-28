<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'michael' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Messier81!' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
<<<<<<< HEAD
define( 'AUTH_KEY',         'CA6Vb)+aX5xAPlRiJlkD2&vnR8SoDYt~50IL6)`m8{hZ>Quo)^IIR}lRjPJ>zf-Z' );
define( 'SECURE_AUTH_KEY',  'pdxIw@yDCr,|(N|v?>9kNb((ksNy#JR`)=$v@)1:t@)$m_Z<27e:)%Us&;BtQ?<7' );
define( 'LOGGED_IN_KEY',    'wt6wTvK6W7c5xt&GWS.whXw#4[$*1B7Gl2IqQtu8t5Mj]Kv<IQ?q83+;@%0TtU5C' );
define( 'NONCE_KEY',        '&{)vgtd&Qqy^E9U:%s@1E@r[5Aw |7B>fyCEoa?5rC4h$iN~Z>Zb4?$`5fUf`=h%' );
define( 'AUTH_SALT',        'jy 2? $umkS4f~||lWW+3zE7VL_8 C?R,8erlKnW]YPok%KF5Z-`#A)I>X;%VZ$.' );
define( 'SECURE_AUTH_SALT', '#qH-%yJYe<^9zZo>3)nu`dH,)HzA:cm[VYar^I(:467X4,(E@8!1D>$8PTP [gg1' );
define( 'LOGGED_IN_SALT',   '}[@y(yPXsw@j iS-ZEEGvGf7.A@Zy9{)g6zlp;5+(xGH@Q?)@H1NHWHnYL!ltC7)' );
define( 'NONCE_SALT',       'ojskSb#{ HK<e~8b|_8Upb&P`G%IG|SRZHVg$WmF<a<boqnk;2d+sS_av*<I`6!z' );
=======
define( 'AUTH_KEY',         '_x3Af{[{y;>TnlrmSHs!Ff6O]Xt0%`$psD9ZrbF{%RB|eq<x`}rmRaF1orsG|@L+' );
define( 'SECURE_AUTH_KEY',  'AG4%/o%}l.FhO[^.nI]8qO)M!in#.SDud{m+5$R?hAr7xs?8?3b=%q=18VS.[ACm' );
define( 'LOGGED_IN_KEY',    'X~R8t03-VuIUpNq>*cS<DN`(9?_MJ/O^[Gaq[mRa}OF~.o9jVb:}q{}m#Q Cj%Mj' );
define( 'NONCE_KEY',        'up>N&h.(-~hWdC[lw7%}7Yc75PI}nYEQ[vs#3?rqY/fwoVTz8]HsYN.X@=<yStlo' );
define( 'AUTH_SALT',        'j$G5,rvpG#:x;TgJD8T-_ATtKzh/3,_eTvLu$5CIe*w~.PY84 qntK$R7Rjx Oi[' );
define( 'SECURE_AUTH_SALT', 'u-<gy_v+/($W^O,{V@LK`E=|Z9YT5Mr**^ < =POD>=pglT4j37Lo:e&XLjHU~F_' );
define( 'LOGGED_IN_SALT',   'tGP-Q[J6Yb`]7-}@emi9H^|OwP6s5N#nD4Q{+Tj-1}`*kpX,~X<}CKAbCzu^<Rik' );
define( 'NONCE_SALT',       '_-[FT$CaQ{_Z!FtxIk;YPLzaEyOj/3]9f`cQXKSC|E^!H@J`)u76Wlg{$d%nob$f' );
>>>>>>> 05d4f7f60996a457e72bc1a6c5c219d7fb8ca4a9

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
