
<link rel="stylesheet" type="text/css" href="./assets/css/products.css">
<!-- contenido -->
<section class="section-products">
    <!-- header -->
    <div class="container">
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

        <section class="section-productos-sidebar d-flex">
            <div class="sidebar">
                <nav class="nav1">
                    <ul class="list">
                    <h1 class="titule">Productos</h1>
                    <li class="list_item  list_item_click">
                        <div class="list_button list_button_click">
                            <a href="#" class="nav_link">Category</a>
                            <img src="./assets/images/icons_products/arrow.svg" class="list_arrow">
                        </div>
    
                        <ul class="list_show">
                            <li class="list_inside">
                                <input type="checkbox" class="">Shampus</input>
                            </li>
                            <li class="list_inside">
                                <input type="checkbox" class="">Jabones</input>
                            </li>
                        </ul>
                    </li>
    
                    <li class="list_item  list_item_click">
                        <div class="list_button list_button_click">
                            <a href="#" class="nav_link">Brand</a>
                            <img src="./assets/images/icons_products/arrow.svg" class="list_arrow">
                        </div>
    
                        <ul class="list_show">
                            <li class="list_inside">
                                <input type="checkbox" class="">Nivea</input>
                            </li>
                            <li class="list_inside">
                                <input type="checkbox" class="">Dove</input>
                            </li>
                            <li class="list_inside">
                                <input type="checkbox" class="">Ponds</input>
                            </li>
                            <li class="list_inside">
                                <input type="checkbox" class="">Vogue</input>
                            </li>
                            <li class="list_inside">
                                <input type="checkbox" class="">'L'ORÉAL</input>
                            </li>
                            <li class="list_inside">
                                <input type="checkbox" class="">Maybeline</input>
                            </li>
                            <li class="list_inside">
                                <input type="checkbox" class="">Off-White</input>
                            </li>
                            <li class="list_inside">
                                <input type="checkbox" class="">Muave Orange</input>
                            </li>
                        </ul>
                    </li>
    
                    <li class="list_item  list_item_click">
                        <div class="list_button list_button_click">
                            <a href="#" class="nav_link">Price Range</a>
                            <img  class="list_arrow" src="./assets/images/icons_products/arrow.svg">
                        </div>
    
                        <ul class="list_show">
                            <li class="list_inside">
                                <input type="checkbox" class="">$10.000</input>
                            </li>
                            <li class="list_inside">
                                <input type="checkbox" class="">$20.000</input>
                            </li>
                        </ul>
                    </li>
    
                    <li class="list_item  list_item_click">
                        <div class="list_button list_button_click">
                            <a href="#" class="nav_link">Discount</a>
                            <img src="./assets/images/icons_products/arrow.svg" class="list_arrow">
                        </div>
    
                        <ul class="list_show">
                            <li class="list_inside">
                                <input type="checkbox" class="">15%</input>
                            </li>
                            <li class="list_inside">
                                <input type="checkbox" class="">20%</input>
                            </li>
                        </ul>
                    </li>
    
                    <li class="list_item  list_item_click">
                        <div class="list_button list_button_click">
    
                            <a href="#" class="nav_link">Availability</a>
                            <img src="./assets/images/icons_products/arrow.svg" class="list_arrow">
                        </div>
    
                        <ul class="list_show">
                            <li class="list_inside">
                                <input type="checkbox" class="">Online</input>
                            </li>
                            <li class="list_inside">
                                <input type="checkbox" class="">Tienda</input>
                            </li>
                        </ul>
                    </li>
    
                </ul>
                </nav>
            </div>
            <div class="section-productos" style="width: 100%">
                <div class="container-productos">
                <?php
                foreach ($this->modelosvc->listar() as $datos) :
                    foreach ($this->modelosvc->listarImagen($datos['id']) as $img) :
                ?>
                    <div class="producto" style="background-image: url('data:<?= $img['tipo_imagen']; ?>;base64,<?= base64_encode($img['imagen']); ?>');">
                        <div class="info-producto">
                            <h3><?= $datos['name'] ?></h3>
                            <?php foreach ($this->modelosvc->obtenerMark($datos['id']) as $data) : ?>
                                <p class="descripcion"><?= $data['name'] ?></p>
                            <?php endforeach ?>
                            <p class="precio"><?= $datos['price'] ?></p>
                            <div class="carrito-producto">
                                <a href="?c=ProductsDetails&m=index&id=<?= $datos['id'] ?>">
                                    <img src="assets/images/Eye.svg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>    
                        <?php
                    endforeach;
                endforeach;
                        ?>
                </div>       
            </div>
        </section>
    </div>


    <!-- card -->
</section>
<script src="./assets/js/products.js"></script>