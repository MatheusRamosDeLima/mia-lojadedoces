@extends('layout')

@section('css')
<link rel="stylesheet" href="/css/pages/doces/index.css">
@endsection
@section('js')
<script src="/js/doces/produto.js" defer></script>
@endsection
@section('title', 'Todos os doces - MIA')
@section('content')
<h1>A doçura que você procura</h1>
<section id="products">
    @foreach ($doces as $doce)
        @php
            $doce->img = json_decode($doce->img);
        @endphp
        <a href="/doces/produto/{{$doce->id}}" rel="next" class="product">
            <div style="background-image: url('/imgs/products/{{$doce->img->url}}')" class="img"></div>
            <div class="info">
                <h2 class="product-title">{{$doce->name}}</h2>
                <p class="product-slogan">{{$doce->slogan}}</p>
            </div>
        </a>
    @endforeach
    {{--
    <a href="/doces/produto/$id" rel="next" class="product">
        <div style="background-image: url(url-image.jpeg|png)" class="img"></div>
        <div class="info">
            <h2 class="product-title"></h2>
            <p class="product-slogan"></p>
        </div>
    </a>
    --}}
</section>
@endsection