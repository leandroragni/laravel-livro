<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Model::unguard();
        $this->call(ProdutoTableSeeder::class);
    }
}

class ProdutoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into produtos (nome, quantidade, valor, descricao) values (?, ?, ?, ?)',
            array('geladeira', 2, 59, 'side by side com gelo na porta'));
        
        DB::insert('insert into produtos (nome, quantidade, valor, descricao) values (?, ?, ?, ?)',
            array('fogão', 5, 950, 'painel automático e forno elétrico'));
    }
}
