<?php

namespace Database\Factories\Model;

use App\Models\Model\Expense;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExpenseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Expense::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          'details' => $this->faker->paragraph(),
          'amount' => $this->faker->randomNumber(),
          'expense_date' => $this->faker->date(),

        ];
    }
}
