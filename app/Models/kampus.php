<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kampus extends Model
{
    protected $fillable = ['nama', 'alamat', 'latitude', 'longitude'];

    public function areaParkir()
    {
        return $this->hasMany(AreaParkir::class);
    }
}
