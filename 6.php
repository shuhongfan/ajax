<?php
include './07.lol_list_detail/data_lol_list.php';
?>

<?php for ($i=0;$i<count($heroArr);$i++){?>
    <h1><?php echo $heroArr[$i]['champion_name']?>---dsfsdfdsf</h1>
    <img src="./07.lol_list_detail/<?php echo $heroArr[$i]['champion_icon'] ?>" alt="">
    <a href="">fsddfs</a>
<?php }?>