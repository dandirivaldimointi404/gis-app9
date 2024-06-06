<?php

namespace App\Http\Controllers;

use App\Models\Kelurahan;
use App\Models\Rt;
use App\Models\User;
use Illuminate\Http\Request;

class DPenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return view('dpengguna.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rt = Rt::with('kelurahan')->get();
        return view('dpengguna.create', compact('rt'));
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
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:8',
            'level' => 'required|string',
            'rt_kd' => 'nullable|exists:tb_rt,kd_rt'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
        if ($validatedData['level'] !== 'rt') {
            $validatedData['rt_kd'] = null;
        }

        User::create($validatedData);

        return redirect()->route('dpengguna.index')->with('success', 'Pengguna berhasil ditambahkan.');
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
    public function edit(User $dpengguna)
    {
        $rt = Rt::with('kelurahan')->get();
        return view('dpengguna.edit', compact('dpengguna', 'rt'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $dpengguna)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,' . $dpengguna->id,
            'password' => 'nullable|string|min:8',
            'level' => 'required|string|max:10',
            'rt_kd' => 'nullable|exists:tb_rt,kd_rt'
        ]);

        if ($request->filled('password')) {
            $validatedData['password'] = bcrypt($request->password);
        } else {
            unset($validatedData['password']);
        }

        if ($validatedData['level'] !== 'rt') {
            $validatedData['rt_kd'] = null;
        }

        $dpengguna->update($validatedData);

        return redirect()->route('dpengguna.index')->with('success', 'Pengguna berhasil diperbarui.');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $dpengguna)
    {
        $dpengguna->delete();
        return redirect()->route('dpengguna.index')->with('success', 'Pengguna berhasil dihapus.');
    }
}
