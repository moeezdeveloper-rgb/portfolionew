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
define( 'DB_NAME', 'first' );

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
define( 'AUTH_KEY',         'jOgF>OL;Y*|3/&M1@q33<:FTUB%<|~Jerz%i(;[AdDLn,Qqw/*}--XPCdg.zzK;<' );
define( 'SECURE_AUTH_KEY',  '7$=EU*QVf{NL-_W#*/AH+T%K8F7_&RW GWGduj?/s-^LJJTqL}Of#]*B{^`lO<|=' );
define( 'LOGGED_IN_KEY',    'c9SC{ZYfABV*lQ~$+fRKk$kpY%aU:}L42dslcd1r$a-jeL;zrQ`)%9m3cDN,h$h*' );
define( 'NONCE_KEY',        'zRpM3plH3L?`CDUeJNEPjnVP +?8efZa#>l,dCI8b]V#NMX7oCfXh5Y.7Odt}gr{' );
define( 'AUTH_SALT',        'y:+D3auX&Dz4lEIy{-gJK.y&uo12p7g<J}Ywt;KG6<KISBNNhHul~|dx-CXA//}n' );
define( 'SECURE_AUTH_SALT', 'G0r1e!WLx0aFMFQjf#tQ|CZ)0=It%h+*~$|Z,^SB1>WxM1m%9oQ3.<oK0}7!n/8/' );
define( 'LOGGED_IN_SALT',   '<pU1^-bWcuJH-h:%Z3N)R2[Ij}C+EM]FS1m122.H`Gv-|Vv0=w< N(SUFV@+_G[(' );
define( 'NONCE_SALT',       'i[/9,xh OJm*OUmvP!/YZ8.SQOb+=[tL+4Lkz#EV!%NaO7oq=]Bf=/KAS!C5^]IM' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
