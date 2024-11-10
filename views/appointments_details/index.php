<link rel="stylesheet" href="./assets/css/appointmentsDetails.css">
<div class="pcoded-content container my-5">

    <div class="page-header card my-0">
        <div class="d-flex align-items-center pt-3 justify-content-center border-bottom">
            <h3 class="font-weight-bolder">Tus citas</h3>
        </div>
        <div class="row align-items-start">
            <div class="col-lg-12">
                <div class="page-header-title">
                    <div class="d-inline">
                        <table class="table table-hover table-borderless">
                            <thead>
                                <tr class="">
                                    <th class="text-center" scope="col">Servicio</th>
                                    <th class="text-center" scope="col">Estilista</th>
                                    <th class="text-center" scope="col">Día</th>
                                    <th class="text-center" scope="col" class="text-center">Hora</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($this->modelosvc->listarCitas($_GET['id']) as $datos): ?>
                                    <tr>
                                    <?php foreach ($this->modelosvc->listarImagenServicio($datos['services_id']) as $data) : ?>
                                        <td class="text-center" style="width:360px; vertical-align: middle;">
                                            <?php foreach ($this->modelosvc->listarNombreServicio($datos['services_id']) as $dat) : ?>
                                                <p><?=$dat['name']?></p>
                                            <?php endforeach ?>
                                            <img src="data:<?= $data['tipo_imagen']; ?>;base64,<?= base64_encode($data['imagen']); ?>" alt="Imagen">
                                        </td>
                                    <?php endforeach ?>
                                    <?php foreach ($this->modelosvc->listarImagenEstilista($datos['Employees_id']) as $data) : ?>
                                        <td class="text-center" style="width:300px; vertical-align: middle;">
                                            <img src="data:<?= $data['tipo_imagen']; ?>;base64,<?= base64_encode($data['imagen']); ?>" alt="Imagen">
                                        </td>
                                    <?php endforeach ?>
                                        <td class="text-center" style="vertical-align: middle;">
                                          <?=$datos['date']?>
                                        </td>
                                        <td class="text-center" style="vertical-align: middle;">
                                          <?=$datos['hora']?>

                                            <!-- <div class="d-flex justify-content-around icon-table">
                                                <a href="?c=ProductsImages&m=show&id=<?= $datos['id'] ?>">
                                                    <span class="feather icon-eye">
                                                        <p class="d-inline text-icn">Detalles</p>
                                                    </span>
                                                </a>
                                                <a href="?c=ProductsImages&m=edit&id=<?= $datos['id'] ?>">
                                                    <span class="feather icon-edit-2">
                                                        <p class="d-inline">Editar</p>
                                                    </span>
                                                </a>
                                                <a href="?c=ProductsImages&m=delete&id=<?= $datos['id'] ?>">
                                                    <span class="feather icon-trash">
                                                        <p class="d-inline">Eliminar</p>
                                                    </span>
                                                </a>
                                            </div> -->
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                    <!-- <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-center" style="width:150px">
                                            imagen
                                        </td>
                                        <td class="text-center">datos</td>
                                        <td>
                                            hola
                                        </td>
                                    </tr> -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</div>
</div>
</div>