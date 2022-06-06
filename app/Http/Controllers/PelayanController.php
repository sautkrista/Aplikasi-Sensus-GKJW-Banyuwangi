<?php

namespace App\Http\Controllers;

use App\Models\Pelayan;
use Illuminate\Http\Request;

class PelayanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pelayan::all();
        return view("data_pelayan", compact('data'));
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
     * @param  \App\Models\Pelayan  $pelayan
     * @return \Illuminate\Http\Response
     */
    public function show(Pelayan $pelayan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelayan  $pelayan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelayan $pelayan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pelayan  $pelayan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelayan $pelayan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelayan  $pelayan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelayan $pelayan)
    {
        //
    }
}
