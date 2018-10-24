<?php
	//Connect Database
	$url = 'localhost';
	$username = 'root';
	$password = '';
	$db = 'cv_management';

	$con = mysqli_connect($url,$username,$password,$db);	
	
	mysqli_query($con,"SET NAMES 'UTF8'");

	//Check Connection
	if(!$con){
		echo "Kết nối dữ liệu thất bại";
	}

?>