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
define( 'DB_NAME', 'BPexample' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '.(?%I43.]i4oi{y4N*Tmascy|sNR6Hc42?&y@m!WRA%p,-XGtwS60_Wy= [IEYH;' );
define( 'SECURE_AUTH_KEY',  '==xO_^TC+t;(h?~$Ub4..z[a2hE#)~la7YqP/~c(_T7quo&Ew1@)Fg{0dM/R;S/~' );
define( 'LOGGED_IN_KEY',    'r*]*/0#I^^;H?~D}lk3IeqX!|/LkIB3`IJ61+$iNslK7zM l(3aLt(lAM^6<1O<^' );
define( 'NONCE_KEY',        'u4f(@1),NzxSD<K3h6+)_?q]tj8vh+-j([kiy@z-F%!;c^hLaFxCpml_V&/!^*_1' );
define( 'AUTH_SALT',        'f_,LvN i*a~4lkD]rv:pGGG~S Dyl3i0kr)#9j^wJtn(u:{saMve2DD<(n@u;.EL' );
define( 'SECURE_AUTH_SALT', '(9$cKv0#R(8S=Wt5-;Wkt~+$.S[k{`l+#rqu(?k?LFzZd``%Ln@yY%}3*UCZ<=62' );
define( 'LOGGED_IN_SALT',   'C. ,>J,QnG5(]j$U.Y1$qN@A@oP(/Jh?pe :BXeL=DFlHw[gKd.Y8nq[7S7.>$`j' );
define( 'NONCE_SALT',       '3 >MyT|7hSA6>8z)%!?lqhM{d4M2N#RYv@AYK`[]I][4.=Gf,Mx0Zl@SL.=Df/Id' );

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
