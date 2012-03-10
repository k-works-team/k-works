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
define('DB_NAME', 'db_e3d36757');

/** MySQL database username */
define('DB_USER', 'user_e3d36757');

/** MySQL database password */
define('DB_PASSWORD', 'GD^HnsX7;3235V');

/** MySQL hostname */
define('DB_HOST', 'a.db.shared.orchestra.io');

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
define('AUTH_KEY',         'w~Rn^p[E?<]_[+`RWQ(5ao^uE/~|:^`/DexuR9(?Z{-CM5H97,??y3g{xmR9>6R^');
define('SECURE_AUTH_KEY',  '_>+q0N2q4gn<SH:U+l/hB&|:i6Hy[xT5K55IpMS_Z`-`XE{+O!~R>Vt dJ{!/- <');
define('LOGGED_IN_KEY',    'n?!&-93mD19,rr)z%(Hq]fx`O<2Wi3pz0]e|8ZG!*8X&/Lk{nqYnv|!h{3g*um.d');
define('NONCE_KEY',        '96k)./#F,e0g@]}ScroQ4|F$GN&@/=&`|50gC8]WNfCk(*9c5b{;`r(JD;r|p.a[');
define('AUTH_SALT',        'o2=tCWX+z;!i.:JE$>/kAiDcStj/hDH9s6_1W?K~EwFHfScSyj=5gB,(^QpUZDB~');
define('SECURE_AUTH_SALT', '8`Is,}xRO>%IR@1e<gu<[5@J50CGb+sDI$4z&GRH5>1`IM#h,P_Z)1(]dQFMI-~0');
define('LOGGED_IN_SALT',   '2N!o}GetUg .%W *TrDXUYIy^9E/y{Dg|j5KBUO>sk5Nx2{i;Jrxcsl$b.uYc74h');
define('NONCE_SALT',       'Hm&2%S4ss99+G_ulu9FrA>+PyOH24]T`71ANy#V0vqte{?7oa#xwy+Rw Z86*(mX');

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

