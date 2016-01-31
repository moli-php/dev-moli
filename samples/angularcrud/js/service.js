app.service('Api', function($resource){
		return $resource('api/api/:method/:id/:param', {}, {
			update : {method: 'PUT'},
			query : { method: 'GET', cache: false, isArray: true },
			get : {method: 'GET', cache: false}
		});
});


app.factory('myService', function(){
	return {
		form : function(params) {

			return $('body').find('.simpleForm-form').length
					? $('.simpleForm-form').simpleForm(params)
					: $('form').simpleForm(params);

		}

	}


});