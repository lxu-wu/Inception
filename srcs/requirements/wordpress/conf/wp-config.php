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

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', getenv('MARIADB_DB') );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', getenv('MARIADB_USER') );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', getenv('MARIADB_PWD') );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', getenv('MARIADB_HOST') );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'g8jU1UG|-z_T;PL;Dj>[MRM lhUz,$*hyMZTf@6J@7LE551[$kg[:z9Pi,PZ]+lq');
define('SECURE_AUTH_KEY',  'QRx+e3F56?ul3< czuBv&d<_%|T-%=QvkO,n_4b~:*SU_*+$dcucZ.B%J1Yu<j`D');
define('LOGGED_IN_KEY',    ';Ge6Eb[oV vDQ$#%jHB-9%*=U+Lb1>ciSJ:Q5@DGLq>%t]M#Mh8kMV{~S)nD2FKN');
define('NONCE_KEY',        '.f^@7nN[,K/KP F_Jd-bl`?PsOmcr0{*8bNmdXaMS]Mfpc<5)]%)>_r86jm:Xs!=');
define('AUTH_SALT',        '{y9M{-[-!`muu^nG*I~mq@rkS%Mou@{>sh}K)dMjTLRUyppp[zX!Y<ljUIVXRca+');
define('SECURE_AUTH_SALT', 'k~vw+=+ 0L@)DD<sXy.4%+nvc_*p(o%m1+X%;zbQD/Tx>YHo_;W(<>V68b#P57g`');
define('LOGGED_IN_SALT',   '[Jk-/SYHm5LmR9@nYsNc:[~6(JV%TrykF5zkt[kabUFEtPm@;l)-R0]Zu*:F`pL.');
define('NONCE_SALT',       't0$kB{MZ0I-,8Dv4G{KmVmI|.)`V]cH<{Apq$uC-y7J+Jp1-+maNi9/5gkTA|}#;');
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
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
