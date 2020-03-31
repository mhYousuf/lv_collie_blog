<aside class="aside-sidebar col-lg-3 usr_menu_wrap">
    <div class="usr_menu_box" id="myDIV">
        <h3 class="widget-title">My Account</h3>

        <ul class="list">
            <li class="active"><i class="fa fa-caret-right" aria-hidden="true"></i>
                <a href="{{ route('users.deshboard') }}" class="ac">&nbsp; Dashboard</a>
            </li>

            <li class="active"><i class="fa fa-caret-right" aria-hidden="true"></i>
                <a href="{{ route('users.profile')}}" class="ac">&nbsp; User Profile</a>
            </li>

            <li class=""><i class="fa fa-caret-right" aria-hidden="true"></i>
                <a href="{{ route('users.post')}}" class="ac">&nbsp; User Post</a>
            </li>

            <li class=""><i class="fa fa-caret-right" aria-hidden="true"></i>
                <a href="{{ route('users.index') }}">&nbsp; User Post Details</a>
            </li>

            <li><i class="fa fa-caret-right" aria-hidden="true"></i>
            	<a href="javascript:;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">&nbsp; Logout</a>
            </li>
        </ul>
    </div><!-- End .widget -->
</aside>
<form id="logout-form" action="{{ route('users.auth.logout') }}" method="post" style="display: none;">
    @csrf
</form>

