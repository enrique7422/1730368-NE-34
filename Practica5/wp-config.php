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
define( 'AUTH_KEY',         '1{9=Iu%1<&OcTd}(fcX[mN+V)^]5j2u4Y);ZrHsO]dF7M~[.$QSD:TmlNR%j_5]N' );
define( 'SECURE_AUTH_KEY',  '+Z~3.6HC@L:P,4+}?7Wp%Rq943gu!T/y4iW8JA&%RU]7c6iGeqX|r!c#zfaV/FMi' );
define( 'LOGGED_IN_KEY',    'W<9P<8?<:E@nz6Bw*]A3+`FS@@6PhV!0iM(U B@s{sTS%~}Yo@#/ Mz)~pT%,!z&' );
define( 'NONCE_KEY',        '92sag77CdKRWDulkm[l],+nGqKA3bze@cO6th}]ngcTx,3||-*r*y<V,Mqu9w]%}' );
define( 'AUTH_SALT',        'B`/3-Aa-1.0FUc|;YYD=H]H]=r]Jd2CYm}POI573&$DL`~T^)~D~VU.BHsxH_O7#' );
define( 'SECURE_AUTH_SALT', '$LfuVD/<%,|NjcJkXX(pNFH2[+`ph&uwTE)Y}WLdw*8{Ue%V- QMF;h6/Z~x_+D1' );
define( 'LOGGED_IN_SALT',   '2J@<CL*i*< _+L8;p0f^V@;2`Dm9({:|[fD(3SXV:[xmfttdoc>.[=>*14wkkOcA' );
define( 'NONCE_SALT',       '|24ajO|Tvo9Xr(3$8S>3ab0-9]Wx5j&lZo1~DXqC8utnZ#%!yapKx1pEl&|&k#,)' );

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
