<html>
<body>
<?php
include './data_lol_detail.php';
$heroName=$_GET['name'];
$hero=$heroArr[$heroName];
echo '<h2>'.$hero['champion_title'].'-------------<span>'.$hero['champion_name'].'</span></h2>';
echo '<img src="'.$hero['champion_icon'].'">';
echo '<p>'.$hero['champion_info'].'</p>';
echo '<h3>'.$hero['champion_tags'].'</h3>';
?>
<a href="./1.php">返回首页</a>
</body>
</html>

