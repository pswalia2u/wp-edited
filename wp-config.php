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
define( 'DB_NAME', 'wpdb' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '3gtTP6AdK2TW' );

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
define( 'AUTH_KEY',         '4d@#1BN%lDR>*|<N?iErxQ(Gov#5>G%<X#XjdBE~tm4A:W>k6{k5f<M2KK:T,7S5' );
define( 'SECURE_AUTH_KEY',  'C{3DM6B24JIVz9H 5ILU{snZTk? Szq* jS?gp}N~4+es~v4A1d!B=bj?QEM|Qzi' );
define( 'LOGGED_IN_KEY',    'zAmEB0Pm|KDaU|L5abg9Tkvw}[ap-uIT/T}`V3>kOL}`yiM3r4Y1(}*h rN^OBD`' );
define( 'NONCE_KEY',        'I8`) =}kvq(u%=iW&mnB!A(BXmK$ZW!)PH+7;Pa-u{Bw C,}lF~r{#5y9 %8Rw>S' );
define( 'AUTH_SALT',        'boX(5<kzVpQr)n`Ui)8oBw>!~?yi/9RLQg({qI).FJnQR/slWxsNqtiaUga3w7 #' );
define( 'SECURE_AUTH_SALT', 'pA07i][5>jFXrY#pz#>(#,e@nzt$kp5WWK75xYBU`+-U67e_wY}Nks}In6L?ZN[-' );
define( 'LOGGED_IN_SALT',   'JhFTc9r;gY7XVHLb}KVov<M.r[A=j9k,.specIQ=4=u:1^N^1`=?d/9j;evp{_3Y' );
define( 'NONCE_SALT',       'vhyBoeTH 0M7PENE9_ e39+%L-sTDp8eP;b#8QxVkK87**/f@.2H=yW_.zS=5STp' );

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
