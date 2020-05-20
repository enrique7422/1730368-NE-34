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
define( 'AUTH_KEY',         '].l<a$<3SlS6{u?mv]FX1$,<qG/p)K|]@~tp3Uy3@)Is>:D|`VzH(L+Xg{U1A&Kx' );
define( 'SECURE_AUTH_KEY',  '~nAk7uI1sNoj]ip)?%;N<${^#`(6!+3H**:UOP?qFss|`=G]Mu+of7%ZW%*es>,3' );
define( 'LOGGED_IN_KEY',    'w771_TOwdH~*^:Mtf=6QPezIS$[Td]>[]luQV%ZALWoowV-Gy!j`Nf.T)m@5*qf+' );
define( 'NONCE_KEY',        '6Gk^<3.(Ml&RgNY-Vm&~i?ot1rOAQ_EI[V(3s6)Z3n6BB#GboQb>!~]PNXGd:6Q7' );
define( 'AUTH_SALT',        'Z}e.xYb8~o*pSxoS{L0mb,Dv8#g9`L @.RO;zKNy8Sa,h!VW0lMWev}n?3`Hk5ub' );
define( 'SECURE_AUTH_SALT', 'L3RYP>4/Gm5q3|bZ[K_g[Nq`:8/l+knQ+Z;6(IKQ7JW3?nMQ tqe6W8nlQK;toaZ' );
define( 'LOGGED_IN_SALT',   'M5s D,u6TOcjG13tPISf#pT^dRM/~nm-4/_nQIsR%e5Q<o)Mh^f[QVAnWz1:#N=f' );
define( 'NONCE_SALT',       'D#%^FaT9tu>&S4NOcA|BYTAm%[jNmRP:b.oKZQ,])igPM5NL=7Ib>@`=iG>80xe.' );

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
