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
define( 'DB_NAME', 't5_room_occupancy' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wp' );

/** MySQL hostname */
define( 'DB_HOST', 'db' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'M}PoH9gEMMULiAG4^)hbj?d/vMeevP7?UM*9KcF;d?4CHt/`pPbxV4P8B)}!N u=' );
define( 'SECURE_AUTH_KEY',   'OPdtn7Y`3UuR(8]c->I>Q%C_,2b[s2dZjYJgLja.]zoRqJH~{QXZ0lH$Vc&jvN;z' );
define( 'LOGGED_IN_KEY',     '29i%E$ufJWhf@{C{=}%D4=9W;vP1h<Q8!]h}jS-.NirSbU1=KX`7TT.^},2PF:kC' );
define( 'NONCE_KEY',         'iYuB,MY}PI9(ZuqNGG8:)K*T<`f??{rQU66vv/>vKT]]FzJ7{%g.(3;eG%Zon}MR' );
define( 'AUTH_SALT',         'KyX@$R(sJ {^Cb^K>/LLbVp^]ms(bC-jYP^Nb#/o[g40V6t/:8@$eHa%-XShqox]' );
define( 'SECURE_AUTH_SALT',  '!2eEcVd _g=yCcDN5T#zW,n-C,zBdRRovqr1cXVH|~SX2QY^6NepYqfz<JM8R@d=' );
define( 'LOGGED_IN_SALT',    'av*A_$0IXQs}<~.D$yq(]YEK3@]cj(3Lm:2fXH>&3LnouA|/D&el3? VEG?Blq*z' );
define( 'NONCE_SALT',        'EN%y!)DZPc}x2/a:cs6D)J^``[w;b2sTNMMfJw`Tx8T`5db(nV6ZW-qkwJ-]B<Au' );
define( 'WP_CACHE_KEY_SALT', 'S oXaY?18Fi8 p0qax1!wv8=^a-k`UxP%&Vc{5{m<*Yc|Y9#X|TJ/V69[[v&|+q+' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 't5ro_';


  define( 'WP_DEBUG', true );
  define( 'WP_DEBUG_LOG', true );
  define( 'SAVEQUERIES', true );
  define( 'WP_DEBUG_DISPLAY', false );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
