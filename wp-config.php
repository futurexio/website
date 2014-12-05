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
define('DB_NAME', 'futurexio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'toor');

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
define('AUTH_KEY',         'pY:o{gVfN?bn*n#n<[h$+j$YqB#M<d+FU[*`LbEqmEyuqh9v{``q{B-/=d)(%gxw');
define('SECURE_AUTH_KEY',  '7?5H?Lr$O+Kt?peVe`t@>;>9 btZEJC[KXK.=|4`Z1E|+42cLY%,~JPHO#+1L*^J');
define('LOGGED_IN_KEY',    'd_g6k!2*Z<1 NAMa(*Tgyi%Q6bveJ]i-cG|hkHa,RV8-$i2?F|It||F]De?~!}F]');
define('NONCE_KEY',        'eQ)+Y7-Ye5x0>S-Z:5Hpv.=|k&)]-D<|hmJE]-vG[F,+`sGvR$?+tY[_+~+8P<KC');
define('AUTH_SALT',        'RNCY~RM`<iFHI3$F=Bm<O;*>8igM]#V4DL<~&kPxTXz3_g!7b73fnyUyDP;6!WZ[');
define('SECURE_AUTH_SALT', '~1o6{tOz`OP);n@t5ER41{6aR!N%;-j>cP1Xo.J=->9wZGru&vH}`M,AQ|okdrip');
define('LOGGED_IN_SALT',   'Zfv2wy_QtZfy]=>6y r,rWYXZa`>jKIcM%,F+SdN9(}`q.n-j$vdpM%az-uP8)M*');
define('NONCE_SALT',       'kv-_2 .,6`Q-*aG7%Cd K#j#!Hnk|Ix#m8hOnUfJ*6K[Ls<#orPY(.[x`|a<R)t]');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'fx_';

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
