<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Pengaduan;
// use Barryvdh\DomPDF\PDF;
use App\Models\Penilaian;
use App\Models\Tanggapan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengaduans = Pengaduan::orderBy('created_at', 'desc')->get();

        return view('pages.admin.pengaduan.index', [
            'pengaduans' => $pengaduans
        ]);
    }

    public function belum_diproses()
    {
        $pengaduans = Pengaduan::where('status', 'Belum di Proses')->orderBy('created_at', 'desc')->get();

        return view('pages.admin.pengaduan.belumdiproses', [
            'pengaduans' => $pengaduans
        ]);
    }


    public function sedang_diproses()
    {

        // $pengaduans = Tanggapan::where('status_pengaduan', 'Sedang di Proses')->orderBy('created_at', 'desc')->get();
        $pengaduans = Pengaduan::with('tanggapan')->where('status', 'Sedang di Proses')->orderBy('created_at', 'desc')->get();

        return view('pages.admin.pengaduan.sedangdiproses', [
            'pengaduans' => $pengaduans
        ]);
    }

    public function selesai()
    {
        // $pengaduans = Pengaduan::orderBy('created_at', 'desc')->get();

        $tanggapans = Tanggapan::with('pengaduan')->where('status_pengaduan', 'Selesai')->orderBy('created_at', 'desc')->get();

        return view('pages.admin.pengaduan.selesai', [
            'tanggapans' => $tanggapans
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('input-pengaduan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'keterangan' => 'required',
            'nomor_pelanggan' => 'required'
        ]);

        $id = Auth::user()->id;
        $nama = Auth::user()->name;

        $data = $request->all();
        $data['user_id'] = $id;
        $data['nama'] = $nama;


        Pengaduan::create($data);

        Alert::success('Berhasil', 'Pengaduan terkirim');

        return redirect()->route('home');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pengaduans = Pengaduan::with([
            'details', 'user'
        ])->findOrFail($id);

        $tanggapans = Tanggapan::where('pengaduan_id',$id)->orderBy('created_at', 'DESC')->get();

        $penilaians = Penilaian::where('pengaduans_id', $id)->get();

        return view('pages.admin.pengaduan.detail',[
        'pengaduans' => $pengaduans,
        'tanggapans' => $tanggapans,
        'penilaians' => $penilaians

        ]);
    }

    public function detail_pengaduan($id)
    {
        $pengaduans = Pengaduan::with([
            'details', 'user',
        ])->findOrFail($id);

        $tanggapans = Tanggapan::where('pengaduan_id',$id)->orderBy('created_at', 'DESC')->get();

        $penilaians = Penilaian::where('pengaduans_id', $id)->get();

        return view('detail-pengaduan2',[
        'pengaduans' => $pengaduans,
        'tanggapans' => $tanggapans,
        'penilaians' => $penilaians
        ]);
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

    public function cetakForm()
    {
        return view('pages.admin.pengaduan.export');
    }



    public function cetakLaporan (Request $request)
    {

        if(isset($_GET['cari'])) {
            $pengaduans = Pengaduan::whereBetween('created_at', [$request->start_date, $request->end_date])->get();

            $pdf = PDF::loadview('pages.admin.pengaduan.exportAll',compact('pengaduans'));
            return $pdf->download('laporan-semua-pengaduan.pdf');

        }

    }


    public function pengaduan_pelanggan()
    {
        $pengaduans = Pengaduan::with(['tanggapan', 'user'])->where('user_id', Auth::user()->id)->orderBy('created_at', 'DESC')->get();

        return view('lihat-pengaduan', [
            'pengaduans' => $pengaduans
        ]);
    }

    public function pengaduan()
    {
        return view('pengaduan');
    }







}
