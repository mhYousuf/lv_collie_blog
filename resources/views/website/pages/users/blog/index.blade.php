@extends('website.layout')
@section('content')
<nav aria-label="breadcrumb" class="breadcrumb-nav">
	<div class="container-fluid">
        <section class="content-header">
	        <ol class="breadcrumb">
	            <li class=""><a href="{{ route('users.deshboard') }}"><i class="fa fa-home"></i></a></li>
	            <li class=""><a href="{{ route('users.deshboard') }}"> Deshboard</a></li>
	            <li class=""><a href="javascript:;"> User Post Details</a></li>
	        </ol>
	    </section>
	</div>
</nav>
<div class="section">
    <div class="container">
        <div class="row main-content">
            <div class="col-md-12">
				<div class="section-row">
            		@include('website.pages.users.deshboard.user_siderbar')
				    <div class="box-body col-md-9">
				    	<div class="row">
					    	<div class="col-md-12">
					            <div class="table-responsive">
					                <table id="dataTable" class="table table-hover">
					                    <thead>
					                        <tr>
					                            <th class="text-left">SL</th>
					                            <th class="text-left">Heading</th>
					                            <th class="text-left">Date</th>
					                            <th class="text-left">Image</th>
					                            <th class="text-left">Description</th>
					                            <th class="text-center">Status</th>
					                            <th class="text-right">Action</th>
					                        </tr>
					                    </thead>
					                    <tbody>
					                    	@foreach($users_post as $key =>$v)
					                        <tr>
					                            <td class="text-left">{{ $key+1 }}</td>
					                            <td class="text-left">{{ $v->heading }}</td>
					                            <td class="text-left">{{ date('d-M-Y', strtotime($v->date)) }}</td>
					                            <td class="text-left">
					                            	<img src="{{ url('upload/details/'.$v->image) }}" width="70" height="80">
					                            </td>
					                            <td class="text-left" title="{{ $v->description }}">{!! substr(strip_tags($v->description), 0, 20) !!}...</td>
					                            <td align="text-center">
				                                    @if($v->status == 1)
				                                        <span class="badge badge-pill badge-success status_1 st" style="background-color: #00a65a;">Active</span>
				                                    @else
				                                       <span class="badge badge-pill badge-warning status_0 st disabled" style="background-color: #dd4b39;">Inactive</span>
				                                    @endif
				                                </td>
					                            
					                            <td class="text-right">
					                                <a href="{{ route('users.post', [$v->id] ) }}" id="" class="btn btn-success" style="border-radius: 20px !important;"><i class="fa fa-edit"></i></a>
					                                <button data-href="{{ route('users.destroy', [$v->id] ) }}" data-id="{{ $v->id }}" class="btn btn-danger del_btn" style="border-radius: 20px !important;"><i class="fa fa-trash-o"></i></button>
					                            </td>
					                        </tr>
					                        @endforeach
					                    </tbody>
					                </table>
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