<?php 

if(isset($_POST['submit']))
{

	$name = $_POST['name'];
	$lname = $_POST['lname'];
    $sql = "INSERT INTO `core_demo` (`name`,`lname`) VALUES ('$name','$lname')";
    $ex = $conn->query($sql);

}


?>

<form method="POST">
<label> name </label>
<input type="text" name="name"><br>

<label> lname</label>
<input type="text" name="lname"><br>
<input type="submit" name="submit" value="reg">

</form>

