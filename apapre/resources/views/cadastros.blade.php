@extends('layouts.main')

@section('title', 'Cadastro')

@section('content')
@if($id != null)
    <p>O usuário está buscando: {{ $id }}</p>
@endif

@endsection