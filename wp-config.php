<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Heroku Postgres settings - from Heroku Environment ** //
$db = parse_url($_ENV["DATABASE_URL"]);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', trim($db["path"],"/"));

/** MySQL database username */
define('DB_USER', $db["user"]);

/** MySQL database password */
define('DB_PASSWORD', $db["pass"]);

/** MySQL hostname */
define('DB_HOST', $db["host"]);

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
define('AUTH_KEY',         'HRc74c^ -)<PD:P/G+^OH~a5_{rbbEn2~++p!pBveB&D$](waM:o|hiwF_{4K$F9');
define('SECURE_AUTH_KEY',  'EC#=(RQE ,3+KAJ|1Sy9TYj?z?AHo`+-;aS5_[(|jN%-~b?1-2l:Xv|](T+=dOJ+');
define('LOGGED_IN_KEY',    'A>e<<J6<>+|W44n~u5(AWx[&(R tqYi6^+Z$UD{]q5C/Y- vN5FOu&2b#>9+;d-u');
define('NONCE_KEY',        '@wklrpbt7E]J U25f5b-wd()GH6f/UbqAEu8._-_[.-70Lu4_@3Q^Dvy2p8xX2l=');
define('AUTH_SALT',        'bLe?+y@-LKF||DAnYV=<cD2@+*TY1up#UafnX0%u~Xf.3tmVKq0=elL;EZhtj^E=');
define('SECURE_AUTH_SALT', '5}QAi5uw0B-_#YH7=Vm{+a|*/6GmO3!Z$)h-V0$3*SX6O9g|KixQ%77CKw,z{:+_');
define('LOGGED_IN_SALT',   'j<m`sF}gs:B$wN{Bdl7:[:V,]n{U*|4Ka}P,{9VMvemL^_+QE<.>aU-YMY3h+_Oy');
define('NONCE_SALT',       'c@!*IV+F1A^{/p2!.@|,F@@r/>|E/5g5eiSZ m|[;Xc&/JiJx9*rrtyDLH<l%Zz*');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
