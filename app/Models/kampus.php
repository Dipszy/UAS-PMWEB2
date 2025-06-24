<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kampus extends Model
{
    protected $table = 'kampuses';

    protected $fillable = [
        'nama',
        'alamat',
        'gambar',
        'latitude',
        'longitude'
    ];

    protected $guarded = [
        'id',
    ];

    public function areaParkir()
    {
        return $this->hasMany(AreaParkir::class);
    }
}
