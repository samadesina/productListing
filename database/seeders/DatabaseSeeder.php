<?php

namespace Database\Seeders;
use App\Models\Authors;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Authors::factory(50)->create();
        
         
         }
}
