<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type:text/html;charset=utf-8');

$con = mysqli_connect("localhost","root","root");

if (!$con){
    die('Could not connect: ' . mysql_error());
}
mysqli_select_db( $con,"test");

$sql="update student set password = '$_POST[password]', name = '$_POST[name]',
school = '$_POST[school]',age ='$_POST[age]' where id = $_POST[id] ";
// echo $sql;

if (!mysqli_query($con,$sql)){
    die('Error: ' . mysqli_error());
}

echo '{"status":"ok"}';

mysqli_close($con)
?>