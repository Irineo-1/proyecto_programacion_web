<!DOCTYPE html>
<html lang="en">
<?php include 'headCatalogos.php'; ?>
<body>

    <section id="catalogo_productos_busqueda">

        <div class="contenedor">
            <div class="categorias">
                <div class="content-categorias">
                    <div class="list-group" style="width: 100%;">
                        <button 
                            @click="getCategoria(-1, -1)"
                            id="-1" 
                            class="list-group-item list-group-item-action" 
                            :class="{'active': currentActiveCategory == -1}">
                            Todas
                        </button>
                        <button 
                            v-for="categoria,it in categorias" 
                            @click="getCategoria(categoria.id_categoria, it)" 
                            :id="it" 
                            class="list-group-item list-group-item-action" 
                            :class="{'active': currentActiveCategory == it}">
                            {{categoria.nombre}}
                        </button>
                    </div>
                </div>
            </div>
            <div class="busqueda">
                <div class="content-busqueda">
                    <div class="input-group">
                        <input v-model="buscador" type="text" class="form-control" placeholder="Buscar producto" aria-label="Buscar producto" aria-describedby="button-addon2">
                    </div>
                </div>
            </div>
            <div class="productos">
                <ul class="list-group">
                    <li class="list-group-item" aria-current="true" v-for="producto in filterProductos">
                        <div class="card" style="flex-direction: row;" @click="seeProduct(producto.id)">
                            <img :src="'../utils/' + producto.imagen" class="card-img-top" style="width: 150px;">
                            <div class="card-body">
                                <h5 class="card-title">{{producto.nombre}}</h5>
                                <p class="card-text" style="color: green;">${{producto.precio.replace(/\B(?=(\d{3})+(?!\d))/g, ",")}}</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </section>

    <script type="module" src="js/catalogoProductos/catalogo_productos_busqueda.js"></script>
</body>
</html>
