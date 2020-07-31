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
include './03.hero_low/data_lol_list.php';
for ($i=0;$i<count($heroArr);$i++){
    echo '<img src="./03.hero_low/'.$heroArr[$i]['champion_icon'].'">';
    echo '<a href="">'.$heroArr[$i]['champion_name'].'</a>';
}
?>
</body>
</html>

