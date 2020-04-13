<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // <-- This is required

class Ticket extends Model
{
    use SoftDeletes; // <-- Use This Instead Of SoftDeletingTrait

    protected $fillable = ['categoria', 'estado', 'precio_total', 'cliente', 'creado_por'];

    public function productostickets()
    {
        return $this->hasMany(Productosenticket::class);
    }

}
