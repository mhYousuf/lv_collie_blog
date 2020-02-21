@extends('website.layout')
@section('content')
<div class="section">
    <div class="container">
        <div id="hot-post" class="row hot-post">
            <div class="col-md-8 hot-post-left">
                <div class="post post-thumb">
                    <a class="post-img" href="{{ route('blog.details')}}"><img src="{{ asset('assets/website/img/hot-post-1.jpg')}}" alt=""></a>
                    <div class="post-body">
                        <div class="post-category">
                            <a href="category.html">Lifestyle</a>
                        </div>
                        <h3 class="post-title title-lg"><a href="{{ route('blog.details')}}">Postea senserit id eos, vivendo periculis ei qui</a></h3>
                        <ul class="post-meta">
                            <li><a href="author.html">John Doe</a></li>
                            <li>20 April 2018</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 hot-post-right">
                <div class="post post-thumb">
                    <a class="post-img" href="{{ route('blog.details')}}"><img src="{{ asset('assets/website/img/hot-post-2.jpg')}}" alt=""></a>
                    <div class="post-body">
                        <div class="post-category">
                            <a href="category.html">Lifestyle</a>
                        </div>
                        <h3 class="post-title"><a href="{{ route('blog.details')}}">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
                        <ul class="post-meta">
                            <li><a href="author.html">John Doe</a></li>
                            <li>20 April 2018</li>
                        </ul>
                    </div>
                </div>

                <div class="post post-thumb">
                    <a class="post-img" href="{{ route('blog.details')}}"><img src="{{ asset('assets/website/img/hot-post-3.jpg')}}" alt=""></a>
                    <div class="post-body">
                        <div class="post-category">
                            <a href="category.html">Fashion</a>
                            <a href="category.html">Lifestyle</a>
                        </div>
                        <h3 class="post-title"><a href="{{ route('blog.details')}}">Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.</a></h3>
                        <ul class="post-meta">
                            <li><a href="author.html">John Doe</a></li>
                            <li>20 April 2018</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

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

                        <div class="col-md-6">
                            <div class="post">
                                <a class="post-img" href="{{ route('blog.details')}}"><img src="{{ asset('assets/website/img/post-1.jpg') }}" alt=""></a>
                                <div class="post-body">
                                    <div class="post-category">
                                        <a href="category.html">Travel</a>
                                    </div>
                                    <h3 class="post-title"><a href="{{ route('blog.details')}}">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
                                    <ul class="post-meta">
                                        <li><a href="author.html">John Doe</a></li>
                                        <li>20 April 2018</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="post">
                                <a class="post-img" href="{{ route('blog.details')}}"><img src="{{ asset('assets/website/img/post-2.jpg') }}" alt=""></a>
                                <div class="post-body">
                                    <div class="post-category">
                                        <a href="category.html">Technology</a>
                                        <a href="category.html">Lifestyle</a>
                                    </div>
                                    <h3 class="post-title"><a href="{{ route('blog.details')}}">Ne bonorum praesent cum, labitur persequeris definitionem quo cu?</a></h3>
                                    <ul class="post-meta">
                                        <li><a href="author.html">John Doe</a></li>
                                        <li>20 April 2018</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="clearfix visible-md visible-lg"></div>

                        <div class="col-md-6">
                            <div class="post">
                                <a class="post-img" href="{{ route('blog.details')}}"><img src="{{ asset('assets/website/img/post-4.jpg') }}" alt=""></a>
                                <div class="post-body">
                                    <div class="post-category">
                                        <a href="category.html">Health</a>
                                    </div>
                                    <h3 class="post-title"><a href="{{ route('blog.details')}}">Postea senserit id eos, vivendo periculis ei qui</a></h3>
                                    <ul class="post-meta">
                                        <li><a href="author.html">John Doe</a></li>
                                        <li>20 April 2018</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="post">
                                <a class="post-img" href="{{ route('blog.details')}}"><img src="{{ asset('assets/website/img/post-7.jpg') }}" alt=""></a>
                                <div class="post-body">
                                    <div class="post-category">
                                        <a href="category.html">Health</a>
                                        <a href="category.html">Lifestyle</a>
                                    </div>
                                    <h3 class="post-title"><a href="{{ route('blog.details')}}">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
                                    <ul class="post-meta">
                                        <li><a href="author.html">John Doe</a></li>
                                        <li>20 April 2018</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h2 class="title">Lifestyle</h2>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="post post-sm">
                                <a class="post-img" href="{{ route('blog.details')}}"><img src="{{ asset('assets/website/img/post-9.jpg') }}" alt=""></a>
                                <div class="post-body">
                                    <div class="post-category">
                                        <a href="category.html">Lifestyle</a>
                                    </div>
                                    <h3 class="post-title title-sm"><a href="{{ route('blog.details')}}">Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.</a></h3>
                                    <ul class="post-meta">
                                        <li><a href="author.html">John Doe</a></li>
                                        <li>20 April 2018</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="post post-sm">
                                <a class="post-img" href="{{ route('blog.details')}}"><img src="{{ asset('assets/website/img/post-8.jpg') }}" alt=""></a>
                                <div class="post-body">
                                    <div class="post-category">
                                        <a href="category.html">Fashion</a>
                                        <a href="category.html">Lifestyle</a>
                                    </div>
                                    <h3 class="post-title title-sm"><a href="{{ route('blog.details')}}">Postea senserit id eos, vivendo periculis ei qui</a></h3>
                                    <ul class="post-meta">
                                        <li><a href="author.html">John Doe</a></li>
                                        <li>20 April 2018</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="post post-sm">
                                <a class="post-img" href="{{ route('blog.details')}}"><img src="{{ asset('assets/website/img/post-11.jpg') }}" alt=""></a>
                                <div class="post-body">
                                    <div class="post-category">
                                        <a href="category.html">Technology</a>
                                    </div>
                                    <h3 class="post-title title-sm"><a href="{{ route('blog.details')}}">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
                                    <ul class="post-meta">
                                        <li><a href="author.html">John Doe</a></li>
                                        <li>20 April 2018</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h2 class="title">Fashion & Travel</h2>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="post post-sm">
                                <a class="post-img" href="{{ route('blog.details')}}"><img src="{{ asset('assets/website/img/post-10.jpg') }}" alt=""></a>
                                <div class="post-body">
                                    <div class="post-category">
                                        <a href="category.html">Travel</a>
                                    </div>
                                    <h3 class="post-title title-sm"><a href="{{ route('blog.details')}}">Ne bonorum praesent cum, labitur persequeris definitionem quo cu?</a></h3>
                                    <ul class="post-meta">
                                        <li><a href="author.html">John Doe</a></li>
                                        <li>20 April 2018</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="post post-sm">
                                <a class="post-img" href="{{ route('blog.details')}}"><img src="{{ asset('assets/website/img/post-12.jpg') }}" alt=""></a>
                                <div class="post-body">
                                    <div class="post-category">
                                        <a href="category.html">Lifestyle</a>
                                    </div>
                                    <h3 class="post-title title-sm"><a href="{{ route('blog.details')}}">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
                                    <ul class="post-meta">
                                        <li><a href="author.html">John Doe</a></li>
                                        <li>20 April 2018</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="post post-sm">
                                <a class="post-img" href="{{ route('blog.details')}}"><img src="{{ asset('assets/website/img/post-13.jpg') }}" alt=""></a>
                                <div class="post-body">
                                    <div class="post-category">
                                        <a href="category.html">Travel</a>
                                        <a href="category.html">Lifestyle</a>
                                    </div>
                                    <h3 class="post-title title-sm"><a href="{{ route('blog.details')}}">Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.</a></h3>
                                    <ul class="post-meta">
                                        <li><a href="author.html">John Doe</a></li>
                                        <li>20 April 2018</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h2 class="title">Technology & Health</h2>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="post post-sm">
                                <a class="post-img" href="{{ route('blog.details')}}"><img src="{{ asset('assets/website/img/post-4.jpg') }}" alt=""></a>
                                <div class="post-body">
                                    <div class="post-category">
                                        <a href="category.html">Health</a>
                                    </div>
                                    <h3 class="post-title title-sm"><a href="{{ route('blog.details')}}">Postea senserit id eos, vivendo periculis ei qui</a></h3>
                                    <ul class="post-meta">
                                        <li><a href="author.html">John Doe</a></li>
                                        <li>20 April 2018</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="post post-sm">
                                <a class="post-img" href="{{ route('blog.details')}}"><img src="{{ asset('assets/website/img/post-1.jpg') }}" alt=""></a>
                                <div class="post-body">
                                    <div class="post-category">
                                        <a href="category.html">Travel</a>
                                    </div>
                                    <h3 class="post-title title-sm"><a href="{{ route('blog.details')}}">Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.</a></h3>
                                    <ul class="post-meta">
                                        <li><a href="author.html">John Doe</a></li>
                                        <li>20 April 2018</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="post post-sm">
                                <a class="post-img" href="{{ route('blog.details')}}"><img src="{{ asset('assets/website/img/post-3.jpg') }}" alt=""></a>
                                <div class="post-body">
                                    <div class="post-category">
                                        <a href="category.html">Lifestyle</a>
                                    </div>
                                    <h3 class="post-title title-sm"><a href="{{ route('blog.details')}}">Ne bonorum praesent cum, labitur persequeris definitionem quo cu?</a></h3>
                                    <ul class="post-meta">
                                        <li><a href="author.html">John Doe</a></li>
                                        <li>20 April 2018</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

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
                            <ul>
                                <li><a href="#">Lifestyle <span>451</span></a></li>
                                <li><a href="#">Fashion <span>230</span></a></li>
                                <li><a href="#">Technology <span>40</span></a></li>
                                <li><a href="#">Travel <span>38</span></a></li>
                                <li><a href="#">Health <span>24</span></a></li>
                            </ul>
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
                            <a class="post-img" href="{{ route('blog.details')}}"><img src="{{ asset('assets/website/img/widget-3.jpg') }}" alt=""></a>
                            <div class="post-body">
                                <div class="post-category">
                                    <a href="category.html">Lifestyle</a>
                                </div>
                                <h3 class="post-title"><a href="{{ route('blog.details')}}">Ne bonorum praesent cum, labitur persequeris definitionem quo cu?</a></h3>
                            </div>
                        </div>

                        <div class="post post-widget">
                            <a class="post-img" href="{{ route('blog.details')}}"><img src="{{ asset('assets/website/img/widget-2.jpg') }}" alt=""></a>
                            <div class="post-body">
                                <div class="post-category">
                                    <a href="category.html">Technology</a>
                                    <a href="category.html">Lifestyle</a>
                                </div>
                                <h3 class="post-title"><a href="{{ route('blog.details')}}">Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.</a></h3>
                            </div>
                        </div>

                        <div class="post post-widget">
                            <a class="post-img" href="{{ route('blog.details')}}"><img src="{{ asset('assets/website/img/widget-4.jpg') }}" alt=""></a>
                            <div class="post-body">
                                <div class="post-category">
                                    <a href="category.html">Health</a>
                                </div>
                                <h3 class="post-title"><a href="{{ route('blog.details')}}">Postea senserit id eos, vivendo periculis ei qui</a></h3>
                            </div>
                        </div>

                        <div class="post post-widget">
                            <a class="post-img" href="{{ route('blog.details')}}"><img src="{{ asset('assets/website/img/widget-5.jpg') }}" alt=""></a>
                            <div class="post-body">
                                <div class="post-category">
                                    <a href="category.html">Health</a>
                                    <a href="category.html">Lifestyle</a>
                                </div>
                                <h3 class="post-title"><a href="{{ route('blog.details')}}">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
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
                <div class="col-md-4">
                    <div class="section-title">
                        <h2 class="title">Lifestyle</h2>
                    </div>

                    <div class="post">
                        <a class="post-img" href="{{ route('blog.details')}}"><img src="{{ asset('assets/website/img/post-6.jpg') }}" alt=""></a>
                        <div class="post-body">
                            <div class="post-category">
                                <a href="category.html">Fashion</a>
                                <a href="category.html">Lifestyle</a>
                            </div>
                            <h3 class="post-title"><a href="{{ route('blog.details')}}">Postea senserit id eos, vivendo periculis ei qui</a></h3>
                            <ul class="post-meta">
                                <li><a href="author.html">John Doe</a></li>
                                <li>20 April 2018</li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="section-title">
                        <h2 class="title">Fashion</h2>
                    </div>

                    <div class="post">
                        <a class="post-img" href="{{ route('blog.details')}}"><img src="{{ asset('assets/website/img/post-5.jpg') }}" alt=""></a>
                        <div class="post-body">
                            <div class="post-category">
                                <a href="category.html">Lifestyle</a>
                            </div>
                            <h3 class="post-title"><a href="{{ route('blog.details')}}">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
                            <ul class="post-meta">
                                <li><a href="author.html">John Doe</a></li>
                                <li>20 April 2018</li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="section-title">
                        <h2 class="title">Health</h2>
                    </div>

                    <div class="post">
                        <a class="post-img" href="{{ route('blog.details')}}"><img src="{{ asset('assets/website/img/post-9.jpg') }}" alt=""></a>
                        <div class="post-body">
                            <div class="post-category">
                                <a href="category.html">Lifestyle</a>
                            </div>
                            <h3 class="post-title"><a href="{{ route('blog.details')}}">Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.</a></h3>
                            <ul class="post-meta">
                                <li><a href="author.html">John Doe</a></li>
                                <li>20 April 2018</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-4">

                    <div class="post post-widget">
                        <a class="post-img" href="{{ route('blog.details')}}"><img src="{{ asset('assets/website/img/widget-1.jpg') }}" alt=""></a>
                        <div class="post-body">
                            <div class="post-category">
                                <a href="category.html">Travel</a>
                            </div>
                            <h3 class="post-title"><a href="{{ route('blog.details')}}">Postea senserit id eos, vivendo periculis ei qui</a></h3>
                        </div>
                    </div>

                    <div class="post post-widget">
                        <a class="post-img" href="{{ route('blog.details')}}"><img src="{{ asset('assets/website/img/widget-2.jpg') }}" alt=""></a>
                        <div class="post-body">
                            <div class="post-category">
                                <a href="category.html">Technology</a>
                                <a href="category.html">Lifestyle</a>
                            </div>
                            <h3 class="post-title"><a href="{{ route('blog.details')}}">Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.</a></h3>
                        </div>
                    </div>

                    <div class="post post-widget">
                        <a class="post-img" href="{{ route('blog.details')}}"><img src="{{ asset('assets/website/img/widget-3.jpg') }}" alt=""></a>
                        <div class="post-body">
                            <div class="post-category">
                                <a href="category.html">Lifestyle</a>
                            </div>
                            <h3 class="post-title"><a href="{{ route('blog.details')}}">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">

                    <div class="post post-widget">
                        <a class="post-img" href="{{ route('blog.details')}}"><img src="{{ asset('assets/website/img/widget-4.jpg') }}" alt=""></a>
                        <div class="post-body">
                            <div class="post-category">
                                <a href="category.html">Health</a>
                            </div>
                            <h3 class="post-title"><a href="{{ route('blog.details')}}">Ne bonorum praesent cum, labitur persequeris definitionem quo cu?</a></h3>
                        </div>
                    </div>

                    <div class="post post-widget">
                        <a class="post-img" href="{{ route('blog.details')}}"><img src="{{ asset('assets/website/img/widget-5.jpg') }}" alt=""></a>
                        <div class="post-body">
                            <div class="post-category">
                                <a href="category.html">Health</a>
                                <a href="category.html">Lifestyle</a>
                            </div>
                            <h3 class="post-title"><a href="{{ route('blog.details')}}">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
                        </div>
                    </div>

                    <div class="post post-widget">
                        <a class="post-img" href="{{ route('blog.details')}}"><img src="{{ asset('assets/website/img/widget-6.jpg') }}" alt=""></a>
                        <div class="post-body">
                            <div class="post-category">
                                <a href="category.html">Fashion</a>
                                <a href="category.html">Lifestyle</a>
                            </div>
                            <h3 class="post-title"><a href="{{ route('blog.details')}}">Postea senserit id eos, vivendo periculis ei qui</a></h3>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">

                    <div class="post post-widget">
                        <a class="post-img" href="{{ route('blog.details')}}"><img src="{{ asset('assets/website/img/widget-8.jpg') }}" alt=""></a>
                        <div class="post-body">
                            <div class="post-category">
                                <a href="category.html">Travel</a>
                            </div>
                            <h3 class="post-title"><a href="{{ route('blog.details')}}">Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.</a></h3>
                        </div>
                    </div>

                    <div class="post post-widget">
                        <a class="post-img" href="{{ route('blog.details')}}"><img src="{{ asset('assets/website/img/widget-9.jpg') }}" alt=""></a>
                        <div class="post-body">
                            <div class="post-category">
                                <a href="category.html">Technology</a>
                            </div>
                            <h3 class="post-title"><a href="{{ route('blog.details')}}">Postea senserit id eos, vivendo periculis ei qui</a></h3>
                        </div>
                    </div>

                    <div class="post post-widget">
                        <a class="post-img" href="{{ route('blog.details')}}"><img src="{{ asset('assets/website/img/widget-10.jpg') }}" alt=""></a>
                        <div class="post-body">
                            <div class="post-category">
                                <a href="category.html">Lifestyle</a>
                            </div>
                            <h3 class="post-title"><a href="{{ route('blog.details')}}">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="post post-row">
                        <a class="post-img" href="{{ route('blog.details')}}"><img src="{{ asset('assets/website/img/post-13.jpg') }}" alt=""></a>
                        <div class="post-body">
                            <div class="post-category">
                                <a href="category.html">Travel</a>
                                <a href="category.html">Lifestyle</a>
                            </div>
                            <h3 class="post-title"><a href="{{ route('blog.details')}}">Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.</a></h3>
                            <ul class="post-meta">
                                <li><a href="author.html">John Doe</a></li>
                                <li>20 April 2018</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
                        </div>
                    </div>

                    <div class="post post-row">
                        <a class="post-img" href="{{ route('blog.details')}}"><img src="{{ asset('assets/website/img/post-1.jpg') }}" alt=""></a>
                        <div class="post-body">
                            <div class="post-category">
                                <a href="category.html">Travel</a>
                            </div>
                            <h3 class="post-title"><a href="{{ route('blog.details')}}">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
                            <ul class="post-meta">
                                <li><a href="author.html">John Doe</a></li>
                                <li>20 April 2018</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
                        </div>
                    </div>

                    <div class="post post-row">
                        <a class="post-img" href="{{ route('blog.details')}}"><img src="{{ asset('assets/website/img/post-5.jpg') }}" alt=""></a>
                        <div class="post-body">
                            <div class="post-category">
                                <a href="category.html">Lifestyle</a>
                            </div>
                            <h3 class="post-title"><a href="{{ route('blog.details')}}">Postea senserit id eos, vivendo periculis ei qui</a></h3>
                            <ul class="post-meta">
                                <li><a href="author.html">John Doe</a></li>
                                <li>20 April 2018</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
                        </div>
                    </div>

                    <div class="post post-row">
                        <a class="post-img" href="{{ route('blog.details')}}"><img src="{{ asset('assets/website/img/post-6.jpg') }}" alt=""></a>
                        <div class="post-body">
                            <div class="post-category">
                                <a href="category.html">Fashion</a>
                                <a href="category.html">Lifestyle</a>
                            </div>
                            <h3 class="post-title"><a href="{{ route('blog.details')}}">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
                            <ul class="post-meta">
                                <li><a href="author.html">John Doe</a></li>
                                <li>20 April 2018</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
                        </div>
                    </div>

                    <div class="post post-row">
                        <a class="post-img" href="{{ route('blog.details')}}"><img src="{{ asset('assets/website/img/post-7.jpg') }}" alt=""></a>
                        <div class="post-body">
                            <div class="post-category">
                                <a href="category.html">Health</a>
                                <a href="category.html">Lifestyle</a>
                            </div>
                            <h3 class="post-title"><a href="{{ route('blog.details')}}">Ne bonorum praesent cum, labitur persequeris definitionem quo cu?</a></h3>
                            <ul class="post-meta">
                                <li><a href="author.html">John Doe</a></li>
                                <li>20 April 2018</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
                        </div>
                    </div>

                    <div class="section-row loadmore text-center">
                        <a href="#" class="primary-button">Load More</a>
                    </div>
                </div>
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
    </div>
@endsection