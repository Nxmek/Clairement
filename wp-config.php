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
define('DB_NAME', 'clairement');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'DFu|?rW25SMNu|(m.x-E~8^o4r?VbwnZCv2?&%,C A!61 I0YUf1VTE;6zBHC^Q|');
define('SECURE_AUTH_KEY',  'Ebe;Uo,??L$IDB?;<e!5U&J_v18Zu %!}-;}agIf#<QuxAE@N0?G!GZvJ&eWn%q`');
define('LOGGED_IN_KEY',    'Fsd{Ts?|; `0s=!E9y1fRF.P<^}6UbwmLHKVQZ3v?Fs=b(j$+xUTXUivHukNZfC<');
define('NONCE_KEY',        'vn3*;u~832w#H;]!lh1!fZ,{mQ}3~TG.V;8l?pClu0UDk|Xx@nek>Wt|wwTx`+c}');
define('AUTH_SALT',        '$+O|JR3au=9IBQpd-$e_!)?<S?Akv6jp.O%R`-L/s{A/=C*Dt#/MoKb>PFQZ0O/4');
define('SECURE_AUTH_SALT', '&]uB3P)$g=^j@:f,SlJa2W_>Cnd2(oMkN>,ceK+k?m^0;d|%E2FqLtLdJ?RTmT@$');
define('LOGGED_IN_SALT',   '41[]Dj[i83kuvW<[N-+X^yEu[^xZfrPR@JCs#}4emsd%rrfwJ|iu#-T2ug^bqNVO');
define('NONCE_SALT',       'w~T8cmed;HlEJ=!XuXYT:+T0vy^j^EXP`h^96VXy[sxinm*oDAi{B%qDfvgwzK*F');
/**#@-*/

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
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');