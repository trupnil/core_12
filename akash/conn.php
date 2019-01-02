<?php

$conn = new mysqli("localhost","root","","12_dec");
if($conn)
{
	echo "Database connected";

}
else

{
	echo "Error";
}

?>