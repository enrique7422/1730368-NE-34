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
define( 'AUTH_KEY',         'G>D4q&&.+(JB}(5`x93^CqY/j%JL[-hS9qdG@=X(;cvc^H^}w 0GR#2oj@fR*4yN' );
define( 'SECURE_AUTH_KEY',  '[q|//QK!dP~1?acr>Jl1S[}>M8F_ittX.Zf27 7-Iz4Go.cy5KA/.L)hj}8}?e,k' );
define( 'LOGGED_IN_KEY',    'q7oC!1AsnAfIY{0|v!P33gNVR1T!cA}34/8|vkNHE$6++lUG;cxD!QDi0lX##iXZ' );
define( 'NONCE_KEY',        'V&6NIRTq`LaM~c&RxtAQC68N2t:O5DMy*l7`oj^[*(`dRvQTW|oo`xx}i{3Jce2#' );
define( 'AUTH_SALT',        'nU>`eH_rurl`B~t6<C SN%s Bh(:Z$:khmLln;P*TQez#i3@.D|=t&2vZ)^$e^px' );
define( 'SECURE_AUTH_SALT', ')(_1|~W}(GpY.1f|hDj(,7hFc(iDqBg]j]CEe,$`>nR^1/;8*7#Yv;CYF04qSJR.' );
define( 'LOGGED_IN_SALT',   'Q{S&!GVIJEN9U{`q6qS>a]:%`y,=26P?VKSlU%_Y71y1O(0@bMMM2Xg<BKj.f@.?' );
define( 'NONCE_SALT',       'rd;HgnG-=lu)c!li:/mFftj-n}x:!Zi1=v_u<{1`[;Io3[M+hcM)A#>3_DsK`mH|' );

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
