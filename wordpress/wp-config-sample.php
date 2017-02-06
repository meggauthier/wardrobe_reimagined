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
define('DB_NAME', 'wardrobe');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'N-.=NV>`55%+B -(y@5Zr<v^l#$`y!R8E(|MN52s;[vd(MkVyN=9Cz(kw-:p:{|0');
define('SECURE_AUTH_KEY',  '?3UtBT[H=czw(Iin1z7&*4!+|;1@B;J=ANKa9eNCclNO4T`?D+OaGR`<~t/}LvUA');
define('LOGGED_IN_KEY',    'q?*2deM~CG+2Z|E*C+fMlb%J-ID(@SyhdRS%n]|K7e%AF@](D_9D*>M><&Voeq/5');
define('NONCE_KEY',        '<fN7:s9U^HS,=kF}q&3z8JX!~-9|X&FvAmYNZGvkn M|4$gHoA9zQi<t9H.+!fa ');
define('AUTH_SALT',        'N`c%G8@y)F_!:-|ETiE*MM?p+)2)|XjV-^S]#i/QVBw+rQ9EOx-i+=eNZJ=L+(^9');
define('SECURE_AUTH_SALT', ';4L78n@aX}`v7/}}UR< ^(j(W6s0ro%$2LPNw|B[>1h,WRZ;{_c>gQrJ-%gaOy-+');
define('LOGGED_IN_SALT',   '?&n$tB*}?R~4F!f]+/h+!^kqwo#;!x:OXM+m>Hv}CR1z&eU~J(,Kh6MG@e|Nfu|[');
define('NONCE_SALT',       'Tq.( C;Df-nZj b<>59.c7yn`9c8^X(JR[MU8W+3UIdv#1j07cR+-CL_%YIAsWJl');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wardr013_';

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
