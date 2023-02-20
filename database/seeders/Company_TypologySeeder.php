<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Typology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class Company_TypologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $companiesNum=count(Company::all());
        for($i=1 ;$i<$companiesNum;$i++){
            $company=Company::find($i);
            $company->typologies()->attach($i);
        }
    }
}
