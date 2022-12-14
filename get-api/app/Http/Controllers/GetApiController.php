<?php

namespace App\Http\Controllers;

use App\Models\GetApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GetApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function GetApiData () {
        $result = Http::get("https://pokeapi.co/api/v2/pokemon/");
        return $result;
    }

    public function index()
    {
        //
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
     * @param  \App\Models\GetApi  $getApi
     * @return \Illuminate\Http\Response
     */
    public function show(GetApi $getApi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GetApi  $getApi
     * @return \Illuminate\Http\Response
     */
    public function edit(GetApi $getApi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GetApi  $getApi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GetApi $getApi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GetApi  $getApi
     * @return \Illuminate\Http\Response
     */
    public function destroy(GetApi $getApi)
    {
        //
    }
}
