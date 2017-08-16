<?php
/*
  $Id: header_tags_seo.php,v 3.0 2008/01/10 by Jack_mcs - http://www.oscommerce-solution.com

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce
  Portions Copyright 2009 oscommerce-solution.com

  Released under the GNU General Public License
*/ 

require_once('includes/functions/header_tags.php'); 
require_once('includes/functions/clean_html_comments.php'); // Clean out HTML comments from ALT tags etc.

$cache_output = '';
$canonical_url = '';
$header_tags_array = array();
$sortOrder = array();
$tmpTags = array();

$defaultTags_query = tep_db_query("select * from headertags_default where language_id = '" . (int)$languages_id . "'");
$defaultTags = tep_db_fetch_array($defaultTags_query);
$tmpTags['def_title']      =  (tep_not_null($defaultTags['default_title'])) ? $defaultTags['default_title'] : '';
$tmpTags['def_desc']       =  (tep_not_null($defaultTags['default_description'])) ? $defaultTags['default_description'] : '';
$tmpTags['def_keywords']   =  (tep_not_null($defaultTags['default_keywords'])) ? $defaultTags['default_keywords'] : '';
$tmpTags['def_logo_text']  =  (tep_not_null($defaultTags['default_logo_text'])) ? $defaultTags['default_logo_text'] : '';
$tmpTags['home_page_text'] =  (tep_not_null($defaultTags['home_page_text'])) ? $defaultTags['home_page_text'] : '';

