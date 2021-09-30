<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Movimento;
use App\Models\User;

class MovimentoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Movimento::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ano'       => $this->faker->numberBetween($min = 2030, $max = 2099),
            'concluido' => $this->faker->boolean,
            'ativo'     => $this->faker->boolean,
            'user_id'   => User::inRandomOrder()->first()->id,
        ];
    }
}
