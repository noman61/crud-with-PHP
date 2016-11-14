<?php
require ('dbconfig.php');
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	
	<?php
	if(!empty($_GET['meg']))
	{
		echo $_GET['meg'];
	}
	if(!empty($_GET['delmsg']))
	{
		echo $_GET['delmsg'];
	}
	?>
	<?php
	if(!empty($_GET['umeg']))
	{
		echo $_GET['umeg'];
	}

	?>


     
	<div id="container">
		<div class="col-sm-offset-2 col-md-6"> 
			<br><br>
			<h1>INFORMATION</h1>
			<a class="btn btn-success" href="form.php">ADD</a>
			<table class="table table-striped table-hover table-bordered">

				<tr>
					<td>ID</td>
					<td>First Name</td>
					<td>Last Name</td>
					<td>Email</td>
					<td>Dept</td>
					<td>Reg</td>
					<td>Delete</td>
					<td>Update</td>
					<!--td>Update</td-->
				</tr>
				


				<?php
				$i=0;
				$sql="SELECT * FROM `tbl_info`";
				$result_set=mysql_query($sql);
				while($row=mysql_fetch_array($result_set))
				{
					?>
					<tr>
					<?php $id=$row['id'] ?>
						<td><?php echo $i+=1; ?></td>
						<td><?php echo $row['firstname'] ?></td>
						<td><?php echo $row['lastname'] ?></td>
						<td><?php echo $row['email'] ?></td>
						<td><?php echo $row['dept'] ?></td>
						<td><?php echo $row['reg'] ?></td>
						<td>
						<form action='delete.php?id=<?php echo $row['id'];?>' method="post">
								<input type="hidden" name="Did" value="<?php echo $row['id']; ?>">
								<input type="submit" value="Delete" name="submit" style="background-color: #E53A18;color: blue; border-radius: 5px;"></form>
							</td>
							<td>
						<form action='update.php?uid=<?php echo $row['id'];?>' method="post">
								<input type="hidden" name="Uid" value="<?php echo $row['id']; ?>">
								<input type="submit" value="Update" name="submit" style="background-color: #61CB33;color: blue; border-radius: 5px;"></form>
							</td>
						</tr>
						<?php
					}
					?>
				</table> 
			</div>
		</div>
	</body>
	</html>