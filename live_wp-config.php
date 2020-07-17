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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'alexloug_wp829' );

/** MySQL database username */
define( 'DB_USER', 'alexloug_wp829' );

/** MySQL database password */
define( 'DB_PASSWORD', '[4N5pS(0Gj' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'aiyxd4nwdzy4ngze6rl6hysyrcwn9gy2fqimweabj323h4gvqtxgkwhr4tlfcfuo' );
define( 'SECURE_AUTH_KEY',  '9aunbbfbdut92ox8olfk1wmqwsqravylylm6yrt66wgdbnsjqcxuhxdtmtiudsgb' );
define( 'LOGGED_IN_KEY',    '2r3800diooxqvtzclsro4mfk5cieymsjqvytxoqzzly3gacqs0aji2jybks2vsxg' );
define( 'NONCE_KEY',        'cfiyddzlirreywccfyahzjrxkhilgl5t3wtktfwjfxghjbeaoma1mvl83pzfe0ul' );
define( 'AUTH_SALT',        '55iin9axexhjfadxeonv8fgqo0pz6yte1lq1nswxuy0yduoacrcerw5ythbys189' );
define( 'SECURE_AUTH_SALT', 'huj0eha6dvbr7hyeypwaw7y6xyqhcuvu40del9kct7zipqrnz45alheik3wstysa' );
define( 'LOGGED_IN_SALT',   'fwxcz2hcimeoyltnvxsytyth0f17yrzfh0frkljbw3714ioc2mrb8sbqqzlef89o' );
define( 'NONCE_SALT',       '3usmctokjlcqfifiix6srpxew8mfabr2ihaefbhvihaovierqn8w3vtyuwc7xh5n' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpqr_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
