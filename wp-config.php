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
define( 'DB_NAME', 'amor_vida_db' );

/** Database username */
define( 'DB_USER', 'amor_vida_user' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'F(!:)pSRrKz-6SLk9,/oZN2;Lzuq$`y 3$Bz U11;|rFE0aeBcL^`?v[%E{#)~OY' );
define( 'SECURE_AUTH_KEY',  '6Dc:si9RH8a>BT;UYBEtFz~Za~ILi >#}%PpT /hesv{ab!+mjjnB$6=Ss]:^h+I' );
define( 'LOGGED_IN_KEY',    'Z}O)=@>fY*i:+0$|$$xO<gft)s%e!V6UP[lh>TBO`<Ccp{~sSGffO]zZ4gO7P{Kk' );
define( 'NONCE_KEY',        'H*9:?{2@fef&de1$]Kf5j/YaC.tP%#?!F$[pfB*L#u=0kL?usLB{;nUWm-f,t%%E' );
define( 'AUTH_SALT',        '|Iw?Kxx+f)x`hw:e*<|DwM S13U|L8s0~Bfp`tS%@d*~u2Aaw&zKQ ZL~qY+lIB)' );
define( 'SECURE_AUTH_SALT', 'wV!;i=lvO2y&|LA3(4gY<=r(yG5RdkksBgd|yrDZ<UdD6z8&Tx)E/59C,k!pN3jb' );
define( 'LOGGED_IN_SALT',   'QD}B]pG@4Y@)GMm!j:s*I2G2qL)P$`geDkrean`tL>d!n0JKk,sjZlb/XMOPW;_1' );
define( 'NONCE_SALT',       'kfd8:Vps/V{E+5(O_WLY&+)=GJ4%s8-c35?|3wXQGb}a:ja=0|p2^d8V!=6A19j3' );

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
