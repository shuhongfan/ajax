<?php
//print_r($_GET);
$name=$_GET['name'];
$nameArr=array('jack','rose','robb');

$result=in_array($name,$nameArr);

if ($result==true){
    echo '用户已被注册';
} else {
    echo '可以注册';
}

sleep(2);