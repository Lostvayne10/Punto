<template>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                    <a class="navbar-brand" href="#">Punto de Venta</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                        <a class="nav-item nav-link active" href="#">Inicio <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href="#">Productos</a>
                        <a class="nav-item nav-link" href="#">Ventas</a>
                        <a class="nav-item nav-link" href="#">Compras</a>
                        </div>
                    </div>
            </div>
        </nav>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
