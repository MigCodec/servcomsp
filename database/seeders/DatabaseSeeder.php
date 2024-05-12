<?php

namespace Database\Seeders;

use App\Models\Car;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Client;
use App\Models\Maintenance;
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
        Client::factory()->create([
            'name'=>'Test Client',
            'email'=> 'miguelangelarayacortes@gmail.com',
            'phone'=>949020295,
        ]);
        Car::factory()->create([
            'patent' => 'BCDD97',
            'year' => 2008,
            'model'=>'V16',
        ]);
        Maintenance::factory()->create([
            'date_of_maintenance'=>fake()->date(),
            'mileage'=>fake()->numberBetween(0,1000),
            'next_mileage'=>fake()->numberBetween(1001,2000),
            'aditional_comment'=>fake()->text(),
        ]);

        
    }
}
