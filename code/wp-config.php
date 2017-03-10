<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'toor');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'mariadb');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'UFg50eJGK!k!6k8(i)V;SA(O/*LP]4a-~=;H~Z#b/6U5ji$0Mi{5HQwmGt<L7Gn:');
define('SECURE_AUTH_KEY',  '+j7V:rds{I:6+>_t/Z0|H)|GY|?u?LP(ZZCNSA-~R|H]WDw47NvK76JukOL)r2lN');
define('LOGGED_IN_KEY',    'Mqm5EMxLS,uIvfs;})(zf(.[WW=/$#Ce2j9RCcz3URug0wbX2H)+e~|K2Y*#FQ4!');
define('NONCE_KEY',        '^,%_]BE*?f2%gF<}pRO}bK&|,TR3%)d5M4Wu<Qus1/GaK7+--SE->3y6}an@Z_bp');
define('AUTH_SALT',        '9VP5=udspl 8Mdne7Jfja2jwBfVgXLJW#2 CE{H#KArT>~!vE|E3*-G3P?PhSaRE');
define('SECURE_AUTH_SALT', '-9|-YY]}tMK}/Kp%iT; a#zp~Ly.$K.1_<EWa5>x~KZ<@-mc#*Z|a_! vY,csV[C');
define('LOGGED_IN_SALT',   's+E;#qwU1JrB+GA%j|x4s RWTsoOKexCQzpXzuIqSG+5q(jdVNehk&)Cp_CQt+tQ');
define('NONCE_SALT',       '}ziaW+Dz5w8|A1NQ;1>$0f8fT`r($kzMTrHIF%d}([r{gyS?{r,]Lsg[IOzp<o?v');
define('WP_CACHE_KEY_SALT', 'trg2rtg42t5g42rtgcr2thvtkbuuuv24nn4u2juiksdwad2dxrfx2iln2l2jk5j');
/**#@-*/


# Redis.
define('WP_CACHE', true);


/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/**
 * The WP_CACHE constant is used by WordPress to load the code that serves cached pages. 
 * Unfortunately, it is set to false. 
 * Please edit your wp-config.php and add or edit the following line above the final require_once command.
 */

define('WP_CACHE', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
