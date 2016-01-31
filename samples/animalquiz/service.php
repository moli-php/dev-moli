<?php 

$info = explode('/', @$_SERVER['PATH_INFO']);
array_shift($info);

if(isset($info[0]) && $info[0] == 'service'){
	include_once "animalquiz.php";

	$obj = new Animalquiz();
	
	if(isset($info[2])){
	$obj->$info[1]($info[2]);
	}elseif(isset($info[1])){
	$obj->$info[1]();

	}

}

?>