@extends('adminblog.layout')
@section('content')    
    <section class="content-header">
        <h1>Blog Details</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Categories Manage</a></li>
            <li class="active">Blog Details</li>
        </ol>
    </section>

    <section class="content">
        <div class="box">
            <div class="box-header with-border">
                <a href="{{ url('admin/details/create')}}" class="btn btn-success pull-left">Add New</a>
            </div>
                
            <div class="box-body col-mad-12">
                <div class="table-responsive">
                    <table id="dataTable" class="table table-hover">
                        <thead>
                            <tr>
                                <th class="text-left">SL</th>
                                <th class="text-left">Name</th>
                                <th class="text-left">Date</th>
                                <th class="text-left">Heading</th>
                                <th class="text-left">Description</th>
                                <th class="text-left">Image</th>
                                <th class="text-left">Status</th>
                                <th class="text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($details as $key =>$v)
                            <tr>
                                <td class="text-left">{{ $key+1 }}</td>
                                <td class="text-left">{{ $v->name }}</td>
                                <td class="text-left">{{ $v->date }}</td>
                                <td class="text-left">{{ $v->heading }}</td>
                                <td class="text-left"title="{{ $v->description }}">{!! substr(strip_tags($v->description), 0, 20) !!}...</td>
                                <td><img src="{{ url('upload/details/'.$v->image) }}" width="70" height="50"></td>
                                
                                <td align="text-center">
                                    @if($v->status == 1)
                                        <span class="badge badge-pill badge-success status_1 st" style="background-color: #00a65a;">Active</span>
                                    @else
                                       <span class="badge badge-pill badge-warning status_0 st disabled" style="background-color: #dd4b39;">Inactive</span>
                                    @endif
                                </td>
                                <td class="text-right">
                                    <a href="{{ url('admin/details/create/'.$v->id) }}" id="{{ $v->id }}" class="btn btn-success" style="border-radius: 20px !important;"><i class="fa fa-edit"></i></a>
                                    <button data-href="{{ url('admin/details/destory/'.$v->id)}}" data-id="{{ $v->id }}" class="btn btn-danger del_btn" style="border-radius: 20px !important;"><i class="fa fa-trash-o"></i></button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
    </section>
@endsection    
