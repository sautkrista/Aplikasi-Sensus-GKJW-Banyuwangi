<?php

namespace App\Http\Controllers;

use App\Models\WartaJemaat;
use Illuminate\Http\Request;

class WartaJemaatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("warta");
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
     * @param  \App\Models\WartaJemaat  $wartaJemaat
     * @return \Illuminate\Http\Response
     */
    public function show(WartaJemaat $wartaJemaat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WartaJemaat  $wartaJemaat
     * @return \Illuminate\Http\Response
     */
    public function edit(WartaJemaat $wartaJemaat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WartaJemaat  $wartaJemaat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WartaJemaat $wartaJemaat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WartaJemaat  $wartaJemaat
     * @return \Illuminate\Http\Response
     */
    public function destroy(WartaJemaat $wartaJemaat)
    {
        //
    }
}
