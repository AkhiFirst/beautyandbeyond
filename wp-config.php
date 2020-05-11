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
//define( ‘DISALLOW_FILE_EDIT’, true );
define( 'DB_NAME', 'beautyandbeyond' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'i91K_^hh.M8CgqAV)2h6)8:C%qYtw-SGDni =S1DAxL7 M1P8sQ]/r8wbiQh~/7?' );
define( 'SECURE_AUTH_KEY',  'g8wIA*$*Nl/EXeMqljoZZt4kzP3kQPE0m;X}EGCn tgD$b|A~`0,Elx$5?-W}o,x' );
define( 'LOGGED_IN_KEY',    'X~7f?78^er]QkdQ%nqPr0uLu_.N&/F>LzkM0i}`0ypk]2:*p`V+bB.&z+G?;*X(r' );
define( 'NONCE_KEY',        '%HfO`FPbYz? d[)P/8u:|)1&ZPFLmLl#!@cz1O2v]Yi)ux,O7vn]Ve4hB:Ser+G.' );
define( 'AUTH_SALT',        'QRKiV!1+4Vy4rDGzc<W-w4%sr6_G579)-`bAdcktmfo>!4nl05P%.u.ow1I,FmMD' );
define( 'SECURE_AUTH_SALT', 'T=MH! (NBJM;cC^d;Xb(sIR6lk4lyU[}U9hP1lRrYFW&$RXXB$ZF8D:rN9#O@rzx' );
define( 'LOGGED_IN_SALT',   'S#s!tAe6K]FeHBA~y8fVK/?_P[3`;q~c!#N$yuu:H0zfFBNLTOmHJZRxUww0&u;G' );
define( 'NONCE_SALT',       'GI($qa].WHbB9Ea]E@{4iN`]6S5v?qr0d.@]zcX;pG05-y[<7MG#>Scl;V;A_/m~' );

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
