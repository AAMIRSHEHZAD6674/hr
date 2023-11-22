<?php

namespace Database\Seeders\salary;

use App\Models\salary\Structure;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StructureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Structure::factory()->count(10)->create();
    }
}
