<template>
	<div class="col-sm" v-bind:style="{ background: colordeldiv}">
		<div class="card" v-bind:style="{ background: colordeldiv}">
			<div class="card-body">
				<button type="button" class="btn btn-success btn-circle btn-md" @click="terminar_ticket(id)">Done</button>
				<button type="button" class="btn btn-primary btn-circle btn-md" @click="enproceso_ticket"><icon-ticks-simple></icon-ticks-simple></button>
				<button type="button" class="btn btn-danger btn-circle btn-md" @click="cancelar_ticket">x</button>
										
				<!--<h5 class="card-title">Informacion del ticket</h5>-->
				<h6 class="card-subtitle mb-2 text-muted"><font color="black">Cliente: Checcarelli</font> </h6>
				<p class="card-text">{{mensaje}} -</p>
			</div>
		</div>
	</div>
</template>
<script>
	export default {
		name: "card-info-ticket",
		props: {
			mensaje: String,
			messa: String,
			colordeldiv: String,
			id: Number
		},
		data() {
			return {
				saludo: 'Holla soy un componente de info'
			};
		},
		methods:{
			terminar_ticket: function(id){
				//alert("---------");
				this.colordeldiv = 'green';
				this.$emit('speak',id)
			},
			enproceso_ticket: function(){
				//alert("---------");
				this.colordeldiv = 'blue';
				this.$emit('speak','este mens11je')
			},
			cancelar_ticket: function(){
				//alert("---------");
				this.colordeldiv = 'red';
				this.$emit('speak','este mens3332aje')
			},

		},
		
		
	}
</script>
