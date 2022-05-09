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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wwcommerce' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'U#n?bxQwYM-?T60]m^KY]6a]1 SxoY<-o:jUd-G2?}(&uVw%lY UiAZEtysuMQ(?' );
define( 'SECURE_AUTH_KEY',  '!WP9MC/z#vR&$T^?6&A<XO_.^o&aaxi;2!Jh[,miej]Wt~/o5AaF<_.9xkaq0ILg' );
define( 'LOGGED_IN_KEY',    ';B=Ugk=1b?O~(x-e.UHen&#*lK:f-sQ*|~/3(-a@SfH|l.J[O/Q(a?0r6iCnEnr[' );
define( 'NONCE_KEY',        ')f/4uv9h7ZT6f0md33m+5@{mNs4B|6KwLs%gWYrM:i)k2J(<n]/.EdrL&/iG HO3' );
define( 'AUTH_SALT',        ':eeip-2hd?etXv8//x9[aaj>+RCS39lEmalGru>E7Nw/5c<*3Qx!tOJs_1C Ecm2' );
define( 'SECURE_AUTH_SALT', 'A -onStgl]Wn|(XO@*vr}XWvxh]DM{;f6[.QTN/~uD4l]~P7H<hBMxnXX9~b,0b{' );
define( 'LOGGED_IN_SALT',   'kGN[b-0KN$:S0L[3U!=aNZFcsrjCO]n{PPNiFlrzyhS1Yd+Wd4#d[k3$Jdk]Hpe-' );
define( 'NONCE_SALT',       'zb^wd{Fm7h//EN+U_l,|6jVOs XOq|,1=E3X94Otam,yw9<ewe5@`^>5?~gH&::^' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
