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
define( 'DB_NAME', 'jacob' );

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
define( 'AUTH_KEY',         'T-&8YDS{R/;TFEF-}56QJBV_:Zwvcc+@+pn_n0dit04swBX|E}z>^Z*,,D, h8Zf' );
define( 'SECURE_AUTH_KEY',  'pLt;kv*=wy;|]mo)+)?af)MXZWSvo;v[<Z!vkG=>OgSjd,eRPmt^m|Io)-:6Zw9k' );
define( 'LOGGED_IN_KEY',    't,r?M_glPqzc)o/CiJ{et8HY^$d]<AXNT_Q>I{U8^D3:zFkT2%X (YF$1RD==NSN' );
define( 'NONCE_KEY',        'v*9I#=|~W(gi(PZ{Z|q_O;OW>? t$AS5.T?Yv{bbUl<?6GtDe:YX|=(Zgw=.ZzTm' );
define( 'AUTH_SALT',        '`vycQiXfdr*2AIjBuU:HQF&RzaL1s]hrPo_uYnitHvrqesoSte6v?H19!QM/p;G`' );
define( 'SECURE_AUTH_SALT', 'rg#`.aJ!6:wN}QO%*@`/^sZa%9n0z)onk#Y`VnY[Riyd=>rb{|LB9g*8#[T3j~[}' );
define( 'LOGGED_IN_SALT',   '4kpi5HOuM.GB}Ulw=qq6|C=`]Eho0CeR%D}WaI+U.k]|nLT.;&C~J|]S=,u&]y@ ' );
define( 'NONCE_SALT',       'O4Q#h`BIQ#|6<fC;G <B<~*2|xuLPJ}:3X@9xq0i7t&yRj<gfeS<9x}R>^p!0{ a' );

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
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
