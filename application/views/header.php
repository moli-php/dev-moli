<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="<?php echo $base_url; ?>assets/img/favicon.ico" />
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>assets/libs/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>assets/css/style.min.css" />
	<script src="<?php echo $base_url; ?>assets/libs/jquery-1.7.2.js"></script>
	<script src="<?php echo $base_url; ?>assets/libs/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo $base_url; ?>">Dev Moli Site</a>
		</div>
		<div class="navbar-collapse collapse">
			<ul id="main_nav" class="nav navbar-nav">
				<?php $active = ($page == '') ? 'active' : '';	?>
				<li class="<?php echo $active; ?>"><a href="<?php echo $base_url; ?>">Home</a></li>
				<?php $active = ($page == 'samples') ? 'active' : '';	?>
				<li class="<?php echo $active; ?>"><a href="<?php echo $base_url; ?>main/samples">Samples</a></li>
				<?php $active = ($page == 'about') ? 'active' : '';	?>
				<li class="<?php echo $active; ?>"><a href="<?php echo $base_url; ?>main/about">About</a></li>
			</ul>
		</div>
	</div>
</nav>
<div style="padding-bottom:50px;"></div>