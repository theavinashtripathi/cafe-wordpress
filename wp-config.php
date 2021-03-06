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
define( 'DB_NAME', 'mysite1' );

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
define( 'AUTH_KEY',         'u_R#;Qkn::bzz}{yT<xRCKXEgAnp[`fv]*$+Jw=Zrv&xW&/^Y?v&`5gQl0Zv({Lm' );
define( 'SECURE_AUTH_KEY',  'Sfg&e/#UaiGX+2MD4&gx@!Yv68y:RP}a}P]+D4m,yR[vjjX_kCw%h^QXE7^MmtJ}' );
define( 'LOGGED_IN_KEY',    '!??H^}o?>(yI#aY^q%q?F6$F`KZwt?:1wlSWgnK^v7p%:llq/r}UBZ*$EN!nc&l:' );
define( 'NONCE_KEY',        'Je<(fvQv#x0<yMvs*7M6w)~/tvV@-0t#wuVeyr$q7W1($iC1!vsL[`_eZP$Q|}e>' );
define( 'AUTH_SALT',        '6a5P~ZG*sWO0*RANQ`7g,Hx7&xRNt$&Rjam$8k`nD+,[%{([SOphoQXZ_YxY/PRU' );
define( 'SECURE_AUTH_SALT', 'H}`mxc1XB$ehw]WR_#TbL=zDL2-B0[K/w;+1^&e0IIfOsc,{r=IK!tS:`dPGKsiT' );
define( 'LOGGED_IN_SALT',   '*ZaM9gacZg}/rHXN9mg(ATPQ1(3m7(_+9x,eg^5i!Cu2v}[OWme!e?h#`McCtV*s' );
define( 'NONCE_SALT',       't-@uXT8D#%NT(k{s RDl@.48ygqoE%dCTsoKP@V_DJ!6u`:2`Bu<C ss/:IcSvEL' );

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
