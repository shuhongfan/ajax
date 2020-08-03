<?php 
    header('Access-Control-Allow-Origin: *');

    header('Content-Type:text/html;charset=utf-8');

   $con = mysqli_connect("localhost","root","root");

    if (!$con){
        die('Could not connect: ' . mysqli_error());
    }

    mysqli_select_db($con,"test" );

    $sql = "DELETE FROM student WHERE id = $_GET[id]";

    mysqli_query($con,$sql);

  echo $_GET['callback'].'({"status":"ok"})';


    mysqli_close($con);

?>