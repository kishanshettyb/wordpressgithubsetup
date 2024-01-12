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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'githubsupport');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');

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
define(
    'AUTH_KEY',
    'O2y~~g?|4U%Sh].)A>!{7>2-*$|c8%@2>R-)~oZZ1wE=Aizp7?o0^A7js#6B]&&d'
);
define(
    'SECURE_AUTH_KEY',
    'P }Rg|K|,OL8b!P5IJw7YFI)phvOmxcUg1o7pL*qJ=:!!M?z@?]ud[$-F/BLGN~8'
);
define(
    'LOGGED_IN_KEY',
    'l:W^4Y-N.YwYsX_eeLRR&MXRo/azV)b%u;0z^@+-61_.r ,;M lz(CpGrq-:i1)Z'
);
define(
    'NONCE_KEY',
    '381-D2?[kxY*Cw8=@6M(cs}zT$fo.v>x/*MNv?<iM4j`jxN~>z<X}B`JxWd(}!:)'
);
define(
    'AUTH_SALT',
    '20Qf_K!bQ&?Ta[sf dP9Xsx-*K57Uzk>tLmz}+Xw^eL_B/&&E?wwu+:Ia9Sx7f:d'
);
define(
    'SECURE_AUTH_SALT',
    'M@M[Rhq(tyikb!u(G=+<o!Eti&41?Y$nE,d!K912O*65?MBK6Ovd}9,@${R!Akxb'
);
define(
    'LOGGED_IN_SALT',
    '6?(U|II1`K6PD=#3LRj@VsFr|7Tf /,<OTm%j5*hZ.mL?p_:`SyNE.4^$yhqGr%D'
);
define(
    'NONCE_SALT',
    'n+Hm(OCv6n(Oxf)ns,>QP7AB)UVs+{z 5|0}Nql_GJ/j2LJ;#VsH@gPz.-81jV .'
);

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
