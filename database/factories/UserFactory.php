<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $perfis = ['admin', 'user', 'none'];
        return [
            'codpes'            => $this->faker->numberBetween($min = 1111111, $max = 9999999),
            'name'              => $this->faker->name,
            'email'             => $this->faker->unique()->safeEmail,
            'perfil'            => $perfis[array_rand($perfis)],
            'email_verified_at' => now(),
            'password'          => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'remember_token'    => Str::random(10),
        ];
    }
}