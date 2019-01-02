<?php include 'conn.php';
$akash = "SELECT * FROM `core_demo`";
$ex = $conn->query($akash);
?>
<html>
<head>

</head>
<body>

	<table border="1" align="center"> 
		<tr>
			<th> id </th>
			<th> fname </th>
			<th> lname </th>
			<th> Email </th>
			<th>password</th>
			<th> gender </th>
			<th> dob </th>
			<th colspan="2"> Action </th>
			

		</tr>

		<?php  while($res = mysqli_fetch_object($ex)){  //print_r($res); ?>


<tr>
			<td> <?php echo $res->id;  ?> </td>
			<td> <?php echo $res->name;  ?> </td>
			<td> <?php echo $res->lname;  ?> </td>
			<td> <?php echo $res->email;  ?> </td>
			<td> <?php echo $res->password;  ?> </td>
			<td> <?php echo $res->gender;  ?> </td>
			<td> <?php echo $res->dob;  ?> </td>
			<td> <a href="delete.php?id=<?php echo $res->id;  ?>"> Delete </a> </td>
			<td> <a href="edit.php?id=<?php echo $res->id;  ?>"> Edit </a> </tD>
		</tr>



	<?php  	}       ?>

		

	 </table>


</body>
</html>