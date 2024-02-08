<?php

namespace Database\Seeders;

use App\Models\skills;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        skills::create(['name' => 'Php']);
        skills::create(['name' => 'Html']);
        skills::create(['name' => 'Js']);
        skills::create(['name' => 'Css']);
        skills::create(['name' => 'Laravel']);
    }
}
