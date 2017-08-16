<?php
/*
  $Id: eubanktransfer.php,v 1.9.1 2006/07/04 12:00:00 jb_gfx

	Thanks to all the developers from the EU-Standard Bank Transfer module $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Released under the GNU General Public License
*/

define('MODULE_PAYMENT_EU_BANKTRANSFER_TEXT_TITLE', 'Virement bancaire Européen');

define('MODULE_PAYMENT_EU_BANKTRANSFER_TEXT_DESCRIPTION',
	'Veuillez transférer le montant total de votre commande vers le compte bancaire suivant.' . '<br />'.
	'Entrez vos nom, prénom et numéro de commande dans le champ &quot;sujet&quot;.' . '<br /><br />'.

	'Titulaire du compte&nbsp;: ' . MODULE_PAYMENT_EU_ACCOUNT_HOLDER . '<br />'.
	'Numéro IBAN&nbsp;: ' . MODULE_PAYMENT_EU_IBAN . '<br />'.
	'Adresse SWIFT (BIC)&nbsp;: ' . MODULE_PAYMENT_EU_BIC . '<br />'.
	'Nom de la banque&nbsp;: ' . MODULE_PAYMENT_EU_BANKNAME . '<br /><br />'.

	'Votre commande sera expédiée dès réception de votre paiement.');

define('MODULE_PAYMENT_EU_BANKTRANSFER_TEXT_EMAIL_FOOTER',
	'Veuillez transférer le montant total de votre commande vers le compte bancaire suivant.' . "\n".
	'Entrez vos nom, prénom et numéro de commande dans le champ &quot;sujet&quot;.' . "\n\n".

	'Titulaire du compte : ' . MODULE_PAYMENT_EU_ACCOUNT_HOLDER . "\n\n" .
	'Numéro IBAN : ' . MODULE_PAYMENT_EU_IBAN . "\n\n" .
	'Adresse SWIFT (BIC) : ' . MODULE_PAYMENT_EU_BIC . "\n\n" .
	'Nom de la banque : ' . MODULE_PAYMENT_EU_BANKNAME . "\n\n" .

	'Votre commande vous est réservée pour les 7 prochains jours, soyez sûr de nous faire parvenir votre paiement dans ce laps de temps.'. "\n" .
	'Votre commande sera expédiée dès réception de votre paiement.');
?>
