<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::with('typologies','products')->get();
        return $companies;
    }
    public function show($slug)
    {   
        try{
            $company = Company::where('slug',$slug)->with('typologies','products')->firstOrFail();
            return $company;
        }catch(\Illuminate\Database\Eloquent\ModelNotFoundException $e){
            return response([
                'error' => '404 Company not found'
            ], 404);
        }
        
        return $company;
    }
}
