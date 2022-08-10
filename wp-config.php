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
define( 'DB_NAME', 'new_db' );

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
define( 'AUTH_KEY',         'lzZUE1OL @J-upyJTs!So5y5j!:_2_B=;Lno59)<-Tc-6cAOz$]uh !bF[I ){>(' );
define( 'SECURE_AUTH_KEY',  'DR79$<#nL-uY^8<wX/>A=p?]z5<j(`s:1mhU6.l$#jXL!]N-.~pV}Mgi_pQqYCu_' );
define( 'LOGGED_IN_KEY',    'x^]Ei0AN+)}qgX1SDg}Xw9Lgcmbt/i&drVgib2rj-KwP)I?md$[V<hZMZ6mY&(zf' );
define( 'NONCE_KEY',        'Vyl#p!of_>U>pO(8gg12M|h&UbR6cc#{mMBz{Q(~D$^N4i~OPptEZejCKDpIN2%7' );
define( 'AUTH_SALT',        'QvK6ZlRaZFf2[?mlcAKE)c1!jUdNu%,Q@<>d,WF&G-U#}n{lrpt*D}*-PLybmL_n' );
define( 'SECURE_AUTH_SALT', '5I{t%h;Q3$FN,vv<21p;zut(lJi3kSe!(ut>Uo2Hd4O1SsZh#Ag,/}&n3;Pv+G=j' );
define( 'LOGGED_IN_SALT',   '[a0%GH/# q7N%DmPlqv?; }yg@_MrS}j@8i,ccc2 !{z*HjW!}=CrN(cUJeZUDx ' );
define( 'NONCE_SALT',       'UH-7]fLe_F-4_=Pt<vf}48]BgWRdnZJzGGzk*h79[v*s+T{Jdo!TOm3%Clq&!_GH' );

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
