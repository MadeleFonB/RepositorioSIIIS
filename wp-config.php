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
define( 'DB_NAME', 'repositoriosiiis' );

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
define( 'AUTH_KEY',         'E~7Z`@C0mNuhg#c#=1|DorR- a!.|.^&w([[!GX,bQ;}jXXeVy:Y>W@YOK+3T<!6' );
define( 'SECURE_AUTH_KEY',  '_jRJY=[AYJ6odJES6(Yi%)45s*M#m,.|F$ODE5 e_}Uq]Y[{>YYta]pEk;#v.3G*' );
define( 'LOGGED_IN_KEY',    'f}OwG4XuwSZ!^+5?VbJq9].5rhIF#p:Bf4j&o=wK) ^5(:V_%j@r8;wEqBE?08#C' );
define( 'NONCE_KEY',        'AtN2@WuDG5sr}jeiAyCPvZ=YAG9{vn@9rM+bP_LTL[yYG%|G( jS[7HhGfDC8b7T' );
define( 'AUTH_SALT',        '7ek1.11;+hS`xD[;aW1SL%B]]h WEH(GJBq0:,]QH^6j:u>!2 r_Ml^LN9;k+NzR' );
define( 'SECURE_AUTH_SALT', 'wulXwKk+qxS% qSQ!Op<t}yw_zI?CHKo:-R7(+;BwP|:dII}BRQda;3Nod$C9};6' );
define( 'LOGGED_IN_SALT',   'q[rczWy<J0/|T6UGAPRN<WGsu/k,<1wgV.e.,SJQG[2L`)9bU,v-{|zgWjrVq55/' );
define( 'NONCE_SALT',       'qr/rEY(J&d)YD9dqe.L^wl4r+Nh^!>J=`*xK!Ji+o$;I$3>R-X19^scYeWsHC8,`' );

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
