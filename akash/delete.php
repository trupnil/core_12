<?php
include 'conn.php';

if(isset($_GET['id']))
{

	//echo "oke";
	$id = $_GET['id'];
	//echo $id;
	$sql = "DELETE FROM `core_demo` WHERE `id` = '$id'";
	$ex = $conn->query($sql);
	if($ex)
	{
		echo "deleted";
		//header("refresh:2;showdata.php");
		header("location:showdata.php");

	}
	else
	{
		echo "Error";
	}

}


?>