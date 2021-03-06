<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    protected $table = 'sede';

    protected $fillable = ['nombre', 'id_ciudad', 'telefono', 'direccion'];

    // Realiza la busqueda en base de datos de acuerdo a la id
    public function scopeSearch1($query, $nombre)              //Buscador por medio del nombre
    {
        return $query->where('nombre', 'LIKE', "%$nombre%");
    }

    public function scopeSearch($query)
    {
        return $query->select('*');
    }
}
