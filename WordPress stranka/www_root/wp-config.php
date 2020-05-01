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
define('DB_NAME', 'cz027000db');

/** MySQL database username */
define('DB_USER', 'cz027000');

/** MySQL database password */
define('DB_PASSWORD', 'koxuduqy');

/** MySQL hostname */
define('DB_HOST', 'mysql13.hostmaster.sk');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'K^4&3)?#mz!MW#mR?y3wM),4lX=Mi3s-sYJzq#!jp+{(nXq{3h_T-Fuq >~tIMRK');
define('SECURE_AUTH_KEY',  'MP,s@cVVg RQox+a0w{f1&*q]QY-Tc6rm|@=]gzY&8G6P;^^W(#.)JFVf79KLkZw');
define('LOGGED_IN_KEY',    '+fJ>,-)m],fM(/9%~im-ygh]2&?K _+T5,*|.d0!`s5<^1715-G0:#`1Crug]=de');
define('NONCE_KEY',        '9|_w*]Y3WC`l#<HA%(J-`_Sw4!#W{v~&A_(Bk%rRMVhr@,ww+%gzCw|s-pja*nJ?');
define('AUTH_SALT',        'W~(H=W-6bm1*n5h.2&c_%Y+yU7>^Jy?q0Z/J@TzBA)-sQSl[P=gWe#(jIq#ac&Gq');
define('SECURE_AUTH_SALT', '&4t<^uQp3G}6zY].6*0/X_5Kzj,f(<gJ1F]DXfs9s}JB2&]<^/x B1/C`H]-RsC.');
define('LOGGED_IN_SALT',   'GV CbW-db48ivF }c~>=<u8?<NRF>|2>:)2 JmXy{I0fVQI~u4-^C4w54J+3]%J/');
define('NONCE_SALT',       '@`;M-IwoJfaOQT%p.KrK 8>tBUcA-.-$qy|iIkaB[-d,BMhl94=:it05YECN5QYr');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'iu7a_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
