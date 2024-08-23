<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Todos;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Todos::factory(20)->create();
    }
}
