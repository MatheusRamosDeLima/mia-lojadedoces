@extends('layout')

@section('css')
<link rel="stylesheet" href="/css/errors/404.css">
@endsection
@section('title', 'Erro 404 - MIA')
@section('content')
<section id="error-msg">
    <h1 id="error-title">Algo deu errado :(</h1>
    <div id="error-text">
        <p>Provavelmente a página que você está tentando acessar não existe.</p>
        <div id="see-products">
            <p>Para voltar a ver os nossos produtos:</p>
            <a href="/doces" id="btn-see-products">Ver produtos</a>
        </div>
        <p style="font-size: 18px">Caso isso seja um erro, favor <a href="/contato">entrar em contato</a>.</p>
    </div>
</section>
@endsection