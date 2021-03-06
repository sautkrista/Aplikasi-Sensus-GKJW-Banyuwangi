<?php

namespace App\Http\Controllers\Staff;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pelayan;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

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
        return view('staff.pelayan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staff.pelayan.create');
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
            'nama' => ['required', 'string', 'max:255'],
            'jabatan' => ['required', 'string', 'max:255'],
            'foto' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048']
        ])->validate();

        // dd($data);
        $validated['foto'] = $request->nama . '.' . $request->foto->extension();
        $request->foto->move(public_path('image/pelayan'), $validated['foto']);

        Pelayan::create($validated);

        return redirect('data-pelayan')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Pelayan::findOrFail($id);
        return view('staff.pelayan.edit', compact('data'));
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
            'nama' => ['required', 'string', 'max:255'],
            'jabatan' => ['required', 'string', 'max:255'],
            'foto' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048']
        ])->validate();

        if ($request->foto) {
            $validated['foto'] = $request->nama . '.' . $request->foto->extension();
            $request->foto->move(public_path('image/pelayan'), $validated['foto']);
        } else {
        }

        Pelayan::where('id', $id)
            ->update($validated);

        return redirect('data-pelayan')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pelayan::find($id);
        File::delete(public_path('/image/pelayan/' . $data->foto));
        $data->delete();

        return redirect('data-pelayan')->with('success', 'Data Berhasil Dihapus');
    }
}
