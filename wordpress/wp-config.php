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
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'secret' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'FS_METHOD', 'direct' );

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
define( 'AUTH_KEY',         'CO:c?AqGn |:>!HP;J46m;rn!nOU$k/6;@QG(~Gc0y}Fv+$^v5vp<];t6/WzLLS7' );
define( 'SECURE_AUTH_KEY',  'jIb>}%I9+woQpN)A*ed}WxnVJ= gnG.K)wy5T>4oUCyk-,MRT`B9Z;N@4A<OrKs*' );
define( 'LOGGED_IN_KEY',    'C0+7x_BS6NelB`eWDX@D<0{CSi?m7jq@>?QVMz0Y6r)Y02Ix@y?Yzg?Q6w`|}V2[' );
define( 'NONCE_KEY',        'XOj79^5z+]qPKce18#1oIt`^`tj!=<wONr!:m4EM?j7^]Nsey6du)|LALCuZtyRk' );
define( 'AUTH_SALT',        'Ucgo+M5boDJ;reDP.zN3M0MLW=B4E]aKy6-i#eLd:AjBYuclY>Wnlss!(fi>%] c' );
define( 'SECURE_AUTH_SALT', 'P,{=8{) Utl=/3[[l*YHh#wi8/YuwmuaSPZ>LaQ]^BWOKP*{EfA*Z;VrW@&pS!Os' );
define( 'LOGGED_IN_SALT',   'Hj1t_v=0T{A]xpMdNT?3%[!TJ;}P]|BKmT^N0eug+at8G(MO9Tw>cXTijdhP`NCH' );
define( 'NONCE_SALT',       'L,pYjDxLy7xDm[IOah,LojnVTk9u&:=>USe.|?{~^g;9$B1HD5vf7+iE~SFP eIB' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
