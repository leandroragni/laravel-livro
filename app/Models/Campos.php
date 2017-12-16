<?php

namespace projeto;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Campos extends Model
{
    protected $table = "campos";
    public $timestamps = false;
    
    protected $fillable = array('id', 'jsonb');
}
