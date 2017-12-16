<?php

namespace projeto\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Produto extends Model
{
    protected $table = 'produtos';
    public $timestamps = false;
    
    protected $fillable = array('id', 'nome', 'valor', 'descricao', 'quantidade'); // método que permite quais parâmetros serão inseridos

}
