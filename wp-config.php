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
define( 'DB_NAME', 'web' );

/** MySQL database username */
define( 'DB_USER', 'webtek' );

/** MySQL database password */
define( 'DB_PASSWORD', 'webtek' );

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
define( 'AUTH_KEY',         '*:7Kd/kcQ$n3w@x|&9Ofdf44<HeT;$AiK%!vWhLR!8zNlqI_$GwYqOz:>^S1=a]X' );
define( 'SECURE_AUTH_KEY',  'S52ZHTFZ-mHmG{]S}*sL07G o~sb[b?h8J[I/f/0fN)C4&X/-h]Rl(z>usZ1iLeO' );
define( 'LOGGED_IN_KEY',    ')>>hZ/?(HEL<>FHL}vUUclK`?FM|W,7tsm` U*j?,224Ko/{NU{fNk3)PS<9>=*4' );
define( 'NONCE_KEY',        'Qu4IRnIBXiIj3EJ_~ISGhLm_<le4xBDy?<65w&CW]>oB%e(g#zm@3lgj;fN]?!r0' );
define( 'AUTH_SALT',        'P2Kbhl.$M8a Ph.06jfO06k:1+_}bpK%|*4YV$a#^.Shwp` _tTD;Hithr6/-P.I' );
define( 'SECURE_AUTH_SALT', '=k!Vbm(?^.+Ud^qM3VX~xr7bgW/jTJ<jSYh{sq6K c3$4lEfiDoQQe_t#/TOopi>' );
define( 'LOGGED_IN_SALT',   'WZfAg~(wUi6C!Hv-eJ:9OcP[xVcy t-,lt_NCiDc!^l[II6}3}nc/x_e1I*%ru4`' );
define( 'NONCE_SALT',       '1Cf$m3,[q*!>L09TJBYk+CYJ=K`jWJ>6oPTYkWM]WkRUnfK$Nv=S#EuU9hy-y[D~' );

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
