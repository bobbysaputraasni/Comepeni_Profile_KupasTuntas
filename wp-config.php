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
define('DB_NAME', 'db_bobby');

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
define('AUTH_KEY',         'M@.P;`#Fau/7_ahC8uH7C~t=B5qH#bv}wa5RJ]YC.!EhCRzrd(-#$A/LMlF>9^Cy');
define('SECURE_AUTH_KEY',  '#NT.p:A>oG7I/OW5%XXm50_6{?kV#9!Ig<iC&S6VF(|i7LaO^)tzN[<OQl4VVGw`');
define('LOGGED_IN_KEY',    '90a??47ZH(lKyp1x|!<,]ANw})TA[hL,v+`7,Y[ADdviT^v)lA@`b Z3^ 6a~Yk8');
define('NONCE_KEY',        '74=ud*7PSIep:MCLX$&A_)D7G[M_tuHdnJxU3{EyUeZKOk.YqZ|(PWI5f#{#Mk3V');
define('AUTH_SALT',        '4_B[KAliiD8C @(68<I`NBm{JZh}L4e^nl|Dcc#J]8A&Jbea<55eOx1uM;tdMHY@');
define('SECURE_AUTH_SALT', 'SAo17;fjMQ@KltFf${13uQKn^2$6KT.iu.au(?AJYI}g,bbR#|S.0,DyR?H6]PU-');
define('LOGGED_IN_SALT',   'XqA^D&_5nW7j67Yzp]FUHq$S{BixCY9)aSKraj.V~ybj895VNLE72-;TS(iM?<o~');
define('NONCE_SALT',       ']h_D,oT,&oOL_@ij0x[]%<OCq7RBMs5S!k*47j$)TM5(LS?4zHaBZoIYY&`H7P+n');

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
