<!-- contenido -->   
<link rel="stylesheet" href="./assets/css/style-appointments.css">
<section class="appointments">
    <div class="m-carousel">
        <a class="carousel-item" href="#1" style="background-image: url(./assets/images/appointments/haircut.png);"></a>
        <a class="carousel-item" href="#2" style="background-image: url(./assets/images/appointments/depilacion.png);"></a>
        <a class="carousel-item" href="#3" style="background-image: url(./assets/images/appointments/pedicure.svg);"></a>
        <a class="carousel-item" href="#4" style="background-image: url(./assets/images/appointments/maquillaje.png);"></a>
        <a class="carousel-item" href="#5" style="background-image: url(./assets/images/appointments/tinturado.svg);"></a>
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
