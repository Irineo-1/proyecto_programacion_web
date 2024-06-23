<!DOCTYPE html>
<html lang="en">
<?php include 'headCatalogos.php'; ?>
<body>

    <div id="carrito" class="container" style="margin-top: 20px;">
        <div v-if="productos.length > 0">
            <div class="list-carrito">
                <ul class="list-group">
                    <li class="list-group-item" aria-current="true" v-for="producto, i in productos">
                        <div class="card" style="flex-direction: row;">
                            <img :src="'../utils/' + producto.imagen" class="card-img-top" style="width: 150px;">
                            <div class="card-body">
                                <h5 class="card-title">{{producto.nombre}}</h5>
                                <p class="card-text" style="color: green;">${{producto.precio.replace(/\B(?=(\d{3})+(?!\d))/g, ",")}}</p>
                                <p class="card-text">Cantidad: {{producto.cantidad}}</p>
                                <div>
                                    <button @click="eliminarProductoCarrito(i)" class="btn btn-outline-danger">Eliminar</button>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <button @click="realizarCompra" class="btn btn-outline-success">Finalizar compra</button>
        </div>
        <div v-else class="any-product">
            <h1>No hay productos :C</h1>
            <button @click="goCatalogo" class="btn btn-outline-success">¡Ir a comprar!</button>
        </div>
    </div>

    <script type="module" src="js/catalogoProductos/carrito.js"></script>
</body>
</html>