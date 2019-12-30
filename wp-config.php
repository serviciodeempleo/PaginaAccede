<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'accede' );

/** MySQL database username */
define( 'DB_USER', 'userpremia' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Un1d4adP33m1a.2019-' );

/** MySQL hostname */
define( 'DB_HOST', '10.140.0.30' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'VxVDh>@LW/,fw!z{rn4XtV!~&PI~~_ZUhCY8<?|dgS&DT7^2BW&ka_U0?jhbar*+' );
define( 'SECURE_AUTH_KEY',  'C?[IHp-2XTdb|xFRlbMQFJ}5Go;LV=M39[</1&}cth-mcnVxjySDhzev277nNj!Q' );
define( 'LOGGED_IN_KEY',    'nxShLY],e[u!z/wij,tpQTCGX;[et%fO)e-7mkYc(0Zva]}x2e3A$4RELi0XmsLF' );
define( 'NONCE_KEY',        ',UNnZK+pnHAD[EyNQK.a<a/lRV{s/q+8]K|0sy[SJ4%c1.Z5G[ D8v3^/pz!u*$l' );
define( 'AUTH_SALT',        '<%vBu8M,x`? [LP^V)5eJhp[?kkK4rV_R|s/Yf] jS]&,;RW.|z|-b=qU_955d3e' );
define( 'SECURE_AUTH_SALT', 'RXdrk(uLY/r%Nw9wB&EHH<=#IckU{7pCZZQN@Iyv0rIo:xDNq<h#Ds$J(:6YUXC^' );
define( 'LOGGED_IN_SALT',   'F#J(SUH%0*(Z!++1!.VZaN.0*i*_$KU#UB~]:;c|COU5@|?$^m:5Nsf?q)TD(Qn+' );
define( 'NONCE_SALT',       'Nfhc<kZb-fK>}3kV[%ip}GbvEF#i;:)72:rwsQ_&BGN-~b;P|d^%I&^9eNBvk&t?' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
