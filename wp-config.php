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
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'XU(k7uEtJGV#9Ih3R/*p/tT_,N$~,5KilA1jqoYr`nf$.3JRg/LdgmC P{]iNzFR' );
define( 'SECURE_AUTH_KEY',  's?,y=Ns=}ih;h UUYu9tHXq=hw)GLbAYVM`sK;D%K-?~e=z)dE!1J*z6+49$z_jU' );
define( 'LOGGED_IN_KEY',    'ck<cln[Ks[vkcx:n30w`Ta5)C(t|.wMQMhvcjlb37{&N3>|19xdFB*0t23<it6oZ' );
define( 'NONCE_KEY',        '1}WLiZk3c]l3al@3Ysu+~V(S:PaKk@zpDS$UAB*;WX1<)Y]~U$qT jUz!&g,XPai' );
define( 'AUTH_SALT',        '?e3!YEfdpklG;Wr( CXU7_3o`lvh$ 254kK%5Ox{|:37Q;;+GI|*zlnj5@G>}9aP' );
define( 'SECURE_AUTH_SALT', 'AWC%s!{VNJGC}P5C=al-&^-6FH.!sy^-AsmiyuvV.v|kV1Nun [?9x^t.-!eG1KJ' );
define( 'LOGGED_IN_SALT',   'gfbzeK(!g=8:C`3-*cj;*+Ol_OCkThtb0&=dZ7ErDr}}MGFKR0+(ix[!HIc2tH,^' );
define( 'NONCE_SALT',       '}7= R5}CY e0fKH5SD +39tCw=mav+2kn*-&QZgwW!s%?}`18Q$26j`}>dQ0g=3a' );

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
