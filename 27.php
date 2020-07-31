<?php
header('content-type:text/xml;charset=utf8');
$xml=file_get_contents('./25.xml');
echo $xml;