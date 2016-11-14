<?php
require ('dbconfig.php');
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$firstname=$_POST["firstname"];
	$lastname=$_POST["lastname"];
	$email=$_POST["email"];
	$dept=$_POST["dept"];
	$reg=$_POST["reg"];
	$msg="";
	$query= mysql_query("INSERT INTO `tbl_info`(`id`, `firstname`, `lastname`, `email`, `dept`, `reg`) VALUES ('','$firstname','$lastname','$email','$dept','$reg')");
	if($query){$msg= "sucessfully inserted.";
	header('Location:view.php?meg='.$msg);
}
else{$msg= "Something wrong.";
	header('Location:view.php?meg='.$msg);
}
}
?> 