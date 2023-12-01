<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = ['Total', 'Estado', 'Telefono', 'Nombre', 'Email', 'Direccion'];

    public function productos()
    {
    return $this->belongsToMany('App\Models\Producto')->withPivot('Cantidad');
    }
}
