<!-- contenido -->   
<link rel="stylesheet" href="./assets/css/style-appointments.css">
<section class="appointments">
  <h2 class="title text-uppercase bolder p-4">Agenda tu cita</h2>
  <div class="appointments-services">
    <h2 class="title text-uppercase text-center">Elige un servicio</h2>
    <div class="m-carousel">
        <h3 class="title text-center">Servicio</h3>
        <a class="carousel-item" href="#1" style="background-image: url(./assets/images/appointments/haircut.png);"></a>
        <a class="carousel-item" href="#2" style="background-image: url(./assets/images/appointments/depilacion.png);"></a>
        <a class="carousel-item" href="#3" style="background-image: url(./assets/images/appointments/pedicure.svg);"></a>
        <a class="carousel-item" href="#4" style="background-image: url(./assets/images/appointments/maquillaje.png);"></a>
        <a class="carousel-item" href="#5" style="background-image: url(./assets/images/appointments/tinturado.svg);"></a>
    </div>
  </div>
  <div class="appointments-stylist">
    <h2 class="title text-uppercase text-center mt-5">Elige tu estilista preferido</h2>
    <div class="m-carousel">
        <h3 class="title text-center">Servicio</h3>
        <a class="carousel-item" href="#1" style="background-image: url(./assets/images/appointments/estilista-1.jpg);"></a>
        <a class="carousel-item" href="#2" style="background-image: url(./assets/images/appointments/estilista-2.jpg);"></a>
        <a class="carousel-item" href="#3" style="background-image: url(./assets/images/appointments/estilista-3.jpg);"></a>
        <a class="carousel-item" href="#4" style="background-image: url(./assets/images/appointments/estilista-4.jpg);"></a>
        <a class="carousel-item" href="#5" style="background-image: url(./assets/images/appointments/estilista-5.jpg);"></a>
    </div>
  </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.m-carousel');
    console.log(elems)
    var instances = M.Carousel.init(elems);
    console.log(M.Carousel)
  });
</script>
