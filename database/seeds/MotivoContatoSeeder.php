<?php

use Illuminate\Database\Seeder;
use App\MotivoContatos;

class MotivoContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MotivoContatos::create(['motivo_contatos' => 'Dúvida']);
        MotivoContatos::create(['motivo_contatos' => 'Elogio']);
        MotivoContatos::create(['motivo_contatos' => 'Reclamação']);
    }
}
