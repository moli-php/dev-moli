var init_time = 20;
var aAnswer = [];
var aData = [];

$(function() {

	var base_url = quiz.base_url();
	var number_of_quiz = 0;
	var startTimer = "";
	
	function init() {
		$('#num_quiz option:eq(0)').attr('selected',true);
		$('#num_quiz, #quiz_btn').attr('disabled',false);
		$('#quiz_again').hide();
		$('#seq').text("");
	}

	init();
	
	$('.btn_hover').live('click',function() {
		$(this).parents('#option_container').find('.btn_hover').removeClass('answer_picked').end().end().addClass('answer_picked');
	});

	// begin quiz button
	$('#quiz_btn').click(function(){

		number_of_quiz = parseInt($('#num_quiz').val());
		

		if(number_of_quiz > 0){
			// show label on  user's instruction
			$('#label_select_pic').removeClass('hide_me');
			aData = quiz.get_quiz(number_of_quiz);
			quiz.render_quiz(aData);
			$('#seq').text('1 of '+number_of_quiz);		
			startTimer = start_timer(init_time);
			// reset
			aAnswer = [];
			$(this).attr('disabled',true);
			$('#num_quiz').attr('disabled',true);
		}
	});

	// user's submit button
	$('.submit_btn').live('click',function(){

		var obj = $(this);
		var parent = obj.parents('.row');
		var answer_picked = parent.find('.answer_picked');
		
		if(answer_picked.length == 0){
			$('#modal_msg').modal('show');
			return false;
		}
		stop_timer();
		execSubmit();

	});

	$('#quiz_again').click(function(){
		var row = '<div class="row">\
						<div class="col-md-8 well">\
							<center><h4>Please select number of quiz to begin.</h4></center>\
						</div>\
					</div>';

			$("#quiz_container").html(row);
			init();
			$('#quiz_form').show();
			
	});
	
	function execSubmit() {
	
		var timer = parseInt($('#timer').text());
		var obj = $('.submit_btn:visible');
		var parent = obj.parents('.row');
		var answer_picked = parent.find('.answer_picked');
		var user_answer = answer_picked.length == 0 ? 0 : answer_picked.data('id');
		var question = parent.find('#question').text();
			question = question.toLowerCase();
		var aUserAnswer = {id:user_answer,question:question};
		var index = parent.next().data('index');
		var num = (typeof index == 'undefined') ? number_of_quiz : index;
		
		$('#seq').text(num + ' of '+number_of_quiz);

		aAnswer.push(aUserAnswer);

		// if last number of quiz
		if(typeof index == 'undefined'){

			var correct = 0;
			$.each(aData, function(k,v){
				if(v.id == aAnswer[k].id){
					correct = correct + 1;
				}
			});
		
			if(correct == number_of_quiz){
			message = 'Perfect score';
			is_perfect = 'hide';
			}else{
			var score =   correct * 100 / number_of_quiz;
			message = 'Your total score is '+correct+' out of '+number_of_quiz + '  ('+score+'%)';
			is_perfect = '';
			}
			var str = '<div class="row">\
					<div class="col-md-8 well">\
						<center><h4>'+message+'</h4></center>\
						<center class="'+is_perfect+'"><a class="btn review_exam">Do you want to review your scores?</a></center>\
					</div>\
					<div id="review_exam_container" style="display:none;"></div>\
				</div>';
				$('#quiz_container').html(str);
				$('#seq').text('Result');
	
				$('#quiz_form').hide();
				$('#quiz_again').show();
				$('#label_select_pic').addClass('hide_me');

				stop_timer();

		}
	
		parent.next().slideDown();
		parent.remove();
		starTimer = start_timer(init_time);

	}
	
	$('.review_exam').live('click',function() {

		var str = '<div class="col-md-12 form-group"><span class=" right_answer box img-rounded">Correct</span>&nbsp;&nbsp;<span class="wrong_answer box img-rounded">Wrong</span>&nbsp;&nbsp;<span class="no_answer box img-rounded">No Answer</span></div>';
		$.each(aData, function(k,v) {
			var choices = v.choices;
			var question = v.animal;
				question = question.toUpperCase();
			
				str += '<h5 class="col-md-12" style="padding-buttom:2px">'+(k+1)+'.) '+question+'</h5>';
				str += '<div class="col-md-12 img-rounded default_background" style="padding:5px 0 10px 0">';
			$.each(choices, function(key,val){
				var is_correct = (val.id == v.id) ? 'glyphicon glyphicon-ok' : 'glyphicon glyphicon-remove';
				var user_answer = '';
				if(aAnswer[k].id == val.id) {
				user_answer = aAnswer[k].id == v.id ? 'right_answer' : (aAnswer[k].id == 0) ? 'no_answer' : 'wrong_answer';
				}else if(aAnswer[k].id == 0) {
				user_answer = 'no_answer';
				}
				
				str += '<div class="col-md-3" >\
							<center><div class="col-md-12"><i class="'+is_correct+'"></i></div>\
						<div class="col-md-12"><img width="100" src="'+base_url+'animals/'+val.id+'.jpg" class="img-rounded '+user_answer+'"/></div></center>\
						</div>';
			});
				str += '</div>';
			
		});
		$('#review_exam_container').addClass('col-md-8 well').html(str);
		$('#review_exam_container').slideDown();
		$(this).hide();
	});
	
	
	function start_timer(timer) {
	
		startTimer = setTimeout(function() {

			$('#timer').text(timer--);		
			start_timer(timer);
			
			if(timer < 0){
				stop_timer();
				execSubmit();
			}else if(timer < 10 && timer > 1){
				if($('#timer').hasClass('green')){
					$('#timer').removeClass('green').addClass('red');
				}
				
			}else if(timer > 10){
				if($('#timer').hasClass('red')){
					$('#timer').removeClass('red').addClass('green');
				}
			}
	
			if($('.review_exam').length > 0){
				stop_timer();
			}
			
			

		},1000);
	}
	
	function stop_timer() {
		clearTimeout(startTimer);
	}
	
	
});



