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
define( 'DB_NAME', 'testdina_db' );

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
define( 'AUTH_KEY',         'azN #9_>fe?n<BX4P!W7U??qMkGxEb`9{?x3?R?Zbv8 VOBJmu{W[R_d,7nlDtOS' );
define( 'SECURE_AUTH_KEY',  'X<Fa}/r(bxlop3UUcRMv+Av}[HQ,YG%|k6 Ju]$#@K!nAX<>IUd *ssDx,T/Lb+6' );
define( 'LOGGED_IN_KEY',    ' aSOCh2eh-oCGm@?@d7)Y38L*3s>.lb9S_W=4*AF94D%Y2lw1B*>fu[zO)u^vU&1' );
define( 'NONCE_KEY',        '+N8jy7<I|D^ qztD0`%3t$)MU~b*~VmV$FAsL7B<nJf )HjV?,a13yk@Re.`5`*$' );
define( 'AUTH_SALT',        '6rzi e@7Q&syJlrC4hQXv5H}/W7L;(pQ)9{8!Va,Zg=iymjbTkT03|V#g=`io<@8' );
define( 'SECURE_AUTH_SALT', '`hZ~Lx[rI7Lg+t#y{iwc3;<k7eFd-NQg%=[i5grQ&zuKP<!|PQq!#%!I;MCL0h;.' );
define( 'LOGGED_IN_SALT',   '2_Pfxr0=aC,EA8I5AC0/ME}Jl-(H9ZIVm4%,AZz%q3_q=A_A4?gC>RfQIOhUS1Bn' );
define( 'NONCE_SALT',       '^Lk_f^<v|6WiCig`w~aYzwdoP4dRSQN2<GmrOn];HOc}v~1z%FZw~R1}}J<bjPL^' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
