@extends('layouts.master')
@section('content')
    <h1>Recipe Links</h1>
    <section class="border">
        <h2>Below is a list of links to my favorite recipe resources</h2>
        <ul class="links">
            <li>
                <a href="http://allrecipes.com/">- All Recipes</a>
            </li>

            <li>
                <a href="http://www.foodnetwork.com/">- Food Network</a>
            </li>

            <li>
                <a href="http://www.food.com/">- Food.</a>
            </li>

            <li>
                <a href="http://www.simplyrecipes.com/">- Simply Recipes</a>
            </li>
            <li>
                <a href="http://www.cooks.com/">- Cooks</a>
            </li>

            <li>
                <a href="http://www.eatingwell.com/">- Eating Well</a>
            </li>
            <li>
                <a href="http://www.bettycrocker.com">- Betty Crocker</a>
            </li>
        </ul>
        <div class="recipe-img">
            <img src="{{asset('/img/link.jpg')}}">
        </div>
    </section>


@endsection
@section('js')
    <script src="{{asset('/js/slider.js')}}"></script>
@endsection
