<?php 
//error_reporting(E_ALL);
//ini_set("display_errors", 1);
include('top.php');
$url=basename(mysql_escape_mimic($_SERVER['REQUEST_URI']));
//echo $url; 
//$explodeResultArray = end(explode("-", $url)); 
$url = str_replace("-all","", $url);

$explodeResultArray = str_replace("-"," ", $url);
$keyword = mysql_escape_mimic($explodeResultArray);
//echo $explodeResultArray;
$keyword2 = str_replace(' ','|', $keyword);

//echo $keyword2;
///for articles/////////////////
$objArticleSearch = new db_article_master;
$strWhere1 = "article_page_url REGEXP ('($keyword2)') or article_keywords REGEXP('($keyword2)') or article_tags REGEXP('($keyword2)')";
$ArticleSearch = $objArticleSearch->selectAll($strWhere1, 0, 4);
//echo $strWhere1;
///for articles/////////////////


///for Galleries/////////////////
$objGallerySearch = new db_gallery_master;
$strWhere2 = "gallery_url REGEXP ('($keyword2)') or gallery_keywords REGEXP('($keyword2)') or gallery_tags REGEXP('($keyword2)')";
$GallerySearch = $objGallerySearch->selectAll($strWhere2, 0, 4);
///for Galleries/////////////////

///for Videos/////////////////
$objVideosSearch = new db_video_master;
$strWhere2 = "video_url REGEXP ('($keyword2)') or video_keywords REGEXP('($keyword2)') or video_tags REGEXP('($keyword2)')";
$VideosSearch = $objVideosSearch->selectAll($strWhere2, 0, 4);
///for Videos/////////////////


//$furl = str_replace(" ","-",$keyword).'-'.'articles';
//echo $furl;
//if($url=='')

/*$furl=basename(mysql_escape_mimic($_SERVER['REQUEST_URI']));
$fpath = parse_url($furl, PHP_URL_PATH);
$pathFragments = explode('-', $fpath);
$end = end($pathFragments);
$tocond = $pathFragments[2];
echo  $tocond;*/

