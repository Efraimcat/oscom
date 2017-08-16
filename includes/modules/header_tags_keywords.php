<?php
/*
  $Id: header_tags_keywordsseo.php,v 3.0 2011/07/21 by Jack_mcs - http://www.oscommerce-solution.com

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce
  Portions Copyright 2009 oscommerce-solution.com

  Released under the GNU General Public License
*/ 

include_once('includes/functions/header_tags.php');

$keyword = tep_db_prepare_input(strip_tags(trim($keywords)));
$keyword = preg_replace('/[^a-z0-9 ]/i', '', $keyword);

if (isset($keyword[1])) { //ignore one character searches
    $thisIP = $_SERVER['REMOTE_ADDR'];

    if (filter_var($thisIP, FILTER_VALIDATE_IP)) {
       if (filter_var($thisIP, FILTER_FLAG_IPV6)) {
          $thisIP = '0.0.0.1'; //It is IPv6 so ignore
       }
    } else {
       $thisIP = '0.0.0.1'; // NOT VALID IP
    }

    $found = (GetHTSTagCloudLink($keyword, $languages_id) == false ? 0 : 1); //keyword is in products, categories or manufacturers tables
    $keyword_query = tep_db_query("select id FROM headertags_keywords where keyword = '" . tep_db_input($keyword) . "' and language_id = " . (int)$languages_id);
   
    if (tep_db_num_rows($keyword_query) > 0) {
        tep_db_query("update headertags_keywords set counter = counter+1, last_search = now(), found = '" . (int)$found . "' WHERE keyword = '" . tep_db_input($keyword) . "'");     
        
        $id_arry = tep_db_fetch_array($keyword_query); 
        $ip_query = tep_db_query("select 1 FROM headertags_ip_tracker where INET_NTOA(ip_number) = '" . tep_db_input($thisIP) . "' and id_reference = '" . (int)$id_arry['id'] . "'");

        if (tep_db_num_rows($ip_query) == 0) { //else this person already searched for this item
            if ($id_arry['id'] == 0) {
                $maxid_query = tep_db_query("select MAX(id) as id from headertags_keywords");
                $maxid = tep_db_fetch_array($maxid_query);
                $lastid = $maxid['id'] + 1;
            } else {
                $lastid = $id_arry['id'];
            } 
            tep_db_query("insert into headertags_ip_tracker (ip_number, source, id_reference, date_added) VALUES (inet_aton('" . $thisIP . "'), '1', '" . (int)$lastid . "', now() )");     
        }        
    } else {  // the keyword does not exist so add it
        $keyword_query = tep_db_query("select 1 FROM headertags_search where keyword = '" . tep_db_input($keyword) . "' and language_id = '" . (int)$languages_id . "'");
        $found = (tep_db_num_rows($keyword_query) > 0 ? 1 : 0);     
        tep_db_query("insert into headertags_keywords (keyword, last_search, found, language_id) VALUES ('" . tep_db_input($keyword) . "', now(), '" . (int)$found . "', '" .  (int)$languages_id . "')");         
        tep_db_query("insert into headertags_ip_tracker (ip_number, source, id_reference, date_added) VALUES (inet_aton('" . $thisIP . "'), '1', '" . (int)tep_db_insert_id() . "', now() )");     
    }
}
