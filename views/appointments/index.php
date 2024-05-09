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
  <div class="appointments-date">
    <h2 class="title text-uppercase text-center mt-5">Selecciona la fecha</h2>
    <div class="available-nonavailable">
      <p class="available">Disponible</p>
      <p class="available">No disponible</p>
    </div>
    <div class="calendario">
      <div class="head">
        <h3 class="Current-date">Mayo 9</h3>
        <div class="icons">
          <i class="bi bi-chevron-left"></i>
          <i class="bi bi-chevron-right"></i>
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
          <li>28</li>
          <li>29</li>
          <li>30</li>
          <li>1</li>
          <li>2</li>
          <li>3</li>
          <li>4</li>
          <li>5</li>
          <li>6</li>
          <li>7</li>
          <li class="block">8</li>
          <li>9</li>
          <li>10</li>
          <li>11</li>
          <li class="block">12</li>
          <li>13</li>
          <li>14</li>
          <li>15</li>
          <li>16</li>
          <li>17</li>
          <li>18</li>
          <li>19</li>
          <li>20</li>
          <li>21</li>
          <li>22</li>
          <li>23</li>
          <li>24</li>
          <li>25</li>
          <li>26</li>
          <li class="block">27</li>
          <li>28</li>
          <li>29</li>
          <li>30</li>
          <li>31</li>
          <li>1</li>
        </ul>
      </div>

    </div>
  </div>
  <div class="appointments-date">
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
