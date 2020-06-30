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
define( 'DB_NAME', 'wordpress_database' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'aakash2408' );

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
define( 'AUTH_KEY',         'AD5+3LP*R2SE^hM|:Nt%XCy(P6TPE3HHa|xu??M#S&aXOs4a_8VDLdV7P)QhSe_&' );
define( 'SECURE_AUTH_KEY',  'r;8b^46g$?wF#=UNL;Ub+HZ}lFY,}3&$: ]c4J]oMppmp>k95MGAZ+GcrA&*fTor' );
define( 'LOGGED_IN_KEY',    'N_1MtbpDU!4nj6MYO;Aun-z[!5^@Q^B~i4x]Iqg)tF9_6K|]^<,rz#vD`r$&?Lw<' );
define( 'NONCE_KEY',        'X3Me=4F@LHKR~L=`xk0)kmcmL3qFjDI#:A,wO+$NREG0;_Jqwe*B T$e*f9UQ!9G' );
define( 'AUTH_SALT',        '9&G{seQ>d3+Y-;fURn:A3mQ``&tFkYdtu(uiM{e8;g:4d^h8ms0=sFr(Tb0^%S/W' );
define( 'SECURE_AUTH_SALT', 'A@t0q@<|Pir<wb;V)uhS2,)f*VLq_+>_]!9*sic!u<85Sx{rsTB!M9>~ zV}p.^^' );
define( 'LOGGED_IN_SALT',   'dXVS8_TFt1u#E^mRu1$py%E3q|mA0O.#^3_y+%I{;x:;OP;86p; 8V@#4&X%gwg.' );
define( 'NONCE_SALT',       '{[y`Veg98d%8~|H-9*O>/kEwcfn qA`;nW@m,*)#!LI}#I:I#2szaRI$P<i[=!Ef' );

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
