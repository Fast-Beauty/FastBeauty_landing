<link rel="stylesheet" type="text/css" href="./assets/css/ProductsDetails.css">
<section class="section-product-detail">

    <!-- Migas de pan -->
    <div class="container">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="?c=Landing&m=landing">Home</a></li>
                <li class="breadcrumb-item"><a href="?c=ProductsDetails&m=index">Productos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Jabones</li>
            </ol>
        </nav>
    </div>
    <!-- End Migas de pan -->

    <input type="radio" id="image1" name="image" checked>
    <input type="radio" id="image2" name="image">
    <input type="radio" id="image3" name="image">

    <!-- Carrousel product -->
    <div class="container d-flex container-detail">
        <div class="imgs-product-detail">
            <div class="featured-wrapper">
            <?php 
                foreach ($this->modelosvc->obtenerId($_GET['id']) as $datos) : 
                    foreach( $this->modelosvc->listarImagenProducto($datos['id']) as $img):?>?>
                <ul class="featured-list">
                    <li>
                        <figure>
                        <img src="data:<?= $img['tipo_imagen']; ?>;base64,<?= base64_encode($img['imagen']); ?>" alt="Imagen">
                        </figure>
                    </li>
                    <li>
                        <figure>
                        <img src="data:<?= $img['tipo_imagen']; ?>;base64,<?= base64_encode($img['imagen']); ?>" alt="Imagen">
                        </figure>
                    </li>
                    <li>
                        <figure>
                        <img src="data:<?= $img['tipo_imagen']; ?>;base64,<?= base64_encode($img['imagen']); ?>" alt="Imagen">
                        </figure>
                    </li>
                </ul>
                <ul class="arrows">
                    <li>
                        <label for="image1"></label>
                    </li>
                    <li>
                        <label for="image2"></label>
                    </li>
                    <li>
                        <label for="image3"></label>
                    </li>
                </ul>
                <ul class="dots">
                    <li>
                        <label for="image1"></label>
                    </li>
                    <li>
                        <label for="image2"></label>
                    </li>
                    <li>
                        <label for="image3"></label>
                    </li>
                </ul>
            </div>
            <ul class="thumb-list">
                <li>
                    <label for="image1">
                    <img src="data:<?= $img['tipo_imagen']; ?>;base64,<?= base64_encode($img['imagen']); ?>" alt="Imagen">
                        <span class="outer"></span>
                    </label>
                </li>
                <li>
                    <label for="image2">
                    <img src="data:<?= $img['tipo_imagen']; ?>;base64,<?= base64_encode($img['imagen']); ?>" alt="Imagen">
                        <span class="outer"></span>
                    </label>
                </li>
                <li>
                    <label for="image3">
                    <img src="data:<?= $img['tipo_imagen']; ?>;base64,<?= base64_encode($img['imagen']); ?>" alt="Imagen">
                        <span class="outer"></span>
                    </label>
                </li>
            </ul>
            
        </div>
        <div class="product-text">
            <h4><?=$datos['name']?></h4>
            <!-- <p class="gris-color">For Soft, smooth skin</p> -->

            <div class="container-price">
                <p class="price"> $<?=$datos['price']?></p>
                <!-- <del class="prom price gris-color">$ 12.000</del>
                <p class="off">50% OFF</p> -->
            </div>

            <div id="availability" class=""> 
                <span class="a-size-medium a-color-success">(<?=$datos['quantity']?> Unidades disponibles) </span>
            </div>

            <hr class="line">

            <div class="">
                <!-- Descripcion -->
                <div class="text">
                    <div class="container">
                        <div class="gris-color">
                            <h6 class="titulo-descripcion">Descripción</h6>

                        </div>

                        <p class="text-descripcion"><?=$datos['description']?></p>
                    </div>
                </div>
                <!-- End Descripcion -->
            </div>
            <?php 
                    endforeach;
                endforeach;    
            ?>
        </div>
    </div>
    <!-- End Carrousel product -->

    <!-- Decoracion flor -->
    <div class="flower2">
        <img src="assets/images/Flower2.svg" alt="">
    </div>
    <!-- End Decoracion flor -->



</section>