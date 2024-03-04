<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'tS3`U<b1I+hv=<~SNN5P>T5L)kBFJd;/!`%Jo=lB53J[zLL3Rdd}0.!OsRL7*J>h' );
define( 'SECURE_AUTH_KEY',   'h0N5y<4yIo4MnHsG!:(CF!,aa?`+M4<G)xz:AA]D]o;ee77lsISp5tdFB-02Y,nX' );
define( 'LOGGED_IN_KEY',     'E+da6}!5RZ/M.DotS[)6;Q NzxWwcu|7tC/8.x.thI:TgLmT)]bCwk3-ZE+4z4:t' );
define( 'NONCE_KEY',         '+yu1.2:qfqK5 k8Dr!$rj2`C}2Kn&I_TXU_<AuEt+nxF_O-OGka.}zgie]j1FK R' );
define( 'AUTH_SALT',         'p_aJ24)rqcw7V}LyVpS] YKKGW<oV8~D]?rL3Seo(e@O{0&q?vW^=DS-w`9lpAa8' );
define( 'SECURE_AUTH_SALT',  '>&g4tyObnrD(YH3AeJhd-0}:bi|VMJdw|mdL`X%G.Z{1Lnan&pVHcM-neVj4*&El' );
define( 'LOGGED_IN_SALT',    '`c!zCL~^&I{Sgft+2|-.zx,p >F!E^;43L-[U?W~/?jV3t[OS]<;gw{6iAZTa@8w' );
define( 'NONCE_SALT',        'g}ko),DrjG^d86(b}0dikXbK&r0h$TdyE{@vf#[<?lAjf&]u$r!RYXOL+1l++mSZ' );
define( 'WP_CACHE_KEY_SALT', 'PR8?j D#j/XjfnoFgt2XL!/]pbJ.$[{ qslj{@$Th3IAc$ZZ&<!eQbXc3AApzx0g' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
