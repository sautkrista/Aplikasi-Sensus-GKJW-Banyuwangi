<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use App\Models\Sensus;
use App\Models\Periode;
use App\Models\Quisioner;
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
        return view("guest.sensus");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = Warga::where('nik', $request->nik)->get();
        $periode = Periode::where('status', 1)->get();

        // dd($periode);

        $quisioner = Quisioner::where('periode_id', $periode[0]->id)->get();


        return view('guest.sensus_create', compact('data', 'quisioner'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $all = $request->all();
        $jawaban = [];
        foreach ($all as $value) {
            array_push($jawaban, $value);
        }

        array_shift($jawaban);

        // dd($jawaban);

        $periode = Periode::where('status', 1)->get();
        $quisioner = Quisioner::where('periode_id', $periode[0]->id)->get();

        if ($request->nik) {

            foreach ($quisioner as $key => $soal) {
                Sensus::create([
                    'quisioner_id' => $soal->id,
                    'warga_id' => $request->nik,
                    'jawaban' => $jawaban[$key],
                    'tanggal' => now()
                ]);
            }
            return redirect()->route('sensus_warga');
        } else {
            $id = random_int(1000, 9999);
            foreach ($quisioner as $key => $soal) {
                Sensus::create([
                    'quisioner_id' => $soal->id,
                    'warga_id' => $id,
                    'jawaban' => $jawaban[$key],
                    'tanggal' => now()
                ]);
            }
            return redirect()->route('sensus_warga');
        }
    }
}
