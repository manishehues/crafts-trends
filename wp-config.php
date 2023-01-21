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
define( 'DB_NAME', 'crafts' );

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
define( 'AUTH_KEY',         '5EIYq5+T840#e5^s8ZzB-[_LxMKjytG>/fFD|Yk}$a;UWoyF-P.Tm`M$?tB<&3TN' );
define( 'SECURE_AUTH_KEY',  '5hibe3K^{wRS2hqjG6;Aqd#!W #Zw%`M]c-;J:sF!u{0D=W{mhcJiA`68gTn;4v/' );
define( 'LOGGED_IN_KEY',    'HBJi4/f@~U(x^ChbKqUZrQ5:y?0wK_A$d=)O<]ksCO(Z]-y$V6AglreuUxYW_,Iw' );
define( 'NONCE_KEY',        'h%gT0fTj<S%j `PF+^2Zv]0=yQ{i@u)!QT|]j*R92NCNa4 PSOtxCZ@#3?{Rx@wu' );
define( 'AUTH_SALT',        'eZB/8e65=a0Zr]GfwFbrIs9PjrYU6x)tQS-vZ{y+=nBf)0ijkNtGSV>$%0$=%::z' );
define( 'SECURE_AUTH_SALT', '7gTCqZ6&tnO9g@bxi*EW+7HVa0`%%/`Zv#yY+|N(N}8pZ{G0hg2-aY0^F/KN2cC,' );
define( 'LOGGED_IN_SALT',   'H$D=!e+[gzVkAPO4lCMgYZJB1g?LxVl02nB;QUc1THCS3M!38u)4*i:TV?9at`(W' );
define( 'NONCE_SALT',       's<Gl~W#Ul@l=bQ9J1?zZ^)p^h_&wq#*$!eMf_%kl^LC9-8F|u}}L=qP9(uWT%Z=3' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ct_';

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
define('ALLOW_UNFILTERED_UPLOADS', true);


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
