<template>
	<div class="container">
		<div class="tab-content" id="pills-tabContent">
			<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
				<div v-for="(ticket,index) in ticketshechos" :key="id">
					<div class="row" v-bind:style="{ background: ticket.colordiv}">
					    <div class="col-3" style="margin-left:0px; margin-right:0px; padding-left: 0px; padding-right: 0px">
							<card-info-ticket v-on:speak="speakMethod($event)" :mensaje="ticket.nombre" :messa="ticket.source" :colordeldiv="ticket.colordiv" :id="ticket.id"></card-info-ticket>
					    </div>
					    <div class="col-sm" v-for="(prod,index) in ticket.productos" :key="id" style="margin-left:0px; margin-right:0px; padding-left: 0px; padding-right: 0px">
							<div class="card text-white" v-bind:style="{ background: prod.colordivproductos}">
								<img v-bind:src="prod.source" alt="Card image" width="150px"/> 
								<div class="card-img-overlay">
									<h5 class="card-title">{{prod.nombre}}</h5>
									<button type="button" class="btn btn-success btn-circle btn-sm"  v-on:click="prod.colordivproductos='lime'"><icon-ticks-simple></icon-ticks-simple></button>
									<button type="button" class="btn btn-primary btn-circle btn-sm"  v-on:click="prod.colordivproductos='indigo'"><icon-ticks-simple></icon-ticks-simple></button>
									<button type="button" class="btn btn-danger btn-circle btn-sm"  v-on:click="prod.colordivproductos='orange'">x</button>
									<p class="card-text">{{prod.descripcion}}</p>
									<p class="card-text">Last updated 3 mins ago</p>
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
		<icon-ticks></icon-ticks>
		<icon-ticks-simple></icon-ticks-simple>
		<!--	<app-typography-icon />
      <app-animated-icon />-->

	</div>
</template>

<script>
	Vue.component('card-producto-ticket', require('./CardProductoTicketComponent.vue').default);
	Vue.component('card-info-ticket', require('./CardInfoTicketComponent.vue').default);

	Vue.component('app-typography-icon', require('./AppTypographyIcon.vue').default);
	Vue.component('icon-ticks', require('./icons/ticks.vue').default);
	Vue.component('icon-ticks-simple', require('./icons/ticks-simple.vue').default);
	//Vue.component('app-animated-icon', require('./AppAnimatedIcon.vue').default);



	export default {
		name: "ticket-row",
		data() {
			return {
				  mens:"HOLA desde vue",
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
		methods: {
			speakMethod: function (msg) {
				//alert(msg);
				this.$emit('se_termino_ticket',msg);
			},
		}

		
		
	}
</script>
<style type="text/css"> 
       
        
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