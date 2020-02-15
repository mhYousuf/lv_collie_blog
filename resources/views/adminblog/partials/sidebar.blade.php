<section class="sidebar">
    <div class="user-panel">
        <div class="pull-left image">
            <img src="{{ asset('assets/superadmin/dist/img/dp.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
            <p>Ashish Dixit</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
    </div>

    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
        </div>
    </form>
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active">
            <a href="{{ route('admin.deshboard')}}">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </a>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-wrench"></i> <span>Setting</span>
                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
            </a>
            <ul class="treeview-menu">
                <li class="active"><a href="{{ route('admin.basic.manage') }}"><i class="fa fa-circle-o"></i> Basic Manage</a></li>
                <li><a href="{{ route('admin.social.manage') }}"><i class="fa fa-circle-o"></i> Social Manage</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-sliders"></i> <span>Categories Manage</span>
                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
            </a>
            <ul class="treeview-menu">
                <li class="active"><a href="{{ route('admin.category') }}"><i class="fa fa-circle-o"></i> Category Manage</a></li>
                <li><a href="{{ route('admin.subcategory') }}"><i class="fa fa-circle-o"></i> Sub Category </a></li>

                <li class="treeview">
            <a href="#">
                <i class="fa fa-sliders"></i> <span>Categories Details Manage</span>
                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
            </a>
            <ul class="treeview-menu">
                <li class="active"><a href="{{ route('admin.category.details') }}"><i class="fa fa-circle-o"></i> Category Details</a></li>
            </ul>

        </li>

            </ul>

        </li>

        <!-- <li><a href=""><i class="fa fa-sliders"></i> <span>Category Manage</span></a></li> -->

        <li class="treeview">
            <a href="#">
                <i class="fa fa-lock"></i> <span>Security</span>
                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
            </a>
            <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Change Password</a></li>
            </ul>
        </li>
        <li><a onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
    </ul>
</section>

<form id="logout-form" action="{{ route('auth.logout') }}" method="post" style="display: none;">
    @csrf
</form>