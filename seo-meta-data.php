<?php
$actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if(($actual_link == $domain) && (basename($_SERVER['PHP_SELF'])== 'index.php' )):
?>	
<title> خبریں ، تازہ ترین خبریں ، بریکنگ نیو - The Inquilab</title>
<meta name="description" content=" Urdu News - ہندوستان اور پوری دنیا کی سیاست ، بالی ووڈ ، ٹکنالوجی ، کرکٹ سے متعلق اردو میں تازہ ترین اردو خبروں کی سرخیاں لائیں۔
" />
<meta name="keywords" content="  اردو نیوز, اردو میں خبریں News in Urdu, Urdu News, latest news in Urdu" />
<meta property="og:title" content="خبریں ، تازہ ترین خبریں ، بریکنگ نیو - The Inquilab"/>
<meta property="og:description" content="  Urdu News - ہندوستان اور پوری دنیا کی سیاست ، بالی ووڈ ، ٹکنالوجی ، کرکٹ سے متعلق اردو میں تازہ ترین اردو خبروں کی سرخیاں لائیں۔
  "/>
<meta property="og:site_name" content="Inquilab.com"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="<?php echo $urllogin?>"/>
<meta property="og:image" content="https://www.inquilab.com/images/INQ_logo.png"/>
<meta property="og:image:type" content="image/png"/>
<meta property="fb:page_id" content="135185597251703"/>
<meta property="fb:app_id" content="289797971716379" />
<meta name="twitter:site" content="@theinquilabin"/>
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:creator" content="@theinquilabin"/>
<meta name="robots" content="index,follow"/>
<script type="application/ld+json"> 
{ 
"@context": "https://schema.org", 
"@type": "Organization", 
"name": "Inquilab", 
"legalName" : "Mid Day Infomedia Limited", 
"url": "https://www.inquilab.com/",
"logo": {    
"@type": "ImageObject",    
"url": "https://www.inquilab.com/images/logo.png",     
"width": 213,     
"height": 58 
}, 
"foundingDate": "1938", 
"founders": [ { 
"@type": "Person", 
"name": "Abdul Hamid Ansari" 
} ], 
"sameAs": [   
"https://www.facebook.com/theinquilabin",     
"https://twitter.com/theinquilabin",     
"https://www.youtube.com/channel/UCn6dyhupxktN8sgBMRGaO_w"
]}
</script>
<script type="application/ld+json">
{
"@context": "https://schema.org",
"@type":"WebSite",
"url":"https://www.inquilab.com/",
"potentialAction":
{
"@type": "SearchAction",
"target":"https://www.inquilab.com/search/{search_term}-all",
"query-input":"required name=search_term"
}}
</script>
<?php elseif($actual_link == $domain.'videos/'):?>
<title>   تازہ ترین آن لائن ویڈیوز | Watch Popular Videos and Latest Video Clips Online       </title>
<meta name="description" content=" تازہ ترین آن لائن ویڈیوز: Watch latest entertainment videos, popular sports video, life and style videos, top Bollywood, Hollywood and weird videos clips at Inquilab.com.   " />
<meta name="keywords" content=" Videos, Videos Latest, Top Entertainment videos, News videos, Popular videos" />	
<?php elseif($actual_link == $domain.'photos/'):?>
<title>  تازہ ترین فوٹو گیلریوں | Latest Photo Gallery | Celebrity Hot Pictures | Celebrity Photoshoots    </title>
<meta name="description" content="  تازہ ترین فوٹو گیلریوں - Get the latest photo galleries on celebrities from Bollywood, News, Sports and events. Also, get the hot pictures of your favourite celebrities with Inquilab.com   " />
<meta name="keywords" content=" تازہ ترین فوٹو گیلریوں, Online Photos, Fashion Photos, News Photos, Sports Photos, Entertainment Photos, Entertainment Photo Galleries, Sports Photo Galleries, Life and Style Photo Galleries, News Photo Galleries " />	
<?php elseif($actual_link == $domain.'photos/entertainment'):?>
<title>  تازہ ترین   فریحات   فوٹو گیلری |   </title>
<meta name="description" content=" خبریں  Entertainment photos, خبریں  photos, Latest Entertainment photos, Top Entertainment Photos, Entertainment popular photo gallery " />
<meta name="keywords" content="  تازہ ترین فوٹو گیلریوں, Online Photos, Fashion Photos, News Photos, Sports Photos, Entertainment Photos, Entertainment Photo Galleries, Sports Photo Galleries, Life and Style Photo Galleries, News Photo Galleries  " />	
<?php elseif($actual_link == $domain.'photos/news'):?>
<title>  تازہ ترین     خبریں   فوٹو گیلری |   </title>
<meta name="description" content="   خبریں    News photos,   خبریں   photos, Latest News photos, Top News Photos, News popular photo gallery " />
<meta name="keywords" content="  تازہ ترین فوٹو گیلریوں, Online Photos, Fashion Photos, News Photos, Sports Photos, News Photos, News Photo Galleries, Sports Photo Galleries, Life and Style Photo Galleries, News Photo Galleries  " />	
<?php elseif($actual_link == $domain.'photos/sports'):?>
<title>  تازہ ترین       کھیل کود    فوٹو گیلری |   </title>
<meta name="description" content="   خ  کھیل کود     Sports photos,     کھیل کود     photos, Latest Sports photos, Top Sports Photos, Sports popular photo gallery " />
<meta name="keywords" content="  تازہ ترین فوٹو گیلریوں, Online Photos, Fashion Photos, News Photos, Sports Photos, News Photos, News Photo Galleries, Sports Photo Galleries, Life and Style Photo Galleries, News Photo Galleries  " />	
<?php elseif($actual_link == $domain.'photos/lifestyle'):?>
<title>  تازہ ترین       طرزِ زندگی    فوٹو گیلری |   </title>
<meta name="description" content="   خطرزِ زندگی     Lifestyle photos,     طرزِ زندگی    photos, Latest Lifestyle photos, Top Lifestyle Photos, Lifestyle popular photo gallery " />
<meta name="keywords" content="  تازہ ترین فوٹو گیلریوں, Online Photos, Fashion Photos, News Photos, Sports Photos, News Photos, News Photo Galleries, Sports Photo Galleries, Life and Style Photo Galleries, News Photo Galleries  " />	
<?php elseif($actual_link == $domain.'videos/entertainment'):?>
<title> تفریحات   videos: Top best entertainment videos online in Urdu</title>
<meta name="description" content="  تفریحات  : Watch best entertainment videos, special coverage and popular videos." />
<meta name="keywords" content=" تفریحات  , Entertainment videos, Entertainment Videos, Latest Entertainment Videos, Top Entertainment videos, Entertainment news videos, Entertainment popular videos  " />	
<?php elseif($actual_link == $domain.'videos/news'):?>
<title> خبریں  videos: Top best News videos online in Urdu</title>
<meta name="description" content="  بریں  : Watch best News videos, special coverage and popular videos." />
<meta name="keywords" content="  بریں  , News videos, News Videos, Latest News Videos, Top News videos, News news videos, News popular videos " />	
<?php elseif($actual_link == $domain.'videos/sports'):?>
<title> کھیل کود  videos: Top best Sports videos online in Urdu</title>
<meta name="description" content="  کھیل کود : Watch best Sports videos, special coverage and popular videos." />
<meta name="keywords" content="  کھیل کود , Sports videos, Sports Videos, Latest Sports Videos, Top Sports videos, Sports news videos, Sports popular videos " />	
<?php endif;?>
<?php
// News //
$actual_link1 = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if($actual_link1 == $domain.'news/'):
$objCATM = new db_category_master;
$strWhere="category_master_id=14";
$internetobjCATM=$objCATM->selectAll($strWhere,0,1);
if($internetobjCATM[0] > 0):
$i=0;
while($internetobjCATMS = mysql_fetch_object($internetobjCATM[1])){
$i=$i+1;
$pagetitle  = $internetobjCATMS->category_master_meta_title;
$pagedescription   = $internetobjCATMS->category_master_meta_desc;
$pagekeywords= $internetobjCATMS->category_master_meta_keywords;
?>
<title><?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?></title>
<meta name="description" content="<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>" />
<meta name="keywords" content="<?php echo htmlspecialchars($pagekeywords,ENT_QUOTES, 'UTF-8')?>" />
<meta property="og:title" content="<?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?>"/>
<meta property="og:description" content="<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="<?php echo $urllogin?>"/>
<meta property="og:image" content="https://www.inquilab.com/images/INQ_logo.png"/>
<meta property="og:site_name" content="Inquilab.com"/>
<meta property="og:image:type" content="image/png"/>
<meta property="fb:page_id" content="135185597251703"/>
<meta property="fb:app_id" content="289797971716379" />
<meta name="twitter:site" content="@theinquilabin"/>
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:creator" content="@theinquilabin"/>
<meta name="robots" content="index,follow"/>
<script type="application/ld+json">
{
"@context": "https://schema.org/",
"@type": "WebPage",
"name":"<?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?>",
"description": "<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>",
"inLanguage":"Urdu",
"publisher":{
"@type":"Organization",
"name":"Inquilab",
"logo":{
"@type": "ImageObject",
"url":"https://www.inquilab.com/images/logo.png",    
"width": 213,     
"height": 58
}}}
</script>
<script type="application/ld+json"> 
{ 
"@context": "https://schema.org", 
"@type": "BreadcrumbList", 
"itemListElement": 
[
{ 
"@type": "ListItem", 
"position": 1, 
"item": 
{ 
"@id": "https://www.inquilab.com/", 
"name": "Home" 
} 
},
{ 
"@type": "ListItem", 
"position": 2, 
"item": { 
"@id": "https://www.inquilab.com/news", 
"name": "News" 
} 
} 
]}
</script>
<?php  
 }
	endif;
 endif;
 ?>
 <?php
// entertainment //
$actual_link1 = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if($actual_link1 == $domain.'entertainment/'):
$objE = new db_category_master;
$strWhere="category_master_id=15";
$Ent=$objE->selectAll($strWhere,0,1);
if($Ent[0] > 0):
$i=0;
while($EntS      = mysql_fetch_object($Ent[1])){
$i=$i+1;
$pagetitle       = $EntS->category_master_meta_title;
$pagedescription = $EntS->category_master_meta_desc;
$pagekeywords    = $EntS->category_master_meta_keywords;
?>
<title><?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?></title>
<meta name="description" content="<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>" />
<meta name="keywords" content="<?php echo htmlspecialchars($pagekeywords,ENT_QUOTES, 'UTF-8')?>" />
<meta property="og:title" content="<?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?>"/>
<meta property="og:description" content="<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="<?php echo $urllogin?>"/>
<meta property="og:image" content="https://www.inquilab.com/images/INQ_logo.png"/>
<meta property="og:site_name" content="Inquilab.com"/>
<meta property="og:image:type" content="image/png"/>
<meta property="fb:page_id" content="135185597251703"/>
<meta property="fb:app_id" content="289797971716379" />
<meta name="twitter:site" content="@theinquilabin"/>
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:creator" content="@theinquilabin"/>
<meta name="robots" content="index,follow"/>
<script type="application/ld+json">
{
"@context": "https://schema.org/",
"@type": "WebPage",
"name":"<?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?>",
"description": "<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>",
"inLanguage":"Urdu",
"publisher":{
"@type":"Organization",
"name":"Inquilab",
"logo":{
"@type": "ImageObject",
"url":"https://www.inquilab.com/images/logo.png",    
"width": 213,     
"height": 58
}}}
</script>
<script type="application/ld+json"> 
{ 
"@context": "https://schema.org", 
"@type": "BreadcrumbList", 
"itemListElement": 
[
{ 
"@type": "ListItem", 
"position": 1, 
"item": 
{ 
"@id": "https://www.inquilab.com/", 
"name": "Home" 
} 
},
{ 
"@type": "ListItem", 
"position": 2, 
"item": { 
"@id": "https://www.inquilab.com/entertainment", 
"name": "Entertainment" 
} 
} 
]}
</script>
<?php  
 }
	endif;
 endif;
 ?>
  <?php
