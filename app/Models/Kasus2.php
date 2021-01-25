<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasus2 extends Model
{
    use HasFactory;
    protected $table='kasus2s';
    public function rw()
    {
        return $this->belongsTo(Rw::class,'id_rw');
        
    }
}
