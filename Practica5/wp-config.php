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
define( 'DB_NAME', 'practica5' );

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
define( 'AUTH_KEY',         'mKQKgKrWI94O$qe&NOA/OEY<,6V[nszbQi,E1r6T7E~Jqym|MMJv$rCgN_//#<(t' );
define( 'SECURE_AUTH_KEY',  '0.zF&`pBR+;]/j:t<&(,T>*qtwcMGxe^$ARTK r;;:B_mK6G+/d|=HV}ZQ>O;5==' );
define( 'LOGGED_IN_KEY',    '>^iA%*Uu .>28he5EeV@<3:=!|z_sD|!GI,4jP%@|O `9hltT},sl#+3zUxRy_hA' );
define( 'NONCE_KEY',        'a_WtagHa)T,J5snzP |2^7##7Ds.fDh&,.-,,;y=g6X-#wr{0Q am~N:|] r;Fs<' );
define( 'AUTH_SALT',        'tmDLc^n{Q{WY>#.K6f!u3nXMBBY)Ge~ih1~H<`Qfc8oL_pM<lytgL,Q-4}7Wo/;u' );
define( 'SECURE_AUTH_SALT', '`c>@sY[;:Ll2}LW39*0=]y5),%N:Bi`(}Oz{OdP~u9dj``5Gv4;<Xs`f B^CyFwr' );
define( 'LOGGED_IN_SALT',   ')G-&lha4&k%Ex{zsg-_ICIn$LbovmpC>0sg7p$fB,&#~$u1>FUp!&xU*2&QY7X2/' );
define( 'NONCE_SALT',       'R%img_q9]:ICLp)e];4MidasrDcF8HmG4+pMMh^X8,l[~B|HF#90:5CyM(J~lzOX' );

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
