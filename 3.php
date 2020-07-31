<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        body{
            background-color: hotpink;
        }
    </style>
</head>
<body>
<h2>我是一个很好看的页面</h2>
<?php
include './02.friut_low/data_fruit_list.php';
//print_r($arr);
echo '<ul>';
for ($i=0;$i<count($arr);$i++){
    echo '<li>';
    echo '<a href="'.$arr[$i]['href'].'">';
    echo '<img src="./02.friut_low/'.$arr[$i]['path'].'">';
    echo '<span>'.$arr[$i]['name'].'</span>';
    echo '</a>';
    echo '</li>';
}
echo '</ul>';
?>
</body>
</html>

