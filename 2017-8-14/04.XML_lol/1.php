<?php
header('content-type:text/xml;charset=utf8');
$xml=file_get_contents('1.xml',FILE_USE_INCLUDE_PATH);
echo $xml;