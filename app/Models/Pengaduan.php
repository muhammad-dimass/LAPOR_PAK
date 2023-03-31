<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    public function tanggapan_pengaduan()
    {
        return $this->hasMany(Tanggapan::class);
    }
}
