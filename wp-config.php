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
define('DB_NAME', 'fechac21_dar');

/** MySQL database username */
define('DB_USER', 'fechac21_dar');

/** MySQL database password */
define('DB_PASSWORD', 'TS[(p872i1');

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
define('AUTH_KEY',         'ukgknhbrgztjxjcrdgcaxuyqv3d6500fjpd5qobyg71zd0c3cdppfhdmmun8oev7');
define('SECURE_AUTH_KEY',  'qxivaa65rgdxs0vb4akhfz98da1gklsnybutbfqrzk4yhemhv0soguh8ivcd07xv');
define('LOGGED_IN_KEY',    'ktsmoovxfyard4npxdfwizhclus4sqlx1w1eds4v7sac3si4ymnbfexlrj6thppc');
define('NONCE_KEY',        '2nhtq5uktjlkaxoq6cofhpilcbt4yceh4utjjjz7amm5e31hrkavc1iquivpunmr');
define('AUTH_SALT',        'iv4srct7yhc6g1luboliurjn8rtrea9gsat5ig9gfwgdb8s6jszuvk12crnnpflj');
define('SECURE_AUTH_SALT', 'mec2obtcgbcxs8xgwoqlxps2qhp3fj1zq8ozj2bo6bhpbcpyrdslakcljilzpeds');
define('LOGGED_IN_SALT',   'c1kwtfctc6mmdwvenb2n31byuahkkqwhtzsheiqsrcfvu1uz5h9b6mwvn6wu7fhu');
define('NONCE_SALT',       'j6ug4q63hi7i5akkzt2p6ssvkjydk7kpipu9qthehaqbxa4gcjovafxe3utdup7s');

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
