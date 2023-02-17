<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Schema;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        Schema::disableForeignKeyConstraints();
        Product::truncate();
        Schema::enableForeignKeyConstraints();
 
        for($i=1;$i< 7;$i++){
            $new_product= new Product();

            $new_product->name = $faker->company();
            $new_product->description = $faker->sentence();
            $new_product->image = $faker->imageUrl(150, 150, 'food', true);
            $new_product->price = $faker->randomFloat(2);
            $new_product->category = $faker->word();
            $new_product->is_visible = $faker->boolean();

            $new_product->save();
        }
    }
}
