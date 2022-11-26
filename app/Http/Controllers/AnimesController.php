<?php

namespace App\Http\Controllers;

use App\Models\Animes;
use App\Http\Requests\StoreAnimesRequest;
use App\Http\Requests\UpdateAnimesRequest;

class AnimesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $animes = Animes::all();
        return view('animes.index', compact('animes'));
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
     * @param  \App\Http\Requests\StoreAnimesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAnimesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Animes  $animes
     * @return \Illuminate\Http\Response
     */
    public function show(Animes $animes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Animes  $animes
     * @return \Illuminate\Http\Response
     */
    public function edit(Animes $animes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAnimesRequest  $request
     * @param  \App\Models\Animes  $animes
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAnimesRequest $request, Animes $animes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Animes  $animes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Animes $animes)
    {
        //
    }
}
