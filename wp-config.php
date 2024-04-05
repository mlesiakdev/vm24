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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'viamountains' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'UPLOADS' , 'wp-content/uploads');

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
define( 'AUTH_KEY',         'GhE+Duq+%)Ib}B3Fl2KZw dV4ZM]!.t^j`s |g$G&di$n4Gz%fQ0bpBcE7=YI.>T' );
define( 'SECURE_AUTH_KEY',  'HoyA:`zWA[GqRT:Pd?Iv-3ct5Hqcx|2PaH[0okWl=(jV)Fu_VT=<MaAR%hRX,oQT' );
define( 'LOGGED_IN_KEY',    '((<I1M7;LhlH$>FQ*BoOR/$l^86h/X4~:/,aLhszuA`R+.:l+>.%AM)*N66RS2:[' );
define( 'NONCE_KEY',        'tStk~X`~0]2+wpzlSE|Bn>qVJRnA!D~4,-hR#?*xmbZ?8M/8j+SRhaz+vJ1r5z82' );
define( 'AUTH_SALT',        'Aifll>l-wO[6M?a%x6x2b_];/}!>TmAhjG$AAtEN)i@1:Ov<^}~pL%!qG^&nph.S' );
define( 'SECURE_AUTH_SALT', 'wP-b0p}6zo);c&,%%{ADPmj=0G?1kIIp%0q.+{9}g3jq@~g%v3_0#@8P|&g>gZRi' );
define( 'LOGGED_IN_SALT',   '3w`q6*/;:(~Xc+b^O[ZtfG#kJ!-Go|4JI<wqv>Zpx=nON{#8Wa??uUrn7+0>1e@B' );
define( 'NONCE_SALT',       'OmvW=Mvxm%][]ApK:{U74Owh$tKo|kw^)vVc4PY^-b)xKL7(vT>6}83 mQxthiha' );

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
