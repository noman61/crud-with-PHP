<?php
require ('dbconfig.php');
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$firstname=$_POST["ufirstname"];
	$lastname=$_POST["ulastname"];
	$email=$_POST["uemail"];
	$dept=$_POST["udept"];
	$reg=$_POST["ureg"];
	$id = $_GET['uid'];
	$umsg="";
	$query= mysql_query("UPDATE `tbl_info` SET `id`='$id',`firstname`='$firstname',`lastname`='$lastname',`email`='$email',`dept`='$dept',`reg`='$reg' WHERE `id`='$id'");

	/*$query= mysql_query("INSERT INTO `tbl_info`(`id`, `firstname`, `lastname`, `email`, `dept`, `reg`) VALUES ('$id','$firstname','$lastname','$email','$dept','$reg')");*/
	if($query)
		{$umsg= "sucessfully updated.";
	header('Location:view.php?umeg='.$umsg);
	}
else
	{$msg= "Something wrong.";
    header('Location:view.php?umeg='.$umsg);
}
	}
?>