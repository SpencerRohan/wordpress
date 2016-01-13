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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '/LZ=w+tee;flj>@a&><J6aGfF{GbL:S~D+_=FL-}|[v{<>NoSQ^-DEGd)hl?X+mZ');
define('SECURE_AUTH_KEY',  'Eq$+p(;UN@R}h_W6Q!B>8mk@NWQG(;:q[(+pj:p4rL]?LIJoTOucHR8Z`s.<T-m5');
define('LOGGED_IN_KEY',    'yc?4|!|uU^L<D~+t[<4U{Qp/,;WKr.|X!E!xCK|K|@=K1XHBFb-6:T`=6d2BdVtb');
define('NONCE_KEY',        'ki^TEF$el7g$+5}3[n4Af#9;(.;*x+2x&bjX4Z[K-:Y%d2Bj/2Qs|[Z2mxiTHUKQ');
define('AUTH_SALT',        'Q#.~:$kg,;6|qA$UL@!5Y;3z6V-NOP$2VNj5Lv_`3=st|yu;jq!t*q7|<j2s=`S)');
define('SECURE_AUTH_SALT', 'Hr3t][w)4!XF:A~U|SVL^klsr-3;Bg6v}6(sp`DDsD}jo5uhAeYw99t=Ly{ 0H8$');
define('LOGGED_IN_SALT',   '8zp7B-3*hm/EL|)oO$?#4&&=+@5#8Gi5}.4xW$i67?pmI>e<67q54vR^ADsP<R8B');
define('NONCE_SALT',       '.=ff[C>fF74:!PB-UO%lR+un[&W`)H:qu5JOrR/!q#WA&D7x-p#I8D,xykA$$B$@');

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
