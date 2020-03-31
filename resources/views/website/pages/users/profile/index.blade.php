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
	                    	<div class="col-lg-3 usr_content_img">
                                @if($profile->image)
                                    <img src="{{ asset('upload/users/'.$profile->image) }}" alt="Profile" width="100%" height="100%" style="border-radius: 50% !important;">
                                @else
                                	<!-- <i class="fa fa-camera" aria-hidden="true"></i> -->
                                    <img src="https://via.placeholder.com/250x250?text=No+Image" alt="Profile" style=" background: #ded5d5;">
                                @endif
                            </div>
	                        <div class="col-md-9">
	                        	<div class="form_grid">
	                            	<div class="row">
	                            		<div class="col-md-6 form-group">
	                            			<label>Name</label><br>
                                            <b>{!! ($profile->name) ? $profile->name : '<span style="color: red;">Not Given</span>' !!}
                                            </b>
	                            		</div>

			                            <div class="col-md-6 form-group">
			                            	<label>Email</label><br>
			                            	<b>{!! ($profile->email) ? $profile->email : '<span style="color: red;">Not Given</span>' !!}
		                                            </b>
			                            </div>

			                            <div class="col-md-6 form-group">
			                            	<label>Phone</label><br>
			                            	<b>{!! ($profile->phone) ? $profile->phone : '<span style="color: red;">Not Given</span>' !!}
		                                            </b>
			                            </div>

			                            <div class="col-md-6 form-group">
			                            	<label>Birth Date</label><br>
			                            	<b>{!! ($profile->birth_date) ? $profile->birth_date : '<span style="color: red;">Not Given</span>' !!}
		                                            </b>
			                            </div>

			                            <div class="col-md-6 form-group">
			                            	<label>Gender</label><br>
			                            	<b>{!! ($profile->gender) ? $profile->gender : '<span style="color: red;">Not Given</span>' !!}
		                                            </b>
			                            </div>

			                            <div class="col-md-6 form-group">
			                            	<label>Address</label><br>
			                            	<b>{!! ($profile->address) ? $profile->address : '<span style="color: red;">Not Given</span>' !!}
		                                            </b>
			                            </div>
	                            	</div>

	                            	<div class="row">
                                        <div class="col-lg-12" style="margin-top: 20px;">
                                            <a href="{{ route('users.profile.create')}}" class="btn btn-primary">Edit Profile</a>
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
</div>
@endsection