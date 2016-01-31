<?php 
$info = explode('/', @$_SERVER['PATH_INFO']);
array_shift($info);

if(isset($info[0]) && $info[0] == 'service'){
	include_once "calendar.php";

	$calendar = new calendar();

	if(isset($info[1]) && !empty($info[1])){
		$method = $info[1];
		$calendar->$method();
	}

}
?>