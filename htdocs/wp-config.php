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
define('DB_NAME', 'floodwebport_db');

/** MySQL database username */
define('DB_USER', 'fwp_admin');

/** MySQL database password */
define('DB_PASSWORD', 'McDuck13');

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
define('AUTH_KEY',         'J3X] Gt|--NljGXpTR^}L0t!^fUtx+A|,PtuOtIKZek/XGopeiyu!FNm(F-jdI|O');
define('SECURE_AUTH_KEY',  'Y5sV=@_M;v5-d16.ryW|eo8lssM|fkm]/8X#Dp|n+}<8&f|W|yOghI(w`=}FcxK/');
define('LOGGED_IN_KEY',    '}{wkwcTh{[q|F9%hC-r_ Anq.l}&Ne}^Gl^bC*,]t${w:.$+4Tkcxz #u9mi),/{');
define('NONCE_KEY',        '70]/k=`HLYI+mR-=|N+)--Q< w}QDZ3bYr}[c> pjkX2@ISMG4yzfErmB/]%FqL/');
define('AUTH_SALT',        'PAqe-LbF&g^YVq|)yc?T[HSbqF`Unq=amz(m(]SxPS/Z+,6GK#c9X5DR>2*HqhF{');
define('SECURE_AUTH_SALT', 'D8}03N|NjU-NsVP}+oQ)]@)b|9gG&0_s4RmTh>33M<A8_jK/|L]]4[-u.RV7dl~%');
define('LOGGED_IN_SALT',   '^}5~qz>(Ibk%V=vxA8M=V3x2k1K(h?+;|-f-|y-&+/X2*N~^K5{p!EiDVB:&E}pE');
define('NONCE_SALT',       '/SmNKfUf^Drs@^ydxm`W ^<V |<+>Av.Hwn&ja2[3jtD5hKS[#48,EWH-(r<Le@0');

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
