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
define('DB_NAME', 'woo1');

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
define('AUTH_KEY',         '*tA.1hRk1J6D+GhK.#t{l4,b)r2b>9hut1g!ZOFzvX/8-GLN?1Vl1Ff:2s:Cwd$o');
define('SECURE_AUTH_KEY',  'ptJ!WrapaUBRukbzPlJpZF5HubrI]%@d}_d]yXbJ_aT?5f,`Sk.^EqP0Q2Lc(M|[');
define('LOGGED_IN_KEY',    '!Odd3K`^PQ1#.?kR7FQ G)yC,5Ewgz`v(TPLFdcGa@=zSbd,zuv-}wz<t]}f4i0S');
define('NONCE_KEY',        ')7t4zxrDxl]Vo-fI>I_ ;)c=`~hxME<kKq8?Tv^2NA3>Nn?{A&?aYQl!Hm?H^D[{');
define('AUTH_SALT',        '-S[61_|DD@25p>+<6vX *<Sp~;/?+9GiIm[]+`cy~T1p_o<#,jbj=#`v]Nbf!sL*');
define('SECURE_AUTH_SALT', 'R<npLVeG>ohSVg{8bW?$Ktf0N-lPVSjBg)_pXRW$A $u38mJZ].N;!fW5PvG8iO-');
define('LOGGED_IN_SALT',   '*1@!=v`i8l-dY4dbi}[ [W|,%0:Mi0@@+vX4o0g<GX^e~958Iak.|08t8q`>FNf{');
define('NONCE_SALT',       '9mU9 `$:Xw/>NFxU~q&;UXXGT/#3ckI)P)N_cBfT8^{P<,9Bh44S`5!;1A)RXo(d');

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
