<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp07' );

/** Database username */
define( 'DB_USER', 'wp07' );

/** Database password */
define( 'DB_PASSWORD', '7PTFMGE8p4Av' );

/** Database hostname */
define( 'DB_HOST', 'digiproj.sut.ac.th' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '~{L[cF+q66GtVox/OL$#z0;<yn-5/1%FyS(-&3#>6q)8ROyy)0rKawK*Va4qW-+j' );
define( 'SECURE_AUTH_KEY',  'dMFTJ/JPT+;/XS?N/C<V+g;6x/@V;R^A{QiQjPA9Kh`LE;((%~/+2nf(Ndrnt3(}' );
define( 'LOGGED_IN_KEY',    '1(f9wm_bvKX}$I9:MpDk,XKtfg>d2-pgD]wLanNEiJ<v{QIT`$1<pX(WP.6T>6pq' );
define( 'NONCE_KEY',        'J;)d}&8$]}@I{:ZLY!I{5ro@^/U%)VCd-+v)S*hua,j?;jO%A1IZi EZL1Qmt?7m' );
define( 'AUTH_SALT',        '-iW#tdx)jrbsL/COPN;~q9]#a#|tA8* 4dP+rg<p98IKb$:7S8;yLP[<[.P?KP ,' );
define( 'SECURE_AUTH_SALT', 'SrO0a<[OoOzkfT [G.XLAW(a/KSj=`d+Yi6Aj@khH)^>i}d<,woGlwhQO9S{`eME' );
define( 'LOGGED_IN_SALT',   '*VooMp:&,9qlF~%~LT.kp[qKV.5`WJYrYfKsJE6:*zjDj7anR8v&|LU}3RD;yrQ(' );
define( 'NONCE_SALT',       '-Y/nfY,r R,#{|6`w/L)pzJF<rwGPIC]R(]NPlDpV(z#Fz[G|2)fMFuRvl8tOgSa' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
