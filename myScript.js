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