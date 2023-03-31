<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\TanggapanController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::resource('pengaduan', PengaduanController::class)->middleware('auth');
Route::resource('tanggapan', TanggapanController::class)->middleware('auth');

Route::middleware('auth', 'Level:masyarakat')->group(function () {
    Route::resource('masyarakat', MasyarakatController::class);
});

Route::get('/generate-pdf', [PdfController::class, 'generatePDF'])->name('laporan');
Route::middleware('auth', 'Level:admin')->group(function () {
    Route::resource('pengguna', PenggunaController::class);
});

Route::get('/register-admin', function () {
    return view('auth.register-admin');
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    if(auth()->user()->level == "admin") {
        return redirect()->route('pengaduan.index');
        } elseif(auth()->user()->level == "petugas")  {
            return redirect()->route('pengaduan.index');
        } else {
            return redirect()->route('masyarakat.index');
        }
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
