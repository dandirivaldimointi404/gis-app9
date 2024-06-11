<?php

namespace App\Http\Controllers;

use App\Models\Kelahiran;
use App\Models\Kematian;
use App\Models\Kepindahan;
use App\Models\Rt;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class DPertumbuhanController extends Controller
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
        $kepindahan = Kepindahan::with('rt')->get();
        return view('dpertumbuhan.index', compact(['kelahiran', 'kematian', 'kepindahan']));
    }

    // public function downloadPDF()
    // {
    //     $kelahiran = Kelahiran::with('rt')->get();
    //     $kematian = Kematian::with('rt')->get();
    //     $kepindahan = Kepindahan::with('rt')->get();
    //     $pdf = PDF::loadView('dpertumbuhan.pdf_view', compact('kelahiran', 'kematian', 'kepindahan'));
    //     // return $pdf->download('data-pertumbuhan.pdf');
    //     return $pdf->stream('data-pertumbuhan.pdf');
    // }

    public function downloadPDF()
{
    $kelurahans = Rt::with('kelurahan')->get(); 
    $data = [];

    $previousMonth = now()->subMonth()->month;
    $previousYear = now()->subMonth()->year;

    foreach ($kelurahans as $kelurahan) {

        $lahirLPrevious = Kelahiran::where('rt_kd', $kelurahan->kd_rt)->where('jenis_kelamin', 'laki-laki')->whereMonth('tgl_lahir', $previousMonth)->whereYear('tgl_lahir', $previousYear)->count();
        $lahirPPrevious = Kelahiran::where('rt_kd', $kelurahan->kd_rt)->where('jenis_kelamin', 'perempuan')->whereMonth('tgl_lahir', $previousMonth)->whereYear('tgl_lahir', $previousYear)->count();

        $pendatangLPrevious = Kepindahan::where('rt_kd', $kelurahan->kd_rt)->where('jenis_kelamin', 'laki-laki')->whereMonth('tgl_pindah', $previousMonth)->whereYear('tgl_pindah', $previousYear)->count();
        $pendatangPPrevious = Kepindahan::where('rt_kd', $kelurahan->kd_rt)->where('jenis_kelamin', 'perempuan')->whereMonth('tgl_pindah', $previousMonth)->whereYear('tgl_pindah', $previousYear)->count();

        // Perhitungan penduduk awal dari bulan sebelumnya
        $pendudukAwalL = $lahirLPrevious + $pendatangLPrevious ;
        $pendudukAwalP = $lahirPPrevious + $pendatangPPrevious ;

        // Ambil data kelahiran, kematian, pendatang, dan pindah dari bulan ini
        $lahirL = Kelahiran::where('rt_kd', $kelurahan->kd_rt)->where('jenis_kelamin', 'laki-laki')->whereMonth('tgl_lahir', now()->month)->count();
        $lahirP = Kelahiran::where('rt_kd', $kelurahan->kd_rt)->where('jenis_kelamin', 'perempuan')->whereMonth('tgl_lahir', now()->month)->count();

        $matiL = Kematian::where('rt_kd', $kelurahan->kd_rt)->where('jenis_kelamin', 'laki-laki')->whereMonth('tgl_kematian', now()->month)->count();
        $matiP = Kematian::where('rt_kd', $kelurahan->kd_rt)->where('jenis_kelamin', 'perempuan')->whereMonth('tgl_kematian', now()->month)->count();

        $pendatangL = Kepindahan::where('rt_kd', $kelurahan->kd_rt)->where('jenis_kelamin', 'laki-laki')->whereMonth('tgl_pindah', now()->month)->count();
        $pendatangP = Kepindahan::where('rt_kd', $kelurahan->kd_rt)->where('jenis_kelamin', 'perempuan')->whereMonth('tgl_pindah', now()->month)->count();

        $pindahL = Kepindahan::where('rt_kd', $kelurahan->kd_rt)->where('jenis_kelamin', 'laki-laki')->whereMonth('tgl_pindah', now()->month)->count();
        $pindahP = Kepindahan::where('rt_kd', $kelurahan->kd_rt)->where('jenis_kelamin', 'perempuan')->whereMonth('tgl_pindah', now()->month)->count();

        // Perhitungan penduduk akhir bulan ini
        $pendudukAkhirL = $pendudukAwalL + $lahirL + $pendatangL;
        $pendudukAkhirP = $pendudukAwalP + $lahirP + $pendatangP;

        $data[] = [
            'kelurahan' => $kelurahan->nama_rt,
            'penduduk_awal' => ['laki-laki' => $pendudukAwalL, 'perempuan' => $pendudukAwalP, 'total' => $pendudukAwalL + $pendudukAwalP],
            'lahir' => ['laki-laki' => $lahirL, 'perempuan' => $lahirP, 'total' => $lahirL + $lahirP],
            'mati' => ['laki-laki' => $matiL, 'perempuan' => $matiP, 'total' => $matiL + $matiP],
            'pendatang' => ['laki-laki' => $pendatangL, 'perempuan' => $pendatangP, 'total' => $pendatangL + $pendatangP],
            'pindah' => ['laki-laki' => $pindahL, 'perempuan' => $pindahP, 'total' => $pindahL + $pindahP],
            'penduduk_akhir' => ['laki-laki' => $pendudukAkhirL, 'perempuan' => $pendudukAkhirP, 'total' => $pendudukAkhirL + $pendudukAkhirP],
        ];
    }

    $pdf = PDF::loadView('dpertumbuhan.pdf_view', compact('data'));
    return $pdf->stream('data-pertumbuhan.pdf');
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
