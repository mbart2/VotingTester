<?php

$first_number = 10;
$second_number = 20;
$sum_total = $first_number + $second_number;

$direct_text = 'The two variables added together = ';

print ($direct_text . $sum_total);

// the message
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("someone@example.com","My subject",$msg);

print ("sent");

?>