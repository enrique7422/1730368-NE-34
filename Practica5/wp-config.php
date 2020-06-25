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
define( 'AUTH_KEY',         'M!#WxHNOT%MI{LMM?-*L9U?1KdSHop7~?ErX+hky@/??P@0iOwjMwc_#X@|9$QB*' );
define( 'SECURE_AUTH_KEY',  'we)GS|rR4o8]SdaoW~YR#-vgZ(^?Y9r/K8jqlbTInt[PX2Uy+sRu_Jb9+|~ S=!W' );
define( 'LOGGED_IN_KEY',    'Tau=uX <{t}Yi8q{*JM7l+h+~mb[6)Y5Ilx<94CRh1X`Ba62VD`y>rm|{pJyrap%' );
define( 'NONCE_KEY',        '#;BN0!>*S{;^<@sn+phe9TOaAAsu8M#xNC`[!#!UcQHe?,~>%K7-.$1el(mF|G9$' );
define( 'AUTH_SALT',        'o?Fu1Lk TH/c:3_SBmr5ro*9mr>;goA2|)  -f7fD&xi Vuq&|=fhkw,i49@vI o' );
define( 'SECURE_AUTH_SALT', 'lZWQ$*cK:y^f?LWs6^I:uZSdf^Hy>q25mv.Pi)}3X65ran7xc#D.cU=$r6%aGP@H' );
define( 'LOGGED_IN_SALT',   'E#*6,w%Je! ytDtv.9i$ySj7}1K^~{M^Ga$LVu{wz^mvH81m#E2%$D0mu~ s}_/f' );
define( 'NONCE_SALT',       'gjwPoV><Il<{]O1IjG/u/bY(&WAuNB{FFF(JNr1tu,8lf1)F{u<pDq_}g]sg3*N/' );

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
