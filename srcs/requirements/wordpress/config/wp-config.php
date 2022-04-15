<?php
/**
* La configuration de base de votre installation WordPress.
*
* Ce fichier est utilisé par le script de création de wp-config.php pendant
* le processus d’installation. Vous n’avez pas à utiliser le site web, vous
* pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
* valeurs.
*
* Ce fichier contient les réglages de configuration suivants :
*
* Réglages MySQL
* Préfixe de table
* Clés secrètes
* Langue utilisée
* ABSPATH
*
* @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
*
* @package WordPress
*/

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'database_name_here');

/** MySQL database username */
define('DB_USER', 'username_here');

/** MySQL database password */
define('DB_PASSWORD', 'password_here');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
* Clés uniques d’authentification et salage.
*
* Remplacez les valeurs par défaut par des phrases uniques !
* Vous pouvez générer des phrases aléatoires en utilisant
* {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
* Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
* Cela forcera également tous les utilisateurs à se reconnecter.
*
* @since 2.6.0
*/
define('AUTH_KEY',         'L#kK=|)AD0Unyu)KA~/fUBUS`%5n8@$;F-t#y}+=C$(,*?/!cv[ox$d>GY8B=C6 ');
define('SECURE_AUTH_KEY',  ')37Bge7pz,Iz:6%Q}$|25;@`Y4QaxiC,o6VoTw3^eWhB|8|6`hCAdkXI=6X4RatD');
define('LOGGED_IN_KEY',    ';>ie]H*wjmO^/,~*IT>8T/DnUE~poL3`F#ZlsaM^PgCtS#+=A8bK#H),hsKAyobk');
define('NONCE_KEY',        '{GeTKo&Fsf09eaHr&`Ud 2(n+ ;S`<Kh;BmitRv-7)Xf~o`uh?DTODn{erK;u96i');
define('AUTH_SALT',        '^:~P,%E}nF<yx*zp/CHx%afk^|5i[s)RDzFx{Vq06Dh-A&$nv2t#;A?d6r/?h.!s');
define('SECURE_AUTH_SALT', 'Zes+$~=m8Zc_jz3N]j(Hh9T8* 9dh9S*0_cpR6A#vw(fuKAHL-CBr-(zlrQ}+.zG');
define('LOGGED_IN_SALT',   '|c(fzHW*g Ml&A C+N}]ic(Ki.m#P$|>s4TOG?9?5n+rU5;y<x%rg*mc3B;oS8-M');
define('NONCE_SALT',       'w3dOyKjv/VLe-N&:JEeL#5@1^0C%zH0wheT s-|L6_oXdfTV+@:27He4@|~sSo/U');
/**#@-*/

/**
* Préfixe de base de données pour les tables de WordPress.
*
* Vous pouvez installer plusieurs WordPress sur une seule base de données
* si vous leur donnez chacune un préfixe unique.
* N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
*/
$table_prefix = 'wp_';

/**
* Pour les développeurs : le mode déboguage de WordPress.
*
* En passant la valeur suivante à "true", vous activez l’affichage des
* notifications d’erreurs pendant vos essais.
* Il est fortement recommandé que les développeurs d’extensions et
* de thèmes se servent de WP_DEBUG dans leur environnement de
* développement.
*
* Pour plus d’information sur les autres constantes qui peuvent être utilisées
* pour le déboguage, rendez-vous sur le Codex.
*
* @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
*/
define( 'WP_DEBUG', true );

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );