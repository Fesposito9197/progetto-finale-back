<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Faker\Generator as Faker;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        Schema::disableForeignKeyConstraints();
        Company::truncate();
        Schema::enableForeignKeyConstraints();
        $data=[
            "names"=>[
                "Ristorante Finicky",
                "Bella Cucina",
                "Ristorante Kings and Queens",
                "Ristorante Italiano Baggio",
                "Food Delight",
                "McDonalds",
                "Burger King",
                "Sushi Wok"
            ],
            "images"=>[
                "https://images.unsplash.com/photo-1600891964599-f61ba0e24092?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cmVzdGF1cmFudCUyMGZvb2R8ZW58MHx8MHx8&w=1000&q=80",
                "https://assets.bonappetit.com/photos/631788f25635b01b337f6bb4/master/pass/220827_GuangXu_BA-UncleLou_014.jpg",
                "https://images.foxtv.com/static.livenowfox.com/www.livenowfox.com/content/uploads/2023/01/764/432/GettyImages-1350259361.jpg?ve=1&tl=1",
                "https://d4t7t8y8xqo0t.cloudfront.net/resized/750X436/eazytrendz%2F2930%2Ftrend20200903104959.jpg",
                "https://media-cdn.tripadvisor.com/media/photo-s/1a/ee/95/9d/marmaris-grills-and-signatures.jpg",
                "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSwNg5xaPP__hwki60YEu_sYHMMujEvyqsHQw&usqp=CAU",
                "https://hips.hearstapps.com/hmg-prod/images/burger-king-nutrisionist-meal-v2-1533584505.jpg",
                "https://static.cookist.it/wp-content/uploads/sites/21/2020/11/tipi-di-sushi-1.jpg"
            ],
            "hours"=>[
                "18:00-23:00",
                "11:30-14:30, 18:30-22:00",
                "12:00-15:00",
                "11:30-15:00, 19:00-23:00",
                "19:00-00:00",
                "07:00-23:00",
                "11:00-00:00",
                "12:00-15:00, 19:15-00:00",
            ]
        ];

        foreach(User::all() as $user){
            $user=User::inRandomOrder()->first();
            $randomIndex=rand(0,7);
            $new_company= new Company();
            $new_company->user_id=$user->id;
            $new_company->company_name=$data["names"][$randomIndex];
            $new_company->telephone=$faker->phoneNumber();
            $new_company->p_iva=$faker->vat();
            $new_company->address=$faker->address();
            $new_company->opening_hours=$data["hours"][$randomIndex];
            $new_company->image=$data["images"][$randomIndex];
            $new_company->minimum_order=$faker->randomFloat(2, 8, 20);
            $new_company->save();
        }
    }
}
