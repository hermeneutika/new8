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
define( 'AUTH_KEY',         'I6^Zlu}2 ]g J]-0k7Zt?$+G0*6$BU4;vfWQa$j4jt2:q9.a}]A3sk3@>sEjGl E' );
define( 'SECURE_AUTH_KEY',  '%brBl-BhDRa^1W^]):P_?>41X+9eQp#[c$t`iM*FxOfw~>s43r@d~l#?.3]*#26Q' );
define( 'LOGGED_IN_KEY',    ';XoYYbLbr_Wm,C&sDXdw6j=;hmTbN<X1w5X~!j<JiyWL?&CHB)X~d{ GEo}z1|zR' );
define( 'NONCE_KEY',        '+i`;}f<rv9E39;&=x_=my((id`j+en3<Lx7(prDt8|S}nOp(O%oB@tF:ow`raGwS' );
define( 'AUTH_SALT',        'KC,bss;!m3:)f4c54Bc%g3=BX:=Pf)o-4w~CUunpPW>qnL2,2tw8`TF6Zw~7jiO ' );
define( 'SECURE_AUTH_SALT', '$nu8ST/m3^hf/Z<lhC?R,4o;7>dqggwB?8$Cqh1aAs@{VQY:8{c3n,q0I+n(ead0' );
define( 'LOGGED_IN_SALT',   '[Y~^&dUTUaw;##N{KFTy-3$/VCu5Fp9(.1Bl%Fyu~q6}#&O#tKt.{8}^,q+ABFAA' );
define( 'NONCE_SALT',       ',*GE9Erxc)*fM8 `A<[@bvhc?dk<ZTX1KUN@:$7l`C)~~cJZ|Y$?P#:=GfV5~&]H' );

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
