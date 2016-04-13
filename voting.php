<?php
$msg = "First line of text\nSecond line of text";

// send email
mail("matthewbarteau@gmail.com","My subject",$msg);

print ("sent");
?>