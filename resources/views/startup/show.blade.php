@extends('layouts.app')

@section('content')
    <div class="projectt">
        <section class="sect1">
            <div class="rightcol1">
                <div class="userinfo">
                    <img class="ava" src="/uploads/startup/logo/{{ $startup->logo }}" alt="">
                    <div class="nut">
                        <h1>{{ $startup->title }}</h1>
                        <p>{{ $startup->tagline }}</p>
                    </div>
                </div>
                <h1>About project</h1>
                <p class="text1">{{ $startup->description }}</p>
            </div>
            {{--<div class="othproj">--}}
                {{--<div class="search">--}}
                    {{--<form action="{{ route('startup.comment.store', $startup->id) }}" method="post">--}}
                        {{--@csrf--}}
                        {{--<img src="/assets/img/qatariq.png" alt="">--}}
                        {{--<input type="text" name="body" placeholder="Your comment should be here" id="">--}}
                        {{--<button>Post</button>--}}
                    {{--</form>--}}
                    {{--<div class="specdiv">--}}
                        {{--@foreach($comments as $comment)--}}
                            {{--<div class="specblock">--}}
                                {{--<div class="spectop">--}}
                                    {{--<img src="/uploads/profile/avatar/{{ $comment->creator->profile->avatar }}" height="50px" width="50px" alt="">--}}
                                    {{--<div class="namespan">--}}
                                        {{--<h3>{{ $comment->creator->profile->nickname }}</h3>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<p>{{ $comment->body }}</p>--}}
                            {{--</div>--}}
                        {{--@endforeach--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        </section>
<section class="sect2">

</section>
@endsection
