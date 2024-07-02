@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

<div class="event-form-container">
    <h1 class="mb-4">Criar</h1>

    <form action="/events" method="POST">
        <select id="escolha" name="opcao">
            <option value="opcao1">Evento</option>
            <option value="opcao2">Animal</option>
            <label for="arquivo">Selecione um arquivo:</label>
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea class="form-control" id="descricao" name="descricao" rows="4" required></textarea>
        </div>
        <div class="mb-3">
            <label for="data" class="form-label">Data</label>
            <input type="date" class="form-control" id="data" name="data" required>
        </div>
        <div class="mb-3">
            <label for="local" class="form-label">Local do Evento</label>
            <input type="text" class="form-control" id="local" name="local" required>
        </div>
        
    </form>
    <input type="file" id="arquivo" name="arquivo">
    <button type="submit" class="btn btn-primary">Criar</button>
    
    
    <div>
  
    </div>
</div>

@endsection