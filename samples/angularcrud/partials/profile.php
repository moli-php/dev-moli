<h2>Profile</h2>
<div class="row">
	<div class="col-md-8">
		<div class="col-md-4">
			<h4>{{profile.first_name + ' ' + profile.last_name}}
				
			</h4>
		</div>
		<div class="col-md-4 pull-right">
			<span class="pull-right">
					<a href="#/action/delete/customer/{{profile.id}}" class="btn glyphicon glyphicon-remove"><i></i></a>
					<a href="#/action/update/customer/{{profile.id}}" class="btn glyphicon glyphicon-pencil"><i></i></a>
			</span>
		</div>
	
		<table class="table table-condensed table-hover table-bordered">
			<thead>
				<tr class="active">
					<th>Product</th>
					<th>Price</th>
					<th>Quantity</th>
					<th>Total</th>
				</tr>
			</thead>
			<tbody>
				<tr data-ng-hide="profile.orders || profile.orders.length > 0">
					<td colspan="4">
						<div class="text-center">No orders found</div>
					</td>
				</tr>
				<tr data-ng-repeat="client_profile in profile.orders">
					<td>{{client_profile.product}}</td>
					<td>{{client_profile.price | currency}}</td>
					<td>{{client_profile.quantity}}</td>
					<td>{{client_profile.total | currency}}</td>
				</tr>
				<tr class="success">
					<td colspan="3"></td>
					<td>{{total | currency}}</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
