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
define('DB_NAME', 'demo_git_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'sw~_``xE[~W]ioW.=]Z)qn3Vkxh!H0Y4[ZT%3jr%?EWdQzc!>!X{7-iXec=-Rz)L');
define('SECURE_AUTH_KEY',  '64^gLdN.I5L-22DkJlFx?=tSq:CL+O+g,edD`cX-80&!6I0H;Y<u$Lc~>C[^Y;+r');
define('LOGGED_IN_KEY',    'Zlktdov*:+37w8]6s^)4F3rTF#}[%9;_BlQE}s#B52G `X`]InD@M!Nd9X7 `][w');
define('NONCE_KEY',        'R^NGbZjW!Zki9w)5RyZYO?Pn?ZcWy_ID(Yik+#dQ_R|1$N6ob(`rN_w0tYj3~(9 ');
define('AUTH_SALT',        'H35Mg8{{{^5i$knCee`]G,3!x09BYL=gjnoug+(aF<Mv$SbZ0cTF(@*/}j5A>+5/');
define('SECURE_AUTH_SALT', 'Shoh.tc*15V(_`Lv6<2LZx}JIEPdUzm_N/L/V)0#Ij1:vhR]>}Mvp`U/sq>&N:Ht');
define('LOGGED_IN_SALT',   'Z{jbwD%8L[0xR]@js.5#m-umS.o&yPq?@syXAbYl9@v!3,].JRnuQxj-xDgI<^-f');
define('NONCE_SALT',       'M#7i9{xh&[XCt6rJ1{I5ba`V)s.XgGqz/BJ}yG=P7x+bU1~}Zbl(KRX}ip`ROf$C');

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
