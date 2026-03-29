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
define( 'DB_NAME', 'qincaiai_com' );

/** Database username */
define( 'DB_USER', 'qincaiai_com' );

/** Database password */
define( 'DB_PASSWORD', 'Aaqincaiai2024@@' );

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
define( 'AUTH_KEY',         'j0kNp!e5/j9T:J1l<#o!*A)X94X_>_`$4[vAZY*L(|#0u2|^Mwyo?ks AtYk]GIx' );
define( 'SECURE_AUTH_KEY',  '-h8sLC$  =^e1|RZ}R5[_3~,o&O5!wsM&j@_g5Wr2Z9SN!,gN8/W0uH{g?<P{KU~' );
define( 'LOGGED_IN_KEY',    'LkZ4N0(`BK)?](0I7>huw(L$`jpz~-aqEayh>k6(^T(hkXw@$!)vg<Jy^h2Q2PUd' );
define( 'NONCE_KEY',        'M=Sk}nLCZ94ArS;j9]I^qkKPDl|TqEHi!;4HYc[2&hhg#yCwhT/jA&O!v$h7%K:e' );
define( 'AUTH_SALT',        '*YX}Bk8u<)#l^Ospbub8XTzu_:C@9X2rxIx=ME7p<L])yZ>tp&Q$69W=|Cc9(s%9' );
define( 'SECURE_AUTH_SALT', '|o3A9)0ir!)_[/KAls$ph6A3kf0wR6b/3BpxmfH4MUOWQjG`3}(5,FwPxI32.iYG' );
define( 'LOGGED_IN_SALT',   '38{M#:O&:fx0&>/MAw7XrT2g/U>P|%I2@Cko_^clumb`<kqOoBo*]KZzq;NqfLY}' );
define( 'NONCE_SALT',       '8e5P4xm~/nutSaY$POEx(<zvwJt.T<i#o*%GWn#SIn+IaTcdkPpk1/Tkg`68REjy' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_ming';

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
