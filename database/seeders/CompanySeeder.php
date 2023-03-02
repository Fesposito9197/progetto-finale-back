<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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
                "Mc Donald",
                "Ristorante Giapponese Hashimoto",
                "Ristorante Messicano La Cucaracha",
                "Ristorante etiope Nigdje",
                "Ristorante italiano Trattoria La Torre",
                "Ristorante indiano Taj Mahal",
                "Ristorante turco Istanbul",
                "Ristorante coreano Seoul",
                "Fast Food Burger King",
                "Fast Food KFC",
                "Fast Food Subway",
                "Fast Food Pizza Hut",
                "Ristorante greco Dionysos",
                "Ristorante argentino La Cabrera",
                "Ristorante thailandese Bangkok City",
                "Ristorante spagnolo El Cid",
                "Ristorante messicano Tacos Locos",
                "Ristorante indonesiano Bali",
                "Ristorante vegetariano Terra",
                "Ristorante libanese Beirut",
                "Ristorante pizzeria La Napoli",
                "Ristorante francese La Petite Marmite",
                "Ristorante brasiliano Bossa Nova",
                "Ristorante cubano Buena Vista",
                "Ristorante russo Mosca Bianca",
                "Ristorante marocchino Marhaba",
                "Ristorante belga La Moule",
                "Ristorante vietnamita Saigon",
                "Ristorante messicano El Sombrero",
                "Ristorante africano Sanaa",
                "Ristorante filippino Manila",
                "Ristorante rumeno Caru cu bere",
                "Ristorante argentino El Gaucho",
                "Ristorante peruviano La Cevicheria",
                "Ristorante cinese Hong Kong",
                "Ristorante giamaicano Rasta Pasta"
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
                "https://screenworld.it/wp-content/uploads/2023/01/mcdonald-menu.v1.jpg",
                "https://cdn.pixabay.com/photo/2015/04/08/13/13/food-712665_1280.jpg",
                "https://cdn.pixabay.com/photo/2016/03/27/19/02/hamburger-1284431_1280.jpg",
                "https://cdn.pixabay.com/photo/2018/02/06/23/42/sushi-3134827_1280.jpg",
                "https://cdn.pixabay.com/photo/2014/08/26/15/26/restaurant-428642_1280.jpg",
                "https://cdn.pixabay.com/photo/2017/01/26/02/06/platter-2009590_1280.jpg",
                "https://cdn.pixabay.com/photo/2015/04/20/13/17/food-731706_1280.jpg",
                "https://cdn.pixabay.com/photo/2016/11/18/14/05/brick-1834784_1280.jpg",
                "https://cdn.pixabay.com/photo/2016/10/25/13/31/hamburger-1761758_1280.jpg",
                "https://cdn.pixabay.com/photo/2017/05/22/20/27/pizza-2338817_1280.jpg",
                "https://cdn.pixabay.com/photo/2017/02/15/10/57/pizza-2068272_1280.jpg",
                "https://cdn.pixabay.com/photo/2014/08/26/15/30/restaurant-428678_1280.jpg",
                "https://cdn.pixabay.com/photo/2017/11/16/18/51/korean-food-2955465_1280.jpg",
                "https://cdn.pixabay.com/photo/2017/02/15/10/57/pizza-2068272_1280.jpg",
                "https://cdn.pixabay.com/photo/2015/09/18/14/47/chicken-raid-550804_1280.jpg",
                "https://cdn.pixabay.com/photo/2015/03/26/09/39/restaurant-690569_1280.jpg",
                "https://cdn.pixabay.com/photo/2016/08/11/23/46/salad-1582927_1280.jpg",
                "https://cdn.pixabay.com/photo/2016/08/12/04/17/food-1586914_1280.jpg",
                "https://cdn.pixabay.com/photo/2017/02/20/18/03/burger-2085216_1280.jpg",
                "https://cdn.pixabay.com/photo/2017/03/27/14/56/chips-2170219_1280.jpg",
                "https://cdn.pixabay.com/photo/2016/06/13/00/05/food-1459693_1280.jpg",
                "https://cdn.pixabay.com/photo/2017/03/23/19/57/asian-2174119_1280.jpg",
                "https://cdn.pixabay.com/photo/2016/03/09/09/22/restaurant-1245676_1280.jpg",
                "https://cdn.pixabay.com/photo/2016/08/12/04/17/food-1586914_1280.jpg",
                "https://cdn.pixabay.com/photo/2015/09/13/16/52/vegetable-skewer-937383_1280.jpg",
                "https://cdn.pixabay.com/photo/2016/03/05/19/02/bar-1239434_1280.jpg",
                "https://cdn.pixabay.com/photo/2017/08/12/18/59/restaurant-2636796_1280.jpg",
                "https://cdn.pixabay.com/photo/2016/06/15/19/09/food-1459697_1280.jpg",
                "https://cdn.pixabay.com/photo/2016/03/05/19/02/bar-1239435_1280.jpg",
                "https://cdn.pixabay.com/photo/2017/01/11/11/33/cake-1971552_1280.jpg",
                "https://cdn.pixabay.com/photo/2017/08/10/18/44/restaurant-2629755_1280.jpg",
                "https://cdn.pixabay.com/photo/2017/08/10/03/26/yogurt-2626154_1280.jpg",
            ],
            "hours" => [
                "18:00-23:00", // Osteria Francescana
                "11:30-14:30, 18:30-22:00", // Ristorante Cinese Hua Xing
                "12:00-15:00", // Giardino di Giada
                "11:30-15:00, 19:00-23:00", // Curry Lounge
                "19:00-00:00", // Para Todos
                "11:00-14.30, 19:30-22:30", // Hanedan
                "11:00-00:00", // Dahlak
                "12:00-15:00, 19:15-00:00", // Dokdo
                "07:00-23:00", // Mc Donald
                "12:00-15:00, 19:00-23:00", // Ristorante Giapponese Hashimoto
                "12:00-15:00, 19:00-23:00", // Ristorante Messicano La Cucaracha
                "12:00-23:00", // Ristorante etiope Nigdje
                "12:00-14:30, 19:00-22:00", // Ristorante italiano Trattoria La Torre
                "11:30-15:00, 18:30-22:30", // Ristorante indiano Taj Mahal
                "11:00-22:00", // Ristorante turco Istanbul
                "12:00-14:30, 18:30-22:30", // Ristorante coreano Seoul
                "07:00-23:00", // Fast Food Burger King
                "11:00-23:00", // Fast Food KFC
                "11:00-23:00", // Fast Food Subway
                "11:00-23:00", // Fast Food Pizza Hut
                "12:00-15:00, 19:00-23:00", // Ristorante greco Dionysos
                "12:00-16:00, 19:00-00:00", // Ristorante argentino La Cabrera
                "12:00-15:00, 19:00-23:00", // Ristorante thailandese Bangkok City
                "12:00-15:30, 19:00-23:30", // Ristorante spagnolo El Cid
                "11:30-23:00", // Ristorante messicano Tacos Locos
                "12:00-15:00, 19:00-23:00", // Ristorante indonesiano Bali
                "12:00-15:00, 19:00-22:30", // Ristorante vegetariano Terra
                "12:00-15:00, 19:00-23:00", // Ristorante libanese Beirut
                "12:00-15:00, 19:00-23:00", // Ristorante pizzeria La Napoli
                "12:00-14:00, 19:00-22:30", // Ristorante francese La Petite Marmite
                "12:00-23:00", // Ristorante brasiliano Bossa
                "11:00-15:00, 18:30-22:00",
                "12:00-23:00",
                "10:00-15:00, 18:00-22:00",
                "11:30-14:30, 17:30-22:30",
                "10:00-15:00, 17:00-23:00",
                "11:30-14:30, 18:30-23:00",
                "09:00-15:00, 18:00-21:30",
                "11:00-15:00, 18:00-22:00",
                "12:00-23:00",
                "10:00-14:00, 18:00-21:30",
                "10:00-15:00, 18:00-22:00",
                "11:30-14:30, 18:00-23:00",
                "11:00-15:00, 18:30-22:00"
            ]
        ];

        $userCount=count(User::all());
        for($i=0;$i<$userCount;$i++){
            $new_company= new Company();
            $new_company->user_id=$i+1;
            $new_company->company_name=$data["names"][$i];
            $new_company->telephone=$faker->phoneNumber();
            $new_company->p_iva=$faker->vat();
            $new_company->address=$faker->address();
            $new_company->opening_hours=$data["hours"][$i];
            $new_company->image=$data["images"][$i];
            $new_company->minimum_order=$faker->randomFloat(2, 8, 20);
            $new_company->slug=Str::slug($new_company->company_name,'-');
            $new_company->save();
        }
    }
}
