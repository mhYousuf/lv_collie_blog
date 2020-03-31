<div class="section">
    <div class="container">
        <div id="hot-post" class="row hot-post">
            @foreach($post as $v)
            @if ($loop->first)
            <div class="col-md-8 hot-post-left">
                <div class="post post-thumb">
                    <a class="post-img" href="{{ route('blog.details', [clean($v->heading.'-'.$v->post_id)]) }}">
                        <img src="{{ asset('upload/details/'.$v->image) }}" alt="">
                    </a>
                    <div class="post-body">
                        <div class="post-category">
                            <a href="javascript:;">{{ $v->cat->name }}, {{ $v->sub_category->subcategory_name }}</a>
                        </div>
                        <h3 class="post-title title-lg">
                            <a href="{{ route('blog.details', [clean($v->heading.'-'.$v->post_id)]) }}">
                                {!! substr(strip_tags($v->heading), 0, 50) !!} ...
                            </a>
                        </h3>
                        <ul class="post-meta">
                            <li><a href="javascript:;">By - John Doe</a></li>
                            <li>{{ date('d-M-Y', strtotime($v->date)) }}</li>
                        </ul>
                    </div>
                </div>
            </div>
            @endif
            @endforeach

            @foreach($post as $v)
            @if (!$loop->first)
            @if($loop->iteration > 3) @break @endif
            <div class="col-md-4 hot-post-right">
                <div class="post post-thumb">
                    <a class="post-img" href="javascript:;">
                        <img src="{{ asset('upload/details/'.$v->image) }}" alt="" width="80" height="250">
                    </a>
                    <div class="post-body">
                        <div class="post-category">
                            <a href="javascript:;">{{ $v->cat->name }}, {{ $v->sub_category->subcategory_name }}</a>
                        </div>
                        <h3 class="post-title">
                            <a href="{{ route('blog.details', [clean($v->heading.'-'.$v->post_id)]) }}">
                                {!! substr(strip_tags($v->heading), 0, 50) !!} ...
                            </a>
                        </h3>
                        <ul class="post-meta">
                            <li><a href="javascript:;">By - John Doe</a></li>
                            <li>{{ date('d-M-Y', strtotime($v->date)) }}</li>
                        </ul>
                    </div>
                </div>

                {{--<div class="post post-thumb">
                    <a class="post-img" href="javascript:;"><img src="{{ asset('upload/details/'.$v->image) }}" alt=""></a>
                    <div class="post-body">
                        <div class="post-category">
                            <a href="javascript:;">Fashion</a>
                            <a href="javascript:;">{{ $v->cat->name }}, {{ $v->sub_category->name }}</a>
                        </div>
                        <h3 class="post-title"><a href="javascript:;">Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.</a></h3>
                        <ul class="post-meta">
                            <li><a href="author.html">By - John Doe</a></li>
                            <li>20 April 2018</li>
                        </ul>
                    </div>
                </div>--}}
            </div>
            @endif
            @endforeach

        </div>
    </div>
</div>