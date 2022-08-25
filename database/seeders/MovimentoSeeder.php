<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movimento;
use App\Models\User;

class MovimentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movimento1 = [
            'ano'       => '2020',
            'concluido' => TRUE, 
            'ativo'     => FALSE,
            'user_id'   => User::inRandomOrder()->first()->id,
        ];

        $movimento2 = [
            'ano'       => '2021',
            'concluido' => FALSE,
            'ativo'     => TRUE,
            'user_id'   => User::inRandomOrder()->first()->id,
        ];

        Movimento::create($movimento1);
        Movimento::create($movimento2);

       Movimento::factory(10)->create();
    }
}
