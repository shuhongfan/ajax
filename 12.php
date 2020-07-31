<?php
print_r($_POST);
print_r($_FILES);

//看到临时文件
sleep(5);

move_uploaded_file($_FILES['fileName']['tmp_name'],'./files/'.$_FILES['fileName']['name']);