<?php

namespace Database\Seeders;

use App\Models\Car;
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
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Miguel Angel Araya Cortes',
            'email' => 'miguelangel.107@hotmail.com',
        ]);
        Car::factory()->create([
            'patent' => 'BCDD97',
            'year' => 2008,
            'model'=>'V16',
        ]);
    }
}
