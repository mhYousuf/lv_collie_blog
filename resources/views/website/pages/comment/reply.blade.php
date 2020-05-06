@extends('website.layout')
@section('content')
<div class="col-md-12">
    <div class="section-row">
        <div class="section-title">
            <h3 class="title">Leave a reply</h3>
        </div>
        <div class="col-md-8" style="margin-top: 20px; margin-bottom: 10px; text-align: center;">
        <a href="" style="color: #fff;">view post</a>
        </div>
        <div class=" col-md-6 pull-center">
            <form class="post-reply" action="{{ route('comment.reply') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="input" type="text" name="name" id="name" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="input" type="email" name="email" id="email" placeholder="Email">
                        </div>
                    </div>
                    <!-- <div class="col-md-4">
                        <div class="form-group">
                            <input class="input" type="text" name="website" placeholder="Website">
                        </div>
                    </div> -->
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea class="input" name="message" id="message" placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button class="primary-button">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection