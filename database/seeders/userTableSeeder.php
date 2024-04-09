<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class userTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Vishnu',
            'department_id' => 1,
            'designation_id' => 1,
            'phone_number' => '9987654321',
        ]);
        User::create([
            'name' => 'john wick',
            'department_id' => 1,
            'designation_id' => 2,
            'phone_number' => '8876543245',
        ]);
        User::create([
            'name' => 'thor',
            'department_id' => 2,
            'designation_id' => 1,
            'phone_number' => '9876543213',
        ]);
        User::create([
            'name' => 'BEE',
            'department_id' => 2,
            'designation_id' => 2,
            'phone_number' => '9000543213',
        ]);
    }
}
