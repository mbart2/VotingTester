<?php
$london = $_POST['london']
$paris = $_POST['paris']
$prague = $_POST['prague']
$zurich = $_POST['zurich']
$venice = $_POST['venice']
$berlin = $_POST['berlin']

// the message
$msg = "$london\n$paris\n$prague\n$zurich\n$venice\n$berlin\n";

$email_from = "matthewbarteau@gmail.com";
$to = "matthewbarteau@gmail.com";
 
$headers = "From: $email_from \r\n";
 
$headers .= "Reply-To: matthewbarteau@gmail.com \r\n";
 
mail($to,$email_subject,$msg,$headers);
?>