@extends('adminblog.layout')
@section('content')
<section class="content-header">
    <h1>Add Information</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Settings</a></li>
        <li class="active">Social Info Add</li>
    </ol>
</section>

<section class="content">
  <div class="box">
    <div class="box-header with-border">
        <a href="{{ route('admin.social.manage')}}" class="btn btn-success pull-left">Go List</a>
    </div>

    <div class="box-body">
        <form action="{{ route('admin.social.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="col-md-6">
                <div class="form-group">
                    <label>Icon</label><span class="fill">*</span>
                    <input type="icon" class="form-control" id="icon" name="icon" required value="{{ isset($value) ? $value->icon : '' }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Url</label><span class="*">*</span>
                    <input type="url" class="form-control" id="url" name="url" required value="{{ isset($value) ? $value->url : '' }}">
                </div>
            </div>
        
            <div class="col-md-12 form-group">
                <label class="form_heading">Status</label><span class="fill">*</span>
                <select class="form-control prompt nice_select wide" name="status" id="status" >
                    <option value="1" selected>Active</option>
                    <option value="0">Inactive</option>
                </select>
            </div>
        
            <div class="col-md-12">
                <br>
                <input type="hidden" name="id" id="id" value="{{ (isset($value)) ? $value->id : ''}}">
                <button type="submit" class="btn btn-success">{{ (isset($value)) ? 'Update' : 'Save' }}</button>
                <a href="{{ route('admin.social.manage')}}" class="btn btn-danger">Cancel</a>
            </div>
        </form>
    </div>
</section>
@endsection
