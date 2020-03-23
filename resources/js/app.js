require('./bootstrap');



window.Vue = require('vue');
window.axios = axios;


import axios from 'axios';

//import store from "./store";

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('crear-ticekts', require('./components/CrearTicketsComponent.vue').default);

//comanda
Vue.component('comanda', require('./components/ComandaComponent.vue').default);
Vue.component('ticket-row', require('./components/TicketRowComponent.vue').default);
Vue.component('ticket-yahechos', require('./components/TicketYaHechosComponent.vue').default);
Vue.component('ticket-cancelados', require('./components/TicketCanceladosComponent.vue').default);

Vue.component('card-producto-ticket', require('./components/CardProductoTicketComponent.vue').default);
Vue.component('card-info-ticket', require('./components/CardInfoTicketComponent.vue').default);

Vue.component('buscador-cliente', require('./components/BuscadorClienteComponent.vue').default);



const app = new Vue({
    el: '#app',
    //store,
    data:{
    	hola:'',
    },
    methods:{
    	llamar_alerta_padre()
			{
				this.$emit('llamar-alerta-padre')
				//alert("fasfsad");
			},
    }
});
