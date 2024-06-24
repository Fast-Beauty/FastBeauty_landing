<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> -->
<link rel="stylesheet" type="text/css" href="./assets/css/products.css">
<!-- contenido -->
<section class="section-products">
    <!-- header -->

    <div class="products__header">
        <div class="container-title d-flex">
            <img class="bag" src="./assets/images/icons_products/bag.png">
            <div class="text_container">
                <p class="text-uppercase  titulo-products">Upto 70% off</p>
                <p class="subtitulo-products">It ends in 5h 58m 3s</p>
            </div>
        </div>
    </div>

    <!-- End header -->

    <!-- Migas -->
    <div class="">
        <div class="container">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="?c=Landing&m=landing">Home</a></li>
                    <li class="breadcrumb-item"><a href="?c=Products&m=products">Productos</a></li>
                    <!-- <li class="breadcrumb-item active" aria-current="page">Jabones</li> -->
                </ol>
            </nav>
        </div>
        <!-- End Migas -->
    </div>

    <!-- card -->
    <section class="section-card">
            <?php
            require_once('views/components/sidebar.php');
            foreach ($this->modelosvc->listar() as $datos) :
                foreach ($this->modelosvc->listarImagen($datos['id']) as $img) :
            ?>
                    <div class="card">
                        <ul class="featured-list">
                            <li>
                                <figure>
                                    <img src="data:<?= $img['tipo_imagen']; ?>;base64,<?= base64_encode($img['imagen']); ?>" alt="Imagen">
                                </figure>
                                <h5 class="card-title"><?= $datos['name'] ?></h5>
                                <p class="card-text"><?= $datos['mark_id'] ?></p>
                                <p class="card-text"><?= $datos['price'] ?></p>
                            </li>
                        </ul>
                    </div>
                    <?php
                endforeach;
            endforeach;
                    ?>
                    
                    <!-- End card -->


    </section>
</section>