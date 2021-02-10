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
define( 'DB_NAME', 'new-site' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '_4>Oi~g0K K`ce^%h>;(v>:><A1|06mc!GnQ _8wy@xLjTA:v8:eLi_BCAhWe7#a' );
define( 'SECURE_AUTH_KEY',  '*0<2;->+0=YfU[B=$@HT`waqi^md#qtA:JBp83u%l<zNH?I~aN^s<5EX G(3,t|[' );
define( 'LOGGED_IN_KEY',    '$8qa:-{m`(+6mBm*X)HjL7M%L-SV5xm/P/|EGIR<mJ8avTr>k VpMN~I-O+SD~uv' );
define( 'NONCE_KEY',        '`BP2pC<HabhDz?5M}*bm44mS$-`JPZw3YW1[w$i&^G=3vQ F([bt!X%Wayew*b3<' );
define( 'AUTH_SALT',        'GmMw~p7._Yu^Vs3@bdD#X},tC~)37Tt=p^^N+7i]I3ZD(L*T_3z`&Ee~31O(qA87' );
define( 'SECURE_AUTH_SALT', 'g%iv$&Xqc7zNdU+/l)l)%h7=5Poei:0`-fmJOp5Y)B`4,4seMoA(s)&nII[ ekWA' );
define( 'LOGGED_IN_SALT',   '2] #+jLjqy>H[)yk%yeus+LRnoZz)Tci}pA]xq#EFMqxJ 9)]|q-t4[/}mwi7$xI' );
define( 'NONCE_SALT',       '-u2<v4J2{8:__ps+%8}[9-IAknBVN12,@@:[%X}jLXP4K7!v;7`(.W~%5.@uJnr)' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ch_';

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
