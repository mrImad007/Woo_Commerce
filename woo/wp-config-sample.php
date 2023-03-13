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
define( 'AUTH_KEY',         '!R.WebVLR%rBe+Z%c-*qrg;<Nv FE-Udm7lix:&:t.B;?Z!ZP&m:0gyUr#x7Vh$w' );
define( 'SECURE_AUTH_KEY',  '7Y|k??tN^H;91}RS_Te%49jzMU;L3?CK,-#O8~5{_nrK9q:z%awt:#s?+{{~U$jf' );
define( 'LOGGED_IN_KEY',    'X([a4,;ANU_6)x!CmW%t8N}6J,+bT9[Y3hy)2u9#)@vrTCGft0Xm;=Wi(1<bGKR$' );
define( 'NONCE_KEY',        'r]JGe?,~UC|/6by;%UzE~P@}a+{saQauRZ[?4sId&u7gw+LELi3lx;l<6 2.2Q&4' );
define( 'AUTH_SALT',        '=(1n7vMY8(nlte4O^%J_m;Wjdjb{Lg@d|2kzOIv{D Z_T(Jd+[M_`ynX-E_!g;/=' );
define( 'SECURE_AUTH_SALT', 'MY-j))*msl<k*g_U(;_f)[ci3>/UBDs/n/t]R7Y.W%M=2%5:vvy`mOesOx1;;ogi' );
define( 'LOGGED_IN_SALT',   '@uPK)nyLx[)l9MKh}_]u,L9)h4!?]T=sbFy71iP`;x)Soig5z?O!u6wPtN|Zjecq' );
define( 'NONCE_SALT',       '{c<o$R~%FZ_`22!]DawW}q5~,?|XzM5Hl?o)/(kiNdgXL+-.u$Uokt6 hP&-2*jQ' );

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
