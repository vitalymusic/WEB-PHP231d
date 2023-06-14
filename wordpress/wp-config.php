<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_2023' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '}YZkL,{em^fKk]]llv[bZ`*w,lSqPRT>nQ&2McqH$&|r%}y7sG8S-T2tvl`9YxlN' );
define( 'SECURE_AUTH_KEY',  '`tGI~$C3s.NC_{-RM}]mO.dg~(S73,6sMOK?,bEN@z}Sei&EpVlT0MW~]Q1nJa}T' );
define( 'LOGGED_IN_KEY',    'c,r>^DWrm<-Kril.n.:N,496;W#Y O$0j0zdYN9<eGe}1-v1ABf%by6lz8xG$^,1' );
define( 'NONCE_KEY',        ',W+TM[^1IU~|]&MHWVkx%@/F=wP(~,y[mw~e^bw[%@ D,.z&k.<JFryx!p`t>w?E' );
define( 'AUTH_SALT',        '6Ow{@UdYS-h;;up1:<V|C@Tt@9;#mng{r Gi0Gfe(QZ<^,|nJn0+( X6qs/jU:P>' );
define( 'SECURE_AUTH_SALT', 'n46|QWS<*,q50xZe5_yPq3UQ)^34bp-J9i$r[B=g9Xo?@d_5bmDe[%^wSnSTah$p' );
define( 'LOGGED_IN_SALT',   'aX`H.*oP/!(QzSoomGtA%Fd4%:w0R2_)(v(OlRtU9tk$IV?.FsXj_tsb1<Kw,}g[' );
define( 'NONCE_SALT',       'N#|(jTMU#aMW{-Dm4v<M+Wt^r#siVv@~nuk6wC7.@W*a[~rI|ettvjZ6krAq8J<.' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
