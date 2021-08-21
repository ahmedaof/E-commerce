<?php

namespace Database\Factories\Model;

use App\Models\Model\Suppliers;
use Illuminate\Database\Eloquent\Factories\Factory;

class SuppliersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Suppliers::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           
            'name' => $this->faker->word(),
            'email' => $this->faker->email(),
            'phone' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'photo' => $this->faker->image(),
            'shopname' => $this->faker->word(),

        ];
    }
}
