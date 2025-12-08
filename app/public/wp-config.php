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
define( 'AUTH_KEY',          '8cznTuBkob#-auOw6>},9dh&!W=!p}5cPL]=qv!<z)XgybVQm:)wO *!GM6e nGR' );
define( 'SECURE_AUTH_KEY',   'h4U)>X($N%5g;C[;rt96XTpR[xF4<ahi>*eX]Ahb:Q=/~4dhY!q7Os)_ra*Pj K8' );
define( 'LOGGED_IN_KEY',     'XD-yRRr_L)A8G<$J#kpD^EE-ZP<>^H~}m+?OX&;?Wzt.?1O9.>nCe?_ 9E(iMnQ%' );
define( 'NONCE_KEY',         'pzo4m&&ykt%o{0_<nl0[H.FMq?ixbVXk7a%QiiDL-ATn*Zq?v-Af|nWDPtDGFJD!' );
define( 'AUTH_SALT',         'rQ9:wk.mzT}R?|< $9QV3J|He=+Aww VGgz;!DjD,gtOp&~Yk&8ZJaw[mOuXGYl{' );
define( 'SECURE_AUTH_SALT',  '`y(q9`W~Hq.h__z*3u>ay%vg!2|@m*N)q9wke&(s8B gmcx/?!~+`%]#G=O}{`**' );
define( 'LOGGED_IN_SALT',    'ywncd]Jg5!5W10NpC^,d5A[#g/Y7@YeP{-L/|*M 57<pj;E^6-QUgvd6Yd;qGNmT' );
define( 'NONCE_SALT',        '(,>q%kPHb%H<6iB/R0E)~Z]{q<nz]XT^O{R+PhlK 6s8k $8+)p}.,j>/S@5C73i' );
define( 'WP_CACHE_KEY_SALT', 'e$F21VFn0y+LCV7M!j BdE74omVB`xyOrFGS=_-}22mf@FVpKYR/Al%E-X|ieKI%' );


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
