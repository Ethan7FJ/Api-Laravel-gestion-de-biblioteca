<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class genero extends Model
{
    use HasFactory;

    protected $fillable = ['genero'];

    public function libro()
    {
        return $this->HasMany(libro::class);
    }
}
