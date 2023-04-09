<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Category;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Category::create(['name'=>'Classical']);
        Category::create(['name'=>'Animals']);
        Category::create(['name'=>'Funny']);
        Category::create(['name'=>'SMS']);
        Category::create(['name'=>'Alarms']);
        Category::create(['name'=>'Children']);
        Category::create(['name'=>'Standard']);
        Category::create(['name'=>'Music']);
        Category::create(['name'=>'Holiday']);
        Category::create(['name'=>'Nature']);

        User::create([

            'name'=> 'admin',
            'email'=> 'admin@mail.com',
            'password'=>bcrypt('password123'),
            'email_verified_at'=>NOW(),
        ]);
    }
}
