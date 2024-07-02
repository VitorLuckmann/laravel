@extends('layouts.main')

@section('title', 'Eventos')

@section('content')
<div class="container mt-5">
    <h1>Eventos Disponíveis</h1>

    <div class="row mt-4">
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="/img/evento1.jpg" class="card-img-top" alt="Evento 1">
                <div class="card-body">
                    <h5 class="card-title">Evento 1</h5>
                    <p class="card-text">Descrição breve do Evento: Dia da maratona.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="/img/evento2.jpg" class="card-img-top" alt="Evento 2">
                <div class="card-body">
                    <h5 class="card-title">Evento 2</h5>
                    <p class="card-text">Descrição breve do Evento 2: Fique a tendo aos dias da castração.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="/img/evento3.jpg" class="card-img-top" alt="Evento 3">
                <div class="card-body">
                    <h5 class="card-title">Evento</h5>
                    <p class="card-text">Descrição breve do Evento: Dia da brincadeira em conjunto</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
    <h1></h1>

    <!-- Lista de eventos aqui -->
    <a class="btn btn-primary" href ="/events/cadastroevento">Criar Novo Evento</a>
</div>
    
</div>
@endsection
