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
define('DB_NAME', 'scotchbox');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         't`g1;x46mG=<LxM[NR18Ci6|IUF}+mfpKOmgt/A$IkfA!XJ,H%`/?@Otjw%Rf%$P');
define('SECURE_AUTH_KEY',  '+d#SN|nytjS`Mk*rB:A6%j3p;}0[3|(.x6xI;wDc7<3b W1<T+O+@r gHn3^is1]');
define('LOGGED_IN_KEY',    'c}:ybqo$LH.-+HM^y`D-`=v/&nPmp]2YIkd|dhw:v(.pv8|*+!3G*sU`:,zGcGI8');
define('NONCE_KEY',        'XUoJ:}:M?Q[=lIQsdU0W]D]$PN@9X(&q%Jg$3!D9[OosK~sy|-,+}#O~MeAe}}!t');
define('AUTH_SALT',        'jJ^uRF`rGfh8wC~7co77iy]}XDO+9s5wAD? ;e!.xCf^k-]FKaUMj8=nr-Z`.XH(');
define('SECURE_AUTH_SALT', 'rz>f6$<I-]LSJ(iDac>O(leW-_n(q+`i$XJdCu5tZIUzu)wa<Foh:`ATvK5K87IY');
define('LOGGED_IN_SALT',   'Ur(1bx]Y$Dc6~((!#t/X|hSL$Ed?O|3T_Nl_S)ks|Q~4-M*r9{4m;O`n8xF]#1nZ');
define('NONCE_SALT',       'syVCh(x:lk-@qPVId?[*6~VYK[6{;@sL^H9, pEW!=M& FKM?,]k[Cyg_-+|b:Qz');

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
