<?php
/*
  $Id: header_tags_seo.php,v 1.00 2008/04/04 Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

  $cl_box_groups[] = array(
    'heading' => BOX_HEADING_HEADER_TAGS_SEO,
    'apps' => array(
      array(
        'code' => 'header_tags_seo.php',
        'title' => BOX_HEADER_TAGS_ADD_A_PAGE,
        'link' => tep_href_link('header_tags_seo.php')
      ),
      array(
        'code' => 'header_tags_seo_silo.php',
        'title' => BOX_HEADER_TAGS_SILO,
        'link' => tep_href_link('header_tags_seo_silo.php')
      ),
      array(
        'code' => 'header_tags_seo_keywords.php',
        'title' => BOX_HEADER_TAGS_KEYWORDS,
        'link' => tep_href_link('header_tags_seo_keywords.php')
      ),
      array(
        'code' => 'header_tags_fill_tags.php',
        'title' => BOX_HEADER_TAGS_FILL_TAGS,
        'link' => tep_href_link('header_tags_fill_tags.php')
      ),
      array(
        'code' => 'header_tags_seo_social.php',
        'title' => BOX_HEADER_TAGS_SOCIAL,
        'link' => tep_href_link('header_tags_seo_social.php')
      ),      
      array(
        'code' => 'header_tags_test.php',
        'title' => BOX_HEADER_TAGS_TEST,
        'link' => tep_href_link('header_tags_test.php')
      )
    )
  );
?>
