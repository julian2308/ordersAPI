<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = ['nombre', 'descripcion', 'imagen', 'categoria', 'precio'];

    public function ordenes()
    {
    return $this->belongsToMany('App\Models\Orden');
    }
}
