<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Panel | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('assets/superadmin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/superadmin/bower_components/font-awesome/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('assets/superadmin/bower_components/Ionicons/css/ionicons.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/superadmin/dist/css/AdminLTE.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('assets/superadmin/plugins/iCheck/square/blue.css') }}">

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="index.php"><b>Blog</b>Admin</a>
        </div>

        <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <form action="#" method="post">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="username" value=''>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password" value=''>
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
                <a href="{{ route('deshboard')}}">Deshboard</a>
            </form>

            <!-- jQuery 3 -->
            <script src="{{ asset('assets/superadmin/bower_components/jquery/dist/jquery.min.js') }}"></script>
            <!-- Bootstrap 3.3.7 -->
            <script src="{{ asset('assets/superadmin/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
            <!-- iCheck -->
            <script src="{{ asset('assets/superadmin/plugins/iCheck/icheck.min.js') }}"></script>
            <script>
                $(function() {
                    $('input').iCheck({
                        checkboxClass: 'icheckbox_square-blue',
                        radioClass: 'iradio_square-blue',
                        increaseArea: '20%' /* optional */
                    });
                });
            </script>
        </div>
    </div>
</body>

</html>