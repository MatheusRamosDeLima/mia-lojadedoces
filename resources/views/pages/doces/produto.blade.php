@extends('layout')

@section('css')
<link rel="stylesheet" href="/css/pages/doces/produto.css">
@endsection
@section('title')
{{$id}} - MIA
@endsection
@section('content')
<section id="product">
    <picture id="product-sect-image">
        <div id="product-image-cnt">
            <img src="" alt="" id="product-image">
        </div>
    </picture>
    <div id="product-sect-text">
        <h1 id="product-title"> </h1>
        <p id="product-slogan"> </p>
        <div id="product-information">
            <div id="see-more-details" onclick="seeMoreDetails()">
                <span>Ver mais detalhes</span>
                <div id="arrow"></div>
            </div>
            <div id="information"> </div>
        </div>
        <div id="product-flavors-and-prices">
            <div id="product-flavors">
                {{--
                <button class="product-flavor selected" data-flavor="flavor-name">flavor-name</button>
                --}}
            </div>
            <div id="product-prices">
                {{--
                <p class="product-price selected" data-price="flavor-name">flavor-price</p>
                --}}
            </div>
        </div>
    </div>
</section>
@endsection