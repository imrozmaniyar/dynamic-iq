<?php
$path = $_SERVER['REQUEST_URI'];
$urlParts = explode("/", $path);
$id = intval($urlParts[4]);
$pagename = $urlParts[2];
if($pagename=='videos'):
$objseo  = new db_video_master($id);
$pagetitle = $objseo->Get_video_name();	
$pagedescription = strip_tags($objseo->Get_video_description());	
$pagekeywords = $objseo->Get_video_keywords();
elseif($pagename=='articles'):
$objseo  = new db_article_master($id);
$pagetitle = $objseo->Get_article_page_title();
$pagedescription = $objseo->Get_article_meta_description();		
$pagekeywords = $objseo->Get_article_keywords();
elseif($pagename=='photos'):
$objseo  = new db_gallery_master($id);
$pagetitle = $objseo->Get_gallery_name();
$pagedescription = strip_tags($objseo->Get_gallery_description());		
$pagekeywords = $objseo->Get_gallery_keywords();

endif;
?>
<title><?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?></title>
<meta name="description" content="<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>" />
<meta name="keywords" content="<?php echo htmlspecialchars($pagekeywords,ENT_QUOTES, 'UTF-8')?>" />
