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
                <div class="aboutproject">
                    <div class="tind-battery">
                        <div class="innerr">
                            <img class="tind-battery-liquid" src="/assets/img/liquid1.svg">
                            <img class="tind-battery-liquid2" src="/assets/img/liquid2.svg">
                            <img class="tind-battery-liquid3" src="/assets/img/liquid3.svg">
                        </div>
                    </div>
                    <div class="aboutproject-inner">
                        <h1>About project</h1>
                        <p class="text1">{{ $startup->description }}</p>
                        <a class="neobutt">Пополнить</a>
                    </div>
                </div>
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
<style>
    @keyframes popup {
        0% {
            transform: translateX(0px);
        }
        100% {
            transform: translateX(-600px);
        }
    }
    @keyframes popup2 {
        0% {
            transform: translateX(0px);
        }
        100% {
            transform: translateX(-50px);
        }
    }
    @keyframes popup3 {
        0% {
            transform: translateX(0px);
        }
        100% {
            transform: translateX(-100px);
        }
    }
    html{
        font-size: 2vw;
    }
    .tind-battery{
        background: url('/assets/img/battery.svg');
        background-repeat: no-repeat;
        background-size: 100% 100%;
        margin-right: 0rem;
        padding: .5rem;
        display: grid;
    }
    .innerr{
        display: grid;
        position: relative;
        overflow: hidden;
        border-radius: 10px;
    }
    .tind-battery-button{
        background: linear-gradient(0deg, #FFFFFF, #FFFFFF), #23A4DD;
        border-radius: 5px;
        color: #23A4DD;
        font-family: Roboto;
        font-weight: 500;
        font-size: .5rem;
        text-decoration: none;
        display: grid;
        justify-items: center;
        align-items: center;
        height: 1rem;
        margin: 0 1rem;
        margin-top: 10rem;
        width: 70%;
        z-index: 5;
        position: absolute;
        left: 0;
    }
    .tind-battery-liquid{
        position: absolute;
        z-index: 1;
        align-self: end;
        height: 20rem;
        animation: popup 10s linear infinite alternate-reverse;
        width: 40rem;
        max-width: 30rem !important;
        top: -2rem;
    }
    .tind-battery-liquid2{
        position: absolute;
        z-index: 2;
        align-self: end;
        animation: popup3 8s linear infinite alternate-reverse;
        width: 30rem;
        max-width: 30rem !important;
        top: 2.5rem;
    }
    .tind-battery-liquid3{
        position: absolute;
        z-index: 3;
        align-self: end;
        animation: popup2 6s linear infinite alternate-reverse;
        width: 8rem;
        max-width: 30rem !important;
        top: 2rem;
    }
    .tind-battery-inner-text{
        position: absolute;
        display: grid;
        justify-items: center;
        width: 100%;
        margin-top: 5rem;
        color: #fff;
        z-index: 5;
        left: 0;
    }
    .tind-battery-inner-text p{
        font-size: .5rem !important;
        font-family: Roboto !important;
    }
    .tind-battery-inner-text h1{
        font-size: 1rem !important;
        font-family: Roboto;
    }
</style>