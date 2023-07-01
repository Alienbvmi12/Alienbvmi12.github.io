<?php

$request = file_get_contents('https://kyoko.rei.my.id/api/'.$_GET['type'].'.php?r=1');
$body = json_decode((string)$request);
header('location: '.$body->apiResult->url[0]);
