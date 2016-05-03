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
define('REVISR_WORK_TREE', 'C:\wamp\www\Word/'); // Added by Revisr
define('REVISR_GIT_PATH', 'C:\Program Files\Git\bin\git.exe'); // Added by Revisr
define('DB_NAME', 'word');

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
define('AUTH_KEY',         '%lVsUvhWfxVRTN`*m)`p@<?,4]?aBw|*/9F5c<:.K;3}2EM(8s)tbWxm3;tSBeH=');
define('SECURE_AUTH_KEY',  'IzGuf3%AYys*|ulA^Z_.v6P9RoJCyyI,j^o89wPWUU(T=|G7,oN}(/QJFz)-+, `');
define('LOGGED_IN_KEY',    '1+1E[18cFE$<e<tMOyKQ(Mj[xdkfT(u0b?Trr[-?h&)t;<H:U<!?s/YXZ5Osk<Xw');
define('NONCE_KEY',        'Q5<ah=pF?gL8&A1Dw7pKlv}wAgBA]g~~A~xh51%u0ccO[l!LX:2@%l[FFQ*&TM*$');
define('AUTH_SALT',        'sVf:~x8@6,ffTllhx@Uamkau=DC9xRmtW0`h@*xq XL@bpE%zO(3#uV?QU8;sLoJ');
define('SECURE_AUTH_SALT', 'J{2N]9fb|VDDZy.1_mtshbiuhdH+TZD*y/5967r|sR7+h*aM/}.wjL_b%&LMF`<%');
define('LOGGED_IN_SALT',   'V5C0dV*/HI4?2*dPhSide@9Jt4zo=)=#o@:,P#Bhu6SK.^WDZ6S@;MMe5@XLB;P ');
define('NONCE_SALT',       'MR:tw@=v<$?L{rj]gHndDz&}P$Z1=2:{]2c Wh#OPQLHYu1_cuixUQEm/lT`|9JH');

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
