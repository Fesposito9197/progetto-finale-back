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
        $typNum=count(Typology::all());
        for($i=1 ;$i<=$companiesNum;$i++){
            $company=Company::find($i);
            $randCount=rand(0,2);
            if($randCount>0){
                $firstId=rand(1,$typNum);
                if($i==$firstId){
                    $i--;
                    break;
                }
                $company->typologies()->sync([$i,$firstId]);
                if($randCount>1){
                    $secondId=rand(1,$typNum);
                    if($secondId==$firstId){
                        $i--;
                        break;
                    }
                    $company->typologies()->sync([$i,$firstId,$secondId]);
                }
            }else{
                $company->typologies()->sync($i);
            }
        }
    }
}
