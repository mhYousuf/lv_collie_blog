@extends('website.layout')
@section('content')
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
				<div class="section-row">
				    <div class="section-title">
				        <h3 class="title">Blog Post Form</h3>
				    </div>
				    <form action="{{ route('users.store')}}" method="post">
					  	@csrf
					  	<div class="form-group row">
					    	<div class="col-md-6">
					    		<label>Users Name</label><i class="fill">*</i>
					      		<!-- <input type="text" class="form-control" id="name" name="name" required placeholder="Type your name"> -->
					      		<select type="text" class="form-control" id="user_id" name="user_id">
					      			@foreach($users as $key =>$v)
					      			<option value="{{ $v->id }}" {{ (isset($value) && $value->user_id == $v->id) ? 'selected' : '' }}>{{ $v->name }}</option>
					      			@endforeach
					      		</select>
					    	</div>
					  	</div>
					  	<div class="form-group row">
					    	<div class="col-md-6">
					    		<label>Heading</label><i class="fill">*</i>
					      		<input type="text" class="form-control" id="heading" name="heading" required placeholder="Type your heading">
					    	</div>
					  	</div>
					  	<!-- <div class="form-group row">
					    	<div class="col-md-6">
					    		<label>Title</label>
					      		<input type="title" class="form-control" id="title" name="title" placeholder="Type your Email">
					    	</div>
					  	</div> -->
					  	<div class="form-group row">
					    	<div class="col-md-6">
					    		<label>Date</label><i class="fill">*</i>
					      		<input type="date" class="form-control" id="date" name="date" required placeholder="Type your date">
					    	</div>
					  	</div>
					  	<div class="form-group row">
					    	<div class="col-md-6">
					    		<label>Image</label><i class="fill">*</i>
					      		<input type="file" class="form-control" id="image" name="image" value="" placeholder="Image">
					    	</div>
					  	</div>
					  	<div class="form-group row">
					    	<div class="col-md-6">
					    		<label>Description</label><i class="fill">*</i>
					      		<textarea type="text" class="form-control" id="description" name="description" rows="7" required placeholder="Type your description"></textarea>
					    	</div>
					  	</div>

					  	<div class="form-group row">
					    	<div class="col-md-6">
					    		<input type="hidden" name="id" id="id" value="">
					      		<button type="submit" class="btn btn-primary">Submit</button>
					      		<!-- <button type="submit" class="btn btn-danger pull-right">Cancel</button> -->
					    	</div>
					  	</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection