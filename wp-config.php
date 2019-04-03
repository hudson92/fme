<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'fme_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '.WN#67^x1:nYD9yWj3b5ALviXc,&g4ya7JdWAKDz!`J.~^p(*~~}%w|J.,R[Z8S]' );
define( 'SECURE_AUTH_KEY',  'O+6 2xl6qrX3|b#[46pSrLiZ|=/P~nWZ(D1o5H`h^dU5zUoqlZB{AJ;BMch<XH+[' );
define( 'LOGGED_IN_KEY',    '%I ZZ|XiYf @2?4A+[$c2y]En6-tlIJGjQZ$>c7RWxQ*!6cU;f-5:M`vHWGwAYuK' );
define( 'NONCE_KEY',        'T,1c_9h8~^cD(qfT$zR!0#|i!dY<cn|S<6{m[HhpvPy8Y5=Dq-van#)n*H64R17f' );
define( 'AUTH_SALT',        'O[yr()fIwj.:z!:eRy1_k ghQ}v=WQ-isH3d|v@RgS[qxvX[/NR#i_AwivVCzBI+' );
define( 'SECURE_AUTH_SALT', '/i.50RoBBEUsu|bH7^gb/E~K]n(4?S*AMCf>} IQV}&PFFCHm:Z&{4!,V-8F(&78' );
define( 'LOGGED_IN_SALT',   'ty#u$IpJQTY?8E Tb;RlZ1GKUPjWG3]M;o8D:RnncN<dg7LY4M.H=A!BPtT%6}E#' );
define( 'NONCE_SALT',       'CM1HdF#qEwb5kK,^jS2B5iGkn}ez6DH[mfd/y7rcX(dbhikc%^k4.]jjga1^CBOt' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
