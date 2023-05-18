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
define( 'DB_NAME', 'real-estate' );

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
define( 'AUTH_KEY',         '4<lX)MgB2 )@IRG,wRc1KsUa>17+~qbH7[of=Xa^Wk=XLv9n;^Zr?Ou9/u$Rad`)' );
define( 'SECURE_AUTH_KEY',  'nrnpYykqj7q}eckJG_U&2M$%O5Qo]@ F%!<Ly5=t~U(QP(bU;O_-}Onp:}xE >f+' );
define( 'LOGGED_IN_KEY',    's6]JA/fDQ{h6>8BMK]0zQXYwoB)l6$p5h-vf1<w&Vb|}(Ov7lBzCjgqX2n(]-@mq' );
define( 'NONCE_KEY',        'cc>8D)~3YUqo(BfEMY!@,!1aPr*H2^%N{92U5|[8FudaGc3t#W`Ee$*AD{>4;te|' );
define( 'AUTH_SALT',        'Pa|- Hcu]k{1#IZ26My:bKwEVrWXCE!.`nvWp(#cTj`.!zsj.XChE1t4kw{i(^OE' );
define( 'SECURE_AUTH_SALT', '<8*2C#rdlT1o EuDEat1p5RtJ*CYASyL+~(tSsF@;gsR.-XDPc<<`TDnMwm; RG{' );
define( 'LOGGED_IN_SALT',   '!O`Ep<EEKOSsZ1dTnkY%FbKx!aPI`_|;&x9Nby&j))lZYj8oUz}%{%+u$j1gay{;' );
define( 'NONCE_SALT',       '2>N_QZ@qG&tf^lmVUnz54]ppi*-,R<YFZ9f5yW8>O.]jz$yg2GTlMIl74<Gz14sm' );

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
