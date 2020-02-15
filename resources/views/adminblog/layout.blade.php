<!DOCTYPE html>
<html>

<head>
    @include('adminblog.partials.head')
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            @include('adminblog.partials.header')
        </header>

        <aside class="main-sidebar">
            @include('adminblog.partials.sidebar')
        </aside>

        <div class="content-wrapper">
            @yield('content')
        </div>

        <footer class="main-footer">
            @include('adminblog.partials.footer')
        </footer>

        @include('adminblog.partials.script')
    </div>
    @if(session('insert'))
        <script type="text/javascript">
            $.toast({
          heading: 'Success',
          text: 'Data Insert Successfully.',
          showHideTransition: 'slide',
          icon: 'success',
          loaderBg: '#f96868',
          position: 'top-right'
        });
    </script>
    @endif
    @if(session('update'))
        <script type="text/javascript">
            $.toast({
          heading: 'Success',
          text: 'Data Insert Successfully.',
          showHideTransition: 'slide',
          icon: 'success',
          loaderBg: '#f96868',
          position: 'top-right'
        });
    </script>
    @endif
</body>

</html>