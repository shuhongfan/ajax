<?php 
	// 注册页面
	// 获取 用户提交的数据
	$userData = $_POST;	

	// 获取用户名
	$name = $_POST['name'];

	// 新增名字 对象 ->字符串
	$nameArr = json_decode(file_get_contents('data/user.json',FILE_USE_INCLUDE_PATH));
	$nameArr[count($nameArr)] = $name;

	// 获取手机号
	$mobile = $_POST['mobile'];

	// 新增名字 对象 ->字符串
	$mobileArr = json_decode(file_get_contents('data/mobile.json',FILE_USE_INCLUDE_PATH));
	$mobileArr[count($mobileArr)] = $mobile;


	// 保存到 数据库中
	// 这里使用文本文件进行模拟 写入文本文件中
	file_put_contents('data/user.json',json_encode($nameArr),FILE_USE_INCLUDE_PATH);
	file_put_contents('data/mobile.json',json_encode($mobileArr),FILE_USE_INCLUDE_PATH);

	sleep(1);

	echo 'success';
 ?>