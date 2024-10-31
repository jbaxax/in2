<?php
// Incluir archivo de configuración
include('../app/config.php');

// Incluir archivo de manejo de sesión
include('../layout/sesion.php');

// Incluir la primera parte del layout (encabezado, menú, etc.)
include('../layout/parte1.php');

// Incluir el controlador para listar productos
include('../app/controllers/compras/listado_de_compras.php');

?>

<div class="content-wrapper">
    <!-- Encabezado de contenido (encabezado de página) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Listado de compras</h1>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Contenido principal -->
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Comrpras registrados</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="table table-responsive">
                                <table id="example1" class="table table-bordered table-striped  table-sm">
                                    <thead>
                                        <tr>
                                            <th>
                                                <center>Nro</center>
                                            </th>
                                            <th>
                                                <center>Nro de la compra</center>
                                            </th>
                                            <th>
                                                <center>Producto</center>
                                            </th>
                                            <th>
                                                <center>Fecha de compra</center>
                                            </th>
                                            <th>
                                                <center>Proveedor</center>
                                            </th>
                                            <th>
                                                <center>Comprobante</center>
                                            </th>
                                            <th>
                                                <center>Usuario</center>
                                            </th>
                                            <th>
                                                <center>Precio Compra</center>
                                            </th>
                                            <th>
                                                <center>Cantidad</center>
                                            </th>
                                            <th>
                                                <center>Acciones</center>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $contador = 0;
                                        // Iterar sobre los datos de usuarios
                                        foreach ($compras_datos as $compras_dato) {
                                            $id_compra = $compras_dato['id_compra'];
                                        ?>
                                            <tr>
                                                <td><?php echo $contador = $contador + 1 ?></td>
                                                <td><?php echo $compras_dato['nro_compra'] ?></td>
                                                <td>
                                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-producto<?php echo $id_compra ?>">
                                                        <?php echo $compras_dato['nombre_producto']  ?>
                                                    </button>
                                                    <div class="modal fade" id="modal-producto<?php echo $id_compra; ?>">
                                                        <div class="modal-dialog modal-xl">
                                                            <div class="modal-content">
                                                                <div class="modal-header" style="background-color: #28a745; color: white">
                                                                    <h4 class="modal-title">Datos del producto</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="row">
                                                                        <div class="col-md-9">
                                                                            <div class="row">
                                                                                <div class="col-md-2">
                                                                                    <div class="form-group">
                                                                                        <label for="">Codigo</label>
                                                                                        <input type="text" value="<?php echo $compras_dato['codigo'] ?>" class="form-control" disabled>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <div class="form-group">
                                                                                        <label for="">Nombre del producto</label>
                                                                                        <input type="text" value="<?php echo $compras_dato['nombre'] ?>" class="form-control" disabled>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label for="">Descripcion</label>
                                                                                        <input type="text" value="<?php echo $compras_dato['descripcion'] ?>" class="form-control" disabled>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="row">
                                                                                <div class="col-md-3">
                                                                                    <div class="form-group">
                                                                                        <label for="">Stock</label>
                                                                                        <input type="text" value="<?php echo $compras_dato['stock'] ?>" class="form-control" disabled>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <div class="form-group">
                                                                                        <label for="">Stock minimo</label>
                                                                                        <input type="text" value="<?php echo $compras_dato['stock_minimo'] ?>" class="form-control" disabled>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <div class="form-group">
                                                                                        <label for="">Stock maximo</label>
                                                                                        <input type="text" value="<?php echo $compras_dato['stock_maximo'] ?>" class="form-control" disabled>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <div class="form-group">
                                                                                        <label for="">Fecha de Ingreso</label>
                                                                                        <input type="text" value="<?php echo $compras_dato['fecha_ingreso'] ?>" class="form-control" disabled>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-md-3">
                                                                                    <div class="form-group">
                                                                                        <label for="">Precio compra</label>
                                                                                        <input type="text" value="<?php echo $compras_dato['precio_compra_producto'] ?>" class="form-control" disabled>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <div class="form-group">
                                                                                        <label for="">Precio venta</label>
                                                                                        <input type="text" value="<?php echo $compras_dato['precio_venta_producto'] ?>" class="form-control" disabled>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <div class="form-group">
                                                                                        <label for="">Categoria</label>
                                                                                        <input type="text" value="<?php echo $compras_dato['nombre_categoria'] ?>" class="form-control" disabled>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-3">
                                                                                    <div class="form-group">
                                                                                        <label for="">Usuario</label>
                                                                                        <input type="text" value="<?php echo $compras_dato['nombre_usuario_producto'] ?>" class="form-control" disabled>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="form-group">
                                                                                <label for="">Imagen</label>
                                                                                <img src="<?php echo $URL . "/almacen/img_productos/" . $compras_dato['imagen'] ?>" alt="" width="100%">
                                                                            </div>
                                                                        </div>
                                                                    </div>





                                                                </div>
                                                            </div>
                                                            <!-- /.modal-content -->
                                                        </div>

                                                </td>
                                                <td><?php echo $compras_dato['fecha_compra'] ?></td>
                                                <td>
                                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-proveedor<?php echo $id_compra ?>">
                                                        <?php echo $compras_dato['nombre_proveedor']  ?>
                                                    </button>

                                                    <div class="modal fade" id="modal-proveedor<?php echo $id_compra; ?>">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header" style="background-color: #28a745; color: white">
                                                                    <h4 class="modal-title">Datos del proveedor</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">

                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="">Nombre del proveedor</label>
                                                                                <input type="text" name="" id="" value="<?php echo $compras_dato['nombre_proveedor']; ?>" class="form-control" disabled>
                                                                            </div>
                                                                        </div>


                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="">Telefono del proveedor</label>
                                                                                <input type="text" name="" id="" value="<?php echo $compras_dato['telefono_proveedor']; ?>" class="form-control" disabled>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="">empresa</label>
                                                                                <input type="text" name="" id="" value="<?php echo $compras_dato['empresa']; ?>" class="form-control" disabled>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="">Celular</label>
                                                                                <div class="input-group">
                                                                                    <a href="https://wa.me/51<?php echo $compras_dato['celular_proveedor']; ?>" target="_blank" class="btn btn-success">
                                                                                        <i class="fa fa-phone"></i>
                                                                                        <?php echo $compras_dato['celular_proveedor']; ?>
                                                                                    </a>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="">Email</label>
                                                                                <input type="text" name="" id="" value="<?php echo $compras_dato['email_proveedor']; ?>" class="form-control" disabled>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="">Direccion</label>

                                                                                <input type="text" name="" id="" value="<?php echo $compras_dato['direccion_proveedor']; ?>" class="form-control" disabled>


                                                                            </div>
                                                                        </div>




                                                                    </div>

                                                                    <!-- /.modal-content -->
                                                                </div>

                                                </td>
                                                <td><?php echo $compras_dato['comprobante'] ?></td>
                                                <td><?php echo $compras_dato['nombres_usuario'] ?></td>
                                                <td><?php echo $compras_dato['precio_compra'] ?></td>
                                                <td><?php echo $compras_dato['cantidad'] ?></td>
                                                <td>
                                                    <center>
                                                        <div class="btn-group">
                                                            <a href="<?php echo $URL; ?>/almacen/show.php?id=<?php echo $id_compra; ?>" type="button" class="btn btn-info btn-sm"><i class="fas fa-eye"></i> Ver</a>
                                                            <a href="<?php echo $URL; ?>/almacen/update.php?id=<?php echo $id_compra; ?>" type="button" class="btn btn-success btn-sm"><i class="fas fa-edit"></i> Editar</a>
                                                            <a href="<?php echo $URL; ?>/almacen/delete.php?id=<?php echo $id_compra; ?>" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Borrar</a>
                                                        </div>
                                                    </center>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>

                                    </tbody>
                                    <tfoot>
                                    </tfoot>

                                </table>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>

            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>


<?php

// Incluir el archivo de mensajes
include('../layout/mensajes.php');

// Incluir la segunda parte del layout (pie de página, scripts, etc.)
include('../layout/parte2.php');
?>

<script>
    $(function() {
        // Inicializar DataTable con opciones personalizadas
        $("#example1").DataTable({
            "pageLength": 5,
            language: {
                "emptyTable": "No hay información",
                "decimal": "",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Compras",
                "infoEmpty": "Mostrando 0 a 0 de 0 Usuarios",
                "infoFiltered": "(Filtrado de _MAX_ total Compras)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Compras",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscador:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },
            "responsive": true,
            "lengthChange": true,
            "autoWidth": false,
            buttons: [{
                    extend: 'collection',
                    text: 'Reportes',
                    orientation: 'landscape',
                    buttons: [{
                        text: 'Copiar',
                        extend: 'copy'
                    }, {
                        extend: 'pdf',
                    }, {
                        extend: 'csv',
                    }, {
                        extend: 'excel',
                    }, {
                        text: 'Imprimir',
                        extend: 'print'
                    }]
                },
                {
                    extend: 'colvis',
                    text: 'Visor de columnas',
                    collectionLayout: 'fixed three-columns'
                }
            ],
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script>