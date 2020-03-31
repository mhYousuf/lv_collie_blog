@php
    $categories = \App\Model\Categories\Category::has('subCat')->with(['subCat' => function($q){
        $q->where(['status' => 1]);
    }, 'details'])->where(['status' => 1])->orderBy('id', 'asc')->get();
@endphp
<header id="header">
    <div id="nav">
        <div id="nav-top">
            <div class="container">
                <ul class="nav-social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                </ul>

                <div class="nav-logo">
                    <a href="{{ route('web.home')}}" class="logo"><img src="{{ asset('assets/website/img/logo.png')}}" alt=""></a>
                </div>

                <div class="nav-btns dropdown">
                    <a href="javascript:;" title="My Account" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                        <i class="fa fa-user-o" style="font-size: 27px; padding: 5px; margin-right: 8px;"></i>
                        <div class="dropdown-menu" style="border: none;">
                            <div class="dropdownmenu-wrapper" style="padding: 10px; line-height: 28px;">
                                @if (auth()->guard('webusers')->check())
                                    <a class="dropdown-item" style="font-size: 14px;" href="{{ route('users.deshboard') }}">Dashboard</a>
                                @else
                                    <ul>
                                        <li><a class="dropdown-item" style="font-size: 14px;" href="{{ route('users.login') }}">Login</a></li>
                                        <li><a class="dropdown-item" style="font-size: 14px;" href="{{ route('users.register.index')}}" class="signup">Sign Up</a></li>
                                    </ul>
                                @endif
                            </div>
                        </div>
                    </a>
                    <button class="aside-btn"><i class="fa fa-bars"></i></button>
                    <button class="search-btn"><i class="fa fa-search"></i></button>
                    <div id="nav-search">
                        <form>
                            <input class="input" name="search" placeholder="Enter your search...">
                        </form>
                        <button class="nav-close search-close">
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div id="nav-bottom">
            <div class="container">
                <ul class="nav-menu">
                    <li><a href="{{ route('web.home')}}">Home</a></li>
                    @foreach($categories as $ct)
                    <li class="has-dropdown megamenu cat">
                        <a href="javascript:;" class="cat">{{$ct->name}}</a>
                        <div class="dropdown tab-dropdown">
                            <div class="row">
                                <div class="col-md-2">
                                    @foreach($ct->subCat as $scat)
                                    @php
                                        $cat_slug       = clean($ct->name.'-'.$ct->id);
                                        $sub_cat_slug   = clean($scat->subcategory_name.'-'.$scat->id);
                                    @endphp
                                    <ul class="tab-nav">
                                        <li class="">
                                            <a href="{{ route('blog.categories', [$cat_slug, $sub_cat_slug]) }}">
                                                {{ $scat->subcategory_name }}
                                            </a>
                                        </li>
                                        <!-- <li><a data-toggle="tab" href="#tab2">Fashion</a></li>
                                        <li><a data-toggle="tab" href="#tab1">Health</a></li>
                                        <li><a data-toggle="tab" href="#tab2">Travel</a></li> -->
                                    </ul>
                                    @endforeach
                                </div>
                                
                                <div class="col-md-10">
                                    <div class="dropdown-body tab-content">

                                        <div id="tab1" class="tab-pane fade in active">
                                            <div class="row">

                                                @foreach($ct->details as $dt)
                                                @if($loop->iteration > 3) @break @endif
                                                <div class="col-md-4">
                                                    <div class="post post-sm">
                                                        <a class="post-img" href="{{ route('blog.details', [clean($dt->heading.'-'.$dt->post_id)]) }}">
                                                            <img src="{{ asset('upload/details/'.$dt->image) }}" alt="{{ $dt->image }}" width="100%" height="150">
                                                        </a>
                                                        <div class="post-body">
                                                            <div class="post-category">
                                                                <a href="javascript:;">{{$dt->cat->name}}, {{ $dt->sub_category->subcategory_name }}</a>
                                                            </div>
                                                            <h3 class="post-title title-sm">
                                                                <a href="{{ route('blog.details', [clean($dt->heading.'-'.$dt->post_id)]) }}">
                                                                    {!! substr(strip_tags($dt->heading), 0, 50) !!} ...
                                                                </a>
                                                            </h3>
                                                            <ul class="post-meta">
                                                                <li><a href="javascript:;">By - {{$dt->user->username}}</a></li>
                                                                <li>{{ date('d-M-Y', strtotime($dt->date)) }}</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach

                    <!-- <li><a href="">Sign In</a></li>
                    <li><a href="">Sign Up</a></li> -->
                    <!-- <li><a href="#login-popup" data-toggle="modal">Login</a></li> -->
                    {{--@if (auth()->guard('webusers')->check())
                    <li><a href="{{ route('users.post')}}">Users Post</a></li>
                    @else
                    <li><a href="{{ route('users.login') }}">Users Post</a></li>
                    @endif--}}
                </ul>
            </div>
        </div>

        <div id="nav-aside">
            <ul class="nav-aside-menu">
                <li><a href="{{ route('web.home')}}">Home</a></li>
                <li class="has-dropdown"><a>Categories</a>
                    @foreach($categories as $ct)
                    <ul class="dropdown">
                        <li class="has-dropdown"><a href="#">{{$ct->name}}</a>
                            @foreach($ct->subCat as $sct)
                            @php
                                $cat_slug       = clean($ct->name.'-'.$ct->id);
                                $sub_cat_slug   = clean($sct->subcategory_name.'-'.$sct->id);
                            @endphp
                            <ul class="dropdown">
                                <li class="" style="color: #ffff; line-height: 40px; ">
                                    <a href="{{ route('blog.categories', [$cat_slug, $sub_cat_slug]) }}">
                                        {{$sct->subcategory_name}}
                                    </a>
                                </li>
                            </ul>
                            @endforeach
                        </li>
                    </ul>
                    @endforeach
                </li>
                <li><a href="javascript:;">About Us</a></li>
                <li><a href="javascript:;">Contacts</a></li>
                <li><a href="#">Advertise</a></li>
            </ul>
            <button class="nav-close nav-aside-close"><span></span></button>
        </div>
    </div>
</header>