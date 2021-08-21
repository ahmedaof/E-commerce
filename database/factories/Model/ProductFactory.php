<?php

namespace Database\Factories\Model;

use App\Models\Model\Product;
use \App\Models\Model\Suppliers;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'product_name' => $this->faker->word(),
            'product_code' => $this->faker->randomNumber(4),
            'root' => $this->faker->word(),
            'buying_price' => $this->faker->randomNumber(),
            'selling_price' => $this->faker->randomNumber(),
            'supplier_id' => function(){
                return Suppliers::all()->random();
            },
            'product_quantity' => $this->faker->randomNumber(),
            'buying_date' => $this->faker->date(),
            'image' => $this->faker->image(),
          
        ];
    }
}
