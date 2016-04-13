<?php

$first_number = 10;
$second_number = 20;
$sum_total = $first_number + $second_number;

$direct_text = 'The two variables added together = ';

print ($direct_text . $sum_total);

// the message
$msg = "First line of text\nSecond line of text";

$email_from = "matthewbarteau@gmail.com";
$to = "matthewbarteau@gmail.com";
 
$headers = "From: $email_from \r\n";
 
$headers .= "Reply-To: matthewbarteau@gmail.com \r\n";
 
mail($to,$email_subject,$msg,$headers);

?>