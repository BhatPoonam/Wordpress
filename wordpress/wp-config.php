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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '?uT04X/^E_s<u1omeKNs9+HrnZ5!&XVP$I^AV%cXI eC2kT5gk8o|PjJBE;yq`w,' );
define( 'SECURE_AUTH_KEY',  'dX@]o8]fSw8pB*cn>JsPmu^&}:c]@L=DT2hRkYr}t|AEo;SqsF:,yduL6;jj)$^D' );
define( 'LOGGED_IN_KEY',    ']x%PF5(1*%?6>KW1zO~%G*5%=yd=F]pF3;4Jq(bxyJhf0Ej0ga?|E8&s`h?1RWTS' );
define( 'NONCE_KEY',        '}$Mr ]C- V:RpdrfShi3Xb&TMITM:jT+@lqTqp!T5AlzO*X!]^]+DO3Tv):`F;kh' );
define( 'AUTH_SALT',        'H[QZct0&-w0>91 {xE<KMp.U.lL4B<nLA{?=`Zl]h@f>a1dOn[.EIu}A(Hk)C9h2' );
define( 'SECURE_AUTH_SALT', ':Yan;D*akp`>!<;P+$A+IHcV0Fi.^b8rw TuR0%z,Bff*L71.iefYZE6swfq1:Ja' );
define( 'LOGGED_IN_SALT',   'zVNQydF2-B{S$2-wqUWX?#f~tc8`Oz`i~KN*>_R1bcabhs]Eqn9s}>a*?l;I)x1-' );
define( 'NONCE_SALT',       'f1>5!G<_M|$;j/&9f+d6-mz71)Ogx)LUCP| {K5*Eo4r3(R]Y~x9_c(/JQ6xte?@' );

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
