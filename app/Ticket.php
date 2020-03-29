<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Ticket extends Model
{
    protected $fillable = ['categoria', 'estado', 'precio_total', 'cliente', 'creado_por'];
}
