<?php

namespace Database\Seeders;

use App\Models\Skills;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Skills::create(['name'=>"PHP"]);
        Skills::create(['name'=>"PostgreSQL"]);
        Skills::create(['name'=>"API (JSON, REST)"]);
        Skills::create(['name'=>"Version Control System (Gitlab, Github)"]);
    }
}
