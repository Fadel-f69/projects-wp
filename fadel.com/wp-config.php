<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'fadel' );

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
define( 'AUTH_KEY',         '$Smyj3E}UxW4Lt!TjwYI7p;*M]1BHa4PP`mr|$>v9a[ykZ0IY@#cvtdR`n%.$kEu' );
define( 'SECURE_AUTH_KEY',  'PXu!]zDyMm4g9!!U~iZD+`3mL3aEiWp<>7ZN9MI]6St(~m(M+.f:`;K][Lew.nj1' );
define( 'LOGGED_IN_KEY',    '4*`cnc1E~|o~e}V$Rg)6O]8CtEW;pE>`%ybvFcj^r =XoB)51?>^?mlZNGrG8cD=' );
define( 'NONCE_KEY',        '<j&?$9;KF~lNgpm& Zw0BRt@U-S[%d{]@8c>*9qQfu5]KJXJjDm/{bHc,vLpX#.i' );
define( 'AUTH_SALT',        'r#5GIg`5$3L-;}g.0ZDk~MjkEdW4m6f@ph:<4_uz;f#g^gf~oYZUwEbKp<|N3mct' );
define( 'SECURE_AUTH_SALT', 'G]k6E<+wv(tRM FkcLa{Yx.iCWSMMZ&e(z|c/e1i(BQU1}[z1AS4z0_8;Suu.z#G' );
define( 'LOGGED_IN_SALT',   'fH2R718sD`E&NQ X.]&VS6o(~ydx4jn$pVukO_$6I;wh<0RIX?9{I6,bLns_Nn*S' );
define( 'NONCE_SALT',       'mb3;l]@J,8@pu3PQmN+R3pQ3B_nC[pj6G^QpFJ;s~W>1|^s;Pmt<s-V)BEMT@Bkb' );

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
