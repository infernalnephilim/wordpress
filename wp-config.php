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
define('DB_NAME', 'wp_database');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '123bmth456');

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
define('AUTH_KEY',         '9x,fn%gFWl<eFlHiahHLvfZrD|g]JPcHQhWPTqEN4Q@ h;lIH4KWwI<FvZotT2+v');
define('SECURE_AUTH_KEY',  'Q7%,!iw+B18NVu+U(?0z^CLJyT3H5~n~iS_K;Z:c!G[Xk+^iH8yt?PzQ^T=kxA*k');
define('LOGGED_IN_KEY',    'Z4;B>?x/#Xs7t87TA4qfzFUEtVnmEqBa9&Ubm~X<<U_fdY,,E?&H(/Po?|@%&Lh]');
define('NONCE_KEY',        '|mOpL_c0B_XtV3**O~PnY2Xnr%Dg~JmB5tApW>qc|f@hN& =gw!}kUjn&aFooN7Z');
define('AUTH_SALT',        'eWEZhTVv0i$:1vyy.^Q+yf1/~P?fv#8AA-(D>BayF{x%n4?+K#GLc5Db(+Fxu``l');
define('SECURE_AUTH_SALT', 'm/3z1%ZbEriI#t/d7}x$qczEsDsY~iTHawOGo7oW{u06a|nP:.TO*EYt95?D-:zX');
define('LOGGED_IN_SALT',   'hRQ,lZgv,0,)kQ8;)s55#e6PF`=|fAskM-BF|C>vC81p%G%h*Y2W/{ij=ZA5,bE?');
define('NONCE_SALT',       'YStdGlD=6I9)0eI,[-PbdY4JHV!t :f62jXmbDETQS4zDbWYN={^zd8a;F$c_b#t');

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
