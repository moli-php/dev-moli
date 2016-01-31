var app = angular.module('callingcardApp', ['ngRoute','ngResource','ngAnimate']);

app.config(function ($routeProvider) {
    $routeProvider
        .when('/customers',
		{
			controller : 'custController',
			templateUrl : 'partials/customers.php'
		})
		.when('/orders',
		{
			controller : 'orderController',
			templateUrl : 'partials/orders.php'
		})
		.when('/profile/:id',
		{
			controller : 'profileController',
			templateUrl : 'partials/profile.php'
		})
		.when('/products',
		{
			controller : 'productController',
			templateUrl : 'partials/products.php'
		})
		.when('/action/:action/:page/:id?',
		{
			controller : 'actionController',
			templateUrl : 'partials/action.php'
		})
        .otherwise({ redirectTo: '/customers' });	
});