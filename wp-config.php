<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpresscdx' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'MySQL-8.0' );

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
define( 'AUTH_KEY',         'VEYO!zQI:<3iZM!kRE|5d+I,(2|Z0oVuh:dpo^e]gVw1v%AT*4_?-.5:!2+<_FUn' );
define( 'SECURE_AUTH_KEY',  '6ZujtMAtw?Y9EIv;6}d]SpemLp;}>8#4U_MJIj=}?kLD;gY=Jhw%$UlpX*zMXv*J' );
define( 'LOGGED_IN_KEY',    'U)Wvo>dH0upZA5R_3E}j~>e<H)?#-sa$A0e]AfUa!S|~MoBOb&FA[F(05=:bfbV&' );
define( 'NONCE_KEY',        'V~kh;7DN^uY+#dEq+mQ:;xk_SB0$0+PK7B00f^i9~gi8j9@S850/jw)P)FJ}}Y/A' );
define( 'AUTH_SALT',        '1UDZ]}#X452$a#z7Jai=Y(BV,by5:_8}<l.QJCS^(My}o3C$a;h^v4_!+&9d@[]Q' );
define( 'SECURE_AUTH_SALT', 'n ,$kE$O.kZG!l4YLV#-()t@p7ik+U~@Vqyv0:.MW]0V4(T6AJUufL$(XWt9x~[!' );
define( 'LOGGED_IN_SALT',   '/KEwtx=hU=q1;?P911z]mr5/qPD5/Oa*TARZwbTPE1}Lu)ztku@#}lzKKJiim9]2' );
define( 'NONCE_SALT',       '&lr,I$g8%3L4RugZ#*o$eLSi4TgOBV8v.o]MKmf?O7-57_m@Ch-c}$|#(Wmgmpja' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpscdx_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
