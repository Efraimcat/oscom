<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2014 osCommerce

  Released under the GNU General Public License
*/
?>
<!DOCTYPE html>
<html <?php echo HTML_PARAMS; ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET; ?>">
<meta name="robots" content="noindex,nofollow">
<title><?php echo TITLE; ?></title>
<base href="<?php echo ($request_type == 'SSL') ? HTTPS_SERVER . DIR_WS_HTTPS_ADMIN : HTTP_SERVER . DIR_WS_ADMIN; ?>" />
<!--[if IE]><script type="text/javascript" src="<?php echo tep_catalog_href_link('ext/flot/excanvas.min.js', '', 'SSL'); ?>"></script><![endif]-->
<link rel="stylesheet" type="text/css" href="<?php echo tep_catalog_href_link('ext/jquery/ui/redmond/jquery-ui-1.10.4.min.css', '', 'SSL'); ?>">
<script type="text/javascript" src="<?php echo tep_catalog_href_link('ext/jquery/jquery-2.2.3.min.js', '', 'SSL'); ?>"></script>
<script type="text/javascript" src="<?php echo tep_catalog_href_link('ext/jquery/ui/jquery-ui-1.10.4.min.js', '', 'SSL'); ?>"></script>

<?php
  if (tep_not_null(JQUERY_DATEPICKER_I18N_CODE)) {
?>
<script type="text/javascript" src="<?php echo tep_catalog_href_link('ext/jquery/ui/i18n/jquery.ui.datepicker-' . JQUERY_DATEPICKER_I18N_CODE . '.js', '', 'SSL'); ?>"></script>
<script type="text/javascript">
$.datepicker.setDefaults($.datepicker.regional['<?php echo JQUERY_DATEPICKER_I18N_CODE; ?>']);
</script>
<?php
  }
?>

<script type="text/javascript" src="<?php echo tep_catalog_href_link('ext/flot/jquery.flot.min.js', '', 'SSL'); ?>"></script>
<script type="text/javascript" src="<?php echo tep_catalog_href_link('ext/flot/jquery.flot.time.min.js', '', 'SSL'); ?>"></script>
<link rel="stylesheet" type="text/css" href="includes/stylesheet.css">
<script type="text/javascript" src="includes/general.js"></script>
<?php
/*** Begin Header Tags SEO ***/
?>
<link rel="stylesheet" type="text/css" href="includes/headertags_seo_styles.css">
<?php
switch (HEADER_TAGS_ENABLE_HTML_EDITOR) {
   case 'CKEditor':
     echo '<script type="text/javascript" src="ckeditor/ckeditor.js"></script>';
   break;

   case 'FCKEditor':
   break;
         
   case 'TinyMCE':
     if (HEADER_TAGS_ENABLE_EDITOR_CATEGORIES == 'true'   || 
         HEADER_TAGS_ENABLE_EDITOR_PRODUCTS == 'true'     ||
         HEADER_TAGS_ENABLE_EDITOR_LISTING_TEXT == 'true' ||
         HEADER_TAGS_ENABLE_EDITOR_SUB_TEXT == 'true'      
        )
     {  
       if ($action == 'new_product' || $action == 'new_category' || $action == 'edit_category') { // No need to put JS on all pages.
         $languages = tep_get_languages(); // Get all languages
       // Build list of textareas to convert
         $str = '';
         for ($i = 0, $n = sizeof($languages); $i < $n; $i++) {
           if (HEADER_TAGS_ENABLE_EDITOR_CATEGORIES == 'true') $str .= "categories_htc_description[".$languages[$i]['id']."],";
           if (HEADER_TAGS_ENABLE_EDITOR_PRODUCTS == 'true') $str .= "products_description[".$languages[$i]['id']."],";
           if (HEADER_TAGS_ENABLE_EDITOR_LISTING_TEXT == 'true') $str .= "products_head_listing_text[".$languages[$i]['id']."],";
           if (HEADER_TAGS_ENABLE_EDITOR_SUB_TEXT == 'true') $str .= "products_head_sub_text[".$languages[$i]['id']."],";
         }  //end for each language
         $mce_str = rtrim ($str,","); // Removed the last comma from the string.
       // You can add more textareas to convert in the $str, be careful that they are all separated by a comma.
         echo '<script language="javascript" type="text/javascript" src="includes/javascript/tiny_mce/tiny_mce.js"></script>';
         include "includes/javascript/tiny_mce/general.php";
       } 
     }
   break;

   default: break; 
}     
/*** End Header Tags SEO ***/
?>

<?php
//this code block is optional - if you want the ability to turn the editor on and off in admin add this - its not necessary and is not needed to make the editor work

if (!defined('USE_CKEDITOR_ADMIN_TEXTAREA')) {
tep_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_id, configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added, set_function) values ('', 'Use CKEditor', 'USE_CKEDITOR_ADMIN_TEXTAREA','true','Use CKEditor for WYSIWYG editing of textarea fields in admin',1,99,now(),'tep_cfg_select_option(array(\'true\', \'false\'),' )");
define ('USE_CKEDITOR_ADMIN_TEXTAREA','true');
}
if (USE_CKEDITOR_ADMIN_TEXTAREA == "true") {
?>

<script type="text/javascript" src="<?php echo tep_href_link('ext/ckeditor/ckeditor.js'); ?>"></script>
<!-- If you would rather use ckeditor.js file from a CDN uncomment the line below and comment the line above - if the version number has changed remember to change the version number - you'll actually find the line of code on the ck editor web site for your version -->
<!-- <script src="//cdn.ckeditor.com/4.4.4/full/ckeditor.js"></script> -->
<script type="text/javascript" src="<?php echo tep_href_link('ext/ckeditor/adapters/jquery.js'); ?>"></script>
<script type="text/javascript">
$(function() {
var $editors = $('textarea');
if ($editors.length) {
$editors.each(function() {
var editorID = $(this).attr("id");
var instance = CKEDITOR.instances[editorID];
if (instance) { CKEDITOR.remove(instance); }
CKEDITOR.replace(editorID);
});
}
});
</script>

<?php
// the closing brace here forms part of the php code block above
} //if you decide to leave out the php code block above then comment or remove this too
?>

</head>
<body>

<?php require('includes/header.php'); ?>

<?php
  if (tep_session_is_registered('admin')) {
    include('includes/column_left.php');
  } else {
?>

<style>
#contentText {
  margin-left: 0;
}
</style>

<?php
  }
?>

<div id="contentText">
