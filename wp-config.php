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

/*
 * cPanel & WHM® Site Software
 *
 * Core updates should be disabled entirely by the cPanel & WHM® Site Software
 * plugin, as Site Software will provide the updates.  The following line acts
 * as a safeguard, to avoid automatically updating if that plugin is disabled.
 *
 * Allowing updates outside of the Site Software interface in cPanel & WHM®
 * could lead to DATA LOSS.
 *
 * Re-enable automatic background updates at your own risk.
 */
define( 'WP_AUTO_UPDATE_CORE', false );

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'snapboot_wp1');

/** MySQL database username */
define('DB_USER', 'snapboot_wp1');

/** MySQL database password */
define('DB_PASSWORD', '.x{b+bcS');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'ki4Qq1FrU9gXZ_R4eQdXtYQJTVQ5q9rEhQ8TO3e1RZkzgAkgijDsydSalNVrKpom');
define('SECURE_AUTH_KEY',  'rlwOINiZI1uLFtlKT6xumsaQj87x5qUWIKrrmoh0CW_34uzO48Azmi12tCLaovKX');
define('LOGGED_IN_KEY',    'R6TSsDVqrq5Z0zEJZmNxjgJ6R6o_g1og7eI6_k5Qq8eOFIbn3eUp9hV_OPYsaQRN');
define('NONCE_KEY',        'IMeCTo4NMdABz15Mqp_QdTEgN_7O4ChG6PCPqkVQbLc_hta_qCstgj5OXA3ApVmz');
define('AUTH_SALT',        'wh_Pxd6DDnZmKZUMzvMljL4zp8Xd_dTbBkNhE9QExIITcPcHNJz3MwG8mvgEe0qK');
define('SECURE_AUTH_SALT', 'GXw3GgUhy54S0Je3t3vZbTvZet5G1LSP5y7XPzLXXxK5gWQYlzd7ZCtQzrZfOTxc');
define('LOGGED_IN_SALT',   'rX9W_HMUA77zcVEcQJ9DM6X3wLSZA3Pmx7yN36hC1KRtfdg5ZMmcyVj0gGf7YI6Q');
define('NONCE_SALT',       'PWSuZxzY_KvQG8wFb7FHtCUx7xGHaNKeqMPGQki_qfuC4yH_GlE76ROSt_k6fly2');

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
