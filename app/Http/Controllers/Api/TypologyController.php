<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Typology;
use Illuminate\Http\Request;

class TypologyController extends Controller
{
    public function index()
    {
        $typologies = Typology::all();
        return $typologies;
    }
    public function show($slug)
    {   
        try{
            $typology = Typology::where('slug',$slug)->with('companies.products')->firstOrFail();
            return $typology;
        }catch(\Illuminate\Database\Eloquent\ModelNotFoundException $e){
            return response([
                'error' => '404 Typology not found'
            ], 404);
        }
        
    }
}
