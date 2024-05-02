<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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

define( 'DB_NAME', 'portfolio_db' );

/** Database username */
define( 'DB_USER', 'portfolio_user' );

/** Database password */
define( 'DB_PASSWORD', 'mayes5678' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'OeUdrP0_+.&j#o<$R%XmWOBJ.C=`0@P+?+b<W%sU}Pv<b+C*.r&+!Xa<`v hmobO');
define('SECURE_AUTH_KEY',  '@tx3|]@[l2Iy`sL`>.C(-tU_qI?7{?=izB%HsNFpJx7/`mT8o)>[p$^rC9E|9;kZ');
define('LOGGED_IN_KEY',    'F9rE1qP 6(1mZQcHDR,}4vU0/V&X#4r:@~(unlo4p8mdBHP*9MJiCH,<~4qpLHq:');
define('NONCE_KEY',        'i4)3N=Kjj6h}+*DEOzE(H._BuT,4elK|Sh1hv=6S&+txYtXj?0*oOB(6T|y=e)X.');
define('AUTH_SALT',        '7bA8u}@W2~y|9|T&+KCP=7O@XY>]#HWG3|;j024lz~L>H#E!&wLt{RA-g YK#iNs');
define('SECURE_AUTH_SALT', 'As@@|7`+0Y|#>Tq4<;aK*qCt)~Lp`JFt4>2{Rh_%MHvivS5Q>;s}7i*M_lpBexrF');
define('LOGGED_IN_SALT',   'i:a4)MEu9%|](oCb=<b[%rzYXNrkP<d+ F63+,{ye%;*xJycME{^^.yUh|kc-7D>');
define('NONCE_SALT',       'OJx,?LR_9dwsR:g!0f),^>rhjaxdDc:;ZfI-Yu=I<v~o^BA9 R:~GgY/0E)f/!!n');
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
