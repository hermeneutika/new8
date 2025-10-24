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
define( 'AUTH_KEY',         '[K%UzRY1%0;pA96m]EpExC7W_xWE<.Oor6<j:Ts%O3=`+M v`X3-h.MS@e>;M~+7' );
define( 'SECURE_AUTH_KEY',  ';S-+gS<2_Y6ks#/|TParqfbthpT=r%r*KcddePcr~tL6sK+rJd-GBQ+j?bln9cm+' );
define( 'LOGGED_IN_KEY',    '<.pI`<nXU8Fm=fYGgq~i{@)bt_n!?~[ (6q[ qk 95QN0;9{fzP6iYm^}s/*4{Ro' );
define( 'NONCE_KEY',        '.acq.~)s!taN<FXR.=OMDnT5GaK$1h(z0?H|N~54VeH (]0e?8.z4D_CqeLaujG8' );
define( 'AUTH_SALT',        '}X`C0:=^t3@KfW;t5h]Y_,8lYax4lTA}68%-4= </v`#^LtB ^FmDtTM:S=?`6A1' );
define( 'SECURE_AUTH_SALT', 'qJ|4E]7Fs#;^{X8vz*[.)XtDg=-W*c>X=@rZ$Fn:ekWIAN9V}-6Eb(X{zaB:e|`q' );
define( 'LOGGED_IN_SALT',   'c]$si=Jb=2YY6&9XiiFL<%$u4 ]s+(#(EtW.-Tu*O+yj}):GUvju9aKA@LUIN=%P' );
define( 'NONCE_SALT',       'Lc+>G`{*86EV<AC<e(bw]=bhYGL*h&+F,5.{tAAev3J7mP.+Pnh_4>+:qTsNv,ry' );

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
