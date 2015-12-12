@extends('layouts.master')
@section('content')
    <h1>
        Zach's Food Bio
    </h1>
    <section class="border">
        <img class='bio-img' src="{{asset('/img/chef.png')}}">
        <ul class="bio-list">
            <li><strong>Frying Hand:</strong> Right</li>
            <li><strong>Preferred Cooktop:</strong> Open flame</li>
            <li><strong>Favorite Celebrity Chef:</strong> Guy Fieri</li>
            <li><strong>Favorite Vegetable:</strong> Onion</li>
            <li><strong>Favorite spices:</strong> Cayanne Pepper, Zatar and Lemon Pepper</li>
            <li><strong>Favorite Meal:</strong> Ultimate Veggie Stir Fry - Stir fry with every vegetable you can think of</li>
            <li><strong>Favorite Restaurant:</strong> Cook Shop - Windsor, Canada</li>
            <li><strong>Favorite thing to Cook:</strong> Chili- See Featured Recipe page</li>
        </ul>
    </section>
@endsection