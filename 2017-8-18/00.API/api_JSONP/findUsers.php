<?php
header('Content-Type:application/json;charset=utf-8');

/* create table teacher  (id int auto_increment primary key,username varchar(500),password varchar(500),name varchar(500),school varchar(50),age int) default charset = utf8;
*/

// 默认值
$con = mysqli_connect("localhost","root","root");

if (!$con){
    die('Could not connect: ' . mysqli_error());
}

mysqli_select_db($con,"test" );

$pageNum = $_GET['pageNum'];
$pageSize = $_GET['pageSize'];

$start=($pageNum-1)*$pageSize;

$sql="select *,(select count(*) from student) as total from student order by id desc limit $start , $pageSize ";

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
    $total = $row['total'];
}

$resultJSONString = json_encode(
array(
'list'=>$list,
'pageSize'=>intval($pageSize),
'pageNum'=>intval($pageNum),
'total'=> intval($total)
)
);

echo $_GET['callback']."($resultJSONString)";

mysqli_close($con);

// sleep(1);
?>