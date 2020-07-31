<?php
$starName=$_GET['name'];

$personArr = array(
    '周林林'=>array('icon'=>'img/zll.jpg','info'=>'叫兽->骚粉色'),
    '彭林'=>array('icon'=>'img/pl.png','info'=>'原谅色,约跑'),
    '林立群'=>array('icon'=>'img/llq.jpg','info'=>"嘿嘿嘿->程序员到卖烧烤,到底经历了什么"),
    '西兰花'=>array('icon'=>'img/westblueflower.png','info'=>'西兰花炒蛋好好吃, oh-yeah')
);

$someOne=$personArr[$starName];

echo $someOne['icon'];
echo '|';
echo $someOne['info'];