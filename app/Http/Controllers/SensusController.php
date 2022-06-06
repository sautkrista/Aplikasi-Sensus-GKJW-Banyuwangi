<?php

namespace App\Http\Controllers;

use App\Models\Sensus;
use Illuminate\Http\Request;

class SensusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("survei");
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
     * @param  \App\Models\Sensus  $sensus
     * @return \Illuminate\Http\Response
     */
    public function show(Sensus $sensus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sensus  $sensus
     * @return \Illuminate\Http\Response
     */
    public function edit(Sensus $sensus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sensus  $sensus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sensus $sensus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sensus  $sensus
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sensus $sensus)
    {
        //
    }
}
