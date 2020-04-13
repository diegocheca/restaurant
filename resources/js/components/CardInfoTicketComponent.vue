<template>
	<div class="col-sm" v-bind:style="{ background: colordeldiv}">
		<div class="card" v-bind:style="{ background: colordeldiv}">
			<div class="card-body">
				<button type="button" class="btn btn-success btn-circle btn-md" @click="terminar_ticket(id)">Done</button>
				<button type="button" class="btn btn-primary btn-circle btn-md" @click="enproceso_ticket(id)"><icon-ticks-simple></icon-ticks-simple></button>
				<button type="button" class="btn btn-danger btn-circle btn-md" @click="cancelar_ticket(id)">x</button>
										

				<h6 class="card-subtitle mb-2 text-muted"><font color="black">Cliente: {{mensaje}} - {{id}}</font> </h6>
				<p class="card-text">{{mensaje}} -  {{since(fechacreacion)}}</p>
			</div>
		</div>
	</div>
</template>
<script>
import moment from 'moment'
	import toastr from 'toastr'

moment.lang('es');
	export default {
		name: "card-info-ticket",
		props: {
			mensaje: String,
			messa: String,
			colordeldiv: String,
			fechacreacion: String,
			id: Number
		},
		data() {
			return {
				saludo: 'Holla soy un componente de info'
			};
		},
		methods:{
		since: function(d){
				return moment(d).fromNow();
			},
			terminar_ticket: function(id){
				//alert("---------");
				toastr.success("Ticket: "+id+" terminado");

				this.colordeldiv = 'green';
				this.$emit('speak',id)
			},
			enproceso_ticket: function(id){
				//alert("---------");
				toastr.info("Ticket: "+id+" en proceso");
				this.colordeldiv = 'blue';
				this.$emit('speak','este mens11je')
			},
			cancelar_ticket: function(id){
				//alert("---------");
				this.colordeldiv = 'red';
				toastr.error("Ticket: "+id+" cancelada");
				this.$emit('speak','este mens3332aje')
			},

		},
		
		
	}
</script>