// Sports //
$actual_link1 = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if($actual_link1 == $domain.'sports/'):
$objS = new db_category_master;
$strWhere="category_master_id=16";
$Spo=$objS->selectAll($strWhere,0,1);
if($Spo[0] > 0):
$i=0;
while($SpoS      = mysql_fetch_object($Spo[1])){
$i=$i+1;
$pagetitle       = $SpoS->category_master_meta_title;
$pagedescription = $SpoS->category_master_meta_desc;
$pagekeywords    = $SpoS->category_master_meta_keywords;
?>
<title><?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?></title>
<meta name="description" content="<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>" />
<meta name="keywords" content="<?php echo htmlspecialchars($pagekeywords,ENT_QUOTES, 'UTF-8')?>" />
<meta property="og:title" content="<?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?>"/>
<meta property="og:description" content="<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="<?php echo $urllogin?>"/>
<meta property="og:image" content="https://www.inquilab.com/images/INQ_logo.png"/>
<meta property="og:site_name" content="Inquilab.com"/>
<meta property="og:image:type" content="image/png"/>
<meta property="fb:page_id" content="135185597251703"/>
<meta property="fb:app_id" content="289797971716379" />
<meta name="twitter:site" content="@theinquilabin"/>
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:creator" content="@theinquilabin"/>
<meta name="robots" content="index,follow"/>
<script type="application/ld+json">
{
"@context": "https://schema.org/",
"@type": "WebPage",
"name":"<?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?>",
"description": "<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>",
"inLanguage":"Urdu",
"publisher":{
"@type":"Organization",
"name":"Inquilab",
"logo":{
"@type": "ImageObject",
"url":"https://www.inquilab.com/images/logo.png",    
"width": 213,     
"height": 58
}}}
</script>
<script type="application/ld+json"> 
{ 
"@context": "https://schema.org", 
"@type": "BreadcrumbList", 
"itemListElement": 
[
{ 
"@type": "ListItem", 
"position": 1, 
"item": 
{ 
"@id": "https://www.inquilab.com/", 
"name": "Home" 
} 
},
{ 
"@type": "ListItem", 
"position": 2, 
"item": { 
"@id": "https://www.inquilab.com/sports", 
"name": "Sports" 
} 
} 
]}
</script>
<?php  
 }
	endif;
 endif;
 ?>
   <?php
// Features //
$actual_link1 = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if($actual_link1 == $domain.'features/'):
$objF = new db_category_master;
$strWhere="category_master_id=17";
$Fea=$objF->selectAll($strWhere,0,1);
if($Fea[0] > 0):
$i=0;
while($FeaS      = mysql_fetch_object($Fea[1])){
$i=$i+1;
$pagetitle       = $FeaS->category_master_meta_title;
$pagedescription = $FeaS->category_master_meta_desc;
$pagekeywords    = $FeaS->category_master_meta_keywords;
?>
<title><?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?></title>
<meta name="description" content="<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>" />
<meta name="keywords" content="<?php echo htmlspecialchars($pagekeywords,ENT_QUOTES, 'UTF-8')?>" />
<meta property="og:title" content="<?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?>"/>
<meta property="og:description" content="<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="<?php echo $urllogin?>"/>
<meta property="og:image" content="https://www.inquilab.com/images/INQ_logo.png"/>
<meta property="og:site_name" content="Inquilab.com"/>
<meta property="og:image:type" content="image/png"/>
<meta property="fb:page_id" content="135185597251703"/>
<meta property="fb:app_id" content="289797971716379" />
<meta name="twitter:site" content="@theinquilabin"/>
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:creator" content="@theinquilabin"/>
<meta name="robots" content="index,follow"/>
<script type="application/ld+json">
{
"@context": "https://schema.org/",
"@type": "WebPage",
"name":"<?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?>",
"description": "<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>",
"inLanguage":"Urdu",
"publisher":{
"@type":"Organization",
"name":"Inquilab",
"logo":{
"@type": "ImageObject",
"url":"https://www.inquilab.com/images/logo.png",    
"width": 213,     
"height": 58
}}}
</script>
<script type="application/ld+json"> 
{ 
"@context": "https://schema.org", 
"@type": "BreadcrumbList", 
"itemListElement": 
[
{ 
"@type": "ListItem", 
"position": 1, 
"item": 
{ 
"@id": "https://www.inquilab.com/", 
"name": "Home" 
} 
},
{ 
"@type": "ListItem", 
"position": 2, 
"item": { 
"@id": "https://www.inquilab.com/features", 
"name": "Features" 
} 
} 
]}
</script>
<?php  
 }
	endif;
 endif;
 ?>
<?php
// lifestyle //
$actual_link1 = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if($actual_link1 == $domain.'lifestyle/'):
$objL = new db_category_master;
$strWhere="category_master_id=18";
$Lif=$objL->selectAll($strWhere,0,1);
if($Lif[0] > 0):
$i=0;
while($LifS      = mysql_fetch_object($Lif[1])){
$i=$i+1;
$pagetitle       = $LifS->category_master_meta_title;
$pagedescription = $LifS->category_master_meta_desc;
$pagekeywords    = $LifS->category_master_meta_keywords;
?>
<title><?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?></title>
<meta name="description" content="<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>" />
<meta name="keywords" content="<?php echo htmlspecialchars($pagekeywords,ENT_QUOTES, 'UTF-8')?>" />
<meta property="og:title" content="<?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?>"/>
<meta property="og:description" content="<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="<?php echo $urllogin?>"/>
<meta property="og:image" content="https://www.inquilab.com/images/INQ_logo.png"/>
<meta property="og:site_name" content="Inquilab.com"/>
<meta property="og:image:type" content="image/png"/>
<meta property="fb:page_id" content="135185597251703"/>
<meta property="fb:app_id" content="289797971716379" />
<meta name="twitter:site" content="@theinquilabin"/>
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:creator" content="@theinquilabin"/>
<meta name="robots" content="index,follow"/>
<script type="application/ld+json">
{
"@context": "https://schema.org/",
"@type": "WebPage",
"name":"<?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?>",
"description": "<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>",
"inLanguage":"Urdu",
"publisher":{
"@type":"Organization",
"name":"Inquilab",
"logo":{
"@type": "ImageObject",
"url":"https://www.inquilab.com/images/logo.png",    
"width": 213,     
"height": 58
}}}
</script>
<script type="application/ld+json"> 
{ 
"@context": "https://schema.org", 
"@type": "BreadcrumbList", 
"itemListElement": 
[
{ 
"@type": "ListItem", 
"position": 1, 
"item": 
{ 
"@id": "https://www.inquilab.com/", 
"name": "Home" 
} 
},
{ 
"@type": "ListItem", 
"position": 2, 
"item": { 
"@id": "https://www.inquilab.com/lifestyle", 
"name": "Lifestyle" 
} 
} 
]}
</script>
<?php  
 }
	endif;
 endif;
 ?>
<?php
// Students //
$actual_link1 = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if($actual_link1 == $domain.'students/'):
$objSU = new db_category_master;
$strWhere="category_master_id=19";
$Sud=$objSU->selectAll($strWhere,0,1);
if($Sud[0] > 0):
$i=0;
while($SudS      = mysql_fetch_object($Sud[1])){
$i=$i+1;
$pagetitle       = $SudS->category_master_meta_title;
$pagedescription = $SudS->category_master_meta_desc;
$pagekeywords    = $SudS->category_master_meta_keywords;
?>
<title><?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?></title>
<meta name="description" content="<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>" />
<meta name="keywords" content="<?php echo htmlspecialchars($pagekeywords,ENT_QUOTES, 'UTF-8')?>" />
<meta property="og:title" content="<?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?>"/>
<meta property="og:description" content="<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="<?php echo $urllogin?>"/>
<meta property="og:image" content="https://www.inquilab.com/images/INQ_logo.png"/>
<meta property="og:site_name" content="Inquilab.com"/>
<meta property="og:image:type" content="image/png"/>
<meta property="fb:page_id" content="135185597251703"/>
<meta property="fb:app_id" content="289797971716379" />
<meta name="twitter:site" content="@theinquilabin"/>
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:creator" content="@theinquilabin"/>
<meta name="robots" content="index,follow"/>
<script type="application/ld+json">
{
"@context": "https://schema.org/",
"@type": "WebPage",
"name":"<?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?>",
"description": "<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>",
"inLanguage":"Urdu",
"publisher":{
"@type":"Organization",
"name":"Inquilab",
"logo":{
"@type": "ImageObject",
"url":"https://www.inquilab.com/images/logo.png",    
"width": 213,     
"height": 58
}}}
</script>
<script type="application/ld+json"> 
{ 
"@context": "https://schema.org", 
"@type": "BreadcrumbList", 
"itemListElement": 
[
{ 
"@type": "ListItem", 
"position": 1, 
"item": 
{ 
"@id": "https://www.inquilab.com/", 
"name": "Home" 
} 
},
{ 
"@type": "ListItem", 
"position": 2, 
"item": { 
"@id": "https://www.inquilab.com/students", 
"name": "Students" 
} 
} 
]}
</script>
<?php  
 }
	endif;
 endif;
 ?>
<?php 
 // Mumbai News //
