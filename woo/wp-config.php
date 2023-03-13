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
define( 'DB_NAME', 'wpE-comm' );

define('FS_METHOD', 'direct');

/** Database username */
define( 'DB_USER', 'imad' );

/** Database password */
define( 'DB_PASSWORD', 'halimabouroud4316' );

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
define( 'AUTH_KEY',         '2!3jAznV6}-aP42iGYzsFQgF<P)ax1~3.kv%zr#1?qmnZD^g<_Hm[2CEI@~uw+~-' );
define( 'SECURE_AUTH_KEY',  '+wri:x5Q&$/3?}>h<~7AVDMi,p,i3AlW3`K>BzgMK?MBcFsdgZ5ew6EcR-rotcA]' );
define( 'LOGGED_IN_KEY',    'djDmKf+~A+$RnZQIBD^kL#4223jd(N?{A_v.gSw{eT5UbUJ[2SDn-_r&Agx^cDPE' );
define( 'NONCE_KEY',        'n:@,nh/u,gq<8%K@$k1BHX&<(0Yx_ob]{mpkR,:iBRl-.QIv(3WVyw< }8q.yMaA' );
define( 'AUTH_SALT',        's7Hq`$]$ d[?kXW1b%27fQF#.%@n=J:>FVl`?-=C @O4Qy&d&)>av$Xj>KEf.;h;' );
define( 'SECURE_AUTH_SALT', 'nJf11jK)(5W#sSPg5_Y}V7,zkiPa2*lt^7Kt#tV8^4{E|#n|{cV[DBGJf0t[#<D.' );
define( 'LOGGED_IN_SALT',   '.RNjj*jNO-!H7i+%<q:IX|T+L9ZAVSLKpUB._axEW#iH>I8R!`T#T9x?.inIIXKW' );
define( 'NONCE_SALT',       'DTG/<,tm@o]s@Q:>3M~}M]L*aH7]H@|_v#TYN!?rBnRxN-~br;Sng<_uWp@M2d@j' );

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
