<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Le script de création wp-config.php utilise ce fichier lors de l'installation.
 * Vous n'avez pas à utiliser l'interface web, vous pouvez directement
 * renommer ce fichier en "wp-config.php" et remplir les variables à la main.
 * 
 * Ce fichier contient les configurations suivantes :
 * 
 * * réglages MySQL ;
 * * clefs secrètes ;
 * * préfixe de tables de la base de données ;
 * * ABSPATH.
 * 
 * @link https://codex.wordpress.org/Editing_wp-config.php 
 * 
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'deliciousMeals');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'kFSE<@3p4]BXfzhnQt[L20pJ&{1~{7-xY7xBw#)*nui6t3~H@-Q3<!Ha:*.^GU?P');
define('SECURE_AUTH_KEY',  'Y?zLB$d^fi/i:yZFgLoZRNT*sSziz|y.=@Q83}kVQ&@jyS@ojqsohR+-(#OXwy[O');
define('LOGGED_IN_KEY',    '=CObwW_KC`Rs9Qe*bbA(/B5I &,fAa=}r>l$w$5!B%s+3<xL(j#uo=f)+Oy9,kj%');
define('NONCE_KEY',        '9s|wdO70dK6g)`hIPA=1sJ-yQ/,P|=ydy>-e`-HeQ+I<88}mg6zF0)|_C9+<_.-^');
define('AUTH_SALT',        '}zra!9|X-8(}.tG!;L4.ZkF6wD?N;r<is2k^J;)T3k!([p<JfTdpY1P{_*:eOQ/A');
define('SECURE_AUTH_SALT', 'HZF )PHxE[} #8V-nCep7ej!XQe8;OhR<P@lkT3ohWrK+(|j5VEo$|I|`T!/tw-E');
define('LOGGED_IN_SALT',   'WfadQ#J5qJ:es_xa}3Jm*QAJM%8$|zD0@!3+x-DyJmnnc#pXn!_+H@I5?Lrw<8{s');
define('NONCE_SALT',       'cHS+>J33(v>Kim|z4xD;w;H9@?dHso*AH^&{*X$cis@+2Dq#F|W|s@$CA^#B`rwx');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/** 
 * Pour les développeurs : le mode déboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 * 
 * Pour obtenir plus d'information sur les constantes 
 * qui peuvent être utilisée pour le déboguage, consultez le Codex.
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress 
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');