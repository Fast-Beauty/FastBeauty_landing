<!-- contenido -->
<section class="servicios">
    <div class="servicios__header">
        <p class="text-uppercase text-center subtitulo-services">our services</p>
        <p class="text-center titulo-services">Well Experience Beauty at your Service</p>
    </div>
    <div class="alerta-servicios text-center">
        <p>No hay servicios aún, estamos trabajando en ello</p>
    </div>
    <div class="container">
        <?php 
        foreach($this->modelosvc->listar() as $datos): 
            foreach($this->modelosvc->listarImagen($datos['id']) as $img):
        ?>
        <div class="servicio_container d-flex justify-content-between align-items-center">
            <div class="servicio_info">
                <h1 class="servicio_titulo fuente-secundaria fw-bolder"><?=$datos['name']?></h1>
                <div class="servicio_datos">
                    <div class="dato precio d-flex align-items-center">
                        <div class="icono icono_precio d-flex justify-content-center">
                            <img src="assets/images/services/icono-precio-servicios.svg" alt="Icono precio">
                        </div>
                        <p class="fw-semibold fs-5 text-uppercase">Desde $<?=$datos['price']?></p>
                    </div>
                    <div class="dato reviews d-flex align-items-center">
                        <div class="icono icono_review d-flex justify-content-center">
                            <img src="assets/images/services/icono-reviews-servicio.svg" alt="Icono reseñas">
                        </div>
                        <div class="review_date">
                            <p class="fw-bolder fs-2 text-uppercase fuente-secundaria">4.3</p>
                            <p class="fw-semibold fs-5 text-uppercase">+ 30 calificaciones</p>
                        </div>
                    </div>
                    <div class="dato tiempo d-flex align-items-center">
                        <div class="icono icono_tiempo d-flex justify-content-center">
                            <img src="assets/images/services/icono-tiempo-servicios.svg" alt="Icono tiempo">
                        </div>
                        <p class="fw-bolder fs-2 fuente-secundaria"><?=$datos['time']?> Mins</p>
                    </div>
                </div>
                <div class="servicios_circle"></div>
                <div class="reservar-btn d-flex justify-content-start">
                    <a href="?c=Appointments&m=index">Realizar reservación</a>
                </div>
            </div>
            <div class="servicio_img">
                <img src="data:<?= $img['tipo_imagen']; ?>;base64,<?= base64_encode($img['imagen']); ?>" alt="Imagen">
            </div>
        </div>
        <?php 
            endforeach; 
        endforeach; 
        ?>    
    </div>
</section>
<script src="./assets/js/services.js"></script>