<?php

namespace App\Http\Controllers\Staff;

use App\Models\Warga;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Krw;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class WargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Warga::all();
        return view('staff.warga.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_krw = Krw::all();
        return view('staff.warga.create', compact('data_krw'));
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
            'nik' => ['required', 'string', 'max:255', 'unique:wargas'],
            'nama' => ['required', 'string', 'max:255'],
            'jenis_kelamin' => ['required', 'string', 'not_in:Pilih Jenis Kelamin'],
            'tempat_lahir' => ['required', 'string'],
            'tanggal_lahir' => ['required', 'date'],
            'hub_dalam_kk' => ['required', 'string', 'not_in:Pilih Hubungan'],
            'alamat_domisili' => ['required', 'string'],
            'kota_domisili' => ['required', 'string'],
            'no_telp' => ['required', 'string'],
            'tempat_baptis' => ['required', 'string'],
            'tanggal_baptis' => ['date'],
            'tempat_sidi' => ['required', 'string'],
            'tanggal_sidi' => ['date'],
            'profesi' => ['required', 'string'],
            'tanggal_nikah' => ['date'],
            'asal_gereja' => ['required', 'string'],
            'keterangan' => ['required', 'max:1000'],
            'krw_id' => ['required', 'string', 'not_in:Pilih KRW'],
        ])->validate();

        // dd($data);

        Warga::create($request->all());

        return redirect('data-warga')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Warga::findOrFail($id);
        return view('staff.warga.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Warga::findOrFail($id);
        $data_krw = Krw::all();
        return view('staff.warga.edit', compact('data', 'data_krw'));
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
            'nik' => ['required', 'string', 'max:255'],
            'nama' => ['required', 'string', 'max:255'],
            'jenis_kelamin' => ['required', 'string', 'not_in:Pilih Jenis Kelamin'],
            'tempat_lahir' => ['required', 'string'],
            'tanggal_lahir' => ['required', 'date'],
            'hub_dalam_kk' => ['required', 'string', 'not_in:Pilih Hubungan'],
            'alamat_domisili' => ['required', 'string'],
            'kota_domisili' => ['required', 'string'],
            'no_telp' => ['required', 'string'],
            'tempat_baptis' => ['required', 'string'],
            'tanggal_baptis' => ['date'],
            'tempat_sidi' => ['required', 'string'],
            'tanggal_sidi' => ['date'],
            'profesi' => ['required', 'string'],
            'tanggal_nikah' => ['date'],
            'asal_gereja' => ['required', 'string'],
            'keterangan' => ['required', 'max:1000'],
            'krw_id' => ['required', 'string', 'not_in:Pilih KRW'],
        ])->validate();

        // dd($validated);

        Warga::where('id', $id)
            ->update($validated);

        return redirect('data-warga')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Warga::find($id);
        $data->delete();
        return redirect('data-warga')->with('success', 'Data Berhasil Dihapus');
    }
}
