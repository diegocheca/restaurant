<template>
	<div class="container">
		<div class="tab-content" id="pills-tabContent">
			<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
				<div v-for="(ticket,index) in tieetts" :key="id">
					<div class="row">
						<card-producto-ticket></card-producto-ticket>
					</div>
					
				<hr>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
	Vue.component('card-producto-ticket', require('./CardProductoTicketComponent.vue').default);
	export default {
		
		data() {
			return {
				  mens:"HOLA desde vue",
				  tieetts: [
				  {
				  	id: 100,
				  	nombre: "eeee"
				  },
				  {
				  	id: 101,
				  	nombre: "daeeesd"
				  },
				  {
				  	id: 102,
				  	nombre: "daeeeeqqwwsd"
				  }
				  ]
				};
		}
		
		
	}
</script>
