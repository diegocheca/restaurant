<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductoController extends Controller
{
    //
	//ahi esta la respuesta del voyager

    public function index()
    {
        return view('tickets');
    }

    public function get(Request $request)
    {
        $posts = Producto::orderBy('created_at', 'desc')->get();
        return response()->json($posts);
    }

    public function store(Request $request)
    {
        $post = Producto::create($request->all());

        return response()->json($post);
    }

    public function delete($id)
    {
        Producto::destroy($id);

        return response()->json("ok");
    }
}




