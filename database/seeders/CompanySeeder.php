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
                "Osteria Francescana",
                "Ristorante Cinese Hua Xing",
                "Giardino di Giada",
                "Curry Lounge",
                "Para Todos",
                "Hanedan",
                "Dahlak",
                "Dokdo",
                "Mc Donald"
            ],
            "images"=>[
                "https://media-cdn.tripadvisor.com/media/photo-s/11/41/5f/db/suckling-pig-tender-and.jpg",
                "https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/gettyimages-544042946-1537009788.jpg?resize=480:*",
                "https://www.torinotoday.it/~media/horizontal-hi/46538377512956/umami_ristorante_giapponese_centro_torino-2.jpg",
                "https://www.ristoranteindianoroma.com/wp-content/uploads/2018/09/I-nostri-piatti-al-Ristorante-Indiano-Roma-8.jpg",
                "https://www.coolinmilan.it/wp-content/uploads/2022/09/ristorante-messicano-milano.jpg",
                "https://ristorantesultan.com/wp-content/uploads/2019/11/Ristorante-etnico-Firenze-640x480.jpg",
                "https://media-cdn.tripadvisor.com/media/photo-s/0e/75/11/95/zighini-meta-carne-e.jpg",
                "https://images.ctfassets.net/2x1b56neok6m/it-media-6290-asset/9c22a438298ae96e354226840040f8b7/shutterstock_1027788493.jpg?w=1216&q=50",
                "https://screenworld.it/wp-content/uploads/2023/01/mcdonald-menu.v1.jpg"
            ],
            "hours"=>[
                "18:00-23:00",
                "11:30-14:30, 18:30-22:00",
                "12:00-15:00",
                "11:30-15:00, 19:00-23:00",
                "19:00-00:00",
                "11:00-14.30, 19:30-22:30",
                "11:00-00:00",
                "12:00-15:00, 19:15-00:00",
                "07:00-23:00"
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
