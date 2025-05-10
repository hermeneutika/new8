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
define( 'AUTH_KEY',         '(jpAUpI6;*R>w(<2R_=]Wjz2emio]*<{Px[WjoY^Wq_c~wN!?|j~_/lExzyzs Ih' );
define( 'SECURE_AUTH_KEY',  'k[9w>&<gw_=DMSJ)T&Uyn!<ZZ*1n4AGZhO?pAVY(f>t-[R`a:nFv(xGaoBUxMOmp' );
define( 'LOGGED_IN_KEY',    'xV4X?TWyC^5!nk4FywpTi&=%W9bI@5KC _j28{&=1]a:vJ9sL<NLG)y[M.qF7E/?' );
define( 'NONCE_KEY',        'j^UoZP5`|kKtLKcDRHxezmDo+CF2cu!}uK}^Z} C#-~qU;S;T=:KVL-J7h+mP_s4' );
define( 'AUTH_SALT',        '!wa_8069cYZ? A2+Iplx6c6.9+C}cYz,S8Z!$0Ra5kJ2mk!N6$YBaiOSGpMp&n(x' );
define( 'SECURE_AUTH_SALT', '!gI|Vj%2Oo.L0bBt-W&wp#IHiX|e,:Ma-~,AP4/?HCBy~V3(NpxfPBbv^L3&`8b4' );
define( 'LOGGED_IN_SALT',   'N{~2IDTy$!]t/L5R([f}trXl};oD e.~o_78}Yq5/zR&^)WtC~!o@RmS>]M.cd+8' );
define( 'NONCE_SALT',       'Veo.I`9zAeg-+$=%}4FI&C1MIx;]C_VS O&9]~qp>j-$X!N%m5,tKcRoPWOKknzi' );

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
