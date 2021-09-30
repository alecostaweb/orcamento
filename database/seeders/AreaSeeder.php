<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Area;
use App\Models\User;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $area1 = [
            'nome'    => 'Orçamento',
            'user_id' => User::inRandomOrder()->first()->id,
        ];

        $area2 = [
            'nome'    => 'Renda Industrial',
            'user_id' => User::inRandomOrder()->first()->id,
        ];

        Area::create($area1);
        Area::create($area2);

        Area::factory(10)->create();
    }
}
