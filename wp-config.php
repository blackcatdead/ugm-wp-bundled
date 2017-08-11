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
define('DB_NAME', 'ugm_wp_bundled');

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
define('AUTH_KEY',         'g/V]v$/P@EB!9>o0| b+8%qD$Wp%-T:<Q,u#]4|T]VZm;-g.v@,/*K|^?^-Q^N/9');
define('SECURE_AUTH_KEY',  'C)dH>ctY*Fk?KzTf*6FP+l[s`ati@O1hC|n6N#}axCet.KchPNy}jJ&v4N}`T=|t');
define('LOGGED_IN_KEY',    'p1~u5;0wG$m>ngRKibO0/LuD<44jJ{}.N^IMp5Yt >sV/C[VV!K~;8CC-)hYZIK=');
define('NONCE_KEY',        '4d>fzr5L}T.5if~}89o|H-I~?2`5k&IYrt)77Zp2 }]6FccV@miOnjuke1h[<m,E');
define('AUTH_SALT',        '$iVeLeJUa~C{.^E/BgRPfZwWnj0f*./jP4r6i6=oCUU~MVAG$f1bwwQ]Y}u:Q4(;');
define('SECURE_AUTH_SALT', 'VJ+qK=b~A,{T0d)pu#R[-`8oYqPH[=s>__<|`58[9g!OehstG0.bJp3g+C-S1)yh');
define('LOGGED_IN_SALT',   '];D;seZvu9g8(%ShGyGW}I7_g6|!fzk$Q;U<{k+ld?]Ujoef7!ARn`*$jcF4ob8M');
define('NONCE_SALT',       '@J@UJCjUmEcECe(0#8Vkj)Nr1pqH8@|_>YUzk%_r:#2oA+:LYtt]dYh!<rc2ts!,');

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
