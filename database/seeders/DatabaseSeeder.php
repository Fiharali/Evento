<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

         \App\Models\Role::create([
             'id' => User::IS_Admin,
             'name' => 'admin'
         ]);
        \App\Models\Role::create([
            'id' => User::IS_VISITOR,
            'name' => 'visitor'
        ]);
        \App\Models\Role::create([
            'id' => User::IS_ORGANISATOR,
            'name' => 'organisator'
        ]);

    }
}
