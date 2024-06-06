<?php

namespace App\Http\Controllers;

use App\Models\Kelahiran;
use App\Models\Kelurahan;
use App\Models\Kematian;
use App\Models\Rt;
use Illuminate\Http\Request;

class LsebaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelahiran = Kelahiran::with('rt')->get();
        $kematian = Kematian::with('rt')->get();
        $rt = Rt::withCount([
            'kelahiran as total_kelahiran',
            'kematian as total_kematian'
        ])->get();

        $kelurahan = Kelurahan::withCount([
            'kelahiran as total_kelahiran',
            'kematian as total_kematian'
        ])->get();


        return view('lsebaran.index', compact(['kelahiran', 'kematian', 'kelurahan', 'rt']));
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
