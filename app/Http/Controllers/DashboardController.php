<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Penilaian;
use App\Models\Tanggapan;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengaduan = Pengaduan::count();
        $penilaian = Penilaian::count();
        $petugas = User::where('roles', 'TEKNISI')->count();
        $customer = User::where('roles', 'PELANGGAN')->count();
        $belumdiproses = Pengaduan::where('status', 'Belum di Proses')->count();
        $sedangdiproses = Tanggapan::where('status_pengaduan', 'Sedang di Proses')->count();
        $selesai = Tanggapan::where('status_pengaduan', 'Selesai')->count();
        $satu = Penilaian::where('rating', 'Tidak Puas')->count();
        $dua = Penilaian::where('rating', 'Kurang Puas')->count();
        $tiga = Penilaian::where('rating', 'Cukup')->count();
        $empat = Penilaian::where('rating', 'Puas')->count();
        $lima = Penilaian::where('rating', 'Sangat Puas')->count();


        return view('pages.admin.dashboard', [
            'pengaduan' => $pengaduan,
            'penilaian' => $penilaian,
            'petugas' => $petugas,
            'customer' => $customer,
            'belumdiproses' => $belumdiproses,
            'sedangdiproses' => $sedangdiproses,
            'selesai' => $selesai,
            'satu' => $satu,
            'dua' => $dua,
            'tiga' => $tiga,
            'empat' => $empat,
            'lima' => $lima
        ]);
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
