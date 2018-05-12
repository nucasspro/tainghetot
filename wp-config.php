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
define('DB_NAME', 'tainghetot');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'Te~Z}vO,5}hJ:}a%4pJl~l?oy{)uId-4)eli3WW,4Y SQM;U|5.qRz_~ =ZO+s$f');
define('SECURE_AUTH_KEY',  'EH>](~)CN8P KWUjMc9l;xKpo5De)u^r,X3?0j)A0uh(9OVO#p,{qOMbkiI(>?L9');
define('LOGGED_IN_KEY',    'Y=Fy7|rs--BsT/;O2mzd!0d!SP%C#Gb @AH7>lAwUiqTS0fW|:j1b>bCDqe@f4Y&');
define('NONCE_KEY',        '.s4nWMT:hc1QN0XT,+,bM1P=P}v8ZWq?#-)xs+t~ZU0`MHKzX7PFy%TwDLX#&>qa');
define('AUTH_SALT',        'd17x^;O_C{Zo^4ASBf1/gf&(aPr3N.kv?q5+~X[<%cx6D^ps 8/H/9SCBl@Nj%~y');
define('SECURE_AUTH_SALT', 'oyxIIB~}nSYpPE/.-} HdYZ(&r|r0`oP/?=WL*~,uOhw>2*#HkMJU^_04ksa&D!X');
define('LOGGED_IN_SALT',   'o3j6Aj>;FRQ#O@}KtM*h-Yc,K[?4vRUm$T 8xsC)F_%2:[gh}zcQrZzER>4nk%67');
define('NONCE_SALT',       'M@&wL`:A}vmT5a+:<,gNi>VGB8*A-hQL(3gC$*|@ ?CIiV8U1{QFm RP)LF<er&w');

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
