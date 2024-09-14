<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'divtest' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'MySQL-8.0' );

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
define( 'AUTH_KEY',         'gxOsw>Lv,0.g^N+cn>v*>$P>%^<zs7mGeToqnQRjN5$Z1W T$4o{yDxw7MX6Xwf^' );
define( 'SECURE_AUTH_KEY',  'Trzf*?{0X=(HZ|{S-&SGgoF^Xxh-X/M)Tie]S_lCA>9>i1khe%e`$d!:lfwVFO*x' );
define( 'LOGGED_IN_KEY',    '[jy#qvW/wU)5eG@SU,tU0[~y9([u?acj9C8]cz%8c[Fof6QFFu:8#MUaup^&:]_X' );
define( 'NONCE_KEY',        '#!6mZAPB8PmHMIjwO2Uc,Yxm::9d}2f4R*l{>8bw~kN2{>y#G-H2$D_z3GKtdJTe' );
define( 'AUTH_SALT',        '1CbqopPz=[Kfg/HacO8]qHVPczd2SB+^I$RX4H%%OH.ww-3O?hThSSJm-oC0L}j?' );
define( 'SECURE_AUTH_SALT', '|Ip9[}*9Mh?.n6l41(OH??!%]h-#.Wq+`1dGIMayB9&I%6|;C!!3}^yH?uf`)*i<' );
define( 'LOGGED_IN_SALT',   ' =1C1#h?QZR30LpagmOJVelcAN~vC)DZkaM%`c$_^oc08QVi/a7V;dBF)HQnujLU' );
define( 'NONCE_SALT',       'AL&}SJ7`wc_nBglDY|==soJxJ1Em:A<%e_yMfl 7TH+`u923]j<Gr)0~%dn[|yw ' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