$path = $_SERVER['REQUEST_URI'];
$explodeResultArray = end(explode("-", $path)); 
$tocond = $explodeResultArray;
?>
<?php if($tocond=='videos'):
$aurl = str_replace("-videos","", $url);
$keywordA = str_replace(" videos","",$keyword);
$keywordB = str_replace("|videos","",$keywordA);
$keywordC = str_replace(" ","|",$keywordB);
//echo $keywordC;
///for articles full /////////////////
$objVideoSearchFull = new db_video_master;
$strWhere6 = "video_url REGEXP ('($keywordC)') or video_keywords REGEXP('($keywordC)') or video_tags REGEXP('($keywordC)')";
$VideoSearchFull = $objVideoSearchFull->selectAll($strWhere6, 0, 4);
///for articles full /////////////////
?>
<section>
      <div class="container">
      	<div class="search-nav">
          <h6 class="mt-5 mb-2 text-black font-weight-bold font-family-roboto text-uppercase"><?php echo str_replace("videos","",htmlspecialchars($keyword,ENT_QUOTES, 'UTF-8'))?></h6>
          <!-- Nav tabs -->
          <ul class="nav nav-tabs justify-content-end">
           <!--  <li class="nav-item"><a class="nav-link text-black" href="#videos">ویڈیوز</a></li> -->
            <?php if($tocond=='videos'):?>
            <li class="nav-item nav-link active text-black"> ویڈیوز </li>	
            <?php else:?>
            <li class="nav-item"><a class="nav-link text-black" href="<?php echo $domain?>search/<?php echo str_replace(" ","-",htmlspecialchars($aurl,ENT_QUOTES, 'UTF-8'))?>-videos">مضامین</a></li>
            <?php endif;?>

            <?php if($tocond=='photos'):?>
            <li class="nav-item nav-link active text-black"> فوٹو  </li>	
            <?php else:?>
            <li class="nav-item"><a class="nav-link text-black" href="<?php echo $domain?>search/<?php echo str_replace(" ","-",htmlspecialchars($aurl,ENT_QUOTES, 'UTF-8'))?>-photos">مضامین</a></li>
            <?php endif;?>
            <?php if($tocond=='articles'):?>
            <li class="nav-item nav-link active text-black"> مضامین </li>		
            <?php else:?>
            <li class="nav-item"><a class="nav-link text-black" href="<?php echo $domain?>search/<?php echo str_replace(" ","-",htmlspecialchars($aurl,ENT_QUOTES, 'UTF-8'))?>-articles">مضامین</a></li>
            <?php endif;?>
            <?php if($tocond=='all'):?>
            <li class="nav-item nav-link active text-black">  سب  </li>	
            <?php else:?>
            <li class="nav-item"><a class="nav-link active text-black" href="<?php echo $domain?>search/<?php echo str_replace(" ","-",htmlspecialchars($aurl,ENT_QUOTES, 'UTF-8'))?>-all">سب</a></li>
        	<?php endif;?>
          </ul>
	        <div class="" id="load_data_tablev">
				<?php            
				 if ($VideoSearchFull[0] > 0):
				        $i = 0;
				          while ($objVideoSearchFulls  = mysql_fetch_object($VideoSearchFull[1])):
			           	  $vidVF                       = $objVideoSearchFulls->video_id;  
				          $video_name_homeVF = $objVideoSearchFulls->video_name_home;
				          $video_image1VF            = $objVideoSearchFulls->video_image1;
				          $video_urlVF          = str_replace($old_pattern1s, $new_pattern1s,$objVideoSearchFulls->video_url);
						  $aDate        = $objVideoSearchFulls->video_date;         
						  $time         = strtotime($aDate);
						  $month        = date("M",$time);
						  $year         = date("Y",$time);
						  $day          = date("j",$time);  
						  $aDate1       = $objVideoSearchFulls->video_date1;         
						  $da           = strtotime($aDate1);
						  $month1       = date('F', $da);
						  $year1        = date("Y",$da);
						  $day1         = date("d",$da);
						  $aTime        = $objVideoSearchFulls->video_time;		
						  $aTime  			   = date("g:i a", strtotime($aTime));		          
				          $cidVF           			   = $objVideoSearchFulls->category_id;
				          $objcatVF      			   = new db_category_master($cidVF);
				          $catnameVF                   = strtolower($objcatVF->Get_category_master_name());
				          $urlVF                       = $catnameGF.'/videos/'.$gallery_urlGF.'-'.$gidGF;           
				        $i=$i+1;  
				?>
	          <div class="row mt-3">
	            <div class="col-md-9 order-1 order-md-0  mt-3 mt-md-0">
	              <h3><a href="<?php echo $domain?><?php echo htmlspecialchars($urlVF,ENT_QUOTES, 'UTF-8')?>" class="article-news-listing-sub-title"><?php echo htmlspecialchars($video_name_homeVF,ENT_QUOTES, 'UTF-8')?></a></h3>
	               <p><?php// echo htmlspecialchars($article_short_descriptionAF,ENT_QUOTES, 'UTF-8')?></p>
	                <?php if($aDate1==''):?>
	               <p class="news-details-author mt-3 font-weight-normal"><?php echo htmlspecialchars($month,ENT_QUOTES, 'UTF-8')?> <?php echo  htmlspecialchars($day,ENT_QUOTES, 'UTF-8')?>, <?php echo  htmlspecialchars($year,ENT_QUOTES, 'UTF-8')?>, <?php echo  htmlspecialchars($aTime,ENT_QUOTES, 'UTF-8')?> IST</p>
	                <?php else:?>
	                <p class="news-details-author mt-3 font-weight-normal"><?php echo htmlspecialchars($month1,ENT_QUOTES, 'UTF-8')?> <?php echo  htmlspecialchars($day1,ENT_QUOTES, 'UTF-8')?>, <?php echo  htmlspecialchars($year1,ENT_QUOTES, 'UTF-8')?>, <?php echo  htmlspecialchars($aTime,ENT_QUOTES, 'UTF-8')?> IST</p>
	                <?php endif;?>	
	            </div>
	            <div class="col-md-3 order-0 order-md-1">
	              <a href="<?php echo $domain?><?php echo htmlspecialchars($urlVF,ENT_QUOTES, 'UTF-8')?>"><div class="bg-grey-mobile"><img src="<?php echo htmlspecialchars($video_image1VF,ENT_QUOTES, 'UTF-8')?>" class="media-object img-fluid d-block mx-auto align-self-center"></div></a>
	            </div>
	          </div>
	        <?php
	        	endwhile;
	        endif;	
	        ?>  
				<?php if ($VideoSearchFull[0] != 4) { ?><div class="mt-5 mb-5"><div id="remove_row2"><img src="<?php echo $domain?>images/load-more-btn.png" class="img-fluid d-block mx-auto align-self-center" data-bid2="<?php echo $vidVF; ?>" data-key2="<?php echo str_replace("|","-",$keywordC); ?>" id="btn_more2"></div></div><?php } ?>	          
	        </div>
      	</div>
      </div>
    </section>