var quiz = {

	base_url : function() {
		return $('#base_url').val();
	},
	
	get_quiz : function(num) {
	var base_url = quiz.base_url();
	var result = "";
		$.ajax({
			url : base_url + 'service/up_to/'+num,
			dataType : 'json',
			async : false,
			success : function(data) {
				result = data;
			}
			
		});
	
		return result;
	},

	render_quiz : function(data) {
	
		var str = "";
		var base_url = quiz.base_url();

		$.each(data, function(k,v){

			var choices = v.choices;
			var answer = v.id;
			var question = v.animal;
			var is_hide = k > 0 ? 'style="display:none;"' : '';
		
			str += '<div class="row" '+is_hide+' data-index="'+(k+1)+'">\
				<div class="col-md-10 well">\
					<div class="col-md-6"><h4 id="question">'+question.toUpperCase()+'</h4></div>\
					<div class="col-md-6"><h4 class="pull-right" ><span class="green" id="timer">'+init_time+'</span></h4></div>\
					<span id="option_container">\
					<div class="col-md-3 well btn btn_hover" data-id="'+choices[0].id+'"><img src="'+base_url+'animals/'+choices[0].id+'.jpg" class="img-rounded"/></div>\
					<div class="col-md-3 well btn btn_hover" data-id="'+choices[1].id+'"><img src="'+base_url+'animals/'+choices[1].id+'.jpg" class="img-rounded"/></div>\
					<div class="col-md-3 well btn btn_hover" data-id="'+choices[2].id+'"><img src="'+base_url+'animals/'+choices[2].id+'.jpg" class="img-rounded"/></div>\
					<div class="col-md-3 well btn btn_hover" data-id="'+choices[3].id+'"><img src="'+base_url+'animals/'+choices[3].id+'.jpg" class="img-rounded"/></div>\
					</span>\
					<div class="col-md-offset-3 col-md-6">\
						<form class="form-inline" role="form">\
						<center><div class="form-group"><button class="btn btn-primary submit_btn" type="button">Submit</button></div></center>\
						</form>\
					</div>\
				</div>\
			</div>';
			
		});
		
		$('#quiz_container').html(str);

	}

}