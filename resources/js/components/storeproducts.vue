<template>
    <div class="container">
        <h1>Bienvenido</h1>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">
                                    Cantidad
                                </th>
                                <th scope="col">
                                    Descripcion
                                </th>
                                <th scope="col">
                                    Precio
                                </th>
                                <th colspan="2">
                                        
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="item in productos">
                                <th scope="row">
                                    5
                                </th>
                                <td scope="row">
                                    {{ item }}
                                </td >
                                <td scope="row">
                                    $10.00
                                </td>
                                <td >
                                    <span class="text-danger"><a href="#">Delete</a></span>
                                </td>
                            </tr>        
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6 ">
                    <div class="card">
                        <div class="card-header bg-dark text-white">
                            <h3>Agregar Producto</h3>
                        </div>
                        
                            <div class="card-body">
                                <div class="input-group">
                                    <form v-on:submit.prevent="getProduct()">
                                        <input type="text" v-model="newProducto" class="form-control" aria-label="Text input with segmented dropdown button">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-outline-secondary">Añadir</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                       
                    </div>
                    <hr>
                    <div class="card">
                        <div class="card-header bg-success text-white">
                            <h3>Costo Total</h3>
                        </div>
                        <div class="card-body">
                            <h4>$1000.00</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</template>

<script>
    import axios from 'axios';
    import toastr from 'toastr';

    export default {
        data(){
            return{
                productos: [],
                newProducto: ''
            }
        },
        created: function(){
            this.getProductos();
        },
        methods: {
            AddProductos: function(){
                this.productos.push(this.newProducto);
                this.newProducto='';
                toastr.success('agregado correctamente');
            },
            getProductos: function(){
                var url = 'show-all';
                axios.get(url).then(response =>{
                    this.productos = response.data.name
                });
            },
            getProduct: function(){
                var url = 'show-product/'+this.newProducto;
                 this.newProducto='';
                axios.get(url).then(reponse=>{
                    this.productos.push(response.data);
                }).catch(error => {
                    alert(error);
                });
            },
        }
    }

    
</script>
