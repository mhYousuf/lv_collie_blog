@extends('adminblog.layout')
@section('content')
<section class="content-header">
    <h1>Add Information</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Settings</a></li>
        <li class="active">Basic Info Add</li>
    </ol>
</section>

<section class="content">
  <div class="box">
    <div class="box-header with-border">
        <a href="{{ route('admin.basic.manage')}}" class="btn btn-success pull-left">Go List</a>
    </div>

    <div class="box-body">
        <form action="{{ route('admin.basic.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="col-md-6">
                <div class="form-group">
                    <label>Title</label><span class="fill">*</span>
                    <input type="text" class="form-control" id="title" name="title" required value="{{ isset($value) ? $value->title : '' }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Website Name</label><span class="*">*</span>
                    <input type="text" class="form-control" id="website_name" name="website_name" required value="{{ isset($value) ? $value->website_name : '' }}">
                </div>
            </div>
        
            <div class="col-md-6">
                <div class="form-group">
                    <label>Phone</label><span class="fill">*</span>
                    <input type="text" class="form-control" id="phone" name="phone" required value="{{ isset($value) ? $value->phone : '' }}">
                </div>
            </div>
        
            <div class="col-md-6">
                <div class="form-group">
                    <label>Email</label><span class="fill">*</span>
                    <input type="email" class="form-control" id="email" name="email" required value="{{ isset($value) ? $value->email : '' }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Address</label><span class="fill">*</span>
                    <input type="text" class="form-control" id="address" name="address" required value="{{ isset($value) ? $value->address : '' }}">
                </div>
            </div>
        
            <div class="col-md-6">
                <div class="form-group">
                    <label>Copyright Name</label><span class="fill">*</span>
                    <input type="text" class="form-control" id="copy_name" name="copy_name" required value="{{ isset($value) ? $value->copy_name : '' }}">
                </div>
            </div>
        
            <div class="col-md-6">
                <div class="form-group">
                    <label>Logo</label><span class="fill">*</span>
                    <span class="pull-right input-group-append" style="padding:0px 5px;">{{ isset($value) ? $value->logo : '' }}</span>
                    <input type="file" class="form-control" id="logo" name="logo" accept="image/*" onchange="img_valid($(this));">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Footer Logo</label><span class="fill">*</span>
                    <span class="pull-right input-group-append" style="padding:0px 5px;">{{ isset($value) ? $value->footer_logo : '' }}</span>
                    <input type="file" class="form-control" id="footer_logo" name="footer_logo" accept="image/*" onchange="img_valid($(this));">
                </div>
            </div>
        
            <div class="col-md-6">
                <div class="form-group">
                    <label>Copyright Year</label><span class="fill">*</span>
                    <input type="text" class="form-control" id="copy_year" name="copy_year" required value="{{ isset($value) ? $value->copy_year : '' }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Copyright Link</label><span class="fill">*</span>
                    <input type="text" class="form-control" id="copy_link" name="copy_link" required value="{{ isset($value) ? $value->copy_link : '' }}">
                </div>
            </div>

            <div class="col-md-12 form-group">
                <label class="form_heading">Status</label><i class="fa fa-star fill" aria-hidden="true"></i>
                <select class="form-control prompt nice_select wide" name="status" id="status" >
                    if($value)
                    <option value="1" {{ ($value->status == '1') ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ ($value->status == '0') ? 'selected' : '' }}>Inactive</option>
                    @else
                    <option value="1" selected>Active</option>
                    <option value="0">Inactive</option>
                    @endif
                </select>
            </div>
        
            <div class="col-md-12">
                <label>Footer Description</label><span class="fill">*</span>
                <textarea name="footer_description" id="footer_description" cols="30" rows="5" class="form-control" required value="{{ isset($value) ? $value->footer_description : '' }}">{{ isset($value) ? $value->footer_description : '' }}</textarea>
            </div>
        
            <div class="col-md-12">
                <br>
                <input type="hidden" name="id" id="id" value="{{ (isset($value)) ? $value->id : ''}}">
                <button type="submit" class="btn btn-success">{{ (isset($value)) ? 'Update' : 'Save' }}</button>
                <a href="{{ route('admin.basic.manage')}}" class="btn btn-danger">Cancel</a>
            </div>
        </form>
    </div>
</section>
@endsection
