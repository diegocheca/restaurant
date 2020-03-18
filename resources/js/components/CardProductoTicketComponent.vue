<template>
	<div class="container">
		<div class="col-sm" v-for="(ticket,index) in producto_en_ticket" :key="id">
			<div class="card bg-dark text-white">
				<img v-bind:src="ticket.source" alt="Card image" width="150px"/> 
				<div class="card-img-overlay">
					<h5 class="card-title">{{ticket.nombre}}</h5>
					<p class="card-text">{{ticket.descripcion}}</p>
					<p class="card-text">Last updated 3 mins ago</p>
				</div>
			</div>
		</div>
	</div>
</template>
<script>
	export default {
		
		

		data() {
			return {
				  producto_en_ticket: [
				  {
				  	id: 99,
				  	nombre: "Empanada de carne",
				  	descripcion: "Son emepandasd de masa y con rellono de super carne",
				  	source: 'https://www.laespanolaaceites.com/wp-content/uploads/2019/06/empanadas-arabes-1080x671.jpg'
				  },
				  {
				  	id: 98,
				  	nombre: "Lomos suecos",
				  	descripcion: "Es un super sanguche de pan con carne al medio y tomate y lechuga",
				  	source: 'https://www.laespanolaaceites.com/wp-content/uploads/2019/06/empanadas-arabes-1080x671.jpg'
				  },
				  {
				  	id: 97,
				  	nombre: "Fideos al Pesto",
				  	descripcion: "Son fideos integrales con una super salsa verde de verduras caras",
				  	source: 'https://www.laespanolaaceites.com/wp-content/uploads/2019/06/empanadas-arabes-1080x671.jpg'
				  }
				  ]
				};
		}
		
		
	}
</script>
