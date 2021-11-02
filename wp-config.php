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
define( 'DB_NAME', 'mmadalyn_staging' );

/** MySQL database username */
define( 'DB_USER', 'mmadalyn_staginguser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'KxeJp$F[v%5[' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'u]!~4.poATo^I>GR^Pb.z0thsm= 4Y,2?/_y03cbUL)@IBZS/kz=+>#RX2P!F?1l' );
define( 'SECURE_AUTH_KEY',  '=#<X~KNx.d44V51;UXoKDmK<~%ZliIutU:X)sdw,<~573M3+C<-g-!L?=g#2 (9<' );
define( 'LOGGED_IN_KEY',    '9`yT_RV=C9/4$`<Vbh/eJF#e1JVhCq3^_`c%bkcwiuRd(&#+#kH DWpn).#^F>*t' );
define( 'NONCE_KEY',        'c;`>p*{&N!nNqFp,d{t IMb2ou:,Wa6HM,ts$k%/hv.qXXv;sT>%g-^06%o==u;q' );
define( 'AUTH_SALT',        'U`[eF1vs*gdTJRUS8d!1EK/Wil?[$*H]FN%[~>w-FABA@tD~@RTI*i2&63j9=e8{' );
define( 'SECURE_AUTH_SALT', '#^+lQM]T)a{8]cwyZ}otZzCoLm[-(4yf1[p2]kV6$ K{>_vn(+_F]hPZc,|!Lj4:' );
define( 'LOGGED_IN_SALT',   ']80(4m.gbzUa26,lyl1;b-8zWHt0T&>cWcjo~N}w8Y[!i}:0aH k5P$-UH!`Nc[K' );
define( 'NONCE_SALT',       '$m$jg}L&v*9cg79FIc,~P`mw 9u(yO4RfTb2$Ves-@|JJ!+x1T!5BLJP`Gjs~s3G' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

set_time_limit(300000);
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
