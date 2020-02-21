@extends('website.layout')
@section('content')
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
				<div class="section-row">
				    <div class="section-title">
				        <h3 class="title">Register Form</h3>
				    </div>
				    <form action="{{ route('register.store')}}" method="post">
					  	@csrf
					  	<div class="form-group row">
					    	<div class="col-md-6">
					    		<label>First Name</label>
					      		<input type="text" class="form-control" id="first_name" name="first_name" placeholder="Type your First name">
					    	</div>
					  	</div>
					  	<div class="form-group row">
					    	<div class="col-md-6">
					    		<label>Last Name</label>
					      		<input type="text" class="form-control" id="last_name" name="last_name" placeholder="Type your Last name">
					    	</div>
					  	</div>
					  	<div class="form-group row">
					    	<div class="col-md-6">
					    		<label>Email</label>
					      		<input type="email" class="form-control" id="email" name="email" placeholder="Type your Email">
					    	</div>
					  	</div>
					  	<div class="form-group row">
					    	<div class="col-md-6">
					    		<label>Phone</label>
					      		<input type="phone" class="form-control" id="phone" name="phone" placeholder="Type your phone">
					    	</div>
					  	</div>
					  	<div class="form-group row">
					    	<div class="col-md-6">
					    		<label>Password</label>
					      		<input type="password" class="form-control" id="password" name="password" placeholder="Type your Password">
					    	</div>
					  	</div>
					  	<div class="form-group row">
					    	<div class="col-md-6">
					    		<label>Address</label>
					      		<textarea type="text" class="form-control" id="address" name="address" rows="7" placeholder="Type your Address"></textarea>
					    	</div>
					  	</div>

					  	<div class="form-group row">
					    	<div class="col-md-6">
					      		<button type="submit" class="btn btn-primary">Sign up</button>
					      		<a href="{{ route('users.login') }}" class="btn btn-success pull-right">Sign in</a>
					    	</div>
					  	</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection