<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'news-wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'F`s GX;WBYQfTz1E@rt1Ert2EM>l|d9;}XOr5Ho|$5MV}`OFV6V~b=ld7(IY4Jv*' );
define( 'SECURE_AUTH_KEY',  ')@K-$HkYPco:>foa:(/>YN) 9#bnH~:TVNd(ADQ%D/r~~aD04o=zt|Gg2>0Lsc5I' );
define( 'LOGGED_IN_KEY',    '7W`wNt|DAq}H{O#^O5l jQMlz4ZC6|Xq[xm5qEuURxY?A<@!v8)XhW~#JbD1_TLV' );
define( 'NONCE_KEY',        '?@Hd+M[>AF10&KfS3hV}{{rYxLVQAJ?z<fK<CmRT_0vJ~vj@2k`KBNUmEWzg23aR' );
define( 'AUTH_SALT',        '!~<?ZYz3+cykk+iAFxF!xS*PerR3X:xHG=jG>-Z*/r.5f+jiZpe9KOWK>]9X-xXl' );
define( 'SECURE_AUTH_SALT', 'JfS0 %$PTMXW|%v`U95eF_&B[J.nv3c8VU4%M4go-/siHEYWD>2CTV/7)b ef>fl' );
define( 'LOGGED_IN_SALT',   'yWm]O+-Ibny*-+%H.s:( {=5`/L|B@h:iH*OP.~!-W-%_ 6!oA_u)txp|[NQU0nt' );
define( 'NONCE_SALT',       'mk!.Xn?5k[nL]a|k* %go:NzRG_M?jQ{Y+2VeK,GndWsr|HtN @Ek`@)GofgNvWv' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
