<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaVueController extends Controller
{
    //
    public function inicio_vue(){
        return view('prueba_vue_view');
    }

	public function imprimir(){
	     $pdf = \PDF::loadView('generacion_pdf');
	     return $pdf->download('ejemplo.pdf');
	}

	public function crear_ticket(){
	    //return view('ejemplo.pdf');
	    //return view('blog.index', compact('idioma','posts', 'posts_nombres' ,'lista_titulos_spanish'));
	    return view('tickets.index');
	}



}
