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
				    <form action="#" method="post">
					  	@csrf
					  	<div class="form-group row">
					    	<div class="col-md-6">
					    		<label>Name</label><i class="fill">*</i>
					      		<input type="text" class="form-control" id="name" name="name" placeholder="Type your name">
					    	</div>
					  	</div>
					  	<div class="form-group row">
					    	<div class="col-md-6">
					    		<label>Heading</label><i class="fill">*</i>
					      		<input type="text" class="form-control" id="heading" name="heading" placeholder="Type your heading">
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
					      		<input type="date" class="form-control" id="date" name="date" placeholder="Type your date">
					    	</div>
					  	</div>
					  	<div class="form-group row">
					    	<div class="col-md-6">
					    		<label>Image</label><i class="fill">*</i>
					      		<input type="file" class="form-control" id="image" name="image" placeholder="Image">
					    	</div>
					  	</div>
					  	<div class="form-group row">
					    	<div class="col-md-6">
					    		<label>Description</label><i class="fill">*</i>
					      		<textarea type="text" class="form-control" id="description" name="description" rows="7" placeholder="Type your description"></textarea>
					    	</div>
					  	</div>

					  	<div class="form-group row">
					    	<div class="col-md-6">
					      		<button type="submit" class="btn btn-primary">Submit</button>
					      		<button type="submit" class="btn btn-danger pull-right">Cancel</button>
					    	</div>
					  	</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection