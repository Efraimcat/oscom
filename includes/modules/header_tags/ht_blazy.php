<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2014 osCommerce

  Released under the GNU General Public License
*/

  class ht_blazy {
    var $code = 'ht_blazy';
    var $group = 'footer_scripts';
    var $title;
    var $description;
    var $sort_order;
    var $enabled = false;

    function __construct() {
      $this->title = MODULE_FOOTER_SCRIPT_BLAZY_TITLE;
      $this->description = MODULE_FOOTER_SCRIPT_BLAZY_DESCRIPTION;

      if ( defined('MODULE_FOOTER_SCRIPT_BLAZY_STATUS') ) {
        $this->sort_order = MODULE_FOOTER_SCRIPT_BLAZY_SORT_ORDER;
        $this->enabled = (MODULE_FOOTER_SCRIPT_BLAZY_STATUS == 'True');
      }
    }

    function execute() {
      global $oscTemplate;	
	
		$oscTemplate->addBlock('<script src="ext/blazy/blazy.min.js"></script>' . "\n", $this->group);
		
		$oscTemplate->addBlock('<script>$( document ).ready(function() { 
			
			$(\'img\').each(function () {
				  var origsrc = $(this).attr(\'src\');
				  $(this).attr(\'data-src\',origsrc);
				  $(this).attr(\'src\', \'images/ajax-loader.gif\');
				  $(this).addClass(\'b-lazy\');
		
			});
			
		var bLazy = new Blazy({
			error: function(ele, msg){
			  if(msg === \'missing\'){
				// Data-src is missing
				console.log(msg);
			  } else if(msg === \'invalid\'){
				// Data-src is invalid
				//console.log( $(ele).data("src") );
				var src = $(ele).data("src");
				src = \'no-image.jpg\';
				$(ele).attr("src",src);
			  }  
			}          
      });

	  }); </script>' . "\n", $this->group);
		}

    function isEnabled() {
      return $this->enabled;
    }

    function check() {
      return defined('MODULE_FOOTER_SCRIPT_BLAZY_STATUS');
    }

    function install() {
      tep_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('Enable Ajax Module', 'MODULE_FOOTER_SCRIPT_BLAZY_STATUS', 'True', 'Enable the ajax cart?', '6', '1', 'tep_cfg_select_option(array(\'True\', \'False\'), ', now())");
      tep_db_query("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) values ('Sort Order', 'MODULE_FOOTER_SCRIPT_BLAZY_SORT_ORDER', '850', 'Sort order of script execution. Lowest is displayed first.', '6', '0', now())");
    }

    function remove() {
      tep_db_query("delete from " . TABLE_CONFIGURATION . " where configuration_key in ('" . implode("', '", $this->keys()) . "')");
    }

    function keys() {
      return array('MODULE_FOOTER_SCRIPT_BLAZY_STATUS', 'MODULE_FOOTER_SCRIPT_BLAZY_SORT_ORDER');
    }
  }
?>