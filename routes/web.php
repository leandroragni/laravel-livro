<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos', 
        [
            'as' => 'listaDeProdutos',
            'uses' => 'ProdutosController@lista',
        ]
    );
Route::get('/produtos/json', 
        [
            'as' => 'listaDeProdutosJson',
            'uses' => 'ProdutosController@listaJson',
        ]
    );
Route::get('/produto/{id}/editar', 
        [
            'as' => 'editarProduto',
            'uses' => 'ProdutosController@editar',
        ]
    )->where('id', '[0-9]+');

Route::get('/produto/{id}/detalhes', 'ProdutosController@detalhes')->where('id', '[0-9]+');
Route::get('/produto', 'ProdutosController@cadastrar');
Route::post('/produto/cadastro', 'ProdutosController@cadastro');
Route::get('/produto/{id}/remover',
        [
            'as' => 'removerProduto',
            'uses' => 'ProdutosController@remover',
        ]
    )->where('id', '[0-9]+');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
