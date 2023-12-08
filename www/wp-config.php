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
define( 'DB_NAME', "wordpress" );

/** Database username */
define( 'DB_USER', "wp_user" );

/** Database password */
define( 'DB_PASSWORD', "3TK0zyk9K8aDU06iSgmNiPIkJPT" );

/** Database hostname */
define( 'DB_HOST', "mariadb" );

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
define( 'AUTH_KEY',         '3,s}FfO3;rs_l^[~r>XN2a JJOz%?,}x/+Yno]isSi($ j}|=dkV42C+#gzD9Uj)' );
define( 'SECURE_AUTH_KEY',  ';tnaX]L=nJ6bWLB.Fs+=RfvG7yf{cKAFq:l|{wAqCP4LE};AA]Yn$,]Tc9I!/iqU' );
define( 'LOGGED_IN_KEY',    '/o(!9 (w}]@ooBTr%^3;@tSD|(nO>:QyG5C/kixW>mthqx;w10?3M7-(}`[iHR#z' );
define( 'NONCE_KEY',        '-_|s7^.TvO@PT[wo<{[F+H]wYUz.L6<L`.kDZudVefB>[+BstE$d2YsCB]wS|hIa' );
define( 'AUTH_SALT',        '6%P<bx}c!cf8lctT.^aR]Q5fJXdi0AHM_?~VYx$to=L!l067B9ABoi[[y?/WF+J^' );
define( 'SECURE_AUTH_SALT', 'f2Sa(#,pUQaI_Ap-waV)I#m_RGVAmXj|/LYJ[LZ*])%bUO~46=3Foei9ESY./Az%' );
define( 'LOGGED_IN_SALT',   'S|,Ts)Ji_[e+`$Nk-mVIV9]{V;3)B>Ms niKch@eMWy;@|!De(I-Af}7i/eY9Y@V' );
define( 'NONCE_SALT',       'a.,qEn5=[Fm$X B~9d~&fx,[y<#Tnc0(wjdFg6NVFjcx5]3&YOCy#M*HCdfY`y$C' );

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
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
