<?php

namespace App\Http\Controllers;

use App\Http\Resources\PetitionResource;
use App\Models\Petition;
use Illuminate\Http\Request;
use App\Http\Resources\PetitionCollection;

class PetitionController extends Controller
{
    /**
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
//        return PetitionResource::collection(Petition::all());
        return new PetitionCollection(Petition::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Petition  $petition
     * @return \Illuminate\Http\Response
     */
    public function show(Petition $petition)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Petition  $petition
     * @return \Illuminate\Http\Response
     */
    public function edit(Petition $petition)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Petition  $petition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Petition $petition)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Petition  $petition
     * @return \Illuminate\Http\Response
     */
    public function destroy(Petition $petition)
    {
        //
    }
}
