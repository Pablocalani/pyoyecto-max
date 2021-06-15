<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cliente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'urldestino'=> $this->faker->url,
            'whatsapp'=> $this->faker->phoneNumber,
            'nombre'=> $this->faker->name,
            'referencia'=> $this->faker->text,
            'cobrar'=> $this->faker->randomNumber(),
            'descripcion'=> $this->faker->text,
            'foto'=> $this->faker->imageUrl(),
            'cordenadax'=> $this->faker->numberBetween(10,100),
            'cordenaday'=> $this->faker->numberBetween(10,100),
        ];
    }
}
