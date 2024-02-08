@extends('layout')

@section('css')
<link rel="stylesheet" href="/css/pages/doces/produto.css">
@endsection
@section('js')
<script src="/js/doces/produto.js" defer></script>
@endsection
@section('title')
{{$doce->name}} - MIA
@endsection
@section('content')
<section id="product">
    @php
        $doce->pricesPerFlavor = json_decode($doce->pricesPerFlavor);
        $doce->img = json_decode($doce->img);
    @endphp
    <picture id="product-sect-image">
        <div id="product-image-cnt">
            <img src="{{$doce->img->url}}" alt="Imagem de {{$doce->name}}" id="product-image">
        </div>
        @if($doce->img->isIllustrative)
            <figcaption>* Imagem meramente ilustrativa</figcaption>
        @endif
    </picture>
    <div id="product-sect-text">
        <h1 id="product-title">{{$doce->name}}</h1>
        <p id="product-slogan">{{$doce->slogan}}</p>
        <div id="product-information">
            <div id="see-more-details" onclick="seeMoreDetails()">
                <span>Ver mais detalhes</span>
                <div id="arrow"></div>
            </div>
            <div id="information">{!! $doce->text !!}</div>
        </div>
        <div id="product-flavors-and-prices">
            <div id="product-flavors">
                @foreach ($doce->pricesPerFlavor as $flavor => $price)
                    <button class="product-flavor" data-flavor="{{$flavor}}">{{$flavor}}</button>
                @endforeach
            </div>
            <div id="product-prices">
                @foreach ($doce->pricesPerFlavor as $flavor => $price)
                    <p class="product-price" data-price="{{$flavor}}">{{$price}}</p>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection