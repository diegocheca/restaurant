<template>
	<div class="row">
		<div class="col-md-12">
			<div class="tab-content" id="pills-tabContent" style="width:100%">
				<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
					<div v-for="(ticket,index_t) in ticketshechos_de_bd" :key=" ticket.ticket_id">
						<div class="row" v-bind:style="{ background: ticket.ticket_colordiv}">
							<div class="col-3" style="margin-left:0px; margin-right:0px; padding-left: 0px; padding-right: 0px">
								<card-info-ticket v-on:speak="speakMethod($event)" :mensaje="ticket.cliente_apellido + ', ' + ticket.cliente_nombre" :fechacreacion="ticket.ticket_created_at" :messa="ticket.cliente_apellido" :colordeldiv="ticket.ticket_colordiv" :id="ticket.ticket_id"></card-info-ticket>
							</div>
							<div class="col-sm" v-for="(prod,index) in ticket.productos" :key="prod.productos_id" style="margin-left:0px; margin-right:0px; padding-left: 0px; padding-right: 0px">
								<div class="card text-white" v-bind:style="{ background: prod.productostickets_color_prod_div}" >
									<img v-bind:src="'http://localhost:8000/storage/' + prod.productos_foto1" alt="Card image" width="70%" height="200px"/> 
									<div class="card-img-overlay">
										<p>{{prod.productos_nombre}}</p>
										<button type="button" class="btn btn-success btn-circle btn-sm"  v-on:click="cambio_estado_producto(index, index_t, prod.productos_id, ticket.ticket_id, 1)"><icon-ticks-simple></icon-ticks-simple></button>
										<button type="button" class="btn btn-primary btn-circle btn-sm"  v-on:click="cambio_estado_producto(index, index_t, prod.productos_id, ticket.ticket_id, 2)"><icon-ticks-simple></icon-ticks-simple></button>
										<button type="button" class="btn btn-danger btn-circle btn-sm"  v-on:click="cambio_estado_producto(index, index_t, prod.productos_id, ticket.ticket_id, 3)">x</button>
										<p class="card-text"><font color="black"> {{prod.productos_stock}}</font></p>
										<p class="card-text"><font color="black">{{since(prod.productos_created_at)}} {{prod.productostickets_id}}</font></p>
									</div>
								</div>
							</div>
							 

								<!--<card-producto-ticket></card-producto-ticket>-->
									


							<!--<div class="col-sm">
								<div class="card bg-dark text-white">
									<img class="card-img" src="" alt="Card image">
									<div class="card-img-overlay">
										<h5 class="card-title">Card title</h5>
										<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
										<p class="card-text">Last updated 3 mins ago</p>
									</div>
								</div>
							</div>-->
						</div>
						<hr>
					</div>
				</div>
			</div>
		</div>
		<icon-ticks></icon-ticks>
		<icon-ticks-simple></icon-ticks-simple>

		{{ticketshechos_de_bd}}
		<!--	<app-typography-icon />
	  <app-animated-icon />-->

	</div>
</template>

<script>
	import toastr from 'toastr'
	import moment from 'moment'
//por poner la nueva variable con todas las cosas de la bd
	Vue.component('card-producto-ticket', require('./CardProductoTicketComponent.vue').default);
	Vue.component('card-info-ticket', require('./CardInfoTicketComponent.vue').default);

	Vue.component('app-typography-icon', require('./AppTypographyIcon.vue').default);
	Vue.component('icon-ticks', require('./icons/ticks.vue').default);
	Vue.component('icon-ticks-simple', require('./icons/ticks-simple.vue').default);
	//Vue.component('app-animated-icon', require('./AppAnimatedIcon.vue').default);
	moment.lang('es');

	export default {
		name: "ticket-row",
		data() {
			return {
				mens:"HOLA desde vue",
				ticketshechos_de_bd: [],
				ticketshechos: [
				{
					id: 200,
					productos:[
					{
						id: 222,
						nombre: "Empanada de carne",
						colordivproductos:'white',
						descripcion: "Son emepandasd de masa y con rellono de super carne",
						source: 'https://www.laespanolaaceites.com/wp-content/uploads/2019/06/empanadas-arabes-1080x671.jpg'
					  },
					  {
						id: 247,
						nombre: "Lomos suecos",
						colordivproductos:'white',
						descripcion: "Es un super sanguche de pan con carne al medio y tomate y lechuga",
						source: 'https://www.laespanolaaceites.com/wp-content/uploads/2019/06/empanadas-arabes-1080x671.jpg'
					  }
					],
					nombre: "eeee",
					colordiv:'white',
					colordivproductos:'white',
					descripcion: "Son emepandasd de masa y con rellono de super carne",
					source: 'https://www.laespanolaaceites.com/wp-content/uploads/2019/06/empanadas-arabes-1080x671.jpg'
				  },
				  {
					id: 98,
					productos:[
					{
						id: 332,
						nombre: "Empanada de carne",
						colordivproductos:'white',
						descripcion: "Son emepandasd de masa y con rellono de super carne",
						source: 'https://www.laespanolaaceites.com/wp-content/uploads/2019/06/empanadas-arabes-1080x671.jpg'
					},
					{
						id: 304,
						nombre: "Empanada de carne",
						colordivproductos:'white',
						descripcion: "Son emepandasd de masa y con rellono de super carne",
						source: 'https://www.laespanolaaceites.com/wp-content/uploads/2019/06/empanadas-arabes-1080x671.jpg'
					},
					{
						id: 321,
						nombre: "Empanada de carne",
						colordivproductos:'white',
						descripcion: "Son emepandasd de masa y con rellono de super carne",
						source: 'https://www.laespanolaaceites.com/wp-content/uploads/2019/06/empanadas-arabes-1080x671.jpg'
					},
					{
						id: 341,
						nombre: "Lomos suecos",
						colordivproductos:'white',
						descripcion: "Es un super sanguche de pan con carne al medio y tomate y lechuga",
						source: 'https://www.laespanolaaceites.com/wp-content/uploads/2019/06/empanadas-arabes-1080x671.jpg'
					  }
					],
					nombre: "daeeesd",
					colordiv:'white',

					descripcion: "Es un super sanguche de pan con carne al medio y tomate y lechuga",
					source: 'https://www.laespanolaaceites.com/wp-content/uploads/2019/06/empanadas-arabes-1080x671.jpg'
				  },
				  {
					id: 97,
					productos:[
					{
						id: 555,
						nombre: "Empanada de carne",
						colordivproductos:'white',
						descripcion: "Son emepandasd de masa y con rellono de super carne",
						source: 'https://www.laespanolaaceites.com/wp-content/uploads/2019/06/empanadas-arabes-1080x671.jpg'
					  },
					  {
						id: 523,
						nombre: "Lomos suecos",
						colordivproductos:'white',
						descripcion: "Es un super sanguche de pan con carne al medio y tomate y lechuga",
						source: 'https://www.laespanolaaceites.com/wp-content/uploads/2019/06/empanadas-arabes-1080x671.jpg'
					  }
					],
					nombre: "daeeeeqqwwsd",
					colordiv:'white',
					descripcion: "Son fideos integrales con una super salsa verde de verduras caras",
					source: 'https://www.laespanolaaceites.com/wp-content/uploads/2019/06/empanadas-arabes-1080x671.jpg'
				  }
				  ]
				};
		},
		created() {
			this.fetchTicketsSinHacer();
		},
		methods: {
			since: function(d){
				return moment(d).fromNow();
			},
			speakMethod: function (msg) {
				//alert(msg);
				this.$emit('se_termino_ticket',msg);
			},
			fetchTicketsSinHacer: function(){
				//toastr.info("Buscando Tickets en proceso");
				toastr["info"]("Buscando Tickets en proceso", "", {
					"closeButton": true,
					"debug": false,
					"newestOnTop": true,
					"progressBar": true,
					"positionClass": "toast-top-center",
					"preventDuplicates": false,
					"onclick": null,
					"showDuration": 20000,
					"hideDuration": 1000,
					"timeOut": 20000,
					"extendedTimeOut": 1001,
					"showEasing": "swing",
					"hideEasing": "linear",
					"showMethod": "fadeIn",
					"hideMethod": "fadeOut"
				  });
				 axios
					.get('tickets_get_sin_hacer')
					.then((res) => {
						console.log(res.data);
						this.ticketshechos_de_bd = res.data;
					})
					.catch(error => {
						console.log(error)
						this.errored = true
						toastr.error("Ocurrio un error: "+error);
					})
					.finally(() => this.loading = false);
				console.log("los tickets:");
				console.log(this.ticketshechos_de_bd);
			},
			cambio_estado_producto: function(index_uno,index_ticket , prod_id, ticket_id, estado){
				console.log("el prod id es"+index_uno);
				console.log("el ticket id es"+index_ticket);
				console.log(" \n\n\n ");
				var id_prdo_en_tick = this.ticketshechos_de_bd[index_ticket].productos[index_uno].productostickets_id;
				if(estado == 1)
				{
					this.ticketshechos_de_bd[index_ticket].productos[index_uno].productostickets_color_prod_div='lime';
					toastr.success("Producto: "+prod_id+" del ticket:"+ ticket_id +" termianda");
					console.log(" \n\n\n El prodticket es:");
					console.log(id_prdo_en_tick);
				}
				if(estado == 2)
				{
					this.ticketshechos_de_bd[index_ticket].productos[index_uno].productostickets_color_prod_div='indigo';
					toastr.info("Producto: "+prod_id+" del ticket:"+ ticket_id +" esta en proceso ahora");
				}
				if(estado == 3)
				{
					/*console.log("Antes:"+this.ticketshechos_de_bd[index_ticket].productos[index_uno].productostickets_color_prod_div);
					console.log("\n\n\n");*/
					this.ticketshechos_de_bd[index_ticket].productos[index_uno].productostickets_color_prod_div='orange';
					toastr.error("Producto: "+prod_id+" del ticket:"+ ticket_id +" fue cancelado");
				}
				//se marcara el estado en la bd tmb       
					axios.post(`actualizar_prodtick/${id_prdo_en_tick}/${estado}`)
					.then((res) => {
						console.log("\n\n\n");
						console.log("Resultado del update: \n");
						console.log(res.data);
						//this.ticketshechos_de_bd = res.data;
					})
					.catch(error => {
						console.log(error)
						this.errored = true
						toastr.error("Ocurrio un error: "+error);
					})
					.finally(() => {
						this.loading = false;
						toastr.info("Producto y actualizado: "+this.ticketshechos_de_bd[index_ticket].productos[index_uno].productostickets_id);
					})
					;
			}
		}

		

		/*



		ticketshechos: [
				  {
					id: 200,
					productos:[
					{
						id: 222,
						nombre: "Empanada de carne",
						colordivproductos:'white',
						descripcion: "Son emepandasd de masa y con rellono de super carne",
						source: 'https://www.laespanolaaceites.com/wp-content/uploads/2019/06/empanadas-arabes-1080x671.jpg'
					  },
					  {
						id: 247,
						nombre: "Lomos suecos",
						colordivproductos:'white',
						descripcion: "Es un super sanguche de pan con carne al medio y tomate y lechuga",
						source: 'https://www.laespanolaaceites.com/wp-content/uploads/2019/06/empanadas-arabes-1080x671.jpg'
					  }
					],
					nombre: "eeee",
					colordiv:'white',
					colordivproductos:'white',
					descripcion: "Son emepandasd de masa y con rellono de super carne",
					source: 'https://www.laespanolaaceites.com/wp-content/uploads/2019/06/empanadas-arabes-1080x671.jpg'
				  },


				id: (...)
				idproducto: (...)
				idticket: (...)
				precio: (...)
				estado: (...)
				observacion: (...)
				created_at: (...)
				updated_at: (...)
				deleted_at: (...)
				cantidad: (...)
				quien_creo: (...)
				quien_actualizo: (...)
				unidadmedida: (...)
				tamanio: (...)
				aderezos: (...)
				stock: (...)
				nombre: (...)
				icono: (...)
				foto1: (...)
				foto2: (...)
				foto3: (...)
				foto4: (...)
				foto5: (...)
				foto6: (...)
				foto7: (...)
				foto8: (...)
				categoria_id: (...)
				categoria: (...)
				precio_total: (...)
				path_pdf: (...)
				cliente: (...)
				creado_por: (...)
				apellido: (...)
				telefono1: (...)
				telefono2: (...)
				telefono3: (...)
				telefono4: (...)
				direccion1: (...)
				ciudad1: (...)
				numerodireccion1: (...)
				orientacion1: (...)
				direccion2: (...)
				ciudad2: (...)
				numerodireccion2: (...)
				orientacion2: (...)
				direccion: (...)
				ciudad3: (...)
				numerodireccion3: (...)
				orientacion3: (...)
				dni: (...)
				cantidad_compras: (...)
				avatar: (...)
				cuit: (...)
				quien_modfico: (...)
				promos: (...)
				afavor: (...)
				deuda: (...)
				ultima_compra: (...)
				facebook: (...)
				instagram: (...)


	*/
		
	}
</script>
<style> 
	   
		
		.btn-circle.btn-sm { 
			width: 30px; 
			height: 30px; 
			padding: 6px 0px; 
			border-radius: 15px; 
			font-size: 8px; 
			text-align: center; 
		} 
		.btn-circle.btn-md { 
			width: 50px; 
			height: 50px; 
			padding: 7px 10px; 
			border-radius: 25px; 
			font-size: 10px; 
			text-align: center; 
		} 
		.btn-circle.btn-xl { 
			width: 70px; 
			height: 70px; 
			padding: 10px 16px; 
			border-radius: 35px; 
			font-size: 12px; 
			text-align: center; 
		} 
</style> 