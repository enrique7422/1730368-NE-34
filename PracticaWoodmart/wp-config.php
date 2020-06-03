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
define( 'AUTH_KEY',         '{[}D^y4sVbm-L/]&]M/;6<CQYd8nqCj3GMGfVsu5RPfFz87DBD:rYwr>![XVT]m]' );
define( 'SECURE_AUTH_KEY',  'OfSQ0`*Bx2Wwy&6f?bvd4(~6Vu,9A<${}hOjhwO3Oq-R!;Cqq[{E>r2MFwDxnRL(' );
define( 'LOGGED_IN_KEY',    'jflc GD3cW?A~8vM@(E]U(Am`:pj3>%xNSE#Kp fpO{|j{IFExmQ}1@<e{z,Qh^/' );
define( 'NONCE_KEY',        'a+ @GNS,;@R%r^>APHonDw7HutnO4nqBu2eB972@Z?.8`>DQLAE$1dCVW7|;LPHg' );
define( 'AUTH_SALT',        't*=t67M6}&<!auzsP 9Z:B#1sIG7Snn{g5AWkq*lq@bShnJu&L0WI9~F<Ro5zupi' );
define( 'SECURE_AUTH_SALT', 'VV5K#-=*tK~>U15nEt~ndX4xV~5l/~_v(KkeIm^~3a:)[s/J3I|?,er@utl4+T#}' );
define( 'LOGGED_IN_SALT',   'dHhAM`vG-!DkbHl]&1gDd+82GCP%WS5`LdJwASH{[D5Yt#X^((l}+fUI,LV0fx(>' );
define( 'NONCE_SALT',       '&8mh~K!)7JH2PC47/PP*VP;u#gV2`/%FrY&rZSN6oLyH$anPZ:YjN*VtubS`}QuA' );

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
