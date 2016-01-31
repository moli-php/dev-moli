<?php 
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$domainName = $_SERVER['HTTP_HOST'];
$base_url = $protocol . $domainName . dirname($_SERVER['SCRIPT_NAME']);
?>
<!DOCTYPE html>
<html data-ng-app="app">
<head>
<title>Dev Moli Site</title>
<link rel="stylesheet" type="text/css" href="../../assets/libs/bootstrap/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="animalquiz.css" />
<link rel="stylesheet" type="text/css" href="../../assets/css/style.css" />
<script src="../../assets/libs/jquery-1.7.2.js"></script>
<script src="../../assets/libs/bootstrap/js/bootstrap.js"></script>
<script src="animalquiz.js"></script>
</head>
<body>
<div class="container">
<h4>Animal Quiz</h4>
<div class="row">
	<form class="form-inline" role="form" id="quiz_form">
		<div class="form-group">
			<label class="control-label" for="num_quiz">Select number of quiz &nbsp;</label>
			<select id="num_quiz" class="form-control">
				<option value="0">from</option>
				<option value="5">1 - 5</option>
				<option value="10">1 - 10</option>
				<option value="20">1 - 20</option>
				<option value="30">1 - 30</option>
				<option value="40">1 - 40</option>
				<option value="50">1 - 50</option>
			</select>
		</div>
		<div class="form-group">
		<button class="btn btn-primary form-control" type="button" id="quiz_btn">Okay</button>
		</div>
	</form>

	<h4 id="label_select_pic" style="padding-top:10px;" class="hide_me">Select the correct picture and click the submit button</h4>
	<div id="quiz_again" class="hide_me"><a href="#">Take a quiz again?</a></div>
</div>
<br />
<h4 id="seq"></h4>
<div id="quiz_container">
	<div class="row">
		<div class="col-md-8 well">
			<center><h4>Please select number of quiz to begin.</h4></center>
		</div>
	</div>
</div>

<input type="hidden" id="base_url" value="<?php echo $base_url; ?>/" />

<div class="modal fade" id="modal_msg" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5>Animal Quiz</h5>
			</div>
			<div class="modal-body">
				<p>Please select your answer.</p><p>
			</p></div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>

			</div>
		</div>
	</div>
</div>
</body>
</html>