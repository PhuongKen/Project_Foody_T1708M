<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(FoodTableSeeder::class);
        $this->call(RestaurantsTableSeeder::class);
        $this->call(CategoriesTableSeeader::class);
        $this->call(AddressTableSeeder::class);
    }
}
