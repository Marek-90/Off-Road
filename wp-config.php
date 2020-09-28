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
define( 'DB_NAME', 'Off-Road' );

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
define( 'AUTH_KEY',         '4>9?-OyyZ8j%s|G[) O?W2sR;9JRTbzeUuhr#(P3 1L[nB(]&$=C7_0@TM]7T3},' );
define( 'SECURE_AUTH_KEY',  'A+a26QQ!HI_>Az@#4;/$M!&SC;sro/r`mgE9D+v<k1<E;KC@a*mrWn&WWg/d3|lK' );
define( 'LOGGED_IN_KEY',    '>4KQDLo)q{Etb(t.e,W M6*,S_lyy2}i1<3SyR^*[<14yk!|5}zfv0E>YOeAC/+!' );
define( 'NONCE_KEY',        '7!*]PMoJ%<37w!xl-5$l@q;#a)3>U5!is?65/m{csO?=gYdO@7RAqkEy^?,lrp*x' );
define( 'AUTH_SALT',        ' LjCv/f5f=}q7/gL9xKp9YHNrFaHD!XkCtc-Cfz}G%-XDPjY*vpivCg^K-`~s~,`' );
define( 'SECURE_AUTH_SALT', 'g8$Q85=~s_Zwe8(,CQ7UM;+;c&5Do-/9}(^*rQN?MO,sjeu559Qam;{F={WWtU0x' );
define( 'LOGGED_IN_SALT',   'Q;dmx>KA-UK,>ALqF1~_VP!1tY}hJz/[KS/=4wZg5km0Ib5D<Jf6m 09 IHg ON9' );
define( 'NONCE_SALT',       'J pJww{SW0a-0_L/Z<]Ui9kGejUm_S]rE~(0`+ILZRHB0ouUu-~q=_m8dF@yR1P/' );

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