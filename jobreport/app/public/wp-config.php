<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL
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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Cve4tXUIKMxYwqA3QgJEwgXw67sOcGJegWcjcC8k5WHQtY9xOFl8tSo1moSQ0ScY2Plqn98eU3zLjeDR1G8wCA==');
define('SECURE_AUTH_KEY',  'PdYeSN6zPH+3WIXmWcVy5G3hGZZStYiFlFSGvnM1axfyFbX6we01Mi55qzxycsS2Y7LcHDCl2N1neJd9UFayAQ==');
define('LOGGED_IN_KEY',    '+5MW2VPrlpfIhOG9ZotoG0QTICvZCY8DZzqrwdWPoXu9hn3bjeX69zhguNSmeOMte3WefvAbj9dnluaEZgyP+Q==');
define('NONCE_KEY',        'JQOZBHfriUCjiS3DhtlZVHwcv3SJu1vNfIELpFwAK6yQXG7I8+19cf/0AL+49sedHUMnUUQPFRtPQMbmT1GpxQ==');
define('AUTH_SALT',        'jKHCzN1Ydu6lVS86Up+3q/+pxTYgKK0vEFu2Yqw4Nveado1Il60XLccbLNqcNZCQuanJnRq/ZFAXoO05k04PMQ==');
define('SECURE_AUTH_SALT', 'YysljAuaJwyrosmELtBYCFwamjuoD+5OZKM3TfC11YNjPdVKKTdRi9v/4sdjPAb2cpnblF4SKijWEW9z8g4GDQ==');
define('LOGGED_IN_SALT',   '8qN8vNLk0rBqmXpJXEkwZrQiE5p3l0a5u5vTH3Gnte6YEz8/cWeooQ9mikNJipvnMJBkfFfokCIWKgbtfav1Zw==');
define('NONCE_SALT',       'PgVrwhj/EbKKi0ziMdzq2NmqXCqmwTJZCyCvb35tSj5XQvmQyDpLbEXGIapqmqjISj2NYJkMzRcfVkDctEm56g==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

define( 'WP_DEBUG', true );



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
