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
                    <h1 class="m-0">Listado de productos</h1>
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
                            <h3 class="card-title">Productos registrados</h3>

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
                                                <td><?php echo $compras_dato['id_producto'] ?></td>
                                                <td><?php echo $compras_dato['fecha_compra'] ?></td>
                                                <td><?php echo $compras_dato['id_proveedor'] ?></td>
                                                <td><?php echo $compras_dato['comprobante'] ?></td>
                                                <td><?php echo $compras_dato['id_usuario'] ?></td>
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