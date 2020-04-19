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
define( 'DB_NAME', 'test_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'k=loa?-r ew1ac:M,6^.u/;$<y95`-N$Aib@BT%>LLQ6*k]K*M@xo0S4>>[e_9`g' );
define( 'SECURE_AUTH_KEY',  '<|H-`82Dc )p:O0Tt[j__(Zf`Ht1gBY)bw{kWdLnTV%<XDJ:!qs%SsLLEF0.A,|g' );
define( 'LOGGED_IN_KEY',    'eUP>~zK;460d,Bc^QEu8c]7Z4RE59!1I!OO{r-o)pcLHO3zy.=iva0`S@C1=lYu4' );
define( 'NONCE_KEY',        'M4k1peiSJ3uU%xzX0[vLmv+w7M</vitRGbsF+q@?FXWZ=>|iY1;0)`3f9hU8c^i]' );
define( 'AUTH_SALT',        '9+K_h!L R?IX8@LD+I,B}}`lXvJKvdI[=4kgk(@8L_PL-5^Trh!%3h_1h8sM!h-/' );
define( 'SECURE_AUTH_SALT', '<!Gbbq?-BH@80s64}.q _ir=KH-f(/VW]6:j$1P{EG[i!VjQEq{82Pa|T{UG*Jiv' );
define( 'LOGGED_IN_SALT',   'bG&bRQg(mn#Ir^7L2jI$]A*@_,94M/.SO-g<`6OJ1S]a7SdU (B=?#mT>(}7[ I,' );
define( 'NONCE_SALT',       'VZ-hharix(MDh1)qWU=~<RqEDo!3S2#F]X(p{7n+`V?=:>f4VbA#0.!@H=*U7Y%*' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_test1';

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
