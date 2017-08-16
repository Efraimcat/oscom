<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2014 osCommerce

  Released under the GNU General Public License
*/

  class cm_pi_headertags_seo {
    var $code;
    var $group;
    var $title;
    var $description;
    var $sort_order;
    var $enabled = false;

    function __construct() {
      $this->code = get_class($this);
      $this->group = basename(dirname(__FILE__));

      $this->title = MODULE_CONTENT_PRODUCT_INFO_HTS_TITLE;
      $this->description = MODULE_CONTENT_PRODUCT_INFO_HTS_DESCRIPTION;

      if ( defined('MODULE_CONTENT_PRODUCT_INFO_HTS_STATUS') ) {
        $this->sort_order = MODULE_CONTENT_PRODUCT_INFO_HTS_SORT_ORDER;
        $this->enabled = (MODULE_CONTENT_PRODUCT_INFO_HTS_STATUS == 'True');
      }
    }

    function execute() {
      global $oscTemplate, $_GET, $languages_id;
      
      if (HEADER_TAGS_ENABLE_ADDITIONAL_WORDS == 'true') {
          $content_width = (int)MODULE_CONTENT_PRODUCT_INFO_HTS_CONTENT_WIDTH;

          $hts_query = tep_db_query("select products_head_additional_words from products_description where products_id = '" . (int)$_GET['products_id'] . "' and language_id = '". (int)$languages_id . "' order by products_head_additional_words");
          $hts_data = NULL;      
            
          if (tep_db_num_rows($hts_query) > 0) {
              $hts = tep_db_fetch_array($hts_query);
              if (isset($hts['products_head_additional_words'][0])) {
                  $hts_data = explode(',', $hts['products_head_additional_words']); 
                  $cnt = count($hts_data);
                  $words = '';
                  
                  
                  for ($i = 0; $i < $cnt; ++$i) {
                      $words .= '<span">';
                      
                      $separator ='';
                      if ($i > 0) {
                          $separator = ($i == ($cnt - 1) ? ' and ' : ', ');
                      }
                       
                      $words .= '<a href="' . tep_href_link('product_info.php', 'products_id=' . (int)$_GET['products_id']) . '">';
                      $words .= $separator . trim($hts_data[$i]) . '</a></span>';             
                  } 
                  
                  ob_start();
                  ?>
                    <div class="col-sm-<?php echo $content_width; ?> ">
                     <div class="smallText" style="padding-top:20px"><?php echo MODULE_CONTENT_PRODUCT_INFO_HTS_CAPTION; ?></div>
                     <?php echo $words; ?>
                    </div>
                 
                  <?php
                  $template = ob_get_clean();

                  $oscTemplate->addContent($template, $this->group);
              }
          }
      }
    }

    function isEnabled() {
      return $this->enabled;
    }

    function check() {
      return defined('MODULE_CONTENT_PRODUCT_INFO_HTS_STATUS');
    }

    function install() {
      tep_db_query("insert into configuration (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('Enable Reviews Module', 'MODULE_CONTENT_PRODUCT_INFO_HTS_STATUS', 'True', 'Should the additional words for this product be shown on the product info page?', '6', '1', 'tep_cfg_select_option(array(\'True\', \'False\'), ', now())");
      tep_db_query("insert into configuration (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('Content Width', 'MODULE_CONTENT_PRODUCT_INFO_HTS_CONTENT_WIDTH', '6', 'What width container should the content be shown in?', '6', '1', 'tep_cfg_select_option(array(\'12\', \'11\', \'10\', \'9\', \'8\', \'7\', \'6\', \'5\', \'4\', \'3\', \'2\', \'1\'), ', now())");
      tep_db_query("insert into configuration (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) values ('Sort Order', 'MODULE_CONTENT_PRODUCT_INFO_HTS_SORT_ORDER', '0', 'Sort order of display. Lowest is displayed first.', '6', '0', now())");
    }

    function remove() {
      tep_db_query("delete from configuration where configuration_key in ('" . implode("', '", $this->keys()) . "')");
    }

    function keys() {
      return array('MODULE_CONTENT_PRODUCT_INFO_HTS_STATUS', 'MODULE_CONTENT_PRODUCT_INFO_HTS_CONTENT_WIDTH', 'MODULE_CONTENT_PRODUCT_INFO_HTS_SORT_ORDER');
    }
  }

