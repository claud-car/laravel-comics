@extends('layouts.app')

@section('main')
    <main>
        <div class="thumbnail">
            <img src="{{$comic['thumb']}}" alt="">
        </div>
        <div class="info_comic_1">
            <div class="left-part">
                <h2>{{$comic['title']}}</h2>
                <div class="price-check">
                    <p>U.S.Price: {{$comic['price']}}</p>
                    <p>AVAILABLE</p>
                    <p>Check Availability</p>
                </div>
                <p>{{$comic['description']}}</p>
            </div>
            <div class="right-part">
                <img src="/img/adv.jpg" alt="">
            </div>
        </div>
    </main>
@endsection