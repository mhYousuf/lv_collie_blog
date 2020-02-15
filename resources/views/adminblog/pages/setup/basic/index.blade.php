@extends('adminblog.layout')
@section('content')    
    <section class="content-header">
        <h1>Basic Manage</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Settings</a></li>
            <li class="active">Basic Manage</li>
        </ol>
    </section>

    <section class="content">
        <div class="box">
            <div class="box-header with-border">
                <a href="{{ url('admin/basic/create')}}" class="btn btn-success pull-left">Add New</a>
            </div>
                
            <div class="box-body col-mad-12">
                <div class="table-responsive">
                    <table id="dataTable" class="table table-hover">
                        <thead>
                            <tr>
                                <th class="text-left">SL</th>
                                <th class="text-left">Title</th>
                                <th class="text-left">Website Name</th>
                                <th class="text-left">Phone</th>
                                <th class="text-left">Email</th>
                                <th class="text-center">Logo</th>
                                <th class="text-center">Status</th>
                                <th class="text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($basic as $key =>$v)
                            <tr>
                                <td class="text-left">{{ $key+1 }}</td>
                                <td class="text-left">{{ $v->title }}</td>
                                <td class="text-left">{{ $v->website_name }}</td>
                                <td class="text-left">{{ $v->phone }}</td>
                                <td class="text-left">{{ $v->email }}</td>
                                <td class="text-center">
                                    <img src="{{ url('upload/basic/'.$v->logo) }}" style="width:100px; height:50px;" >
                                </td>
                                <td align="left">
                                    @if($v->status == 1)
                                        <span class="badge badge-pill badge-success status_1 st" style="background-color: #00a65a;">Active</span>
                                    @else
                                       <span class="badge badge-pill badge-warning status_0 st disabled" style="background-color: #dd4b39;">Inactive</span>
                                    @endif
                                </td>
                                <td class="text-right">
                                    <a href="{{ url('admin/basic/create/'.$v->id) }}" id="{{ $v->id }}" class="btn btn-success" style="border-radius: 20px !important;"><i class="fa fa-edit"></i></a>
                                    <!-- <a href="#" class="btn btn-danger">Delete</a> -->
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
    </section>
@endsection    
