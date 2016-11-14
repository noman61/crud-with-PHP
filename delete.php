<?php
require ('dbconfig.php');
    $id = $_GET['id'];
    echo $id;
    $test=mysql_query("DELETE FROM `tbl_info` WHERE id=$id");
    if($test){
    	$delmsg= "Deleted";
	header('Location:view.php?delmsg='.$delmsg);
}
?>
