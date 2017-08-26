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
define('DB_NAME', 'udemy');

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
define('AUTH_KEY',         '.6OLM&hou,+p7Oh.#cSxQ6Ib<uW+-Hy*FaoPfDJ:ct%0zgIe)8$APEr@.[m{avQY');
define('SECURE_AUTH_KEY',  'xv)l56@ck>>ZFZvENYI9;Oe%,. W+Lo@lP]kLtKoOjS]%R=TzuW$;AdwDT}#:<`z');
define('LOGGED_IN_KEY',    'YYDV@U}xE3-;[Y-d*;YXLPf+we|I%[-)E)[[/-Q8j_^[MFb5(`CjwKVkL3,}6F+E');
define('NONCE_KEY',        'F$2*>^DJc>x!S95z,lo/Mp^y!^^p^o=8[RF_4w`sd9M|wEgi*?ZaG%TnvvHZHBy+');
define('AUTH_SALT',        'AQgE^llsrO51;A`JJ&+{lQBfV&d^l)LSV:|p|$+0@0XjB19z,hR:Tws/ni2((JWN');
define('SECURE_AUTH_SALT', 'l#r5TEjzx+,A0E%S-}(8;Ff_9>S2CHU~AlEN|ZN:5z} ]oA7Hc0jMRG[N&[rlEjJ');
define('LOGGED_IN_SALT',   'DUG3ZKO 4Lj7wrQR)5aKKmRU) !,I!fus7$&{p*#kr38y)WM)Lpk8lJ%wgE/[7mx');
define('NONCE_SALT',       'LCfOonn$TTy{4iyr|m %^{-rg{}m63hglH._XvV{4N<WiY`Egs;5(WZQj..8+oBS');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp1_';

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
