@extends('layouts.main')

@section('title', 'Adoção')

@section('content')

<div class="adocao-container">
    <h1>Animais para Adoção</h1>
    
    <div class="dog-card">
        <img src="/img/dog1.jpg" class="dog-img" alt="Cão para adoção">
        <div class="dog-card-body">
            <h5 class="dog-card-title">Thor</h5>
            <p class="dog-card-text">Thor é um cãozinho brincalhão em busca de um lar amoroso.</p>
            <p class="dog-card-text">Idade: 2 anos</p>
            <a class="btn btn-primary" href="https://wa.me/5511962758424?text=Ol%C3%A1%20tenho%20interesse%20em%20adotar" target="_blank">Adotar</a>
        </div>
    </div>

    <div class="dog-card mt-3">
        <img src="/img/dog2.jpg" class="dog-img" alt="Cão para adoção">
        <div class="dog-card-body">
            <h5 class="dog-card-title">Mel</h5>
            <p class="dog-card-text">Mel é uma cadela dócil e carinhosa, pronta para ser sua melhor amiga.</p>
            <p class="dog-card-text">Idade: 06 meses</p>
            <a class="btn btn-primary" href="https://wa.me/5511962758424?text=Ol%C3%A1%20tenho%20interesse%20em%20adotar" target="_blank">Adotar</a>
        </div>
    </div>

    <div class="dog-card mt-3">
        <img src="/img/dog3.jpg" class="dog-img" alt="Cão para adoção">
        <div class="dog-card-body">
            <h5 class="dog-card-title">Rex</h5>
            <p class="dog-card-text">Rex é um cão de grande porte, muito amigável e cheio de energia.</p>
            <p class="dog-card-text">Idade: 4 anos</p>
            <a class="btn btn-primary" href="https://wa.me/5511962758424?text=Ol%C3%A1%20tenho%20interesse%20em%20adotar" target="_blank">Adotar</a>
        </div>
    </div>
</div>

@endsection
