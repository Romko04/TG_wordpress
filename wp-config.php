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
define( 'DB_NAME', 'bv506706_target' );

/** Database username */
define( 'DB_USER', 'bv506706_target' );

/** Database password */
define( 'DB_PASSWORD', 'peV48&sY^7' );

/** Database hostname */
define( 'DB_HOST', 'bv506706.mysql.tools' );

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
define( 'AUTH_KEY',         'C4N<X57zmC2:*#c@)1o?[Ig&TJKUzO-l1d#itoAe&},FG4kc9eb|v$gcrdj`.7^g' );
define( 'SECURE_AUTH_KEY',  '0*!OSk9Xmy?9%OE+Wl_d=Dodf/>,ejLLWm^$Zb9CA*=WSpBV+Amtl3|~bV%I7zLA' );
define( 'LOGGED_IN_KEY',    'OiPUoq6AFtlsx7YT!N%+M@^T@RC_uN++U0y{kas^6ptMvnaO%I2TvJEH#u/5OTZJ' );
define( 'NONCE_KEY',        'dser_]:4zro6GWnE@i2}c@omA<Y[;VK;bs25{$bi2K&{k.{{z)Y}@i}0#lF99xE9' );
define( 'AUTH_SALT',        '(_-D/f-f&2IEI LmD>-Mb<J*}NOofwLjXJPSbKaiz{uoIZQFyl/uv5_ofF~+}Jj ' );
define( 'SECURE_AUTH_SALT', ',0b]%^3v2Va;Qa2k p#ZBbWjs~CU}Kw|npbB@ C}7(gVTyu/`9#ib2~k4q1R4g*]' );
define( 'LOGGED_IN_SALT',   '7p+^NpLP*f(ri<Y09?_F/H>zKs^[qL7KKR8~*&Ouc7Gu/6[@3gk.vh&7oo6H~:(`' );
define( 'NONCE_SALT',       'Xz&C_YI@`q[h-Lja#O3v;6NNmOYbs<)dZet9m; U5}8_ lK6<WN1tk3vGe.&]kg}' );

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