$actual_link1 = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if($actual_link1 == $domain.'news/mumbai'):
$objINMUM = new db_sub_category_master;
$strWhereMU="category_master_id=14 and sub_category_master_id=30";
$INMUM=$objINMUM->selectAll($strWhereMU,0,1);
if($INMUM[0] > 0):
$i=0;
while($INMUMS = mysql_fetch_object($INMUM[1])){
$i=$i+1;
$pagetitle  = $INMUMS->sub_category_master_meta_title;
$pagedescription   = $INMUMS->sub_category_master_meta_desc;
$pagekeywords= $INMUMS->sub_category_master_meta_keywords;
?>
<title><?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?></title>
<meta name="description" content="<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>" />
<meta name="keywords" content="<?php echo htmlspecialchars($pagekeywords,ENT_QUOTES, 'UTF-8')?>" />
<meta property="og:title" content="<?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?>"/>
<meta property="og:description" content="<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="<?php echo $urllogin?>"/>
<meta property="og:image" content="https://www.inquilab.com/images/INQ_logo.png"/>
<meta property="og:site_name" content="Inquilab.com"/>
<meta property="og:image:type" content="image/png"/>
<meta property="fb:page_id" content="135185597251703"/>
<meta property="fb:app_id" content="289797971716379" />
<meta name="twitter:site" content="@theinquilabin"/>
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:creator" content="@theinquilabin"/>
<meta name="robots" content="index,follow"/>
<script type="application/ld+json">
{
"@context": "https://schema.org/",
"@type": "WebPage",
"name":"<?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?>",
"description": "<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>",
"inLanguage":"Urdu",
"publisher":{
"@type":"Organization",
"name":"Inquilab",
"logo":{
"@type": "ImageObject",
"url":"https://www.inquilab.com/images/logo.png",    
"width": 213,     
"height": 58
}}}
</script>
<script type="application/ld+json"> 
{ 
"@context": "https://schema.org", 
"@type": "BreadcrumbList", 
"itemListElement": 
[
{ 
"@type": "ListItem", 
"position": 1, 
"item": 
{ 
"@id": "https://www.inquilab.com/", 
"name": "Home" 
} 
},
{ 
"@type": "ListItem", 
"position": 2, 
"item": { 
"@id": "https://www.inquilab.com/news", 
"name": "News" 
} 
},
{ 
"@type": "ListItem", 
"position": 3, 
"item": { 
"@id": "https://www.inquilab.com/news/mumbai", 
"name": "Mumbai" 
} 
} 
]}
</script>
<?php  
 }
	endif;
 endif;
 ?>
 <?php 
 // National News //
$actual_link1 = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if($actual_link1 == $domain.'news/national'):
$objINNat = new db_sub_category_master;
$strWhere="category_master_id=14 and sub_category_master_id=11";
$INNat=$objINNat->selectAll($strWhere,0,1);
if($INNat[0] > 0):
$i=0;
while($INNatS = mysql_fetch_object($INNat[1])){
$i=$i+1;
$pagetitle  = $INNatS->sub_category_master_meta_title;
$pagedescription   = $INNatS->sub_category_master_meta_desc;
$pagekeywords= $INNatS->sub_category_master_meta_keywords;
?>
<title><?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?></title>
<meta name="description" content="<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>" />
<meta name="keywords" content="<?php echo htmlspecialchars($pagekeywords,ENT_QUOTES, 'UTF-8')?>" />
<meta property="og:title" content="<?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?>"/>
<meta property="og:description" content="<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="<?php echo $urllogin?>"/>
<meta property="og:image" content="https://www.inquilab.com/images/INQ_logo.png"/>
<meta property="og:site_name" content="Inquilab.com"/>
<meta property="og:image:type" content="image/png"/>
<meta property="fb:page_id" content="135185597251703"/>
<meta property="fb:app_id" content="289797971716379" />
<meta name="twitter:site" content="@theinquilabin"/>
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:creator" content="@theinquilabin"/>
<meta name="robots" content="index,follow"/>
<script type="application/ld+json">
{
"@context": "https://schema.org/",
"@type": "WebPage",
"name":"<?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?>",
"description": "<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>",
"inLanguage":"Urdu",
"publisher":{
"@type":"Organization",
"name":"Inquilab",
"logo":{
"@type": "ImageObject",
"url":"https://www.inquilab.com/images/logo.png",    
"width": 213,     
"height": 58
}}}
</script>
<script type="application/ld+json"> 
{ 
"@context": "https://schema.org", 
"@type": "BreadcrumbList", 
"itemListElement": 
[
{ 
"@type": "ListItem", 
"position": 1, 
"item": 
{ 
"@id": "https://www.inquilab.com/", 
"name": "Home" 
} 
},
{ 
"@type": "ListItem", 
"position": 2, 
"item": { 
"@id": "https://www.inquilab.com/news", 
"name": "News" 
} 
},
{ 
"@type": "ListItem", 
"position": 3, 
"item": { 
"@id": "https://www.inquilab.com/news/national", 
"name": "National" 
} 
} 
]}
</script>
<?php  
 }
	endif;
 endif;
 ?>
  <?php 
 // interNational News //
$actual_link1 = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if($actual_link1 == $domain.'news/international'):
$objINIntNat = new db_sub_category_master;
$strWhere="category_master_id=14 and sub_category_master_id=12";
$INIntNat=$objINIntNat->selectAll($strWhere,0,1);
if($INIntNat[0] > 0):
$i=0;
while($INIntNatS = mysql_fetch_object($INIntNat[1])){
$i=$i+1;
$pagetitle  = $INIntNatS->sub_category_master_meta_title;
$pagedescription   = $INIntNatS->sub_category_master_meta_desc;
$pagekeywords= $INIntNatS->sub_category_master_meta_keywords;
?>
<title><?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?></title>
<meta name="description" content="<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>" />
<meta name="keywords" content="<?php echo htmlspecialchars($pagekeywords,ENT_QUOTES, 'UTF-8')?>" />
<meta property="og:title" content="<?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?>"/>
<meta property="og:description" content="<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="<?php echo $urllogin?>"/>
<meta property="og:image" content="https://www.inquilab.com/images/INQ_logo.png"/>
<meta property="og:site_name" content="Inquilab.com"/>
<meta property="og:image:type" content="image/png"/>
<meta property="fb:page_id" content="135185597251703"/>
<meta property="fb:app_id" content="289797971716379" />
<meta name="twitter:site" content="@theinquilabin"/>
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:creator" content="@theinquilabin"/>
<meta name="robots" content="index,follow"/>
<script type="application/ld+json">
{
"@context": "https://schema.org/",
"@type": "WebPage",
"name":"<?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?>",
"description": "<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>",
"inLanguage":"Urdu",
"publisher":{
"@type":"Organization",
"name":"Inquilab",
"logo":{
"@type": "ImageObject",
"url":"https://www.inquilab.com/images/logo.png",    
"width": 213,     
"height": 58
}}}
</script>
<script type="application/ld+json"> 
{ 
"@context": "https://schema.org", 
"@type": "BreadcrumbList", 
"itemListElement": 
[
{ 
"@type": "ListItem", 
"position": 1, 
"item": 
{ 
"@id": "https://www.inquilab.com/", 
"name": "Home" 
} 
},
{ 
"@type": "ListItem", 
"position": 2, 
"item": { 
"@id": "https://www.inquilab.com/news", 
"name": "News" 
} 
},
{ 
"@type": "ListItem", 
"position": 3, 
"item": { 
"@id": "https://www.inquilab.com/news/international", 
"name": "International" 
} 
} 
]}
</script>
<?php  
 }
	endif;
 endif;
 ?>
   <?php 
 // business News //
$actual_link1 = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if($actual_link1 == $domain.'news/business'):
$objINbus = new db_sub_category_master;
$strWhere="category_master_id=14 and sub_category_master_id=13";
$INbus=$objINbus->selectAll($strWhere,0,1);
if($INbus[0] > 0):
$i=0;
while($INbusS = mysql_fetch_object($INbus[1])){
$i=$i+1;
$pagetitle  = $INbusS->sub_category_master_meta_title;
$pagedescription   = $INbusS->sub_category_master_meta_desc;
$pagekeywords= $INbusS->sub_category_master_meta_keywords;
?>
<title><?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?></title>
<meta name="description" content="<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>" />
<meta name="keywords" content="<?php echo htmlspecialchars($pagekeywords,ENT_QUOTES, 'UTF-8')?>" />
<meta property="og:title" content="<?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?>"/>
<meta property="og:description" content="<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="<?php echo $urllogin?>"/>
<meta property="og:image" content="https://www.inquilab.com/images/INQ_logo.png"/>
<meta property="og:site_name" content="Inquilab.com"/>
<meta property="og:image:type" content="image/png"/>
<meta property="fb:page_id" content="135185597251703"/>
<meta property="fb:app_id" content="289797971716379" />
<meta name="twitter:site" content="@theinquilabin"/>
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:creator" content="@theinquilabin"/>
<meta name="robots" content="index,follow"/>
<script type="application/ld+json">
{
"@context": "https://schema.org/",
"@type": "WebPage",
"name":"<?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?>",
"description": "<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>",
"inLanguage":"Urdu",
"publisher":{
"@type":"Organization",
"name":"Inquilab",
"logo":{
"@type": "ImageObject",
"url":"https://www.inquilab.com/images/logo.png",    
"width": 213,     
"height": 58
}}}
</script>
<script type="application/ld+json"> 
{ 
"@context": "https://schema.org", 
"@type": "BreadcrumbList", 
"itemListElement": 
[
{ 
"@type": "ListItem", 
"position": 1, 
"item": 
{ 
"@id": "https://www.inquilab.com/", 
"name": "Home" 
} 
},
{ 
"@type": "ListItem", 
"position": 2, 
"item": { 
"@id": "https://www.inquilab.com/news", 
"name": "News" 
} 
},
{ 
"@type": "ListItem", 
"position": 3, 
"item": { 
"@id": "https://www.inquilab.com/news/business", 
"name": "Business" 
} 
} 
]}
</script>
<?php  
 }
	endif;
 endif;
 ?>
<?php 
 // film News //
$actual_link1 = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if($actual_link1 == $domain.'entertainment/film'):
$objINfil = new db_sub_category_master;
$strWhere="category_master_id=15 and sub_category_master_id=14";
$INfil=$objINfil->selectAll($strWhere,0,1);
if($INfil[0] > 0):
$i=0;
while($INfilS = mysql_fetch_object($INfil[1])){
$i=$i+1;
$pagetitle  = $INfilS->sub_category_master_meta_title;
$pagedescription   = $INfilS->sub_category_master_meta_desc;
$pagekeywords= $INfilS->sub_category_master_meta_keywords;
?>
<title><?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?></title>
<meta name="description" content="<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>" />
<meta name="keywords" content="<?php echo htmlspecialchars($pagekeywords,ENT_QUOTES, 'UTF-8')?>" />
<meta property="og:title" content="<?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?>"/>
<meta property="og:description" content="<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="<?php echo $urllogin?>"/>
<meta property="og:image" content="https://www.inquilab.com/images/INQ_logo.png"/>
<meta property="og:site_name" content="Inquilab.com"/>
<meta property="og:image:type" content="image/png"/>
<meta property="fb:page_id" content="135185597251703"/>
<meta property="fb:app_id" content="289797971716379" />
<meta name="twitter:site" content="@theinquilabin"/>
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:creator" content="@theinquilabin"/>
<meta name="robots" content="index,follow"/>
<script type="application/ld+json">
{
"@context": "https://schema.org/",
"@type": "WebPage",
"name":"<?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?>",
"description": "<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>",
"inLanguage":"Urdu",
"publisher":{
"@type":"Organization",
"name":"Inquilab",
"logo":{
"@type": "ImageObject",
"url":"https://www.inquilab.com/images/logo.png",    
"width": 213,     
"height": 58
}}}
</script>
<script type="application/ld+json"> 
{ 
"@context": "https://schema.org", 
"@type": "BreadcrumbList", 
"itemListElement": 
[
{ 
"@type": "ListItem", 
"position": 1, 
"item": 
{ 
"@id": "https://www.inquilab.com/", 
"name": "Home" 
} 
},
{ 
"@type": "ListItem", 
"position": 2, 
"item": { 
"@id": "https://www.inquilab.com/entertainment", 
"name": "Entertainment" 
} 
},
{ 
"@type": "ListItem", 
"position": 3, 
"item": { 
"@id": "https://www.inquilab.com/entertainment/film", 
"name": "Film" 
} 
} 
]}
</script>
<?php  
 }
	endif;
 endif;
 ?>
 <?php 
 // tv News //
