<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type:text/html;charset=utf-8');

$con = mysqli_connect("localhost","root","root");

if (!$con){
    die('Could not connect: ' . mysqli_error());
}
mysqli_select_db( $con,"test");

$sql="update student set password = '$_GET[password]', name = '$_GET[name]',
school = '$_GET[school]',age ='$_GET[age]' where id = $_GET[id] ";
// echo $sql;

if (!mysqli_query($con,$sql)){
    die('Error: ' . mysqli_error());
}

echo $_GET['callback'].'({"status":"ok"})';

mysqli_close($con)
?>