<?php

namespace App\Http\Controllers;

use App\Models\Kelurahan;
use Illuminate\Http\Request;

class DKelurahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dkelurahan = Kelurahan::all();
        return view('dkelurahan.index', compact('dkelurahan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dkelurahan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([

            'kd_kelurahan' => 'required|unique:tb_kelurahan',
            'no_kelurahan' => 'required',
            'nama_kelurahan' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'geojson' => 'required',


        ]);

        if ($geojson = $request->file('geojson')) {
            echo 'File Name: ' . $geojson->getClientOriginalName();
            echo '<br>';
            echo 'File Extension: ' . $geojson->getClientOriginalExtension();
            echo '<br>';
            echo 'File Real Path: ' . $geojson->getRealPath();
            echo '<br>';
            echo 'File Size: ' . $geojson->getSize();
            echo '<br>';
            echo 'File Mime Type: ' . $geojson->getMimeType();
            $tujuan_upload = 'post-images';
            $validatedData['geojson'] = $geojson->storeAS($tujuan_upload, $geojson->getClientOriginalName());
        }

        Kelurahan::create($validatedData);
        return redirect()->route('dkelurahan.index')->with('success', 'Data berhasil ditambahkan');
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
    public function update(Request $request, Kelurahan $dkelurahan)
    {
        $validatedData = $request->validate([
            'kd_kelurahan' => 'required|unique:tb_kelurahan,kd_kelurahan,' . $dkelurahan->id,
            'no_kelurahan' => 'required',
            'nama_kelurahan' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'geojson' => 'required',
        ]);

        if ($request->hasFile('geojson')) {
            $geojson = $request->file('geojson');
            $filename = $geojson->getClientOriginalName();
            $tujuan_upload = 'post-images';
            $geojson->move($tujuan_upload, $filename);
            $validatedData['geojson'] = $tujuan_upload . '/' . $filename;
        }

        $dkelurahan->update($validatedData);

        return redirect()->route('dkelurahan.index')->with('success', 'Data berhasil diperbarui');
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
