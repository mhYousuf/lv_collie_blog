@extends('adminblog.layout')
@section('content')
<section class="content-header">
    <h1>Add Information</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Categories Manage</a></li>
        <li class="active">Blog Details</li>
    </ol>
</section>

<section class="content">
  <div class="box">
    <div class="box-header with-border">
        <a href="{{ route('admin.category.details')}}" class="btn btn-success pull-left">Go List</a>
    </div>

    <div class="box-body">
        <form action="{{ route('admin.detailscategory.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="col-md-6">
                <div class="form-group">
                    <label>Name</label><span class="fill">*</span>
                    <input type="text" class="form-control" id="name" name="name" required value="{{ isset($value) ? $value->name : '' }}">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Date</label><span class="fill">*</span>
                    <input type="date" class="form-control" id="date" name="date" required value="{{ isset($value) ? $value->date : '' }}">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Heading</label><span class="fill">*</span>
                    <input type="text" class="form-control" id="heading" name="heading" required value="{{ isset($value) ? $value->heading : '' }}">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Image</label><span class="fill">*</span>
                    <span class="pull-right text-success file_name l_img text_theme" style="padding:0px 5px;">{{ ($value) ? $value->image : '' }}</span>
                    <input type="file" class="form-control" id="image" name="image" value="{{ isset($value) ? $value->image : '' }}">
                </div>
            </div>

            <div class="col-md-12 form-group">
                <label>Status</label><span class="fill">*</span>
                <select class="form-control prompt nice_select wide" name="status" id="status" >
                    @if($value)
                    <option value="1" {{ ($value->status == '1') ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ ($value->status == '0') ? 'selected' : '' }}>Inactive</option>
                    @else
                    <option value="1" selected>Active</option>
                    <option value="0">Inactive</option>
                    @endif
                </select>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label>Description</label><span class="fill">*</span>
                    <textarea type="text" class="form-control" id="description" name="description" rows="7" required value="{{ isset($value) ? $value->description : '' }}">{{ isset($value) ? $value->description : '' }}</textarea>
                </div>
            </div>
        
            <div class="col-md-12">
                <br>
                <input type="hidden" name="id" id="id" value="{{ (isset($value)) ? $value->id : ''}}">
                <button type="submit" class="btn btn-success">{{ (isset($value)) ? 'Update' : 'Save' }}</button>
                <a href="{{ route('admin.category.details')}}" class="btn btn-danger">Cancel</a>
            </div>
        </form>
    </div>
</section>
@endsection
