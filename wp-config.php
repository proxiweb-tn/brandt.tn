<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'brandttn_brandt' );


/** Database username */
define( 'DB_USER', 'brandttn_brandt' );


/** Database password */
define( 'DB_PASSWORD', 'hwleX5Isnfc;' );


/** Database hostname */
define( 'DB_HOST', '102.219.176.39' );


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
define( 'AUTH_KEY',         '7u[nUd;rrI7=J3ZPO6$,u,T|J1ZjR#hH Bi7}$f077q?`[t)OG<y8g:JAciTvJ&]' );

define( 'SECURE_AUTH_KEY',  ',yv#6 !]m+x(2$,UI*H9rYCWMEYWQmOxu7/3Gx]5IRP_>8&sappRu#[tjYLd7?m[' );

define( 'LOGGED_IN_KEY',    'Q?#ojE*{Mk:QNyaQdIRRLy*+JYN*~WQ+rzq#&ec}L7dH/65A@g-2,5.[M*_-n=22' );

define( 'NONCE_KEY',        'H.lbZ-m}=Ow>^tL]FZl,kiH/G~#PQCPwO|^dbMgY}2j5%iA~hro`&gTU^<BuUdBu' );

define( 'AUTH_SALT',        'IRrkr|.2S%8>2rVUdUX6[K7.7opI/siUm|`:9}LPZ4puL(U_N>1~P/Q;juX(}~>N' );

define( 'SECURE_AUTH_SALT', 'q1L-i1r/z5&37$>72%Y}%)SiY]5&R:*hC%!_KmOjTMM ?g2g>!F8z<=n*j~sn4=@' );

define( 'LOGGED_IN_SALT',   'G-yE-,aAzaZR)0N@Yl1rpe!VG64Z|`V@0(;L11@cUXzC)Mxm.<`isBs!K5c*PC_l' );

define( 'NONCE_SALT',       '~Zn!E=A[z/|1Jm](HM]HmNh;8Ek<BA_xot`MW?(YQ-a5e.x}LwpLKJ4nr5UrK[Bp' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'db_brandt';


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
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
