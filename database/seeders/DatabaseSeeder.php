<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use App\Models\salary\Chart;
use App\Models\User;
use Database\Seeders\salary\ChartSeeder;
use Database\Seeders\salary\StructureSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        //$this->call(PermissionSeeder::class);
        //$this->call(RoleSeeder::class);
//        $this->call(RoleUserSeeder::class);
//        $this->call(UserSeeder::class);
       // $this->call(ChartSeeder::class);
        $this->call(StructureSeeder::class);


    }
}
