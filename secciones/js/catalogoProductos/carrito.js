import { createApp, ref, computed } from "./initVue.js"

createApp({
    
    setup() {

        let productos = ref([])

        const getCarrito = () => {
            let carrito = JSON.parse(localStorage.getItem("temporalCarrito"))

            if(!carrito) return

            productos.value = carrito

            for(let item of productos.value) {
                item.precio = `${parseInt(item.precio.replace(/,/g, "")) * item.cantidad}`
            }
                
        }

        const eliminarProductoCarrito = (id) => {

            let producto = productos.value[id]

            Swal.fire({
                title: `¿Deseas Eliminar ${producto.nombre} del carrito?`,
                showDenyButton: false,
                showCancelButton: true,
                confirmButtonText: "Eliminar",
                cancelButtonText: "Cancelar",
              }).then((result) => {
                if (result.isConfirmed) {

                    productos.value.splice(id, 1)

                    localStorage.setItem("temporalCarrito", JSON.stringify(productos.value))
                    
                    Swal.fire("Eliminado!", "", "success")
                }
            })
        }

        const realizarCompra = () => {
            if(productos.value.lenght == 0) return Swal.fire("No hay productos", "", "Info")

            let form = new FormData()
            form.append("action", "comprar")
            form.append("productos", JSON.stringify(productos.value))
            fetch("../controladores/catalogoProductos.php", {
                method: "POST",
                body: form
            })
            localStorage.clear()
            Swal.fire("Se realizo la compra!", "", "success")
        }

        const goCatalogo = () => {
            window.location.href = "catalogoProductosBusqueda.php"
        }

        getCarrito()

        return {
            productos,
            eliminarProductoCarrito,
            realizarCompra,
            goCatalogo
        }
    }
}).mount("#carrito")