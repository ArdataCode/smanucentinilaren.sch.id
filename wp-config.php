<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings

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

define( 'DB_NAME', "websit19_smanucantinilaren" );


/** Database username */

define( 'DB_USER', "websit19_smanucantinilaren" );


/** Database password */

define( 'DB_PASSWORD', "Ardata2024!" );


/** Database hostname */

define( 'DB_HOST', "localhost" );


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

define( 'AUTH_KEY',         '8:k|^]lns[KU%][n+H(%N;&Z87ZE^s?Ziqe1bFWx[G*(8^&LEb:.^VvxFb@ >z!F' );

define( 'SECURE_AUTH_KEY',  '^{mPO.wwt-_VuW!4H.1|uMNhK>6q@.lLt_ :y`%WO~#e4I?DR7RW5x2V!tWqyRPN' );

define( 'LOGGED_IN_KEY',    'q3:70z*4yZ2Y~`tu9_V5QbO*jlN!z|/aVu|/JvrOxn<8.XE 7X^FBYG|;%n[5{:@' );

define( 'NONCE_KEY',        'gb=^76V/To#oZne]}%,fG;LC*oJb$ zAW@LgM4NF[X_Yq>MsEKo_yE2;Gt#`WiI6' );

define( 'AUTH_SALT',        'm@pv :HK7j4p;R O4H2%X7Haz`9Juk8^T:|eS;UGNigapz}0h-]rXJ16BQ#FFKw-' );

define( 'SECURE_AUTH_SALT', 'W6@,fK!U.c%m:1e@wv9q4N/p*cE7E}Sfw+uj!DXj.6|(g=lG&Ja!P#K%u4JOP%=1' );

define( 'LOGGED_IN_SALT',   '`5qMZ2mc}phFj-BNI#Q.P=`3D;,|VC+~07U^jTr}YF!5-~6LRm+u.:yoA]-yqy^k' );

define( 'NONCE_SALT',       '12-_2tP;2px[P%_Lm}tB;T3TG8T$%Cx)wffA#THix&+)HT7{mastfR@L9&}yrpYd' );


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




#define( 'DUPLICATOR_AUTH_KEY', 'B>%7XqIh#SWQ[}%p$M~sg(Wk;BiUrCKk(3:|WVJUn~IO:w876p`Uj9ePR)6mg~Hz' );
#define( 'WP_PLUGIN_DIR', '/home/u1567848/public_html/smanucentinilaren.sch.id/wp-content/plugins' );
#define( 'WPMU_PLUGIN_DIR', '/home/u1567848/public_html/smanucentinilaren.sch.id/wp-content/mu-plugins' );
/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', dirname(__FILE__) . '/' );

}


/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

