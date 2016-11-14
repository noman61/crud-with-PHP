<!--?php
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
?-->
<html><head>
<head>
	<title>information</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	<h1 class="heading">ENETER YOUR INFORMATION TO UPDATE</h1><br>
		<form class="form-horizontal" action='updatedata.php?uid=<?php echo $_GET['uid'];?>' method="post">
			<div class="form-group col-md-12">
				<input type="text" name="ufirstname" placeholder="First Name" class="form-control" required="true"><br>
			</div>
			<div class="form-group col-md-12">
				<input type="text" name="ulastname" placeholder="Last Name" class="form-control" required="true"><br>
			</div>
			<div class="form-group col-md-12">
				<input type="Email" name="uemail" placeholder="Emal" class="form-control"  required="true"><br>
			</div>
			<div class="form-group col-md-12">
				<input type="text" name="udept" placeholder="Dept" class="form-control" required="true"><br>
			</div>
			<div class="form-group col-md-12">
				<input type="text" name="ureg" placeholder="Reg" class="form-control" required="true"><br>
			</div>
			<div class="col-md-12">
				<input type="submit" name="usubmit" class="btn btn-primary" id="ubut">
			</div>
		</form>
	</div>
</body>
</html>

