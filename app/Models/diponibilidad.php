<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diponibilidad extends Model
{
    use HasFactory;

    protected $fillable = ['disponible'];

    public function libro()
    {
        return $this->HasMany(libro::class);
    }
}
