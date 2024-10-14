<!-- contenido -->   
<link rel="stylesheet" href="./assets/css/style-appointments.css">
<section class="appointments">
  <h2 class="title-page text-uppercase bolder p-4 container">Agenda tu cita</h2>
  <div class="appointments-services mb-5">
    <h2 class="title text-uppercase text-center">Elige un servicio</h2>
    <h3 class="sub-title text-center">Servicio</h3>
    <div class="m-carousel">
    <?php 
    foreach($this->modelosvc->listarServicios() as $datos): 
      foreach( $this->modelosvc->listarImagenServicio($datos['id']) as $img):?>
        <a class="carousel-item" href="javascript:void(0);" id="<?=$datos['id']?>" data-name="<?=$datos['name']?>" style="background-image: url('data:<?= $img['tipo_imagen']; ?>;base64,<?= base64_encode($img['imagen']); ?>');"></a>
    <?php 
      endforeach;
    endforeach; ?>
    </div>
  </div>
  <div class="appointments-stylist mb-5">
    <h2 class="title text-uppercase text-center mt-5">Elige tu estilista preferido</h2>
    <h3 class="sub-title text-center">Servicio</h3>
    <div class="m-carousel">
    <?php 
    foreach($this->modelosvc->listarEstilistas() as $datos): 
      foreach( $this->modelosvc->listarImagenEstilista($datos['id']) as $img):?>
        <a class="carousel-item" href="javascript:void(0);" id="<?=$datos['id']?>" data-name="<?=$datos['users_id']?>" style="background-image: url('data:<?= $img['tipo_imagen']; ?>;base64,<?= base64_encode($img['imagen']); ?>');"></a>
    <?php 
      endforeach;
    endforeach; ?>
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
          <li>6:00</li>
          <li>8:00</li>
          <li>10:00</li>
          <li>12:00</li>
          <li>15:00</li>
          <li>17:00</li>
          <li>19:00</li>
          <li>21:00</li>
          <li>23:00</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="reservar-btn d-flex justify-content-center">
      <a href="javascript:void(0);" class="reserva-cita">Reserva ahora</a>
      <a type="button" class="reserva-alert" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Reserva ahora
      </a>
  </div>
  <div class="mensaje-appointment alert" role="alert"></div>
  
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Inicia sesión para reservar una cita</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Para agendar una cita, primero debes iniciar sesión en tu cuenta.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="window.location.href='?c=Login&m=login'">Iniciar sesión</button>
      </div>
    </div>
  </div>
</div>

</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.m-carousel');
    var instances = M.Carousel.init(elems);
  });
</script>
<script src="./assets/js/appointments.js"></script>