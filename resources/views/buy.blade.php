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
                    <div>
                        <p>U.S.Price: <label>{{$comic['price']}}</label></p>
                        <p>AVAILABLE</p>
                    </div>
                    <p>Check Availability</p>
                </div>
                <p>{{$comic['description']}}</p>
            </div>
            <div class="right-part">
                <img src="/img/adv.jpg" alt="">
            </div>
        </div>
        <div class="info_comic_2">
            <div class="container-info_2">
                <div class="left-part">
                    <h4>Talent</h4>
                    <div class="list">
                        <p>Art By:</p>
                        <span>
                            @foreach($comic['artists'] as $art)
                            {{$art}} <label>,</label>
                            @endforeach
                        </span>
                    </div>
                    <div class="list">
                        <p>Written By:</p>
                        <span>
                            @foreach($comic['writers'] as $writer)
                            {{$writer}} <label>,</label>
                            @endforeach
                        </span>
                    </div>
                </div>
                <div class="right-part">
                    <h4>Specs</h4>
                    <div class="list">
                        <p>Series: </p>
                        <span id="blue-span">{{$comic['series']}}</span>
                    </div>
                    <div class="list">
                        <p>U.S. Price:</p>
                        <span>{{$comic['price']}}</span>
                    </div>
                    <div class="list">
                        <p>On Sale Date:</p>
                        <span>{{$comic['sale_date']}}</span>
                    </div>
                </div>
            </div>   
        </div>
        </div>
    </main>
@endsection