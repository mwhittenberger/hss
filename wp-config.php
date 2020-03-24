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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'hss_panempire_com');

/** MySQL database username */
define('DB_USER', 'hsspanempirecom');

/** MySQL database password */
define('DB_PASSWORD', 'ZrF3knwg');

/** MySQL hostname */
define('DB_HOST', 'mysql.hss.panempire.com');

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
define('AUTH_KEY',         '&mE3gdGaxzA#XUHuA_X&DMri:%z+GONqfeYmmcf"WUM8H2wa6lbcF;4LV8tBjSJk');
define('SECURE_AUTH_KEY',  'A6xgyhZAvI#dtZVrv@2Lh/J"DDroc3Rx&1HG^Q#|F!c:NPjQPSqjPS6_U88cB*Di');
define('LOGGED_IN_KEY',    '^ot~5r;::SFGy:R(~hj)"J$$y1S)kk|sx`uFn7rGP:#9zA/cFWFBdwHzmczsn#8U');
define('NONCE_KEY',        'PlOiv$*/v@%Mt)A1h5VdCtF~@io)$l4(a*bOb?4Ras6ls9GUNah?!4|@XNEA8m2u');
define('AUTH_SALT',        '__0t5_1+j~zPniQh?x(*MidY*"Zt?16RW%vhYc~s&O4!Ph0yIJ`B91bSW9%0TQJd');
define('SECURE_AUTH_SALT', 'osiMkmr7YL~d~sam0ZmmwK/vcK!4P3_T2AF`+o4f$hEX:8GN&*QqxrFW+e9mJ8:m');
define('LOGGED_IN_SALT',   '7!4#h30UeXak$fqlJN^:@gvh^%0:5p9L5Gt(DHBF?EOmNgmhO16d"5hgM6c(F"MG');
define('NONCE_SALT',       'CGHBb:VAO8P0ol&Pms2W;Nl6hv+E2kLMtkZ~NvOoJA&p/a*YAkGx0qt+a8YNHqr3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_4835uu_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/**
 * Removing this could cause issues with your experience in the DreamHost panel
 */

if (preg_match("/^(.*)\.dream\.website$/", $_SERVER['HTTP_HOST'])) {
        $proto = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
        define('WP_SITEURL', $proto . '://' . $_SERVER['HTTP_HOST']);
        define('WP_HOME',    $proto . '://' . $_SERVER['HTTP_HOST']);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

