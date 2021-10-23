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
define( 'DB_NAME', 'testwordpress' );

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
define( 'AUTH_KEY',         '9}F]WU;Jt?9i:@KKZxla&IpmotUj{DpFCq@bq-r[V{jy>52wO/BpQasj?CyH.u2@' );
define( 'SECURE_AUTH_KEY',  's})Ge-NV{fIroXU9*i)E0ayPD$LoW=ZzI6At>;oxU^p[*#6v4j?.)U7=^+G8^,i$' );
define( 'LOGGED_IN_KEY',    '0$DhR~({n>IUE``&1A6~pcZ(ye)YkGHZciZC5So-y8}>5~B`wH+Os&!K%4ArKB|x' );
define( 'NONCE_KEY',        '[$B-{W1={gdf,V9il#q38v-/Ke*82=)o)Zw:NcCl$u~^wdJ;K=nOO%.hL68:ZXz1' );
define( 'AUTH_SALT',        ',rs?U{NV)5c {r@I!(>Ww7ny_LscD:{vpapj(=34ii~_^-B[B=KMM z% nb74`+u' );
define( 'SECURE_AUTH_SALT', '#;trZk_k^GdK]CiHie7UB)j;2D2kH~O;0%eB65y`/@>i}CM~34IXRu^escahyw&1' );
define( 'LOGGED_IN_SALT',   'SB/bO4=vZ)Y>_Q%%Mii?3R7$RCBP4SNi)$i]g5*w+!=4wOKDu@ST6puov7pNvs !' );
define( 'NONCE_SALT',       'u+>(p;{7M]zS~.lZDt`N9m^0,2T4pdX$kjA,/[N`?fd+<EP)@XxJ]bK#P`%!!A73' );

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
