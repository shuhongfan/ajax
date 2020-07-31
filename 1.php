<?php
echo 'hello'.'<br>';

$name='zhangsan';

echo $name.'<br>';

$foodArr=array('榴莲','西蓝花','鸡蛋');
echo $foodArr[2].'<br>';
print_r($foodArr).'<br>';

echo '<br>';

for ($i=0;$i<count($foodArr);$i++){
    echo $i.'===='.$foodArr[$i].'<br>';
}

$person=array('name'=>'吴京','file'=>'战狼');
echo $person['name'];
print_r($person);

echo '<br>';

foreach ($person as $key=>$value){
    echo $key.'------'.$value;
}

$starArr=array(
    array('name'=>'刘德华','film'=>'无间道'),
    array('name'=>'吴京','film'=>'战狼2'),
    array('name'=>'黄渤','film'=>'疯狂的石头'),
    array('name'=>'汪峰','film'=>'春天里')
);
echo $starArr[2]['film'];
echo '<br>';
for ($i=0;$i<count($starArr);$i++){
    echo '明星:<span>'.$starArr[$i]['name'].'</span>出演了:'.$starArr[$i]['film'].'<br>';
}
?>
<style>
    span{
        font-size: 30px;
        color: red;
    }
</style>
<a href="">戳我有惊喜</a>
