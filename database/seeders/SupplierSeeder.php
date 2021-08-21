<?php

namespace Database\Seeders;

use App\Models\Model\Suppliers;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Suppliers::factory()->count(3)
        ->create(); 
    }
}
