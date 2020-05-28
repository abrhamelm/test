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
define( 'AUTH_KEY',         'c!d>BPzZ,K/2bM{p0Lv,f}?o@[P%Y(TkvJM-(_NM(n^]$b%bA#FJcW+&J]CZOkz.' );
define( 'SECURE_AUTH_KEY',  'LfrOxq1YX(k0y)h|wuSD%gxk^7(rbRSoXb,kvovXF+c]S[#tCC*bFovx&hxR hc}' );
define( 'LOGGED_IN_KEY',    '4KO2&bu-beN7Y]#kCI0]eAr{rk5WzUR&~wO}?L+2%w>oka|vN~fk([k,LM,#wkWt' );
define( 'NONCE_KEY',        'eSr4y:T,0,b![739>8qhdBC~&&.d4)g;BnMEprnUD^0;/]wG0{PZOB]DWS<D,}]7' );
define( 'AUTH_SALT',        '@oes2N7=S)l=<Wk}Z-~9qmK(-BfX0=o)[6;)c6z][vIa*t%4P/X:A0j5%B%}ps*^' );
define( 'SECURE_AUTH_SALT', 'D)1a/T#f}QE[12VybVEn/l$r>~bE3C$Jk{a{W9$e.<?:&{Lgu},B=ew5lK|c6CbW' );
define( 'LOGGED_IN_SALT',   '?s84^|LE,a<{T-MEWW@PzspW+g2uc0$U`Pg5T^x|ew1z~6AGDMb!8{pG^_@e5S1I' );
define( 'NONCE_SALT',       'x_=L/DJC?sFIGh0;H7GSwyz#r}T nr_3f@$x( Y1e|mJHLHAE=O89gy2T}$[@IP@' );

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
