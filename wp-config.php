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
define('DB_NAME', 'localhost');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'XQ*K|<:;)hM5ar*z5#7S#04QO&r?KUi!o;AG(lo9Q/J+,2V])>0Mr1H8tcaNY2GH');
define('SECURE_AUTH_KEY',  ')MdW[#U*WL!wXWGg+o?uC#xcpt<JgQ,lkv$;DEj`Oj_=#_O2T-+01G+~xV:?+,;$');
define('LOGGED_IN_KEY',    'ok}k%$iN4X6_ph @^O(zcj[~V&/%_gW+ij~<:lT=zesg6jQ+Mc1F_>TgJkiN>B*z');
define('NONCE_KEY',        'k>@3EjV1<%N9d]t{jv1P7j62)%G//]{%IBd/o^]|j{m})`[XS3`-]d@VZGJJyOIn');
define('AUTH_SALT',        'e*QwE=TygRKKKhezv/{A`v%Kd>Yd<`Wau5g=[[V?sUR}Bq0|2iPu8#R[06&D$?`f');
define('SECURE_AUTH_SALT', 'vRUQ(YzUgB 76hfrK+>fzjmF_:4p|p~[B]pvDRJ%pX~w8|@%?x1rs^F/oyO?5RbQ');
define('LOGGED_IN_SALT',   '?+.GOLTZ3lb1B(r{4<|Ib(_C+SW?/MG5XJS9kHz9{WYskO;#z6&%V8Y@=XXUxt/3');
define('NONCE_SALT',       'fcNFW0wzc Ly|jR4NJ>o5F.1w$}fqIF$_^NTr-pW{z}{WE1(0LNMV4NGdp49qk_1');

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
