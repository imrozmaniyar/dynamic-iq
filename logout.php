<?php
session_start();
include_once 'configure.php';
$_SESSION = array();

if (ini_get("session.use_cookies")):
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000, $params["path"],
	$params["domain"], $params["secure"], $params["httponly"]
    );
endif;
session_destroy();
//header("Location: " . mysql_escape_mimic($_SERVER['HTTP_REFERER']));
header("Location: $domain");