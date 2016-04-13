<html>
<head>
<title>jQuery Sum & Subtract Two Input Fields</title>
</head>
<body>
<form name="form1" method="post" action="" >
<table>
<tr><td>London:</td><td><input type="number" name="num1" id="num1" min="0" max = "100" /></td></tr>
<tr><td>Paris:</td><td><input type="number" name="num2" id="num2" min="0" max = "100" /></td></tr>
<tr><td>Prague:</td><td><input type="number" name="num3" id="num3" min="0" max = "100"/></td></tr>
<tr><td>Berlin:</td><td><input type="number" name="num4" id="num4" min="0" max = "100"/></td></tr>
<tr><td>Zurich:</td><td><input type="number" name="num5" id="num5" min="0" max = "100" /></td></tr>
<tr><td>Venice:</td><td><input type="number" name="num6" id="num6" min="0" max = "100"/></td></tr>
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
 if (!isNaN(result)) {
 document.getElementById('subt').value = result1;
 }
 }
</script>
</body>
</html>