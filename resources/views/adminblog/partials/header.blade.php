<a href="{{ route('admin.deshboard')}}" class="logo">
    <span class="logo-mini"><b>B</b>A</span>
    <span class="logo-lg"><b>Blog</b>Admin</span>
</a>

<nav class="navbar navbar-static-top">
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="{{ asset('assets/superadmin/dist/img/dp.jpg')}}" class="user-image" alt="User Image">
                    <span class="hidden-xs">Md. Yousuf</span>
                </a>

                <ul class="dropdown-menu">
                    <li class="user-header">
                        <img src="{{ asset('assets/superadmin/dist/img/dp.jpg')}}" class="img-circle" alt="User Image">
                        <p>
                            Ashish Dixit - Web Developer
                            <small>Member since Nov. 2018</small>
                        </p>
                    </li>

                    <li class="user-footer">
                        <div class="pull-left">
                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                        </div>
                        <div class="pull-right">
                            <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">Sign out</a>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>

<form id="logout-form" action="{{ route('auth.logout') }}" method="post" style="display: none;">
    @csrf
</form>