<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kendaraan extends Model
{
    protected $fillable = ['merk', 'pemilik', 'nopol', 'thn_beli', 'deskripsi', 'jenis_kendaraan_id'];

    public function jenis()
    {
        return $this->belongsTo(Jenis::class, 'jenis_kendaraan_id');
    }

    public function transaksis()
    {
        return $this->hasMany(Transaksi::class);
    }
}
