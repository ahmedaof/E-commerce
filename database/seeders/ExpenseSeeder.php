<?php

namespace Database\Seeders;

use App\Models\Model\Expense;
use Illuminate\Database\Seeder;

class ExpenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Expense::factory()->count(4)->create();
    }
}
