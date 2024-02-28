<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Country;
use App\Models\City;
use App\Models\Tags;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Country::create(['name' => 'Kenya']);
        Country::create(['name' => 'Uganda']);
        City::create(['country_id' => 1, 'name' => 'Nairobi']);
        City::create(['country_id' => 1, 'name' => 'Kisumu']);
        City::create(['country_id' => 1, 'name' => 'Mombasa']);
        City::create(['country_id' => 2, 'name' => 'Kampala']);
        City::create(['country_id' => 2, 'name' => 'Entebbe']);
        City::create(['country_id' => 2, 'name' => 'Jinja']);

        Tags::create(['name' => 'Python', 'slug' => 'python']);
        Tags::create(['name' => 'Framework 7', 'slug' => 'f7']);
    }
}
