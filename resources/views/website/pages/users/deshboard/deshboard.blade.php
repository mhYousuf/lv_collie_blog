@extends('website.layout')
@section('content')
<nav aria-label="breadcrumb" class="breadcrumb-nav">
	<div class="container-fluid">
        <section class="content-header">
	        <ol class="breadcrumb">
	            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
	            <li class=""><a href="{{ route('users.deshboard') }}"> Deshboard</a></li>
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
	                    <div class="row usr_des">
	                        <div class="col-md-12">
	                            <h1>WELCOME TO DESHBOARD</h1>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</div>


@endsection