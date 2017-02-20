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
define('DB_NAME', 'exampleDBtztcf');

/** MySQL database username */
define('DB_USER', 'exampleDBtztcf');

/** MySQL database password */
define('DB_PASSWORD', '36ZkhtKTf6');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '|cvBGZ|[Vl4Gw|Rh:Cocr7My}Yn3Iu,EU^Nc>7k@FU,3gvB^$}Yr7Iv>UjEr^M');
define('SECURE_AUTH_KEY',  'O1Gs!FU^0Qg}Bn$Mc>7$4Jv>Vk0Fr!BR@}crMb<m$IX.6iyEH*.BQ${br7My<n3Iu');
define('LOGGED_IN_KEY',    ':sRp~Kd]9lp5Kw#WlK,8kz4Jz>n3Jv>UYw|Vk0w|Rk0FsvBRu,jEq^Qf{mq6Pn@');
define('NONCE_KEY',        'j{r^Qf{An$4Jr,Nc>7j@JY^3cX;aq6<TjP${Xm2Iu.~d[9l-GZl+HW_2eS~;ap5K');
define('AUTH_SALT',        '-VZ[8l-GV!1Oe]9l-aW_1dt9O-[kJFV40crU!0Yr7Nk-G0Rg0FAjyET*bq>7v,Qf');
define('SECURE_AUTH_SALT', 'AxHL.2et{Ab$IX.<TiE+{Lb5Kw#Sh:Ds_Od[9l-2Ht_ieDCcs8Nz>Vk_5ds8O-[V');
define('LOGGED_IN_SALT',   'WDet9S:Co@KZ|4gwCR@cZo#l-GW_1dwCO-:ZojzFU^cr7Bn^Mb>7Vk0Fr!Nc>n@J');
define('NONCE_SALT',       'v$MczZo40FsRg}Bo!Nc7My<TjEq*Lb<6iyBn^Mb>7fuAQ${Xn#Am+HW_#et9P+]');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
