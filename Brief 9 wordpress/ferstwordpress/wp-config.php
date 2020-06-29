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
define( 'DB_NAME', 'ferstwordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'rF:I9glM[48KYd@|~UniSpa)Gz~?c|lol>}LTFUW~G0nx#2;!iS7UjZ63vaP3!3]' );
define( 'SECURE_AUTH_KEY',  'Ysr~qUbM!b.p`K`acCh:CXM(pZXp#NO.9NAMDlWh^0XUe6q?+oX*fgE1HdJ+&^il' );
define( 'LOGGED_IN_KEY',    'A7U}3Mbi~d^aM?$-6aPDl=8ul23z3B|Cja-LH|3w1OG./l^ka4ow`0uegRZ%tz}O' );
define( 'NONCE_KEY',        'TL}oA#`XAx Y6v#AK6<[z(3)]P)O#8&F#b~nJhWR[j,Gns?fsP79TjlW8u~&COJo' );
define( 'AUTH_SALT',        '*V%]*(+si`AR;KL,Yq`TcLN,2.8ZsG^-VFd:<0qFw^9*K-X>]=$8Vu/Cz-po3%:1' );
define( 'SECURE_AUTH_SALT', 'S1Uo;CVI@^9L/g${9JhTq|*(qU*h5v+/.G#6#eZ- {c0@T)@7Mdq)7?m]z~mqmyP' );
define( 'LOGGED_IN_SALT',   '&[6uW5+,Z~8;MT.8Y}GBnO8(NL(y<`[kv$ZO[/O&N_uhX}g?8#-7R-_DcUa-,Rtd' );
define( 'NONCE_SALT',       '0^AEOF_5X ucrK3|d1A?6iQ8@ZTo/YcRW1Iaud&MwT4q@Qg3zW+Ko+d=h?_$o!`t' );
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
