<form name="contactform" method="post" action="voting.php">
 
<table width="450px">
 
<tr>
 
 <td valign="top">
 
  <label for="london">London</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="number" name="london" min="0" max="100">
 
 </td>
 
</tr>
<tr>
 
 <td valign="top">
 
  <label for="paris">Paris</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="number" name="paris" min="0" max="100">
 
 </td>
 
</tr>
<tr>
 
 <td valign="top">
 
  <label for="prague">Prague</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="number" name="prague" min="0" max="100">
 
 </td>
 
</tr>
<tr>
 
 <td valign="top">
 
  <label for="zurich">Zurich</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="number" name="zurich" min="0" max="100">
 
 </td>
 
</tr>
<tr>
 
 <td valign="top">
 
  <label for="venice">Venice</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="number" name="venice" min="0" max="100">
 
 </td>
 
</tr>
<tr>
 
 <td valign="top">
 
  <label for="berlin">Berlin</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="number" name="berlin" min="0" max="100">
 
 </td>
 
</tr>
 
<tr>
	<td>Remaining:</td>
	<td><input type="text" name="rem" id="rem" readonly /></td>
</tr>
 
<tr>
 
 <td colspan="2" style="text-align:center">
 
  <input type="submit" value="Submit">
 
 </td>
 
</tr>
 
</table>
 
</form>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
$(document).ready(function() {
 //this calculates values automatically
 sum();
 $("#london, #paris").on("keydown keyup", function() {
 sum();
 });
});
 
function sum() {
 var num1 = document.getElementById('london').value;
 var num2 = document.getElementById('paris').value;
 var result1 = num1 + num2;
 if (!isNaN(result)) {
 document.getElementById('rem').value = result1;
 }
 }
</script>