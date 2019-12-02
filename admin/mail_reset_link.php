<?php
$message = '<html><head><title>Forgot Password For Inquilab.com (Admin Section)</title>'
        . '</head><body><p>Click on the given link to reset '
        . 'your password <a href="' . $sendlink . '">Reset Password</a>'
        . '</p></body></html>';

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
//$headers .= 'From: support@iq.com' . "\r\n"; change this on live
$headers .= 'From: epaperinfo@inquilab.com' . "\r\n";
?>

<?php if (mail($to, $subject, $message, $headers)): ?>
   	<script language="javascript">
		alert("Forgot Passowrd link mailed to your email account. Kindly Check you email.");
		window.location="<?php echo $domain?>/admin";
	</script>
<?php else: ?>
   	<script language="javascript">
		alert("Failed In Sending Mail !! Please try Again.");
		window.location="<?php echo $domain?>/admin";
	</script>
<?php endif;?>
