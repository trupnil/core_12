<?php 

$data = "SELECT * FROM `core_demo`";
$ex2 = $conn->query($data);

//mysqli_fetch_object();
// mysqli_fetch_assoc();
// mysqli_fetch_array(); 




?>


<table border="2" align="center">

<tr>
<th> id </tH>
	<th> name </tH>
		<th> lname </tH>
</tr>

<?php  while($res =  mysqli_fetch_assoc($ex2))
{  ?>

<tr>
	<td> <?php echo $res->id; ?> </td>
	<td> <?php echo $res->name; ?> </td>
	<td> <?php echo $res->lname; ?> </td>

</tR>



<?php  }   ?>



</table>