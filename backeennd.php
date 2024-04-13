<?php

$nopl=$_GET['noofpeople'];
$timersv=$_GET['time'];
$phno=$_GET['phoneno'];
$datersv=$_GET['dateofresv'];
$namersv=$_GET['nameofresv'];
$emmail=$_GET['emailresv'];

echo "$nopl, $timersv ,$phno, $datersv, $namersv, $emmail <br>";

$host="localhost";
$usrnme="root";
$password="";
$dbame= "abc";
$conn= new mysqli($host,$usrnme,$password, $dbame);

if($conn->connect_error){

	exit("Connection Failed". $conn->connect_error);

}else{

	echo "Connected <br>";
	$sql="INSERT INTO `abctable`(`numberofppl`, `time`, `phonenumber`, `date`, `name`, `mail`) VALUES ('$nopl','$timersv','$phno','$datersv','$namersv','$emmail')";
	if($conn->query($sql)){
		echo "Insert Successful";
	}else{
		echo "Insert Error";
	}

}


?>
