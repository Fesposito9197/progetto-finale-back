<?php

namespace App\Http\Controllers\Admin;

use App\Models\Typology;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTypologyRequest;
use App\Http\Requests\UpdateTypologyRequest;
use App\Models\Company;
use Illuminate\Support\Facades\Auth;

class TypologyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = Auth::id();
        $company = Company::where('user_id', $userId)->first();
        $typologies = Typology::all();
        
        return view("admin.typologies.index", compact('typologies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.typologies.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTypologyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTypologyRequest $request)
    {
        $data = $request->validated();
 
        $new_typology = new Typology();
        $new_typology->fill($data);
        $new_typology->save();
        
        return redirect()->route("admin.typologies.index")->with("message", "La tipologia è stato creata con successo!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Typology  $typology
     * @return \Illuminate\Http\Response
     */
    public function show(Typology $typology)
    {
        return view('admin.typologies.show', compact('typology')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Typology  $typology
     * @return \Illuminate\Http\Response
     */
    public function edit(Typology $typology)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTypologyRequest  $request
     * @param  \App\Models\Typology  $typology
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTypologyRequest $request, Typology $typology)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Typology  $typology
     * @return \Illuminate\Http\Response
     */
    public function destroy(Typology $typology)
    {
        //
    }
}
