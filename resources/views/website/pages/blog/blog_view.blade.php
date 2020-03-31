@extends('website.layout')
@section('content')
@include('website.partials.post_thumb')
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2 class="title">Recent posts</h2>
                        </div>
                    </div>

                    @foreach ($view as $key => $v)
                    <div class="col-md-6">
                        <div class="post">
                            <a class="post-img" href="{{ route('blog.details', [clean($v->heading.'-'.$v->post_id)]) }}">
                                <img src="{{ asset('upload/details/'.$v->image) }}" height="200" alt="">
                            </a>
                            <div class="post-body">
                                <div class="post-category">
                                    <a href="javascript:;" id="" value="">{{ $v->cat->name }}, {{ $v->sub_category->subcategory_name }}</a>
                                </div>
                                <h3 class="post-title">
                                    <a href="{{ route('blog.details', [clean($v->heading.'-'.$v->post_id)]) }}" id="" class="blog">{!! substr(strip_tags($v->heading), 0, 50) !!} ...</a>
                                </h3>
                                <ul class="post-meta">
                                    <li><a href="javascript:;">By - {{ $v->user->username }}</a></li>
                                    <li>{{ date('d-M-Y', strtotime($v->date)) }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <div class="clearfix visible-md visible-lg"></div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="aside-widget text-center">
                    <a href="#" style="display: inline-block;margin: auto;">
                        <img class="img-responsive" src="{{ asset('assets/website/img/ad-3.jpg') }}" alt="">
                    </a>
                </div>

                <div class="aside-widget">
                    <div class="section-title">
                        <h2 class="title">Social Media</h2>
                    </div>
                    <div class="social-widget">
                        <ul>
                            <li>
                                <a href="#" class="social-facebook">
                                    <i class="fa fa-facebook"></i>
                                    <span>21.2K<br>Followers</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="social-twitter">
                                    <i class="fa fa-twitter"></i>
                                    <span>10.2K<br>Followers</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="social-google-plus">
                                    <i class="fa fa-google-plus"></i>
                                    <span>5K<br>Followers</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="aside-widget">
                    <div class="section-title">
                        <h2 class="title">Categories</h2>
                    </div>
                    <div class="category-widget">

                        @foreach($categories as $key =>$cat)
                        
                        <ul>
                            <li><a href="#">{{$cat->name}} <span>123</span></a></li>
                            <!-- <li><a href="#">Fashion <span>230</span></a></li>
                            <li><a href="#">Technology <span>40</span></a></li>
                            <li><a href="#">Travel <span>38</span></a></li>
                            <li><a href="#">Health <span>24</span></a></li> -->
                        </ul>
                        @endforeach
                    </div>
                </div>

                <div class="aside-widget">
                    <div class="section-title">
                        <h2 class="title">Newsletter</h2>
                    </div>
                    <div class="newsletter-widget">
                        <form>
                            <p>Nec feugiat nisl pretium fusce id velit ut tortor pretium.</p>
                            <input class="input" name="newsletter" placeholder="Enter Your Email">
                            <button class="primary-button">Subscribe</button>
                        </form>
                    </div>
                </div>

                <div class="aside-widget">
                    <div class="section-title">
                        <h2 class="title">Popular Posts</h2>
                    </div>

                    <div class="post post-widget">
                        <a class="post-img" href="javascript:;"><img src="{{ asset('assets/website/img/widget-3.jpg') }}" alt=""></a>
                        <div class="post-body">
                            <div class="post-category">
                                <a href="javascript:;">Lifestyle</a>
                            </div>
                            <h3 class="post-title"><a href="javascript:;">Ne bonorum praesent cum, labitur persequeris definitionem quo cu?</a></h3>
                        </div>
                    </div>

                    <div class="post post-widget">
                        <a class="post-img" href="javascript:;"><img src="{{ asset('assets/website/img/widget-2.jpg') }}" alt=""></a>
                        <div class="post-body">
                            <div class="post-category">
                                <a href="javascript:;">Technology</a>
                                <a href="javascript:;">Lifestyle</a>
                            </div>
                            <h3 class="post-title"><a href="javascript:;">Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.</a></h3>
                        </div>
                    </div>

                    <div class="post post-widget">
                        <a class="post-img" href="javascript:;"><img src="{{ asset('assets/website/img/widget-4.jpg') }}" alt=""></a>
                        <div class="post-body">
                            <div class="post-category">
                                <a href="javascript:;">Health</a>
                            </div>
                            <h3 class="post-title"><a href="javascript:;">Postea senserit id eos, vivendo periculis ei qui</a></h3>
                        </div>
                    </div>

                    <div class="post post-widget">
                        <a class="post-img" href="javascript:;"><img src="{{ asset('assets/website/img/widget-5.jpg') }}" alt=""></a>
                        <div class="post-body">
                            <div class="post-category">
                                <a href="javascript:;">Health</a>
                                <a href="javascript:;">Lifestyle</a>
                            </div>
                            <h3 class="post-title"><a href="javascript:;">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-row text-center">
                <a href="#" style="display: inline-block;margin: auto;">
                    <img class="img-responsive" src="{{ asset('assets/website/img/ad-2.jpg') }}" alt="">
                </a>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            @foreach($posts as $key =>$v)
            <div class="col-md-4">
                <div class="section-title">
                    <h2 class="title">{{ $v->name }}</h2>
                </div>
                @foreach($v->details as $cd)
                @if($loop->iteration > 1) @break @endif
                <div class="post">
                    <a class="post-img" href="{{ route('blog.details', [clean($cd->heading.'-'.$cd->post_id)]) }}">
                        <img src="{{ asset('upload/details/'.$cd->image) }}" alt="{{ $cd->image }}" width="100%" height="200">
                    </a>
                    <div class="post-body">
                        <div class="post-category">
                            <!-- <a href="javascript:;">Fashion</a> -->
                            <a href="javascript:;">{{$cd->sub_category->subcategory_name}}</a>
                        </div>
                        <h3 class="post-title title-sm">
                            <a href="{{ route('blog.details', [clean($cd->heading.'-'.$cd->post_id)]) }}">
                                {!! substr(strip_tags($cd->heading), 0, 50) !!} ...
                            </a>
                        </h3>
                        <ul class="post-meta">
                            <li><a href="javascript:;">By - {{$cd->user->username}}</a></li>
                            <li>{{ date('d-M-Y', strtotime($cd->date)) }}</li>
                        </ul>
                    </div>
                </div>
                @endforeach
            </div>
            @endforeach
        </div>

        <div class="row">
            @foreach($cposts as $cv)
            <div class="col-md-4">
                <div class="post post-widget">
                    <a class="post-img pimg" href="{{ route('blog.details', [clean($cv->heading.'-'.$cv->post_id)]) }}">
                        <img src="{{ asset('upload/details/'.$cv->image) }}" alt="{{ $cv->image }}" width="100%" height="200">
                    </a>
                    <div class="post-body">
                        <div class="post-category">
                            <a href="javascript:;">{{$cv->cat->name}}</a>
                            <a href="javascript:;">{{$cv->sub_category->subcategory_name}}</a>
                        </div>
                        <h3 class="post-title">
                            <a href="{{ route('blog.details', [clean($cv->heading.'-'.$cv->post_id)]) }}">
                                {!! substr(strip_tags($cv->heading), 0, 50) !!} ...
                            </a>
                        </h3>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- <div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="aside-widget">
                    <div class="section-title">
                        <h2 class="title">Instagram</h2>
                    </div>
                    <div class="galery-widget">
                        <ul>
                            <li>
                                <a href="#"><img src="{{ asset('assets/website/img/galery-1.jpg') }}" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset('assets/website/img/galery-2.jpg') }}" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset('assets/website/img/galery-3.jpg') }}" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset('assets/website/img/galery-4.jpg') }}" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset('assets/website/img/galery-5.jpg') }}" alt=""></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{ asset('assets/website/img/galery-6.jpg') }}" alt=""></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="aside-widget text-center">
                    <a href="#" style="display: inline-block;margin: auto;">
                        <img class="img-responsive" src="{{ asset('assets/website/img/ad-1.jpg') }}" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection