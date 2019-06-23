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
define( 'DB_NAME', 'wordpress-db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'GRU}_,jeG#gso[!.N4nj@^@t)/IJc*{m8U1Eh984ETq3zWe1gB}DAZ{reKk:b0]T' );
define( 'SECURE_AUTH_KEY',  'V8p*UjdKH.I4!xq7LV^v14dS`Yg708gVCFhAK@SBauZ<`&*ZC`Hn@y|e>nT@m5r3' );
define( 'LOGGED_IN_KEY',    'S-H!Q)>y [TYw:DTst<]tq_K:*x6n.bTD(CK2mZdA~jfLn}PsPvf+h9&)[%6L,F(' );
define( 'NONCE_KEY',        '73@=bHUg)U?x8V~[1M5TuK`U#tp_[(WPU7]out)v%CJ}v3QsR3#BOQnQHJCIh.$P' );
define( 'AUTH_SALT',        'SxR64sJpFZ>1$-.XaH.D{e;f=sx;WS*B/7xFqe-`vEPfJb4=S02L<)TF7M!Ojg~M' );
define( 'SECURE_AUTH_SALT', 'ZNNq|3;Oj]F]Y$:pK@&3_68C|3-x6to)s|+;SDD^ppZ46vZ/6t4k@_gExl8B}t,A' );
define( 'LOGGED_IN_SALT',   '%asa[K;5%.-?;8^3RCRat#QV|gd(lB3;e8>-4_zx,Y)2NOzWK=_0(0sk`zud_IGz' );
define( 'NONCE_SALT',       'H=bFo(]S8NPint@4M~@};YXWI:fjAVp0a9M#ZTD<3pcpJz{.Axl<@sjX2=%!s.De' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpdb_';

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
