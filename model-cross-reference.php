<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2010 osCommerce

  Released under the GNU General Public License
*/

  require('includes/application_top.php');

  require('includes/languages/'. $language . '/model-cross-reference.php');

  $where = (isset($_GET['model']) ? " and products_model like '%" . tep_db_prepare_input($_GET['model']) . "%' " : '');
  if (isset($_POST['action']) && $_POST['action'] == 'model_search') {
      $model = tep_db_prepare_input($_POST['model_search']);
      $where = " and ( products_model like '%" . tep_db_input($model) . "%') ";     
  } 
  $breadcrumb->add(NAVBAR_TITLE, tep_href_link('model-cross-reference.php'));

  require('includes/template_top.php');
?>

<div class="page-header">
  <h1><?php echo HEADING_TITLE; ?></h1>
</div>

<div class="contentContainer">
  <div class="contentText">
          
           <div style="display:inline-block"><?php echo TEXT_INFORMATION; ?></div>
           <div style="display:inline-block; float:right">
            <?php echo tep_draw_form('search_models', 'model-cross-reference.php', 'post') . tep_hide_session_id() . tep_draw_hidden_field('action', 'model_search'); ?>
            <?php echo tep_draw_input_field('model_search', '', ' placeholder="' . TEXT_SEARCH_PLACEHOLDER . '" onChange="this.form.submit();" maxlength="60"', false); ?> 
            </form> 
           </div>

  </div>

  <div class="contentText" style="padding-top:15px">
  <?php  
  $models_query_raw = "select p.products_id, p.products_model, p.products_image, pd.products_head_title_tag, pd.products_name, pd.products_description from products p left join products_description pd on p.products_id = pd.products_id where ( p.products_model != '' and p.products_model is not null ) and pd.language_id = '" . (int)$languages_id . "'" . $where . " order by p.products_model";
  $models_split = new splitPageResults($models_query_raw, MAX_DISPLAY_SEARCH_RESULTS);
  $models_query = tep_db_query($models_split->sql_query);
  while ($models = tep_db_fetch_array($models_query)) {  
      $pdesc = strip_tags($models['products_description']);
      $pdesc = substr($pdesc, 0, 20);
  ?> 
      <div class="col-sm-12">
         <?php 
         echo 
          '<div class="hts_model_xref_img" style="display:flex; align-items:center; padding-bottom:10px"><a href="' .tep_href_link('product_info.php', 'products_id=' . $models['products_id']) . '">' . tep_image('images/' .$models['products_image'], $models['products_head_title_tag'], 40, 40) . '</a>
            <a class="hts_model_xref" href="' .tep_href_link('product_info.php', 'products_id=' . $models['products_id']) . '">' . $models['products_model'] . '</a>
             <span class="fa fa-hand-o-right" style="padding:4px 10px;"></span>
             <a class="hts_model_xref" href="' .tep_href_link('product_info.php', 'products_id=' . $models['products_id']) . '">' . $models['products_name'] . ' ' . $pdesc . '<span class="hts_listing_see_more">...</span></a>
           </div>';

         ?>
      </div>
  <?php       
  }
  ?>
  </div>
  
<?php
  if (($models_split->number_of_rows > 0) && ((PREV_NEXT_BAR_LOCATION == '2') || (PREV_NEXT_BAR_LOCATION == '3'))) {
?>
    <div style="clear:both; padding-top:20px"></div>
<div class="row">
  <div class="col-sm-6 pagenumber hidden-xs">
    <?php echo $models_split->display_count(TEXT_DISPLAY_NUMBER_OF_PRODUCTS); ?>
  </div>
  <div class="col-sm-6">
    <div class="pull-right pagenav"><ul class="pagination"><?php echo $models_split->display_links(MAX_DISPLAY_PAGE_LINKS, tep_get_all_get_params(array('page', 'info', 'x', 'y'))); ?></ul></div>
    <span class="pull-right"><?php echo TEXT_RESULT_PAGE; ?></span>
  </div>
</div>

<?php
  }
?> 


</div>

<?php
  require('includes/template_bottom.php');
  require('includes/application_bottom.php');
?>
