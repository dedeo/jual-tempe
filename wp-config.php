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
define('DB_NAME', 'iwakpithikdb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1:3307');

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
define('AUTH_KEY',         '>!?0u)/.j C-yn5y|+$+4:VSqND&=+WffiCF7B=:P:+ nj?Z{=ZkrnF,[(EvUB.}');
define('SECURE_AUTH_KEY',  'CCXY=z}lBH#??jP]!#F,oI#:F3C-om%^imuIEdK_ cB,0PyXoP9G)L,CM2nGierP');
define('LOGGED_IN_KEY',    '7CAA5fC^#{@:3(v6?-Goq3TH=rxo/Zcv/rTaT6ZmqXs(_!*d-.^-$8<5(p]YTjl9');
define('NONCE_KEY',        '/:&-$GH$6XC99%Xo5ly6<}2qzK9~v%$=xBn>gg1Iy|-Zr&@>A_|(xum9us`Y;TaG');
define('AUTH_SALT',        'OU6)W]9lEx7trC>#yjW(4:Uq0E>iDvF4iv|6ElZ wl Py9t<Iu0b.tI?/-FRk6-p');
define('SECURE_AUTH_SALT', '@vN!&jaro}]7f83O+N84nUJmrIAA G9h0ag}za|vIGa/[RU%Kbv!Mpr@nC@G,:eE');
define('LOGGED_IN_SALT',   'XawGJ+GZLGH2~TtOYq`iOG>-W:LpRb48>guGr8m2)G=N$lp^~YwM&gDr`M]dW(C-');
define('NONCE_SALT',       '[~zh!>=XS+K7J~>h}`{)szqCgF<{U?~$+S_sV/-!+|^p|kMSep >({=H2p[rvghO');

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
