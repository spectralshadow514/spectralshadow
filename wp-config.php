<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/** Enable W3 Total Cache */

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
define( 'DB_NAME', 'colidtws_wp797' );

/** MySQL database username */
define( 'DB_USER', 'colidtws_wp797' );

/** MySQL database password */
define( 'DB_PASSWORD', '8p6Sna8-(s' );

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
define( 'AUTH_KEY',         'sef5l7dxlcs0quyrq70c1kl8jrbm2vio0rqc7yytbzgkukhtngvdpnw7pgniggl0' );
define( 'SECURE_AUTH_KEY',  'wowhjonrbup9ypdgt0lwagmp7mszxlwcxb2vviccn2nbo3boes11cgcl8wxa9do9' );
define( 'LOGGED_IN_KEY',    'fao1jtpyyy3whria5vxtaf0ojslrs2h4vrjrgldl4rbcicqol7lhvvvpx6svyusd' );
define( 'NONCE_KEY',        'kcdkgtuzigkrvgclanvvttsbv3uodi76o2ihqw9imjp7ykydxb3ztcnkz7gcdute' );
define( 'AUTH_SALT',        'cbecaxveost1zya27zen8ihliclfhile3cpuxvoimrnt5yworyi3playtqhhk5ur' );
define( 'SECURE_AUTH_SALT', 'krolsvaxy5g9p41vjgxkskpphoibydglwsxp7ieaiudddizfgryygvqs7vjehlgw' );
define( 'LOGGED_IN_SALT',   'drfozhyenlotns6fbmb0emhyjpe0mngmyear5vzyqwckcmfacz0i8pzucogv2f1q' );
define( 'NONCE_SALT',       'zodvc29vhrnvsifraouejhnrsbkvqwd1dhlgwtznpfzzmhw29u4xwyk4usojjsim' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp3v_';

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
