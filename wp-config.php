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
define( 'DB_NAME', '3pt_store' );

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
define( 'AUTH_KEY',         'm?W?YL7I~oc9I;4w|2)hz 3)kd-mHdh_{9nL*&@GDKVer+9WE+EPzzlP`QEK<JT0' );
define( 'SECURE_AUTH_KEY',  '8O!>T{nefw(N<gNaag.1F{[fV>F|_N4Yb</7U/%>sJhf<]lb)v{[bw>T3vhmg{=j' );
define( 'LOGGED_IN_KEY',    '*bLU|jU4pjvhc+S{_fmb|6!/6@GZ3jmcrPPFW =_^S0|_]w-%A!}DO|^uQML:Xmp' );
define( 'NONCE_KEY',        'S7/:33{|%1H cx!d2~ -!3]?GY@gnB&?>V3sLtkQHD/xp4{M^ZOE$,~9bqUj)Qrg' );
define( 'AUTH_SALT',        ';hKuk|>_;o[5pMl?j8s0)*Mq&k&!WZ;L^g>W)GL([Roc;MApjC7Eqav;~ME(#8.P' );
define( 'SECURE_AUTH_SALT', 'Y4o0&f.=[syPh@4 ^CwI&.BP:if;ax<ezaNQt:Ej38mN=s,J N4QBy&3uy5c]Z*l' );
define( 'LOGGED_IN_SALT',   ' %qO#&1*o_c(oX<UcaK!i&VZ(51).KM>7erL`LDR0FfV(hQ@F&X/r,<aC8T:?w]X' );
define( 'NONCE_SALT',       't-O|B=Fm$2?1K|Og ;]q;M(IPmN+F7o{vrACNQukHMk* 0+?fD|dV=[CRQ{,|tMS' );

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
