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
define( 'DB_NAME', 'wordpress-new-lap' );

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
define( 'AUTH_KEY',         ':~M.LsT#*OGJ^0Er,H07cWMkWl<i:Jp2>mHv?[HZjp3#v<f>M%1WbV WWPybND=w' );
define( 'SECURE_AUTH_KEY',  '8y}g@pJC%nh~UPN}R6+>bU=l@lG<,RLp&`ThK#!F!kXpo#&aR]{(peYC^yG(x+D>' );
define( 'LOGGED_IN_KEY',    '_WB[vKs+T`I.?u7J/0HhqtI@I!-Pj:VQ1<<;ZO]!;p/;~-=+&Wwh1e#YP*Tay4Fp' );
define( 'NONCE_KEY',        '6lfqT3SN9xdVV1vDxIduw%b@cKg:6TsjQg=+9g*`|h:{3t:MS2|glu(>j ync6Vr' );
define( 'AUTH_SALT',        'rj8kRo^H,PfCP@{qg#`)yl1a9Z,4BWU2e$(38xw.U03mYFgUSE0687$Vx,^3#~*M' );
define( 'SECURE_AUTH_SALT', '`8{d4|+(Y2iJFC0o{.kD@eyaL66$5a:j74(R(C@D;K(@8X&Ib|}x77T~0^) K=Aq' );
define( 'LOGGED_IN_SALT',   'n+[{M&(#A9q1k%<|ueZ6Jdw#jLhI9MQg>jw4ICH]D11M(vP8lW}jQdFuLMT>P)5n' );
define( 'NONCE_SALT',       'M1T>%3[Rh(gc.`T[`h/VVc>Wkw%?^e#;ooz xz6!}:+h90nx!^Zt-,s*8NXJuhBB' );

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
