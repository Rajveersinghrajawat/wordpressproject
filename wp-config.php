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
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         'TH5x{oT@S^#Cj5sdwy-~|5Rf~`Kr9DPTGr%O1pd@JY5J3qd0Ou</HRXYsqCJYeH6' );
define( 'SECURE_AUTH_KEY',  '{%WiP1m%e!eN{SsEFZ7rC/#+{ l*vIt?EOa=P1;vjVT82a>hlR?il{9[(<Va,XwK' );
define( 'LOGGED_IN_KEY',    'Yh4~4&[D$Q!&F/O~53~ @.asI)Umlamteg%~+lmH4lJ`gU4T@+`osPmqSz^!5Msh' );
define( 'NONCE_KEY',        ']?eN)Xopc3S?6i*UtU;^r|G^DjFjG|@Jf,UU)zX2:SC}gsD_l%u.>^WB%MJ! PX;' );
define( 'AUTH_SALT',        'VyOldMEK7.dg]eH/j@i~,&OPf{&^pzzCMK~NmJ/(cImb?wr_|Q?+?/Iop]tdmh*/' );
define( 'SECURE_AUTH_SALT', '(=A?z(&5,32rRYT9>$2AYPFcr:mMINZ#}e5lMLWX3%?U)dY+)&0&cU1mw>K Vem}' );
define( 'LOGGED_IN_SALT',   'l$;V^j`o[d_OdB}h`>oo0}W*J|G:~! MV%OTo:Sr<MSb[_,Wf-)ZjJ,SGa<ZGGyv' );
define( 'NONCE_SALT',       '8S3o_b{Qo{4~8rM[RT&fh4plj+BurTm+_u?|^tiH[mZ[O<)r%6SO%b*!1z8oSd,l' );

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
