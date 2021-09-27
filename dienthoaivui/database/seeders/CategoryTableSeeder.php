<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->name = 'Xiaomi';
        $category->save();

        $category = new Category();
        $category->name = 'Iphone';
        $category->save();

        $category = new Category();
        $category->name = 'Samsung';
        $category->save();

        $category = new Category();
        $category->name = 'LG';
        $category->save();
    }
}
