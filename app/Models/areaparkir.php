<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class areaparkir extends Model
{

     protected $table = 'areaparkirs';

     protected $fillable = [
        'nama',
        'kapasitas',
        'keterangan',
        'kampus_id'
    ];

    protected $guarded = [
        'id',
    ];

    public function kampus()
    {
        return $this->belongsTo(Kampus::class);
    }

    public function transaksis()
    {
        return $this->hasMany(Transaksi::class);
    }
}
