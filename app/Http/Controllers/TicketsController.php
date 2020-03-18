<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;

class TicketsController extends Controller
{
    //voy a crear una tabla de la bd desde voyager , q luego usara este controller
     //laravel_vue_axios/app/http/controllers/PostController.php

	//ahi esta la respuesta del voyager

    public function index()
    {
        return view('tickets');
    }

    public function get(Request $request)
    {
        $posts = Ticket::orderBy('created_at', 'desc')->get();
        return response()->json($posts);
    }

    public function store(Request $request)
    {
        $post = Ticket::create($request->all());

        //va el 1 xq se crea
        broadcast(new LikeEvent($reply->id, 1))->toOthers();

        return response()->json($post);
    }

    public function delete($id)
    {
        Ticket::destroy($id);

        // va el 0 xq se boora
        broadcast(new LikeEvent($reply->id, 0))->toOthers();


        return response()->json("ok");
    }

    public function comanda_ver()
    {
        return view('comanda.index');
    }
    public function comanda_index_componente()
    {
        return view('comanda.index_componente');
    }

    
    public function iconos_ver()
    {
        //dd("hola desde el controller");
        return view('iconos.iconos_animados_view');
    }
    
}


/*
ejemplo de tutorial:

public function likeIt(Reply $reply)
{
    $reply->like()->create([
       'user_id' => auth()->id(),
     ]);
     broadcast(new LikeEvent($reply->id, 1))->toOthers();
}
public function unLikeIt(Reply $reply)
{
    $reply->like()->where('user_id', auth()->id())->first()->delete();
    broadcast(new likeEvent($reply->id, 0))->toOthers();
}
*/