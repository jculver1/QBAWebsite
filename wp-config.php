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
define( 'DB_NAME', 'qba-website' );

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
define( 'AUTH_KEY',         'rG.^I_UcDh6<QQI23t&,fU1fIYVD&<~U%c<)aw:uHZlE]n@Y:Z~&3p:q8=gKo]h!' );
define( 'SECURE_AUTH_KEY',  'yI>XlCpO9@w;l=QVC33eg|ZnL@.0.Upx&l@m}EUU>5Ul=~!^?ucLb.}cCmN?n4Ur' );
define( 'LOGGED_IN_KEY',    'IA@%X}Rxs2NCrVD2.QQDWW*,),,KHRcO?hUmaJgVrxBGP}S=&l?yXp.yR!179=W:' );
define( 'NONCE_KEY',        '?H^!EwY~S|CEDoBh;KPO|9^!k?Q}JM,7K-vU]U<jQFx!TT2f,WM{OU%x[[G5CvOv' );
define( 'AUTH_SALT',        '}cubSWR2^jtGg^~8fc?C[7nsc?dHA_#vg$GyS5AKwFDsV}^<CR=[c7$5;Zv-ATYo' );
define( 'SECURE_AUTH_SALT', 'rF?vSq;I(yiR}c+u hsyL c0N_nS[o-Dvs9jg_BB./pjpSMux~urAh]<Vj8AdCv0' );
define( 'LOGGED_IN_SALT',   '7]bQ]k9C;91q@c(@;~bA1Cm[toOlmV=F}UEUA;#ix15?FZr ,WjjXK~e.6xqz/!H' );
define( 'NONCE_SALT',       'Ww+!*Wi_;neYW)8f//u0q(<![e~(P 3rP,UoZ/4bqWddrn^XS;QIrTCblJGbT=i=' );

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
