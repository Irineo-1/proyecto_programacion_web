<!DOCTYPE html>
<html lang="en">
<?php include 'headCatalogos.php'; ?>
<body>

    <div id="carrito" class="container" style="margin-top: 20px;">
        <div class="list-carrito">
            <ul class="list-group">
                <li class="list-group-item" aria-current="true" v-for="producto, i in productos">
                    <div class="card" style="flex-direction: row;" @click="seeProduct(producto.id)">
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

    <script type="module" src="js/catalogoProductos/carrito.js"></script>
</body>
</html>