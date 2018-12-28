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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

define('FS_METHOD', 'direct');

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
define('AUTH_KEY',         'dUpcqKsBMyQ*fKCqh:-[H?>ZqEfsZowJa,D]{e#i*kVV&tW8r4tTegY7@~^~~&8}');
define('SECURE_AUTH_KEY',  'Mp$8~U:Gl[f:TU]UF|+/:M4.9O1G&B{gw xp?I!uY/9@!2LHS&)$ >_jL~h Yo-9');
define('LOGGED_IN_KEY',    '+]KrC3?l Rg-<?PL!Cm+T6m?HBMtzlin[l.,XTe([kgM`;T|M5I0jAC8zU?F$0f7');
define('NONCE_KEY',        '_e*+mZr&fD-~iP+OVqgtDRY L~.kuTK|D@?H[9#6N0 FnQ`OOYE[1C 0f^G&h^_?');
define('AUTH_SALT',        'h:a>wutM}AE=rA^T(=IK{[pO<>iaGPB8s|{d(0YJXHP*uTaj8v0M8A,dVK)7|&v,');
define('SECURE_AUTH_SALT', '~+6l?jYt|rj1v^Nv#IPd$7!vgZ{34}=p<*+lw#|cdFc=>w:e--K&!HB5R<vC}68;');
define('LOGGED_IN_SALT',   '_$BOKy!Sj?o[S!%YdB#q[{[M%2it,,R>LmZ;YGD@}$:fk^<KLV2$=}y5C&G2I12|');
define('NONCE_SALT',       ';S=1xd+.bgZBm(~SQ:bY`rXQ>X]YoHGC||,|egd+~Atp3D5A0*oQw+S-By/xa/Fo');


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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
