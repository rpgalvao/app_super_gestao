<?php

use Illuminate\Database\Seeder;
use App\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Instanciando o objeto Fornecedor
        $f = new Fornecedor();
        $f->nome = 'Fornecedor 100';
        $f->site = 'fornecedor100.com.br';
        $f->uf = 'CE';
        $f->email = 'contato@fornecedor100.com.br';
        $f->save();

        //usando a o método create (cuidar com o tributo fillable na classe Model)
        Fornecedor::create([
            'nome' => 'Fornecedor 200',
            'site' => 'fornecedor200.com.br',
            'uf' => 'PR',
            'email' => 'contato@fornecedor200.com.br'
        ]);

        //método insert do banco de dados
        DB::table('fornecedores')->insert([
            'nome' => 'Fornecedor 300',
            'site' => 'fornecedor300.com.br',
            'uf' => 'SC',
            'email' => 'contato@fornecedor300.com.br'
        ]);
    }
}
