<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Skill;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(5)->create();
        // \App\Models\Announcements::factory(5)->create();
        Skill::create(['name'=>"php"]);
        Skill::create(['name'=>"laravel"]);

        Skill::create(['name'=>"vue js"]);
        Skill::create(['name'=>"react"]);
    
        Role::create(['name' => 'admin','guard_name' => 'web']);
        Role::create(['name' => 'apprenant' ,'guard_name' => 'web']);
        $user =  User::create(['name' => 'bassma' , 'email'=> 'bassma@bassma.com' ,'password' => 'bassma']);
        $user->assignRole("admin");
        // \App\Models\User::factory(10)->create( );
        // \App\Models\Company::factory(10)->create( );
        // \App\Models\Announcements::factory(10)->create( );
    }
}
