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

				    <div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                    <div>
                	@if(session()->has('msg'))
                	<div class="alert alert-danger">
                        <ul>
                            <li>{{ session('msg') }}</li>
                            <li>{{ session('type') }}</li>
                        </ul>
                    </div>
                    @endif
                    </div>

				    <form action="{{ route('users.auth.register')}}" method="POST">
					  	@csrf
					  	<div class="form-group row">
					    	<div class="col-md-6">
					    		<label>Full Name</label>
					      		<input type="text" class="form-control" id="name" name="name" required value="{{ old('name') }}" placeholder="Type your Full name">
					    	</div>
					  	</div>
					  	<div class="form-group row">
					    	<div class="col-md-6">
					    		<label>User Name</label>
					      		<input type="text" class="form-control" id="username" name="username" required value="{{ old('username') }}" placeholder="Type your User name">
					    	</div>
					  	</div>
					  	<div class="form-group row">
					    	<div class="col-md-6">
					    		<label>Email</label>
					      		<input type="email" class="form-control" id="email" name="email" required value="{{ old('email') }}" placeholder="Type your Email">
					    	</div>
					  	</div>
					  	<div class="form-group row">
					    	<div class="col-md-6">
					    		<label>Phone</label>
					      		<input type="number" min="0" type="phone" class="form-control" id="phone" name="phone" required value="{{ old('phone') }}" placeholder="Type your phone">
					    	</div>
					  	</div>
					  	<div class="form-group row">
					    	<div class="col-md-6">
					    		<label>Password</label>
					      		<input type="password" class="form-control" id="password" name="password" required value="{{ old('password') }}" placeholder="Type your Password">
					    	</div>
					  	</div>
					  	<div class="form-group row">
					    	<div class="col-md-6">
					    		<label>Address</label>
					      		<textarea type="text" class="form-control" id="address" name="address" required value="{{ old('address') }}" rows="7" placeholder="Type your Address"></textarea>
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