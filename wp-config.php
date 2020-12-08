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
define( 'DB_NAME', 'wptask' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'adminPassword' );

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
define( 'AUTH_KEY',         ' l {_{FwS^7Y$z+TGK,Q.L5?B`K}#UoRvALd4R[[E#%IQ6KtQD3!VT]Q,WEy,lzS' );
define( 'SECURE_AUTH_KEY',  'sZ,*%.m/lsx8xey5-%n0gjiv^.5Vn^AnC9]@ZfR(y5)]r:eAIv]WHg^7dOf77+-l' );
define( 'LOGGED_IN_KEY',    'qpx0k@@XT+Jo--mc[]iGHpL1:|&,]Re!/N(VU:E~g#|=Ji|7j|-8>Jgv@4OwBY-5' );
define( 'NONCE_KEY',        ';w4gB]3bla(i%wE4Vuc1wHK:UuTVl)wEPcse~:07@q07n4ImlUvMB{P*mX.is~u$' );
define( 'AUTH_SALT',        's(MP<I^nbh7}Sc& >It_3Y8v9Zu2w_tS8*y1wcB2U{aA~<yPImJJHTo@`_XOx[R*' );
define( 'SECURE_AUTH_SALT', 'QJ1Pz&b]CX,5&3M52BeVi]2^sHK8$`0^A|#L^O,s;RYa&503P9qD,k9(J0!=:E}S' );
define( 'LOGGED_IN_SALT',   'PlOd#C-3WtpMho$=@wf!zswGAI%g/_|={ @+wjmduz*_,2TdCfp147~MAqc1;D~G' );
define( 'NONCE_SALT',       'DVKP!e]|VT7M:[-T[cp_T<=b0SHoi(Fdj9$mB%-h/eru66m!:G$9czsTjw{|D:6a' );

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
