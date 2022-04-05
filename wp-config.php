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
define('DB_NAME', 'romain-vitalis_wordpress_8');

/** MySQL database username */
define('DB_USER', 'wordpress_4f');

/** MySQL database password */
define('DB_PASSWORD', '6LT76diU!a');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY',         'uItKFS&ovC8Rzhu1M&6KAGb1IUVc&q1nTq4RZ7ET#(SsTsM)buabcatZpT*@nkqp');
define('SECURE_AUTH_KEY',  'W4RrWY#y4UFUJfFoDYGAvGzkAY5hli&%iOb#6ez)DLtAvPh4MVBztX)zuLV8h)jo');
define('LOGGED_IN_KEY',    ')FeJw9nOb32spla6&5wq^oeL2*iCucZ16Q^!X%Y*ZRc1JsU4nKK(683A)Vkw4VvC');
define('NONCE_KEY',        'iuY1mOZ^&U!XuXM^z4IZlq1a58CKBDJUVt&fID!Bqq8Qwm^XlSUmq9&Kq%UFdHd(');
define('AUTH_SALT',        'HgJ8ArhS^RA6xU4GsLewKh8F%qtl%K(7pxo1GIxo!wn3C8CzJ049e#MFVx0PhM)O');
define('SECURE_AUTH_SALT', 'j!&eidkoQcEYKCf3XkVUrlA9KzqnbRqXkRvb8i9EQfQaMpJQz8@cC6nyyys((rkE');
define('LOGGED_IN_SALT',   'Dk40*eRw6%n5(PdOv4twGJA80&U!FCcdelc)ZgfgdIkBCZyyQ3((yZ*45SrO)@IP');
define('NONCE_SALT',       'ce0X*Ed1HXqgo%wJT3Ii!uLa#%Ntx12)ZI*ZNrk&kup^Zq7WEjEUcqD!84vH9xM^');
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

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
