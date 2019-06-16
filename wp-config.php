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
define('DB_NAME', 'ctblogdb');

/** MySQL database username */
define('DB_USER', 'ctblogapp');

/** MySQL database password */
define('DB_PASSWORD', 'fvNZQKQ8Jm@');

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
define('AUTH_KEY',         'f}W/3u.Ox$L]tN>V%]L/OTeyGmPe{6&/_>Ywa0~]Ot(kMgPjU=Vz3?i|Ppu*Mnv[');
define('SECURE_AUTH_KEY',  '=hFEM-a3&P$ ypP7lx39<m3!ZI_cHqyx[ZgbxN/UM<1-$/aD0R&~NI6kG+F7jQ+ ');
define('LOGGED_IN_KEY',    'aOEw>-s6Aw1@8:ob*4lc@:k57%MK3&$ISE{5@QWq/b:F[HD)VCqb%66WP:PEs,[Y');
define('NONCE_KEY',        'II3p.O-Jh_l&^]K7$$XF!Go_wURmt~hIw{PWFysN[.RzM{hx*-[]yv#Xf&];3`3U');
define('AUTH_SALT',        'a):&DzI~p@E@ ??Zn-p1,60vg<F:!VO;((77+@^9RlU;&1.[ss8<kN.[6v~t_/cY');
define('SECURE_AUTH_SALT', '*G~uzd+J9blx@Mr&E1)Ia8<[fI^Uzim]5,ZC$ny!h]9Vd1yRkFSvKuO9C 7& _]v');
define('LOGGED_IN_SALT',   'd)kY#{Rmjq!FkAy}})  6:iD~~{z]OJvqF3$hdQ~ecTZwl,7n{?I:Rc:X50)yiGR');
define('NONCE_SALT',       'tR-[7~b/C[*o?*Jbaw6UH0$z7gq?ki#3g|6o|+P4YP Mt@HQ.+y4=},AeE1I1kpV');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_ctblog_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'zh_CN');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

// Add by ct at 2017-04-04 start
/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);
// Add end

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