<?php elseif($tocond=='photos'):
$aurl = str_replace("-photos","", $url);
$keywordA = str_replace(" photos","",$keyword);
$keywordB = str_replace("|photos","",$keywordA);
$keywordC = str_replace(" ","|",$keywordB);
//echo $keywordC;
///for articles full /////////////////
$objphotosSearchFull = new db_gallery_master;
$strWhere5 = "gallery_url REGEXP ('($keywordC)') or gallery_keywords REGEXP('($keywordC)') or gallery_tags REGEXP('($keywordC)')";
$photosSearchFull = $objphotosSearchFull->selectAll($strWhere5, 0, 4);
///for articles full /////////////////
?>
<section>
      <div class="container">
      	<div class="search-nav">
          <h6 class="mt-5 mb-2 text-black font-weight-bold font-family-roboto text-uppercase"><?php echo str_replace("photos","",htmlspecialchars($keyword,ENT_QUOTES, 'UTF-8'))?></h6>
          <!-- Nav tabs -->
          <ul class="nav nav-tabs justify-content-end">
            <?php if($tocond=='videos'):?>
            <li class="nav-item nav-link active text-black"> ویڈیوز </li>	
            <?php else:?>
            <li class="nav-item"><a class="nav-link text-black" href="<?php echo $domain?>search/<?php echo str_replace(" ","-",htmlspecialchars($aurl,ENT_QUOTES, 'UTF-8'))?>-videos">مضامین</a></li>
            <?php endif;?>            
            <?php if($tocond=='photos'):?>
            <li class="nav-item nav-link active text-black"> فوٹو  </li>	
            <?php else:?>
            <li class="nav-item"><a class="nav-link text-black" href="<?php echo $domain?>search/<?php echo str_replace(" ","-",htmlspecialchars($aurl,ENT_QUOTES, 'UTF-8'))?>-photos">مضامین</a></li>
            <?php endif;?>
            <?php if($tocond=='articles'):?>
            <li class="nav-item nav-link active text-black"> مضامین </li>		
            <?php else:?>
            <li class="nav-item"><a class="nav-link text-black" href="<?php echo $domain?>search/<?php echo str_replace(" ","-",htmlspecialchars($aurl,ENT_QUOTES, 'UTF-8'))?>-articles">مضامین</a></li>
            <?php endif;?>
            <?php if($tocond=='all'):?>
            <li class="nav-item nav-link active text-black">  سب  </li>	
            <?php else:?>
            <li class="nav-item"><a class="nav-link active text-black" href="<?php echo $domain?>search/<?php echo str_replace(" ","-",htmlspecialchars($aurl,ENT_QUOTES, 'UTF-8'))?>-all">سب</a></li>
        	<?php endif;?>
          </ul>
	        <div class="" id="load_data_tablep">
				<?php            
				 if ($photosSearchFull[0] > 0):
				        $i = 0;
				          while ($objphotosSearchFulls  = mysql_fetch_object($photosSearchFull[1])):
			           	  $gidGF                       = $objphotosSearchFulls->gallery_id;  
				          $gallery_name_homeGF = $objphotosSearchFulls->gallery_name_home;
				          $gallery_image1GF            = $objphotosSearchFulls->gallery_image1;
				          $gallery_urlGF          = str_replace($old_pattern1s, $new_pattern1s,$objphotosSearchFulls->gallery_url);
						  $aDate        = $objphotosSearchFulls->gallery_date;         
						  $time         = strtotime($aDate);
						  $month        = date("M",$time);
						  $year         = date("Y",$time);
						  $day          = date("j",$time);  
						  $aDate1       = $objphotosSearchFulls->gallery_date1;         
						  $da           = strtotime($aDate1);
						  $month1       = date('F', $da);
						  $year1        = date("Y",$da);
						  $day1         = date("d",$da);
						  $aTime        = $objphotosSearchFulls->gallery_time;				          
						  $aTime  			   = date("g:i a", strtotime($aTime));
				          $cidGF           			   = $objphotosSearchFulls->category_id;
				          $objcatGF      			   = new db_category_master($cidGF);
				          $catnameGF                   = strtolower($objcatGF->Get_category_master_name());
				          $urlGF                       = $catnameGF.'/photos/'.$gallery_urlGF.'-'.$gidGF;           
				        $i=$i+1;  
				?>
	          <div class="row mt-3">
	            <div class="col-md-9 order-1 order-md-0  mt-3 mt-md-0">
	              <h3><a href="<?php echo $domain?><?php echo htmlspecialchars($urlGF,ENT_QUOTES, 'UTF-8')?>" class="article-news-listing-sub-title"><?php echo htmlspecialchars($gallery_name_homeGF,ENT_QUOTES, 'UTF-8')?></a></h3>
	               <p><?php// echo htmlspecialchars($article_short_descriptionAF,ENT_QUOTES, 'UTF-8')?></p>
	                <?php if($aDate1==''):?>
	               <p class="news-details-author mt-3 font-weight-normal"><?php echo htmlspecialchars($month,ENT_QUOTES, 'UTF-8')?> <?php echo  htmlspecialchars($day,ENT_QUOTES, 'UTF-8')?>, <?php echo  htmlspecialchars($year,ENT_QUOTES, 'UTF-8')?>, <?php echo  htmlspecialchars($aTime,ENT_QUOTES, 'UTF-8')?> IST</p>
	                <?php else:?>
	                <p class="news-details-author mt-3 font-weight-normal"><?php echo htmlspecialchars($month1,ENT_QUOTES, 'UTF-8')?> <?php echo  htmlspecialchars($day1,ENT_QUOTES, 'UTF-8')?>, <?php echo  htmlspecialchars($year1,ENT_QUOTES, 'UTF-8')?>, <?php echo  htmlspecialchars($aTime,ENT_QUOTES, 'UTF-8')?> IST</p>
	                <?php endif;?>	
	            </div>
	            <div class="col-md-3 order-0 order-md-1">
	              <a href="<?php echo $domain?><?php echo htmlspecialchars($urlGF,ENT_QUOTES, 'UTF-8')?>"><div class="bg-grey-mobile"><img src="<?php echo htmlspecialchars($gallery_image1GF,ENT_QUOTES, 'UTF-8')?>" class="media-object img-fluid d-block mx-auto align-self-center"></div></a>
	            </div>
	          </div>
	        <?php
	        	endwhile;
	        endif;	
	        ?>  
				<?php if ($photosSearchFull[0] != 4) { ?><div class="mt-5 mb-5"><div id="remove_row1"><img src="<?php echo $domain?>images/load-more-btn.png" class="img-fluid d-block mx-auto align-self-center" data-bid1="<?php echo $gidGF; ?>" data-key1="<?php echo str_replace("|","-",$keywordC); ?>" id="btn_more1"></div></div><?php } ?>	          
	        </div>
      	</div>
      </div>
    </section>	