// Define specific settings per page: 
switch (true) {
  // INDEX.PHP
  case (basename($_SERVER['SCRIPT_FILENAME']) === 'index.php'):
    $id = ($current_category_id ? 'c_' . (int)$current_category_id : (($_GET['manufacturers_id'] ? 'm_' . (int)$_GET['manufacturers_id'] : '')));

    if (! ReadCacheHeaderTags($header_tags_array, basename($_SERVER['SCRIPT_FILENAME']),  $id)) { 
         $pageTags_query = tep_db_query("select * from headertags where page_name like '" . 'index.php' . "' and language_id = '" . (int)$languages_id . "'");
         $pageTags = tep_db_fetch_array($pageTags_query);

         $catStr = "select categories_htc_title_tag as htc_title_tag, categories_htc_desc_tag as htc_desc_tag, categories_htc_keywords_tag as htc_keywords_tag from categories_description where categories_id = '" . (int)$current_category_id . "' and language_id = '" . (int)$languages_id . "' limit 1";
         $manStr = '';
         
         if ($category_depth == 'top') {  //home page or manufacturer page
             if (isset($_GET['manufacturers_id'])) { //a manufacturer page
                 $manStr = "select mi.manufacturers_htc_title_tag as htc_title_tag, mi.manufacturers_htc_desc_tag as htc_desc_tag, mi.manufacturers_htc_keywords_tag as htc_keywords_tag from manufacturers m LEFT JOIN manufacturers_info mi on m.manufacturers_id = mi.manufacturers_id where m.manufacturers_id = '" . (int)$_GET['manufacturers_id'] . "' and mi.languages_id = '" . (int)$languages_id . "' limit 1";
             } else {                                //the home page
                 $header_tags_array['home_page_text'] = (tep_not_null($tmpTags['home_page_text']) ? $tmpTags['home_page_text'] : '');             
             }
         }
         if ($pageTags['append_root'] || $category_depth == 'top' && ! isset($_GET['manufacturers_id']) ) {
             $sortOrder['title'][$pageTags['sortorder_root']] = $pageTags['page_title']; 
             $sortOrder['description'][$pageTags['sortorder_root']] = $pageTags['page_description']; 
             $sortOrder['keywords'][$pageTags['sortorder_root']] = $pageTags['page_keywords']; 
             $sortOrder['logo'][$pageTags['sortorder_root']] = $pageTags['page_logo'];
             $sortOrder['logo_1'][$pageTags['sortorder_root_1']] = $pageTags['page_logo_1'];
             $sortOrder['logo_2'][$pageTags['sortorder_root_2']] = $pageTags['page_logo_2'];
             $sortOrder['logo_3'][$pageTags['sortorder_root_3']] = $pageTags['page_logo_3'];
             $sortOrder['logo_4'][$pageTags['sortorder_root_4']] = $pageTags['page_logo_4'];
         }

         $sortOrder = GetCategoryAndManufacturer($sortOrder, $pageTags, $defaultTags, $catStr, $manStr);

         if ($pageTags['append_default_title'] && tep_not_null($tmpTags['def_title'])) $sortOrder['title'][$pageTags['sortorder_title']] = $tmpTags['def_title'];
         if ($pageTags['append_default_description'] && tep_not_null($tmpTags['def_desc'])) $sortOrder['description'][$pageTags['sortorder_description']] = $tmpTags['def_desc'];
         if ($pageTags['append_default_keywords'] && tep_not_null($tmpTags['def_keywords'])) $sortOrder['keywords'][$pageTags['sortorder_keywords']] = $tmpTags['def_keywords'];
         if ($pageTags['append_default_logo'] && tep_not_null($tmpTags['def_logo_text']))  $sortOrder['logo'][$pageTags['sortorder_logo']] = $tmpTags['def_logo_text'];

         FillHeaderTagsArray($header_tags_array, $sortOrder);  

         // Canonical URL add-on
         if (isset($cPath) && tep_not_null($cPath)) {
             $path = $cPath;
             if (HEADER_TAGS_CANONICAL_PATH == 'last') {
                 if (strpos($cPath, '_') !== FALSE) {
                     $path = end(explode('_',$cPath));
                 }
             }    
             $canonical_url = tep_href_link('index.php', 'cPath=' . $path, $request_type, false);
         } elseif (isset($_GET['manufacturers_id']) && tep_not_null($_GET['manufacturers_id'])) {
              $canonical_url = tep_href_link('index.php', 'manufacturers_id=' . (int)$_GET['manufacturers_id'], $request_type, false);
         }
 
         WriteCacheHeaderTags($header_tags_array, basename($_SERVER['SCRIPT_FILENAME']),  $id);
    }
    break;

  // PRODUCT_INFO.PHP
  // PRODUCT_REVIEWS.PHP
  // PRODUCT_REVIEWS_INFO.PHP
  // PRODUCT_REVIEWS_WRITE.PHP
  case (basename($_SERVER['SCRIPT_FILENAME']) === 'product_info.php'):
  case (basename($_SERVER['SCRIPT_FILENAME']) === 'product_reviews.php'):
  case (basename($_SERVER['SCRIPT_FILENAME']) === 'product_reviews_info.php'):
  case (basename($_SERVER['SCRIPT_FILENAME']) === 'product_reviews_write.php'):

    switch (true) {
     case (basename($_SERVER['SCRIPT_FILENAME']) === 'product_info.php'):          $filename = 'product_info.php';          break;
     case (basename($_SERVER['SCRIPT_FILENAME']) === 'product_reviews.php'):       $filename = 'product_reviews.php';       break;
     case (basename($_SERVER['SCRIPT_FILENAME']) === 'product_reviews_info.php'):  $filename = 'product_reviews_info.php';  break;
     case (basename($_SERVER['SCRIPT_FILENAME']) === 'product_reviews_write.php'): $filename = 'product_reviews_write.php'; break;
     default: $filename = 'product_info.php';
    } 

    $id = ($_GET['products_id'] ? 'p_' . (int)$_GET['products_id'] : '');

    if (! ReadCacheHeaderTags($header_tags_array, basename($_SERVER['SCRIPT_FILENAME']), $id)) { 
       $pageTags_query = tep_db_query("select * from headertags where page_name like '" . $filename . "' and language_id = '" . (int)$languages_id . "'");
       $pageTags = tep_db_fetch_array($pageTags_query);

       $the_product_info_query = tep_db_query("select p.products_id, pd.products_name, pd.products_head_title_tag, pd.products_head_title_tag_alt, pd.products_head_keywords_tag, pd.products_head_desc_tag, pd.products_head_additional_words, p.manufacturers_id, p.products_model from products p inner join products_description pd on p.products_id = pd.products_id where p.products_id = '" . (int)$_GET['products_id'] . "' and pd.language_id ='" .  (int)$languages_id . "' limit 1");
       $the_product_info = tep_db_fetch_array($the_product_info_query);
       $header_tags_array['product'] = $the_product_info['products_head_title_tag'];  //save for use on the logo
       $tmpTags['prod_title'] = (tep_not_null($the_product_info['products_head_title_tag'])) ? strip_tags($the_product_info['products_head_title_tag']) : '';
       $header_tags_array['title_alt'] = (tep_not_null($the_product_info['products_head_title_tag_alt'])) ? strip_tags($the_product_info['products_head_title_tag_alt']) : (HEADER_TAGS_USE_PAGE_NAME == 'false' ? strip_tags($the_product_info['products_head_title_tag']) : strip_tags($the_product_info['products_name']));
       $tmpTags['prod_desc'] = (tep_not_null($the_product_info['products_head_desc_tag'])) ? strip_tags($the_product_info['products_head_desc_tag']) : '';
       if (HEADER_TAGS_ENABLE_ADDITIONAL_WORDS == 'true') {
         $add_kwrds = '';
         if (isset($the_product_info['products_head_keywords_tag'][0]) && tep_not_null($the_product_info['products_head_additional_words'])) {
             $add_kwrds = HEADER_TAGS_SEPARATOR_KEYWORD . $the_product_info['products_head_additional_words'];
         }
         $the_product_info['products_head_keywords_tag'] .= $add_kwrds;
       }      
       $tmpTags['prod_keywords'] = (tep_not_null($the_product_info['products_head_keywords_tag'])) ? strip_tags($the_product_info['products_head_keywords_tag']) : '';
       $tmpTags['prod_model'] = (tep_not_null($the_product_info['products_model'])) ? $the_product_info['products_model'] : '';

       $catStr = "select c.categories_htc_title_tag as htc_title_tag, c.categories_htc_desc_tag as htc_desc_tag, c.categories_htc_keywords_tag as htc_keywords_tag from categories_description c, products_to_categories p2c where c.categories_id = p2c.categories_id and p2c.products_id = '" . (int)$the_product_info['products_id'] . "' and language_id = '" . (int)$languages_id . "'";
       $manStr = "select mi.manufacturers_htc_title_tag as htc_title_tag, mi.manufacturers_htc_desc_tag as htc_desc_tag, mi.manufacturers_htc_keywords_tag as htc_keywords_tag from manufacturers m LEFT JOIN manufacturers_info mi on m.manufacturers_id = mi.manufacturers_id  where m.manufacturers_id = '" . (int)$the_product_info['manufacturers_id'] . "' and mi.languages_id = '" . (int)$languages_id . "' LIMIT 1";

       if ($pageTags['append_root']) {
         $sortOrder['title'][$pageTags['sortorder_root']] = $pageTags['page_title'];
         $sortOrder['description'][$pageTags['sortorder_root']] = $pageTags['page_description'];
         $sortOrder['keywords'][$pageTags['sortorder_root']] = $pageTags['page_keywords'];
         $sortOrder['logo'][$pageTags['sortorder_root']] = $pageTags['page_logo'];
         $sortOrder['logo_1'][$pageTags['sortorder_root_1']] = $pageTags['page_logo_1'];
         $sortOrder['logo_2'][$pageTags['sortorder_root_2']] = $pageTags['page_logo_2'];
         $sortOrder['logo_3'][$pageTags['sortorder_root_3']] = $pageTags['page_logo_3'];
         $sortOrder['logo_4'][$pageTags['sortorder_root_4']] = $pageTags['page_logo_4'];
       }

       if ($pageTags['append_product']) {
         $sortOrder['title'][$pageTags['sortorder_product']] = $tmpTags['prod_title'];  //places the product title at the end of the list
         $sortOrder['description'][$pageTags['sortorder_product']] = $tmpTags['prod_desc'];
         $sortOrder['keywords'][$pageTags['sortorder_product']] = $tmpTags['prod_keywords'];
         $sortOrder['logo'][$pageTags['sortorder_product']] = $tmpTags['prod_title'];
       }

       if ($pageTags['append_model']) {
         $sortOrder['title'][$pageTags['sortorder_model']] = $tmpTags['prod_model'];  //places the product title at the end of the list
         $sortOrder['description'][$pageTags['sortorder_model']] = $tmpTags['prod_model'];
         $sortOrder['keywords'][$pageTags['sortorder_model']] = $tmpTags['prod_model'];
         $sortOrder['logo'][$pageTags['sortorder_model']] = $tmpTags['prod_model'];
       }

       $sortOrder = GetCategoryAndManufacturer($sortOrder, $pageTags, $defaultTags, $catStr, $manStr, true);

       if ($pageTags['append_default_title'] && tep_not_null($tmpTags['def_title'])) $sortOrder['title'][$pageTags['sortorder_title']] = $tmpTags['def_title'];
       if ($pageTags['append_default_description'] && tep_not_null($tmpTags['def_desc'])) $sortOrder['description'][$pageTags['sortorder_description']] = $tmpTags['def_desc'];
       if ($pageTags['append_default_keywords'] && tep_not_null($tmpTags['def_keywords'])) $sortOrder['keywords'][$pageTags['sortorder_keywords']] = $tmpTags['def_keywords'];
       if ($pageTags['append_default_logo'] && tep_not_null($tmpTags['def_logo_text']))  $sortOrder['logo'][$pageTags['sortorder_logo']] = $tmpTags['def_logo_text'];
 
       FillHeaderTagsArray($header_tags_array, $sortOrder);

       // Canonical URL add-on
       if ($_GET['products_id'] != '') {
          $canonical_url = tep_href_link('product_info.php', 'products_id=' . (int)$_GET['products_id'], $request_type, false);
       }
       WriteCacheHeaderTags($header_tags_array, basename($_SERVER['SCRIPT_FILENAME']), $id);
    }

    break;


// products_new.php
  case (basename($_SERVER['SCRIPT_FILENAME']) === 'products_new.php'):
    if (! ReadCacheHeaderTags($header_tags_array, basename($_SERVER['SCRIPT_FILENAME']), '')) {
      $header_tags_array = tep_header_tag_page('products_new.php');
      $canonical_url = tep_href_link('products_new.php', tep_get_all_get_params(array()), $request_type, false);
      WriteCacheHeaderTags($header_tags_array, basename($_SERVER['SCRIPT_FILENAME']), '');
    }
  break;
  
  // SPECIALS.PHP
  case (basename($_SERVER['SCRIPT_FILENAME']) === 'specials.php'):
    if (! ReadCacheHeaderTags($header_tags_array, basename($_SERVER['SCRIPT_FILENAME']), '')) {
       $pageTags_query = tep_db_query("select * from headertags where page_name = 'specials.php' and language_id = '" . (int)$languages_id . "'");
       $pageTags = tep_db_fetch_array($pageTags_query);  

       if ($pageTags['append_root']) {
         $sortOrder['title'][$pageTags['sortorder_root']] = $pageTags['page_title']; 
         $sortOrder['description'][$pageTags['sortorder_root']] = $pageTags['page_description']; 
         $sortOrder['keywords'][$pageTags['sortorder_root']] = $pageTags['page_keywords']; 
         $sortOrder['logo'][$pageTags['sortorder_root']] = $pageTags['page_logo'];
         $sortOrder['logo_1'][$pageTags['sortorder_root']] = $pageTags['page_logo_1'];
         $sortOrder['logo_2'][$pageTags['sortorder_root']] = $pageTags['page_logo_2'];
         $sortOrder['logo_3'][$pageTags['sortorder_root']] = $pageTags['page_logo_3'];
         $sortOrder['logo_4'][$pageTags['sortorder_root']] = $pageTags['page_logo_4'];      
       }

       if ($pageTags['append_default_title'] && tep_not_null($tmpTags['def_title'])) $sortOrder['title'][$pageTags['sortorder_title']] = $tmpTags['def_title'];
       if ($pageTags['append_default_description'] && tep_not_null($tmpTags['def_desc'])) $sortOrder['description'][$pageTags['sortorder_description']] = $tmpTags['def_desc'];
       if ($pageTags['append_default_keywords'] && tep_not_null($tmpTags['def_keywords'])) $sortOrder['keywords'][$pageTags['sortorder_keywords']] = $tmpTags['def_keywords'];
       if ($pageTags['append_default_logo'] && tep_not_null($tmpTags['def_logo_text']))  $sortOrder['logo'][$pageTags['sortorder_logo']] = $tmpTags['def_logo_text'];

       FillHeaderTagsArray($header_tags_array, $sortOrder);  
       WriteCacheHeaderTags($header_tags_array, basename($_SERVER['SCRIPT_FILENAME']),  '');
    }
  break;


// advanced_search.php
  case (basename($_SERVER['SCRIPT_FILENAME']) === 'advanced_search.php'):
    if (! ReadCacheHeaderTags($header_tags_array, basename($_SERVER['SCRIPT_FILENAME']), '')) {
      $header_tags_array = tep_header_tag_page('advanced_search.php');
      WriteCacheHeaderTags($header_tags_array, basename($_SERVER['SCRIPT_FILENAME']), '');
    }
  break;

// conditions.php
  case (basename($_SERVER['SCRIPT_FILENAME']) === 'conditions.php'):
    if (! ReadCacheHeaderTags($header_tags_array, basename($_SERVER['SCRIPT_FILENAME']), '')) {
      $header_tags_array = tep_header_tag_page('conditions.php');
      WriteCacheHeaderTags($header_tags_array, basename($_SERVER['SCRIPT_FILENAME']), '');
    }
  break;

// contact_us.php
  case (basename($_SERVER['SCRIPT_FILENAME']) === 'contact_us.php'):
    if (! ReadCacheHeaderTags($header_tags_array, basename($_SERVER['SCRIPT_FILENAME']), '')) {
      $header_tags_array = tep_header_tag_page('contact_us.php');
      WriteCacheHeaderTags($header_tags_array, basename($_SERVER['SCRIPT_FILENAME']), '');
    }
  break;

// cookie_usage.php
  case (basename($_SERVER['SCRIPT_FILENAME']) === 'cookie_usage.php'):
    if (! ReadCacheHeaderTags($header_tags_array, basename($_SERVER['SCRIPT_FILENAME']), '')) {
      $header_tags_array = tep_header_tag_page('cookie_usage.php');
      WriteCacheHeaderTags($header_tags_array, basename($_SERVER['SCRIPT_FILENAME']), '');
    }
  break;

// download.php
  case (basename($_SERVER['SCRIPT_FILENAME']) === 'download.php'):
    if (! ReadCacheHeaderTags($header_tags_array, basename($_SERVER['SCRIPT_FILENAME']), '')) {
      $header_tags_array = tep_header_tag_page('download.php');
      WriteCacheHeaderTags($header_tags_array, basename($_SERVER['SCRIPT_FILENAME']), '');
    }
  break;

// password_reset.php
  case (basename($_SERVER['SCRIPT_FILENAME']) === 'password_reset.php'):
    if (! ReadCacheHeaderTags($header_tags_array, basename($_SERVER['SCRIPT_FILENAME']), '')) {
      $header_tags_array = tep_header_tag_page('password_reset.php');
      WriteCacheHeaderTags($header_tags_array, basename($_SERVER['SCRIPT_FILENAME']), '');
    }
  break;

// privacy.php
  case (basename($_SERVER['SCRIPT_FILENAME']) === 'privacy.php'):
    if (! ReadCacheHeaderTags($header_tags_array, basename($_SERVER['SCRIPT_FILENAME']), '')) {
      $header_tags_array = tep_header_tag_page('privacy.php');
      WriteCacheHeaderTags($header_tags_array, basename($_SERVER['SCRIPT_FILENAME']), '');
    }
  break;

// redirect.php
  case (basename($_SERVER['SCRIPT_FILENAME']) === 'redirect.php'):
    if (! ReadCacheHeaderTags($header_tags_array, basename($_SERVER['SCRIPT_FILENAME']), '')) {
      $header_tags_array = tep_header_tag_page('redirect.php');
      WriteCacheHeaderTags($header_tags_array, basename($_SERVER['SCRIPT_FILENAME']), '');
    }
  break;

// reviews.php
  case (basename($_SERVER['SCRIPT_FILENAME']) === 'reviews.php'):
    if (! ReadCacheHeaderTags($header_tags_array, basename($_SERVER['SCRIPT_FILENAME']), '')) {
      $header_tags_array = tep_header_tag_page('reviews.php');
      WriteCacheHeaderTags($header_tags_array, basename($_SERVER['SCRIPT_FILENAME']), '');
    }
  break;

// shipping.php
  case (basename($_SERVER['SCRIPT_FILENAME']) === 'shipping.php'):
    if (! ReadCacheHeaderTags($header_tags_array, basename($_SERVER['SCRIPT_FILENAME']), '')) {
      $header_tags_array = tep_header_tag_page('shipping.php');
      WriteCacheHeaderTags($header_tags_array, basename($_SERVER['SCRIPT_FILENAME']), '');
    }
  break;

// shopping_cart.php
  case (basename($_SERVER['SCRIPT_FILENAME']) === 'shopping_cart.php'):
    if (! ReadCacheHeaderTags($header_tags_array, basename($_SERVER['SCRIPT_FILENAME']), '')) {
      $header_tags_array = tep_header_tag_page('shopping_cart.php');
      WriteCacheHeaderTags($header_tags_array, basename($_SERVER['SCRIPT_FILENAME']), '');
    }
  break;

// tell_a_friend.php
  case (basename($_SERVER['SCRIPT_FILENAME']) === 'tell_a_friend.php'):
    if (! ReadCacheHeaderTags($header_tags_array, basename($_SERVER['SCRIPT_FILENAME']), '')) {
      $header_tags_array = tep_header_tag_page('tell_a_friend.php');
      WriteCacheHeaderTags($header_tags_array, basename($_SERVER['SCRIPT_FILENAME']), '');
    }
  break;

// testimonials.php
  case (basename($_SERVER['SCRIPT_FILENAME']) === 'testimonials.php'):
    if (! ReadCacheHeaderTags($header_tags_array, basename($_SERVER['SCRIPT_FILENAME']), '')) {
      $header_tags_array = tep_header_tag_page('testimonials.php');
      WriteCacheHeaderTags($header_tags_array, basename($_SERVER['SCRIPT_FILENAME']), '');
    }
  break;

// model-cross-reference.php
  case (basename($_SERVER['SCRIPT_FILENAME']) === 'model-cross-reference.php'):
    if (! ReadCacheHeaderTags($header_tags_array, basename($_SERVER['SCRIPT_FILENAME']), '')) {
      $header_tags_array = tep_header_tag_page('model-cross-reference.php');
      WriteCacheHeaderTags($header_tags_array, basename($_SERVER['SCRIPT_FILENAME']), '');
    }
  break;

// ALL OTHER PAGES NOT DEFINED ABOVE
  default:
    $header_tags_array['title'] = tep_db_prepare_input($defaultTags['default_title']);
    $header_tags_array['desc'] = tep_db_prepare_input($defaultTags['default_description']);
    $header_tags_array['keywords'] = tep_db_prepare_input($defaultTags['default_keywords']);
    break;
  }    
 
