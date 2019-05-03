<?php
$con = mysqli_connect("localhost","root","","ecommercevillage");
//error function to show if is not DB connect
if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL: ".mysqli_connect_error(); 
}



?>