$actual_link1 = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if($actual_link1 == $domain.'entertainment/tv'):
$objINtv = new db_sub_category_master;
$strWhere="category_master_id=15 and sub_category_master_id=15";
$INtv=$objINtv->selectAll($strWhere,0,1);
if($INtv[0] > 0):
$i=0;
while($INtvS = mysql_fetch_object($INtv[1])){
$i=$i+1;
$pagetitle  = $INtvS->sub_category_master_meta_title;
$pagedescription   = $INtvS->sub_category_master_meta_desc;
$pagekeywords= $INtvS->sub_category_master_meta_keywords;
?>
<title><?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?></title>
<meta name="description" content="<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>" />
<meta name="keywords" content="<?php echo htmlspecialchars($pagekeywords,ENT_QUOTES, 'UTF-8')?>" />
<meta property="og:title" content="<?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?>"/>
<meta property="og:description" content="<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="<?php echo $urllogin?>"/>
<meta property="og:image" content="https://www.inquilab.com/images/INQ_logo.png"/>
<meta property="og:site_name" content="Inquilab.com"/>
<meta property="og:image:type" content="image/png"/>
<meta property="fb:page_id" content="135185597251703"/>
<meta property="fb:app_id" content="289797971716379" />
<meta name="twitter:site" content="@theinquilabin"/>
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:creator" content="@theinquilabin"/>
<meta name="robots" content="index,follow"/>
<script type="application/ld+json">
{
"@context": "https://schema.org/",
"@type": "WebPage",
"name":"<?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?>",
"description": "<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>",
"inLanguage":"Urdu",
"publisher":{
"@type":"Organization",
"name":"Inquilab",
"logo":{
"@type": "ImageObject",
"url":"https://www.inquilab.com/images/logo.png",    
"width": 213,     
"height": 58
}}}
</script>
<script type="application/ld+json"> 
{ 
"@context": "https://schema.org", 
"@type": "BreadcrumbList", 
"itemListElement": 
[
{ 
"@type": "ListItem", 
"position": 1, 
"item": 
{ 
"@id": "https://www.inquilab.com/", 
"name": "Home" 
} 
},
{ 
"@type": "ListItem", 
"position": 2, 
"item": { 
"@id": "https://www.inquilab.com/entertainment", 
"name": "Entertainment" 
} 
},
{ 
"@type": "ListItem", 
"position": 3, 
"item": { 
"@id": "https://www.inquilab.com/entertainment/tv", 
"name": "TV" 
} 
} 
]}
</script>
<?php  
 }
	endif;
 endif;
 ?>
<?php 
 // theatre News //
$actual_link1 = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if($actual_link1 == $domain.'entertainment/theatre'):
$objINthe = new db_sub_category_master;
$strWhere="category_master_id=15 and sub_category_master_id=16";
$INthe=$objINthe->selectAll($strWhere,0,1);
if($INthe[0] > 0):
$i=0;
while($INtheS = mysql_fetch_object($INthe[1])){
$i=$i+1;
$pagetitle  = $INtheS->sub_category_master_meta_title;
$pagedescription   = $INtheS->sub_category_master_meta_desc;
$pagekeywords= $INtheS->sub_category_master_meta_keywords;
?>
<title><?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?></title>
<meta name="description" content="<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>" />
<meta name="keywords" content="<?php echo htmlspecialchars($pagekeywords,ENT_QUOTES, 'UTF-8')?>" />
<meta property="og:title" content="<?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?>"/>
<meta property="og:description" content="<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="<?php echo $urllogin?>"/>
<meta property="og:image" content="https://www.inquilab.com/images/INQ_logo.png"/>
<meta property="og:site_name" content="Inquilab.com"/>
<meta property="og:image:type" content="image/png"/>
<meta property="fb:page_id" content="135185597251703"/>
<meta property="fb:app_id" content="289797971716379" />
<meta name="twitter:site" content="@theinquilabin"/>
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:creator" content="@theinquilabin"/>
<meta name="robots" content="index,follow"/>
<script type="application/ld+json">
{
"@context": "https://schema.org/",
"@type": "WebPage",
"name":"<?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?>",
"description": "<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>",
"inLanguage":"Urdu",
"publisher":{
"@type":"Organization",
"name":"Inquilab",
"logo":{
"@type": "ImageObject",
"url":"https://www.inquilab.com/images/logo.png",    
"width": 213,     
"height": 58
}}}
</script>
<script type="application/ld+json"> 
{ 
"@context": "https://schema.org", 
"@type": "BreadcrumbList", 
"itemListElement": 
[
{ 
"@type": "ListItem", 
"position": 1, 
"item": 
{ 
"@id": "https://www.inquilab.com/", 
"name": "Home" 
} 
},
{ 
"@type": "ListItem", 
"position": 2, 
"item": { 
"@id": "https://www.inquilab.com/entertainment", 
"name": "Entertainment" 
} 
},
{ 
"@type": "ListItem", 
"position": 3, 
"item": { 
"@id": "https://www.inquilab.com/entertainment/theatre", 
"name": "Theatre" 
} 
} 
]}
</script>
<?php  
 }
	endif;
 endif;
 ?>
<?php 
 // cricket News //
$actual_link1 = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if($actual_link1 == $domain.'sports/cricket'):
$objINcricket = new db_sub_category_master;
$strWhere="category_master_id=16 and sub_category_master_id=17";
$INcricket=$objINcricket->selectAll($strWhere,0,1);
if($INcricket[0] > 0):
$i=0;
while($INcricketS = mysql_fetch_object($INcricket[1])){
$i=$i+1;
$pagetitle  = $INcricketS->sub_category_master_meta_title;
$pagedescription   = $INcricketS->sub_category_master_meta_desc;
$pagekeywords= $INcricketS->sub_category_master_meta_keywords;
?>
<title><?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?></title>
<meta name="description" content="<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>" />
<meta name="keywords" content="<?php echo htmlspecialchars($pagekeywords,ENT_QUOTES, 'UTF-8')?>" />
<meta property="og:title" content="<?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?>"/>
<meta property="og:description" content="<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="<?php echo $urllogin?>"/>
<meta property="og:image" content="https://www.inquilab.com/images/INQ_logo.png"/>
<meta property="og:site_name" content="Inquilab.com"/>
<meta property="og:image:type" content="image/png"/>
<meta property="fb:page_id" content="135185597251703"/>
<meta property="fb:app_id" content="289797971716379" />
<meta name="twitter:site" content="@theinquilabin"/>
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:creator" content="@theinquilabin"/>
<meta name="robots" content="index,follow"/>
<script type="application/ld+json">
{
"@context": "https://schema.org/",
"@type": "WebPage",
"name":"<?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?>",
"description": "<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>",
"inLanguage":"Urdu",
"publisher":{
"@type":"Organization",
"name":"Inquilab",
"logo":{
"@type": "ImageObject",
"url":"https://www.inquilab.com/images/logo.png",    
"width": 213,     
"height": 58
}}}
</script>
<script type="application/ld+json"> 
{ 
"@context": "https://schema.org", 
"@type": "BreadcrumbList", 
"itemListElement": 
[
{ 
"@type": "ListItem", 
"position": 1, 
"item": 
{ 
"@id": "https://www.inquilab.com/", 
"name": "Home" 
} 
},
{ 
"@type": "ListItem", 
"position": 2, 
"item": { 
"@id": "https://www.inquilab.com/sports", 
"name": "Sports" 
} 
},
{ 
"@type": "ListItem", 
"position": 3, 
"item": { 
"@id": "https://www.inquilab.com/sports/cricket", 
"name": "Cricket" 
} 
} 
]}
</script>
<?php  
 }
	endif;
 endif;
 ?>
 
 <?php 
 // other-sports News //
$actual_link1 = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if($actual_link1 == $domain.'sports/other-sports'):
$objINOS = new db_sub_category_master;
$strWhere="category_master_id=16 and sub_category_master_id=18";
$INOS=$objINOS->selectAll($strWhere,0,1);
if($INOS[0] > 0):
$i=0;
while($INOSS = mysql_fetch_object($INOS[1])){
$i=$i+1;
$pagetitle  = $INOSS->sub_category_master_meta_title;
$pagedescription   = $INOSS->sub_category_master_meta_desc;
$pagekeywords= $INOSS->sub_category_master_meta_keywords;
?>
<title><?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?></title>
<meta name="description" content="<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>" />
<meta name="keywords" content="<?php echo htmlspecialchars($pagekeywords,ENT_QUOTES, 'UTF-8')?>" />
<meta property="og:title" content="<?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?>"/>
<meta property="og:description" content="<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="<?php echo $urllogin?>"/>
<meta property="og:image" content="https://www.inquilab.com/images/INQ_logo.png"/>
<meta property="og:site_name" content="Inquilab.com"/>
<meta property="og:image:type" content="image/png"/>
<meta property="fb:page_id" content="135185597251703"/>
<meta property="fb:app_id" content="289797971716379" />
<meta name="twitter:site" content="@theinquilabin"/>
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:creator" content="@theinquilabin"/>
<meta name="robots" content="index,follow"/>
<script type="application/ld+json">
{
"@context": "https://schema.org/",
"@type": "WebPage",
"name":"<?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?>",
"description": "<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>",
"inLanguage":"Urdu",
"publisher":{
"@type":"Organization",
"name":"Inquilab",
"logo":{
"@type": "ImageObject",
"url":"https://www.inquilab.com/images/logo.png",    
"width": 213,     
"height": 58
}}}
</script>
<script type="application/ld+json"> 
{ 
"@context": "https://schema.org", 
"@type": "BreadcrumbList", 
"itemListElement": 
[
{ 
"@type": "ListItem", 
"position": 1, 
"item": 
{ 
"@id": "https://www.inquilab.com/", 
"name": "Home" 
} 
},
{ 
"@type": "ListItem", 
"position": 2, 
"item": { 
"@id": "https://www.inquilab.com/sports", 
"name": "Sports" 
} 
},
{ 
"@type": "ListItem", 
"position": 3, 
"item": { 
"@id": "https://www.inquilab.com/sports/other-sports", 
"name": "Other-Sports" 
} 
} 
]}
</script>
<?php  
 }
	endif;
 endif;
 ?>
 <?php 
 // features/opinion News //
