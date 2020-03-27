<div class="col-md-10">
    <div class="dropdown-body tab-content">

        <div id="tab1" class="tab-pane fade in active">
            <div class="row">
                @foreach($h_details as $chd)
                @foreach($chd->details as $hd)
                <div class="col-md-4">
                    <div class="post post-sm">
                        <a class="post-img" href="{{ route('blog.details', [clean($hd->name.'-'.$hd->category_id)]) }}">
                            <img src="{{ asset('upload/details/'.$hd->image) }}" alt="">
                        </a>
                        <div class="post-body">
                            <div class="post-category">
                                <a href="javascript:;">{{$chd->name}}</a>
                            </div>
                            <h3 class="post-title title-sm">
                                <a href="{{ route('blog.details', [clean($hd->name.'-'.$hd->category_id)]) }}">
                                    {{ $hd->heading }}
                                </a>
                            </h3>
                            <ul class="post-meta">
                                <li><a href="javascript:;">{{ $hd->name }}</a></li>
                                <li>{{ date('d-M-Y', strtotime($hd->date)) }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
                @endforeach
            </div>
        </div>
    </div>
</div>