@extends('templates.principal')

@section('conteudo')

<h2>Lista de produtos</h2>

<table class="table table-strip">
    
    <tr>
        <th>Nome</th>
        <th>Valor</th>
        <th>Descrição</th>
        <th>Quantidade</th>
        <th></th>
        <th></th>
    </tr>
    
    @foreach ($produtos as $produto)
    
        <tr class="{{ $produto->quantidade <= 0 ? 'danger' : '' }}">
            <td> {{ $produto->nome }} </td>
            <td> {{ $produto->valor }}</td>
            <td> {{ $produto->descricao }}</td>
            <td> {{ $produto->quantidade }}</td>
            <td> <a href="produto/{{ $produto->id }}/detalhes"><span class="glyphicon glyphicon-search"></span></a></td>
            <td> <a href="produto/{{ $produto->id }}/editar"><span class="glyphicon glyphicon-pencil"></span></a></td>
            <td> <a href="produto/{{ $produto->id }}/remover"><span class="glyphicon glyphicon-trash"></span></a></td>
        </tr>
    
    @endforeach

</table>

<h4>
    <span class="label label-danger pull-right">Não há itens no estoque!</span>
</h4>

@if (old('nome'))
    <div class="alert alert-success">
        <strong>Sucesso!</strong>
        <p>O produto {{ old('nome') }} foi adicionado</p>
    </div>
@endif

@stop
