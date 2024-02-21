<?php

namespace Database\Seeders;

use App\Models\Jobs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Jobs::create(['name'=>"Frontend Web Programmer"]);
        Jobs::create(['name'=>"Backend Web Programmer"]);
    }
}
