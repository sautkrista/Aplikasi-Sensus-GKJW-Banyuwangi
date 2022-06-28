<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
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
        return view("guest.warta");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WartaJemaat  $wartaJemaat
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $data = WartaJemaat::where('gambar', 'like', '%' . $request->minggu . '%')->orderBy('halaman', 'ASC')->get();

        $date = Carbon::parse($request->minggu);

        $weekNumber = $date->weekNumberInMonth;
        $start = $date->startOfWeek()->format('d-m-Y');
        $end = $date->endOfWeek()->format('d-m-Y');

        // dd($date);

        return view('guest.warta_show', compact('data', 'start', 'end'));
    }
}
