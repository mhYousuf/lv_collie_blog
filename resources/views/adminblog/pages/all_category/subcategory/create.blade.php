@extends('adminblog.layout')
@section('content')
<section class="content-header">
    <h1>Add Information</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Settings</a></li>
        <li class="active">Sub Category Info Add</li>
    </ol>
</section>

<section class="content">
  <div class="box">
    <div class="box-header with-border">
        <a href="{{ route('admin.subcategory')}}" class="btn btn-success pull-left">Go List</a>
    </div>

    <div class="box-body">
        <form action="{{ route('admin.subcategory.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group col-md-12">
                <label>Category Name</label>
                <select class="form-control" id="category_id" name="category_id">
                    @foreach ($category as $key => $v)
                        <option value="{{ $v->id }}" {{ (isset($value) && $value->category_id == $v->id) ? 'selected' : '' }}>{{ $v->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label>Sub Category Name</label><span class="fill">*</span>
                    <input type="text" class="form-control" id="subcategory_name" name="subcategory_name" required value="{{ isset($value) ? $value->subcategory_name : '' }}">
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
                <br>
                <input type="hidden" name="id" id="id" value="{{ (isset($value)) ? $value->id : ''}}">
                <button type="submit" class="btn btn-success">{{ (isset($value)) ? 'Update' : 'Save' }}</button>
                <a href="{{ route('admin.subcategory')}}" class="btn btn-danger">Cancel</a>
            </div>
        </form>
    </div>
</section>
@endsection
