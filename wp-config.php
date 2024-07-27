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
define( 'DB_NAME', 'Zenzone' );

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
define( 'AUTH_KEY',         'l(i:kz*Pw-4lw$12*CoU }2[-jd>qD [.}>B22_QDH|y{8|/-ArA!NW(EQ[f2SIL' );
define( 'SECURE_AUTH_KEY',  '=(+[9Z%aV_TEXT)xZ H6vnP|CB`m;Kq{lU}3i2# u~)~(SIU&2:Cml$0;atL=h#S' );
define( 'LOGGED_IN_KEY',    '^$fk%a|pQXYmaSx`cX; kL B0o/x4W8k-Fek@1z/U#/%n^}ggt+TV%6nph (^$r7' );
define( 'NONCE_KEY',        './@i9ndW$Y+T#pxl1n0Q>H/;d54LBkT<UR4ceXaoC;^Y0CnlZd%$&zh@_K3q;q`f' );
define( 'AUTH_SALT',        '{c)=}3 +-#4GR?uyJGnp]^7i;nOI2sR &(AW3Vpn|$[$rsDc9;9]kCDhNcjsds$l' );
define( 'SECURE_AUTH_SALT', '5:6)@@.@,XmoL/ |viO.(f5$<(qbiyNt!$yMdo!LLuw5+Q}A*r a.Q0xFTG<};.v' );
define( 'LOGGED_IN_SALT',   'N[xO4{}C9B^HF>9p:([Vt3HX$2Q8a,%w[H)Cjv5/$<lLzdjX/JN;>*OSe0N9sqnI' );
define( 'NONCE_SALT',       'Bu!Y?1HwEyACJ5lO6%O~`OM)Bz=a6m!077_V6n`toq8@v|Z*iz@aj!UU2tf&j&#h' );

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
