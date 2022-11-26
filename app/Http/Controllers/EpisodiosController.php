<?php

namespace App\Http\Controllers;

use App\Models\episodios;
use App\Http\Requests\StoreepisodiosRequest;
use App\Http\Requests\UpdateepisodiosRequest;

class EpisodiosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
     * @param  \App\Http\Requests\StoreepisodiosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreepisodiosRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\episodios  $episodios
     * @return \Illuminate\Http\Response
     */
    public function show(episodios $episodios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\episodios  $episodios
     * @return \Illuminate\Http\Response
     */
    public function edit(episodios $episodios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateepisodiosRequest  $request
     * @param  \App\Models\episodios  $episodios
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateepisodiosRequest $request, episodios $episodios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\episodios  $episodios
     * @return \Illuminate\Http\Response
     */
    public function destroy(episodios $episodios)
    {
        //
    }
}
