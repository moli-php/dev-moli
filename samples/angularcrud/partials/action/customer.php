<div class="row" data-ng-controller="actionCustController">
	<form class="form form-horizontal" role="form" name="custForm" novalidate>
		<div class="form-group">
			<label class="col-sm-2 control-label" for="first_name">First Name</label>
			<div class="col-sm-4">
				<input type="text" placeholder="Enter First Name" name="first_name" class="form-control" id="first_name" ng-model="first_name" required ng-disabled="{{is_disabled}}" simpleForm-required simpleForm-required>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label" for="last_name">Last Name</label>
			<div class="col-sm-4">
				<input type="text" placeholder="Enter Last Name" class="form-control" id="last_name" ng-model="last_name" required ng-disabled="{{is_disabled}}" simpleForm-required>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label" for="address">Address</label>
			<div class="col-sm-4">
				<textarea type="text" placeholder="Enter Address" class="form-control" id="address" ng-model="address" required ng-disabled="{{is_disabled}}" simpleForm-required></textarea>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label" for="contact_no">Contact Number</label>
			<div class="col-sm-4">
				<input type="text" placeholder="Enter Contact Numer" class="form-control" id="contact_no" ng-model="contact_no" required ng-disabled="{{is_disabled}}" simpleForm-required>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label" for="email">Email</label>
			<div class="col-sm-4">
				<input type="email" placeholder="Enter Email" class="form-control" id="email" ng-model="email" required ng-disabled="{{is_disabled}}" simpleForm-required simpleForm-email>
			</div>
		</div>
		<div class="form-group">	
			<div class="col-sm-offset-2 col-sm-4 control-label">
				<button id="btn_save" data-ng-hide="action == 'Delete'" class="btn btn-primary" type="submit" data-ng-click="save()">{{action}}</button>
				<button id="btn_save" data-ng-show="action == 'Delete'" class="btn btn-danger" type="submit" data-ng-click="delete()">{{action}}</button>
				<button class="btn btn-default" type="submit" data-ng-click="cancel()">Cancel</button>
			</div>
		</div>
</form>
</div>