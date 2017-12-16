<?php

namespace projeto\Http\Controllers;

use projeto\Models\Produto;
use projeto\Http\Requests\ProdutosRequest;
use Illuminate\Support\Facades\DB;
use Request;
use Validator;

class ProdutosController extends Controller 
{
    public function __construct()
    {
        $this->middleware('auth', 
            ['only' => ['cadastrar', 'remover'],
            ]);
    }
    
    public function lista()
    {
        $produtos = Produto::all();

        return view()->exists('produtos.lista') ? view('produtos.lista')->with('produtos', $produtos) : 'Página não encontrada!';
    }
    
    public function listaJson()
    {
        $produtos = new Produto();

        return response()->json(Produto::all());
    }
    
    public function detalhes($id)
    {
        $produto = Produto::find($id);
        
        if (empty($produto)) {
            return ('Produto não encontrado!');
        }
        
        return view()->exists('produtos.detalhes') ? view('produtos.detalhes')->with(['produto' => $produto]) : 'Página não encontrada!';
        
    }
    
    public function cadastrar()
    {
        return view()->exists('produtos.cadastrar') ? view('produtos.cadastrar')->with(['produto' => new Produto()]) : 'Página não encontrada!'; 
    }
    
    public function editar($id)
    {
        $produto = Produto::find($id);
        
        if ($produto) {
            
            return view()->exists('produtos.cadastrar') ? view('produtos.cadastrar')->with(['produto' => $produto]) : 'Página não encontrada!';
        }
        
        return 'Produto não encontrado!';
    }
    
    public function cadastro(ProdutosRequest $request)
    {
        $produto = new Produto($request->all());
        
        if ($produto->id) {

            $produto->where('id', $produto->id)->update(
                [
                    'nome' => $produto->nome, 
                    'descricao' => $produto->descricao, 
                    'valor' => $produto->valor, 
                    'quantidade' => $produto->quantidade,
                ]
            );
        
            return redirect()->action('ProdutosController@lista')->withInput(Request::only('nome'));    
        }
        
        $produto->save();  //Produto::create($produto);
        
        return redirect()->action('ProdutosController@lista')->withInput(Request::only('nome'));
    }
    
    public function remover($id)
    {
        $produto = Produto::find($id);
        
        $produto->delete();
        
        return redirect()->action('ProdutosController@lista');
    }
}
