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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'O<hsB+),@;Qf2l-|q|ciRBmWb9xTkw6z&/<eIv$X|*F|Xn4E4OCzX<5{S[$Qn8;2' );
define( 'SECURE_AUTH_KEY',  'VpS;q2jHYHMjQludE;0~!wNy|KH,Y>kO|rULr@vGXfDbo/(/z8e?3{sED/G_=[nU' );
define( 'LOGGED_IN_KEY',    'rbiUWi-$eZ0r qAeWmFO>~SQO~KcXiaGrHf;:>h Bd`r{_e7@Y|Va0P>RR<Edbmr' );
define( 'NONCE_KEY',        'UhlEa.}~p)?LF9dbY>46);r:3g&@Q(6MbR) ;W{ ~*L3xDD%#A-|@5%0E%1.ts6W' );
define( 'AUTH_SALT',        'j]~8eVFmPKX8b(*4&og#*|OQ}id,:Nu-$AKt3vEEvrf-.PT^+$p7YqJk=q)UCg2X' );
define( 'SECURE_AUTH_SALT', 'y%a`_Bf[QD$wB*rPTIjr2s{l2MpwV:|@09UX;&@Ub`n]NXZ]89E)]GeI134-?ar>' );
define( 'LOGGED_IN_SALT',   '(A#5N)A/#k8uscYEQm}pQwD<AJ00#YAvt>pW6UrvE@:(b07{KrP!6ltus`2+BpY4' );
define( 'NONCE_SALT',       '3Fu]^iNFb~XLP2,<s{jN]=9(.k:G@z[E@ahvsAj:wHmLMsLzujp]*?F<L$^Crkl4' );

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
