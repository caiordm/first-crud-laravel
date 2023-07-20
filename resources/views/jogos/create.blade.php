@extends('layouts.app')

@section('title', 'Adicionar Filme')

@section('content')
<h1>Cadastrar um novo jogo</h1>
<hr>
<form action="{{ route('jogos-store') }}" method="post">
    @csrf
    <div class="form-group my-2">
        <label for="nome">Nome do jogo:</label>
        <input class="form-control" type="text" name="nome" placeholder="Digite um nome">
    </div>
    <div class="form-group my-2">
        <label for="categoria">Categoria do jogo:</label>
        <input class="form-control" type="text" name="categoria" placeholder="Categoria do Jogo">
    </div>
    <div class="form-group my-2">
        <label for="ano_criacao">Ano de criação:</label>
        <input class="form-control" type="number" name="ano_criacao" placeholder="Ano em que foi criado">
    </div>
    <div class="form-group my-2">
        <label for="valor">Valor do jogo:</label>
        <input class="form-control" type="number" name="valor" placeholder="Valor do jogo">
    </div>
    <input type="submit" class="btn btn-success" value="Enviar"/>
</form>
@endsection