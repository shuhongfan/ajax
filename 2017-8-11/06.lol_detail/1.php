<html>
<body>
<?php
//print_r($_GET);

//echo $_GET['heroname'];

$heroName=$_GET['heroname'];

include './data_lol_detail.php';
$hero=$heroArr[$heroName];
//print_r($hero);
echo '<h2>'.$hero['champion_title'].'<span>'.$hero['champon_name'].'</span></h2>';
echo '<img src="'.$hero['champion_icon'].'">';
echo '<p>'.$hero['champion_info'].'</p>';
echo '<h3>'.$hero['champion_tags'].'</h3>';
?>
</body>
</html>
