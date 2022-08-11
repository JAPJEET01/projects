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
define( 'AUTH_KEY',         '{-0mF#(=!8~V?Th~&}PFHuawpw_i+M$OQ!HA1v0i;2a4e?O@::qEOky[/FQR{/ff' );
define( 'SECURE_AUTH_KEY',  'R(L4oHMpqST#))GFjk|yR%Zqh+^1F3DTH^z`~3[;K`=HVD&}kT=b)EjBLR(4VBv_' );
define( 'LOGGED_IN_KEY',    '>qL8C0}QEr^ef;Do7$]ls0^$&z]i-A<38)>9o<EHATJ#rbC{8eJ2-!}OI:EH$z-3' );
define( 'NONCE_KEY',        'J%mmY/Ds#.`)%YE)_*W:HJ@4=~t_x>aS`Dr{~zDWGzK^Ci]iWM[0#KDDfZFIu+9(' );
define( 'AUTH_SALT',        ':38yn6]{px$goVe#>Pqd^n>>z8^`2F+_p+R0CF6YD0Q>xo^U[!%gjo]H]T&|9LM{' );
define( 'SECURE_AUTH_SALT', 'zD9HtY4T :w`Hb[j.yNYU7tr+X$bJ|YWUZ@b=Rw;~s~Kgyl26/b]TlV8ft.N<yGc' );
define( 'LOGGED_IN_SALT',   'E Xp.cVG[=L4yQXJC7|`}v^C9<u YOe(:WB4 [91~SP<lqX@D*hg@t;ec5=~]`h6' );
define( 'NONCE_SALT',       'nbp,N?e86}rTTL+E@B^]^0m_f9x8IHM}~$i&hws}D<IsZV(PW5Xlju-|H,wKMyT|' );

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
