<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(5)->create();
        // \App\Models\Announcements::factory(5)->create();
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'apprenant']);
        \App\Models\User::factory(10)->create( );
        \App\Models\Company::factory(10)->create( );
        \App\Models\Announcements::factory(10)->create( );
    }
}
