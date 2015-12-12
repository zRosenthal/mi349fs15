@extends('layouts.master')
@section('content')
    <h1>Food Gallery</h1>
    <section class="img-slider">
        <img id="img-holder" src="{{asset('/img/0.jpg')}}">
        <br>
        <div class="buttons">
            <button id="previous" onclick="iterImg(-1);return false;" disabled>Previous</button>
            <button id="next" onclick="iterImg(1); return false;">Next</button>
        </div>
    </section>

@endsection
@section('js')
    <script src="{{asset('/js/slider.js')}}"></script>
@endsection
