<?php
header('Access-Control-Allow-Origin: *');

header('Content-Type:application/json;charset=utf-8');


// 默认值
$con = mysqli_connect("localhost","root","root");

if (!$con){
    die('Could not connect: ' . mysqli_error());
}

mysqli_select_db($con,"test" );

$id = $_GET['id'];

$sql="select * from student where id = $id";

$result = mysqli_query($con,$sql);

$list = array();
$total = 0;

while($row = mysqli_fetch_array($result)){
    $item = array(
    'id' => $row['id'],
    'password' => $row['password'],
    'name' => $row['name'],
    'school' => $row['school'],
    'age' => intval($row['age']),
    );
    array_push($list,$item);
}

$resultJSONString = json_encode(
array(
'list'=>$list,
)
);

echo $_GET['callback']."($resultJSONString)";

mysqli_close($con);

// sleep(1);
?>