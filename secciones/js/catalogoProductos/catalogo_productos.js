import { createApp, ref } from "./initVue.js"

createApp({

    setup() {

        const idCurrentSlider = Math.random();
        let currentScroll = ref(0)
        const productos = ref([])

        const backItem = () => {
            let container = document.getElementById(idCurrentSlider)
            container.scrollLeft -= 900
            currentScroll.value = container.scrollLeft
        }

        const nextItem = () => {
            let container = document.getElementById(idCurrentSlider)
            container.scrollLeft += 900
            currentScroll.value = container.scrollLeft
        }

        const getAllProduct = () => {

            let form = new FormData()
            form.append("action", "get_limited_products")
            form.append("limit", 9)
            fetch("controladores/catalogoProductos.php", {
                method: "POST",
                body: form
            }).then(text => text.text()).then(data => {
                let res = decodeJson(data)
                productos.value = res
            })
        }

        const validateUser = () => {
            window.location.href = "http://localhost/proyecto_programacion_web/secciones/catalogoProductosBusqueda.php"
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

        getAllProduct()

        return {
            nextItem,
            backItem,
            validateUser,
            idCurrentSlider,
            currentScroll,
            productos
        }
    }

}).mount("#catalogo_productos")