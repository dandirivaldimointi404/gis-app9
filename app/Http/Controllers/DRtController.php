<?php

namespace App\Http\Controllers;

use App\Models\Kelurahan;
use App\Models\Rt;
use Illuminate\Http\Request;

class DRtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drt = Rt::all();
        return view('drt.index', compact('drt'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelurahan = Kelurahan::all();
        return view('drt.create', compact('kelurahan'));
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
            'kd_rt' => 'required|unique:tb_rt',
            'nama_rt' => 'required|string',
            'kelurahan_kd' => 'required|exists:tb_kelurahan,kd_kelurahan',
            'latitude' => 'required',
            'longitude' => 'required',

        ]);

        Rt::create($ValidatedData);
        return redirect()->route('drt.index')->with('success', 'Data Berhasil Tersimpan');
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
    public function edit(Rt $drt)
    {
        $kelurahan = Kelurahan::all();
        return view('drt.edit', compact('drt','kelurahan'));
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
