<?php

namespace Database\Seeders;

use App\Models\Package;
use App\Models\Feature;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Zura',
            'email' => 'zura@example.com',
            'password' => bcrypt('123.321Aa'),
        ]);

        Feature::create([
            'image' => 'https://images.app.goo.gl/PeS5LutqbGGXwPZZA',
            'route_name' => 'feature1.index',
            'description' => 'Calculate sum of two numbers',
            'required_credits' => 1,
            'active' => true,
        ]);

        Feature::create([
            'route_name' => 'feature2.index',
            'image' => 'https://cdn-icons-png.freepik.com/512/929/929430.png',
            'name' => 'Calculate Difference',
            'description' => 'Calculate difference of two numbers',
            'required_credits' => 3,
            'active' => true,
        ]);

        Package::create([
            'name' => 'Basic',
            'price' => 5,
            'credits' => 20
        ]);
        Package::create([
            'name' => 'Silver',
            'price' => 20,
            'credits' => 100
        ]);
        Package::create([
            'name' => 'Gold',
            'price' => 50,
            'credits' => 500
        ]);
    }
}
