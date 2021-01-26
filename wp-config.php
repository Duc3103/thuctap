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
define( 'DB_NAME', 'thuctap1' );

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
define( 'AUTH_KEY',         '3JT$;igRJ`(j*=n~x}X}497R;^UmLa+L*.B?#t@/58%I&.juck/*7CJ(Aa4Pxxw0' );
define( 'SECURE_AUTH_KEY',  ' $1$@Y`!7Q }o,adHnAnCJe-75W=%1se9Z2n0k>y^AO*PgY.[ijHtK@pS(/IS#7 ' );
define( 'LOGGED_IN_KEY',    '$rXY^ZQ`}Lh-E69+Uv0myA=yDm_`cKy$y)amW.`Bw>8MBuE%@/G/=eTFeFYO QFw' );
define( 'NONCE_KEY',        'DLFjSi2W>ZIfBnxVn<>Sp/0Ao/1.+gDS?|^fp9/rz*MufY6!q ly[dNmFDm~ESh7' );
define( 'AUTH_SALT',        't]<r;NO)_0}yyt3,m7/qbi-9%C_N3<tp3`BRg(%et[hX1;P#8D2dE$cN<?`o-C(x' );
define( 'SECURE_AUTH_SALT', ' A/Jidm{2d$MEnrJB=+]}-K$HUH|TM<-lgx+>pb+FFBLZyQ*[85=X__kQo2zd+w$' );
define( 'LOGGED_IN_SALT',   'v2y`?1E5Pb|auedR8.2OJuo00l%>nxNM1=bxJ;:-Nz;*I}wL@7xJXM}XTYGj3Y%3' );
define( 'NONCE_SALT',       '1PC59K7^4?9;{}O~L[]3M~$5,clg_Bu]W3e*WpQ_tg$(H@[h!O-EQ%K.*+[I4D2R' );

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
