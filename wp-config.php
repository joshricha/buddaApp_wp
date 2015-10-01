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
define('DB_NAME', 'buddapp');

/** MySQL database username */
define('DB_USER', 'joshricha');

/** MySQL database password */
define('DB_PASSWORD', 'VfCzrAwJ4KwBTZnQ');

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
define('AUTH_KEY',         'lD=W&biy|#|`5||dVW,mq/b,yu~lVS7z*]/kHKUK):WFHI(/RHCU&8_r+?-],G&9');
define('SECURE_AUTH_KEY',  '>368~ebJ`-F!1j8A00lV*^aI#L-/` [Q@w>aRZA%FTj>3ezFR!_28%GN}rvg4DZ!');
define('LOGGED_IN_KEY',    '=e@V#OuuD;N=j<xxM9Btxaa_d6iQ6>ua`2k0fnq=0Dp-J~e>O>H%u#>8Mi$#|RJ[');
define('NONCE_KEY',        'Qyou#fO6/e@Djty|~?l}V+=j.}Wq2VGo4X`?Qc+ulak%FR_<!AfM<*mmdv;=^|}?');
define('AUTH_SALT',        'DZZW_lEXT:iy*|w1&~JVGAyx-h%lYl`72jY}zl[uI6=y71ARt/ccfoa1$4$i)[[c');
define('SECURE_AUTH_SALT', 'j%4:uSbOS0~&K.sst-.vmCS|@ INi3*vT?2 7/?g>Gz@.>VFz}8|%w0s5I ]IY!S');
define('LOGGED_IN_SALT',   '~?Auej)$&cTh!*5ezC*-},:U+)d%F@.&Joo$E]_Qb~]~VI-o&abLJGzAi2.!u]km');
define('NONCE_SALT',       ',l|69^gVI>K5Lpj2gx:2tr,$4tRkA/pdpdS[[A1Sbu58B#Gqm/,okl<+gm(|:ZU.');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dbbs_';

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
