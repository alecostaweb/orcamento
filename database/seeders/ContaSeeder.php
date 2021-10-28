<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Conta;
use App\Models\TipoConta;
use App\Models\Area;
use App\Models\User;

class ContaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $conta1 = [
            'id'           => 1001,
            'nome'         => 'Orçamento',
            'email'        => 'aaa@usp.br',
            'numero'       => 2,
            'ativo'        => TRUE,
            'tipoconta_id' => TipoConta::inRandomOrder()->first()->id,
            'area_id'      => Area::inRandomOrder()->first()->id,
            'user_id'      => User::inRandomOrder()->first()->id,
        ];

        $conta2 = [
            'id'           => 1002,
            'nome'         => 'Projeto Acadêmico',
            'email'        => 'bbb@usp.br',
            'numero'       => 3,
            'ativo'        => FALSE,
            'tipoconta_id' => TipoConta::inRandomOrder()->first()->id,
            'area_id'      => Area::inRandomOrder()->first()->id,
            'user_id'      => User::inRandomOrder()->first()->id,
        ];

        $conta3 = [
            'id'           => 1003,
            'nome'         => 'Renda Industrial',
            'email'        => 'ccc@usp.br',
            'numero'       => 4,
            'ativo'        => FALSE,
            'tipoconta_id' => TipoConta::inRandomOrder()->first()->id,
            'area_id'      => Area::inRandomOrder()->first()->id,
            'user_id'      => User::inRandomOrder()->first()->id,
        ];

        Conta::create($conta1);
        Conta::create($conta2);
        Conta::create($conta3);

        Conta::factory(10)->create();
    }
}
