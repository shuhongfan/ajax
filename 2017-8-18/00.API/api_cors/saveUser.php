<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type:text/html;charset=utf-8');

$con = mysqli_connect("localhost","root","root");

if (!$con){
    die('Could not connect: ' . mysql_error());
}
mysqli_select_db($con,"test");

$sql="INSERT INTO student ( password, name,school,age)
VALUES
('$_POST[password]','$_POST[name]','$_POST[school]','$_POST[age]')";

if (!mysqli_query($con,$sql)){
    die('Error: ' . mysqli_error());
}

echo '{"status":"ok"}';

mysqli_close($con)
?>