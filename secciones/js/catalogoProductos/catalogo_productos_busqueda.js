import { createApp, ref, computed } from "./initVue.js"

createApp({

    setup() {
        let productos = ref([])
        let categorias = ref([])
        let buscador = ref("")
        let categoriaSelected = ref(0)
        let currentActiveCategory = ref(-1)

        let filterProductos = computed(() => {
            if(categoriaSelected.value > 0 && buscador.value.trim() == "") {
                return productos.value.filter(el => el.id_categoria == categoriaSelected.value)
            } else if (categoriaSelected.value < 0 ) {
                return productos.value
            }
            else {
                return productos.value.filter(el => el.nombre.toLowerCase().includes(buscador.value.toLowerCase()))
            }
            return []
        })


        const getAllProducts = () => {
            let form = new FormData()
            form.append("action", "get_all_products")
            fetch("../controladores/catalogoProductos.php", {
                method: "POST",
                body: form
            }).then(text => text.text()).then(data => {
                let res = decodeJson(data)
                productos.value = res
            })
        }

        const getAllCategorias = () => {
            let form = new FormData()
            form.append("action", "get_all_categorias")
            fetch("../controladores/catalogoProductos.php", {
                method: "POST",
                body: form
            }).then(text => text.text()).then(data => {
                let res = decodeJson(data)
                categorias.value = res
            })
        }

        const getCategoria = (id, idEtiqueta) => {
            categoriaSelected.value = id
            currentActiveCategory.value = idEtiqueta
        }

        const seeProduct = (id) => {
            localStorage.setItem("idProducto", id)
            window.location.href = "http://localhost/proyecto_programacion_web/secciones/detalleProducto.php"
        }

        const decodeJson = (data) => {
            try {
                return JSON.parse(data)
            }
            catch(e) {
                console.log(e)
                return []
            }
        }

        getAllProducts()
        getAllCategorias()

        return {
            productos,
            categorias,
            buscador,
            filterProductos,
            currentActiveCategory,
            getCategoria,
            seeProduct
        }
    }

}).mount("#catalogo_productos_busqueda")