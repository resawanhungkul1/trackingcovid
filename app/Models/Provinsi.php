<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    use HasFactory;
    protected $table='provinsis';
    protected $fillable=['nm_provinsi','kode_provinsi'];
    public function kota()
    {
        return $this->hasMany(Kota::class);
    }
}
