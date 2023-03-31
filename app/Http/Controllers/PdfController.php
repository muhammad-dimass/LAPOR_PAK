<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Dompdf\Dompdf;

class PdfController extends Controller
{
    public function generatePDF()
    {
        $data = [
            'title' => 'Laporan Pengaduan Masyarakat',
            'title2' => 'Laporan tanggapan Pengaduan Masyarakat',
            'pengaduan' => Pengaduan::all(),
            'tanggapan' => Tanggapan::all(),
        ];

        $pdf = new Dompdf();
        $pdf->loadHtml(view('laporan.index', $data));
        $pdf->setPaper('A4', 'portrait');
        $pdf->render();
        $pdf->stream();
    }
}
