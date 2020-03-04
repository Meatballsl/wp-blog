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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '389475917');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'criQJ}59c?TwsVc|bzBZFPQFD^sGxA([YiN+;f7N^`Pw-GP&O,6f:5P|3n-EZtF7');
define('SECURE_AUTH_KEY',  '+sV~|,Kj81Qt+FEI~7n|K4gROC#RaT!.9Z%w`UqN)tsP{aUui@UQwH|QI/g;mR$l');
define('LOGGED_IN_KEY',    '6onj( RgL,|{6C>$VNq#bP+TAZa5XDqZE@by@VoKA>knuEO,p&r.KIcE*@,hq8ru');
define('NONCE_KEY',        'JRdpG0S7WaIL*s/A/SG@Fa]oaiPw|2V7<x&4+;EnD$-gw=mEE=Us-wwpK]E/jw ;');
define('AUTH_SALT',        'M^9,<+MU9GRz^%[KO@ulqHrvve9}-MC?NwjI6^>, Hoz<8D]./_l8C%cqgk1C]yc');
define('SECURE_AUTH_SALT', 'qDyb?-=M[Z+70e?h|<Y>7e;!b+}k|]%EE:]^L(ZuY2N]Cb?N-*(rqZaX$nz}4oZ-');
define('LOGGED_IN_SALT',   '4O~!6Rg(g5X9 yGg[@VA9vK$<:l ps9K0mDf5 CtMq^IUImW,wYpHT}vz__I1m~T');
define('NONCE_SALT',       'n,<o7M?pInU~2fB#Y(4~t#dm[.pcdrk?7HVX8*bI~nPnRZpI#E` ZZoRJsrXRaT|');
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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
