<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

define('NAVBAR_TITLE_1', 'Connexion');
define('NAVBAR_TITLE_2', 'Mot de passe oublié');

define('HEADING_TITLE', 'J\'ai oublié mon mot de passe !');

define('TEXT_MAIN', 'Si vous avez oublié votre mot de passe, entrez votre adresse e-mail ci-dessous et nous vous ferons parvenir des instructions sur la façon de changer votre mot de passe en toute sécurité.');

define('TEXT_PASSWORD_RESET_INITIATED', 'S\'il vous plaît vérifier votre e-mail pour obtenir des instructions sur la façon de changer votre mot de passe. Les instructions contiennent un lien qui n\'est valable que pendant 24 heures ou jusqu\'à ce que votre mot de passe a été mis à jour.');

define('TEXT_NO_EMAIL_ADDRESS_FOUND', 'Erreur : L\'adresse électronique n\'a pas été trouvée dans notre base, veuillez réessayer. ');


define('EMAIL_PASSWORD_RESET_SUBJECT', STORE_NAME . ' - nouveau mot de passe');
define('EMAIL_PASSWORD_RESET_BODY', ' Un nouveau mot de passe a été demandé pour votre compte sur ' . STORE_NAME . '.' . "\n\n" . ' S\'il vous plaît suivez ce lien personnel à changer votre mot de passe en toute sécurité:' . "\n\n" . '%s' . "\n\n" . 'Ce lien sera supprimé automatiquement après 24 heures ou après votre mot de passe a été changé.' . "\n\n" . 'Pour de l\'aide avec n\'importe lequel de nos services en ligne, s\'il vous plaît envoyer un courriel au propriétaire de magasin: ' . STORE_OWNER_EMAIL_ADDRESS . '.' . "\n\n");

define('ERROR_ACTION_RECORDER', 'Erreur: Un lien de réinitialisation de mot de passe a déjà été envoyé. S\'il vous plaît essayez de nouveau en %s minutes.');
?>
