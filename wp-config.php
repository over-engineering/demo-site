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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ']dbh$rkEf(^R}^Q~!%pLZCl}e*IeUX-6PylTCkTY+ZH,$*}oULoOB*f5QWI7{&5i' );
define( 'SECURE_AUTH_KEY',  '#F8F?wt;nP{(1V~CXuBdzdx)daCvv]tVszg-G1YLt]:sFiA2f3gt7hDZK_FaI`K[' );
define( 'LOGGED_IN_KEY',    'EmIkL%&H<+*&mBWqrmAwcJP/mlhGQD?V-i[ YEoKkp6<,4s%],IL~r}ZVAdy@|3k' );
define( 'NONCE_KEY',        'q=$Y#-2{-w_w=`.8c5S/)-L:Ja_Kn89m+&A_}A*kRqYa%C5G,O3E4`4-Sa`2U)44' );
define( 'AUTH_SALT',        '^*bzB}_:VT)i#u#TyfB0PXSc`Be1Vsj$mKPk_E=lJ<2>5pAQ-(U3Wv+cB)+_*{:o' );
define( 'SECURE_AUTH_SALT', 'wH%O,XHT=nzY[q@mCzu-{-[K#fxMmlq%s8HR|5)9UX4 1h=Dtdz,x>+FL([IMfWD' );
define( 'LOGGED_IN_SALT',   '7R^U^( D_9,{6k@l;T$CRfA7OGc`%/6)S-yj s$<@Q@f_%,ExYW3kN,j#6|jl$>>' );
define( 'NONCE_SALT',       'Yxno4qCoJ{?t?{SNo#<;DBNrk}G@v@8_@,YlyqM#zHbN>kteY|V9U TbdH:(r|#x' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
