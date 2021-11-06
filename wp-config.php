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
define( 'DB_NAME', 'phobia' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         ' q>3q6rW~GVxd|{j(8pQXQ=)t~p9BMH!*U>cjH>h]O?[BvD2v||lH%WiEly6APH-' );
define( 'SECURE_AUTH_KEY',  'E2sLxqNX.h#XB,Jp5w[XVypqD6@{nD054L8cVkg:]m=[bh]X8($GyoVqm?0]O|4?' );
define( 'LOGGED_IN_KEY',    '>UE<>`@`&xH!cCo g^UgG^5Z9[8Xwex97x3_?{NtHD/Ky21$: 9UD9qn:|^XIb![' );
define( 'NONCE_KEY',        'evB[[GGY;;NSh$U6vS)T[9H`eL6JM>|y:QJWkdPGM8!Zf+5k[cHw9g{1WzKC,x E' );
define( 'AUTH_SALT',        '2{tArxRyey(2C!tM|a8 +@.,fw;A418*[^t-JWAqewbF3{-L`7(du}Je8,kh2h3/' );
define( 'SECURE_AUTH_SALT', 'eSg/mlZ+==j!$g%gCWiek$x`;6{wtMzC_dOzRsW^TvL K;xj4@6kJv=gM$LQ#gF!' );
define( 'LOGGED_IN_SALT',   '%!qEetO~;)`AIw-avd7F_l)FJGV0RQ[~&$fmOokE*~5WVkPb~3fKbpV|~^[l^a+>' );
define( 'NONCE_SALT',       '({;Ddf$3|2zJKl|{iE0jg@;[@Mg%z`[+npHa-k^~PKd!Yh%(Eg`]NSIpN9<*tm>.' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'phobia_';

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
