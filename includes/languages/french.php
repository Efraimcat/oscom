<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2007 osCommerce

  Released under the GNU General Public License
*/

// look in your $PATH_LOCALE/locale directory for available locales
// or type locale -a on the server.
// Examples:
// on RedHat try 'en_US'
// on FreeBSD try 'en_US.ISO_8859-1'
// on Windows try 'en', or 'English'
@setlocale(LC_ALL, array('fr_FR.UTF-8', 'fr_FR.UTF8'));

define('DATE_FORMAT_SHORT', '%d/%m/%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A %d %B %Y'); // this is used for strftime()
define('DATE_FORMAT', 'd/m/Y'); // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');
define('JQUERY_DATEPICKER_FORMAT', 'dd/mm/yy'); // see http://docs.jquery.com/UI/Datepicker/formatDate

////
// Return date in raw format
// $date should be in format mm/dd/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
function tep_date_raw($date, $reverse = false) {
  if ($reverse) {
    return substr($date, 0, 2) . substr($date, 3, 2) . substr($date, 6, 4);
  } else {
    return substr($date, 6, 4) . substr($date, 3, 2) . substr($date, 0, 2);
  }
}

// if USE_DEFAULT_LANGUAGE_CURRENCY is true, use the following currency, instead of the applications default currency (used when changing language)
define('LANGUAGE_CURRENCY', 'EUR');

// Global entries for the <html> tag
define('HTML_PARAMS', 'dir="ltr" lang="fr"');

// charset for web pages and emails
define('CHARSET', 'utf-8');

// page title
define('TITLE', STORE_NAME);

// text in includes/modules/downloads.php
define('HEADER_TITLE_MY_ACCOUNT', 'Mon compte');

// text in includes/application_top.php
define('HEADER_TITLE_TOP', '<i class="fa fa-home"><span class="sr-only">Accueil</span></i>');
define('HEADER_TITLE_CATALOG', 'Catalogue');

// text for gender
define('MALE', 'H<span class="hidden-xs">omme</span>');
define('FEMALE', 'F<span class="hidden-xs">emme</span>');

// checkout procedure text
define('CHECKOUT_BAR_DELIVERY', 'Information livraison');
define('CHECKOUT_BAR_PAYMENT', 'Information paiement');
define('CHECKOUT_BAR_CONFIRMATION', 'Confirmation');

// pull down default text
define('PULL_DOWN_DEFAULT', 'Choisissez');

// javascript messages
define('JS_ERROR', 'Des erreurs sont survenues durant le traitement de votre formulaire.\n\nVeuillez effectuer les corrections suivantes :\n\n');

define('JS_REVIEW_TEXT', '* Le \'commentaire\' que vous avez entré doit avoir au moins ' . REVIEW_TEXT_MIN_LENGTH . ' caractères.\n');
define('JS_REVIEW_RATING', '* Vous devez mettre une appréciation pour cet article.\n');

define('JS_ERROR_NO_PAYMENT_MODULE_SELECTED', '* Veuillez choisir une Mode de paiement pour votre commande.\n');

define('ERROR_NO_PAYMENT_MODULE_SELECTED', 'Veuillez choisir une Mode de paiement pour votre commande.');

