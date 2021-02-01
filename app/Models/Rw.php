<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rw extends Model
{
    use HasFactory;
    protected $table='rws';
    public function kelurahan()
    {
        return $this->belongsTo(Kelurahan::class,'id_kelurahan');
    }
    public function kasus()
    {
        return $this->belongsTo(Kasus2::class,'id_rw');
        
    }
}
