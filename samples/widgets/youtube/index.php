<html>
<!DOCTYPE html>
<head>
<link rel="stylesheet" href="style.css">
<script src="jquery-1.7.2.js"></script>
<script>
$(document).ready(function(){

	// Monitor ajax requests, show or hide loader image
	$( document ).ajaxComplete(function() {
	$('#loader_con').addClass('hide');
	});
	$( document ).ajaxStart(function() {
	$('#loader_con').removeClass('hide');
	});
	
	$('#caterogies').change(function(){
		var obj = $(this);
		var get_old_country = $('.countries:visible option:selected').val();
		var getId = obj.children(":selected").attr('id');
		$('.countries').addClass('hide');
		$('#country_'+getId).removeClass('hide');
		$('#country_'+getId + ' option').each(function(k,v){
			if($(v).val() == get_old_country){
				$(v).attr('selected',true);
			}
		});
		
	});
	
	var cat_selected_id = $('#caterogies option:selected').attr('id');
	if(cat_selected_id){
	$('#country_'+cat_selected_id).removeClass('hide');
	}else{
	$('#country_0').removeClass('hide');
	}
	
	$('#yt_btn').click(function(){
		var category = $('#caterogies').val();
		var country = $('.countries:visible').val();

	$.ajax({
		url : 'service.php/youtube/getYoutube',
		type : 'post',
		data : {country:country, category:category},
		success : function(data){
		$('#show_area').html(data);
		}
	});
	});
	
	$('#yt_btn').click();
	
});

</script>
</head>
<?php include_once "api.php"; ?>
<body>
<h2>Sample Youtube Video Feeds</h2>
<?php
$youtube = new Youtube();
$youtube->renderCategories();
?>
<div id="show_header">Simple Youtube Widget</div>
<div id="show_area"></div>
<div id="show_footer"></div>
</body>
</html>