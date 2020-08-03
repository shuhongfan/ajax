<?php
header('content-type:text/xml;charset=utf-8');
echo file_get_contents('38.xml',FILE_USE_INCLUDE_PATH);