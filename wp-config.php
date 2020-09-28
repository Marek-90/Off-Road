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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:8080' );

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
define( 'AUTH_KEY',         'WxFE+R7Mf1!dS+CGP.<hp+^<`E]f#%a<Th!o:$FEA)AW?ls_k^sKWbXE%)!](a`j' );
define( 'SECURE_AUTH_KEY',  '50,>6nP4H5gX_l-|TTq&sP;g=oGK>LaZRmli6nw?9SDV4~i$Q2z oCL]MScgo~YY' );
define( 'LOGGED_IN_KEY',    '<CP$:c&dTKv3Ga-/@ bWZsj:983V?XL$rU8[r#;)g;:/,@L`[bC_0:{]u/VV=f80' );
define( 'NONCE_KEY',        'dwupW+6Fu0PTD-_[4@+-s?j#<D@kM C^Wz)TzTi~}*!1lK-;$kC}}p={j/gM]EWO' );
define( 'AUTH_SALT',        'of1AV)rf-qC+{w1v`o~mRqEJDl[LVcapqPV~Z?S^znE-GI5QD+R.9E(Zp~8tPB44' );
define( 'SECURE_AUTH_SALT', '0qQRBv-;&E%9l;v-I.s]1gwNYR56R{We_i-lr;](vk_r^vU;!66E1%T  DmO>/Fl' );
define( 'LOGGED_IN_SALT',   '*.,D~a{-gr7m0}!/j4udYtJ3kR=*PqF3;C-F(M*M7Bt$I+-8<,m1qP%J9I&z#ZX?' );
define( 'NONCE_SALT',       '[EBuq$BXaopk:fKV5o1)Td92gG0aL27=& nk*_O]&UX&W7?ArX|N8r$OkdfI3>Vl' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';