<?php
if(isset($_POST['message'])){
    $to      = 'detrich2k@gmail.com';
    $message = $_POST['message']; 
    $headers = "From: ".$_POST['sender_nam‌​e​']." <".$_POST['sender_em‌​ail‌​'].">\r\n"; $headers = "Reply-To: ".$_POST['sender_ema‌​il‌​']."\r\n"; 
    $headers = "Content-type: text/html; charset=iso-8859-1\r\n";
    'X-Mailer: PHP/' . phpversion();
    mail($to, $message, $headers);
    exit;
 }
?>