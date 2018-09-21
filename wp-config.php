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
define('DB_NAME', 'wp_database');

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
define('AUTH_KEY',         '_!O?3,1fQnh(evRjq(OB>]i(qv&xo|RQw1[Q$B+* X!O./O=#(LGjwf]G7ZGo0 J');
define('SECURE_AUTH_KEY',  '9W[d;:T?w/JC`{kR|gX!| |g^^U4$*1B6IvaoA2a-y7hJ#U11N?SrB7<zP&[~T_J');
define('LOGGED_IN_KEY',    'DXzB-Me[y3l(`(rPP{#1*qz6A|7b&&4#4tC=_g%!{U!lMegYxAl<A6jQV/2!)l,R');
define('NONCE_KEY',        'f|B|^:Pa>F$sT6KX57u-7V]7UC~4Pl-C|#CEd5ZS`[5}TA_zmr8}h_`_%r{v8;CK');
define('AUTH_SALT',        '~,~y{mvX`l_jzgAf0nQBY4CU!vPD-$MnV91,21__YgA:j8ZxuAEj</1@{K 5v?#g');
define('SECURE_AUTH_SALT', '!%Y9C`7]}@~vO=$g4i1m+_:1eV@b-MZ.~Tl.#lel:9W/44zO,5[*tKrZ{z u?R-4');
define('LOGGED_IN_SALT',   'r@Y5iG0cMPe1z&S7`7KD}#>Nr6?J77-<a-RFM!fwZiiOKzSrg@68[Qv+k[h.;3i;');
define('NONCE_SALT',       'LjB,dV{E@idK{^m9,m-yl8)vU~(Dy?.rzMf(ic9cO>lXkTR{o:=x@t~qQI.3 NFf');

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
