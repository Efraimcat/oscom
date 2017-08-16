<div class="col-sm-<?php echo $content_width; ?> category-listing">
  <div itemscope itemtype="http://schema.org/ItemList">
    <meta itemprop="itemListOrder" content="http://schema.org/ItemListUnordered" />
    <meta itemprop="name" content="<?php echo $category['categories_name']; ?>" />
    
    <?php
    while ($categories = tep_db_fetch_array($categories_query)) {
      $cPath_new = tep_get_path($categories['categories_id']);
      /*** Begin Header Tags SEO ***/ 
      $htsDesc = '';
      if (HEADER_TAGS_DISPLAY_CATEGORY_SHORT_DESCRIPTION !== 'Off' && tep_not_null($categories['hts_desc'])) {
          $lgth = (int)HEADER_TAGS_DISPLAY_CATEGORY_SHORT_DESCRIPTION;
          $htsDesc = '<br>';
          if (isset($categories['hts_desc'][$lgth])) { 
              $htsDesc .= substr($categories['hts_desc'], 0, ($lgth - 3)) . '<span class="hts_listing_see_more">...' . TEXT_SEE_MORE . '</span>';
          } else {    
              $htsDesc .= $categories['hts_desc'];
          }
      }    
      echo '<div class="col-sm-' . $category_width . '">';
      echo '  <div class="text-center">';
      echo '    <a href="' . tep_href_link('index.php', $cPath_new) . '">' . tep_image('images/' . $categories['categories_image'], $categories['categories_name'], SUBCATEGORY_IMAGE_WIDTH, SUBCATEGORY_IMAGE_HEIGHT) . '</a>';
      echo '    <div class="caption text-center">';
      echo '      <h5><a href="' . tep_href_link('index.php', $cPath_new) . '"><span itemprop="itemListElement">' . $categories['categories_name'] .  $htsDesc . '</span></a></h5>';
      echo '    </div>';	
      /*** End Header Tags SEO ***/ 	
      echo '  </div>';
      echo '</div>';
    }
    ?>    
  </div>    
<!--- BEGIN Header Tags SEO Social Bookmarks -->
<?php if (FALSE && HEADER_TAGS_DISPLAY_SOCIAL_BOOKMARKS == 'true') {
   echo '<div style="margin-top:5px; float:right;">';
   include('includes/modules/' . 'header_tags_social_bookmarks.php');
   echo '</div>';
 } 
?>
<!--- END Header Tags SEO Social Bookmarks -->  
</div>
