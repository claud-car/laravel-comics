@extends('layouts.app')

@section('main')
<main>
    <div class="main">
        <div class="container-main">
            <div class="current-mrg-neg">
                <p>CURRENT SERIES</p>
            </div>
            @foreach ($comics as $index => $comic)   
                <a href="{{route('detailcomic' , ['id' => $index])}}" class="card">
                    <div>
                        <img src="{{$comic['thumb']}}" alt="">
                        <div class="text">
                            <p>{{$comic['series']}}</p>
                        </div>
                    </div>
                </a>             
            @endforeach 
            <div class="button">
                <button>LOAD MORE</button>
            </div>
        </div>
        <div class="end-main">
            <div class="container-end-main">
                <div class="merch">
                    <img src="/img/buy-comics-digital-comics.png" alt="" class="other-opts">
                    <p>DIGITAL COMICS</p>
                </div>
                <div class="merch">
                    <img src="/img/buy-comics-merchandise.png" alt="">
                    <p>DC MERCHANDISE</p>
                </div>
                <div class="merch">
                    <img src="/img/buy-comics-subscriptions.png" alt="">
                    <p>SUBSCRIPTION</p>
                </div>
                <div class="merch">
                    <img src="/img/buy-comics-shop-locator.png" alt="" class="other-opts">
                    <p>COMIC SHOP LOCATOR</p>
                </div>
                <div class="merch">
                    <img src="/img/buy-dc-power-visa.svg" alt="">
                    <p>DC POWER VISA</p>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection