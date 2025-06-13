<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class jenis extends Model
{
    protected $table = 'jenis';
    protected $fillable = ['nama'];

    public function kendaraans()
    {
        return $this->hasMany(Kendaraan::class, 'jenis_kendaraan_id');
    }
}
