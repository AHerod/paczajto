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
define( 'DB_NAME', 'paczajto' );

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
define( 'AUTH_KEY',         'f($ydwS2BZp`lk%t+ZtVE0hA)j1Tl5zsl:3r{ONUi6@%{KFx:`=z!{jf*}RYOag0' );
define( 'SECURE_AUTH_KEY',  'mjyEyw-GGH>@ebD+Gq/dLBfqpX}p%JcN&9Fg#y3/1uh7!MD2?8~67nP5VI?FvL/A' );
define( 'LOGGED_IN_KEY',    'j/3^WEY<p<>nUeQap0^&AzCzA84,/50P@BUo]|4.T7EVa=WIqgZI~A>P|5K4A f0' );
define( 'NONCE_KEY',        'UlzXaM/*FflR_^JMX`c<M[v]1>UE.H#Lb%_`9mgWEg[KU ,M68dud*|6us~v+GV2' );
define( 'AUTH_SALT',        'e!U 9U1NZgU)]9X~RWC4.jF,YZx6VuJQKJ0&d}[.RsRL>JmFW1tgTb!tzf[Gyv&o' );
define( 'SECURE_AUTH_SALT', '.2BwR^4Zej[[(dNr$V$.3a^r2TCjCzM%9)-jehbzuB`]xV&eVoR%TvJ[*#|GX^_c' );
define( 'LOGGED_IN_SALT',   '@F`6;^&BOneJc,rb|hr2k.f]4p&VS^Fg&5>tm6W_LlDp)$o0s~cR0Dx2<l1q_IBW' );
define( 'NONCE_SALT',       'salK:[Rjxk2mhQT{a|A@Xhg!Ic7I_(]=]!+!Ognp}7]l3pv4qKuqM81bumyr`,OA' );

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
