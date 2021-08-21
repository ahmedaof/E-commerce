<?php

namespace Database\Seeders;

use App\Models\Model\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Customer::factory(3)->create();
    }
}
