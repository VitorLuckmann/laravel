@extends('layouts.main')

@section('title', 'Cadastro')

@section('content')
@if($busca != '')
    <p>Exibindo cadastro de animais: {{ $busca }}</p>
@endif

@endsection