@extends('layouts.app')

@section('title', 'Editar Filme')

@section('content')
<h1>Editar jogo</h1>
<hr>
<form action="{{ route('jogos-update', ['id' => $jogos->id]) }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group my-2">
        <label for="nome">Nome do jogo:</label>
        <input class="form-control" type="text" value="{{$jogos->nome}}" name="nome" placeholder="Digite um nome">
    </div>
    <div class="form-group my-2">
        <label for="categoria">Categoria do jogo:</label>
        <input class="form-control" type="text" value="{{$jogos->categoria}}" name="categoria" placeholder="Categoria do Jogo">
    </div>
    <div class="form-group my-2">
        <label for="ano_criacao">Ano de criação:</label>
        <input class="form-control" type="number" value="{{$jogos->ano_criacao}}" name="ano_criacao" placeholder="Ano em que foi criado">
    </div>
    <div class="form-group my-2">
        <label for="valor">Valor do jogo:</label>
        <input class="form-control" type="number" value="{{$jogos->valor}}" name="valor" placeholder="Valor do jogo">
    </div>
    <input type="submit" class="btn btn-success" value="Atualizar"/>
</form>
@endsection