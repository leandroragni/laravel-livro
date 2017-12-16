@extends('templates.principal')

@section('conteudo')

<h2> Cadastro de produtos </h2>

<form action="/produto/cadastro" method="post">
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    
    <input type="hidden" name="id" value="{{ $produto->id }}"/>
    
    <div class="form-group">
        <label for="">Nome</label>
        <input class="form-control" type="text" name="nome" value="{{ $produto->nome }}"/>
    </div>
    
    <div class="form-group">
        <label for="">Descrição</label>
        <input class="form-control" type="text" name="descricao" value="{{ $produto->descricao }}"/>
    </div>
    
    <div class="form-group">
        <label for="">Valor</label>
        <input class="form-control" type="text" name="valor" value="{{ $produto->valor }}"/>
    </div>
    
    <div class="form-group">
        <label for="">Quantidade</label>
        <input class="form-control" type="number" name="quantidade" value="{{ $produto->quantidade }}"/>
    </div>
    
    <input class="btn btn-primary btn-block" type="submit" name="" value="cadastrar"/>
    
</form>

@if (count($errors) > 0)
    <div id="mensagens" class="alert alert-danger">
    
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    
    </div>
@endif

@stop