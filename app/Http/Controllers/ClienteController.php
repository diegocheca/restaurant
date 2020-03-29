<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    
    public function get_clientes_ticket()
    {
        //
        $posts = Cliente::select('id','apellido','nombre','telefono1','direccion1','ciudad1','numerodireccion1','orientacion1','dni','cantidad_compras','avatar','afavor','deuda')->get();
        return response()->json($posts);
    }



    public function get_cliente_todos_los_datos($id)
    {
        //
        //dd($id);
        $posts = Cliente::find($id);
        return response()->json($posts);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //.
        $cliente_nuevo = new Cliente;
        $cliente_nuevo->apellido = $request->apellido ;
        $cliente_nuevo->nombre = $request->nombre ;
        $cliente_nuevo->telefono1 = $request->telefono1 ;
        $cliente_nuevo->telefono2 = $request->telefono2 ;
        $cliente_nuevo->telefono3 = $request->telefono3 ;
        $cliente_nuevo->telefono4 = $request->telefono4 ;  // en este campo se almacena el email de las personas

        $cliente_nuevo->direccion1 = $request->direccion1 ;
        $cliente_nuevo->ciudad1 = $request->ciudad1 ;
        $cliente_nuevo->numerodireccion1 = $request->numerodireccion1 ;
        $cliente_nuevo->orientacion1 = $request->orientacion1 ;

        $cliente_nuevo->direccion2 = $request->direccion2 ;
        $cliente_nuevo->ciudad2 = $request->ciudad2 ;
        $cliente_nuevo->numerodireccion2 = $request->numerodireccion2 ;
        $cliente_nuevo->orientacion2 = $request->orientacion2 ;

        $cliente_nuevo->direccion = $request->direccion3 ;
        $cliente_nuevo->ciudad3 = $request->ciudad3 ;
        $cliente_nuevo->numerodireccion3 = $request->numerodireccion3 ;
        $cliente_nuevo->orientacion3 = $request->orientacion3 ;

        $cliente_nuevo->dni = $request->dni ;
        $cliente_nuevo->cantidad_compras = 0 ;
        $cliente_nuevo->avatar = null ;
        $cliente_nuevo->cuit = null ;

        $cliente_nuevo->observacion = $request->observacion ;

        $cliente_nuevo->quien_creo = null ;
        $cliente_nuevo->quien_modfico = null ;
        $cliente_nuevo->promos = $request->promos ;

        $cliente_nuevo->afavor = $request->afavor ;
        $cliente_nuevo->deuda = $request->deuda ;

        $cliente_nuevo->ultima_compra = date("Y-m-d H:i:s");

        $cliente_nuevo->facebook = null;
        $cliente_nuevo->instagram = null ;
        $cliente_nuevo->save();

        return response()->json($cliente_nuevo);
        






// $request->apellido
// $request->nombre
// $request->telefono1
// $request->direccion1
// $request->ciudad1
// $request->numerodireccion1
// $request->orientacion1*/
// $request->afavor
// $request->deuda
// //'id': this.cliente_nuevo["nombre"],
// $request->direccion2
// $request->ciudad2
// $request->numerodireccion2
// $request->orientacion2
// $request->direccion3
// $request->ciudad3
// $request->numerodireccion3
// $request->orientacion3
// $request->cantidad_compras
// $request->telefono2
// $request->telefono3
// $request->telefono4
// $request->dni
// $request->cuit
// $request->observacion
// //'quien_creo': '',
// //'quien_modfico': '',
// //'ultima_compra': '',
// $request->promos


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
