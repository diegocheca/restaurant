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

	

	public function get_ticket_en_progreso()
	{
		//
		//$posts = Productosenticket::select('productosentickets.id', 'productosentickets.idproducto', 'productosentickets.idticket', 'productosentickets.precio', 'productosentickets.cantidad',
		 //'productosentickets.unidadmedida', 'productosentickets.tamanio', 'productosentickets.aderezos')
		/*$posts = Productosenticket::select('*')
		->join('productos', 'productos.id', '=', 'productosentickets.idproducto')
		->join('tickets', 'tickets.id', '=', 'productosentickets.idticket')
		->join('clientes', 'tickets.cliente', '=', 'clientes.id')
		->where('productosentickets.estado', 'en progreso')
		->get();*/

		//Primero voy a conseguir todos los tickets en proceso
		$tickets_en_proceso = Ticket::select(
			'tickets.id AS ticket_id' , 
			'tickets.categoria AS ticket_categoria' , 
			'tickets.estado AS ticket_estado' , 
			'tickets.precio_total AS ticket_precio_total' , 
			'tickets.path_pdf AS ticket_path_pdf' , 
			'tickets.cliente AS ticket_cliente' , 
			'tickets.creado_por AS ticket_creado_por' , 
			'tickets.created_at AS ticket_created_at' , 
			'tickets.updated_at AS ticket_updated_at' , 
			'tickets.deleted_at AS ticket_deleted_at' ,
			'tickets.colordivproductos AS ticket_colordivproductos',
			'tickets.colordiv AS ticket_colordiv',

			
			


			'clientes.id AS cliente_id',
			'clientes.nombre AS cliente_nombre',
			'clientes.apellido AS cliente_apellido',
			'clientes.telefono1 AS cliente_telefono1',
			'clientes.telefono2 AS cliente_telefono2',
			'clientes.direccion1 AS cliente_direccion1',
			'clientes.ciudad1 AS cliente_ciudad1',
			'clientes.numerodireccion1 AS cliente_numerodireccion1',
			'clientes.orientacion1 AS cliente_orientacion1',
			'clientes.avatar AS cliente_avatar',
		)

		->join('clientes', 'tickets.cliente', '=', 'clientes.id')
		->where('tickets.estado','LIKE', "%en progreso%")
		//->where('tickets.id', 14)
		->get();
		//$temp = response()->json($posts);


		// $tikets_recuperados = Ticket::find(14);
		// $prodticket = $tikets_recuperados->Productosenticket;
		// dd($prodticket);
		//dd(response()->json($tickets_en_proceso));

		//AHORA q tengo table tickets y cliente 
		///voy a hacer un foreach a cada uno delos tickets_cliente contra los productostickets
		//$lista_de_productos= array();
		$indice = 0;

		foreach ($tickets_en_proceso as $tickets_cliente) {
			$temp = Productosenticket::select( 
			'productosentickets.id AS productostickets_id' ,
			'productosentickets.idproducto AS productostickets_idproducto' ,
			'productosentickets.idticket AS productostickets_idticket' ,
			'productosentickets.precio AS productostickets_precio' ,
			'productosentickets.estado AS productostickets_estado' ,
			'productosentickets.observacion AS productostickets_observacion' ,
			'productosentickets.created_at AS productostickets_created_at' ,
			'productosentickets.updated_at AS productostickets_updated_at' ,
			'productosentickets.deleted_at AS productostickets_deleted_at' ,
			'productosentickets.cantidad AS productostickets_cantidad' ,
			'productosentickets.quien_creo AS productostickets_quien_creo' ,
			'productosentickets.quien_actualizo AS productostickets_quien_actualizo' ,
			'productosentickets.unidadmedida AS productostickets_unidadmedida' ,
			'productosentickets.tamanio AS productostickets_tamanio' ,
			'productosentickets.aderezos AS productostickets_aderezos' ,
			'productosentickets.color_prod_div AS productostickets_color_prod_div' ,
				

			'productos.id AS productos_id' , 
			'productos.precio AS productos_precio' , 
			'productos.stock AS productos_stock' , 
			'productos.nombre AS productos_nombre' , 
			'productos.observacion AS productos_observacion' , 
			'productos.icono AS productos_icono' , 
			'productos.foto1 AS productos_foto1' , 
			'productos.foto2 AS productos_foto2' , 
			'productos.foto3 AS productos_foto3' , 
			'productos.foto4 AS productos_foto4' , 
			'productos.foto5 AS productos_foto5' , 
			'productos.foto6 AS productos_foto6' , 
			'productos.foto7 AS productos_foto7' , 
			'productos.foto8 AS productos_foto8' , 
			'productos.categoria_id AS productos_categoria_id' , 
			'productos.created_at AS productos_created_at' , 
			'productos.updated_at AS productos_updated_at' , 
			'productos.deleted_at AS productos_deleted_at' ,
			'productos.colordivproducto AS productos_colordivproducto' , 
			)
			->join('productos', 'productos.id', '=', 'productosentickets.idproducto')
			->where('productosentickets.idticket', $tickets_cliente->ticket_id)
			->get()->toArray();
			$tickets_en_proceso[$indice]->productos = $temp;
			//$lista_de_productos [$tickets_cliente->ticket_id] = $temp;
			$indice++;
		}


		//dd($tickets_en_proceso);

		/*foreach ($tickets_en_proceso as $tickets_cliente) {
			echo "id".$tickets_cliente->ticket_id;
			var_dump($tickets_cliente->productos);
			echo "\n\n\n";

		}


		die();*/





	/*	$posts = Ticket::select('productosentickets.*',
			'tickets.id AS ticket_id' , 
			'tickets.categoria AS ticket_categoria' , 
			'tickets.estado AS ticket_estado' , 
			'tickets.precio_total AS ticket_precio_total' , 
			'tickets.path_pdf AS ticket_path_pdf' , 
			'tickets.cliente AS ticket_cliente' , 
			'tickets.creado_por AS ticket_creado_por' , 
			'tickets.created_at AS ticket_created_at' , 
			'tickets.updated_at AS ticket_updated_at' , 
			'tickets.deleted_at AS ticket_deleted_at' , 

			'productos.id AS productos_id' , 
			'productos.precio AS productos_precio' , 
			'productos.stock AS productos_stock' , 
			'productos.nombre AS productos_nombre' , 
			'productos.observacion AS productos_observacion' , 
			'productos.icono AS productos_icono' , 
			'productos.foto1 AS productos_foto1' , 
			'productos.foto2 AS productos_foto2' , 
			'productos.foto3 AS productos_foto3' , 
			'productos.foto4 AS productos_foto4' , 
			'productos.foto5 AS productos_foto5' , 
			'productos.foto6 AS productos_foto6' , 
			'productos.foto7 AS productos_foto7' , 
			'productos.foto8 AS productos_foto8' , 
			'productos.categoria_id AS productos_categoria_id' , 
			'productos.created_at AS productos_created_at' , 
			'productos.updated_at AS productos_updated_at' , 
			'productos.deleted_at AS productos_deleted_at' ,

			'clientes.id AS cliente_id',
			'clientes.nombre AS cliente_nombre',
			'clientes.apellido AS cliente_apellido',
			'clientes.telefono1 AS cliente_telefono1',
			'clientes.telefono2 AS cliente_telefono2',
			'clientes.direccion1 AS cliente_direccion1',
			'clientes.ciudad1 AS cliente_ciudad1',
			'clientes.numerodireccion1 AS cliente_numerodireccion1',
			'clientes.orientacion1 AS cliente_orientacion1',
			'clientes.avatar AS cliente_avatar',
		)

		->join('productosentickets', 'tickets.id', '=', 'productosentickets.idticket')
		->join('productos', 'productos.id', '=', 'productosentickets.idproducto')
		->join('clientes', 'tickets.cliente', '=', 'clientes.id')
		->where('tickets.id', 14)
		->get();*/
		//$temp = response()->json($posts);


		// $tikets_recuperados = Ticket::find(14);
		// $prodticket = $tikets_recuperados->Productosenticket;
		// dd($prodticket);
		return response()->json($tickets_en_proceso);



		//->join('cliente', 'cliente.id', '=', 'categories.user_id')


		
		//::select('id','apellido','nombre','telefono1','direccion1','ciudad1','numerodireccion1','orientacion1','dni','cantidad_compras','avatar','afavor','deuda')->get();


		//$data = User::select('users.nameUser', 'categories.nameCategory')
		//        ->join('categories', 'users.idUser', '=', 'categories.user_id')
		 //       ->get();

		return response()->json($posts);
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