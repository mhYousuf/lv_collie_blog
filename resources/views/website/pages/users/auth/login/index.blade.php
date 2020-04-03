@extends('website.layout')
@section('content')
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
				<div class="section-row">
				    <div class="section-title">
				        <h3 class="title">Login Form</h3>
				    </div>
						<form class="form" action="{{ route('users.auth') }}" method="post">
							@csrf
							<div class="form-group row">
						    	<div class="col-md-6">
						    		<label>User name</label>
						      		<input type="username" class="form-control" id="username" name="username" required  placeholder="Type your Username">
						    	</div>
						  	</div>
							  <div class="form-group row">
						    	<div class="col-md-6">
						    		<label>Password</label>
						      		<input type="password" class="form-control" id="password" name="password" required placeholder="Type your Password">
						    	</div>
						  	</div>
							<div class="form-group row">
						    	<div class="col-md-6 text-center">
						      		<button type="submit" class="btn btn-primary form-control">Login</button>
						    	</div>
						  	</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection