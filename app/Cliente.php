<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Cliente extends Model
{
	protected $fillable = ['apellido', 'nombre', 'telefono1', 'direccion1', 'ciudad1', 'numerodireccion1', 'orientacion1', 'telefono4', 'dni'];
	//'telefono4': '', -->este campo ahora va a ser el email
}
