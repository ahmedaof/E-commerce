<?php

namespace Database\Seeders;

use App\Models\Model\Category;
use App\Models\Model\Product;
use App\Models\Model\Suppliers;
use Illuminate\Database\Seeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
      Category::factory()->count(3)->hasProduct(3)
        ->create(); 
       
      

        
    }
}
