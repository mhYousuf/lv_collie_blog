@extends('adminblog.layout.layout')
@section('content')
    <div class="login-logo">
        <a href="#"><b>Blog</b>Admin</a>
    </div>

    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form action="{{ route('auth.login') }}" method="post">
            @csrf
            <div class="form-group has-feedback">
                <input type="text" class="form-control" name="username" id="username" value=''>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" name="password" id="password" value=''>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-4">
                    <div class="checkbox icheck">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                </div>
                <div class="col-xs-8">
                </div>
            </div>
        </form>
    </div>
@endsection
