<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2014 osCommerce

  Released under the GNU General Public License
*/

  define('MODULE_PAYMENT_PAYPAL_EXPRESS_TEXT_TITLE', 'PayPal Express Checkout');
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_TEXT_PUBLIC_TITLE', 'PayPal (y compris les cartes de crédit et de débit)');
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_TEXT_DESCRIPTION', '<img src="images/icon_info.gif" border="0" />&nbsp;<a href="http://library.oscommerce.com/Package&en&paypal&oscom23&express_checkout" target="_blank" style="text-decoration: underline; font-weight: bold;">Voir la documentation en ligne</a><br /><br /><img src="images/icon_popup.gif" border="0" />&nbsp;<a href="https://www.paypal.com" target="_blank" style="text-decoration: underline; font-weight: bold;">Visitez PayPal Website</a>');

  define('MODULE_PAYMENT_PAYPAL_EXPRESS_ERROR_ADMIN_CURL', 'Ce module nécessite cURL être activé dans PHP et ne chargera pas tant qu\'il n\'a pas été activé sur ce serveur Web.');
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_ERROR_ADMIN_CONFIGURATION', 'Ce module ne se charge jusqu\'à ce que le compte vendeur ou API Credential paramètres ont été configurés. S\'il vous plaît modifier et configurer les paramètres de ce module.');

  define('MODULE_PAYMENT_PAYPAL_EXPRESS_TEXT_BUTTON', 'Départ avec PayPal');
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_TEXT_COMMENTS', 'Commentaires:');
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_EMAIL_PASSWORD', 'Un compte a été automatiquement créé pour vous avec l\'adresse e-mail ci-dessous et mot de passe:' . "\n\n" . 'Compte magasin Adresse E-Mail: %s' . "\n" . 'Compte magasin Mot de passe: %s' . "\n\n");

//  define('MODULE_PAYMENT_PAYPAL_EXPRESS_BUTTON', 'https://www.paypalobjects.com/webstatic/en_US/btn/btn_checkout_pp_142x27.png');
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_BUTTON', ' https://www.paypal.com/fr_FR/FR/i/btn/btn_xpressCheckout.gif');
//  define('MODULE_PAYMENT_PAYPAL_EXPRESS_LANGUAGE_LOCALE', 'fr_FR');
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_LANGUAGE_LOCALE', 'FR');

  define('MODULE_PAYMENT_PAYPAL_EXPRESS_DIALOG_CONNECTION_LINK_TITLE', 'Connexion API de test du serveur');
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_DIALOG_CONNECTION_TITLE', 'Test de connexion Server API');
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_DIALOG_CONNECTION_GENERAL_TEXT', 'connexion de test au serveur ..');
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_DIALOG_CONNECTION_BUTTON_CLOSE', 'Proche');
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_DIALOG_CONNECTION_TIME', 'Temps de connexion:');
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_DIALOG_CONNECTION_SUCCESS', 'Succès!');
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_DIALOG_CONNECTION_FAILED', 'Impossible! S\'il vous plaît vérifier les paramètres de certificat SSL les vérifier et essayer à nouveau.');
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_DIALOG_CONNECTION_ERROR', 'Une erreur s\'est produite. S\'il vous plaît rafraîchir la page, vérifiez vos paramètres et essayez à nouveau.');

  define('MODULE_PAYMENT_PAYPAL_EXPRESS_ERROR_NO_SHIPPING_AVAILABLE_TO_SHIPPING_ADDRESS', 'Frais de port n\'est pas disponible actuellement pour l\'adresse d\'expédition sélectionné. S\'il vous plaît sélectionner ou créer une nouvelle adresse de livraison à utiliser avec votre achat.');
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_WARNING_LOCAL_LOGIN_REQUIRED', 'S\'il vous plaît vous connecter à votre compte pour vérifier l\'ordre.');
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_NOTICE_CHECKOUT_CONFIRMATION', 'S\'il vous plaît examiner et confirmer votre commande ci-dessous. Votre commande ne sera pas traitée tant qu\'il n\'a pas été confirmée.');
?>