<?php elseif($tocond=='articles'):
$aurl = str_replace("-articles","", $url);
$keywordA = str_replace(" articles","",$keyword);
$keywordB = str_replace("|articles","",$keywordA);
$keywordC = str_replace(" ","|",$keywordB);
//echo $keywordC;
///for articles full /////////////////
$objArticleSearchFull = new db_article_master;
$strWhere4 = "article_page_url REGEXP ('($keywordC)') or article_keywords REGEXP('($keywordC)') or article_tags REGEXP('($keywordC)')";
$ArticleSearchFull = $objArticleSearchFull->selectAll($strWhere4, 0, 4);
///for articles full /////////////////
?>
<section>
      <div class="container">
      	<div class="search-nav">
          <h6 class="mt-5 mb-2 text-black font-weight-bold font-family-roboto text-uppercase"><?php echo str_replace("articles","",htmlspecialchars($keyword,ENT_QUOTES, 'UTF-8'))?></h6>
          <!-- Nav tabs -->
          <ul class="nav nav-tabs justify-content-end">
            <?php if($tocond=='videos'):?>
            <li class="nav-item nav-link active text-black"> ویڈیوز </li>	
            <?php else:?>
            <li class="nav-item"><a class="nav-link text-black" href="<?php echo $domain?>search/<?php echo str_replace(" ","-",htmlspecialchars($aurl,ENT_QUOTES, 'UTF-8'))?>-videos">مضامین</a></li>
            <?php endif;?>
	        <?php if($tocond=='photos'):?>
            <li class="nav-item nav-link active text-black"> فوٹو  </li>	
            <?php else:?>
            <li class="nav-item"><a class="nav-link text-black" href="<?php echo $domain?>search/<?php echo str_replace(" ","-",htmlspecialchars($aurl,ENT_QUOTES, 'UTF-8'))?>-photos">مضامین</a></li>
            <?php endif;?>
            <?php if($tocond=='articles'):?>
            <li class="nav-item nav-link active text-black"> مضامین </li>		
            <?php else:?>
            <li class="nav-item"><a class="nav-link text-black" href="<?php echo $domain?>search/<?php echo str_replace(" ","-",htmlspecialchars($aurl,ENT_QUOTES, 'UTF-8'))?>-articles">مضامین</a></li>
            <?php endif;?>
            <?php if($tocond=='all'):?>
            <li class="nav-item nav-link active text-black">  سب  </li>	
            <?php else:?>
            <li class="nav-item"><a class="nav-link active text-black" href="<?php echo $domain?>search/<?php echo str_replace(" ","-",htmlspecialchars($aurl,ENT_QUOTES, 'UTF-8'))?>-all">سب</a></li>
        	<?php endif;?>
          </ul>
	        <div class="" id="load_data_table">
				<?php            
				 if ($ArticleSearchFull[0] > 0):
				        $i = 0;
				          while ($objArticleSearchFulls  = mysql_fetch_object($ArticleSearchFull[1])):
			           	  $aidAF                       = $objArticleSearchFulls->article_id;  
				          $article_homepage_headlineAF = $objArticleSearchFulls->article_homepage_headline;
				          $article_short_descriptionAF = $objArticleSearchFulls->article_short_description;
				          $article_image1AF            = $objArticleSearchFulls->article_image;
				          $article_page_urlAF          = str_replace($old_pattern1s, $new_pattern1s,$objArticleSearchFulls->article_page_url);
						  $aDate        = $objArticleSearchFulls->article_date;         
						  $time         = strtotime($aDate);
						  $month        = date("M",$time);
						  $year         = date("Y",$time);
						  $day          = date("j",$time);  
						  $aDate1       = $objArticleSearchFulls->article_date1;         
						  $da           = strtotime($aDate1);
						  $month1       = date('F', $da);
						  $year1        = date("Y",$da);
						  $day1         = date("d",$da);
						  $aTime        = $objArticleSearchFulls->article_time;				          
						  $aTime  			   = date("g:i a", strtotime($aTime));
				          $cidAF           			   = $objArticleSearchFulls->category_id;
				          $objcatPPF      			   = new db_category_master($cidAF);
				          $catnameAF                   = strtolower($objcatPPF->Get_category_master_name());
				          $urlAF                       = $catnameAF.'/articles/'.$article_page_urlAF.'-'.$aidAF;           
				        $i=$i+1;  
				?>
	          <div class="row mt-3">
	            <div class="col-md-9 order-1 order-md-0  mt-3 mt-md-0">
	              <h3><a href="<?php echo $domain?><?php echo htmlspecialchars($urlAF,ENT_QUOTES, 'UTF-8')?>" class="article-news-listing-sub-title"><?php echo htmlspecialchars($article_homepage_headlineAF,ENT_QUOTES, 'UTF-8')?></a></h3>
	               <p><?php echo htmlspecialchars($article_short_descriptionAF,ENT_QUOTES, 'UTF-8')?></p>
	                <?php if($aDate1==''):?>
	               <p class="news-details-author mt-3 font-weight-normal"><?php echo htmlspecialchars($month,ENT_QUOTES, 'UTF-8')?> <?php echo  htmlspecialchars($day,ENT_QUOTES, 'UTF-8')?>, <?php echo  htmlspecialchars($year,ENT_QUOTES, 'UTF-8')?>, <?php echo  htmlspecialchars($aTime,ENT_QUOTES, 'UTF-8')?> IST</p>
	                <?php else:?>
	                <p class="news-details-author mt-3 font-weight-normal"><?php echo htmlspecialchars($month1,ENT_QUOTES, 'UTF-8')?> <?php echo  htmlspecialchars($day1,ENT_QUOTES, 'UTF-8')?>, <?php echo  htmlspecialchars($year1,ENT_QUOTES, 'UTF-8')?>, <?php echo  htmlspecialchars($aTime,ENT_QUOTES, 'UTF-8')?> IST</p>
	                <?php endif;?>	
	            </div>
	            <div class="col-md-3 order-0 order-md-1">
	              <a href="<?php echo $domain?><?php echo htmlspecialchars($urlAF,ENT_QUOTES, 'UTF-8')?>"><div class="bg-grey-mobile"><img src="<?php echo htmlspecialchars($article_image1AF,ENT_QUOTES, 'UTF-8')?>" class="media-object img-fluid d-block mx-auto align-self-center"></div></a>
	            </div>
	          </div>
	        <?php
	        	endwhile;
	        endif;	
	        ?>  
				<?php if ($ArticleSearchFull[0] != 4) { ?><div class="mt-5 mb-5"><div id="remove_row"><img src="<?php echo $domain?>images/load-more-btn.png" class="img-fluid d-block mx-auto align-self-center" data-bid="<?php echo $aidAF; ?>" data-key="<?php echo str_replace("|","-",$keywordC); ?>" id="btn_more"></div></div><?php } ?>	          
	        </div>
      	</div>
      </div>
    </section>	
