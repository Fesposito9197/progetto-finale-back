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
        $data=[
            "names"=>[
                "Italiano"=>[
                   "Pizza Margerita",
                   "Lasagna al ragù",
                   "Gnocchi alla sorrentina",
                   "Insalata di polpo",
                   "Tiramisù",
                ],
                "Cinese"=>[
                   "San ji bao con anatra piccante",
                   "Ravioli di verdure",
                   "Involtini primavera",
                   "Medusa con cetrioli",
                   "Ramen saltata con mix verdure"
                ],
                "Giapponese"=>[
                   "Alga Wakame",
                   "Dragon Roll Salmone e Tonno",
                   "Nigiri Orata",
                   "Sashimi Maguro",
                   "California Roll"
                ],
                "Indiano"=>[
                   "Samosa veg",
                   "Pappadums",
                   "Hariyali tikka",
                   "Chana masala",
                   "Chicken korma"
                ],
                "Messicano"=>[
                  "Quesadillas de Chili",
                  "Tortillas",
                  "Nachos Tenerife",
                  "El Pulled Burrito",
                  "Tostadas"
                ],
                "Turco"=>[
                  "Falafel",
                  "Piadina yufka doner kebab",
                  "Grill shish tavuk",
                  "Panino Izgara kofte",
                  "Panino Adana kebab"
                ],
                "Etiope"=>[
                  "Wat",
                  "Tibs",
                  "Kifto",
                  "Yetsom beyaynetu",
                  "Pane injera"
                ],
                "Coreano"=>[
                  "Sukju namul",
                  "Gyeran-mari",
                  "Yachae bulgogi joengol",
                  "Soju",
                  "Kimchi"
                ],
                "Fast-Food"=>[
                  "Hamburger",
                  "Chicken bacon King",
                  "Pop Corn Chicken",
                  "McFlurry Oreo",
                  "Cheeseburger"
                ],
                "Bevande"=>[
                  "Coca-cola",
                  "Fanta",
                  "Ichnusa",
                  "Campari soda",
                  "Pinot Grigio"
                ]
            ],
            "images"=>[
                "Italiano"=>[
                    "https://sites.bc.edu/vespa/files/2018/10/pizza-margherita-napoletana.jpg",
                    "https://mutti-parma.com/app/uploads/sites/7/2019/09/thumb-374-recipe-cover-desktop.jpeg",
                    "https://www.giallozafferano.com/images/231-23153/Gnocchi-alla-sorrentina_1200x800.jpg",
                    "https://www.cucchiaio.it/content/cucchiaio/it/ricette/2009/12/ricetta-insalata-di-polpo-con-patate/_jcr_content/header-par/image_single.img.jpg/1593161805863.jpg",
                    "https://s3.eu-central-1.amazonaws.com/quomi/media/141050/conversions/tiramisu-classico2-thumb-big.jpg"
                ],
                "Cinese"=>[
                    "https://media-cdn.tripadvisor.com/media/photo-m/1280/1c/06/c1/6c/san-ji-bao-all-anatra.jpg",
                    "https://www.laregoladelpiatto.it/wp-content/uploads/2020/04/Ravioli-cinesi-alle-verdure-in-padella-6-scaled.jpg",
                    "https://ricettecuco.com/wp-content/uploads/2017/10/ricetta-involtini-primavera-cinesi-fatti-in-casa-4-800x565.jpg",
                    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTm3awWKS1VMpjfbRnP9TgOApxpSxoZ96qbVaSuusOg0qOPkQCejP4IM5bvw_e2mcX0h5U&usqp=CAU",
                    "https://restaurantone.it/wp-content/uploads/2019/02/2018041123233011.jpg"
                 ],
                "Giapponese"=>[
                    "https://www.cure-naturali.it/.imaging/default/dam/cure-naturali/enciclopedia-naturale/alimentazione/alga-wakame.jpg/jcr:content.jpg",
                    "https://www.oishideliverypescara.it/wp-content/uploads/2021/11/DSC00194-scaled.jpg",
                    "https://www.ristorantedong.it/wp-content/uploads/Ristorante-Dong-Menu-WEB-9.jpg",
                    "https://www.sushibe.it/wordpress/wp-content/uploads/2018/04/Sashimi-Maguro-2.jpg",
                    "https://www.justonecookbook.com/wp-content/uploads/2022/12/California-Roll-6126-I-2.jpg"
                ],
                "Indiano"=>[
                    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQBUHvSJZrz1dVVfMxY5bKcpIovdygRrapF0w&usqp=CAU",
                    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTrSXo_wSj7zQ5Ape7hLIKO9WxvawhJLAMarw&usqp=CAU",
                    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZGqiXe3WEv38ggHR2_uw6MW3PjifpX2gbwg&usqp=CAU",
                    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSIa0OQmkAbVWzSfUdSKyGZ19vBQgYF_tocEw&usqp=CAU",
                    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQiQfYwMyc3SV2mT_T5DvaLAAIzbXLBWs5ByQ&usqp=CAU"
                ],
                "Messicano"=>[
                    "https://olo-images-live.imgix.net/37/37551514ee0347d4884dc1ad14d20467.jpg?auto=format%2Ccompress&q=60&cs=tinysrgb&w=1200&h=800&fit=fill&fm=png32&bg=transparent&s=a7ff2fa4e4c438aea11865ab710d774a",
                    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbua8P7W2UWieJU-Sg5AaBbm00tWfkSuAByw&usqp=CAU",
                    "https://www.longislandpress.com/wp-content/uploads/2020/08/nachos-4454941_960_720.jpg",
                    "https://www.tribugolosa.com/cache/slideshow/ca/40/35/00/gettyimages-958888298.jpg/2cb6823c975ee09b0d93e071c71c86d5.jpg",
                    "https://www.mylatinatable.com/wp-content/uploads/2018/04/Tostadas-1.jpg"
                ],
                "Turco"=>[
                    "https://www.casadivita.despar.it/app/uploads/2018/06/falafel-tradizione.jpg",
                    "https://media-cdn.tripadvisor.com/media/photo-s/06/29/77/2f/doner-kebab.jpg",
                    "https://amiraspantry.com/wp-content/uploads/2021/03/shish-tawooq-IG.jpg",
                    "https://img.freepik.com/premium-photo/delicious-turkish-meatballs-sandwich-kofte-ekmek-turkish-name-kofte-ekmek-ekmek-arasi-kofte_693630-4361.jpg",
                    "https://inconsegna.com/wp-content/uploads/2020/12/adana-kebab.jpg"
                ],
                "Etiope"=>[
                    "https://upload.wikimedia.org/wikipedia/commons/5/54/Ethiopian_wat.jpg",
                    "https://theethiopianfood.com/wp-content/uploads/Tibs-2.jpg",
                    "https://www.allrecipes.com/thmb/I8QL8pshGJY2kJDzr7u-UfU9zk0=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/GettyImages-636369362_ethiopian-kitfo_gettyimages_alleko-2000-31e73b5b3aa0479eb15a9d17ef063c33.jpg",
                    "https://i0.wp.com/bestofvegan.com/wp-content/uploads/2020/10/Culture-Tuesday-Ethiopian-Cuisine-@ethiopianfoodie.jpg?fit=1080%2C915&ssl=1",
                    "https://www.giallozafferano.it/images/25-2541/Pane-injera_650x433_wm.jpg"
                ],
                "Coreano"=>[
                    "https://asianinspirations.com.au/wp-content/uploads/2018/07/R00570_Sukju-Namul-Muchim.jpg",
                    "https://www.koreanbapsang.com/wp-content/uploads/2019/10/DSC6602-1.jpg",
                    "https://2.bp.blogspot.com/-T00kSCIp3LM/UNN5XSLLwEI/AAAAAAAADZU/Pmcz-61SEbQ/s1600/738.jpg",
                    "https://www.orientalitalia.com/wp-content/uploads/2022/07/bottle-g438e52dc6_1920-1140x640.jpg",
                    "https://i2.wp.com/chilipeppermadness.com/wp-content/uploads/2021/12/Kimchi-SQ.jpg"
                ],
                "Fast-Food"=>[
                    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSuXQizi-Ml9HTp7ybJf6pDj7M9Hm3RbVfB0A&usqp=CAU",
                    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRaYor95NWw4QAacJIy2_S2a6GV0UCcSd2qqg&usqp=CAU",
                    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtdk5flx3zCqFvXMXZuyS1sSML-SWHfGJBBw&usqp=CAU",
                    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThd_gsu3ijWIh7deFKpVxFTD8wzX_X6kwBSA&usqp=CAU",
                    "https://www.mcdonalds.it/sites/default/files/styles/compressed/public/products/cheeseburger--hero-mob.jpg?itok=zUC2Hd7n"
                ],
                "Bevande"=>[
                    "https://www.cicalia.com/it/img/imgproducts/12849/l_12849.jpg",
                    "https://www.cicalia.com/it/img/imgproducts/8833/l_8833.jpg",
                    "https://content.dambros.it/uploads/2018/07/11164328/0000152527.jpg",
                    "https://cdn-cpilf.nitrocdn.com/zYJMwgWGDfBPeAbRbYNXGEEIFuCBJjUR/assets/static/optimized/rev-8e35c1e/wp-content/uploads/2020/06/CampariSoda.jpg",
                    "https://vino360.it/wp-content/uploads/2018/03/Pinot-grigio_FR-768x1022.jpg"
                ]
            ],
            "descriptions"=>[
                "Italiano"=>[
                  "Pomodoro, Mozzarella",
                  "Pasta sfoglia all'uovo verde, Ragù, Besciamella, Burro, Parmigiano Reggiano DOP",
                  "Gnocchi, Salsa di pomodoro, Mozzarella, Parmigiano Reggiano DOP",
                  "Polpo, Verdure, Prezzemolo, Succo di limone",
                  "Mascarpone, Savoiardi, Caffè, Uova, Zucchero",
                ],
                "Cinese"=>[
                  "Anatra, Peperoncino, Cipolla, Zenzero, Salsa di soia",
                  "Verdure miste, Zenzero, Aglio",
                  "Verdure miste, Salsa agrodolce, Salsa di soia",
                  "Medusa, Cetrioli, Salsa di soia",
                  "Noodles, Verdure miste, Salsa di soia",
                ],
                "Giapponese"=>[
                  "Alga Wakame",
                  "Salmone, Tonno, Riso, Avocado, Maionese",
                  "Orata, Riso",
                  "Maguro",
                  "Surimi, Avocado, Riso, Semi di sesamo",
                ],
                "Indiano"=>[
                  "Verdure, Spezie",
                  "Pane indiano, Spezie",
                  "Pollo, Yogurt, Spezie",
                  "Ceci, Pomodoro, Spezie",
                  "Pollo, Crema di cocco, Spezie",
                ],
                "Messicano"=>[
                  "Peperoni, Cipolla, Fagioli, Formaggio fuso",
                  "Tortilla, Pollo, Bacon, Formaggio",
                  "Nachos, Carne macinata, Formaggio fuso, Guacamole, Panna acida",
                  "Tortilla, Carne di maiale, Salsa BBQ",
                  "Tortilla, Fagioli, Salsa di pomodoro, Formaggio fuso, Guacamole",
                ],
                "Turco"=>[
                  "Ceci, Coriandolo, Cumino, Aglio, Peperoncino",
                  "Pane yufka, Kebab di pollo, Verdure, Salsa",
                  "Spiedini di pollo, Verdure, Yogurt, Spezie",
                  "Panino con polpette di carne, Verdure, Salsa",
                  "Panino con kebab di agnello, Verdure, Salsa",
                ],
                "Etiope"=>[
                  "Spezie, Carne, Verdure",
                  "Carne, Spezie, Verdure",
                  "Carne cruda, Spezie, Verdure",
                  "Selezione di verdure, Spezie",
                  "Pane tradizionale etiope",
                ],
                "Coreano"=>[
                  "Germogli di soia, Sesamo, Aglio",
                  "Uova, Carote, Cipolla verde, Salsa di soia",
                  "Verdure miste, Salsa di soia, Spezie",
                  "Bevanda alcolica coreana",
                  "Cavolo cappuccio fermentato, Peperoncino in polvere, Aglio",
                ],
                "Fast-Food"=>[
                  "Hamburger, Verdure, Formaggio fuso, Salsa",
                  "Pane, Pollo, Bacon, Formaggio, Verdure, Maionese, Salsa",
                  "Pollo, Panatura, Salse",
                  "Gelato, Biscotti, Cioccolato",
                  "Pane, Manzo, Formaggio, Verdure, Ketchup, Maionese, Salsa"
                ],
                "Bevande"=>[
                    "50cl, Zero zuccheri",
                    "50cl",
                    "50cl, Non filtrata",
                    "33cl",
                    "2020, 14% vol., Tenuta Larcherhof , 75cl"
                ]
            ],
            "categories" => [
                "Italiano" => [
                    "Pizza",
                    "Primo",
                    "Primo",
                    "Antipasto",
                    "Dolce",
                ],
            
                "Cinese" => [
                    "Secondo",
                    "Primo",
                    "Antipasto",
                    "Contorno",
                    "Secondo",
                ],
            
                "Giapponese" => [
                    "Antipasto",
                    "Secondo",
                    "Antipasto",
                    "Antipasto",
                    "Secondo",
                ],
            
                "Indiano" => [
                    "Antipasto",
                    "Antipasto",
                    "Secondo",
                    "Secondo",
                    "Secondo",
                ],
            
                "Messicano" => [
                    "Antipasto",
                    "Secondo",
                    "Antipasto",
                    "Secondo",
                    "Antipasto",
                ],
            
                "Turco" => [
                    "Antipasto",
                    "Secondo",
                    "Secondo",
                    "Secondo",
                    "Secondo",
                ],
            
                "Etiope" => [
                    "Secondo",
                    "Secondo",
                    "Secondo",
                    "Secondo",
                    "Antipasto",
                ],
            
                "Coreano" => [
                    "Antipasto",
                    "Antipasto",
                    "Secondo",
                    "Bevanda",
                    "Contorno",
                ],
            
                "Fast-Food" => [
                    "Secondo",
                    "Secondo",
                    "Antipasto",
                    "Dolce",
                    "Secondo",
                ],
            
                "Bevande" => [
                    "Bevanda",
                    "Bevanda",
                    "Bevanda",
                    "Bevanda",
                    "Bevanda",
                ],
            ],
            "prices" => [
                "Italiano" => [
                    6.99,
                    9.99,
                    8.50,
                    12.99,
                    4.99,
                ],
                "Cinese" => [
                    11.50,
                    7.99,
                    5.99,
                    9.99,
                    8.99,
                ],
                "Giapponese" => [
                    14.99,
                    18.99,
                    9.99,
                    22.50,
                    12.99,
                ],
                "Indiano" => [
                    7.99,
                    3.99,
                    11.99,
                    12.50,
                    14.99,
                ],
                "Messicano" => [
                    8.99,
                    6.99,
                    10.99,
                    12.99,
                    7.50,
                ],
                "Turco" => [
                    5.99,
                    7.50,
                    9.99,
                    6.99,
                    7.99,
                ],
                "Etiope" => [
                    10.99,
                    11.50,
                    12.99,
                    9.99,
                    8.99,
                ],
                "Coreano" => [
                    8.50,
                    5.99,
                    9.99,
                    15.99,
                    6.99,
                ],
                "Fast-Food" => [
                    5.99,
                    8.99,
                    6.99,
                    3.99,
                    5.99,
                ],
                "Bevande" => [
                    1.99,
                    1.99,
                    3.99,
                    5.99,
                    9.99,
                ],
            ]
        ];

        foreach(Company::all() as $company){
            $typologies = $company->typologies;
            foreach($typologies as $typology){
                $key=$typology->name;

                for($index=1;$index<=rand(3,5);$index++){
                    $new_product= new Product();
                    $n=rand(0,4);
                    $products = Product::where('company_id',$company->id)->where('name',$data['names'][$key][$n])->get();
                    if(count($products)==0){
                        $new_product->name=$data['names'][$key][$n];
                        $new_product->image=$data['images'][$key][$n];
                        $new_product->description=$data['descriptions'][$key][$n];
                        $new_product->price=$data['prices'][$key][$n];
                        $new_product->is_visible=$faker->boolean();
                        $new_product->category=$data['categories'][$key][$n];
                        $new_product->company_id=$company->id;
                        $new_product->save();
                    }else{
                        $index--;
                        break;
                    }
                }
                for($i=1;$i<=rand(2,5);$i++){
                    $new_product= new Product();
                    $n=rand(0,4);
                    $products = Product::where('company_id',$company->id)->where('name',$data['names']['Bevande'][$n])->get();
                    if(count($products)==0){
                        $new_product->name=$data['names']['Bevande'][$n];
                        $new_product->image=$data['images']['Bevande'][$n];
                        $new_product->description=$data['descriptions']['Bevande'][$n];
                        $new_product->price=$data['prices']['Bevande'][$n];
                        $new_product->is_visible=$faker->boolean();
                        $new_product->category=$data['categories']['Bevande'][$n];
                        $new_product->company_id=$company->id;
                        $new_product->save();
                    }else{
                        $index--;
                        break;
                    }
                }
            }
        }
    }
}
