<?php 


// echo "hell0";


// $a = 10;


// echo $a;

if(isset($_REQUEST['submit']))
{
	
	$a = $_POST['a'];

	$b  = $_POST['b'];

	echo $a+$b;

}



?>


<form method="POST">
<label> a</label>
<input type="number" name="a"><br>

<label> b</label>
<input type="number" name="b"><br>
<input type="submit" name="submit" value="+">

</form>

<!-- $_SERVER
$_REQUEST
$_GET
$_POST
$_session
$_COOKIES
S_GLOBLE
$_ENV
$_FILES -->