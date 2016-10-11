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
define('DB_NAME', 'JohnCoadyMediation');

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
define('AUTH_KEY',         '_-UUpP}coM`cJ63++hyuhQlj}Int]V%`dGZ!~)l)C}od:n>=VOA`zq2eGS2IJt@4');
define('SECURE_AUTH_KEY',  'z^{pU9+N/=_mZPSKhN<F;EtT}@MXQ0S*7L*U~_Y+dJ}E5Z+%1H*XLgRceg:Em4iF');
define('LOGGED_IN_KEY',    'SQno6^g :IO#wzfCF{OtU:7JrVO.DzCljsF3mRh~@.D2#giWkclJ3./~-~bw(/tF');
define('NONCE_KEY',        'VQCJ9H1V~1|D8Cun]mPGwY|TwD?;T9#_?_SL#t^ObXcB|H:wn^v>dV4(#}?].aDh');
define('AUTH_SALT',        'xmo@JGFedZ0Fsd9=S5S[zwMQD[%vJ`!1:>8#!QuH=~khhbW[C=&zJbGPr.BBNv69');
define('SECURE_AUTH_SALT', '%mGN eok9s1hnJKnx.N~cFLS<or8Oo^|<J.3?`]?Y%Q1bG!X&rMCNbHoN`w*}y&h');
define('LOGGED_IN_SALT',   'BE/zM;zn4bg+YWZtto`qcv9KrY=BbP%Pm7PBh[oQc&U8w HK&Biqi1k0~#vQjOG%');
define('NONCE_SALT',       '#n0^c{iw)=LA-,b!yOjd>~,6Pft8YAj4PpW?r_5z#6=3G&s sNhkzRPjVZfP]AQE');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
define('WP_DEBUG_DISPLAY', true);
define('SCRIPT_DEBUG', true);
$table_prefix  = 'wp_johncoadymediation';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
