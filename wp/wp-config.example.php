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
define('DB_NAME', 'database_name_here');

/** MySQL database username */
define('DB_USER', 'username_here');

/** MySQL database password */
define('DB_PASSWORD', 'password_here');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'G|JiHgO|/y|`)<N/?l]qJsQA.Pn#JOwYlARN=x<Xufl`<ae>7s<:=mabsY@4-!*m');
define('SECURE_AUTH_KEY',  '=/g_N:l6,y!?;g/Lx5?kvcDTMKv~9VB|Ep|kE|<,BO_:r. AJEj*.+sqzSnV{-i^');
define('LOGGED_IN_KEY',    'q1lZ`B/o.M[Y]t/WamBFs?0ofGoyiHzS},!vQV{LcxL_C^NH+xl)+8ZcL!?_,i>_');
define('NONCE_KEY',        '6K;J5ob~UfN|?&!g~*znRuHf|%51T7;@!w+DZ$#QXK-q|YtJ&JXT,FaX)~18:mfx');
define('AUTH_SALT',        ' yTz>c(7?UlNyR~qsu]L[amQzrTNw/8<o6j37mdO4xxbpQ[7*xLsc0nN2OhjA]A2');
define('SECURE_AUTH_SALT', 'UvPGj<OhIlB~, )Yej|@9}.nKQjA,y@$Zml[9MA&#98FEtx$9?rz+hV3pD?2d;( ');
define('LOGGED_IN_SALT',   'TG<<*JFK~m1;R-g;gn-^f=OUEERao-{<AzC+FEak|2FnjYR(KbN-|[3Hb@#E]E%J');
define('NONCE_SALT',       'tO3xgeSf!4:$$?x>$y||+o]o<y88sJ-[9`-I4E+??l8~o_Os%0jAjkL.husIG]=c');

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