define('ENTRY_COMPANY', 'Nom de la société :');
define('ENTRY_COMPANY_TEXT', '');
define('ENTRY_GENDER', 'Genre :');
define('ENTRY_GENDER_ERROR', 'Veuillez choisir votre genre.');
define('ENTRY_GENDER_TEXT', '*');
define('ENTRY_FIRST_NAME', 'Prénom :');
define('ENTRY_FIRST_NAME_ERROR', 'Votre prénom doit contenir un minimum de ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' caractères.');
define('ENTRY_FIRST_NAME_TEXT', '*');
define('ENTRY_LAST_NAME', 'Nom :');
define('ENTRY_LAST_NAME_ERROR', 'Votre nom doit contenir un minimum de ' . ENTRY_LAST_NAME_MIN_LENGTH . ' caractères.');
define('ENTRY_LAST_NAME_TEXT', '*');
define('ENTRY_DATE_OF_BIRTH', 'Date de naissance :');
define('ENTRY_DATE_OF_BIRTH_ERROR', 'Votre date de naissance doit avoir ce format : JJ/MM/AAAA (ex. 18/02/1961)');
define('ENTRY_DATE_OF_BIRTH_TEXT', '* (ex. 18/02/1961)');
define('ENTRY_EMAIL_ADDRESS', 'Adresse email:');
define('ENTRY_EMAIL_ADDRESS_ERROR', 'Votre adresse email doit contenir un minimum de ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' caractères.');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', 'Votre adresse email ne semble pas être valide - veuillez effectuer toutes les corrections nécessaires.');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', 'Votre adresse email est déjà enregistrée sur notre site - Veuillez vous connecter avec cette adresse email ou créez un compte avec une adresse différente.');
define('ENTRY_EMAIL_ADDRESS_TEXT', '*');
define('ENTRY_STREET_ADDRESS', 'Adresse :');
define('ENTRY_STREET_ADDRESS_ERROR', 'Votre adresse doit contenir un minimum de ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' caractères.');
define('ENTRY_STREET_ADDRESS_TEXT', '*');
define('ENTRY_SUBURB', 'Complément d\'adresse :');
define('ENTRY_SUBURB_TEXT', '');
define('ENTRY_POST_CODE', 'Code postal :');
define('ENTRY_POST_CODE_ERROR', 'Votre code postal doit contenir un minimum de ' . ENTRY_POSTCODE_MIN_LENGTH . ' caractères.');
define('ENTRY_POST_CODE_TEXT', '*');
define('ENTRY_CITY', 'Ville: ');
define('ENTRY_CITY_ERROR', 'Votre ville doit contenir un minimum de ' . ENTRY_CITY_MIN_LENGTH . ' caractères.');
define('ENTRY_CITY_TEXT', '*');
define('ENTRY_STATE', 'Etat/Département :');
define('ENTRY_STATE_ERROR', 'Votre état doit contenir un minimum de ' . ENTRY_STATE_MIN_LENGTH . ' caractères.');
define('ENTRY_STATE_ERROR_SELECT', 'Veuillez choisir un état à partir de la liste déroulante.');
define('ENTRY_STATE_TEXT', '*');
define('PLEASE_SELECT_A_STATE', 'Por favor seleccione su Provincia/Estado.');
define('ENTRY_COUNTRY', 'Pays :');
define('ENTRY_COUNTRY_ERROR', 'Veuillez choisir un pays à partir de la liste déroulante.');
define('ENTRY_COUNTRY_TEXT', '*');
define('ENTRY_TELEPHONE_NUMBER', 'Numéro de téléphone :');
define('ENTRY_TELEPHONE_NUMBER_ERROR', 'Votre numéro de téléphone doit contenir un minimum de ' . ENTRY_TELEPHONE_MIN_LENGTH . ' caractères.');
define('ENTRY_TELEPHONE_NUMBER_TEXT', '*');
define('ENTRY_FAX_NUMBER', 'Numéro de fax :');
define('ENTRY_FAX_NUMBER_TEXT', '');
define('ENTRY_NEWSLETTER', 'Bulletin d\'information :');
define('ENTRY_NEWSLETTER_TEXT', '');
define('ENTRY_NEWSLETTER_YES', 'S\'abonner');
define('ENTRY_NEWSLETTER_NO', 'Ne pas s\'abonner');
define('ENTRY_PASSWORD', 'Mot de passe :');
define('ENTRY_PASSWORD_ERROR', 'Votre mot de passe doit contenir un minimum de ' . ENTRY_PASSWORD_MIN_LENGTH . ' caractères.');
define('ENTRY_PASSWORD_ERROR_NOT_MATCHING', 'Le mot de passe de confirmation doit être identique à votre mot de passe.');
define('ENTRY_PASSWORD_TEXT', '*');
define('ENTRY_PASSWORD_CONFIRMATION', 'Mot de passe de confirmation :');
define('ENTRY_PASSWORD_CONFIRMATION_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT', 'Mot de passe actuel :');
define('ENTRY_PASSWORD_CURRENT_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT_ERROR', 'Votre mot de passe doit contenir un minimum de ' . ENTRY_PASSWORD_MIN_LENGTH . ' caractères.');
define('ENTRY_PASSWORD_NEW', 'Nouveau mot de passe :');
define('ENTRY_PASSWORD_NEW_TEXT', '*');
define('ENTRY_PASSWORD_NEW_ERROR', 'Votre nouveau mot de passe doit contenir un minimum de ' . ENTRY_PASSWORD_MIN_LENGTH . ' caractères.');
define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING', 'Le mot de passe de confirmation doit être identique à votre nouveau mot de passe.');
define('PASSWORD_HIDDEN', '--CACHE--');

// constants for use in tep_prev_next_display function
define('TEXT_RESULT_PAGE', 'Pages de résultat :');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Afficher <strong>%d</strong> à <strong>%d</strong> (sur <strong>%d</strong> produits)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Afficher <strong>%d</strong> à <strong>%d</strong> (sur <strong>%d</strong> orders)');

define('PREVNEXT_TITLE_FIRST_PAGE', 'Première page');
define('PREVNEXT_TITLE_PREVIOUS_PAGE', 'Page précédente');
define('PREVNEXT_TITLE_NEXT_PAGE', 'Page suivante');
define('PREVNEXT_TITLE_LAST_PAGE', 'Dernière page');
define('PREVNEXT_TITLE_PAGE_NO', 'Page %d');
define('PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE', 'les %d pages précédentes');
define('PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE', 'les %d pages suivantes');
define('PREVNEXT_BUTTON_FIRST', '&lt;&lt;PREMIERE');
define('PREVNEXT_BUTTON_PREV', '[&lt;&lt;&nbsp;Préc]');
define('PREVNEXT_BUTTON_NEXT', '[Suiv&nbsp;&gt;&gt;]');
define('PREVNEXT_BUTTON_LAST', 'DERNIERE&gt;&gt;');

define('IMAGE_BUTTON_ADD_ADDRESS', 'Ajouter adresse');
define('IMAGE_BUTTON_BACK', 'Retour');
define('IMAGE_BUTTON_BUY_NOW', 'Acheter maintenant');
define('IMAGE_BUTTON_CHANGE_ADDRESS', 'Changez l\'adresse');
define('IMAGE_BUTTON_CHECKOUT', 'Commander');
define('IMAGE_BUTTON_CONFIRM_ORDER', 'Confirmer la commande');
define('IMAGE_BUTTON_CONTINUE', 'Continuer');
define('IMAGE_BUTTON_DELETE', 'Supprimer');
define('IMAGE_BUTTON_LOGIN', 'Connexion');
define('IMAGE_BUTTON_IN_CART', 'Ajouter au panier');
define('IMAGE_BUTTON_REVIEWS', 'Avis des clients');
define('IMAGE_BUTTON_SEARCH', 'Rechercher');
define('IMAGE_BUTTON_UPDATE', 'Mise à jour');
define('IMAGE_BUTTON_WRITE_REVIEW', 'Donnez votre avis');

define('SMALL_IMAGE_BUTTON_DELETE', 'Supprimer');
define('SMALL_IMAGE_BUTTON_EDIT', 'Modifier');
define('SMALL_IMAGE_BUTTON_VIEW', 'Afficher');
define('SMALL_IMAGE_BUTTON_BUY', 'Acheter');

define('ICON_ARROW_RIGHT', 'plus');

define('TEXT_SORT_PRODUCTS', 'Tri produits ');
define('TEXT_DESCENDINGLY', 'décroissant');
define('TEXT_ASCENDINGLY', 'croissant');
define('TEXT_BY', ' par ');

define('TEXT_NO_REVIEWS', 'Il n\'y a pour le moment aucune avis sur ce produit.');

define('TEXT_UNKNOWN_TAX_RATE', 'Taux de taxation inconnu');

define('TEXT_CCVAL_ERROR_INVALID_DATE', 'La date d\'expiration entrée pour cette carte de crédit n\'est pas valide. Veuillez vérifier la date et réessayez.');
define('TEXT_CCVAL_ERROR_INVALID_NUMBER', 'Le numémero entrée pour cette carte de crédit n\'est pas valide. Veuillez vérifier le numéro et réessayez.');
define('TEXT_CCVAL_ERROR_UNKNOWN_CARD', 'Le code à 4 chiffres que vous avez entré est : %s. Si ce code est correct, nous n\'acceptons pas ce type de carte crédit. S\'il est erroné veuillez réessayer.');

// category views
define('TEXT_VIEW', 'Vue: ');
define('TEXT_VIEW_LIST', ' Liste');
define('TEXT_VIEW_GRID', 'Grille');

// search placeholder
define('TEXT_SEARCH_PLACEHOLDER','Chercher');

// message for required inputs
define('FORM_REQUIRED_INFORMATION', '<span class="fa fa-asterisk text-danger"></span> Informations requises');
define('FORM_REQUIRED_INPUT', '<span><span class="fa fa-asterisk form-control-feedback text-danger"></span></span>');

// reviews
define('REVIEWS_TEXT_RATED', 'Classement %s par <cite title="%s" itemprop="author">%s</cite>');
define('REVIEWS_TEXT_AVERAGE', 'Classement moyen par: <span itemprop="ratingCount">%s</span> Commentaires(s) %s');
define('REVIEWS_TEXT_TITLE', 'Ce que nos clients disent...');

// grid/list
define('TEXT_SORT_BY', 'Classer par ');

// moved from index
define('TABLE_HEADING_IMAGE', '');
define('TABLE_HEADING_MODEL', 'Modèle');
define('TABLE_HEADING_PRODUCTS', 'Nom du produit');
define('TABLE_HEADING_MANUFACTURER', 'Fabriquant');
define('TABLE_HEADING_QUANTITY', 'Quantité');
define('TABLE_HEADING_PRICE', 'Prix');
define('TABLE_HEADING_WEIGHT', 'Poids');
define('TABLE_HEADING_BUY_NOW', 'Achetez!');
define('TABLE_HEADING_LATEST_ADDED', 'Produits récents');

// product notifications
define('PRODUCT_SUBSCRIBED', '%s Ha été rajouté à votre liste d\'Alertes');
define('PRODUCT_UNSUBSCRIBED', '%s ha été éliminé de votre liste d\'alertes');
define('PRODUCT_ADDED', '%s ha été inclus dans votre Pannier');
define('PRODUCT_REMOVED', '%s ha été éliminé de votre Pannier');

// bootstrap helper
define('MODULE_CONTENT_BOOTSTRAP_ROW_DESCRIPTION', '');

//NIF start
define('ENTRY_NIF', 'TVA Intracommunautaire.:');
define('ENTRY_NO_NIF_ERROR', 'Vous devez saisir votre Numéro de TVA Intracommunautaire.');
define('ENTRY_FORMAT_NIF_LENGTH_ERROR', 'Votre Numéro de TVA n\'est pas valide, veuillez le vérifier.');
define('ENTRY_FORMATO_NIF_ERROR', 'Votre Numéro de TVA n\'est pas valide, veuillez le vérifier.');
define('ENTRY_FORMATO_CIF_ERROR', 'Votre Numéro de TVA n\'est pas valide, veuillez le vérifier.');
define('ENTRY_FORMATO_NIE_ERROR', 'Votre Numéro de TVA n\'est pas valide, veuillez le vérifier.');
define('ENTRY_LETRA_NIF_ERROR', '.');
define('ENTRY_NIF_TEXT', '*');
define('ENTRY_NIF_TEXT_SPAIN', '* seulement pour la France');
define('ENTRY_NIF_EXAMPLE', 'ex.: 01234567L, B01234567, X0123456S');
define('JS_NIF', 'Saisissez ici votre numéro de TVA');
//NIF end

/*** Begin Header Tags SEO ***/
define('BOX_HEADING_HEADERTAGS_TAGCLOUD', 'Recherches populaires');
define('TEXT_SEE_MORE', 'voir plus');
define('TEXT_SEE_MORE_FULL', 'voir plus sur %s');
define('HTS_OG_AVAILABLE_STOCK', 'Stock disponible');
define('HTS_OG_PRICE', 'Prix');
/*** End Header Tags SEO ***/
?>