$actual_link1 = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if($actual_link1 == $domain.'features/editorial'):
$objINop = new db_sub_category_master;
$strWhere="category_master_id=17 and sub_category_master_id=19";
$INop=$objINop->selectAll($strWhere,0,1);
if($INop[0] > 0):
$i=0;
while($INopS = mysql_fetch_object($INop[1])){
$i=$i+1;
$pagetitle  = $INopS->sub_category_master_meta_title;
$pagedescription   = $INopS->sub_category_master_meta_desc;
$pagekeywords= $INopS->sub_category_master_meta_keywords;
?>
<title><?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?></title>
<meta name="description" content="<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>" />
<meta name="keywords" content="<?php echo htmlspecialchars($pagekeywords,ENT_QUOTES, 'UTF-8')?>" />
<meta property="og:title" content="<?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?>"/>
<meta property="og:description" content="<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="<?php echo $urllogin?>"/>
<meta property="og:image" content="https://www.inquilab.com/images/INQ_logo.png"/>
<meta property="og:site_name" content="Inquilab.com"/>
<meta property="og:image:type" content="image/png"/>
<meta property="fb:page_id" content="135185597251703"/>
<meta property="fb:app_id" content="289797971716379" />
<meta name="twitter:site" content="@theinquilabin"/>
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:creator" content="@theinquilabin"/>
<meta name="robots" content="index,follow"/>
<script type="application/ld+json">
{
"@context": "https://schema.org/",
"@type": "WebPage",
"name":"<?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?>",
"description": "<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>",
"inLanguage":"Urdu",
"publisher":{
"@type":"Organization",
"name":"Inquilab",
"logo":{
"@type": "ImageObject",
"url":"https://www.inquilab.com/images/logo.png",    
"width": 213,     
"height": 58
}}}
</script>
<script type="application/ld+json"> 
{ 
"@context": "https://schema.org", 
"@type": "BreadcrumbList", 
"itemListElement": 
[
{ 
"@type": "ListItem", 
"position": 1, 
"item": 
{ 
"@id": "https://www.inquilab.com/", 
"name": "Home" 
} 
},
{ 
"@type": "ListItem", 
"position": 2, 
"item": { 
"@id": "https://www.inquilab.com/features", 
"name": "Features" 
} 
},
{ 
"@type": "ListItem", 
"position": 3, 
"item": { 
"@id": "https://www.inquilab.com/features/editorial", 
"name": "Editorial" 
} 
} 
]}
</script>
<?php  
 }
	endif;
 endif;
 ?>
 <?php 
 // features/columnists News //
$actual_link1 = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if($actual_link1 == $domain.'features/columnists'):
$objINCOLU = new db_sub_category_master;
$strWhere="category_master_id=17 and sub_category_master_id=32";
$INCOLU=$objINCOLU->selectAll($strWhere,0,1);
if($INCOLU[0] > 0):
$i=0;
while($INCOLUS = mysql_fetch_object($INCOLU[1])){
$i=$i+1;
$pagetitle  = $INCOLUS->sub_category_master_meta_title;
$pagedescription   = $INCOLUS->sub_category_master_meta_desc;
$pagekeywords= $INCOLUS->sub_category_master_meta_keywords;
?>
<title><?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?></title>
<meta name="description" content="<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>" />
<meta name="keywords" content="<?php echo htmlspecialchars($pagekeywords,ENT_QUOTES, 'UTF-8')?>" />
<meta property="og:title" content="<?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?>"/>
<meta property="og:description" content="<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="<?php echo $urllogin?>"/>
<meta property="og:image" content="https://www.inquilab.com/images/INQ_logo.png"/>
<meta property="og:site_name" content="Inquilab.com"/>
<meta property="og:image:type" content="image/png"/>
<meta property="fb:page_id" content="135185597251703"/>
<meta property="fb:app_id" content="289797971716379" />
<meta name="twitter:site" content="@theinquilabin"/>
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:creator" content="@theinquilabin"/>
<meta name="robots" content="index,follow"/>
<script type="application/ld+json">
{
"@context": "https://schema.org/",
"@type": "WebPage",
"name":"<?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?>",
"description": "<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>",
"inLanguage":"Urdu",
"publisher":{
"@type":"Organization",
"name":"Inquilab",
"logo":{
"@type": "ImageObject",
"url":"https://www.inquilab.com/images/logo.png",    
"width": 213,     
"height": 58
}}}
</script>
<script type="application/ld+json"> 
{ 
"@context": "https://schema.org", 
"@type": "BreadcrumbList", 
"itemListElement": 
[
{ 
"@type": "ListItem", 
"position": 1, 
"item": 
{ 
"@id": "https://www.inquilab.com/", 
"name": "Home" 
} 
},
{ 
"@type": "ListItem", 
"position": 2, 
"item": { 
"@id": "https://www.inquilab.com/features", 
"name": "Features" 
} 
},
{ 
"@type": "ListItem", 
"position": 3, 
"item": { 
"@id": "https://www.inquilab.com/features/columnists", 
"name": "Columnists" 
} 
} 
]}
</script>
<?php  
 }
	endif;
 endif;
 ?>
 <?php 
 // features/jumma News //
$actual_link1 = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if($actual_link1 == $domain.'features/juma-magazine'):
$objINJumma = new db_sub_category_master;
$strWhere="category_master_id=17 and sub_category_master_id=21";
$INJumma=$objINJumma->selectAll($strWhere,0,1);
if($INJumma[0] > 0):
$i=0;
while($INJummaS = mysql_fetch_object($INJumma[1])){
$i=$i+1;
$pagetitle  = $INJummaS->sub_category_master_meta_title;
$pagedescription   = $INJummaS->sub_category_master_meta_desc;
$pagekeywords= $INJummaS->sub_category_master_meta_keywords;
?>
<title><?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?></title>
<meta name="description" content="<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>" />
<meta name="keywords" content="<?php echo htmlspecialchars($pagekeywords,ENT_QUOTES, 'UTF-8')?>" />
<meta property="og:title" content="<?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?>"/>
<meta property="og:description" content="<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="<?php echo $urllogin?>"/>
<meta property="og:image" content="https://www.inquilab.com/images/INQ_logo.png"/>
<meta property="og:site_name" content="Inquilab.com"/>
<meta property="og:image:type" content="image/png"/>
<meta property="fb:page_id" content="135185597251703"/>
<meta property="fb:app_id" content="289797971716379" />
<meta name="twitter:site" content="@theinquilabin"/>
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:creator" content="@theinquilabin"/>
<meta name="robots" content="index,follow"/>
<script type="application/ld+json">
{
"@context": "https://schema.org/",
"@type": "WebPage",
"name":"<?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?>",
"description": "<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>",
"inLanguage":"Urdu",
"publisher":{
"@type":"Organization",
"name":"Inquilab",
"logo":{
"@type": "ImageObject",
"url":"https://www.inquilab.com/images/logo.png",    
"width": 213,     
"height": 58
}}}
</script>
<script type="application/ld+json"> 
{ 
"@context": "https://schema.org", 
"@type": "BreadcrumbList", 
"itemListElement": 
[
{ 
"@type": "ListItem", 
"position": 1, 
"item": 
{ 
"@id": "https://www.inquilab.com/", 
"name": "Home" 
} 
},
{ 
"@type": "ListItem", 
"position": 2, 
"item": { 
"@id": "https://www.inquilab.com/features", 
"name": "Features" 
} 
},
{ 
"@type": "ListItem", 
"position": 3, 
"item": { 
"@id": "https://www.inquilab.com/features/juma-magazine", 
"name": "Juma-Magazine" 
} 
} 
]}
</script>
<?php  
 }
	endif;
 endif;
 ?>

  <?php 
 //  sunday-magazine //
$actual_link1 = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if($actual_link1 == $domain.'features/sunday-magazine'):
$objINSun = new db_sub_category_master;
$strWhere="category_master_id=17 and sub_category_master_id=22";
$INSun=$objINSun->selectAll($strWhere,0,1);
if($INSun[0] > 0):
$i=0;
while($INSunS = mysql_fetch_object($INSun[1])){
$i=$i+1;
$pagetitle  = $INSunS->sub_category_master_meta_title;
$pagedescription   = $INSunS->sub_category_master_meta_desc;
$pagekeywords= $INSunS->sub_category_master_meta_keywords;
?>
<title><?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?></title>
<meta name="description" content="<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>" />
<meta name="keywords" content="<?php echo htmlspecialchars($pagekeywords,ENT_QUOTES, 'UTF-8')?>" />
<meta property="og:title" content="<?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?>"/>
<meta property="og:description" content="<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="<?php echo $urllogin?>"/>
<meta property="og:image" content="https://www.inquilab.com/images/INQ_logo.png"/>
<meta property="og:site_name" content="Inquilab.com"/>
<meta property="og:image:type" content="image/png"/>
<meta property="fb:page_id" content="135185597251703"/>
<meta property="fb:app_id" content="289797971716379" />
<meta name="twitter:site" content="@theinquilabin"/>
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:creator" content="@theinquilabin"/>
<meta name="robots" content="index,follow"/>
<script type="application/ld+json">
{
"@context": "https://schema.org/",
"@type": "WebPage",
"name":"<?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?>",
"description": "<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>",
"inLanguage":"Urdu",
"publisher":{
"@type":"Organization",
"name":"Inquilab",
"logo":{
"@type": "ImageObject",
"url":"https://www.inquilab.com/images/logo.png",    
"width": 213,     
"height": 58
}}}
</script>
<script type="application/ld+json"> 
{ 
"@context": "https://schema.org", 
"@type": "BreadcrumbList", 
"itemListElement": 
[
{ 
"@type": "ListItem", 
"position": 1, 
"item": 
{ 
"@id": "https://www.inquilab.com/", 
"name": "Home" 
} 
},
{ 
"@type": "ListItem", 
"position": 2, 
"item": { 
"@id": "https://www.inquilab.com/features", 
"name": "Features" 
} 
},
{ 
"@type": "ListItem", 
"position": 3, 
"item": { 
"@id": "https://www.inquilab.com/features/sunday-magazine", 
"name": "Sunday-Magazine" 
} 
} 
]}
</script>
<?php  
 }
	endif;
 endif;
 ?>
   <?php 
 //  literature //
$actual_link1 = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if($actual_link1 == $domain.'features/literature'):
$objINLit = new db_sub_category_master;
$strWhere="category_master_id=17 and sub_category_master_id=23";
$INLit=$objINLit->selectAll($strWhere,0,1);
if($INLit[0] > 0):
$i=0;
while($INLitS = mysql_fetch_object($INLit[1])){
$i=$i+1;
$pagetitle  = $INLitS->sub_category_master_meta_title;
$pagedescription   = $INLitS->sub_category_master_meta_desc;
$pagekeywords= $INLitS->sub_category_master_meta_keywords;
?>
<title><?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?></title>
<meta name="description" content="<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>" />
<meta name="keywords" content="<?php echo htmlspecialchars($pagekeywords,ENT_QUOTES, 'UTF-8')?>" />
<meta property="og:title" content="<?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?>"/>
<meta property="og:description" content="<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="<?php echo $urllogin?>"/>
<meta property="og:image" content="https://www.inquilab.com/images/INQ_logo.png"/>
<meta property="og:site_name" content="Inquilab.com"/>
<meta property="og:image:type" content="image/png"/>
<meta property="fb:page_id" content="135185597251703"/>
<meta property="fb:app_id" content="289797971716379" />
<meta name="twitter:site" content="@theinquilabin"/>
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:creator" content="@theinquilabin"/>
<meta name="robots" content="index,follow"/>
<script type="application/ld+json">
{
"@context": "https://schema.org/",
"@type": "WebPage",
"name":"<?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?>",
"description": "<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>",
"inLanguage":"Urdu",
"publisher":{
"@type":"Organization",
"name":"Inquilab",
"logo":{
"@type": "ImageObject",
"url":"https://www.inquilab.com/images/logo.png",    
"width": 213,     
"height": 58
}}}
</script>
<script type="application/ld+json"> 
{ 
"@context": "https://schema.org", 
"@type": "BreadcrumbList", 
"itemListElement": 
[
{ 
"@type": "ListItem", 
"position": 1, 
"item": 
{ 
"@id": "https://www.inquilab.com/", 
"name": "Home" 
} 
},
{ 
"@type": "ListItem", 
"position": 2, 
"item": { 
"@id": "https://www.inquilab.com/features", 
"name": "Features" 
} 
},
{ 
"@type": "ListItem", 
"position": 3, 
"item": { 
"@id": "https://www.inquilab.com/features/literature", 
"name": "Literature" 
} 
} 
]}
</script>
<?php  
 }
	endif;
 endif;
 ?>
  <?php 
 //  women //
