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
define( 'DB_NAME', 'sumi' );

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
define( 'AUTH_KEY',         '1$qe[t}X9_[:dB 83zpq[r^Y*CCHFb!@nJ>#,)DU$G1<aoB&u[9#fviUXe6njh~!' );
define( 'SECURE_AUTH_KEY',  'S#K~g6P7d_*?.s8Dm`QlkSQw<arA)+_A20@aw_hBfbF[x!fC,F%<0`q25$O|9 [%' );
define( 'LOGGED_IN_KEY',    '@4|*`$)vZoGcp{=iD;#hyd)e*Nmi?P~3-Dd+I}! E=jPA20PP2V@<Om[#I+Dl%!_' );
define( 'NONCE_KEY',        'mHT,_1Ec`<WG1K|!{bwIdP1}soIsSAm)zkOQ/kS!;Q@^T_()Ow,eOsZ5GiC{qTBT' );
define( 'AUTH_SALT',        '<M +eHY/lOGU}?NQd~:Fk-BSfDP3VM]J+5T?M}77!OI(ZLryGX}:u7EdKAz$C_;e' );
define( 'SECURE_AUTH_SALT', 'Lvo7DRJ2m7nr,4JAD[r$.rmQ7m~i&W.YKLbw]n0RQa9gE[G[xj<u/tyf)4&82ZZ5' );
define( 'LOGGED_IN_SALT',   ']zE]1Ky,1IE_DU<G&PA!#/t1j)0DZ]Ze20@dIDj`S{WE!Ycz#HOV|6T_Ws`~DRwI' );
define( 'NONCE_SALT',       '<;%2Zbo?/H!QcEfo#GaNDdPG44Pw78[%u[q&N@kj6) =KR Nv>n*dwk%<:1<uv={' );

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
