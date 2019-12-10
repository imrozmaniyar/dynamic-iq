<?php
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if(($actual_link == $domain) && (basename($_SERVER['PHP_SELF'])== 'index.php' )):
?>	
<title> خبریں ، تازہ ترین خبریں ، بریکنگ نیو - The Inquilab</title>
<meta name="description" content=" Urdu News - ہندوستان اور پوری دنیا کی سیاست ، بالی ووڈ ، ٹکنالوجی ، کرکٹ سے متعلق اردو میں تازہ ترین اردو خبروں کی سرخیاں لائیں۔
" />
<meta name="keywords" content="  اردو نیوز, اردو میں خبریں News in Urdu, Urdu News, latest news in Urdu" />
<?php elseif($actual_link == $domain.'videos/'):?>
<title> Video Index</title>
<meta name="description" content="Video Index" />
<meta name="keywords" content=" Video Index" />	
<?php elseif($actual_link == $domain.'photos/'):?>
<title>Photo Index</title>
<meta name="description" content="Photo Index" />
<meta name="keywords" content=" Photo Index" />	
<?php elseif($actual_link == $domain.'photos/entertainment'):?>
<title>Photo Enter</title>
<meta name="description" content="Photo Photo Enter" />
<meta name="keywords" content=" Photo Photo Enter" />	
<?php endif;?>
<?php
// News //
$actual_link1 = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
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
<?php  
 }
	endif;
 endif;
 ?>
 <?php
// entertainment //
$actual_link1 = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
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
<?php  
 }
	endif;
 endif;
 ?>
  <?php
// Sports //
$actual_link1 = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
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
<?php  
 }
	endif;
 endif;
 ?>
   <?php
// Features //
$actual_link1 = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
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
<?php  
 }
	endif;
 endif;
 ?>
<?php
// lifestyle //
$actual_link1 = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
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
<?php  
 }
	endif;
 endif;
 ?>
<?php
// Students //
$actual_link1 = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
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
<?php  
 }
	endif;
 endif;
 ?>
<?php 
 // Mumbai News //
$actual_link1 = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
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
<?php  
 }
	endif;
 endif;
 ?>
 <?php 
 // National News //
$actual_link1 = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
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
<?php  
 }
	endif;
 endif;
 ?>
  <?php 
 // interNational News //
$actual_link1 = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
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
<?php  
 }
	endif;
 endif;
 ?>
   <?php 
 // business News //
$actual_link1 = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
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
<?php  
 }
	endif;
 endif;
 ?>
<?php 
 // film News //
$actual_link1 = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
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
<?php  
 }
	endif;
 endif;
 ?>
 <?php 
 // tv News //
$actual_link1 = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
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
<?php  
 }
	endif;
 endif;
 ?>
<?php 
 // theatre News //
$actual_link1 = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
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
<?php  
 }
	endif;
 endif;
 ?>
<?php 
 // cricket News //
$actual_link1 = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
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
<?php  
 }
	endif;
 endif;
 ?>
 
 <?php 
 // other-sports News //
$actual_link1 = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
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
<?php  
 }
	endif;
 endif;
 ?>
 <?php 
 // features/opinion News //
$actual_link1 = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if($actual_link1 == $domain.'features/opinion'):
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
<?php  
 }
	endif;
 endif;
 ?>
 <?php 
 // features/columnists News //
$actual_link1 = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
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
<?php  
 }
	endif;
 endif;
 ?>
 <?php 
 // features/jumma News //
$actual_link1 = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
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
<?php  
 }
	endif;
 endif;
 ?>

  <?php 
 //  sunday-magazine //
$actual_link1 = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
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
<?php  
 }
	endif;
 endif;
 ?>
   <?php 
 //  literature //
$actual_link1 = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
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
<?php  
 }
	endif;
 endif;
 ?>
  <?php 
 //  women //
$actual_link1 = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
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
<?php  
 }
	endif;
 endif;
 ?>
  <?php 
 //  events //
$actual_link1 = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
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
<?php  
 }
	endif;
 endif;
 ?>
   <?php 
 //  youth //
$actual_link1 = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
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
<?php  
 }
	endif;
 endif;
 ?>
    <?php 
 //  tech //
$actual_link1 = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
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
<?php  
 }
	endif;
 endif;
 ?>
     <?php 
 //  auto //
$actual_link1 = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
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
<?php  
 }
	endif;
 endif;
 ?>
     <?php 
 //  naye-sitare //
$actual_link1 = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
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
<?php  
 }
	endif;
 endif;
 ?>

      <?php 
 //   taleemi-inquilab //
$actual_link1 = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
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
elseif($pagename=='photos'):
$objseo2  = new db_gallery_master($id);
$pagetitlei = $objseo2->Get_gallery_name();
$pagedescriptioni = strip_tags($objseo2->Get_gallery_description());		
$pagekeywordsi = $objseo2->Get_gallery_keywords();
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
<meta name="description" content="<?php echo htmlspecialchars($pagedescriptioni,ENT_QUOTES, 'UTF-8')?>" />
<meta name="keywords" content="<?php echo htmlspecialchars($pagekeywordsi,ENT_QUOTES, 'UTF-8')?>" />
<?php elseif($searchkeyword!=""):?>
<title><?php echo htmlspecialchars($pagetitlei,ENT_QUOTES, 'UTF-8')?></title>
<meta name="description" content="<?php echo htmlspecialchars($pagedescriptioni,ENT_QUOTES, 'UTF-8')?>" />
<meta name="keywords" content="<?php echo htmlspecialchars($pagekeywordsi,ENT_QUOTES, 'UTF-8')?>" />
<?php endif;?>