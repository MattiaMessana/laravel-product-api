<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $faker = Faker::create('it_IT');
        
        //creiamo 10 categorie 
        for ($i = 0; $i < 10; $i++) {
            $newCategory = new Category();
            $newCategory->name = $faker->word();

            $newCategory->save();
        }
    }
}
