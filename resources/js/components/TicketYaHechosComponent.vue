<template>
	<div class="container">
		<div class="tab-content" id="pills-tabContent">
			<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
				<div v-for="(ticket,index) in ticketteeeetts" :key="id">
					<div class="row">
						<card-info-ticket></card-info-ticket>

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
	Vue.component('card-info-ticket', require('./CardInfoTicketComponent.vue').default);
	export default {
		

		data() {
			return {
				  mens:"HOLA desde vue",
				  ticketteeeetts: [
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
