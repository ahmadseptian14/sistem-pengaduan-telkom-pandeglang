<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kritik;
use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class KritikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kritiks = Kritik::where('users_id', Auth::user()->id )->orderBy('created_at', 'desc')->get();

        return view('kritik.index', [
            'kritiks' => $kritiks
        ]);
    }

    public function admin_index()
    {
        $kritiks = Kritik::orderBy('created_at', 'desc')->get();

        return view('pages.admin.kritik.index', [
            'kritiks' => $kritiks
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kritik.create');
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
            'kritik' => 'required',
            'saran' => 'required'
        ]);

        $id = Auth::user()->id;

        $data = $request->all();

        $data['users_id'] = $id;
        $data['status'] = 'Belum ditanggapi';

        Kritik::create($data);

        Alert::success('Berhasil', 'Kritik dan Saran terkirim   ');

        return redirect()->route('kritik.index');

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
