@extends('layout')

@section('css')
<link rel="stylesheet" href="/css/pages/home.css">
@endsection
@section('title', 'MIA - Loja de doces')
@section('content')
<section id="apresentation">
    <h1>Mais do que doces, entregamos momentos</h1>
    <div id="apresentation-txt">
        <p>Encontre os doces perfeitos para celebrar momentos especiais. Oferecemos uma variedade de doces deliciosos e artesanais, feitos com ingredientes de alta qualidade. Temos opções para todos os gostos e ocasiões.</p>
        <a href="/doces" id="btn-see-products">Ver produtos</a>
    </div>
</section>
@endsection