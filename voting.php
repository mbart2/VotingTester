<?php
$london = $_POST['london']
$paris = $_POST['paris']
$prague = $_POST['prague']
$zurich = $_POST['zurich']
$venice = $_POST['venice']
$berlin = $_POST['berlin']

// the message
$msg = "$london\n$paris\n$prague\n$zurich\n$venice\n$berlin\n";

// send email
mail("matthewbarteau@gmail.com","My subject",$msg);

print ("sent");
?>