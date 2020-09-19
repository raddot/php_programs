<!DOCTYPE html>
<html>
<title> </title>
<head>
	<center><h1>E-MAIL</h1></center>
</head>
<body>
<form action="email.php" method="post"> 
<center>
Enter your E-mail ID
<input type="text" name="email">
<br></br>
<input type="submit" name="submit" value="submit">
</center>
</form>
<?php
	if(isset($_POST['submit']))
	{
		$email=$_POST['email'];
		if(empty($_POST['email']))
		{
			$Msg="<h4>Please Enter Your E-mail ID</h4>";
		}
		else if(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email))
		{
			echo "The Entered E-mail ID is ",$email;
			$Msg="<h4>The Entered E-mail ID Is Invalid.</h4>";
		}
		else
		{
			echo "The Entered E-mail ID is ",$email;
			$Msg="<h4>The Entered E-mail ID Is Valid.</h4>";
		}
		echo "$Msg";
	}
?>
</body>
</html>