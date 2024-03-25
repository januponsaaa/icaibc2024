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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-icaibc' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'u}6.DZ) S3P_F+~.Y[fJQrj5J3WsK$sc?7nr43/gs0%b^%W&o^_~_nAJ>}Z~fddO' );
define( 'SECURE_AUTH_KEY',  'm?kZv$f WKDJ:EoD@U]1+e-}sIX,,ZDs*9/*re:@awHo@tAe)_v`lXt=nx7IX<9?' );
define( 'LOGGED_IN_KEY',    '#*b VdX4Q`|=D$:+#G(G@T~tTM&WZV[``>(j6o$EuYo+!>$I[#-fJIIr%dc{|v_f' );
define( 'NONCE_KEY',        'xKIN#I! [Zj1ln*G29$P}Bi}gmR?BG/)tv%u`-V~)L&jG(k#}j1<Ky9snjWo5IS$' );
define( 'AUTH_SALT',        '{R5hAOqQT}b]7h=~>Pz#C.3qD>H~3$z7is^0@-LWVd&L^XG)7k`B T5q]bs(^6kW' );
define( 'SECURE_AUTH_SALT', 'OD,/$X^O*qsA%L`wmz~F)Xa$,LV@mNMz5^f#(D;Y<9F$e$!VD;5L@y[WM5_qrmMU' );
define( 'LOGGED_IN_SALT',   '<:^Cf`a1 ?/#w)~^k2iGt%T5W/wjFU`BDc/+t^8eck]:MAenj8Xg_fU[MNwO87c6' );
define( 'NONCE_SALT',       'KI3`p#kyQ,7[4BCfosrMvT 2:D-O.O=s8Flc^a!:j3UNMm9NPg-Nq^GVJ%Y`m.sb' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
