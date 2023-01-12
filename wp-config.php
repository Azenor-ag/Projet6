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
define( 'DB_NAME', 'wordpress2' );

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
define( 'AUTH_KEY',         '}udpd+I+fNs%7*C`}g4oPC(kJe=:,R:#lk<8Hf.tH+M5Ty4ZX>Gl.8lGs7V[m>hP' );
define( 'SECURE_AUTH_KEY',  'Pos:H}/.xM>Nq<n}rh<!x>mpF<_~4CQLG[p!q7B#1W9saIXCEjP-&=B8R@#@80|8' );
define( 'LOGGED_IN_KEY',    '`@2#F6&ClO@w=)FOHtN1L:1X8B}ntQvm+gPB%Je1J%L|NTMaTT /r)5/Ps.4&mY[' );
define( 'NONCE_KEY',        ':^6yn2dKasqB^Lx}rzL:U/48WaE%xF75<|wiX6L)XTbo+!/@j&O2e])3zU$xRCuT' );
define( 'AUTH_SALT',        ' ?xu9e9EY1z4+L-F]iB2g(79N?cV@_nVjg5M:!NzfjH55CAT?TAUgq#oI=ZvWTk7' );
define( 'SECURE_AUTH_SALT', 'x+]]xQK.`&.UW*J}3kB?KLC]+,d4j7>Uojwo[8zm-?hr!4W?-GaZp+mSEW%#JFN)' );
define( 'LOGGED_IN_SALT',   'oB[W%YnZ*A!%=0EsB2Rm#x$b6Td_,c]/ yv7tuLi+ #K6(`0WIb;?EF+?D0!hg>0' );
define( 'NONCE_SALT',       ':HI`(yBDV!6#T ?nDEqFC,gF6PS?Golk3U..=F+2N@.@&6pRh$$#YKyx02Tl<z?5' );
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
