<!DOCTYPE html>
<html data-ng-app="callingcardApp">
<head>
<link href="libs/bootstrap/css/bootstrap.css" rel="stylesheet" />
<link href="libs/simple-form-validation/simple-form-validation.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />
<script src="libs/jquery-1.7.2.js"></script>
<script src="libs/bootstrap/js/bootstrap.js"></script>
<script src="libs/simple-form-validation/simple-form-validation.js"></script>
</head>
<body>
<nav class="navbar navbar-default" ng-controller="navController">
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a href="#/customers" class="navbar-brand">
			<img src="img/angular-logo.gif" />
			AngularJs Crud</a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav" id="menu">
					<li data-ng-class="{'active':getClass('/customers')}"><a href="#/customers">Customers</a></li>
                    <li data-ng-class="{'active':getClass('/orders')}"><a href="#/orders">Orders</a></li>
                    <li data-ng-class="{'active':getClass('/products')}"><a href="#/products">Products</a></li>
                    <li data-ng-class="{'active':getClass('/action/add/order,/action/add/product,/action/add/customer')}" class="dropdown">
                    	<a class="dropdown-toggle" data-toggle="dropdown" href="">Add <i class="caret"></i></a>
                    	<ul class="dropdown-menu">
                    		<li><a href="#/action/add/customer">Customer</a></li>
                    		<li><a href="#/action/add/order">Order</a></li>
                    		<li><a href="#/action/add/product">Product</a></li>
                    	</ul>
                    </li>
			</ul>
		</div>
	</div>
</nav>
<!-- animate view -->
<div class="container view-animate-container">
	<div class="view-animate" ng-view=""></div>
</div>

<script src="libs/angular.min.js"></script>
<script src="libs/angular-route.min.js"></script>
<script src="libs/angular-resource.js"></script>
<script src="libs/angular-animate.min.js"></script>

<script src="js/app.js"></script>
<script src="js/controller.js"></script>
<script src="js/service.js"></script>

</body>
</html>