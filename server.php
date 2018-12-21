<?php 

$conn  = new mysqli("localhost","root","","12_dec");


if($conn)
{

	echo "database connected";
}
else
{

	echo "error";
}



// $a = array(1,2,3);



// $b = array("username" =>  "TOPS","lname" => "tech");



// $c = array("gujarat" => array("vadodara","suarat") );

// print_r($c);

//print_r($_SERVER['PATH_INFO']);


if($_SERVER['PATH_INFO'] == "/form")
{

	include("reg.php");
}


if($_SERVER['PATH_INFO'] == '/showdata')
{
	
	include('showdata.php');
}


// switch ($_SERVER['PATH_INFO']) {

// 	case '/form':
// 		include("reg.php");
// 		break;


// 		case '/showdata':
// 		include('showdata.php');

// 			break;
	
// }



// switch ($_SERVER['PATH_INFO']) {
// 	case '/form':


// 		include("reg.php");

// 		break;

// 			case '/form':

	
// 		include("reg.php");

// 		break;
	
// 	default:
// 		# code...
// 		break;
// }






?>