@extends('website.layout')
@section('content')
<nav aria-label="breadcrumb" class="breadcrumb-nav">
	<div class="container-fluid">
        <section class="content-header">
	        <ol class="breadcrumb">
	            <li class=""><a href="{{ route('users.deshboard') }}"><i class="fa fa-home"></i></a></li>
	            <li class=""><a href="{{ route('users.deshboard') }}"> Deshboard</a></li>
	            <li class=""><a href="javascript:;"> User Post</a></li>
	        </ol>
	    </section>
	</div>
</nav>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
				<div class="section-row">
            		@include('website.pages.users.deshboard.user_siderbar')
				    <div class="col-md-8 box-form">
					    <form class="" action="{{ route('users.store')}}" method="post" enctype="multipart/form-data">
						  	@csrf
						  	<div class="form-group">
						  		<div class="row">
							  		<div class="col-md-12">
								    	<div class="col-md-6">
								    		<label>Category Name</label><i class="fill">*</i>
								      		<select type="text" class="form-control" id="category_id" name="category_id">
								      			@foreach($categorie as $key =>$v)
								      			<option value="{{ $v->id }}" {{ (isset($value) && $value->category_id == $v->id) ? 'selected' : '' }}>{{ $v->name }}</option>
								      			@endforeach
								      		</select>
								    	</div>

								    	<div class="col-md-6">
								    		<label>Sub Category Name</label><i class="fill">*</i>
								      		<select type="text" class="form-control" id="sub_cat_id" name="sub_cat_id">
								      			@foreach($subcategory as $key =>$v)
								      			<option value="{{ $v->id }}" {{ (isset($value) && $value->sub_cat_id == $v->id) ? 'selected' : '' }}>{{ $v->subcategory_name }}</option>
								      			@endforeach
								      		</select>
								    	</div>
							  		</div>
						  		</div>
						  	</div>

						  	
						  	<div class="form-group">
						  		<div class="row">
							  		<div class="col-md-12"> 
								    	<div class="col-md-6">
								    		<label>Heading</label><i class="fill">*</i>
								      		<input type="text" class="form-control" id="heading" name="heading" required value="{{ isset($value) ? $value->heading : '' }}" placeholder="Type your heading">
								    	</div>

								    	<div class="col-md-6">
								    		<label>Date</label><i class="fill">*</i>
								      		<input type="date" class="form-control" id="date" name="date" required value="{{ isset($value) ? $value->date : '' }}" placeholder="Type your date">
								    	</div>
								    </div>
								</div>
						  	</div>
						  	
						  	<div class="form-group">
						  		<div class="row">
						  			<div class="col-md-12">
								    	<div class="col-md-6">
								    		<label>Image</label><span class="fill">*</span>
							                    <span class="pull-right text-success file_name l_img text_theme" style="padding:0px 5px;">{{ ($value) ? $value->image : '' }}</span>
							                    <input type="file" class="form-control" id="image" name="image" value="{{ isset($value) ? $value->image : '' }}">
								    	</div>

								    	<div class="col-md-6">
								    		<label class="form_heading">Status</label><i class="fill">*</i>
			                                <select class="form-control prompt nice_select wide" name="status" id="status" required>
			                                    <option value="1" selected>Active</option>
			                                    <option value="0">Inactive</option>
			                                </select>
								    	</div>
								    </div>
						    	</div>
						  	</div>

						  	<div class="form-group">
						  		<div class="row">
							    	<div class="col-md-12">
							    	<div class="col-md-12">
							    		<label class="form_heading">Description</label><i class="fill">*</i>
							      		<textarea type="text" class="form-control" id="description" name="description" rows="7" required value="{{ isset($value) ? $value->description : '' }}" placeholder="Type your description">{{ isset($value) ? $value->description : '' }}</textarea>
							    	</div>
							    	</div>
							  	</div>
						  	</div>

						  	<div class="form-group">
						    	<div class="col-md-12">
							    	<div class="col-md-12">
							    		<input type="hidden" name="id" id="id" value="{{ (isset($value)) ? $value->id : ''}}">
							      		<button type="submit" class="btn btn-primary">{{ (isset($value)) ? 'Update' : 'Save' }}</button>
							      		<a href="{{ route('users.index')}}" class="btn btn-danger pull-right">Cancel</a>
							    	</div>
						    	</div>
						  	</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('script')
    <script type="text/javascript">
        $('#status').val({{ $value->status ?? 1 }});
    </script>
@endsection 