<?php
	$sec = date("s");
	echo $sec;
	if($sec % 2 == 0)
	{
		echo "<center><mark>Background Color Is Changing According To Hour Of Day</mark></center>";
		echo "<body style=\"background-color:grey;\"></body>";
	}
	else
	{
		echo "<center><mark>Background Color Is Changing According To Hour Of Day</mark></center>";
		echo "<body style=\"background-color:pink;\"></body>";
	}
?>	
