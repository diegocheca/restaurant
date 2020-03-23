<template>
   <div class="row">
        <label>Nombre desde el componentel cliente</label>
        <v-select  
          transition="" 
          :options="ListaDeClientes" 
          label="apellido"
          @input="cambiocliente" 
          class="form-control" 
          v-model="cliente"
          item-value="id"
          >
            <template slot="option" slot-scope="option">
               <img v-bind:src="'http://localhost:8000/storage/' + option.avatar" width="40px" height="40px" /> 
                {{ option.apellido +" , " + option.nombre}}
            </template>
        </v-select>
        <img v-if="cliente!= '' " v-bind:src="'http://localhost:8000/storage/' + cliente.avatar" width="140px" height="140px" /> 
</div>
</template>

<script>
    export default {
        
name: "buscador-cliente",
    data() {
      return {
        cliente: '',
          ListaDeClientes: [],
          mens:"HOLA desde vue",
        };
        },
         created() {
            this.fetchClientesList();
        },
         methods: {
            fetchClientesList() {
                axios.get('clientes_get_ticket_todos').then((res) => {
                    this.ListaDeClientes = res.data;
                });
                console.log(this.ListaDeClientes);
            },
            // cambiocliente() {
            //   alert("cambio el cliente");
            // },
            cambiocliente: function(id){
              //alert("cambio el cliente");
              this.$emit('cambio_cliente_emit',id.id)
            },

        },
        
    }
</script>

