<?php
session_start();
if(
	$_SESSION['Suserid'] == " " && 
	$_SERVER['PHP_SELF'] != 'acvitate' &&
	$_SERVER['PHP_SELF'] != 'edit-password' &&
	$_SERVER['PHP_SELF'] != 'changepassword_submit' &&
	$_SERVER['PHP_SELF'] != 'edit-profile' &&
	$_SERVER['PHP_SELF'] != 'reset' && 
	$_SERVER['PHP_SELF'] != 'checkmember' 	&& 
	$_SERVER['PHP_SELF'] != 'forgot-password-submit'
  ):
    header("Location: http://i.radiocity.in");
    exit();
endif;