@extends('layouts.main')

@section('title', 'Entrar')

@section('content')

<div class="login-container">
    <h1>Login</h1>

    <form action="/events/entrar" method="POST">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Endereço de Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senha" name="senha" required>
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
    </form>
</div>

@endsection
