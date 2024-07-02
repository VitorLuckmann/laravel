@extends('layouts.main')

@section('title', 'Doação de Cachorros e Gatos')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1>Doação de Cachorros e Gatos</h1>
            <p class="lead">Acolha um Amigo: Faça a Diferença na Vida de um Animal Desabrigado!</p>
            <p>A APAPRE (Associação Protetora dos Animais Preciosos e Resgatados) é uma entidade dedicada ao cuidado, proteção e reabilitação de animais desabrigados. Nós acreditamos que todos os animais merecem amor, cuidado e um lar seguro.</p>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <img src="/img/dogs.jpg" class="card-img-top" alt="Cachorros para adoção">
                <div class="card-body">
                    <h5 class="card-title">Cachorros para Adoção</h5>
                    <p class="card-text">Nossos cachorros estão à procura de um lar cheio de amor e carinho. Venha conhecê-los e ajude-nos a encontrar uma família para cada um deles.</p>
                    <a href="/events/doacao" class="btn btn-primary">Saiba mais</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <img src="/img/cats.jpg" class="card-img-top" alt="Gatos para adoção">
                <div class="card-body">
                    <h5 class="card-title">Gatos para Adoção</h5>
                    <p class="card-text">Nossos gatos estão à procura de um lar acolhedor e seguro. Venha conhecê-los e ajude-nos a proporcionar uma nova vida para cada um deles.</p>
                    <a href="/events/doacao" class="btn btn-primary">Saiba mais</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection