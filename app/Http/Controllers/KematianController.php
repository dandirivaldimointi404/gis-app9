<?php

namespace App\Http\Controllers;

use App\Models\Kelahiran;
use App\Models\Kematian;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KematianController extends Controller
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
        $kematian = Kematian::with('rt')->where('rt_kd', $rt_kd)->paginate(4);
        return view('kematian.index', compact('kematian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kematian.create');
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
            'no_kk' => '',
            'nama' => '',
            'jenis_kelamin' => '',
            'tempat_lahir' => '',
            'tgl_kematian' => '',
            'goldar' => '',
            'agama' => '',
            'status' => '',
            'pendidikan' => '',
            'alamat' => '',
            'rt_kd' => '',
        ]);


        $ValidatedData['tgl_kematian'] = Carbon::createFromFormat('m/d/Y', $ValidatedData['tgl_kematian'])->format('Y-m-d');
        $ValidatedData['rt_kd'] = Auth::user()->rt_kd;

        Kematian::create($ValidatedData);
        return redirect()->route('kematian.index')->with('success', 'Data Berhasil Tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Kematian $kematian)
    {
        return view('kematian.show', compact('kematian'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Kematian $kematian)
    {
        return view('kematian.edit', compact('kematian'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kematian $kematian)
    {
        $validatedData = $request->validate([
            'nik' => 'required|string|max:255',
            'no_kk' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string|max:10',
            'tempat_lahir' => 'required|string|max:255',
            'tgl_kematian' => 'required|date_format:m/d/Y',
            'goldar' => 'required|string|max:3',
            'agama' => 'required|string|max:50',
            'status' => 'required|string|max:50',
            'pendidikan' => 'required|string|max:100',
            'alamat' => 'required|string|max:255',
        ]);

        $validatedData['tgl_kematian'] = Carbon::createFromFormat('m/d/Y', $validatedData['tgl_kematian'])->format('Y-m-d');

        $validatedData['rt_kd'] = Auth::user()->rt_kd;
        $kematian->update($validatedData);

        return redirect()->route('kematian.index')->with('success', 'Data Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kematian $kematian)
    {
        $kematian->delete();
        return redirect()->route('kematian.index')->with('success', 'Data Berhasil Dihapus');
    }
}
