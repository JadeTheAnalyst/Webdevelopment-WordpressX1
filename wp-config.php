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

if ($_SERVER['SERVER_NAME'] === "192.168.33.10") {
	/** MySQL hostname */
	define('DB_HOST', 'localhost');

	define('DB_NAME', 'cityop_wordpress');

	/** MySQL database username */
	define('DB_USER', 'root');

	/** MySQL database password */
	define('DB_PASSWORD', 'root');
} else{
	/** MySQL hostname */
	define('DB_HOST', 'mysql.cityofpotentials.com');

	define('DB_NAME', 'cityopdb');

	/** MySQL database username */
	define('DB_USER', 'cityop');

	/** MySQL database password */
	define('DB_PASSWORD', '2pJXbEXxjc9LykPg');
}

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'jds|r4#Wqv6LPTS:lzT@w=(r(y*@VA.*2j$fz5ao/J>%c+A*%Q`?{)E`g%dm)Lq=');
define('SECURE_AUTH_KEY',  'Xl+Sbc&],Ly*`iU*9-|s#9,9R:XFB~CC&FRyAn!9Unwo3E-78m6<>Z{]g+9Kd%b_');
define('LOGGED_IN_KEY',    'E=)Xr]{l5-gw6T3S6&chqe@~MMo*L1&1Oane]>}Oeya`|6D3d6*e?eFzE4g<!`.r');
define('NONCE_KEY',        'KEJgz)4h<msf5qV[Pr/4{EvPt%&Il!27fQ:.8RuznFv]y!Kz1cdG;%BQa;.b5ZH>');
define('AUTH_SALT',        '`G46|] |TI;OuM}82>]RavSu].j5(5gxc<b7<Vi}6fbRCG/E*oMdb$6fxb#Cq;{4');
define('SECURE_AUTH_SALT', 'b8XTg+^:aZ6:S-6s;_3+=;l!T6A=C|9+VCw nI_(7fd.Dyk#X.:JsQjMr_,rjvf$');
define('LOGGED_IN_SALT',   'bWZmLa wRH(gX#O3Oj_F0BS1gFa$}3f%[1XeD)f>4IvdatgK7!%>0(lQM21r5XFa');
define('NONCE_SALT',       '-rh9570y!:/}vCsmc7WmMDp}h`UXC9V%L&daco(p(;-jk74$mt^|gr$$EQ[7kptk');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
