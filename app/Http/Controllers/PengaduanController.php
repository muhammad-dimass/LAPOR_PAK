<?php

namespace App\Http\Controllers;
use Alert;
use Illuminate\Http\Request;
use App\Models\Pengaduan;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use DataTables;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengaduan = Pengaduan::all();
        $nik = Auth::user()->nik ;
        $pengaduanm = Pengaduan::where('nik', $nik)->get();
        $cek = $pengaduanm->count();
        return view('pengaduan.index', compact('pengaduanm', 'cek', 'pengaduan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pengaduan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'isi_laporan' => ['required','min:3'],
            'nama_laporan' => ['required','min:3'],
            'photo' => ['image'],
            'status' => ['string']
        ]
        );

        $poto = null;

        if($request->hasFile('poto')) {
            $poto = $request->file('poto')->store('poto');
        }

        $pengaduan = new Pengaduan();

        $pengaduan->nik = $request->nik;
        $pengaduan->isi_laporan = $request->isi_laporan;
        $pengaduan->nama_laporan = $request->nama_laporan;
        $pengaduan->poto = $poto;
        $pengaduan->status = $request->status;
        // $pengaduan->photo = $photo;

        $pengaduan->save();
        Alert::success('Berhasil', 'Laporan Berhasil Dikirim');
        if(auth()->user()->level == "admin") {
            return redirect()->route('pengaduan.index');
            } else {
                return redirect()->route('masyarakat.index');
            }
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
    public function edit($id)
    {
        $pengaduan = Pengaduan::find($id);
        return view('pengaduan.edit', compact('pengaduan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $this->validate($request, [
        //     'nik' => ['required','min:3'],
        //     'tgl_pengaduan' => ['required','min:3'],
        //     'isi_laporan' => ['required','numeric','min:10'],
        //     'photo' => ['image'],
        //     'status' => ['required','numeric','min:10']
        // ]
        // );

        $pengaduan = Pengaduan::find($id);

        $poto = $pengaduan->poto;
        if($request->hasFile('poto')) {
            if($poto != null){
             if(Storage::exists($poto)) {
                 Storage::delete($poto);
             }
         }
             $poto = $request->file('poto')->store('poto');
         }

        $pengaduan->nik = $request->nik;
        $pengaduan->isi_laporan = $request->isi_laporan;
        $pengaduan->nama_laporan = $request->nama_laporan;
        $pengaduan->poto = $poto;
        $pengaduan->status = $request->status;
        // $pengaduan->photo = $photo;

        $pengaduan->save();

        return redirect()->route('pengaduan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pengaduan = Pengaduan::find($id);
        $pengaduan->delete();
        Alert::success('Berhasil', 'Laporan Berhasil Dihapus');
        return redirect()->route('pengaduan.index');

    }
}
