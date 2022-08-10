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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         'B;[ouCK{5HL? g3sFuY h#[>+3d[C.fQ|!L!u& 8{uUG|L 1DK?%9H2NiW_@ni[l' );
define( 'SECURE_AUTH_KEY',  '8W_:oUasRm~nYG:&7D5?/uk$JYA%(j:.&&De#3RCl-gpUFc17>v1ej%7Y$DN&iv(' );
define( 'LOGGED_IN_KEY',    '*vXpYia4LEgnH%I H>K$79K1?JVRR_Q`YG;Ma(8A1vO&c]<cTy0>K8dK`N[4Zwhm' );
define( 'NONCE_KEY',        'DI^zU`ESI7aoBb7%KS<C~((02LrR)C[TxCdrM@0L(Y5sUA_Tf;Z9!8q@cJ!JW>1p' );
define( 'AUTH_SALT',        'RVOh&2bz!jjV(fR/sAfzjke+=4i&ER#kB%wCHU%-?QMb8`De6dHM;*x3ztS?T>BX' );
define( 'SECURE_AUTH_SALT', 'UkylD:*L#M$~C.#TdKhQ9pzSlXYBF@J0-nUaLMSv;pPpoz8Z <u;VZoE^/F#?=yZ' );
define( 'LOGGED_IN_SALT',   'a?y=&HOA2),jb$r~PTe7oDoh<8t3$:e^tLC1YXeR/RA~t3Fv<tnw=:pxMzL)]6,*' );
define( 'NONCE_SALT',       '54#]op3%FS5jw37 kCM; yo$45/tG(US%gtb+8Qt6YUX;/*i qBw=F<O1/rUFG@Y' );

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