// echo ' <meta http-equiv="X-UA-Compatible" content="IE=edge">' . "\n";
echo ' <title>' . $header_tags_array['title'] . '</title>' . "\n";
echo ' <meta name="Description" content="' . $header_tags_array['desc'] . '" />' . "\n";
echo ' <meta name="Keywords" content="' . $header_tags_array['keywords'] . '" />' . "\n";


$lang_query = tep_db_query( "select code from languages where languages_id = '" . (int)$languages_id . "'");
$lang = tep_db_fetch_array($lang_query);

if ($defaultTags['meta_language'])  echo ' <meta http-equiv="Content-Language" content="' . $lang['code'] . '" >'."\n";
if ($defaultTags['meta_google'])    echo ' <meta name="googlebot" content="all" />' . "\n";
if ($defaultTags['meta_noodp'])     echo ' <meta name="robots" content="noodp" />' . "\n";
if ($defaultTags['meta_noydir'])    echo ' <meta name="slurp" content="noydir" />' . "\n";
if ($defaultTags['meta_revisit'])   echo ' <meta name="revisit-after" content="1 days" />' . "\n";
if ($defaultTags['meta_robots'])    echo ' <meta name="robots" content="index, follow" />' . "\n";
if ($defaultTags['meta_unspam'])    echo ' <meta name="no-email-collection" value="' . HTTP_SERVER . '" />' . "\n";
if ($defaultTags['meta_replyto'])   echo ' <meta name="Reply-to" content="' . STORE_OWNER_EMAIL_ADDRESS . '" />' . "\n";
if ($defaultTags['meta_canonical']) echo (tep_not_null($canonical_url) ? ' <link rel="canonical" href="'.$canonical_url.'" />'. "\n" : ' <link rel="canonical" href="'.GetCanonicalURL().'"  >'. "\n");

if ($defaultTags['meta_og'])        include('includes/modules/header_tags_opengraph.php');
echo '<!-- EOF: Header Tags SEO Generated Meta Tags by oscommerce-solution.com -->' . "\n";
?>