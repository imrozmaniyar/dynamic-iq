<?php
$actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if(($actual_link == $domain) && (basename($_SERVER['PHP_SELF'])== 'index.php' )):
?>	

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
<?php endif;?>
