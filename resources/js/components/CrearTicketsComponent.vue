<template>
  <div class='row'>
    <h1>Crear un nuevo ticket</h1>
    <form action="#" @submit.prevent="">

      <buscador-cliente  v-on:cambio_cliente_emit="refrescar_cliente_id($event)"></buscador-cliente>
      <!-- <div class="input-group">
        <label>Nombre del cliente</label>
        <v-select  
                  transition="" 
                  :options="ListaDeClientes" 
                  label="apellido"
                  @input="cambiocliente" 
                  class="form-control" 
                  v-model="ticket.cliente"
                  item-value="id"
                  >
                    <template slot="option" slot-scope="option">
                       <img v-bind:src="'http://localhost:8000/storage/' + option.avatar" width="40px" height="40px" /> 
                        {{ option.apellido +" , " + option.nombre}}
                    </template>
                </v-select>

      </div> -->

        <p>cliente: {{cliente_elegido}} cantdad_de_productos : {{cantdad_de_productos_global}}</p>
        <button class="btn btn-success" v-on:click="agregar_producto">Nuevo Producto</button>
        <button class="btn btn-danger" v-on:click="eliminar_todos_productos">Limpar Orden</button>
      <div class="card-deck">
          <div class="card" v-for="(producto,index) in productos_vendiendo" :key="producto.id">
            <img class="card-img-top" v-bind:src="'http://localhost:8000/storage/' + producto.icono" alt="Card image cap" height="240px">
            <div class="card-body">
              <h5 class="card-title">
                <p>
                {{ producto.nombre }}  | orden: {{ producto.orden }} | ID: {{ producto.id }}
                <button class="btn btn-danger" v-on:click="eliminar_producto(producto.orden)">Eliminar</button>
                </p>
              </h5>
              
              <p class="card-text"><label>Producto: </label>
                <v-select  
                  transition="" 
                  :options="list" 
                  label="nombre" 
                  @input="cambioproducto(producto.orden)" 
                  class="form-control" 
                  v-model="producto.producto_select"
                  item-value="id"
                  >
                    <template slot="option" slot-scope="option">
                       <img v-bind:src="'http://localhost:8000/storage/' + option.icono" width="40px" height="40px" /> 
                        {{ option.nombre }}
                    </template>
                </v-select>
                <span>Checked names: {{ producto.agregados }}</span>
                <span>Picked: {{ picked }}</span>
                
                <!--<p class="card-text">This is: {{producto.producto_select}} a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>-->
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </p>
              <input type="checkbox" id="mostaza" value="mostaza" v-model="producto.agregados">
              <label for="mostaza">mostaza</label>
              <input type="checkbox" id="mayonesa" value="Mayonesa" v-model="producto.agregados">
              <label for="mayonesa">Mayonesa</label>
              <input type="checkbox" id="ketchup" value="Ketchup" v-model="producto.agregados">
              <label for="ketchup">Ketchup</label>
              <label> | Tamaño: </label>
              <input type="radio" id="one" value="One" v-model="picked">
              <label for="one">medio</label>
              <input type="radio" id="two" value="Two" v-model="picked">
              <label for="two">Grande</label>
            </div>
            <div class="card-footer">
              <!--<small class="text-muted">Last updated 3 mins ago</small>-->
             
              |
              <input type="number" step="0.01" name="precio_unitario" id="precio_unitario" style="width:15%" v-model="producto.precio_unitario">
              |
              <button class="btn btn-xs" v-on:click="aumentar_cantidad(index)">+</button><input type="number" name="cantindad" id="cantindad" style="width:8%" v-model="producto.cantidad"><button class="btn btn-xs" v-on:click="disminuir_cantidad(index)">-</button>
              | 
              <input type="number" step="0.001" name="precio_total" id="precio_total" style="width:15%" v-model="producto.precio_total">
            </div>
          </div v-if="cantdad_de_productos_global">
      </div>
      <label>Precio total de todo:</label>
      <input type="number" step="0.001" name="totaltoal"  v-model="total">
      <button type="submit" class="btn btn-success" v-on:click="crear_orden">Crear Orden</button> 
      <button @click="mostrar('algo123')">toastr</button>
    </form>
    <!--<ul class="list-group">
        <li v-if='list.length === 0'>There are no tasks yet!</li>
        <li class="list-group-item" v-for="(task, index) in list">
         {{ task.nombre }}
         {{task.icono}}
         <img v-bind:src="'http://localhost:8000/storage/' + task.icono" width="80px" height="80px" /> 
         <button @click="deleteTask(task.id)" class="btn btn-danger btn-xs pull-right">Delete</button>
        </li>
    </ul>-->
    <br>
  </div>
