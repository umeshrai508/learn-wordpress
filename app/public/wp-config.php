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
define('AUTH_KEY',         'xWKhR9JZDTb17fj4tQHeZQFpAZ7XAN1PFR0gmveNOoCTbnkfoS1T5xIoIhTMAKrMnnrTpWJ6SRbiWy8NuDalrA==');
define('SECURE_AUTH_KEY',  'QStpeok8wyYdkpa4fbgsIaSHDJm26gGMaFSYBZDEFkcvYSSrROeUDxwm239cO14CFjmyrNuWaQq4URncBLZazQ==');
define('LOGGED_IN_KEY',    'swD+FDRmlPo1xz8C3T2zehrkVdNYUk8J5SceB5PA/HT5qyLvGAaAQfQogpb0l3l2s0RSfVrb/KqPPOSme/+pAg==');
define('NONCE_KEY',        'XZwEUdS0sKWDaH7ro7Dlr866FdRVEumnYB2hnGD25+JTgmHR6aVdAtXHooH5BWi4WZ+/8qsC1yhTaHkMkgzY5g==');
define('AUTH_SALT',        'xFv4WYC+4dSPfQs9Bnx9a0sNKobd1TvSpsoqL9KihpUMD/tGvNOGhnrLy8TCSKW+X/yDtCYyKAKb6xyE5zkO+Q==');
define('SECURE_AUTH_SALT', 'TfHgFfhZnqgqjmGwLdooygXzWV+fDwzVpIDb0AC13BabvL8bXsMTxPQiBQCzxZEKVBdwcLKlsQNblloQ0LIUNQ==');
define('LOGGED_IN_SALT',   'vet2FO3dM/vzr0xTxyoZncMdQLJUQCuhqBP58lFlVddxGCH4AG6Ay0UMDwHrl50gtd8ZwJAM3nnuua3Q/4vr8Q==');
define('NONCE_SALT',       'rZ13Z6GZDChKXCvfYaPf9x9B3yhXWrr7zKKmC5q0S3nSmEDQuEMonylqJAVQhnag1an5WBD88mg0kA45lk8/pw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
