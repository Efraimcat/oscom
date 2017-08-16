<?php
include_once('includes/functions/header_tags.php');

$TITLE = '';
$NAME = '';
$URL = '';
$IMG = '';
     
switch (true) {
    case (basename($_SERVER['PHP_SELF']) === 'product_info.php'):
        $NAME = htmlspecialchars($product_info['products_name'], ENT_QUOTES);
        $TITLE = urlencode($product_info['products_name']);
        $URL = urlencode(StripSID(tep_href_link('product_info.php', 'products_id=' . $product_info['products_id'], 'NONSSL', false )));
        $IMG = (tep_not_null($product_info['products_image']) ? "&amp;media=" . HTTP_SERVER . DIR_WS_HTTP_CATALOG. 'images/' . $product_info['products_image'] : '');
    break;

    case (! tep_not_null($TITLE) && isset($_GET['cPath'])):
        $parts = explode("_", $_GET['cPath']);
        $category_id = $parts[count($parts) - 1];
        $category_query = tep_db_query("select cd.categories_name, c.categories_image from categories c left join " .  TABLE_CATEGORIES_DESCRIPTION . " cd on c.categories_id = cd.categories_id where c.categories_id = '" . (int)$category_id . "' and cd.language_id = '" . (int)$languages_id . "'");
        $category = tep_db_fetch_array($category_query);
        $NAME = htmlspecialchars($category['categories_name'], ENT_QUOTES);
        $TITLE = urlencode($category['categories_name']);
        $URL = urlencode(StripSID(tep_href_link('index.php', 'cPath=' . $category_id , 'NONSSL', false )));
        $IMG = (tep_not_null($category['categories_image']) ? "&amp;media=" . HTTP_SERVER . DIR_WS_HTTP_CATALOG. 'images/' . $category['categories_image'] : '');
    break;

    case (defined('article_info.php') && basename($_SERVER['PHP_SELF']) === 'article_info.php'):
        $NAME = htmlspecialchars($article_info['articles_name'], ENT_QUOTES);
        $TITLE = urlencode($article_info['articles_name']);
        $URL = urlencode(StripSID(tep_href_link('article_info.php', 'articles_id=' . $article_info['articles_id'], 'NONSSL', false )));
    break;  

    case (defined('information.php') && basename($_SERVER['PHP_SELF']) === 'information.php'):
        $NAME = htmlspecialchars($title, ENT_QUOTES);
        $TITLE = urlencode($title);
        $URL = urlencode(StripSID(tep_href_link('information.php', 'info_id=' . (int)$_GET['info_id'], 'NONSSL', false )));
    break;     

    case (defined('pages.php') && basename($_SERVER['PHP_SELF']) === 'pages.php'):
        $NAME = htmlspecialchars($header_tags_array['title'], ENT_QUOTES);
        $TITLE = urlencode($header_tags_array['title']);
        $URL = urlencode(StripSID(tep_href_link('pages.php', 'pages=' . tep_db_prepare_input($_GET['page']), 'NONSSL', false )));
    break;       

    default: 
        $URL = urlencode(StripSID(tep_href_link(basename($_SERVER['PHP_SELF']))));
}

$db_query = tep_db_query("select groupname, url, data from headertags_social where section='socialicons' order by groupname desc");

$dataStr = '<div class="hts_bookmarks">';
$dataStrBox = '';

$ctr = 0;
$width = '';
$height = '';


while($db = tep_db_fetch_array($db_query)) {
    if ($ctr == 0) {
        list ($width, $height) = explode('x',$db['data']);
    }

    $name = ucfirst($db['groupname']);
    $url = str_replace('&', '&amp', $db['url']);
    $url = str_replace('URL', $URL, $url);
    $url = str_replace('TITLE', $TITLE, $url);
    $url = '<a rel="nofollow" target="_blank" href="' . $url . $IMG .  '&title=' . $TITLE . '"><img style="vertical-align:middle;display:inline;border-style:none" title="' . ucfirst($db['groupname']) . '" alt="' . ucfirst($db['groupname']) . '" src="' . 'images/socialbookmark/' . $db['groupname'] .'-'.$db['data'] . '.png' . '" width="'.$width.'" height="'.$height.'" /></a>';

    $dataStrBox .= '<span style="padding:1px;">' . $url .'</span>';

    $dataStr .= '<div style="float:right;">';
    $dataStr .= '<div style="padding-right:1px;">' .$url . '</div>';
    $dataStr .= '</div>';

    $ctr++;
}

$padding = $height / 2; //align boxes

$dataStr .=  '</div>';

if (! isset($inInfoBox) || ! $inInfoBox) {
    if (HEADER_TAGS_ENABLE_GOOGLE_PLUS == 'true') {
       echo '<script type="text/javascript" src="ext/javascript/plusone.js"></script>';
    }
    echo '<div style="float:right;">';
    if (HEADER_TAGS_ENABLE_GOOGLE_PLUS == 'true') {
    echo '<div style="float:left; padding-top:' . $padding . 'px; padding-right:20px;"><g:plusone></g:plusone></div>';
    }
    echo '<div style="float:right;">' . $dataStr . '</div>';
    echo '</div>';
}
