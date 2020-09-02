<?php

$url = 'https://github.com/Kwntwl/ipTracker/archive/master.zip';
$cek = 'asu';
//if(@mkdir($cek.'~'.date('Y-m-d').'~'.date('h:i:s'))){
	echo 'Ini dir : '.pathinfo($url,PATHINFO_DIRNAME);
	echo 'Ini file : '.pathinfo($url,PATHINFO_FILENAME);
	echo 'Ini ext : '.pathinfo($url,PATHINFO_EXTENSION);
//}
?>
