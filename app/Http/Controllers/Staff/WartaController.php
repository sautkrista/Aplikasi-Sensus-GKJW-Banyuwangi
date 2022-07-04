<?php

namespace App\Http\Controllers\Staff;

use Carbon\Carbon;
use App\Models\WartaJemaat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class WartaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = WartaJemaat::get()->groupBy('minggu');
        $data  = DB::table('warta_jemaats')
            ->select('minggu', DB::raw('count(*) as total'))
            ->groupBy('minggu')
            ->get();
        return view('staff.warta.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staff.warta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'minggu' => ['required', 'string', 'max:255'],
            'halaman' => ['required', 'string', 'max:255'],
            'foto' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg',]
        ])->validate();

        // dd($data);
        $validated['foto'] = $request->minggu . '-' . $request->halaman . '.png';

        $request->foto->move(public_path('image/warta'), $validated['foto']);
        array_pop($validated);
        // dd($validated);

        WartaJemaat::create($validated);

        return redirect('data-warta')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = WartaJemaat::where('minggu', 'like', '%' . $id . '%')->orderBy('halaman', 'ASC')->get();

        $date = Carbon::parse($id);

        $weekNumber = $date->weekNumberInMonth;
        $start = $date->startOfWeek()->format('d-m-Y');
        $end = $date->endOfWeek()->format('d-m-Y');

        return view('staff.warta.show', compact('data', 'start', 'end'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = WartaJemaat::find($id);
        return view('staff.warta.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = Validator::make($request->all(), [
            'minggu' => ['required', 'string', 'max:255'],
            'halaman' => ['required', 'string', 'max:255'],
            'foto' => ['image', 'mimes:jpeg,png,jpg,gif,svg',]
        ])->validate();

        // dd($data);
        $validated['foto'] = $request->minggu . '-' . $request->halaman . '.png';
        $request->foto->move(public_path('image/warta'), $validated['foto']);
        array_pop($validated);
        // dd($validated);

        WartaJemaat::where('id', $id)
            ->update($validated);

        return redirect('data-warta')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = WartaJemaat::find($id);
        File::delete(public_path('/image/warta/' . $data->minggu . '-' . $data->halaman . '.png'));
        $data->delete();

        return redirect('data-warta')->with('success', 'Data Berhasil Dihapus');
    }
}