<?php else:	?>
<section>
      <div class="container">
        <div class="search-nav">
          <h6 class="mt-5 mb-2 text-black font-weight-bold font-family-roboto text-uppercase"><?php echo htmlspecialchars($keyword,ENT_QUOTES, 'UTF-8')?></h6>
          <!-- Nav tabs -->
          <ul class="nav nav-tabs justify-content-end">
            <?php if($tocond=='videos'):?>
            <li class="nav-item nav-link active text-black"> ویڈیوز </li>	
            <?php else:?>
            <li class="nav-item"><a class="nav-link text-black" href="<?php echo $domain?>search/<?php echo str_replace(" ","-",htmlspecialchars($keyword,ENT_QUOTES, 'UTF-8'))?>-videos">مضامین</a></li>
            <?php endif;?>            
            <?php if($tocond=='photos'):?>
            <li class="nav-item nav-link active text-black"> فوٹو  </li>	
            <?php else:?>
            <li class="nav-item"><a class="nav-link text-black" href="<?php echo $domain?>search/<?php echo str_replace(" ","-",htmlspecialchars($keyword,ENT_QUOTES, 'UTF-8'))?>-photos">مضامین</a></li>
        	<?php endif;?>
            <?php if($tocond=='articles'):?>
            <li class="nav-item nav-link active text-black"> مضامین </li>		
            <?php else:?>
            <li class="nav-item"><a class="nav-link text-black" href="<?php echo $domain?>search/<?php echo str_replace(" ","-",htmlspecialchars($keyword,ENT_QUOTES, 'UTF-8'))?>-articles">مضامین</a></li>
            <?php endif;?>
            <?php if($tocond=='all'):?>
            <li class="nav-item nav-link active text-black">  سب  </li>	
            <?php else:?>
            <li class="nav-item"><a class="nav-link active text-black" href="<?php echo $domain?>search/<?php echo str_replace(" ","-",htmlspecialchars($keyword,ENT_QUOTES, 'UTF-8'))?>-all">سب</a></li>
        	<?php endif;?>
          </ul>

          <!-- Tab panes -->
          <div class="">
            <div class="" id="all">
              <h6 class="mt-3 mb-0 text-black text-uppercase font-weight-bold">مضامین <span class="font-family-roboto ml-1"><?php echo htmlspecialchars($keyword,ENT_QUOTES, 'UTF-8')?></span> </h6>
              <div class="row">
				<?php            
				 if ($ArticleSearch[0] > 0):
				        $i = 0;
				          while ($objArticleSearchs  = mysql_fetch_object($ArticleSearch[1])):
			           	  $aid                       = $objArticleSearchs->article_id;  
				          $article_homepage_headline = $objArticleSearchs->article_homepage_headline;
				          $article_image1            = $objArticleSearchs->article_image;
				          $article_page_url          = str_replace($old_pattern1s, $new_pattern1s,$objArticleSearchs->article_page_url);
				          $cid           			 = $objArticleSearchs->category_id;
				          $objcatPP      			 = new db_category_master($cid);
				          $catname                   = strtolower($objcatPP->Get_category_master_name());
				          $url                       = $catname.'/articles/'.$article_page_url.'-'.$aid;           
				        $i=$i+1;  
				?>                     	
                <div class="col-md-6 mt-4">
                  <div class="row">
                    <div class="col-md-6 order-1 order-md-0">
                      <h3><a href="<?php echo $domain?><?php echo htmlspecialchars($url,ENT_QUOTES, 'UTF-8')?>" class="article-news-listing-sub-title"><?php echo htmlspecialchars($article_homepage_headline,ENT_QUOTES, 'UTF-8')?></a></h3>
                    </div>
                    <div class="col-md-6 order-0 order-md-1">
                      <a href="<?php echo $domain?><?php echo htmlspecialchars($url,ENT_QUOTES, 'UTF-8')?>"><div class="bg-grey-mobile"><img src="<?php echo htmlspecialchars($article_image1,ENT_QUOTES, 'UTF-8')?>" class="media-object img-fluid d-block mx-auto align-self-center"></div></a>
                    </div>
                  </div>
                </div>
                <?php
                		endwhile;
                	endif;	
                ?>
                <div class="col-md-12 text-left mt-4">
                  <p><a href="<?php echo $domain?>search/<?php echo str_replace(" ","-",htmlspecialchars($keyword,ENT_QUOTES, 'UTF-8'))?>-articles" class="text-decoration-none"><i class="fa fa-caret-left text-black"></i><span class="text-black font-weight-bold ml-2">مزید دیکھیں</span></a></p>
                </div>  
              </div>
              <div class="horizontal-border"></div>
              <h6 class="mt-3 mb-0 text-black text-uppercase font-weight-bold"> فوٹو <span class="font-family-roboto ml-1"><?php echo htmlspecialchars($keyword,ENT_QUOTES, 'UTF-8')?></span> </h6>
              <div class="row">
				<?php            
				 if ($GallerySearch[0] > 0):
				        $i = 0;
				          while ($objGallerySearchs  = mysql_fetch_object($GallerySearch[1])):
			           	  $aidG                       = $objGallerySearchs->article_id;  
				          $article_homepage_headlineG = $objGallerySearchs->article_homepage_headline;
				          $article_image1G            = $objGallerySearchs->article_image;
				          $article_page_urlG          = str_replace($old_pattern1s, $new_pattern1s,$objGallerySearchs->article_page_url);
				          $cidG           			 = $objGallerySearchs->category_id;
				          $objcatGP      			 = new db_category_master($cidG);
				          $catnameG                   = strtolower($objcatGP->Get_category_master_name());
				          $urlG                       = $catnameG.'/photos/'.$article_page_urlG.'-'.$aidG;           
				        $i=$i+1;  
				?> 
                <div class="col-md-6 mt-4">
                  <div class="row">
                    <div class="col-md-6 order-1 order-md-0">
                      <h3><a href="<?php echo $domain?><?php echo htmlspecialchars($urlG,ENT_QUOTES, 'UTF-8')?>" class="article-news-listing-sub-title"><?php echo htmlspecialchars($article_homepage_headlineG,ENT_QUOTES, 'UTF-8')?></a></h3>
                    </div>
                    <div class="col-md-6 order-0 order-md-1">
                      <a href="<?php echo $domain?><?php echo htmlspecialchars($urlG,ENT_QUOTES, 'UTF-8')?>"><div class="bg-grey-mobile"><img src="<?php echo htmlspecialchars($article_image1G,ENT_QUOTES, 'UTF-8')?>" class="media-object img-fluid d-block mx-auto align-self-center"></div></a>
                    </div>
                  </div>
                </div>
                <?php
                	endwhile;
                endif;		
                ?>
                <div class="col-md-12 text-left mt-4">
                  <p><a href="<?php echo $domain?>search/<?php echo str_replace(" ","-",htmlspecialchars($keyword,ENT_QUOTES, 'UTF-8'))?>-photos" class="text-decoration-none"><i class="fa fa-caret-left text-black"></i><span class="text-black font-weight-bold ml-2">مزید دیکھیں</span></a></p>
                </div>  
              </div>
              <div class="horizontal-border"></div>
				<h6 class="mt-3 mb-0 text-black text-uppercase font-weight-bold"> فوٹو   <span class="font-family-roboto ml-1"><?php echo htmlspecialchars($keyword,ENT_QUOTES, 'UTF-8')?></span> </h6>
              <div class="row">
				<?php            
				 if ($VideosSearch[0] > 0):
				        $i = 0;
				          while ($objVideosSearchs  = mysql_fetch_object($VideosSearch[1])):
			           	  $aidV                       = $objVideosSearchs->article_id;  
				          $article_homepage_headlineV = $objVideosSearchs->article_homepage_headline;
				          $article_image1V            = $objVideosSearchs->article_image;
				          $article_page_urlV          = str_replace($old_pattern1s, $new_pattern1s,$objVideosSearchs->article_page_url);
				          $cidV           			 = $objVideosSearchs->category_id;
				          $objcatVP      			 = new db_category_master($cidV);
				          $catnameV                   = strtolower($objcatGP->Get_category_master_name());
				          $urlV                       = $catnameV.'/videos/'.$article_page_urlV.'-'.$aidV;           
				        $i=$i+1;  
				?> 
                <div class="col-md-6 mt-4">
                  <div class="row">
                    <div class="col-md-6 order-1 order-md-0">
                      <h3><a href="<?php echo $domain?><?php echo htmlspecialchars($urlV,ENT_QUOTES, 'UTF-8')?>" class="article-news-listing-sub-title"><?php echo htmlspecialchars($article_homepage_headlineV,ENT_QUOTES, 'UTF-8')?></a></h3>
                    </div>
                    <div class="col-md-6 order-0 order-md-1">
                      <a href="<?php echo $domain?><?php echo htmlspecialchars($urlV,ENT_QUOTES, 'UTF-8')?>"><div class="bg-grey-mobile"><img src="<?php echo htmlspecialchars($article_image1V,ENT_QUOTES, 'UTF-8')?>" class="media-object img-fluid d-block mx-auto align-self-center"></div></a>
                    </div>
                  </div>
                </div>
                <?php
                	endwhile;
                endif;		
                ?>

                <div class="col-md-12 text-left mt-4">
                  <p><a href="<?php echo $domain?>search/<?php echo str_replace(" ","-",htmlspecialchars($keyword,ENT_QUOTES, 'UTF-8'))?>-videos" class="text-decoration-none"><i class="fa fa-caret-left text-black"></i><span class="text-black font-weight-bold ml-2">مزید دیکھیں</span></a></p>
                </div>  
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php endif;?>
<?php include('bottom.php');?>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> -->
<script>  
$(document).ready(function(){  
    $(document).on('click', '#btn_more', function(){  
        var last_blog_id = $(this).data("bid");  
        var last_blog_key = $(this).data("key");  
        //alert(last_blog_key);
          if (last_blog_id != 'end') { 
            $('#btn_more').html("Loading..."); 
            $.ajax({  
              url:"<?php echo $domain?>article-paging.php",  
              method:"POST",  
              data:{last_blog_id:last_blog_id,last_blog_key:last_blog_key},  
              //data:{last_blog_key:last_blog_key},  
              dataType:"text",  
              success:function(data)  
                {  
                  if(data != '')  
                    {  
                      $('#remove_row').remove();  
                      $('#load_data_table').append(data);  
                    }  else  {  
                      $('#btn_more').html("No Data");  
                    }  
                }  
            }); 
          } 
            return false;
        });  
    });  
