<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\designation;

class designationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        designation::create([
            'name' => 'Manager'
        ]);
        designation::create([
            'name' => 'Software Engineer',
        ]);

    }
}
