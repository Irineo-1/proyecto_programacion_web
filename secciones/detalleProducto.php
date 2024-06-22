<!DOCTYPE html>
<html lang="en">
<?php include 'headCatalogos.php'; ?>
<body>
    
    <section id="detalle_producto">
    
        <div class="container" style="height: 100vh; margin-top: 15px;">
            <div class="centro-items">
                <img :src="'../utils/' + imagen" style="width: 500px;">
                <div class="detalles">
                    <h3>{{nombre}}</h3>
                    <h5 style="color: green;">{{precio}}</h5>
                    <p>Existencia: {{existencia}}</p>
                    <button @click="addOne" class="btn btn-secondary" style="border-radius: 100%;">+</button>
                    <span style="margin: 0px 5px; font-size: 1.3rem;">{{cantidad}}</span>
                    <button @click="quitOne" class="btn btn-secondary" style="border-radius: 100%;">-</button>
                    <br>
                    <br>
                    <button @click="agregarCarrito" class="btn btn-outline-success">Agregar al carrito</button>
                </div>
            </div>
        </div>
    
    <div class="carrito" @click="goCarrito">
        <img 
            style="width: 60%; height: 60%;"
            src="https://imgs.search.brave.com/yH5nye8zrnQvFoZrT6rfGTT2pMa87vvj2lJ1a8rsAe8/rs:fit:500:0:0/g:ce/aHR0cHM6Ly9jZG4t/aWNvbnMtcG5nLmZs/YXRpY29uLmNvbS81/MTIvMjAzOC8yMDM4/NzY3LnBuZw"
            >
    </div>

    </section>

    <script type="module" src="js/catalogoProductos/detalle_producto.js"></script>
</body>
</html>