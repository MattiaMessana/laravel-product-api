<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
     
        $faker = Faker::create('it_IT');

        $categories = Category::all();

        for ($i = 0; $i < 100; $i++) {
            $newProduct = new Product();
            $newProduct->name = $faker->word();
            $newProduct->description = $faker->text();
            $newProduct->price = $faker->randomFloat(2, 1, 100);
            $newProduct->category_id = $faker->randomElement($categories)->id;

            $newProduct->save();
        }
    }
}
