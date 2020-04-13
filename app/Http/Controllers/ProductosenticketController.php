<?php

namespace App\Http\Controllers;

use App\Productosenticket;
use Illuminate\Http\Request;

class ProductosenticketController extends \TCG\Voyager\Http\Controllers\VoyagerBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     //
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Productosenticket  $productosenticket
     * @return \Illuminate\Http\Response
     */
    // public function show(Productosenticket $productosenticket)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Productosenticket  $productosenticket
     * @return \Illuminate\Http\Response
     */
    // public function edit(Productosenticket $productosenticket)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Productosenticket  $productosenticket
     * @return \Illuminate\Http\Response
     */
    public function update_axios($id, $estado)
    {

        if( $estado == 1 )
        {
            Productosenticket::where('id',$id)->update([ 'estado' => "termino" , 'color_prod_div' => "lime"]);
        }
        if( $estado == 2 )
        {
            Productosenticket::where('id',$id)->update([ 'estado' => "cocinando" , 'color_prod_div' => "indigo"]);
        }
        if( $estado == 3 )
        {
            Productosenticket::where('id',$id)->update([ 'estado' => "cancelado" , 'color_prod_div' => "orange"]);
        }




            echo "listo";


       /* var_dump($id);
        var_dump($estado);*/
        //
        // $productosenticket->update($request->all());

      //  return response()->json($task, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Productosenticket  $productosenticket
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Productosenticket $productosenticket)
    // {
    //     //
    // }
}
