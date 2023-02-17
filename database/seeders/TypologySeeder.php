<?php

namespace Database\Seeders;

use App\Models\Typology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class TypologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Typology::truncate();
        Schema::enableForeignKeyConstraints();
        $data=[
            "Italiano",
            "Cinese",
            "Giapponese",
            "Indiano",
            "Messicano",
            "Turco",
            "Etiope",
            "Coreano",
            "Fast-Food"
        ];
        for($i=0;$i<count($data)-1;$i++){
            $new_typology=new Typology();
            $new_typology->name=$data[$i];
            $new_typology->save();
        }
    }
}
