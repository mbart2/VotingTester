<html>
<head>
<title>jQuery Sum & Subtract Two Input Fields</title>
</head>
<body>
<form name="form1" method="post" action="" >
<table>
<tr>
	<td>Location</td>
	<td>Coins Spent</td>
	<td>Votes Casted</td>
<tr>
	<td>London:</td>
	<td><input type="number" name="num1" id="num1" min="0" max = "100" /></td>
	<td><input type="text" name="num1s" id="num1s" size="3"/><td>
</tr>
<tr>
	<td>Paris:</td>
	<td><input type="number" name="num2" id="num2" min="0" max = "100" /></td>
	<td><input type="text" name="num2s" id="num2s" size="3"/><td>
	</tr>
<tr>
	<td>Prague:</td>
	<td><input type="number" name="num3" id="num3" min="0" max = "100"/></td>
	<td><input type="text" name="num33s" id="num3s" size="3"/><td>
	</tr>
<tr>
	<td>Berlin:</td>
	<td><input type="number" name="num4" id="num4" min="0" max = "100"/></td>
	<td><input type="text" name="num4s" id="num4s" size="3"/><td>
	</tr>
<tr>
	<td>Zurich:</td>
	<td><input type="number" name="num5" id="num5" min="0" max = "100" /></td>
	<td><input type="text" name="num5s" id="num5s" size="3"/><td>
	</tr>
<tr>
	<td>Venice:</td>
	<td><input type="number" name="num6" id="num6" min="0" max = "100"/></td>
	<td><input type="text" name="num6s" id="num6s" size="3"/><td>
	</tr>
<tr><td>Remaining:</td><td><input type="number" name="subt" id="subt" readonly /></td></tr>
</table>
</form>
 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
$(document).ready(function() {
 //this calculates values automatically
 sum();
 $("#num1, #num2, #num3, #num4, #num5, #num6").on("keydown keyup", function() {
 sum();
 });
});
 
function sum() {
 var num1 = document.getElementById('num1').value;
 var num2 = document.getElementById('num2').value;
 var num3 = document.getElementById('num3').value;
 var num4 = document.getElementById('num4').value;
 var num5 = document.getElementById('num5').value;
 var num6 = document.getElementById('num6').value;
 var result = parseInt(num1) + parseInt(num2)+ parseInt(num3) + parseInt(num4)+ parseInt(num5) + parseInt(num6);
 var result1 = 100 - result;
 var num1s = Math.sqrt(num1);
 var num2s = Math.sqrt(num2);
 var num3s = Math.sqrt(num3);
 var num4s = Math.sqrt(num4);
 var num5s = Math.sqrt(num5);
 var num6s = Math.sqrt(num6);
 document.getElementById('num1s').value = num1s.toFixed(2);
 document.getElementById('num2s').value = num2s.toFixed(2);
 document.getElementById('num3s').value = num3s.toFixed(2);
 document.getElementById('num4s').value = num4s.toFixed(2);
 document.getElementById('num5s').value = num5s.toFixed(2);
 document.getElementById('num6s').value = num6s.toFixed(2);
 if (!isNaN(result)) {
 document.getElementById('subt').value = result1;
 }
 }
</script>
</body>
</html>