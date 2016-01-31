<!DOCTYPE html>
<html>
<head>
<?php
echo "
	<link rel='stylesheet' href='".BASE_URL."/assets/libs/bootstrap/css/bootstrap.min.css' />
	<script src='".BASE_URL."/assets/js/jquery-1.7.2.min.js'></script>
	<script src='".BASE_URL."/assets/libs/bootstrap/js/bootstrap.min.js'></script>
	<link rel='stylesheet' href='".BASE_URL."/assets/css/style.min.css' />
	<script src='".BASE_URL."/assets/js/js.min.js'></script>
";
?>
</head>
<body>
<img id="img_con"class="Absolute-Center hide" src="<?php echo BASE_URL. '/assets/img/ajax_loader.gif'; ?>" />
<?php include_once "nav.php"; ?>
<?php include_once "breadcrumb.php"; ?>