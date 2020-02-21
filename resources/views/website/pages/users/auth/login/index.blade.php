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
						<form action="{{ route('users.auth') }}" method="post">
							@csrf
							<div class="form-group row">
						    	<div class="col-md-6">
						    		<label>Email</label>
						      		<input type="email" class="form-control" id="email" name="email" placeholder="Type your Email">
						    	</div>
						  	</div>
							  <div class="form-group row">
						    	<div class="col-md-6">
						    		<label>Password</label>
						      		<input type="password" class="form-control" id="password" name="password" placeholder="Type your Password">
						    	</div>
						  	</div>
							<div class="form-group row">
						    	<div class="col-md-6 text-center">
						      		<button type="submit" class="btn btn-primary">Login</button>
						    	</div>
						  	</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection