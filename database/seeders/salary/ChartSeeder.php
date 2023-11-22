<?php

namespace Database\Seeders\salary;

use App\Models\salary\Chart;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Chart::factory()->count(10)->create();
    }
}
