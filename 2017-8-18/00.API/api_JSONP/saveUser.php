<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type:text/html;charset=utf-8');

$con = mysqli_connect("localhost","root","root");

if (!$con){
    die('Could not connect: ' . mysqli_error());
}
mysqli_select_db($con,"test" );

$sql="INSERT INTO student ( password, name,school,age)
VALUES
('$_GET[password]','$_GET[name]','$_GET[school]','$_GET[age]')";

if (!mysqli_query($con,$sql)){
    die('Error: ' . mysqli_error());
}

echo $_GET['callback'].'({"status":"ok"})';

mysqli_close($con)
?>