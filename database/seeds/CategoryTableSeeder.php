<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $category = new \App\Category();
        $category->id = 3;
        $category->name = "ANIMAL";
        $category->save();

        $category = new \App\Category();
        $category->id = 4;
        $category->name = "HUMA";
        $category->save();

        $category = new \App\Category();
        $category->id = 35;
        $category->name = "";
        $category->save();
    }
}
