<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class libro extends Model
{
    use HasFactory;

    protected $fillable = ['titulo','autor','genero_id','disponible_id'];

    public function genero (){
        return $this->belongsTo(genero::class);
    }

    public function disponible (){
        return $this->belongsTo( diponibilidad::class);
    }

    public function registro()
    {
        return $this->HasMany( registros::class);
    }
}
