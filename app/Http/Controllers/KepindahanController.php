<?php

namespace App\Http\Controllers;

use App\Models\Kepindahan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KepindahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user = Auth::user();
        $rt_kd = $user->rt_kd;
        $kepindahan = Kepindahan::with('rt')
            ->where('rt_kd', $rt_kd)
            ->paginate(10); 
        return view('kepindahan.index', compact('kepindahan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kepindahan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ValidatedData = $request->validate([
            'nik' => '',
            'nama_lengkap' => '',
            'jenis_kelamin' => '',
            'tgl_pindah' => '',
            'alamat' => '',
            'nama_kk' => '',
            'rt_kd' => '',
        ]);


        $ValidatedData['tgl_pindah'] = Carbon::createFromFormat('m/d/Y', $ValidatedData['tgl_pindah'])->format('Y-m-d');
        $ValidatedData['rt_kd'] = Auth::user()->rt_kd;

        Kepindahan::create($ValidatedData);
        return redirect()->route('kepindahan.index')->with('success', 'Data Berhasil Tersimpan');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
