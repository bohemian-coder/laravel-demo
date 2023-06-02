<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $contacts = [
            ['name' => 'Stephan', 'email' => 'stephan@test.com'],
            ['name' => 'John', 'email' => 'john@test.com'],
            ['name' => 'Jenna', 'email' => 'jenna@test.com'],
            ['name' => 'Nolan', 'email' => 'nolan@test.com'],
        ];

        DB::table('contacts')->insert($contacts);
    }
}
