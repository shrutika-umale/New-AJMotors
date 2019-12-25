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
define( 'DB_NAME', 'i6189617_wp12' );

/** MySQL database username */
define( 'DB_USER', 'i6189617_wp12' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Y.83KVtb0C5yBCkmlV786' );

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
define('AUTH_KEY',         '0bhFLazgIketcIL0zWZU4HUpAPVGCZm3lUQV1eMjuw41WJRtSIRMPM9TB3Atzawl');
define('SECURE_AUTH_KEY',  'CwBjNVgDWkDlkNMFssKEjFg0S5HIDpcDnVoqAv6kOOhryhOkp5xmSOyiY3CZD0WX');
define('LOGGED_IN_KEY',    'RMHtgPVBrKMna4WF0uNF0IaiUISiWSgcc7HtOinK4nb6swSLD1KD9vLD4yFKDJml');
define('NONCE_KEY',        'WOoa8VBX4QRadJvbZLCN3PvGyRVaI5P7vfe73vGIiXL8Fzbk5hOxXsSNDHyv3qnh');
define('AUTH_SALT',        'SAS4i5ZxMl1xhI9v7zRFeYV1qd6KnbgXmQVZPPi3S9U6mdWPlRanu5rTfrQRK5oF');
define('SECURE_AUTH_SALT', 'MeYIXF9m1wkau3SoBP5VVdJlhhPzQRpJkQFEFS6Y77wm9uzlCMYacncyRuhaTcGz');
define('LOGGED_IN_SALT',   '1jmI3FHINBCv5RWgRG1B7dDSzxVhlkFcvFH1JiUR6VdKvkfvO58hPd4HRagcyg8U');
define('NONCE_SALT',       '3OBPJgQCvZFnY8H4CVqkGBjHv4U2PembSFzBdtJ2BZscfWV1O9CQW6lZm8Hy8HaL');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed externally by Installatron.
 * If you remove this define() to re-enable WordPress's automatic background updating
 * then it's advised to disable auto-updating in Installatron.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
