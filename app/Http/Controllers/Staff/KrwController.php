<?php

namespace App\Http\Controllers\Staff;

use App\Models\Krw;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class KrwController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Krw::all();
        return view('staff.krw.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staff.krw.create');
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
            'nama_krw' => ['required', 'string', 'max:255'],
            'ketua_krw' => ['required', 'string', 'max:255'],
        ])->validate();

        // dd($data);

        Krw::create($request->all());

        return redirect('data-krw')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Krw::findOrFail($id);
        return view('staff.krw.edit', compact('data'));
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
            'nama_krw' => ['required', 'string', 'max:255'],
            'ketua_krw' => ['required', 'string', 'max:255'],
        ])->validate();

        // dd($validated);

        Krw::where('id', $id)
            ->update($validated);

        return redirect('data-krw')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Krw::find($id);
        $data->delete();
        return redirect('data-krw')->with('success', 'Data Berhasil Dihapus');
    }
}
