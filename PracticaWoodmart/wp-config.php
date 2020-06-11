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
define( 'DB_NAME', 'woodmart' );

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
define( 'AUTH_KEY',         'D=oiD^G]V+X[:7hwH=syRo/V{lQH.n3~.7_kR:C#T(w`E7)$2`l/sy%LftyX:_O9' );
define( 'SECURE_AUTH_KEY',  'V9H4waU1&h5lSk(Sw^%e>t58#gjl30l=Iyh-D)jDwB.~el&^agr^l/Vo -o<QfP*' );
define( 'LOGGED_IN_KEY',    '-Df]rq+gy4U`Kl&v3R.Z=lJhr-/d0p~abM`MR.)U+XmD`B#5ea95<V|:e>MBKts&' );
define( 'NONCE_KEY',        'xMykUqG|0<0,Q|0hm/9vMjh>} KJs?xfQT?:Bk)G4GZZ7LIrra/(>xTxVI5}fkc-' );
define( 'AUTH_SALT',        '%RIJ/qBVKB!d1eT2o6+*XlUlrLi nSk^S~6^u[c7yr}p@y7XxD~u?&mw*@)t;%gV' );
define( 'SECURE_AUTH_SALT', 'Y2Um/1(]T hv2JP!|3m?crV! } aY!+NeRtT4qsw2z<CQ9k|0qWX1*^*vHa.(<Nr' );
define( 'LOGGED_IN_SALT',   'nc@A=RMaiPCBQgvbSxn3f,e~NJF? /!%<<g+f-?_w=8a67#Yf9qk]4K(d:o=,by2' );
define( 'NONCE_SALT',       'msL}&$.@#idy9F/EOOY*I,byG-yLw=d(h|.<|&T4$ARl+8.(8OTmsyG#c2/t&:+|' );

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
