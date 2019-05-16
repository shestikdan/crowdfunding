@extends('layouts.app')

@section('content')
    <section class="startup1">
        <img class="yula" src="/assets/img/yula.png">
        <img class="twocirc" src="/assets/img/twocirc.png">
        <form action="{{ route('startup.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @if ($errors)
                <span role="alert">
                <strong>{{ $errors->first() }}</strong>
            </span>
            @endif
            <h1>Tell about your idea</h1>
            <label for="prodname">Title</label>
            <input placeholder="Enter title" type="text" name="title" id="prodname" value="{{ old('title') }}">
            <label for="deviz">Tagline</label>
            <input placeholder="Think up tagline..." type="text" name="tagline" id="deviz" value="{{ old('tagline') }}">
            <label for="deviz">Amount of money</label>
            <input placeholder="Amount of money" type="text" name="need_money" id="deviz" value="{{ old('need_money') }}">
            <label for="desc">Description</label>
            <textarea type="text" name="description" placeholder="Describe your project..." id="desc">{{ old('description') }}</textarea>
            <div class="picss">
                <div>
                    <label for="">Logo</label>
                    <upload-image-component name="logo"></upload-image-component>
                </div>
            </div>
            <button class="send">Send</button>
        </form>
    </section>
@endsection
