<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alquiler extends Model
{
    use HasFactory;
}
public function movie()
    {
        return $this->hasMany(peliculas::class);
    }
    public function user()
    {
        return $this->hasOne(user::class);
    }