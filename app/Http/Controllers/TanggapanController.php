<?php

namespace App\Http\Controllers;
use App\Models\Tanggapan;
use App\Models\Pengaduan;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Alert;

use Illuminate\Http\Request;

class TanggapanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tanggapan = Tanggapan::all();

        $nik = Auth::user()->nik ;
        $pengaduan = Pengaduan::where('nik', $nik)->value('id');
        $tanggapanm = Tanggapan::where('pengaduan_id', $pengaduan)->get();
        $cek = $tanggapanm->count();
        return view('tanggapan.index', compact('tanggapan', 'tanggapanm', 'cek'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // $this->validate($request, [
        //     'nik' => ['required','min:3'],
        //     'tgl_pengaduan' => ['required','min:3'],
        //     'isi_laporan' => ['required','min:10'],
        //     'nama_laporan' => ['required','min:10'],
        //     'photo' => ['image'],
        //     'status' => ['required','numeric','min:10']
        // ]
        // );
        
        $tanggapan = new Tanggapan();

        $tanggapan->pengaduan_id = $request->id_pengaduan;
        $tanggapan->tanggapan = $request->tanggapan;
        $tanggapan->user_id = $request->id_petugas;

        $tanggapan->save();

        $pengaduan = Pengaduan::find($request->id_pengaduan);
        $pengaduan->status = "selesai";

        $pengaduan->save();
        Alert::info('Berhasil', 'Tanggapan Berhasil Dikirim');
        return redirect()->route('pengaduan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pengaduan = Pengaduan::find($id);
        return view('tanggapan.edit', compact('pengaduan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tanggapan = tanggapan::find($id);
        $tanggapan->delete();
        Alert::success('Berhasil', 'Laporan Berhasil Dihapus');
        return redirect()->route('tanggapan.index');
    }
}
