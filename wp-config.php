<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
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

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'BD-cfpgetech' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'qi*(2r)+5%&x9!]KY&t3ON#S+V(]lrykAr:aYJV~L$Z,]N7/=wlg}mYQ`DScfq{]' );
define( 'SECURE_AUTH_KEY',  'D:BEw5 t[Hz1 5cz{rWF^lIjN%EUAzP1X W?P ,5PgoN%(-!f<>-x$.@mz!![.8v' );
define( 'LOGGED_IN_KEY',    'a/z,ad:.G7f/X(RitGfBKN&E-t^;a`sHXqG?VOv-v3Tu.&Z,Teg (?!wMLCU;+,d' );
define( 'NONCE_KEY',        'b|MQ^tJ*GX;Hy5zw^HAA[moSy:T}/XLMmg|60ycO?KL0/MdeZ1`+[zU0 a)vN:q3' );
define( 'AUTH_SALT',        'GJJ=?y`n]s;DpM;b9#Ek/0~VQ$Y+cTt37x>Py$X0n4~Rr,$F=99rnb=fi} _SzY^' );
define( 'SECURE_AUTH_SALT', '8Vqow%!w*ZRC^ ZT4FOloembNg2#w+7,%<+=c^n5D^$>3}xueswHL{JmeQ(C.Cg_' );
define( 'LOGGED_IN_SALT',   '_5_sQ.D(F1&I8p 9R|ur?Y=AAE8</;4WKZ[Jiw?#Cq`)e|p9%$jej EWZzCfTCj{' );
define( 'NONCE_SALT',       'cM$PO6|r+B_sZ?[ tFS#m?xiy5,LEb]9}9^4F~1MTN3}-Jx?y+y{8J|iX6!W~eS^' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
