<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productosenticket extends Model
{
    //
    protected $fillable = ['idproducto', 'idticket', 'precio', 'estado', 'unidadmedida'];

     public function tickets()
    {
        return $this->belongsTo(Tickets::class);
    }


}
