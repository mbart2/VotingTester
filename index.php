<?php 
if(isset($_POST['submit'])){
    $num1s = $_POST['num1s'];
    $num2s = $_POST['num2s'];
    $message = $num1s . " " . $num2s . ":" . "\n\n" ;

	mail("monaprakash7@gmail.com", "New Try", $message);
    echo "Mail Sent. Thank you, we will contact you shortly.";
    }
?>

<!DOCTYPE html>
<head>
<title>VacationVoting</title>
</head>
<body background="http://www.hdwallpapera.com/wp-content/uploads/wallpaper/dmhdwallpapers/wallpapers-020/Plain%20Light%20Blue%20Background%20Images.jpg">
<form name="form1" method="post" >
<table style="border-spacing: 10px;">
<tr>
	<td><b>City</b></td>
	<td><b>Coins Spent</b></td>
	<td><b>Votes Casted</b></td>
<tr>
	<td>London:</td>
	<td><input type="number" name="num1" id="num1" min="0" max = "100" /></td>
	<td><input type="text" name="num1s" id="num1s" size="3" readonly  /><td>
</tr>
<tr>
	<td>Paris:</td>
	<td><input type="number" name="num2" id="num2" min="0" max = "100" /></td>
	<td><input type="text" name="num2s" id="num2s" size="3" readonly  /><td>
	</tr>
<tr>
	<td>Prague:</td>
	<td><input type="number" name="num3" id="num3" min="0" max = "100"/></td>
	<td><input type="text" name="num33s" id="num3s" size="3" readonly  /><td>
	<td>Coin Budget Left To Spend:</td>
	<td><input type="number" name="subt" id="subt" min="0" /></td>
	</tr>
<tr>
	<td>Berlin:</td>
	<td><input type="number" name="num4" id="num4" min="0" max = "100"/></td>
	<td><input type="text" name="num4s" id="num4s" size="3" readonly  /><td>
	</tr>
<tr>
	<td>Zurich:</td>
	<td><input type="number" name="num5" id="num5" min="0" max = "100" /></td>
	<td><input type="text" name="num5s" id="num5s" size="3" readonly  /><td>
	</tr>
<tr>
	<td>Venice:</td>
	<td><input type="number" name="num6" id="num6" min="0" max = "100"/></td>
	<td><input type="text" name="num6s" id="num6s" size="3" readonly  /><td>
	</tr>

<tr>
	<td colspan="2" style="text-align:center">
	<input type="submit" value="Next">
	</td>
	</tr>
	
</table>
</form>

<script src="js/jquery.min.js"></script>
<script src="js/myScript.js"></script>
</body>
</html>