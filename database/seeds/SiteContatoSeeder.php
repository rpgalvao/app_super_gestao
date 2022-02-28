<?php

use Illuminate\Database\Seeder;
use App\SiteContato;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        $contato = new SiteContato();
        $contato->nome = 'Aplicativo SG';
        $contato->telefone = '(11) 98765-1234';
        $contato->email = 'contato@sg.com.br';
        $contato->motivo_contato = 1;
        $contato->mensagem = 'Seja bem-vindo ao aplicativo Super Gestão';
        $contato->save();
        */

        factory(SiteContato::class, 100)->create();
    }
}
