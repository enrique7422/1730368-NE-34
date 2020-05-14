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
define( 'AUTH_KEY',         'n%ZHD3=i|#L]CV!t]Ra ,v8+(B^1vjxvy/A76_H/ltobo%mRQo%MU=K?@W6hsaJt' );
define( 'SECURE_AUTH_KEY',  'J:Cp`21Suc}VF`4,qHW2uyF=62kG=H3*?q,:9=e@uP>J3d,wn2>oa{`o^i96~#e:' );
define( 'LOGGED_IN_KEY',    '_S&]9Xwi(3g>jKvs+*=CtP&770<R0FJ^BJQJ1RFneD[7?)o,Lj2U5{yEH#MiUtUz' );
define( 'NONCE_KEY',        'B~(Oslf{Jug)RuBsfMVhh{)4%l9_vfbq}G6+=K;LV320Fno%QDy/?M15D$a1hNRh' );
define( 'AUTH_SALT',        'Jn]yPond},Z9tk_|Q9m2(eswF,HtQ&LA59v~4HWVGkVMX#s>/Tj_sHI3#*rh2@`w' );
define( 'SECURE_AUTH_SALT', ' YnG fp(w&B)Zg4Oeox{t11!/n7Z4ig2uaXL^?injE/%e+b7&vZ6x}socjI:w?[E' );
define( 'LOGGED_IN_SALT',   '}(Az=K.W*tN2d${~)jPPhG~?sO=.q5|h.j`^qN2j.EedK_Hekgy,m#T9z%zMq`~k' );
define( 'NONCE_SALT',       '*Vk5ip;cj* ]7_{~J=?`?jaC(w1JEB-`@}:e#UvR4(@}EA znYoP$QFu+X%d,,ep' );

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
