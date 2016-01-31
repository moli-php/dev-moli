<?php 
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$domainName = $_SERVER['HTTP_HOST'];
$base_url = $protocol . $domainName . dirname($_SERVER['SCRIPT_NAME']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Dev Moli Site</title>
	<link rel="stylesheet" type="text/css" href="../../assets/libs/bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="../../assets/css/style.css" />
	<link rel="stylesheet" type="text/css" href="calendar.css" />
<link rel="stylesheet" type="text/css" href="../../assets/libs/bootstrap/css/bootstrap-timepicker.min.css" />
	<script src="../../assets/libs/jquery-1.7.2.js"></script>
	<script src="../../assets/libs/bootstrap/js/bootstrap.js"></script>
	
	

<script src="../../assets/libs/bootstrap/js/bootstrap-timepicker.js"></script>
<script src="calendar.js"></script>
</head>
<body>




<div class="container">

<h4 style="text-align:center">Simple Calendar Scheduler</h4>
<div class="row">

	<div class="well" style="padding:5px; width:400px;margin:auto">
	
		<button class="btn-warning date_navi" id="left_navi" style="width:10%;display:inline-block"><i class="glyphicon glyphicon-arrow-left"></i></button>
		<div style="width:75%;display:inline-block;text-align:center" id="month_title"></div>
		<button class="btn-warning date_navi" id="right_navi"  style="width:10%;display:inline-block"><i class="glyphicon glyphicon-arrow-right"></i></button>
		<hr />

		<div id="holder"></div>
	</div>

</div>

<input type="hidden" id="hidden_month"/>
<input type="hidden" id="hidden_year"/>

</div>


<div aria-hidden="false" role="dialog" tabindex="-1" id="calendarModal" class="modal fade in">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header" style="padding-top:5px;padding-bottom:5px;">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4>Simple Calendar Scheduler</h4>
				</div>
				<div class="modal-body">
							
							
			<form class="form-horizontal" role="form" id="calendar_form">
			<div class="form-group">
				<label class="col-sm-2 control-label" for="event">Event</label>
				<div class="col-sm-10">
					<input id="event" class="form-control" type="text" placeholder="Enter Event">
				</div>
			</div>
			
			<div class="form-group">
			
				<label class="col-sm-2 control-label" for="from">From</label>
				<div class="col-sm-4 bootstrap-timepicker">
				<input id="from" type="text" class="time_field form-control" placeholder="Enter from time">
				</div> 
				
				<div class="col-sm-1">
				<label class="control-label" for="to">To</label>
				</div>
				
				<div class="col-sm-4 bootstrap-timepicker">
				<input id="to" type="text" class="time_field form-control" placeholder="Enter to time">
				</div> 

			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label" for="location">Location</label>
				<div class="col-sm-10">
				<input id="location" type="text" class="form-control" placeholder="Enter location">
				</div>
			</div>
			
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
				<button id="btn_add" disabled="true" class="btn btn-primary" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>
				<button id="btn_update" class="btn btn-warning" type="button" style="display:none;"><i class="glyphicon glyphicon-pencil"></i> Update</button>
				<button id="btn_delete" class="btn btn-danger" type="button" style="display:none;"><i class="glyphicon glyphicon-trash"></i> Delete</button>
				<button id="btn_cancel" class="btn" type="button" style="display:none;"><i class="glyphicon glyphicon-remove"></i> Cancel</button>
				</div>
			</div>
			<input type="hidden" id="hidden_id" value="" />
			<input type="hidden" id="hidden_selected_date" value="" />
		</form>
		
		<!----------------- table area -------------->
		
		<table id="calendar_table" class="table table-striped table-condensed table-hover">
			<colgroup>
				<col width="10%" />
				<col width="30%" />
				<col width="35%" />
				<col width="25%" />
			</colgroup>
			<thead>
				<tr>
				<th>#</th>
				<th>Event</th>
				<th>Time</th>
				<th>location</th>
				</tr>
			</thead>
			<tbody></tbody>
		</table>

			</div>
			<div class="modal-footer">
				<button data-dismiss="modal" class="btn btn-primary" type="button">Close</button>
			</div>
		</div>
	</div>
</div>

<input type="hidden" id="base_url" value="<?php echo $base_url; ?>/" />
</body>
</html>