</script>
<script>  
$(document).ready(function(){  
    $(document).on('click', '#btn_more1', function(){  
        var last_blog_id1 = $(this).data("bid1");  
        var last_blog_key1 = $(this).data("key1");  
        //alert(last_blog_key);
          if (last_blog_id1 != 'end') { 
            $('#btn_more1').html("Loading..."); 
            $.ajax({  
              url:"<?php echo $domain?>photo-paging.php",  
              method:"POST",  
              data:{last_blog_id1:last_blog_id1,last_blog_key1:last_blog_key1},  
              //data:{last_blog_key:last_blog_key},  
              dataType:"text",  
              success:function(data)  
                {  
                  if(data != '')  
                    {  
                      $('#remove_row1').remove();  
                      $('#load_data_tablep').append(data);  
                    }  else  {  
                      $('#btn_more1').html("No Data");  
                    }  
                }  
            }); 
          } 
            return false;
        });  
    });  
</script>
<script>  
$(document).ready(function(){  
    $(document).on('click', '#btn_more2', function(){  
        var last_blog_id2 = $(this).data("bid2");  
        var last_blog_key2 = $(this).data("key2");  
        //alert(last_blog_key);
          if (last_blog_id2 != 'end') { 
            $('#btn_more2').html("Loading..."); 
            $.ajax({  
              url:"<?php echo $domain?>video-paging.php",  
              method:"POST",  
              data:{last_blog_id2:last_blog_id2,last_blog_key2:last_blog_key2},  
              //data:{last_blog_key:last_blog_key},  
              dataType:"text",  
              success:function(data)  
                {  
                  if(data != '')  
                    {  
                      $('#remove_row2').remove();  
                      $('#load_data_tablev').append(data);  
                    }  else  {  
                      $('#btn_more2').html("No Data");  
                    }  
                }  
            }); 
          } 
            return false;
        });  
    });  
</script>