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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'personalportfolio' );

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
define( 'AUTH_KEY',         'Cj-F|%x#o8BaagB;WIDX=;{ZtGNFwmR-JBVv-uI5FP2hKb+$DAQ*$8h|ra41G}&q' );
define( 'SECURE_AUTH_KEY',  'nWz{qJ??FouT?8[3Lo69M0b7?5MAq Z>qn8x[9ba!l~#%PEBpt5&ON`S<yD1:o_<' );
define( 'LOGGED_IN_KEY',    '.A^Sf65Z.`tE~v4Lc6>>qK5Ue8/PK|7V#m^wvn*(_pc|bJ+Qq>FBj?C58jM~Y74t' );
define( 'NONCE_KEY',        'Z=Ui(Ol9kc+gv=P[djJCX[yxzPO[nhFbIBd;1o8i6gl/r<ebJNj=kQ(V@skwc4_)' );
define( 'AUTH_SALT',        'NR&@/?fW7BA.ldsH<T9vQNIb>Ot=qk%$ cq0td.LfjtlC`V}D#h:o~~A.swqh~Sp' );
define( 'SECURE_AUTH_SALT', '0iLKAO8(,z$)VG^SAi.6jQb)`Rm|gS~u/}IFu5-lJh8*5w?RK47FMX>}bL8K~{ER' );
define( 'LOGGED_IN_SALT',   'Itw53|8zI^d|>b1 v(?1rn*)Tv7.I:| DbK6?W-.SS(imu<:n2Ug=vm(Y0hh}eK{' );
define( 'NONCE_SALT',       'cw,>2,=!eaErn/MbkhyKYx4,TAq]4+tsq.UrP_Fzq~z<?mvuxza/pkH+wAIwE6PA' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
