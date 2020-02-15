@extends('adminblog.layout')
@section('content')
<section class="content-header">
    <h1>Add Information</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Settings</a></li>
        <li class="active">Category Details Info Add</li>
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
            <div class="form-group col-md-6">
                <label>Category Name</label>
                <select class="form-control" id="cat_id" name="cat_id">
                    @foreach ($category as $key => $v)
                        <option value="{{ $v->id }}" {{ (isset($value) && $value->cat_id == $v->id) ? 'selected' : '' }}>{{ $v->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-md-6">
                <label>Sub Category Name</label>
                <select class="form-control" id="sub_cat_id" name="sub_cat_id">
                    @foreach ($sub_category as $key => $v)
                        <option value="{{ $v->id }}" {{ (isset($value) && $value->sub_cat_id == $v->id) ? 'selected' : '' }}>{{ $v->subcategory_name }}</option>
                    @endforeach
                </select>
            </div>

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
                    <input type="file" class="form-control" id="image" name="image" required value="{{ isset($value) ? $value->image : '' }}">
                </div>
            </div>

            <div class="col-md-12 form-group">
                <label>Status</label><span class="fill">*</span>
                <select class="form-control prompt nice_select wide" name="status" id="status" >
                    <option value="1" selected>Active</option>
                    <option value="0">Inactive</option>
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
