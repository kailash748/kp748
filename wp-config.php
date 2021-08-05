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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kp748_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'K590123p' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'ZM$WC>0u9B{5JY!`YU@kG#Jj/%%6{8:wFr<DQ.N(gU4GY0jx-&w40rxK&z(Pa+>$' );
define( 'SECURE_AUTH_KEY',  'dBmJn#rub<,I<0A98EIPe<Z^F$WXGwT#6-*-c_1-wdm_%z,<VX[@:=b`-q3K`(L=' );
define( 'LOGGED_IN_KEY',    'MZl=}I4IBsVT&$ ~wsbsU&s@%m9rYqvi~81oz&e;0EI+%~k>c^uaKtZg=WGHQy[m' );
define( 'NONCE_KEY',        'Aak}+~PA4CgOcsO3^p<c{Y72NzVfA5qfd2h3O{|U&V`5-#zX;(iCpzcjo%{#S7=U' );
define( 'AUTH_SALT',        '-F##(72.,moKq#OO_U(@E_l+dU8r6MLG2AC{pBvp6&n >j;QL([BYpGh=,%|p [R' );
define( 'SECURE_AUTH_SALT', ')<w$3^L9]ps[[63OE*>6xt99ngPx<_VluHW9>OUhD>hK8C <;%]QqDgBNKHye2Zc' );
define( 'LOGGED_IN_SALT',   'WXA[m&mZHQ2Q[W=hE&LF.]`#+zJ7X 9.V{}0Y@(=^mW&&8K6O#:g7|GB6]gE{%Vk' );
define( 'NONCE_SALT',       'RCZtrA E[)- RVWh@j]HnjEa8H*WDbA!)7z@#angO :~KX4XK-s+G!-[l<(LzPvB' );

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
