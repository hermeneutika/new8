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
define( 'AUTH_KEY',         '>XG#h7$OQn.y[o$]+KUaM17b7/o;/WL]S[P;~0h4t}hk.Vl.kQ6i5;i0M@Y,Q3k@' );
define( 'SECURE_AUTH_KEY',  'Yf( 2{Rlf^1Gp?<4_Z6HlqsI$Fgj39!=~pesphBE>f(u7]La6GH8oC%v%HQCh{t*' );
define( 'LOGGED_IN_KEY',    'F;(UyQXs*(vS<8;s9HEq{5RfGs/uqKZB;q{dN% >TmG4BI}1Li<~~kX}ON7h|GS%' );
define( 'NONCE_KEY',        '6KODO4Vg%qqw(-,}Re{0Fe*PVt%LK[G1XZk^*Kc(6+k6<k7yq[{%Lh1BYLXaIxBu' );
define( 'AUTH_SALT',        'M.uY95,95i|& d28hCB_x7U/jx?q*x-bhM#zB^}bCdczQpoAZ@}aA=]Yv5:Xb/m|' );
define( 'SECURE_AUTH_SALT', 'z3TFYoY*iL*U8Blh>yK&YfRA:w?;v[SvE[mL#(*tVFb*:Ed{Cf!BOa-h|/Vooa7~' );
define( 'LOGGED_IN_SALT',   'gcA~ S3b(EdXhH9_88c^:(<&Q$:YFX:2DdB)gMZ0hsnR4-0S|aFF:#@7+?3e5NjN' );
define( 'NONCE_SALT',       'S4g{P~PkT4#1rz@Iq9:F!n{9f^CFPR*k24Se~8uOp+{?LpH5R%~-g:R^[S%Vmw}:' );

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
