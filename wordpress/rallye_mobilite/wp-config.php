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
define('DB_NAME', 'saillyseccsebcms');

/** MySQL database username */
define('DB_USER', 'saillyseccsebcms');

/** MySQL database password */
define('DB_PASSWORD', 'Leslie537543');

/** MySQL hostname */
define('DB_HOST', 'saillyseccsebcms.mysql.db');

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
define('AUTH_KEY',         '?LQXK_CYUPK_Gf1GB++W}BGPUjVXMA6Y+}C]sed&oz|o_k4dhAq2`|xZ$zBXdTgo');
define('SECURE_AUTH_KEY',  '8$&Le;<]xEBz3jCI9{+VfQ:8VF`E;u]|}oY+E+}2}rE$sJrAugChf?hHIIRAbu#]');
define('LOGGED_IN_KEY',    'pq8siL$k&oAnsU%z3{9l^gV6VP)_z(~5(nkAV%it H(u(E!}2zn`=CMgUcd2:#?i');
define('NONCE_KEY',        'ydCJU,H<17<MIqw/2N*;*HP/`Br#xP?|=x-;po!];cm01k8rsNg=~[z;Sf3bUlQr');
define('AUTH_SALT',        '|7$./K@D(M=DllVm=G ai@~_*UTyl]:xp; X^SU>rOw<_3`W+R(S]%].@#B]G2qq');
define('SECURE_AUTH_SALT', 'OKMn!{bLjnl|f:X?l$!6;9uOY i{;Jr]-fHc)s.QZ4kEG(t}4Er.Yj&;},?4k}Qt');
define('LOGGED_IN_SALT',   '*XHa~MD[C=>7pOkN#n@v3eAtT)x<4dw_$${JDCu@^R!8PArgUEqx`b&bNg1?bD8,');
define('NONCE_SALT',       'Nl %}vISWx:<4i.?zv=(uIcrXFl:drFcc[B/X<.FRE=8<)5xKJ2e+N;I09>Q=RCi');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_rm_';

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