$actual_link1 = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if($actual_link1 == $domain.'lifestyle/women'):
$objINWom = new db_sub_category_master;
$strWhere="category_master_id=18 and sub_category_master_id=24";
$INWom=$objINWom->selectAll($strWhere,0,1);
if($INWom[0] > 0):
$i=0;
while($INWomS = mysql_fetch_object($INWom[1])){
$i=$i+1;
$pagetitle  = $INWomS->sub_category_master_meta_title;
$pagedescription   = $INWomS->sub_category_master_meta_desc;
$pagekeywords= $INWomS->sub_category_master_meta_keywords;
?>
<title><?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?></title>
<meta name="description" content="<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>" />
<meta name="keywords" content="<?php echo htmlspecialchars($pagekeywords,ENT_QUOTES, 'UTF-8')?>" />
<meta property="og:title" content="<?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?>"/>
<meta property="og:description" content="<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="<?php echo $urllogin?>"/>
<meta property="og:image" content="https://www.inquilab.com/images/INQ_logo.png"/>
<meta property="og:site_name" content="Inquilab.com"/>
<meta property="og:image:type" content="image/png"/>
<meta property="fb:page_id" content="135185597251703"/>
<meta property="fb:app_id" content="289797971716379" />
<meta name="twitter:site" content="@theinquilabin"/>
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:creator" content="@theinquilabin"/>
<meta name="robots" content="index,follow"/>
<script type="application/ld+json">
{
"@context": "https://schema.org/",
"@type": "WebPage",
"name":"<?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?>",
"description": "<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>",
"inLanguage":"Urdu",
"publisher":{
"@type":"Organization",
"name":"Inquilab",
"logo":{
"@type": "ImageObject",
"url":"https://www.inquilab.com/images/logo.png",    
"width": 213,     
"height": 58
}}}
</script>
<script type="application/ld+json"> 
{ 
"@context": "https://schema.org", 
"@type": "BreadcrumbList", 
"itemListElement": 
[
{ 
"@type": "ListItem", 
"position": 1, 
"item": 
{ 
"@id": "https://www.inquilab.com/", 
"name": "Home" 
} 
},
{ 
"@type": "ListItem", 
"position": 2, 
"item": { 
"@id": "https://www.inquilab.com/lifestyle", 
"name": "Lifestyle" 
} 
},
{ 
"@type": "ListItem", 
"position": 3, 
"item": { 
"@id": "https://www.inquilab.com/lifestyle/women", 
"name": "Women" 
} 
} 
]}
</script>
<?php  
 }
	endif;
 endif;
 ?>
  <?php 
 //  events //
$actual_link1 = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if($actual_link1 == $domain.'lifestyle/events'):
$objINHap = new db_sub_category_master;
$strWhere="category_master_id=18 and sub_category_master_id=31";
$INHap=$objINHap->selectAll($strWhere,0,1);
if($INHap[0] > 0):
$i=0;
while($INHapS = mysql_fetch_object($INHap[1])){
$i=$i+1;
$pagetitle  = $INHapS->sub_category_master_meta_title;
$pagedescription   = $INHapS->sub_category_master_meta_desc;
$pagekeywords= $INHapS->sub_category_master_meta_keywords;
?>
<title><?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?></title>
<meta name="description" content="<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>" />
<meta name="keywords" content="<?php echo htmlspecialchars($pagekeywords,ENT_QUOTES, 'UTF-8')?>" />
<meta property="og:title" content="<?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?>"/>
<meta property="og:description" content="<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="<?php echo $urllogin?>"/>
<meta property="og:image" content="https://www.inquilab.com/images/INQ_logo.png"/>
<meta property="og:site_name" content="Inquilab.com"/>
<meta property="og:image:type" content="image/png"/>
<meta property="fb:page_id" content="135185597251703"/>
<meta property="fb:app_id" content="289797971716379" />
<meta name="twitter:site" content="@theinquilabin"/>
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:creator" content="@theinquilabin"/>
<meta name="robots" content="index,follow"/>
<script type="application/ld+json">
{
"@context": "https://schema.org/",
"@type": "WebPage",
"name":"<?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?>",
"description": "<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>",
"inLanguage":"Urdu",
"publisher":{
"@type":"Organization",
"name":"Inquilab",
"logo":{
"@type": "ImageObject",
"url":"https://www.inquilab.com/images/logo.png",    
"width": 213,     
"height": 58
}}}
</script>
<script type="application/ld+json"> 
{ 
"@context": "https://schema.org", 
"@type": "BreadcrumbList", 
"itemListElement": 
[
{ 
"@type": "ListItem", 
"position": 1, 
"item": 
{ 
"@id": "https://www.inquilab.com/", 
"name": "Home" 
} 
},
{ 
"@type": "ListItem", 
"position": 2, 
"item": { 
"@id": "https://www.inquilab.com/lifestyle", 
"name": "Lifestyle" 
} 
},
{ 
"@type": "ListItem", 
"position": 3, 
"item": { 
"@id": "https://www.inquilab.com/lifestyle/women", 
"name": "Women" 
} 
} 
]}
</script>
<?php  
 }
	endif;
 endif;
 ?>
   <?php 
 //  youth //
$actual_link1 = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if($actual_link1 == $domain.'lifestyle/youth'):
$objINyot = new db_sub_category_master;
$strWhere="category_master_id=18 and sub_category_master_id=25";
$INyot=$objINyot->selectAll($strWhere,0,1);
if($INyot[0] > 0):
$i=0;
while($INyotS = mysql_fetch_object($INyot[1])){
$i=$i+1;
$pagetitle  = $INyotS->sub_category_master_meta_title;
$pagedescription   = $INyotS->sub_category_master_meta_desc;
$pagekeywords= $INyotS->sub_category_master_meta_keywords;
?>
<title><?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?></title>
<meta name="description" content="<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>" />
<meta name="keywords" content="<?php echo htmlspecialchars($pagekeywords,ENT_QUOTES, 'UTF-8')?>" />
<meta property="og:title" content="<?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?>"/>
<meta property="og:description" content="<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="<?php echo $urllogin?>"/>
<meta property="og:image" content="https://www.inquilab.com/images/INQ_logo.png"/>
<meta property="og:site_name" content="Inquilab.com"/>
<meta property="og:image:type" content="image/png"/>
<meta property="fb:page_id" content="135185597251703"/>
<meta property="fb:app_id" content="289797971716379" />
<meta name="twitter:site" content="@theinquilabin"/>
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:creator" content="@theinquilabin"/>
<meta name="robots" content="index,follow"/>
<script type="application/ld+json">
{
"@context": "https://schema.org/",
"@type": "WebPage",
"name":"<?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?>",
"description": "<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>",
"inLanguage":"Urdu",
"publisher":{
"@type":"Organization",
"name":"Inquilab",
"logo":{
"@type": "ImageObject",
"url":"https://www.inquilab.com/images/logo.png",    
"width": 213,     
"height": 58
}}}
</script>
<script type="application/ld+json"> 
{ 
"@context": "https://schema.org", 
"@type": "BreadcrumbList", 
"itemListElement": 
[
{ 
"@type": "ListItem", 
"position": 1, 
"item": 
{ 
"@id": "https://www.inquilab.com/", 
"name": "Home" 
} 
},
{ 
"@type": "ListItem", 
"position": 2, 
"item": { 
"@id": "https://www.inquilab.com/lifestyle", 
"name": "Lifestyle" 
} 
},
{ 
"@type": "ListItem", 
"position": 3, 
"item": { 
"@id": "https://www.inquilab.com/lifestyle/youth", 
"name": "Youth" 
} 
} 
]}
</script>
<?php  
 }
	endif;
 endif;
 ?>
    <?php 
 //  tech //
$actual_link1 = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if($actual_link1 == $domain.'lifestyle/tech'):
$objINtech = new db_sub_category_master;
$strWhere="category_master_id=18 and sub_category_master_id=26";
$INtech=$objINtech->selectAll($strWhere,0,1);
if($INtech[0] > 0):
$i=0;
while($INtechS = mysql_fetch_object($INtech[1])){
$i=$i+1;
$pagetitle  = $INtechS->sub_category_master_meta_title;
$pagedescription   = $INtechS->sub_category_master_meta_desc;
$pagekeywords= $INtechS->sub_category_master_meta_keywords;
?>
<title><?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?></title>
<meta name="description" content="<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>" />
<meta name="keywords" content="<?php echo htmlspecialchars($pagekeywords,ENT_QUOTES, 'UTF-8')?>" />
<meta property="og:title" content="<?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?>"/>
<meta property="og:description" content="<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="<?php echo $urllogin?>"/>
<meta property="og:image" content="https://www.inquilab.com/images/INQ_logo.png"/>
<meta property="og:site_name" content="Inquilab.com"/>
<meta property="og:image:type" content="image/png"/>
<meta property="fb:page_id" content="135185597251703"/>
<meta property="fb:app_id" content="289797971716379" />
<meta name="twitter:site" content="@theinquilabin"/>
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:creator" content="@theinquilabin"/>
<meta name="robots" content="index,follow"/>
<script type="application/ld+json">
{
"@context": "https://schema.org/",
"@type": "WebPage",
"name":"<?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?>",
"description": "<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>",
"inLanguage":"Urdu",
"publisher":{
"@type":"Organization",
"name":"Inquilab",
"logo":{
"@type": "ImageObject",
"url":"https://www.inquilab.com/images/logo.png",    
"width": 213,     
"height": 58
}}}
</script>
<script type="application/ld+json"> 
{ 
"@context": "https://schema.org", 
"@type": "BreadcrumbList", 
"itemListElement": 
[
{ 
"@type": "ListItem", 
"position": 1, 
"item": 
{ 
"@id": "https://www.inquilab.com/", 
"name": "Home" 
} 
},
{ 
"@type": "ListItem", 
"position": 2, 
"item": { 
"@id": "https://www.inquilab.com/lifestyle", 
"name": "Lifestyle" 
} 
},
{ 
"@type": "ListItem", 
"position": 3, 
"item": { 
"@id": "https://www.inquilab.com/lifestyle/tech", 
"name": "Tech" 
} 
} 
]}
</script>
<?php  
 }
	endif;
 endif;
 ?>
     <?php 
 //  auto //
