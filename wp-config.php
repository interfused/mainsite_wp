<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u305833638_yqAf7' );

/** Database username */
define( 'DB_USER', 'u305833638_spsQz' );

/** Database password */
define( 'DB_PASSWORD', 'VQ8NCw9I2I' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'jQ_93<BmU*vU(T}A @:GQkBDfk6uz*1Amo$5aN D6Cd5pJ:j$NMMzch6?k`N$Qch' );
define( 'SECURE_AUTH_KEY',   '=^q]_`9jGTzo~63EZxz]V6dU$nk3=}l+*]yzrZ5g/>IVm+2,c&Ug~QHy6G[(5d/R' );
define( 'LOGGED_IN_KEY',     ':dX3F]uB+[HrH]^k=VY^_gj;ij!P?ELUT9lSrTXz=?x#B=5!pYj?c$WJ8J2f,1O1' );
define( 'NONCE_KEY',         '9(od_NwkLKA{3p0WF:/&g&[_>{{(dJ9s`/Bfd2/5G~R<>CaTf,.(08y{SN{v^b>]' );
define( 'AUTH_SALT',         'o{fdZ((`^Jd[l7~CC,Tp-,@WD$Bsuqx_=oA4L 0[?qbwf{`xtW]80YBa-l({[tb_' );
define( 'SECURE_AUTH_SALT',  'f`uB8%eJu4<|uQ(v2+fg6],$BNh^4Ev/vO(8$I-Rk=sL?e<(+a?5H=+$PQ8nFG]3' );
define( 'LOGGED_IN_SALT',    '.r}|50Dh]qS$7N+l$V|S6}V_VAG6z4tc1L]I#NU_Z6a!94t=ppqervmBuBQ,`F/S' );
define( 'NONCE_SALT',        '.8Tc#fqgh[Fl,Jg#aWYF>Sl:Jx!|JY839_]_]V.8?:f}d?J~R{SY1{dtAGPe$*D3' );
define( 'WP_CACHE_KEY_SALT', '|[iHu;/4n*Q*?RIY#yeO(wR6<d7L|nHQC//]!_%F{cO*dPT,IQ[OK2$v59]/SV2%' );


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

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '2526ca2b4508dd894106e70ca503bc6b' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
