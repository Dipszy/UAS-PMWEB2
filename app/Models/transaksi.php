<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $fillable = ['tanggal', 'mulai', 'akhir', 'keterangan', 'biaya', 'kendaraan_id', 'areaparkir_id'];

    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class);
    }

    public function areaparkir()
    {
        return $this->belongsTo(AreaParkir::class);
    }
}
