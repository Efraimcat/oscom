<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com 

  Copyright (c) 2016 osCommerce

  Released under the GNU General Public License
*/

  define('MODULE_NAVBAR_SHOPPING_CART_TITLE', 'Pannier');
  define('MODULE_NAVBAR_SHOPPING_CART_DESCRIPTION', 'Show Shopping Cart in Navbar');
  
  define('MODULE_NAVBAR_SHOPPING_CART_CONTENTS', '<i class="fa fa-shopping-cart"></i> %s article(s) <span class="caret"></span>');
  define('MODULE_NAVBAR_SHOPPING_CART_NO_CONTENTS', '<i class="fa fa-shopping-cart"></i> 0 articles');
  define('MODULE_NAVBAR_SHOPPING_CART_HAS_CONTENTS', '%s article(s), %s');
  define('MODULE_NAVBAR_SHOPPING_CART_VIEW_CART', 'Voir Pannier');
  define('MODULE_NAVBAR_SHOPPING_CART_CHECKOUT', '<i class="fa fa-angle-right"></i> Confirmer commande');
  
  define('MODULE_NAVBAR_SHOPPING_CART_PRODUCT', '<a href="' . tep_href_link('product_info.php', 'products_id=%s') . '">%s x %s</a>');
  