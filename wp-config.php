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
define( 'DB_NAME', 'database_blog' );

/** MySQL database username */
define( 'DB_USER', 'admin_blog' );

/** MySQL database password */
define( 'DB_PASSWORD', '123123' );

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
define( 'AUTH_KEY',         'x302OLM3=C?xj?{(&=]-*<b9!Kwd$DR?b~pLu$x]K~n|O71m,2^F HF`p~Yw2ojw' );
define( 'SECURE_AUTH_KEY',  '39dEbM/D<Y*x4>td_B!Dmnq@/Fl3zaxNiV0uUa*IFU7g,;n6|WH|#bRGguRlW/,X' );
define( 'LOGGED_IN_KEY',    '-qT;fB{5FAaT&g|:(BQ!jT^2>b6B`Ra^Lb,Qym_H,_y1)7!575:1y|I]F>#;)&Bx' );
define( 'NONCE_KEY',        '}tW5ax-}m<w0Py0@)-d=0XJ;JJ.%)r9_ZOKL&;c3kq43CgY}C8?buU;qL4%[l><8' );
define( 'AUTH_SALT',        'i~fvZ;-[OMr3=r`R/`jf?KmYqnDE0A>P%quv69;jn6-{/HQZs{^sa7AAV9U -B8{' );
define( 'SECURE_AUTH_SALT', '=oZ*#TJ`jYWa_a~07_V__IgE7Y-sdv1e<At2|BA)Rg!jM:,T5Kz3ZB[E_rH@KKpa' );
define( 'LOGGED_IN_SALT',   ']x*c#f1p|C0jqU#yp49f;tfe!P~-|ytI$@%{!U1T[u&r=]>$y:q0}3)r5 w$se</' );
define( 'NONCE_SALT',       'ogq~:`y#,HpvY_L06{q`t2D;hL28>0$O/)|=6}>AM9$^RlNN?4AYPqM({8q{V#D=' );

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
