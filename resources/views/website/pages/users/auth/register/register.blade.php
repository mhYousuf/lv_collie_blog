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

				    <!-- <div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div> -->
                    

				    <form action="{{ route('users.auth.register')}}" method="POST">
					  	@csrf
					  	<div class="form-group row">
					    	<div class="col-md-6 required-field">
					    		<label for="name">Full Name</label>
					      		<input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Type your Full name" required>
					    		@error('name')
                                <span class="invalid-feedback" role="alert" style="color: red;"><strong>{{ $message }}</strong></span>
                            	@enderror
					    	</div>
					  	</div>
					  	<div class="form-group row">
					    	<div class="col-md-6">
					    		<label>User Name</label>
					      		<input type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required placeholder="Type your User name">
					      		@error('username')
                                <span class="invalid-feedback" role="alert" style="color: red;"><strong>{{ $message }}</strong></span>
                            	@enderror
					    	</div>
					  	</div>
					  	<div class="form-group row">
					    	<div class="col-md-6 required-field">
					    		<label>Email</label>
					      		<input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required placeholder="Type your Email">
					      		@error('email')
                                <span class="invalid-feedback" role="alert" style="color: red;"><strong>{{ $message }}</strong></span>
                            	@enderror
					    	</div>
					  	</div>
					  	<div class="form-group row">
					    	<div class="col-md-6 required-field">
					    		<label>Phone</label>
					      		<input type="number" min="0" type="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone') }}" required placeholder="Type your phone">
					      		@error('phone')
                                <span class="invalid-feedback" role="alert" style="color: red;"><strong>{{ $message }}</strong></span>
                            	@enderror
					    	</div>
					  	</div>
					  	<div class="form-group row">
					    	<div class="col-md-6">
					    		<label>Password</label>
					      		<input type="password" class="form-control @error('phone') is-invalid @enderror" id="password" name="password" value="{{ old('password') }}" required placeholder="Type your Password">
					      		@error('password')
                                <span class="invalid-feedback" role="alert" style="color: red;"><strong>{{ $message }}</strong></span>
                            	@enderror
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
					      		<button type="submit" class="btn btn-primary form-control">Sign up</button>
					      		<a href="{{ route('users.login') }}" class="btn btn-success form-control" style="margin-top: 10px;">Sign in</a>
					    	</div>
					  	</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection