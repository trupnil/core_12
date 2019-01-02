<?php  include 'conn.php'; 


if(isset($_POST['submit']))
{
	
	$name = $_POST['name'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$gender = $_POST['gender'];
	$dob = $_POST['dob'];
	 //echo $name; echo $lname;
    $sql = "INSERT INTO `core_demo` (`name`,`lname`,`email`,`password`,`gender`,`dob`) VALUES ('$name','$lname','$email','$password','$gender','$dob')"; 
    $ex = $conn->query($sql);

}	



   ?>

<form method="POST">
<label> name </label>
<input type="text" name="name"><br>
<label> lname</label>
<input type="text" name="lname"><br>
<label> email</label>
<input type="email" name="email"><br>
<label> password</label>
<input type="password" name="password"><br>
<label>Gender </label>
<input type="radio" name="gender" checked value="male"> Male
<input type="radio" name="gender" value="female"> Female <br> 
<label> Dob </label>
<input type="date" name="dob">
<input type="submit" name="submit" value="reg">

</form>