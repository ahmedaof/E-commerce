<?php

namespace Database\Factories\Model;

use App\Models\Model\Employee;
use App\Models\Model\Salary;
use Illuminate\Database\Eloquent\Factories\Factory;

class SalaryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Salary::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'amount' => $this->faker->randomNumber(),
            'salary_date' => $this->faker->date(),
            'salary_month' => $this->faker->date(),
            'salary_year' => $this->faker->date(),
            'employee_id' => function(){
             return Employee::all()->random();
         }
        ];
    }
}
