<?php
print_r($_POST);
print_r($_FILES);
move_uploaded_file($_FILES['icon']['tmp_name'],'./files/'.$_FILES['icon']['name']);