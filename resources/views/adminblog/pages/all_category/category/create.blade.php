@extends('adminblog.layout')
@section('content')
<section class="content-header">
    <h1>Add Information</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Settings</a></li>
        <li class="active">Category Info Add</li>
    </ol>
</section>

<section class="content">
  <div class="box">
    <div class="box-header with-border">
        <a href="{{ route('admin.category')}}" class="btn btn-success pull-left">Go List</a>
    </div>

    <div class="box-body">
        <form action="{{ route('admin.category.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="col-md-12">
                <div class="form-group">
                    <label>Name</label><span class="fill">*</span>
                    <input type="text" class="form-control" id="name" name="name" required value="{{ isset($value) ? $value->name : '' }}">
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
                <br>
                <input type="hidden" name="id" id="id" value="{{ (isset($value)) ? $value->id : ''}}">
                <button type="submit" class="btn btn-success">{{ (isset($value)) ? 'Update' : 'Save' }}</button>
                <a href="{{ route('admin.category')}}" class="btn btn-danger">Cancel</a>
            </div>
        </form>
    </div>
</section>
@endsection
