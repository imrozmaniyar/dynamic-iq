<?php     
/*$to_email = 'vikram.kene@gamil.com';
$subject = 'Testing PHP Mail';
$message = 'This mail is sent using the PHP mail function';
$headers = 'From: epaperinfo@inquilab.com';
mail($to_email,$subject,$message,$headers);*/
?>


<?php
$to      = 'vikramkene@myradiocity.com,vikram.kene@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: epaperinfo@inquilab.com' . "\r\n" .
    'Reply-To: epaperinfo@inquilab.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>