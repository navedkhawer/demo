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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'demo' );

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
define( 'AUTH_KEY',         '4&)QM8XzKPBK]>rrFtW=4c<H?4*&)G|4jiZjDg5AaI,m$Ak1Wi#zv&l0e+ER1L79' );
define( 'SECURE_AUTH_KEY',  'YHXp(/204.;E.o5FszDsT;bm1m=XzD&IXifkJD|U[54TWh{E/S6c:DI{e<R0l0ey' );
define( 'LOGGED_IN_KEY',    'hyK7AKA(VtS&mTFCc$5^1MzW*`^8^B1Y03-b3@N5Hl9R3yA^K:8!f?9jb8$XE%C{' );
define( 'NONCE_KEY',        'C,2VD9_$msG~Mv52Vvn!@PG%%H_C@q3(IQuIup~GbQ}A,NBFEA<Sn A&<^S6}%>c' );
define( 'AUTH_SALT',        '4;R*Y~<j*$Wg3_$%lc]AvQs[*1zu~@g;TdG8{i^?G!a8f@y NbrhL^cKDr*]^{)2' );
define( 'SECURE_AUTH_SALT', 'HDJT.^SY8ov+[! )ixfo6^x[2rXQ$(uvhny[Stleh}ycJMIgal9][(a<:)b)<a&l' );
define( 'LOGGED_IN_SALT',   '}YKXa=De=o-IVu~{qfpFN#,r<^Bma`{@SMov:`sLxu#<$%i}v.#E8LHKR9HG!YqE' );
define( 'NONCE_SALT',       '<@:rk9D4=zJuMj4SOnRO;9YDwG$>;tFXahU_0U3cJ-s:A75_+S@gWN36A_x7#dgW' );

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
