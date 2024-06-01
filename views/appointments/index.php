<!-- contenido -->   
<link rel="stylesheet" href="./assets/css/style-appointments.css">
<section class="appointments">
  <h2 class="title-page text-uppercase bolder p-4 container">Agenda tu cita</h2>
  <div class="appointments-services mb-5">
    <h2 class="title text-uppercase text-center">Elige un servicio</h2>
    <h3 class="sub-title text-center">Servicio</h3>
    <div class="m-carousel">
        <a class="carousel-item" href="#1" id="" data-name="Corte de cabello" style="background-image: url(./assets/images/appointments/haircut.png);"></a>
        <a class="carousel-item" href="#2" id="" data-name="Depilacion" style="background-image: url(./assets/images/appointments/depilacion.png);"></a>
        <a class="carousel-item" href="#3" id="" data-name="Pedicure" style="background-image: url(./assets/images/appointments/pedicure.svg);"></a>
        <a class="carousel-item" href="#4" id="" data-name="Maquillaje" style="background-image: url(./assets/images/appointments/maquillaje.png);"></a>
        <a class="carousel-item" href="#5" id="" data-name="Tinturado" style="background-image: url(./assets/images/appointments/tinturado.svg);"></a>
    </div>
  </div>
  <div class="appointments-stylist mb-5">
    <h2 class="title text-uppercase text-center mt-5">Elige tu estilista preferido</h2>
    <h3 class="sub-title text-center">Servicio</h3>
    <div class="m-carousel">
        <a class="carousel-item" href="#1" data-name="Estilista 1" style="background-image: url(./assets/images/appointments/estilista-1.jpg);"></a>
        <a class="carousel-item" href="#2" data-name="Estilista 2" style="background-image: url(./assets/images/appointments/estilista-2.jpg);"></a>
        <a class="carousel-item" href="#3" data-name="Estilista 3" style="background-image: url(./assets/images/appointments/estilista-3.jpg);"></a>
        <a class="carousel-item" href="#4" data-name="Estilista 4" style="background-image: url(./assets/images/appointments/estilista-4.jpg);"></a>
        <a class="carousel-item" href="#5" data-name="Estilista 5" style="background-image: url(./assets/images/appointments/estilista-5.jpg);"></a>
    </div>
  </div>
  <div class="appointments-date mb-5">
    <h2 class="title text-uppercase text-center mt-5">Selecciona la fecha</h2>
    <div class="available-nonavailable">
      <p class="available">Disponible</p>
      <p class="non-available">No disponible</p>
    </div>
    <div class="calendario">
      <div class="head">
        <h3 class="Current-date">Mayo 9</h3>
        <div class="icons">
          <i class="bi bi-chevron-left" id="prev"></i>
          <i class="bi bi-chevron-right" id="next"></i>
        </div>
      </div>
      <div class="main">
        <ul class="weeks">
          <li>Lun</li>
          <li>Mar</li>
          <li>Mier</li>
          <li>Juev</li>
          <li>Vier</li>
          <li>Sab</li>
          <li>Dom</li>
        </ul>
        <ul class="days">
          <!-- <li class="block">8</li> -->
        </ul>
      </div>

    </div>
  </div>
  <div class="appointments-date mb-5">
    <h2 class="title text-uppercase text-center mt-5">Selecciona la hora</h2>
    <div class="hour">
      <div class="main">
        <ul class="time">
          <li>1</li>
          <li>2</li>
          <li>3</li>
          <li>4</li>
          <li>5</li>
          <li>6</li>
          <li>7</li>
          <li>8</li>
          <li>9</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="reservar-btn d-flex justify-content-center">
      <a href="#" class="reserva-cita">Reserva ahora</a>
  </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.m-carousel');
    var instances = M.Carousel.init(elems);
  });
</script>
<script src="./assets/js/appointments.js"></script>