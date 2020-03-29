<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ticket;
use App\Productosenticket;

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
		$ticket = new Ticket();
		//echo($request->productos[0]["nombre"]);
		$ticket->categoria = 1;
		$ticket->estado = "en progreso";
		$ticket->precio_total = $request->precio_total;
		$ticket->path_pdf = null;
		$ticket->cliente = $request->cliente_id;
		$ticket->creado_por = $request->creado_por;
		$ticket->save();
		//$post = Ticket::create($request->all());

		//va el 1 xq se crea
		//broadcast(new LikeEvent($reply->id, 1))->toOthers();
		//var_dump($ticket->productos);
		$i=0;
		foreach ($request->productos as $producto) {
			$prodtick = new Productosenticket();
			$prodtick->idproducto = $producto["id"];
			$prodtick->idticket = $ticket->id;
			$prodtick->precio = $producto["precio_total"];
			$prodtick->estado = "en progreso";
			$prodtick->observacion = null;
			$prodtick->cantidad = $producto["cantidad"];
			$prodtick->quien_creo = 1; // poner id del usuario
			$prodtick->quien_actualizo = null;
			$prodtick->unidadmedida = "unidad";
			$prodtick->tamanio = "normal";
			$prodtick->aderezos = "aderezos";
			$prodtick->save();
			/*array(3) { 
				[0]=> array(10) { 
					["id"]=> int(3) 
					["orden"]=> int(1) 
					["nombre"]=> string(12) "papas fritas" 
					["precio_unitario"]=> float(188.94) 
					["cantidad"]=> int(5) 
					["precio_total"]=> float(944.7) 
					["picked"]=> NULL 
					["producto_select"]=> array(18) 
					{ ["id"]=> int(3) ["precio"]=> float(188.94) ["stock"]=> int(89) ["nombre"]=> string(12) "papas fritas" ["observacion"]=> NULL ["icono"]=> string(44) "productos/March2020/WyVzAEjwFBRWyE6f73Fo.jpg" ["foto1"]=> string(44) "productos/March2020/b6S9L9dpdRScYxSg0EGM.jpg" ["foto2"]=> string(44) "productos/March2020/ni4XsO2vsSe3qeIhjIZn.jpg" ["foto3"]=> string(44) "productos/March2020/bI3WSKVXwLfi70GUP5z9.jpg" ["foto4"]=> string(44) "productos/March2020/IpD7m4EiyKeOF1FaPDwb.jpg" ["foto5"]=> string(44) "productos/March2020/LwPxrL3Il0vdK5KYJeTI.jpg" ["foto6"]=> string(44) "productos/March2020/n6UspKM7mpJgUCQSh2Gg.jpg" ["foto7"]=> string(44) "productos/March2020/bO8GJx1TaHRtD6b8VOLV.jpg" ["foto8"]=> string(44) "productos/March2020/NDsplirm3SVX21gzulpV.jpg" ["categoria_id"]=> NULL ["created_at"]=> string(19) "2020-03-06 13:43:37" ["updated_at"]=> string(19) "2020-03-06 13:43:37" ["deleted_at"]=> NULL } ["icono"]=> string(44) "productos/March2020/WyVzAEjwFBRWyE6f73Fo.jpg" ["agregados"]=> array(0) { } } */
		}
		return response()->json($prodtick);
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