$actual_link1 = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if($actual_link1 == $domain.'lifestyle/auto'):
$objINauto = new db_sub_category_master;
$strWhere="category_master_id=18 and sub_category_master_id=27";
$INauto=$objINauto->selectAll($strWhere,0,1);
if($INauto[0] > 0):
$i=0;
while($INautoS = mysql_fetch_object($INauto[1])){
$i=$i+1;
$pagetitle  = $INautoS->sub_category_master_meta_title;
$pagedescription   = $INautoS->sub_category_master_meta_desc;
$pagekeywords= $INautoS->sub_category_master_meta_keywords;
?>
<title><?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?></title>
<meta name="description" content="<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>" />
<meta name="keywords" content="<?php echo htmlspecialchars($pagekeywords,ENT_QUOTES, 'UTF-8')?>" />
<meta property="og:title" content="<?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?>"/>
<meta property="og:description" content="<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="<?php echo $urllogin?>"/>
<meta property="og:image" content="https://www.inquilab.com/images/INQ_logo.png"/>
<meta property="og:site_name" content="Inquilab.com"/>
<meta property="og:image:type" content="image/png"/>
<meta property="fb:page_id" content="135185597251703"/>
<meta property="fb:app_id" content="289797971716379" />
<meta name="twitter:site" content="@theinquilabin"/>
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:creator" content="@theinquilabin"/>
<meta name="robots" content="index,follow"/>
<script type="application/ld+json">
{
"@context": "https://schema.org/",
"@type": "WebPage",
"name":"<?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?>",
"description": "<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>",
"inLanguage":"Urdu",
"publisher":{
"@type":"Organization",
"name":"Inquilab",
"logo":{
"@type": "ImageObject",
"url":"https://www.inquilab.com/images/logo.png",    
"width": 213,     
"height": 58
}}}
</script>
<script type="application/ld+json"> 
{ 
"@context": "https://schema.org", 
"@type": "BreadcrumbList", 
"itemListElement": 
[
{ 
"@type": "ListItem", 
"position": 1, 
"item": 
{ 
"@id": "https://www.inquilab.com/", 
"name": "Home" 
} 
},
{ 
"@type": "ListItem", 
"position": 2, 
"item": { 
"@id": "https://www.inquilab.com/lifestyle", 
"name": "Lifestyle" 
} 
},
{ 
"@type": "ListItem", 
"position": 3, 
"item": { 
"@id": "https://www.inquilab.com/lifestyle/auto", 
"name": "Auto" 
} 
} 
]}
</script>
<?php  
 }
	endif;
 endif;
 ?>
     <?php 
 //  naye-sitare //
$actual_link1 = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if($actual_link1 == $domain.'students/naye-sitare'):
$objINstar = new db_sub_category_master;
$strWhere="category_master_id=19 and sub_category_master_id=28";
$INstar=$objINstar->selectAll($strWhere,0,1);
if($INstar[0] > 0):
$i=0;
while($INstarS = mysql_fetch_object($INstar[1])){
$i=$i+1;
$pagetitle  = $INstarS->sub_category_master_meta_title;
$pagedescription   = $INstarS->sub_category_master_meta_desc;
$pagekeywords= $INstarS->sub_category_master_meta_keywords;
?>
<title><?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?></title>
<meta name="description" content="<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>" />
<meta name="keywords" content="<?php echo htmlspecialchars($pagekeywords,ENT_QUOTES, 'UTF-8')?>" />
<meta property="og:title" content="<?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?>"/>
<meta property="og:description" content="<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="<?php echo $urllogin?>"/>
<meta property="og:image" content="https://www.inquilab.com/images/INQ_logo.png"/>
<meta property="og:site_name" content="Inquilab.com"/>
<meta property="og:image:type" content="image/png"/>
<meta property="fb:page_id" content="135185597251703"/>
<meta property="fb:app_id" content="289797971716379" />
<meta name="twitter:site" content="@theinquilabin"/>
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:creator" content="@theinquilabin"/>
<meta name="robots" content="index,follow"/>
<script type="application/ld+json">
{
"@context": "https://schema.org/",
"@type": "WebPage",
"name":"<?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?>",
"description": "<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>",
"inLanguage":"Urdu",
"publisher":{
"@type":"Organization",
"name":"Inquilab",
"logo":{
"@type": "ImageObject",
"url":"https://www.inquilab.com/images/logo.png",    
"width": 213,     
"height": 58
}}}
</script>
<script type="application/ld+json"> 
{ 
"@context": "https://schema.org", 
"@type": "BreadcrumbList", 
"itemListElement": 
[
{ 
"@type": "ListItem", 
"position": 1, 
"item": 
{ 
"@id": "https://www.inquilab.com/", 
"name": "Home" 
} 
},
{ 
"@type": "ListItem", 
"position": 2, 
"item": { 
"@id": "https://www.inquilab.com/students", 
"name": "Students" 
} 
},
{ 
"@type": "ListItem", 
"position": 3, 
"item": { 
"@id": "https://www.inquilab.com/students/naye-sitare", 
"name": "Naye-Sitare" 
} 
} 
]}
</script>
<?php  
 }
	endif;
 endif;
 ?>

      <?php 
 //   taleemi-inquilab //
$actual_link1 = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if($actual_link1 == $domain.'students/taleemi-inquilab'):
$objINTI = new db_sub_category_master;
$strWhere="category_master_id=19 and sub_category_master_id=29";
$INTI=$objINTI->selectAll($strWhere,0,1);
if($INTI[0] > 0):
$i=0;
while($INTIS = mysql_fetch_object($INTI[1])){
$i=$i+1;
$pagetitle  = $INTIS->sub_category_master_meta_title;
$pagedescription   = $INTIS->sub_category_master_meta_desc;
$pagekeywords= $INTIS->sub_category_master_meta_keywords;
?>
<title><?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?></title>
<meta name="description" content="<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>" />
<meta name="keywords" content="<?php echo htmlspecialchars($pagekeywords,ENT_QUOTES, 'UTF-8')?>" />
<meta property="og:title" content="<?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?>"/>
<meta property="og:description" content="<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="<?php echo $urllogin?>"/>
<meta property="og:image" content="https://www.inquilab.com/images/INQ_logo.png"/>
<meta property="og:site_name" content="Inquilab.com"/>
<meta property="og:image:type" content="image/png"/>
<meta property="fb:page_id" content="135185597251703"/>
<meta property="fb:app_id" content="289797971716379" />
<meta name="twitter:site" content="@theinquilabin"/>
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:creator" content="@theinquilabin"/>
<meta name="robots" content="index,follow"/>
<script type="application/ld+json">
{
"@context": "https://schema.org/",
"@type": "WebPage",
"name":"<?php echo htmlspecialchars($pagetitle,ENT_QUOTES, 'UTF-8')?>",
"description": "<?php echo htmlspecialchars($pagedescription,ENT_QUOTES, 'UTF-8')?>",
"inLanguage":"Urdu",
"publisher":{
"@type":"Organization",
"name":"Inquilab",
"logo":{
"@type": "ImageObject",
"url":"https://www.inquilab.com/images/logo.png",    
"width": 213,     
"height": 58
}}}
</script>
<script type="application/ld+json"> 
{ 
"@context": "https://schema.org", 
"@type": "BreadcrumbList", 
"itemListElement": 
[
{ 
"@type": "ListItem", 
"position": 1, 
"item": 
{ 
"@id": "https://www.inquilab.com/", 
"name": "Home" 
} 
},
{ 
"@type": "ListItem", 
"position": 2, 
"item": { 
"@id": "https://www.inquilab.com/students", 
"name": "Students" 
} 
},
{ 
"@type": "ListItem", 
"position": 3, 
"item": { 
"@id": "https://www.inquilab.com/students/taleemi-inquilab", 
"name": "Taleemi-Inquilab" 
} 
} 
]}
</script>
<?php  
 }
	endif;
 endif;
 ?>
<?php
/////keep this as the last part///
$path = $_SERVER['REQUEST_URI'];
$urlParts = explode("/", $path);
$explodeResultArray = end(explode("-", $path)); 
$id = intval($explodeResultArray);
$pagename = $urlParts[2];
//echo $pagename;
$pagenamefolder = $urlParts[1];
//echo $pagenamefolder;
if($pagename=='videos'):
$objseo  = new db_video_master($id);
$pagetitlei = $objseo->Get_video_name();	
$pagedescriptioni = strip_tags($objseo->Get_video_description());	
$pagekeywordsi = $objseo->Get_video_keywords();
elseif($pagename=='articles'):
$objseo1  = new db_article_master($id);
$pagetitlei = $objseo1->Get_article_page_title();
$pagedescriptioni = $objseo1->Get_article_meta_description();		
$pagekeywordsi = $objseo1->Get_article_keywords();
$article_byline =  $objseo1->Get_article_byline();
$article_headline = $objseo1->Get_article_headline();
$article_short_description = $objseo1->Get_article_short_description();
$article_image_caption =  $objseo1->Get_article_image_caption();
$cati		   = $objseo1->Get_category_id();
$ojjcci        = new db_category_master($cati);
$Enamei        = $ojjcci->Get_category_master_name();
$scati		    = $objseo1->Get_sub_category_id();
$ojjscci        = new db_sub_category_master($scati);
$sEnamei        = $ojjscci->Get_sub_category_master_name();
$article_imagei = $objseo1->Get_article_image();
$article_imagei = str_replace("../","",$article_imagei);
$article_imagei1 = $objseo1->Get_article_image2();
$article_imagei1 = str_replace("../","",$article_imagei1);
$aDatei        = $objseo1->Get_article_date();         
$time1i         = strtotime($aDatei);
$month1i        = date("m",$time1i);
$year1i         = date("Y",$time1i);
$day1i          = date("j",$time1i);
$aDate2i        = $objseo1->Get_article_date1();         
$time2i         = strtotime($aDate2i);
$month2i        = date("m",$time2i);
$year2i         = date("Y",$time2i);
$day2i          = date("j",$time2i);
$aTimei        = $objseo1->Get_article_time();
$aTimei           = date("g:i:s", strtotime($aTimei));
elseif($pagename=='photos'):
$objseo2  = new db_gallery_master($id);
$pagetitlei = $objseo2->Get_gallery_name();
$pagedescriptioni = strip_tags($objseo2->Get_gallery_description());		
$pagekeywordsi = $objseo2->Get_gallery_keywords();
$catip		   = $objseo2->Get_category_id();
$ojjccip        = new db_category_master($catip);
$Enameip        = $ojjccip->Get_category_master_name();
$scatip		    = $objseo2->Get_sub_category_id();
$ojjsccip        = new db_sub_category_master($scatip);
$sEnameip        = $ojjsccip->Get_sub_category_master_name();
$admin_name = $objseo2->Get_admin_name();
$gallery_imagei = $objseo2->Get_gallery_image();
$gallery_imagei = str_replace("../","",$gallery_imagei);

