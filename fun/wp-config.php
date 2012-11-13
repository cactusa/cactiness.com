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
define('DB_NAME', 'cactines_wp');

/** MySQL database username */
define('DB_USER', 'cactines_admin');

/** MySQL database password */
define('DB_PASSWORD', 'E3l3i3$4');

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
define('AUTH_KEY',         'oFT7eLT;@{:&)zst3<%FQ^n_w+]o-G5uR|)Xu;?mT`|>nYZ+$sxB$&brSq|!R!wl');
define('SECURE_AUTH_KEY',  'oj3D&p([.2wa?#8%n=<W^ZdxoXQDZktN0Aie2ELJckg}p2Z|sG*T3!9]mW=Ld{-_');
define('LOGGED_IN_KEY',    '[EG]Y~Nr#EmcO]P$OtS^}r3U--1*$!B5HzhqFS%6*PVXe?(QpI^}p+VB@R})v+6n');
define('NONCE_KEY',        'j>5o_+~-t-pVQ7}5yqrfP/Od./W=,<O}O!3;gWE;A`X9:SQt;<KcO,:n?K+TjS)h');
define('AUTH_SALT',        '|nxhyYbELg;Q%W!kd?ea/$5lzY{GiJe+%c^!3^+RT&V]Qz-;q!H,l g#T:e[MAw%');
define('SECURE_AUTH_SALT', '4t%y-~:V_*7p37N!R/_~Dk,lj6bp3+gEJD` >Y&AlzR yZk0O>Rt>n`@#}<:lc0(');
define('LOGGED_IN_SALT',   'pAVG}<||BLhoal8w*9IUFmg,OP^8#.Mc]Z[`U(B*s/}|&lLd_r4AuN}maioHdX{!');
define('NONCE_SALT',       'KTPBMSA|+[xaQ?vfkef()$h^PH-@(UMzPtzHU>o~}AWd(:++|[DO*X2.&.h5DUXg');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
