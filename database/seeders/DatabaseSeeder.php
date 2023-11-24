<?php

namespace Database\Seeders;

// import database 
use App\Models\Users;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// use App\Models\News;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // produksi table User
        Users::create([
            'name'  => 'Sigit Septiadi',
            'username' => 'iqlimanuri',
            'email' => 'sigitseptiadi1@gmail.com',
            'password' => bcrypt('adminadmin')
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);  

        Users::factory(8)->create();
    }
}
