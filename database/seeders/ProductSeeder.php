<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
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
        foreach(Company::all() as $company){
            for($index=1;$index<=10;$index++){
                $new_product= new Product();
                $new_product->name=$faker->word();
                $new_product->description=$faker->sentence();
                $new_product->price=$faker->randomFloat(2, 1, 15);
                $new_product->is_visible=$faker->boolean();
                $new_product->category=$faker->word();
                $new_product->company_id=$company->id;
                $new_product->save();
            }
        }
    }
}
