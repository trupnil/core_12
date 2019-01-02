<?php 
include 'conn.php';

if(isset($_GET['id']))
{
	$id = $_GET['id'];
	$sql = "SELECT * FROM `core_demo` WHERE `id` = '$id'";
	$ex = $conn->query($sql);
}

if(isset($_POST['update']))
{

	$id = $_POST['id'];
	$name = $_POST['name'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$gender = $_POST['gender'];
	$dob = $_POST['dob'];

	$update = "UPDATE `core_demo` SET `name` = '$name',`lname` = '$lname',`email` = '$email',`password` = '$password',`gender` = '$gender',`dob` = '$dob' WHERE `id` = '$id'";
	$uex = $conn->query($update);
	if($uex)
	{
		header('location:showdata.php');	
	}
	else
	{
		echo "Error"; 	
	}
	

}



?>



<?php   while($res = mysqli_fetch_object($ex))
{ ?>


	<form method="POST">
		<label> id </label>
<input type="text" name="id" readonly  value="<?php echo $res->id ?>"><br>

<label> name </label>
<input type="text" name="name"  value="<?php echo $res->name ?>"><br>

<label> lname</label>
<input type="text" name="lname" value="<?php echo $res->lname ?>"><br>
<label> email</label>
<input type="email" name="email" value="<?php echo $res->email ?>" ><br>
<label> password</label>
<input type="text" name="password" value="<?php echo $res->password ?>"><br>
<label>Gender </label>
<input type="radio" name="gender"  value="male" <?php if($res->gender == 'male'){ echo "checked"; }  ?>  > Male
<input type="radio" name="gender" value="female" <?php if($res->gender == 'female'){ echo "checked"; }  ?>  > Female <br> 
<label> Dob </label>
<input type="date" name="dob" value="<?php echo $res->dob ?>">
<input type="submit" name="update" value="Update">

</form>

<?php  }  ?>
