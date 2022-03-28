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
define( 'DB_NAME', 'lucas_arib' );

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
define( 'AUTH_KEY',         'SysBWJd@L0o;bA)C~x,&C|PdI29=!Rr_DDW$]crCWd[sEH_GEf^~/$83^bPj}M@-' );
define( 'SECURE_AUTH_KEY',  'ZXza7sgZ4`geO!VrLT>22Y;j:?>]J^58cA_H!I2nQ~/Jn|M3e0He<#McEivc*|z7' );
define( 'LOGGED_IN_KEY',    '#)F^?QcgRq9~;#(mC OLLminsx*3L:o{m*F,B1AnP><_m?@{ooQ2Tz9f8JR z;A~' );
define( 'NONCE_KEY',        '4ax{|J25Byycn|VOz|%y-(EEkhQ|pC&kCUnx,QE9#{fFO3-z}})&r,2@bLA1VV3s' );
define( 'AUTH_SALT',        'G@-PZIU;F,eeU~X;Ej]LC;++cV4C=>ak6CEpc:22u!hG8&sJa3/:Q:&58k{Y@a/H' );
define( 'SECURE_AUTH_SALT', '*bJac>(v(axq`jIyPR6WNq)^jiCTLXY_ujQ92epH+vGvT^H_(M).3O73zbOmD|s|' );
define( 'LOGGED_IN_SALT',   'Jf^0u%Xy)--1/+uBet2>Z}b0jmZmpqDZ*qB!?ke{+xl9~qOnI2[6-Fo?!c>o$(;i' );
define( 'NONCE_SALT',       ')^1,M/;>Sb;1YMB(Sa%ii*v;0 I/!TZmI`CeID*rdF~E)9~H$0)pv,#uQ<s!=o%}' );
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
 * Il est fortement recommandé que les développeurs d’extensions et
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
