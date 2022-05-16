<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMesocycleRequest;
use App\Http\Requests\UpdateMesocycleRequest;
use App\Models\Mesocycle;

class MesocycleController extends Controller
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
     * @param  \App\Http\Requests\StoreMesocycleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMesocycleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mesocycle  $mesocycle
     * @return \Illuminate\Http\Response
     */
    public function show(Mesocycle $mesocycle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mesocycle  $mesocycle
     * @return \Illuminate\Http\Response
     */
    public function edit(Mesocycle $mesocycle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMesocycleRequest  $request
     * @param  \App\Models\Mesocycle  $mesocycle
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMesocycleRequest $request, Mesocycle $mesocycle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mesocycle  $mesocycle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mesocycle $mesocycle)
    {
        //
    }
}
