<?php
$hostname = $_SERVER['SERVER_NAME'];
//$domain = "http://".$hostname."/dashboard/iq/";/////for local
$domain = "http://".$hostname."/";/////for test server
define('DIR_WS_CLASS', '../class/');
define('DIR_WS_CLASS_DATABASE_TABLES', '../class/database_tables/');

define('DIR_WS_CLASS_SITE', 'class/');
define('DIR_WS_CLASS_DATABASE_TABLES_SITE', 'class/database_tables/');

define('DIR_WS_ASSETS','' . $domain . 'assets/');
define('DIR_WS_IMAGES', '../images/');
define('DIR_WS_IMAGES_UPLOADS_ADMIN', '../images/upload/');
/**
 * Array Patten
 * @author Vikram
 */
$old_pattern   = array(" ", "!", "#","$","%","^","&","*","(",")","'","~","`","?",",",":",".","/");
$new_pattern   = array("-","","","","","","","","","","","","","","","","-","-","-");
$old_pattern1  = array("<div>", "<span>", "<p>","</div>","</span>","</p>","<br>");
$new_pattern1  = array("","","","","","","");
$old_pattern1s = array(" ", "!", "#", "$", "%", "^", "&", "*", "(", ")", "'", "~", "`", "?", ",", ":", "/", "_");
$new_pattern1s = array("-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-");
$old_patterniq = array("%5", "%" ,"&#373A&#372F&#372F", "&#372F");
$new_patterniq = array("-","&#37", "://", "/");

function mysql_escape_mimic($inp){
   if(is_array($inp))
   return array_map(__METHOD__, $inp);
    if(!empty($inp) && is_string($inp)) {
      return str_replace(array('\\', "\0", "\n", "\r", "'", '"', "\x1a"), array('\\\\', '\\0', '\\n', '\\r', "\\'", '\\"', '\\Z'), $inp);
    }
    return $inp;
}
?>
