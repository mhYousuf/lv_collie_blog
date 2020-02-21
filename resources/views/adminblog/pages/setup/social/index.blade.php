@extends('adminblog.layout')
@section('content')    
    <section class="content-header">
        <h1>Social Manage</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Settings</a></li>
            <li class="active">Social Manage</li>
        </ol>
    </section>

    <section class="content">
        <div class="box">
            <div class="box-header with-border">
                <a href="{{ url('admin/social/create')}}" class="btn btn-success pull-left">Add New</a>
            </div>
                
            <div class="box-body col-mad-12">
                <div class="table-responsive">
                    <table id="dataTable" class="table table-hover">
                        <thead>
                            <tr>
                                <th class="text-left">SL</th>
                                <th class="text-left">Icon</th>
                                <th class="text-left">Url</th>
                                <th class="text-left">Status</th>
                                <th class="text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($social as $key =>$v)
                            <tr>
                                <td class="text-left">{{ $key+1 }}</td>
                                <td class="text-left"><i class="{{ $v->icon }}"></i></td>
                                <td class="text-left"><a class="text_theme text-success" target="_blank" href="{{ $v->url }}">{{ $v->url }}</a></td>
                                <td align="text-left">
                                    @if($v->status == 1)
                                        <span class="badge badge-pill badge-success status_1 st" style="background-color: #00a65a;">Active</span>
                                    @else
                                       <span class="badge badge-pill badge-warning status_0 st disabled" style="background-color: #dd4b39;">Inactive</span>
                                    @endif
                                </td>
                                <td class="text-right">
                                    <a href="{{ url('admin/social/create/'.$v->id) }}" id="{{ $v->id }}" class="btn btn-success" style="border-radius: 20px !important;"><i class="fa fa-edit"></i></a>
                                    <button data-href="{{ url('admin/social/destory/'.$v->id) }}" data-id="{{ $v->id }}" class="btn btn-danger del_btn" style="border-radius: 20px !important;"><i class="fa fa-trash-o"></i></button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
    </section>
@endsection    
