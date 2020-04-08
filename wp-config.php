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
define( 'DB_NAME', 'projektas' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mysql' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'mb7$>2uofOnDcTD`#H%17-h)@7E%aiFDs*Qy+}8f, hogaWAJ$!=b:6i/#4,+cfH' );
define( 'SECURE_AUTH_KEY',  'z@+_UJd1yo~aQ;6+fTY+ 4RJ`Um.>b92`pH*P^w<As4biuHtXRJ@v`TF4+PQd;S-' );
define( 'LOGGED_IN_KEY',    'T_E,6<[9}D^AEILh&00Kz3>7r_bj0I%BJbljkj$N<~ge4T<:Wx:;h:Lrem5I5[&J' );
define( 'NONCE_KEY',        ';&A.$qWN)_^u)pDhFj`ZK!U|0:%5pxx<%0.OSLo^QATz+mr+q&8Gfr8py8.J6a,-' );
define( 'AUTH_SALT',        '}fF:E[$ VsP9:?T9S*czDFZl&:6W9@KP5v0WK73+};KV12u<]]a}Wtb;Upi*Xh-!' );
define( 'SECURE_AUTH_SALT', '6 v*#]Ib,rMDGE(SzTP?V65I2}u%<WGM~g^N<]3BD 1X4ah$Y.HJB2yXi7%(YlA:' );
define( 'LOGGED_IN_SALT',   '>&<:121U7wDqHa,yG8&3xJ#kaq:a?&x:]0! o-vusEjH2*(Ty03IcmG-o%gMT`!2' );
define( 'NONCE_SALT',       'UattBeh1-#G`Y=jA*<B:?d~VB&6fX*_HHr_PB:7brv,}M_iSQkKeu3KN9~p:&M2H' );

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
