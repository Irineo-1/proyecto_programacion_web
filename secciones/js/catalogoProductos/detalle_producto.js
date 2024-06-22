import { createApp, ref, computed } from "./initVue.js"

createApp({
    
    setup() {

        let id = ref(0)
        let imagen = ref("")
        let nombre = ref("")
        let precio = ref("")
        let existencia = ref("")
        let cantidad = ref(1)

        const getProduct = () => {
            let idProducto = localStorage.getItem("idProducto")
            if(!idProducto) return window.location.href = "/"

            let form = new FormData()
            form.append("action", "get_product_by_id")
            form.append("id", idProducto)
            fetch("../controladores/catalogoProductos.php", {
                method: "POST",
                body: form
            }).then(text => text.text()).then(data => {
                let res = decodeJson(data)
                id.value = res[0].id
                imagen.value = res[0].imagen
                nombre.value = res[0].nombre
                precio.value = res[0].precio.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                existencia.value = res[0].existencia
            })
        }

        const agregarCarrito = () => {
            Swal.fire({
                title: `¿Deseas agregar ${cantidad.value} del producto ${nombre.value}?`,
                showDenyButton: false,
                showCancelButton: true,
                confirmButtonText: "Agregar",
                cancelButtonText: "Cancelar",
              }).then((result) => {
                if (result.isConfirmed) {

                    let currentCarrito = JSON.parse(localStorage.getItem("temporalCarrito"))

                    if(currentCarrito) {
                        currentCarrito.push({
                            "id": id.value,
                            "imagen": imagen.value,
                            "nombre": nombre.value,
                            "precio": precio.value,
                            "cantidad": cantidad.value
                        })
                        localStorage.setItem("temporalCarrito", JSON.stringify(currentCarrito))
                    } else {
                        let productoAgregado = [{
                            "id": id.value,
                            "imagen": imagen.value,
                            "nombre": nombre.value,
                            "precio": precio.value,
                            "cantidad": cantidad.value
                        }]

                        localStorage.setItem("temporalCarrito", JSON.stringify(productoAgregado))
                    }
                    
                    Swal.fire("Agregado!", "", "success")
                }
            })
        }

        const goCarrito = () => {
            window.location.href = "carrito.php"
        }

        const addOne = () => {
            if(cantidad.value == existencia.value) return
            cantidad.value ++
        }

        const quitOne = () => {
            if(cantidad.value -1 == 0) return
            cantidad.value --
        }

        getProduct()

        const decodeJson = (data) => {
            try {
                return JSON.parse(data)
            }
            catch(e) {
                console.log(e)
                return []
            }
        }

        return {
            addOne,
            quitOne,
            agregarCarrito,
            goCarrito,
            imagen,
            nombre,
            precio,
            existencia,
            cantidad
        }
    }
}).mount("#detalle_producto")