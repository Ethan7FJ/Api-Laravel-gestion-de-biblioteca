<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registros extends Model
{
    use HasFactory;

    protected $fillable = ['usuario','identificacion','libro_id','fecha_prestamo','fecha_devolucion'];


    public function libro(){
        return $this->belongsTo(libro::class);
    }
}