$gDate10i        = $objseo2->Get_gallery_date();         
$gtime10i         = strtotime($gDate10i);
$gmonth10i        = date("m",$gtime10i);
$gyear10i         = date("Y",$gtime10i);
$gday10i          = date("d",$gtime10i);



$gDate1i        = $objseo2->Get_gallery_date1();         
$gtime1i         = strtotime($gDate1i);
$gmonth1i        = date("m",$gtime1i);
$gyear1i         = date("Y",$gtime1i);
$gday1i          = date("d",$gtime1i);
$gTimei        = $objseo2->Get_gallery_time();
$gTimei           = date("g:i:s", strtotime($gTimei));
elseif($pagenamefolder=='search'):
$K1   = array("-all", "-articles", "-videos","-photos");
$K2   = array("","","","");
$searchkeyword = str_replace($K1,$K2,$pagename);	
$titletext = ' News : Read Latest News on ';
$titletext1 = ' , Photos, Live Interviews and Videos Online at ';
$pagetitlei = str_replace("-"," ",$searchkeyword) .$titletext .str_replace("-"," ",$searchkeyword) .$titletext1 .$domain; 
$metadesc = ' News: Read all the Latest News on ';
$metadesc1 = ' , Photos, Videos online only on ';
$metadesc2 = ' . Stay updated with breaking news and exclusive live interviews with ';
$metadesc3 = ' on ';
$pagedescriptioni = str_replace("-"," ",$searchkeyword).$metadesc.str_replace("-"," ",$searchkeyword).$metadesc1.$domain.$metadesc2.str_replace("-"," ",$searchkeyword).$metadesc3.$domain;		
$pagekeywordsi = "";
endif;
if($id!=""):
?>
<title><?php echo htmlspecialchars($pagetitlei,ENT_QUOTES, 'UTF-8')?></title>
<meta name="description" content="<?php echo $pagedescriptioni ?>" />
<meta name="keywords" content="<?php echo htmlspecialchars($pagekeywordsi,ENT_QUOTES, 'UTF-8')?>" />
<meta property="og:title" content="<?php echo htmlspecialchars($pagetitlei,ENT_QUOTES, 'UTF-8')?>"/>
<meta property="og:description" content="<?php echo $pagedescriptioni ?>"/>
<?php if($pagename=='photos'):?>
<meta property="og:type" content="image.gallery"/>	
<?php else: ?>
<meta property="og:type" content="article"/>
<?php endif;?>
<meta property="og:site_name" content="Inquilab.com"/>
<meta property="og:url" content="<?php echo $urllogin?>"/>
<?php if($pagename=='photos'):?>
<meta property="og:image" content="<?php echo $domain?><?php echo $gallery_imagei?>"/>
<?php else: ?>
<meta property="og:image" content="<?php echo $domain?><?php echo $article_imagei?>"/>
<?php endif;?>
<meta property="og:image:width" content=""/>
<meta property="og:image:height" content=""/>
<meta property="og:image:type" content="image/jpeg"/>
<meta property="fb:pages" content="135185597251703"/>
<meta property="fb:app_id" content="289797971716379" />
<meta name="twitter:site" content="@theinquilabin"/>
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:creator" content="@theinquilabin"/>
<meta name="robots" content="index,follow"/>
<?php if($pagename=='photos'):?>
<meta http-equiv="Last-Modified" content="<?php echo $gyear1i?>-<?php echo $gmonth1i?>-<?php echo $gday1i?>T<?php echo $gTimei?>+5:30" />	
<?php else:?>
<meta property="article:published_time" content="<?php echo $year1i?>-<?php echo $month1i?>-<?php echo $day1i?>T<?php echo $aTimei?>+5:30"/>
<meta property="article:modified_time"	content="<?php echo $year2i?>-<?php echo $month2i?>-<?php echo $day2i?>T<?php echo $aTimei?>+5:30" />
<meta http-equiv="Last-Modified"	content="<?php echo $year2i?>-<?php echo $month2i?>-<?php echo $day2i?>T<?php echo $aTimei?>+5:30" />
<?php endif;?>
<?php if($pagename=='articles'):?>
<script type="application/ld+json">
{
"@context": "https://schema.org/",
"@type": "WebPage",
"name":"<?php echo htmlspecialchars($pagetitlei,ENT_QUOTES, 'UTF-8')?>",
"description": "<?php echo $pagedescriptioni ?>",
"speakable": {
"@type":"SpeakableSpecification",
"xpath":[
"//h1[@class='news-details-title font-weight-bold']",
"//p[2]"
]
},
"url":"<?php echo $urllogin?>"
}
</script>	
<script type="application/ld+json"> 
{ 
"@context": "https://schema.org", 
"@type": "BreadcrumbList", 
"itemListElement": 
[
{ 
"@type": "ListItem", 
"position": 1, 
"item": 
{ 
"@id": "https://www.inquilab.com/", 
"name": "Home" 
} 
},
{ 
"@type": "ListItem", 
"position": 2, 
"item": { 
"@id": "https://www.inquilab.com/<?php echo strtolower($Enamei)?>", 
"name": "<?php echo $Enamei?>" 
} 
},
{ 
"@type": "ListItem", 
"position": 3, 
"item": { 
"@id": "https://www.inquilab.com/<?php echo strtolower($Enamei)?>/<?php echo strtolower(str_replace(" ","-",$sEnamei ))?>", 
"name": "<?php echo $sEnamei?>" 
} 
} 
]}
</script>

<script type="application/ld+json">
{
"@context": "https://schema.org/",
"@type": "NewsArticle",
"mainEntityOfPage":"<?php echo $urllogin?>",
"headline":"<?php echo htmlspecialchars($article_headline,ENT_QUOTES, 'UTF-8')?>",
"datePublished":"<?php echo $year1i?>-<?php echo $month1i?>-<?php echo $day1i?>T<?php echo $aTimei?>+5:30",
"dateModified": "<?php echo $year2i?>-<?php echo $month2i?>-<?php echo $day2i?>T<?php echo $aTimei?>+5:30",
"description": "<?php echo $article_short_description ?>",
"author": {
"@type":"Person",
"name":"<?php echo $article_byline ?>"
},
"publisher": {
"@type": "Organization",
"name":"Inquilab",
"logo":{
"@type":"ImageObject",
"url":"https://www.inquilab.com/images/INQ_logo.png",
"width":213,
"height":58
}
},
"image": [
{
"@type":"ImageObject",
"url":"https://www.inquilab.com/<?php echo $article_imagei?>",
"width":"670",
"height":"440",
"name":"<?php echo htmlspecialchars($article_image_caption,ENT_QUOTES, 'UTF-8')?>",
"thumbnailUrl":"https://www.inquilab.com/<?php echo $article_imagei1?>",
"contentUrl":"https://www.inquilab.com/<?php echo $article_imagei?>",
"encodingFormat":"image/jpeg"
}
]}
</script>


<?php elseif($pagename=='photos'):?>
<script type="application/ld+json"> 
{ 
"@context": "https://schema.org", 
"@type": "BreadcrumbList", 
"itemListElement": 
[
{ 
"@type": "ListItem", 
"position": 1, 
"item": 
{ 
"@id": "https://www.inquilab.com/", 
"name": "Home" 
} 
},
{ 
"@type": "ListItem", 
"position": 2, 
"item": { 
"@id": "https://www.inquilab.com/<?php echo strtolower($Enameip)?>", 
"name": "<?php echo $Enameip?>" 
} 
}
]} 
}
</script>	
<!---->

<script type="application/ld+json">
{
"@context" : "http://schema.org",
"@type": "ImageGallery", 
"url": "<?php echo $urllogin?>",
"datePublished": "<?php echo $gyear10i?>-<?php echo $gmonth10i?>-<?php echo $gday10i?>T<?php echo $gTimei?>+05:30",
"dateModified": "<?php echo $gyear1i?>-<?php echo $gmonth1i?>-<?php echo $gday1i?>T<?php echo $gTimei?>+05:30",
"headline": "<?php echo $pagetitlei?>",
"description": "<?php echo $pagedescriptioni?>",
"publisher": 
{
"@type": "Organization",
"name": "Inquilab",
"logo": {
"@type": "ImageObject",
"url": "https://www.inquilab.com/images/INQ_logo.png",
"width": "213",
"height": "58"   
}   },
"author": [{
"@type": "person","name":"<?php echo $admin_name?>"  
}],
<?php
	$objcgal = new db_gallery_child;
	$strWherecg = "gallery_id=$id";
	$cgal    = $objcgal->selectAll($strWherecg, $cur, $max);
?>

"image":  [
<?php
      if ($cgal[0] > 0):

        $i = 0;
          while ($objcgals = mysql_fetch_object($cgal[1])):
          $gallery_child_caption        = strip_tags($objcgals->gallery_child_caption);
          $gallery_child_image2         = $objcgals->gallery_child_image2;
          $gallery_child_image2         = str_replace("../","",$gallery_child_image2);
          $gallery_child_image         = $objcgals->gallery_child_image;
          $gallery_child_image         = str_replace("../","",$gallery_child_image);
 	      $i=$i+1;
 	      //print_r($cgal);
?>
{
"@type": "ImageObject",
"description":"<?php echo $gallery_child_caption?>",
"height":"447",
"width":"670",
"name":"<?php echo $pagetitlei?>",
"thumbnailUrl":"<?php echo $domain?><?php echo $gallery_child_image2?>",
"contentUrl":"<?php echo $domain?><?php echo $gallery_child_image?>",
"encodingFormat": "image/jpeg"
<?php 
$total = $cgal[0];
if($i==$total):?>
}
<?php else:?>		
},
<?php endif;?>		
<?php
	endwhile;
endif;	
?>
]	
}
</script>
<script type="application/ld+json">
{
"@context": "https://schema.org/",
"@type": "WebPage",
"name": "<?php echo $pagetitlei?>",
"description":"<?php echo $pagedescriptioni?>",
"speakable": {
"@type":"SpeakableSpecification",
"xpath":[
"//h1[@class='news-details-title font-weight-bold']",
"//p[3]"
]
},
 "url": "<?php echo $urllogin?>"
}
</script>
<!---->
<?php endif;?>	
<?php elseif($searchkeyword!=""):?>
<title><?php echo htmlspecialchars($pagetitlei,ENT_QUOTES, 'UTF-8')?></title>
<meta name="description" content="<?php echo htmlspecialchars($pagedescriptioni,ENT_QUOTES, 'UTF-8')?>" />
<meta name="keywords" content="<?php echo htmlspecialchars($pagekeywordsi,ENT_QUOTES, 'UTF-8')?>" />
<meta property="og:title" content="<?php echo htmlspecialchars($pagetitlei,ENT_QUOTES, 'UTF-8')?>"/>
<meta property="og:description" content="<?php echo $pagedescriptioni ?>"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="<?php echo $urllogin?>"/>
<meta property="og:image" content="https://www.inquilab.com/images/INQ_logo.png"/>
<meta property="og:image:width" content=""/>
<meta property="og:image:height" content=""/>
<meta property="fb:app_id" content="289797971716379" />
<meta name="twitter:site" content="@theinquilabin"/>
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:creator" content="@theinquilabin"/>
<meta name="robots" content="index,follow"/>
<?php endif;?>