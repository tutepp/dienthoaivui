<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Factories\CategoryFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // CategoryFactory::factory(1)->create();
        $this->call(CategoryTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(TypeTableSeeder::class);
    }
}
