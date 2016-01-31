<?php 

$info = explode("/", @$_SERVER['PATH_INFO']);
array_shift($info);
$class = isset($info[0]) ? $info[0] : false;
$method = isset($info[1]) ? $info[1] : false;

if($class = 'youtube'){

	include_once "api.php";
	$youtube = new $class();
	
	if($method)
	$youtube->$method();

}
