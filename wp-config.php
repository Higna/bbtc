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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bbtv' );

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
define( 'AUTH_KEY',         'a7f:gJ}E3!p7We~5=#6MMcEr`7E9=BEcO!v-vFO>zEkIY( AfxT2{Trus}%j;:R,' );
define( 'SECURE_AUTH_KEY',  ',/-?9Ii6iYWv*k+P[kkEyJA4x_whg5*e$SS`~g|k6U[OP-Q&$1HD{Tb=JoqXicmR' );
define( 'LOGGED_IN_KEY',    'IUC_4v9EZrc$Hefw+jMoHW]{dMOw @1Sib.;|O?4GQG.xWCFOsHz|UnsB<1`*@`4' );
define( 'NONCE_KEY',        'NM[k9)7aubO<SabKJ8,xvQD%sn>,u[V_#4UOJ8Wm e!5,6[php{H75[h-8!y+T{Q' );
define( 'AUTH_SALT',        '0F<0.z <%+m3/lhjZf!<,<GwERlXj}PRAW=1i9z86/XAh?2or_k14,L Z~*|m+P|' );
define( 'SECURE_AUTH_SALT', '?4(^JMibiD G5lX|_<aa;Az2{}+%G1>(bdM}R*DTCHQre 8<3zbOcW8dCT|CH-G7' );
define( 'LOGGED_IN_SALT',   '5 >QLD)1}dE18)k^BkMRP+<*F3{)<#};u.>B(k>L<uC</1dw:72NN^F [3HG2i2@' );
define( 'NONCE_SALT',       'X8.xN2/RHXE~[^cK7z_foA*&E|%L:1hn.Ia]R-aKmY&^S.*E9*TC<DU;}v,$L#$M' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
