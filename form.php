<html><head>

<head>
	<title>information</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>
.form-control{
	//width: 50%;
}
</style>
</head>
<body>
	<div class="container">
		<h1 class="heading">WORKSHOP</h1><br>
		<form class="form-horizontal" action="data.php" method="POST">
			<div class="form-group col-md-12">
				<input type="text" name="firstname" placeholder="First Name" class="form-control" required="true"><br>
			</div>
			<div class="form-group col-md-12">
				<input type="text" name="lastname" placeholder="Last Name" class="form-control" required="true"><br>
			</div>
			<div class="form-group col-md-12">
				<input type="Email" name="email" placeholder="Emal" class="form-control"  required="true"><br>
			</div>
			<div class="form-group col-md-12">
				<input type="text" name="dept" placeholder="Dept" class="form-control" required="true"><br>
			</div>
			<div class="form-group col-md-12">
				<input type="text" name="reg" placeholder="Reg" class="form-control" required="true"><br>
			</div>
			<div class="col-md-12">
				<input type="submit" name="submit" class="btn btn-primary" id="but">
			</div>
		</form>
	</div>
</body>
</html>