</template>

<script>
  //import Vue from 'vue'
  import vSelect from 'vue-select'
  import axios from 'axios'
  import moment from 'moment'
  import toastr from 'toastr'

  Vue.component('v-select', vSelect)
  Vue.component('buscador-cliente', require('./BuscadorClienteComponent.vue'));
  import 'vue-select/dist/vue-select.css';

//voy a tneer q crear un nuevo controller de productos donde adentro pueda poner las funciones q entreguen los datos en 
//json desde la bd a vuejs
    export default {
        data() {
            return {
                cantdad_de_productos_global:2,
                valor_select: '',
                options: [
                  {
                    title: "Visa",
                    cardImage: "http://localhost:8000/storage/users/avatar16.png"
                  },
                  {
                    title: "Mastercard",
                    cardImage: "http://localhost:8000/storage/users/avatar27.png"
                  },
                  {
                    title: "Visa1",
                    cardImage: "http://localhost:8000/storage/users/123.png"
                  },
                  {
                    title: "Visa2",
                    cardImage: "http://localhost:8000/storage/users/avatar7.png"
                  },
                  {
                    title: "Visa3",
                    cardImage: "http://localhost:8000/storage/users/avatar8.png"
                  },
                  {
                    title: "Visa4",
                    cardImage: "http://localhost:8000/storage/users/avatar30.png"
                  },
                  {
                    title: "Visa5",
                    cardImage: "http://localhost:8000/storage/users/avatar10.png"
                  },
                  {
                    title: "Visa6",
                    cardImage: "http://localhost:8000/storage/users/avatar11.png"
                  },
                  {
                    title: "Visa7",
                    cardImage: "http://localhost:8000/storage/users/avatar12.png"
                  },
                  {
                    title: "Visa8",
                    cardImage: "http://localhost:8000/storage/users/avatar13.png"
                  },
                  {
                    title: "Visa9",
                    cardImage: "http://localhost:8000/storage/users/avatar14.png"
                  },
                  {
                    title: "Visa10",
                    cardImage: "http://localhost:8000/storage/users/avatar15.png"
                  },
                  {
                    title: "Visa11",
                    cardImage: "http://localhost:8000/storage/users/avatar16.png"
                  },
                  {
                    title: "Visa12",
                    cardImage: "http://localhost:8000/storage/users/avatar17.png"
                  },
                  {
                    title: "Visa13",
                    cardImage: "http://localhost:8000/storage/users/avatar18.png"
                  },
                  {
                    title: "Visa14",
                    cardImage: "http://localhost:8000/storage/users/avatar19.png"
                  },
                  {
                    title: "Visa15",
                    cardImage: "http://localhost:8000/storage/users/avatar20.png"
                  },
                  {
                    title: "Visa16",
                    cardImage: "http://localhost:8000/storage/users/avatar21.png"
                  },
                  {
                    title: "Visa17",
                    cardImage: "http://localhost:8000/storage/users/avatar22.png"
                  },
                  {
                    title: "Visa18",
                    cardImage: "http://localhost:8000/storage/users/avatar23.png"
                  },
                  {
                    title: "Visa19",
                    cardImage: "http://localhost:8000/storage/users/avatar24.png"
                  },
                  {
                    title: "Visa20",
                    cardImage: "http://localhost:8000/storage/users/avatar25.png"
                  },
                  {
                    title: "Visa21",
                    cardImage: "http://localhost:8000/storage/users/avatar26.png"
                  },
                  {
                    title: "Visa22",
                    cardImage: "http://localhost:8000/storage/users/avatar27.png"
                  },
                  {
                    title: "Visa23",
                    cardImage: "http://localhost:8000/storage/users/avatar28.png"
                  },
                  {
                    title: "Visa24",
                    cardImage: "http://localhost:8000/storage/users/avatar29.png"
                  },
                  {
                    title: "Visa25",
                    cardImage: "http://localhost:8000/storage/users/avatar30.png"
                  },
                  {
                    title: "Visa26",
                    cardImage: "http://localhost:8000/storage/users/avatar31.png"
                  },
                  {
                    title: "Visa27",
                    cardImage: "http://localhost:8000/storage/users/avatar32.png"
                  },
                  {
                    title: "Visa28",
                    cardImage: "http://localhost:8000/storage/users/avatar33.png"
                  }
                ],
                list: [],
                cliente_elegido: '',
                task: {
                    id: '',
                    body: ''
                },
                ticket: {
                    cliente: '',
                    body: ''
                },
                picked:'',
                productos_cargados: [],
                productos_vendiendo: 
                [
                  {
                      id:1,
                      orden: 1,
                      nombre:'algo',
                      precio_unitario:'58.36',
                      cantidad:'5',
                      precio_total:'291.8',
                      picked:'',
                      producto_select: '',
                      icono: '',
                      agregados:[]
                  },
                  {
                    id:88888,
                    orden: 2,
                    nombre:'lomito',
                    precio_unitario:'41.88',
                    cantidad:'2',
                    precio_total:'83.76',
                    picked:'',
                    producto_select: '',
                    icono: '',
                    agregados:[]
                  }
                ],
                total: 0
            };
        },
        
        created() {
            this.fetchProductosList();
            //this.fetchClientesList();
        },
        
        methods: {
            
            reordenar_ids(){
                var ultimo_id_revisado = 1;
                this.productos_vendiendo.forEach((producto, index) => {
                        this.productos_vendiendo[index].orden = parseInt(ultimo_id_revisado);
                        ultimo_id_revisado++;
                });
                return true;
            },

            conseguir_ultimo_id(){
                var ultimo_id = 0;
                this.productos_vendiendo.forEach((producto, index) => {
                    if(parseInt(ultimo_id) <=  parseInt(producto.orden))
                        ultimo_id = parseInt(producto.orden);
                });
                return ultimo_id;
            },

            calcular_precio_total_venta(){
                this.total = 88;
                let total_temporal = parseFloat(0.0);
                this.productos_vendiendo.forEach((producto, index) => {
                    total_temporal += parseFloat(producto.precio_total);
                    
                });
                console.log('precio total re calculado es:' + total_temporal);
                this.total = parseFloat(total_temporal);
                this.total = this.total.toFixed(2);

            },
            calcular_precio_producto(index){
                this.productos_vendiendo[index].precio_total = parseFloat(this.productos_vendiendo[index].precio_unitario)  * parseInt(this.productos_vendiendo[index].cantidad) ;
                this.productos_vendiendo[index].precio_total = parseFloat(this.productos_vendiendo[index].precio_total.toFixed(2));
                this.calcular_precio_total_venta();

            },
            aumentar_cantidad(index)
            {
                this.productos_vendiendo[index].cantidad++;
                this.cantdad_de_productos_global++;
                this.calcular_precio_producto(index);

            },
            disminuir_cantidad(index)
            {
                this.productos_vendiendo[index].cantidad--;
                this.cantdad_de_productos_global--;
                this.calcular_precio_producto(index);

            },
            agregar_producto(){
                var nuevo_id = 0;
                nuevo_id = this.conseguir_ultimo_id();
                nuevo_id++;
                var producto_nuevo =
                 {
                    id: nuevo_id,
                    orden: nuevo_id,
                    nombre:'milanesa',
                    precio_unitario:'84.79',
                    cantidad:'2',
                    precio_total:'169.58',
                    picked:'',
                    producto_select: '',
                    agregados:[]
                };
                this.productos_vendiendo.push(producto_nuevo);
                this.cantdad_de_productos_global++;
                this.calcular_precio_total_venta();
            },
            eliminar_todos_productos(){
                //elimar todos los productos
                this.productos_vendiendo = [];
                this.cantdad_de_productos_global= 0;
                this.calcular_precio_total_venta();
            },
            eliminar_producto(orden){
                this.productos_vendiendo.splice(orden-1, 1);
                this.cantdad_de_productos_global--;
                this.reordenar_ids();
                this.calcular_precio_total_venta();
            },
            //ya eliminar , crea un nuevo producto, calcula precios individuales, y totales,
            /*
            faltan: 
                **  poner el id correcto a cada uno de los productos recien creados
                ** eliminar productos
                ** restar y ordenar los id de los productos eliminados
                ** select vue con los productos
                **crear amb de productos
                **agregar boton para eliminar todos los productos del ticket
                **buscar productos por axios a laravel
                **poner dentro del select, todos los productos q traigo por axios
            **actualizar toda la card cuando cambia el select
            **agregar css,
            **lineas de cada cuadro de producto q tiene bootstrap,
            crear pdf, 
            abm tickets a la bd, 
            */

           fetchProductosList() {
                axios.get('productos_get_todos').then((res) => {
                    this.list = res.data;
                });
            },
            mostrar: function(msg){
              toastr.success("nuevo algo");
            },
            
            
            

            cambioproducto(orden) {
              //alert("se cambio el producto numero:"+orden+ " y se elegio el producto:"+this.productos_vendiendo[orden-1].producto_select.nombre );
              console.log(this.productos_vendiendo[orden-1].producto_select.nombre );
              this.productos_vendiendo[orden-1].id = parseInt(this.productos_vendiendo[orden-1].producto_select.id);
              console.log("ID:"+this.productos_vendiendo[orden-1].producto_select.id );
              this.productos_vendiendo[orden-1].nombre = this.productos_vendiendo[orden-1].producto_select.nombre;
              console.log("nombre:"+this.productos_vendiendo[orden-1].producto_select.nombre );
              this.productos_vendiendo[orden-1].precio_unitario = parseFloat(this.productos_vendiendo[orden-1].producto_select.precio);
              console.log("precio unitario:"+this.productos_vendiendo[orden-1].producto_select.precio_unitario);
              this.productos_vendiendo[orden-1].cantidad = parseInt(1);
              console.log("cantidad:"+this.productos_vendiendo[orden-1].producto_select.cantidad );
              this.productos_vendiendo[orden-1].precio_total = parseFloat(this.productos_vendiendo[orden-1].producto_select.precio);
              console.log("Itotal:"+this.productos_vendiendo[orden-1].producto_select.total );
              this.productos_vendiendo[orden-1].icono = this.productos_vendiendo[orden-1].producto_select.icono;
            },
            refrescar_cliente_id(id){
              console.log("recibi el id del cliente cambiado como:"+id);
              this.cliente_elegido = id;

            },
            
         
            /*
 
            createTask() {
                axios.post('api/tasks', this.task)
                    .then((res) => {
                        this.task.body = '';
                        this.edit = false;
                        this.fetchTaskList();
                    })
                    .catch((err) => console.error(err));
            },
 
            deleteTask(id) {
                axios.delete('api/tasks/' + id)
                    .then((res) => {
                        this.fetchTaskList()
                    })
                    .catch((err) => console.error(err));
            },*/
             crear_orden() {
              var ticketts_api= 
              {
                "id" : null,
                "categoria": 1,
                "precio_total": this.total,
                "creado_por": 1,
                "cliente_id": this.cliente_elegido,
                "productos": this.productos_vendiendo
              };
                axios.post('api/ticket', ticketts_api)
                    .then((res) => {
                        console.log(res);
                    })
                    .catch((err) => console.error(err));
            },

        },
       /* crear_orden() {
              //alert("se cambio el producto numero:"+orden+ " y se elegio el producto:"+this.productos_vendiendo[orden-1].producto_select.nombre );
              console.log(this.productos_vendiendo[orden-1].producto_select.nombre );
            },*/

           


        watch:{
          'producto_select'  : function (val, oldval) {
              console.log(val);

              console.log("VALORES VIEJHOS:");
              console.log(oldval);
              alert("hola");
          }
        },
    }
</script>
<style>
  .style-chooser .vs__search::placeholder,
  .style-chooser .vs__dropdown-toggle,
  .style-chooser .vs__dropdown-menu {
    background: #dfe5fb;
    border: none;
    color: #394066;
    text-transform: lowercase;
    font-variant: small-caps;
  }

  .style-chooser .vs__clear,
  .style-chooser .vs__open-indicator {
    fill: #394066;
  }

  .vs__fade-enter-active,
.vs__fade-leave-active {
    transition: none;
}


</style>
