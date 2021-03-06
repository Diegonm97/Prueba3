<?php

namespace App;
use Jenssegers\Date\Date;

use Illuminate\Database\Eloquent\Model;

class Facturacion extends Model
{
    protected $table = 'facturacion';

    protected $fillable = ['id_usuario', 'total_pago', 'tipo'];
}
trait DatesTranslator{
    
    public function getCreatedAtAttribute($date)
{
    return new Date($date);
}
public function getUpdatedAtAttribute ($date)
{
    return new Date($date);
}

}