<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\department;

class departmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        department::create([
            'name' => 'IT',
        ]);

        
        department::create([
            'name' => 'HR',
        ]);

       
    }
}
