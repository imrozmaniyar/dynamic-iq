<?php
include_once(DIR_WS_CLASS_SITE."db_users.php");
include_once(DIR_WS_CLASS_SITE."db_users_photos.php");
include_once(DIR_WS_CLASS_SITE."db_users_videos.php");
include_once(DIR_WS_CLASS_SITE."db_users_news.php");
include_once(DIR_WS_CLASS_SITE."db_users_mumbai.php");
include_once(DIR_WS_CLASS_SITE."db_users_ent.php");
include_once(DIR_WS_CLASS_SITE."db_users_lifestyle.php");
include_once(DIR_WS_CLASS_SITE."db_users_sports.php");
include_once(DIR_WS_CLASS_SITE."db_users_news_inner.php");
include_once(DIR_WS_CLASS_SITE."db_users_ent_inner.php");
include_once(DIR_WS_CLASS_SITE."db_users_sports_inner.php");
include_once(DIR_WS_CLASS_SITE."db_users_features_inner.php");
include_once(DIR_WS_CLASS_SITE."db_users_children_inner.php");
include_once(DIR_WS_CLASS_SITE."db_users_life_inner.php");
include_once(DIR_WS_CLASS_SITE."db_users_video_inner.php");
include_once(DIR_WS_CLASS_SITE."db_users_video_inner.php");
include_once(DIR_WS_CLASS_SITE."db_users_photo_inner.php");
include_once("class/db_video_master.php");
include_once("class/db_article_master.php");
include_once("class/db_gallery_master.php");
include_once("class/db_category_master.php");
include_once("class/db_sub_category_master.php");
include_once("class/db_gallery_child.php");
include_once("class/db_poetry_master.php");
//////////for server date//////////////
date_default_timezone_set('Asia/Kolkata');
$timestamp = time();
//echo $timestamp;
$date_time = date("d-m-Y (D) h:i:s", $timestamp);
$shedate = date("Y-m-d");
$shetimeH = date("H");
$shetimeM = date("i");
$ftime  = strval($shetimeH.$shetimeM);
//$lan                              = strval($_GET['id2']);
//echo $shetime;
//////////for server date//////////////
////// HomeP11 /////
$objhomep11 = new db_users;
$strWhere = "position=1";
$homep11    = $objhomep11->selectAll($strWhere, 0, 1);
////// HomeP11 /////
////// HomeP112 /////
$objhomep112 = new db_users;
$strWhere = "position IN (2,3,4,5)";
$homep112    = $objhomep112->selectAll($strWhere, 0, 4);
////// HomeP112 /////
////// HomePhotos /////
$objhomephotos = new db_users_photos;
$strWhere = "";
$homephoto    = $objhomephotos->selectAll($strWhere, 0, 3);
////// HomePhotos /////
////// HomeVideos /////
$objhomevideos = new db_users_videos;
$strWhere = "";
$homevideo    = $objhomevideos->selectAll($strWhere, 0, 3);
////// HomeVideos /////
///// Home News with photo//////
$objnewsPhoto = new db_users_news;
$strWhere = "position=1";
$newsPhoto    = $objnewsPhoto->selectAll($strWhere, 0, 1);
///// Home News with photo//////
///// Home News Without Photos/
$objnewswithoutPhoto = new db_users_news;
$strWhere = "position IN (2,3,4)";
$newswithoutPhoto    = $objnewswithoutPhoto->selectAll($strWhere, 0, 3);
///// Home News Without Photos
///// Home Mumbai with photo//////
$objMumbaiPhoto = new db_users_mumbai;
$strWhere = "position=1";
$MumbaiPhoto    = $objMumbaiPhoto->selectAll($strWhere, 0, 1);
///// Home Mumbai with photo//////
///// Home Mumbai Without Photos/
$objMumbaiWithoutPhoto = new db_users_mumbai;
$strWhere = "position IN (2,3,4)";
$MumbaiWithoutPhoto    = $objMumbaiWithoutPhoto->selectAll($strWhere, 0, 3);
///// Home Mumbai Without Photos
///// Home ENT with photo//////
$objEntPhoto = new db_users_lifestyle;
$strWhere = "position=1";
$EntPhoto    = $objEntPhoto->selectAll($strWhere, 0, 1);
///// Home ENT with photo//////
///// Home ENT Without Photos/
$objEntWithoutPhoto = new db_users_lifestyle;
$strWhere = "position IN (2,3,4)";
$EntWithoutPhoto    = $objEntWithoutPhoto->selectAll($strWhere, 0, 3);
///// Home ENT Without Photos
///// Home Lifestyle //////
//$objlifestyle = new db_users_lifestyle;
$objlifestyle = new db_users_ent;
$strWhere = "";
$lifestyle    = $objlifestyle->selectAll($strWhere, 0, 4);
///// Home Lifestyle //////
///// Home Sports //////
$objsports = new db_users_sports;
$strWhere = "";
$sports    = $objsports->selectAll($strWhere, 0, 4);
///// Home Sports //////
///// Home Sunday Magazine //////
$objsunday = new db_article_master;
$strWhere = "category_id=17 and sub_category_id=22 and article_date1 <='$shedate' and article_epoch<=$timestamp and active='Y'";
$sunday    = $objsunday->selectAll($strWhere, 0, 4);
///// Home Sunday Magazine //////
///// Home Jumma Magazine //////
$objjumma = new db_article_master;
$strWhere = "category_id=17 and sub_category_id=21 and article_date1 <='$shedate' and article_epoch<=$timestamp and active='Y'";
$jumma    = $objjumma->selectAll($strWhere, 0, 4);
///// Home Jumma Magazine //////
///// Home Literature  //////
$objLiterature  = new db_article_master;
$strWhere = "category_id=17 and sub_category_id=23 and article_date1 <='$shedate' and article_epoch<=$timestamp and active='Y'";
$Literature    = $objLiterature->selectAll($strWhere, 0, 4);
///// Home Literature  //////
///// Home Naye Sitare  //////
$objnewstar  = new db_article_master;
$strWhere = "category_id=19 and sub_category_id=28 and article_date1 <='$shedate' and article_epoch<=$timestamp and active='Y'";
$newstar    = $objnewstar->selectAll($strWhere, 0, 3);
///// Home Naye Sitare  //////
///// Home Taleemi Inquilab //////
$objtq  = new db_article_master;
$strWhere = "category_id=19 and sub_category_id=29 and article_date1 <='$shedate' and article_epoch<=$timestamp and active='Y'";
$tq    = $objtq->selectAll($strWhere, 0, 3);
///// Home Taleemi Inquilab//////
////// News Inner 1 /////
$objnewsinner1 = new db_users_news_inner;
$strWhere = "position=1";
$newsinner1    = $objnewsinner1->selectAll($strWhere, 0, 1);
////// News Inner 1 /////
////// News Inner 2 /////
$objnewsinner2 = new db_users_news_inner;
$strWhere = "position IN (2,3,4,5)";
$newsinner2    = $objnewsinner2->selectAll($strWhere, 0, 4);
////// News Inner 2 /////
///// News National //////
$objnewsnational = new db_article_master;
$strWhere = "category_id=14 and sub_category_id=11 and article_date1 <='$shedate' and article_epoch<=$timestamp and active='Y'";
//$strWhere = "category_id=14 and sub_category_id=11 and article_date1 <='$shedate' and article_time <= '$shetime' and active='Y'";
$newsnational    = $objnewsnational->selectAllForOtherNews($strWhere, 1, 4);
///// News National //////
///// News National Single Large //////
$objnewsnationalSingle = new db_article_master;
//if($article_date=='')
$strWhere1 = "category_id=14 and sub_category_id=11 and article_date1 <='$shedate' and article_epoch<=$timestamp and active='Y'";
//$strWhere = "category_id=14 and sub_category_id=11 and active='Y'";
//echo $strWhere1;
$newsnationalSingle    = $objnewsnationalSingle->selectAll($strWhere1, 0, 1);
///// News National Single Large //////
///// News interNational //////
$objnewsinternational = new db_article_master;
$strWhere = "category_id=14 and sub_category_id=12 and article_date1 <='$shedate' and article_epoch<=$timestamp and active='Y'";
$newsinternational    = $objnewsinternational->selectAllForOtherNews($strWhere, 1, 4);
///// News interNational //////
///// News interNational Single Large //////
$objnewsinternationalSingle = new db_article_master;
$strWhere = "category_id=14 and sub_category_id=12 and article_date1 <='$shedate' and article_epoch<=$timestamp and active='Y'";
$newsinternationalSingle    = $objnewsinternationalSingle->selectAll($strWhere, 0, 1);
///// News interNational Single Large //////
///// News Phtos //////
$objnewsPhotos = new db_gallery_master;
$strWhere = "category_id=14 and gallery_date1 <='$shedate' and  gallery_epoch<=$timestamp and active='Y'";
$newsPhotos    = $objnewsPhotos->selectAll($strWhere, 0, 3);
///// News Phtos //////
///// News Business //////
$objnewsbusiness = new db_article_master;
$strWhere = "category_id=14 and sub_category_id=13 and article_date1 <='$shedate' and article_epoch<=$timestamp and active='Y'";
$newsbusiness    = $objnewsbusiness->selectAllForOtherNews($strWhere, 1, 4);
//echo $strWhere;
///// News Business //////
///// News Business Single Large //////
$objnewsbusinessSingle = new db_article_master;
$strWhere = "category_id=14 and sub_category_id=13 and article_date1 <='$shedate' and article_epoch<=$timestamp and active='Y'";
$newsbusinessSingle    = $objnewsbusinessSingle->selectAll($strWhere, 0, 1);
///// News Business Single Large //////
///// News Videos //////
$objnewsVideos = new db_video_master;
$strWhere = "category_id=14 and video_date1 <='$shedate' and video_epoch<=$timestamp and active='Y'";
$newsVideos    = $objnewsVideos->selectAll($strWhere, 0, 3);
///// News Videos //////
////// Ent Inner 1 /////
$objentinner1 = new db_users_ent_inner;
$strWhere = "position=1";
$entinner1    = $objentinner1->selectAll($strWhere, 0, 1);
////// ent Inner 1 /////
////// Ent Inner 2 /////
$objentinner2 = new db_users_ent_inner;
$strWhere = "position IN (2,3,4,5)";
$entinner2    = $objentinner2->selectAll($strWhere, 0, 4);
////// ENT Inner 2 /////
///// Ent Film //////
$objentfilm = new db_article_master;
$strWhere = "category_id=15 and sub_category_id=14 and article_date1 <='$shedate' and article_epoch<=$timestamp and active='Y'";
$entfilm    = $objentfilm->selectAllForOtherNews($strWhere, 1, 4);
///// Ent Film //////
///// Ent Film Single Large //////
$objentfilmSingle = new db_article_master;
$strWhere = "category_id=15 and sub_category_id=14 and article_date1 <='$shedate' and article_epoch<=$timestamp and active='Y'";
$entfilmSingle    = $objentfilmSingle->selectAll($strWhere, 0, 1);
///// Ent Film Single Large //////
///// Ent TV //////
$objenttv = new db_article_master;
$strWhere = "category_id=15 and sub_category_id=15 and article_date1 <='$shedate' and article_epoch<=$timestamp and active='Y'";
$enttv    = $objenttv->selectAllForOtherNews($strWhere, 1, 4);
///// Ent TV //////
///// Ent TV Single Large //////
$objenttvSingle = new db_article_master;
$strWhere = "category_id=15 and sub_category_id=15 and article_date1 <='$shedate' and article_epoch<=$timestamp and active='Y'";
$enttvSingle    = $objenttvSingle->selectAll($strWhere, 0, 1);
///// Ent TV Single Large //////
///// Ent Phtos //////
$objentPhotos = new db_gallery_master;
$strWhere = "category_id=15 and gallery_date1 <='$shedate' and gallery_epoch<=$timestamp and  active='Y'";
$entPhotos    = $objentPhotos->selectAll($strWhere, 0, 3);
///// Ent Phtos //////
///// Ent thea //////
$objentthea = new db_article_master;
$strWhere = "category_id=15 and sub_category_id=16 and article_date1 <='$shedate' and article_epoch<=$timestamp and active='Y'";
$entthea    = $objentthea->selectAllForOtherNews($strWhere, 1, 4);
///// Ent thea //////
///// Ent thea Single Large //////
$objenttheaSingle = new db_article_master;
$strWhere = "category_id=15 and sub_category_id=16 and article_date1 <='$shedate' and article_epoch<=$timestamp and active='Y'";
$enttheaSingle    = $objenttheaSingle->selectAll($strWhere, 0, 1);
///// Ent thea Single Large //////
///// News Videos //////
$objentVideos = new db_video_master;
$strWhere = "category_id=15 and video_date1 <='$shedate' and video_epoch<=$timestamp and active='Y'";
$entVideos    = $objentVideos->selectAll($strWhere, 0, 3);
///// News Videos //////
////// Sports Inner 1 /////
$objsportsinner1 = new db_users_sports_inner;
$strWhere = "position=1";
$sportsinner1    = $objsportsinner1->selectAll($strWhere, 0, 1);
////// Sports Inner 1 /////
////// Sports Inner 2 /////
$objsportsinner2 = new db_users_sports_inner;
$strWhere = "position IN (2,3,4,5)";
$sportsinner2    = $objsportsinner2->selectAll($strWhere, 0, 4);
////// Sports Inner 2 /////
///// Sports Cricket //////
$objsportscricket = new db_article_master;
$strWhere = "category_id=16 and sub_category_id=17 and article_date1 <='$shedate' and article_epoch<=$timestamp and active='Y'";
$sportscricket    = $objsportscricket->selectAllForOtherNews($strWhere, 1, 4);
///// Sports Cricket //////
///// Sports Cricket Single Large //////
$objsportscricketSingle = new db_article_master;
$strWhere = "category_id=16 and sub_category_id=17 and article_date1 <='$shedate' and article_epoch<=$timestamp and active='Y'";
$sportscricketSingle    = $objsportscricketSingle->selectAll($strWhere, 0, 1);
///// Sports Cricket Single Large //////
///// Sports Phtos //////
$objSportsPhotos = new db_gallery_master;
$strWhere = "category_id=16 and gallery_date1 <='$shedate' and gallery_epoch<=$timestamp and  active='Y'";
$SportsPhotos    = $objSportsPhotos->selectAll($strWhere, 0, 3);
///// Sports Phtos //////
///// Sports Others //////
$objsportsothers = new db_article_master;
$strWhere = "category_id=16 and sub_category_id=18 and article_epoch<=$timestamp and active='Y'";
$sportsothers    = $objsportsothers->selectAllForOtherNews($strWhere, 1, 4);
///// Sports Others //////
///// Sports Others Single Large //////
$objsportsothersSingle = new db_article_master;
$strWhere = "category_id=16 and sub_category_id=18 and article_date1 <='$shedate' and article_epoch<=$timestamp and active='Y'";
$sportsothersSingle    = $objsportsothersSingle->selectAll($strWhere, 0, 1);
///// Sports Others Single Large //////
///// Sports Videos //////
$objSportsVideos = new db_video_master;
$strWhere = "category_id=16 and video_date1 <='$shedate' and video_epoch<=$timestamp and active='Y'";
$SportsVideos    = $objSportsVideos->selectAll($strWhere, 0, 3);
///// Sports Videos //////
////// Features Inner 1 /////
$objfeaturesinner1 = new db_users_features_inner;
$strWhere = "position=1";
$featuresinner1    = $objfeaturesinner1->selectAll($strWhere, 0, 1);
////// Features Inner 1 /////
////// Features Inner 2 /////
$objfeaturesinner2 = new db_users_features_inner;
$strWhere = "position IN (2,3,4,5)";
$featuresinner2    = $objfeaturesinner2->selectAll($strWhere, 0, 4);
////// Features Inner 2 /////
///// Features Option //////
$objdeatureo = new db_article_master;
$strWhere = "category_id=17 and sub_category_id=19 and article_date1 <='$shedate' and article_epoch<=$timestamp and active='Y'";
$deatureo    = $objdeatureo->selectAllForOtherNews($strWhere, 1, 4);
///// Features Option //////
///// Features Option Single Large //////
$objdeatureoSingle = new db_article_master;
$strWhere = "category_id=17 and sub_category_id=19 and article_date1 <='$shedate' and article_epoch<=$timestamp and active='Y'";
$deatureoSingle    = $objdeatureoSingle->selectAll($strWhere, 0, 1);
///// Features Option Single Large //////
///// Features coloum //////
$objdeaturec = new db_article_master;
$strWhere = "category_id=17 and sub_category_id=32 and article_date1 <='$shedate' and article_epoch<=$timestamp and active='Y'";
$deaturec    = $objdeaturec->selectAllForOtherNews($strWhere, 1, 4);
///// Features coloum //////
///// Features coloum Single Large //////
$objdeaturecSingle = new db_article_master;
$strWhere = "category_id=17 and sub_category_id=32 and article_date1 <='$shedate' and article_epoch<=$timestamp and active='Y'";
$deaturecSingle    = $objdeaturecSingle->selectAll($strWhere, 0, 1);
///// Features coloum Single Large //////
///// Features Jumma //////
$objfjumma = new db_article_master;
$strWhere = "category_id=17 and sub_category_id=21 and article_date1 <='$shedate' and article_epoch<=$timestamp and active='Y'";
$fjumma    = $objfjumma->selectAllForOtherNews($strWhere, 1, 4);
///// Features Jumma //////
///// Features Jumma Single Large //////
$objfjummaSingle = new db_article_master;
$strWhere = "category_id=17 and sub_category_id=21 and article_date1 <='$shedate' and article_epoch<=$timestamp and active='Y'";
$fjummaSingle    = $objfjummaSingle->selectAll($strWhere, 0, 1);
///// Features Jumma Single Large //////
///// Features sunday //////
$objfsunday = new db_article_master;
$strWhere = "category_id=17 and sub_category_id=22 and article_date1 <='$shedate' and article_epoch<=$timestamp and active='Y'";
$fsunday    = $objfsunday->selectAllForOtherNews($strWhere, 1, 4);
///// Features sunday //////
///// Features sunday Single Large //////
$objfsundaySingle = new db_article_master;
$strWhere = "category_id=17 and sub_category_id=22 and article_date1 <='$shedate' and article_epoch<=$timestamp and active='Y'";
$fsundaySingle    = $objfsundaySingle->selectAll($strWhere, 0, 1);
///// Features sunday Single Large //////
///// Features lit //////
$objflit = new db_article_master;
$strWhere = "category_id=17 and sub_category_id=23 and article_date1 <='$shedate' and article_epoch<=$timestamp and active='Y'";
$flit    = $objflit->selectAllForOtherNews($strWhere, 1, 4);
///// Features lit //////
///// Features lit Single Large //////
$objflitSingle = new db_article_master;
$strWhere = "category_id=17 and sub_category_id=23 and article_date1 <='$shedate' and article_epoch<=$timestamp and active='Y'";
$flitSingle    = $objflitSingle->selectAll($strWhere, 0, 1);
///// Features lit Single Large //////
////// Children Inner 1 /////
$objchildreninner1 = new db_users_children_inner;
$strWhere = "position=1";
$childreninner1    = $objchildreninner1->selectAll($strWhere, 0, 1);
////// Children Inner 1 /////
////// Children Inner 2 /////
$objchildreninner2 = new db_users_children_inner;
$strWhere = "position IN (2,3,4,5)";
$childreninner2    = $objchildreninner2->selectAll($strWhere, 0, 4);
////// Children Inner 2 /////
///// NS //////
$objns = new db_article_master;
$strWhere = "category_id=19 and sub_category_id=28 and article_date1 <='$shedate' and article_epoch<=$timestamp and active='Y'";
$ns    = $objns->selectAllForOtherNews($strWhere, 1, 4);
///// NS //////
///// NS Single Large //////
$objnsSingle = new db_article_master;
$strWhere = "category_id=19 and sub_category_id=28 and article_date1 <='$shedate' and article_epoch<=$timestamp and active='Y'";
$nsSingle    = $objnsSingle->selectAll($strWhere, 0, 1);
///// NS Single Large //////
///// ti //////
$objti = new db_article_master;
$strWhere = "category_id=19 and sub_category_id=29 and article_date1 <='$shedate' and article_epoch<=$timestamp  and active='Y'";
$ti    = $objti->selectAllForOtherNews($strWhere, 1, 4);
///// ti //////
///// ti Single Large //////
$objtiSingle = new db_article_master;
$strWhere = "category_id=19 and sub_category_id=29 and article_date1 <='$shedate' and article_epoch<=$timestamp and active='Y'";
$tiSingle    = $objtiSingle->selectAll($strWhere, 0, 1);
///// ti Single Large //////
////// lifestyle Inner 1 /////
$objlifestyleinner1 = new db_users_life_inner;
$strWhere = "position=1";
$lifestyleinner1    = $objlifestyleinner1->selectAll($strWhere, 0, 1);
////// lifestyle Inner 1 /////
////// lifestyle Inner 2 /////
$objlifestyleinner2 = new db_users_life_inner;
$strWhere = "position IN (2,3,4,5)";
$lifestyleinner2    = $objlifestyleinner2->selectAll($strWhere, 0, 4);
////// lifestyle Inner 2 /////
///// Women //////
$objwomen = new db_article_master;
$strWhere = "category_id=18 and sub_category_id=24 and article_date1 <='$shedate' and article_epoch<=$timestamp and active='Y'";
$women    = $objwomen->selectAllForOtherNews($strWhere, 1, 4);
///// Women //////
///// Women Single Large //////
$objwomenSingle = new db_article_master;
$strWhere = "category_id=18 and sub_category_id=24 and article_date1 <='$shedate' and article_epoch<=$timestamp and active='Y'";
$womenSingle    = $objwomenSingle->selectAll($strWhere, 0, 1);
///// Women Single Large //////
///// happenings //////
$objhappenings = new db_article_master;
$strWhere = "category_id=18 and sub_category_id=31 and article_date1 <='$shedate' and article_epoch<=$timestamp and active='Y'";
$happenings    = $objhappenings->selectAllForOtherNews($strWhere, 1, 4);
///// happenings //////
///// happenings Single Large //////
$objhappeningsSingle = new db_article_master;
$strWhere = "category_id=18 and sub_category_id=31 and article_date1 <='$shedate' and article_epoch<=$timestamp and active='Y'";
$happeningsSingle    = $objhappeningsSingle->selectAll($strWhere, 0, 1);
///// happenings Single Large //////
///// Sports Phtos //////
$objlifestylePhotos = new db_gallery_master;
$strWhere = "category_id=18 and gallery_date1 <='$shedate' and gallery_epoch<=$timestamp and active='Y'";
$lifestylePhotos    = $objlifestylePhotos->selectAll($strWhere, 0, 3);
///// Sports Phtos //////
///// youth //////
$objyouth = new db_article_master;
$strWhere = "category_id=18 and sub_category_id=25 and article_date1 <='$shedate' and article_epoch<=$timestamp and active='Y'";
$youth    = $objyouth->selectAllForOtherNews($strWhere, 1, 4);
///// happenings //////
///// happenings Single Large //////
$objyouthSingle = new db_article_master;
$strWhere = "category_id=18 and sub_category_id=25 and article_date1 <='$shedate' and article_epoch<=$timestamp and active='Y'";
$youthSingle    = $objyouthSingle->selectAll($strWhere, 0, 1);
///// happenings Single Large //////
///// Tech //////
$objTech = new db_article_master;
$strWhere = "category_id=18 and sub_category_id=26 and article_date1 <='$shedate' and article_epoch<=$timestamp and active='Y'";
$Tech    = $objTech->selectAllForOtherNews($strWhere, 1, 4);
///// Tech //////
///// Tech Single Large //////
$objTechSingle = new db_article_master;
$strWhere = "category_id=18 and sub_category_id=26 and article_date1 <='$shedate' and article_epoch<=$timestamp and active='Y'";
$TechSingle    = $objTechSingle->selectAll($strWhere, 0, 1);
///// Tech Single Large //////
///// auto //////
$objauto = new db_article_master;
$strWhere = "category_id=18 and sub_category_id=27 and article_date1 <='$shedate' and article_epoch<=$timestamp and active='Y'";
$auto    = $objauto->selectAllForOtherNews($strWhere, 1, 4);
///// auto //////
///// auto Single Large //////
$objautoSingle = new db_article_master;
$strWhere = "category_id=18 and sub_category_id=27 and article_date1 <='$shedate' and article_epoch<=$timestamp and active='Y'";
$autoSingle    = $objautoSingle->selectAll($strWhere, 0, 1);
///// auto Single Large //////
////// Video Main 1 /////
$objvideomain1 = new db_users_video_inner;
$strWhere = "position=1";
$videomain1    = $objvideomain1->selectAll($strWhere, 0, 1);
////// Video Main 1 /////
////// Video Main 2 /////
$objvideomain2 = new db_users_video_inner;
$strWhere = "position IN (2,3,4,5)";
$videomain2    = $objvideomain2->selectAll($strWhere, 0, 4);
////// Video Main 2 /////
///// video enter home //////
$objvideoenthome = new db_video_master;
$strWhere = "category_id=15 and video_date1 <='$shedate' and video_epoch<=$timestamp and active='Y'";
$videoenthome    = $objvideoenthome->selectAll($strWhere, 0, 3);
///// video enter home //////
///// video news home //////
$objvideonewshome = new db_video_master;
$strWhere = "category_id=14 and video_date1 <='$shedate' and video_epoch<=$timestamp and active='Y'";
$videonewshome    = $objvideonewshome->selectAll($strWhere, 0, 3);
//echo $strWhere;
///// video news home //////
///// video sports home //////
$objvideosportshome = new db_video_master;
$strWhere = "category_id=16 and video_date1 <='$shedate' and video_epoch<=$timestamp and active='Y'";
$videosportshome    = $objvideosportshome->selectAll($strWhere, 0, 3);
///// video sports home //////
///// video photo home //////
$objvideophotohome = new db_gallery_master;
$strWhere = " gallery_date1 <='$shedate' and gallery_epoch<=$timestamp and active='Y'";
$videophotohome    = $objvideophotohome->selectAll($strWhere, 0, 3);
///// video photo home //////
////// Photo Main 1 /////
$objphotomain1 = new db_users_photo_inner;
$strWhere = "position=1";
$photomain1    = $objphotomain1->selectAll($strWhere, 0, 1);
////// Photo Main 1 /////
////// Photo Main 2 /////
$objphotomain2 = new db_users_photo_inner;
$strWhere = "position IN (2,3,4,5)";
$photomain2    = $objphotomain2->selectAll($strWhere, 0, 4);
////// Photo Main 2 /////
///// video enter home //////
$objphotosenthome = new db_gallery_master;
$strWhere = "category_id=15 and gallery_date1 <='$shedate' and gallery_epoch<=$timestamp and active='Y'";
$photosenthome    = $objphotosenthome->selectAll($strWhere, 0, 3);
///// video enter home //////
///// photo news home //////
$objphotonewshome = new db_gallery_master;
$strWhere = "category_id=14 and gallery_date1 <='$shedate' and gallery_epoch<=$timestampand active='Y'";
$photonewshome    = $objphotonewshome->selectAll($strWhere, 0, 3);
///// photo news home //////
///// photo sports home //////
$objphotosportshome = new db_gallery_master;
$strWhere = "category_id=16 and gallery_date1 <='$shedate' and gallery_epoch<=$timestamp and active='Y'";
$photosportshome    = $objphotosportshome->selectAll($strWhere, 0, 3);
///// photo sports home //////
///// photo lifestyle home //////
$objphotolifestylehome = new db_gallery_master;
$strWhere = "category_id=18 and gallery_date1 <='$shedate' and gallery_epoch<=$timestamp and active='Y'";
$photolifestylehome    = $objphotolifestylehome->selectAll($strWhere, 0, 3);
///// photo lifestyle home //////
/////  photo videos home //////
$objphotovideohome = new db_video_master;
$strWhere = "video_date1 <='$shedate' and video_epoch<=$timestamp and active='Y'";
$photovideohome    = $objphotovideohome->selectAll($strWhere, 0, 3);
///// photo videos home //////
/////  Poetry home //////
$objpoetryhome = new db_poetry_master;
$strWhere = "active='Y'";
$poetryhome    = $objpoetryhome->selectAll($strWhere, 0, 1);
///// Poetry home //////
?>