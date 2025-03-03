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
define( 'DB_NAME', 'workatir_hands' );

/** MySQL database username */
define( 'DB_USER', 'workatir_hands' );

/** MySQL database password */
define( 'DB_PASSWORD', '09358424036*.z()' );

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
define( 'AUTH_KEY',         'pO8(g HhF50Kq0y>&aW.n~km7}@/CcA}g?Ztaa>#FF4#fP1[KpT{GOYY%hEHUi*>' );
define( 'SECURE_AUTH_KEY',  'q+NO0s}8+~il_it#}Ga?Ihyr1HI7}9z2J!HSD}j?1o^H)fKjEwuy,7.jQz+}GRme' );
define( 'LOGGED_IN_KEY',    '  %%#An2cnuA.Ev0.Umf?mBf,v#p.YV*/*.8Vj^t^+p<j(T5*YDC(Yl.O!c=x4L]' );
define( 'NONCE_KEY',        'x4W_Z^N#x/*tLZ`xLu;W@*T3WJ>HHXaY{,m?ylQkb}V]7Vg}LN_6I.YS.N/V$EH,' );
define( 'AUTH_SALT',        'WOKy]@;?jY$$}V-:<IL&R .g|i OC> *QXmLnL{z0g:q<Ky`HSlM)q,5.3y{yMo6' );
define( 'SECURE_AUTH_SALT', ':0h-/v|3IFH?6Y8b_E@H+|5Sx/XIYL}}3x]Z,@$=H(8,#[us^.0v_3a7f].n1VJz' );
define( 'LOGGED_IN_SALT',   'Cq~G|c`?91y7i[+C&2?*7s_kQ&Y+4(LtzvpoYCf3YcdUi?532|jIN^SHg6Y~ArzC' );
define( 'NONCE_SALT',       'Z!+j6e4JnnvNT<r_V+t=)FALsR?ing)BYJY/v!O?JC`xd#r2 prt%E=LqXH_sjy]' );

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
