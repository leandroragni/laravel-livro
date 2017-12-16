@extends('templates.principal')

@section('conteudo')

<h2>Produto</h2>

<ul>
    <li>Nome: {{ $produto->nome }}</li>
    <li>Valor: {{ $produto->valor }}</li>
    <li>Detalhes: {{ $produto->descricao }}</li>
    <li>Quantidade: {{ $produto->quantidade }}</li>
</ul>

@stop
