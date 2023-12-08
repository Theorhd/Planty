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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          '`a]_7[43{NX!XI]#[AO)=8M0!F1r9{EQn%0fNfKOWm:W$Yc1`2up{+J/(BdbC@yn' );
define( 'SECURE_AUTH_KEY',   '-grc|!z?4=HuB $x6OWD(+ris0_lQg[Jo{A`^az3&g@ztb>SP.YOw1t%vTt3E#xM' );
define( 'LOGGED_IN_KEY',     '^k!p._tD]$4k.#F3^- dgX+y>-t{u]~!4pkM`Meu.%B@^@-a4Y(}>:E~[--<;5Ht' );
define( 'NONCE_KEY',         '?D$^28Dps=SB,2^zjoJwy1;morMR7?,vUrpTZZy~IH|kx<%@C.0*2+gf]0Qj5Ym[' );
define( 'AUTH_SALT',         '-;h+lZj)b2qX;a)9)I lFacPiR%0an|p2Y;%>4INjxUBd9#+>u3e4Ml@LCngxDgN' );
define( 'SECURE_AUTH_SALT',  'gt*`g||y9O>D.5/(jId>t{:QUWf. gtnT.S<>l?j4L{B;!k>~4*b+V9|GOadoHQH' );
define( 'LOGGED_IN_SALT',    'TRywtHD,ig#U,). fy1d&=L,3#$14Z`UKc8c/e;]`)73x1B2_`fl_NAFMog9rx`p' );
define( 'NONCE_SALT',        '/R9IW`h)QOf;DkNhI!g&;PcnMs]28+ZLx4K&;}d]1mz4dg8_l;hK(3O<;#wkqkgi' );
define( 'WP_CACHE_KEY_SALT', '`]+5UIt] -_ap,Wr0._tL&fn,Pf)#l>LNzKky%Qbu[q{]dT!YJ1h,OXX5$nG8j@)' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
