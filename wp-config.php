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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'W8^@T(df8 Jy7uKcCy)#**&Hh+&D$/?2ov[^+9E#~ nYn`bxb.zzN*vupX<>Kztw' );
define( 'SECURE_AUTH_KEY',  'C$tAl5`Y8RX4VR^51^760S,Hr7UX@vS-m!%j^h==ey?[9/-!CAJ3=y7}8A)&>Zu^' );
define( 'LOGGED_IN_KEY',    '>ZpIO+/z2M6-flldK)X,269QG3~]] teM^bu2CxNxAZXCiWB2s H(+YG}Jg#+M5=' );
define( 'NONCE_KEY',        'Z$k`kxA__x7Yn:yybLK#hEgZS#hX#X.VToM0DK{al~Y<2$k?Y&-`9Umx^hb6/Xu ' );
define( 'AUTH_SALT',        'DT,#W$lFS]ua`+0`GP}}T)Y1Woa1w58DLb10(2?hfGKL<V0{oBaxI%d)Y{dL$I+m' );
define( 'SECURE_AUTH_SALT', 's<EoDoVXG>i`Si!L`4InaHQ?3N]}jSezLbc;{(^&F#_s+wbS7g?H==b%i-PEnZEY' );
define( 'LOGGED_IN_SALT',   '$+_ACU%-(^ja#Us9YPp)5XAop-j{]&j%`;}- 7./)#x5R&_-}vDDZz#BX}fCxl0;' );
define( 'NONCE_SALT',       '/mM`Mct6k@Iz=:567$@vZF<b.g9lrC^|&RM]umY1([`SCLjuMK%I#t2:~:wUuKM4' );

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
