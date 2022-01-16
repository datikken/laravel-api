<?php

namespace App\Http\Controllers;

use App\Models\Spider;
use Illuminate\Http\Request;

class SpiderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Spider[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Http\Response
     */
    public function index()
    {
        return Spider::all();
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
     * @param  \App\Models\Spider  $spider
     * @return \Illuminate\Http\Response
     */
    public function show(Spider $spider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Spider  $spider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Spider $spider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Spider  $spider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Spider $spider)
    {
        //
    }
}
