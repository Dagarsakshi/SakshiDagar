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
define( 'DB_NAME', 'sakshidagar_db' );

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
define( 'AUTH_KEY',         '^OipCj:cF<K{<*FWXy|uZtM@pw1}g]Ef,V?_WAScwi&$mmYwOp(JG?R+OuVa>N7 ' );
define( 'SECURE_AUTH_KEY',  'FutU 6d^j;leQ1M5r^64-IweW3)W/y<2<8L!F/t[M0<EN#Ssycm>g7c74bd8G&/p' );
define( 'LOGGED_IN_KEY',    'w=(P)_7AJng3e4=W=Ys/9@|kOA/# lzNT/7q,^|[^QPeN:k6ZGO_!4=A2NQRWD$Y' );
define( 'NONCE_KEY',        'WqgtV/+T/n*;Ycs}})7NVUg}8~42-%+ebLRZT|a6V|1Wb?Mj,H&a>TFzRhu:RB+C' );
define( 'AUTH_SALT',        'Z{5oMum$anM?.rmBF-$`BdX:nowTG*VZ3eu?R+|yGGDZ$dS?:lZZ~|@XH8lNpiZX' );
define( 'SECURE_AUTH_SALT', 'HU`J;^Tdn]}6S>Z4~2U+Q4QMMr^hpNJf;V`8z78<n1B4$N [gUtykqYz8I<$bQWB' );
define( 'LOGGED_IN_SALT',   '.c|kT;3>(oflo$&zVLgt0c!||=`#bS[q6Z+h#GI=7YCo0>g0u7hHRpQO@D{U?2&q' );
define( 'NONCE_SALT',       'fCx9Mrt(p< 5}T994os5e=!e8JH}[]_f5kJY{#Oautp,/$zywfHI2KtnA3%q?dr%' );

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
