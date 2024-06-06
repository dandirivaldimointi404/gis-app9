<?php

namespace App\Http\Controllers;

use App\Models\Kelahiran;
use Carbon\Carbon;
use DateTime;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;

class KelahiranController extends Controller
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
        $kelahiran = Kelahiran::with('rt')
            ->where('rt_kd', $rt_kd)
            ->paginate(10); 

        return view('kelahiran.index', compact('kelahiran'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kelahiran.create');
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
            'tgl_lahir' => '',
            'golongan_darah' => '',
            'agama' => '',
            'status' => '',
            'pendidikan' => '',
            'alamat' => '',
            'rt_kd' => '',
        ]);


        $ValidatedData['tgl_lahir'] = Carbon::createFromFormat('m/d/Y', $ValidatedData['tgl_lahir'])->format('Y-m-d');
        $ValidatedData['rt_kd'] = Auth::user()->rt_kd;

        Kelahiran::create($ValidatedData);
        return redirect()->route('kelahiran.index')->with('success', 'Data Berhasil Tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Kelahiran $kelahiran)
    {
        return view('kelahiran.show', compact('kelahiran'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Kelahiran $kelahiran)
    {
        return view('kelahiran.edit', compact('kelahiran'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kelahiran $kelahiran)
    {
        $validatedData = $request->validate([
            'nik' => '',
            'no_kk' => '',
            'nama' => '',
            'jenis_kelamin' => '',
            'tempat_lahir' => '',
            'tgl_lahir' => '',
            'golongan_darah' => '',
            'agama' => '',
            'status' => '',
            'pendidikan' => '',
            'alamat' => '',
        ]);

        if (isset($validatedData['tgl_lahir']) && strpos($validatedData['tgl_lahir'], '-') !== false) {
        } else {
            $tgl_lahir = Carbon::createFromFormat('m/d/Y', $validatedData['tgl_lahir'])->format('Y-m-d');
            $validatedData['tgl_lahir'] = $tgl_lahir;
        }

        $kelahiran->update($validatedData);

        return redirect()->route('kelahiran.index')->with('success', 'Data Berhasil Diperbarui');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kelahiran $kelahiran)
    {
        Kelahiran::destroy($kelahiran->id_kelahiran);
        return redirect()->route('kelahiran.index')->with('success', 'Item has been deleted successfully.');
    }
}
