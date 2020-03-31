@extends('website.layout')
@section('content')
<nav aria-label="breadcrumb" class="breadcrumb-nav">
	<div class="container-fluid">
        <section class="content-header">
	        <ol class="breadcrumb">
	            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
	            <li class=""><a href="{{ route('users.deshboard') }}"> Deshboard</a></li>
	            <li class=""> profile</li>
	        </ol>
	    </section>
	</div>
</nav>
<div class="section">
	<div class="container">
	    <div class="main-content">
	        <div class="container-fluid"><br>
	            <div class="row">
	            	@include('website.pages.users.deshboard.user_siderbar')
	                <div class="col-lg-9 dasboard-body">
	                    <div class="row">
	                        <div class="col-md-12">
	                        	<div class="pull-right" style="font-size: 25px;">
	                        		<a href="{{ route('users.profile') }}"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
	                        	</div>
	                        	<div class="form_grid">
	                            	<div class="row">
	                            		<form class="" action="{{ route('users.profile.store') }}" method="post" enctype="multipart/form-data">
	                            			@csrf
	                            			<div class="form-group col-md-12">
	                            				<div class="col-md-6">
	                            					<label>Name</label>
	                            					<input class="form-control" type="text" name="name" id="name" value="{{ $user->name ?? '' }}" placeholder="">
	                            				</div>
	                            				<div class="col-md-6">
	                            					<label>Email</label>
	                            					<input class="form-control @error('email') is-invalid @enderror" type="text" name="email" id="email" value="{{ old('email') ?? $user->email }}" placeholder="">
	                            					 @error('phone')
                                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                                	@enderror
	                            				</div>
	                            			</div>

	                            			<div class="form-group col-md-12">
	                            				<div class="col-md-6">
	                            					<label>Phone</label>
	                            					<input class="form-control" type="text" name="phone" id="phone" value="{{ old('phone') ?? $user->phone }}" placeholder="">
	                            					 @error('phone')
                                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                                	@enderror
	                            				</div>
	                            				<div class="col-md-6">
	                            					<label>Birth Date</label>
	                            					<input class="form-control datepicker" type="date" name="birth_date" id="birth_date" value="{{ old('birth_date') ?? $user->birth_date }}" placeholder="">
	                            				</div>
	                            			</div>

	                            			<div class="form-group col-md-12">
	                            				<div class="col-md-6">
	                            					<label>Image</label>
	                            					<span class="pull-right text-success file_name l_img text_theme" style="padding:0px 5px;">{{ ($user) ? $user->image : '' }}</span>
	                            					<input class="form-control" type="file" name="image" id="image" value="" placeholder="">
	                            				</div>
	                            				<div class="col-md-6">
	                            					<label>Gender</label>
	                            					<!-- <input class="form-control" type="text" name=""> -->
	                            					<select class="form-control" name="gender" id="">
	                            					<option>Male</option>
	                            					<option>Female</option>
	                            					</select>
	                            				</div>
	                            			</div>

	                            				<!-- <div class="row"> -->
	                            			<div class="form-group col-md-12">
	                            				<div class="col-md-12">
	                            					<label>Address</label>
	                            					<textarea class="form-control" type="text" name="address" id="address" rows="7" value="{{ old('address') ?? $user->address }}" placeholder="">{{ old('address') ?? $user->address }}</textarea>
	                            				</div>
	                            			</div>
	                            			<!-- </div> -->
	                            	<div class="form-group">
                                        <div class="col-lg-12" style="margin-top: 20px; margin-left: 20px;">
                                        		<!-- <input type="hidden" name="id" id="id"> -->
                                        		<button type="submit" class="btn btn-primary">Update</button>
                                            <!-- <a href="{{ route('users.profile') }}" class="btn btn-primary">Update</a> -->
                                        </div>
                                    </div>
	                            		</form>
	                            	</div>

	                        	</div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</div>
@endsection
@section('script')
    <script type="text/javascript">
        $('#birth_date').datepicker({
            format: 'dd-mm-yyyy',
            defaultViewDate:'01-01-1980'
        });
    </script>
@endsection