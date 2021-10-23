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
define( 'DB_NAME', 'wordpresstest' );

/** MySQL database username */
define( 'DB_USER', 'test' );

/** MySQL database password */
define( 'DB_PASSWORD', 'test' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'u_2zIts8w#W6HjYQO-/Doju3Ad!,XPO6HAS,S!KUDf>:mEIirCA6AtNDzHhDpzlF');
define('SECURE_AUTH_KEY',  'GD,V<RZ]|^FG<l_3PNr8Sjf,j4n%7_)|%S!4$#_(Q%,wYGTSC:]e230|)!YNA:ml');
define('LOGGED_IN_KEY',    'egts`CZ.!DU``iJ|z%a3-I(c^_Z)$P5WHJ.!5r6emqs+5||)uP3TqCJ^N#|3vUa{');
define('NONCE_KEY',        'K$+#GFc$PBk{+%.d+}8W;I$fL@4+r|sM-<<t$!L{;|+|}}N+]lZ3y +]7L&]LTZ&');
define('AUTH_SALT',        '?sh@kiD|%lQ$el,y_P7plYH?[adEDe96%p[_&,F`.U`ZBU{M|B@&|NBw+K]ftBnq');
define('SECURE_AUTH_SALT', 'Hc|n_HG-13zClnaD>::t7SW2z4z|pnhfBfWVUBo|Bzmu(T_Vex,cEJZ1|HB]&CpK');
define('LOGGED_IN_SALT',   'jpruU^,Mq(hl~)-8$i56S&lgrn>3J r!>]Yy.+dE*cm:3w-Zg&YVvRD= U*HAWHH');
define('NONCE_SALT',       'c_H;K4(!]?[9xI7[/tnM9(u`M: +RPy4ZP^4g:b[;9[uT{2P([zw1;|~2NlotDQo');

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
