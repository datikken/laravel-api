<?php

namespace App\Http\Controllers;

use App\Http\Resources\PetitionResource;
use App\Models\Petition;
use Illuminate\Http\Request;
use App\Http\Resources\PetitionCollection;
use Illuminate\Http\Response;

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
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return PetitionResource
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:petitions|max:255',
            'description' => 'required',
            'category' => 'required',
            'author' => 'required',
            'signees' => 'required',
        ]);

        $petition = Petition::create($request->only([
            'title', 'description', 'category', 'author', 'signees'
        ]));

        return new PetitionResource($petition);
    }

    /**
     * Display the specified resource.
     *
     * @param Petition $petition
     * @return PetitionResource
     */
    public function show(Petition $petition)
    {
        return new PetitionResource($petition);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Petition  $petition
     * @return Response
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
     * @return PetitionResource
     */
    public function update(Request $request, Petition $petition)
    {
        $petition->update($request->only([
            'title',
            'description',
            'category',
            'author',
            'signees'
        ]));

        return new PetitionResource($petition);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Petition  $petition
     * @return Response
     */
    public function destroy(Petition $petition)
    {
        //
    }
}
