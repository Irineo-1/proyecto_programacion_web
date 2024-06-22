<section id="catalogo_productos">
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div style="width: fit-content; position: relative;">
            <div class="every-row" :id="idCurrentSlider">
            
                <div class="every-col" v-for="producto in productos">

                    <div class="card" style="width: 18rem; border: none; margin: 0px 5px;" @click="validateUser">
                        <img :src="'utils/' + producto.imagen" class="card-img-top" style="width: 200px; height: 200px;">

                        <div class="card-body" style="height: 150px;">
                            <p class="card-text title-productos">
                                {{producto.nombre}}
                            </p>
                            <p class="card-text price">
                                ${{producto.precio.replace(/\B(?=(\d{3})+(?!\d))/g, ",")}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="next-product btn-direccion" @click="nextItem">
                <img 
                style="width: 50%;height: 50%;"
                    src="https://imgs.search.brave.com/tTPt6e_S5XXyGrfPmIJ4uAR7oqjzow5KPgEvysX-bxQ/rs:fit:500:0:0/g:ce/aHR0cHM6Ly9jZG4u/aWNvbi1pY29ucy5j/b20vaWNvbnMyLzY4/NS9QTkcvOTYvcmln/aHRfaWNvbi1pY29u/cy5jb21fNjEyMTIu/cG5n"
                >
            </div>

            <div class="back-product btn-direccion" @click="backItem" v-show="currentScroll > 0">
                <img 
                style="width: 50%;height: 50%;"
                    src="https://imgs.search.brave.com/nwX5mcAoDEytFD07Xb_fbg3xXGHK_tGXH_a3yoV0zGE/rs:fit:500:0:0/g:ce/aHR0cHM6Ly9jZG4u/aWNvbi1pY29ucy5j/b20vaWNvbnMyLzY4/NS9QTkcvOTYvbGVm/dF9pY29uLWljb25z/LmNvbV82MTIxMy5w/bmc"
                >
            </div>
        </div>
    </div>

</section>