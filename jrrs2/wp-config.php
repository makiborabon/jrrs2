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
define( 'DB_NAME', 'u583204000_Bv6k2' );

/** Database username */
define( 'DB_USER', 'u583204000_YzDPs' );

/** Database password */
define( 'DB_PASSWORD', '3x1N23oMsJ' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',          '2ipt}h}^^D]Tt9[]bGFK78}j]Bt(m+S@m|k;NJ;tF55=<X&r:ka*kE.ei_F`QSSB' );
define( 'SECURE_AUTH_KEY',   '/=&i~6Jufj:nBeq?`1_o12hgh>SC[IJ0Gmz0+vdkFt_P9j_8(##}pe*-!`XgQo.x' );
define( 'LOGGED_IN_KEY',     '=u`F4igzEq}!6*SbhE0XZ=^V%2s5$t1C?m@(k|>+;I+]?!.>hv?:VyJ^FYL W(h6' );
define( 'NONCE_KEY',         'Ft[>CgM&:z7lMc*ab4PJn1SYf>tvMw0qz(P1_=0Yqn|C3lCygULjZSK~En|?1vO2' );
define( 'AUTH_SALT',         'ipsT{,!(*8=K<7+heb-^RTy;gg?&,q,V)VafTC;~UT{_vI3Q73#[xo==a&F =uot' );
define( 'SECURE_AUTH_SALT',  'AaEo`%#!e3CJ/i+u]z9z,Xu<>nKvh:aEs/Y#?3ELYneO;tjJ:Iz$G$==pV:.Dy5Z' );
define( 'LOGGED_IN_SALT',    'P-=lf3lQ0|3w{~-7JvWS,BSwJaoNk:lODU/$mu/BV @@k=EcXi9IVOQ}d%}P<L:a' );
define( 'NONCE_SALT',        '(noljxz|:?~Z+$CI</=a/2e0S YyV2G:Qu^v(n`grbNTGYK#r(+WweT4|92^3V{+' );
define( 'WP_CACHE_KEY_SALT', '#3J2W:a[3Sl1YM_hIpHV<EcE;?(7x{Ornw$D[gx6.~z)G@ /,2Mj[6$a@h<Dtl^J' );


/**#@-*/

/**
 * WordPress database table prefix.
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


/* Add any custom values between this line and the "stop editing" line. */



define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
