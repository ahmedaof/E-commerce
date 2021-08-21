<?php

namespace Database\Factories\Model;

use App\Models\Model\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          'name' => $this->faker->name(),
          'email' => $this->faker->email(),
          'phone' => $this->faker->phoneNumber(),
          'address' => $this->faker->address(),
          'sallery_id' => $this->faker->randomNumber(),
          'photo' => $this->faker->image(),
          'nid' => $this->faker->randomNumber(6),
          'joining_date' => $this->faker->date(),

        ];
    }
}
