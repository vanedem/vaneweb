<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'vaneweb' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
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
define( 'AUTH_KEY',         'l3r~jB?PeIfvHiq$2*a{iltF3Mr-zQ@/ABY,9UY>!UPOIF42FH,%dHK69EG#6VCh' );
define( 'SECURE_AUTH_KEY',  'pm~NxJRRZ{-f`,CvEE[~D5s]cODrn[|q&o6co~[T/nT@4n:;]r[#8Q~ +!CD3^[<' );
define( 'LOGGED_IN_KEY',    ':sq?gt9D&^x#t/Y=KBt0lULU+CE^Hl5l|a79*B>8:@^#&XXKso@_Zo``4T<1 P9P' );
define( 'NONCE_KEY',        'd;}}1HBtR9FpV*_zHjI]{4~ koeq/w[ZIH]Bb 6Nb}FsI/BiU]#s2F>G7t8tSyXF' );
define( 'AUTH_SALT',        'f=*hq<ys6T>w#^+P7kz/So6V`b^)iQ[d9eeLJY._)i~X}KO.`JXc~CFY/NfbnT*:' );
define( 'SECURE_AUTH_SALT', 'cI2`)P$LL,HZ98>4d[_[l@r3^rtHD=?i+c$G6wD071~V}Sz%a``ArCC-xuTM`>Wv' );
define( 'LOGGED_IN_SALT',   'iS]Z;l8o<?6H0.P8`Uy^`#1_3d`nX7!mp96S-2Q#jO*[SsvY.pb3$-j]@k^x@!f;' );
define( 'NONCE_SALT',       'ezq,n{u>Iu=YhMZUU|ZFQ4U)t!{S~i,RkmApHZMy@D6y^!-/o j~}0E/w,^^Wl&{' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
