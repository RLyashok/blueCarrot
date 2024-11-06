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
define( 'FS_METHOD', 'direct' );
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'carrot' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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

define('AUTH_KEY',         '_lH-w{EN70>;UJvWxBuaX-ro3@q-4Y:N@o!YDX%lk0NwYgZo$+#{#~,#/Z/)uOi5');
define('SECURE_AUTH_KEY',  'q/!RFpY2aS)XOMtFls5vKNs9o6;F 1U<rE fB@<m~9hzyu=@_VK:!I04]Qoi>-O|');
define('LOGGED_IN_KEY',    'Mjh0+H-fmPsrVxnyT 1INil)$yivDa}T-9N--,{@sDB0|3$}~Km`EBfr[4-NDmNj');
define('NONCE_KEY',        '3bZX;E#2,g[kE081w3e-)pjk2/KTAsq9);[GgA&U-7l=yy6?TDfjS2e@.IY6 8Bc');
define('AUTH_SALT',        '9Lk)b[T^=f)KH0Wjjs_`aByKdQ=IFA$w+C@)%!jQ/VMrgR#=Nmu=P+F+<gi!ngYS');
define('SECURE_AUTH_SALT', '$FT/Eq{zT4,a?+i$<77A#t-`bYiDpO|`V1kbEj=[q?TKC4V63 jnejA|pSRy4@;<');
define('LOGGED_IN_SALT',   'twUZ+*VRZ<z.gL*P6GR*w>3!e*}M/s[aymY+}!g`6_BU/]H+~=]%p4;:_Sn<->N&');
define('NONCE_SALT',       '| I7W]LdJp=:?|_TKgUmUIkA+U`bokda4n4kK>HXJ|)|&2>MPTI^z@&na=mrl|SA');

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
