<html>
<head>
<center><h1>CALCULATOR</h1></center>
</head>
</html>
<form action=http://localhost/calculator.php method="post">
&nbsp<br></br>&nbsp;
<center>Enter first Number:
<input type="number" name="val1">
<br></br>
Enter Second Number:
<input type="number" name="val2">
</center>
&nbsp<br></br>&nbsp;&nbsp<br></br>&nbsp;
<center>
<input type="submit" name="submit" value="ADD">
<input type="submit" name="sub" value="SUBTRACTION">
<input type="submit" name="mul" value="MULTIPLICATION">
<input type="submit" name="div" value="DIVISION">
<input type="submit" name="gre" value="GREATER">
<input type="submit" name="squ" value="SQUARE">
</center>
<?php
if(isset($_POST['submit']))
{
	$tot=$_POST['val1'] + $_POST['val2'];
	echo '<div id="ans">Addition is: '.$tot."</div>";
}
if(isset($_POST['sub']))
{
	$tot=$_POST['val1'] - $_POST['val2'];
	echo '<div id="ans">Subtraction is: '.$tot."</div>";
}
if(isset($_POST['mul']))
{
	$tot=$_POST['val1'] * $_POST['val2'];
	echo '<div id="ans">Multiplication is: '.$tot."</div>";
}
if(isset($_POST['div']))
{
	$tot=$_POST['val1'] / $_POST['val2'];
	echo '<div id="ans">Division is: '.$tot."</div>";
}
if(isset($_POST['gre']))
{
	if($_POST['val1'] > $_POST['val2'])
	echo '<div id="ans">Greater Number is: '.$_POST['val1']."</div>";
	else
	echo '<div id="ans">Greater Number is: '.$_POST['val2']."</div>";
}
if(isset($_POST['squ']))
{
	$tot=$_POST['val1'] * $_POST['val1'];
	echo '<div id="ans">Square of first number is: '.$tot."<div>";
	$tot=$_POST['val2'] * $_POST['val2'];
	echo '<div id="ans">Square of second number is: '.$tot."<div>";
}		
?>