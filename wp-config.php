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
define( 'DB_NAME', 'lesRatonnes' );

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
define( 'AUTH_KEY',         'a5nW^HH14trGWHP}?[gxOs;ywzA^L[Ll|@6;Qf}gkY4@V%*~E>y&BMXtr,rZLch%' );
define( 'SECURE_AUTH_KEY',  'SS=9Z.VEO6_o|v#bvJ})zb8DvfU[l$ Ly]T96E5kHzPA61?@O`^JEqgi#VAd()HS' );
define( 'LOGGED_IN_KEY',    'EN3!.]]jhT4>&d}i7GV&;A] $`tWA[?c[.(Mq-Gcw}|h9`4X&kVTciGF9,qECut ' );
define( 'NONCE_KEY',        'u3r[skV7G#V{m )FRb]xHqxOsV##QGKfnskNO^~&`e]]r!-;??iqqj,+mXpg~~eO' );
define( 'AUTH_SALT',        ';U-f0dtaC9u_%lEPE5PzU5T]cTDxB+Wmo/_n)jVhN4)  ,H?4>_udZf8h}*a:oUj' );
define( 'SECURE_AUTH_SALT', '0JgSqdHsnCg~0 MdfN&99t[qKQ~,3S$qHx!*c(|Z8]GhU^Aa$a$r0TA72$e5Gvmx' );
define( 'LOGGED_IN_SALT',   ':AJ4f|HQ3p`s~!o-wB^HTnXB)y:^iS[9zD B(4c,E|m^9eX%PJd,(9>TnnH#otlJ' );
define( 'NONCE_SALT',       'QI;7S>(%e`^--!e*OcHFp:,BZ9LkC/Rx-F}(=Q8)~cYzNQenT=#]Jw?|UEQH~$)E' );

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
