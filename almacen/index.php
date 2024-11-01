<?php
// Incluir archivo de configuración
include('../app/config.php');

// Incluir archivo de manejo de sesión
include('../layout/sesion.php');

// Incluir la primera parte del layout (encabezado, menú, etc.)
include('../layout/parte1.php');

// Incluir el controlador para listar productos
include('../app/controllers/almacen/listado_de_productos.php');

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
                                                <center>Codigo</center>
                                            </th>
                                            <th>
                                                <center>Categoria</center>
                                            </th>
                                            <th>
                                                <center>Imagen</center>
                                            </th>
                                            <th>
                                                <center>Nombre</center>
                                            </th>
                                            <th>
                                                <center>Descripcion</center>
                                            </th>
                                            <th>
                                                <center>Stock</center>
                                            </th>
                                            <th>
                                                <center>Precio Compra</center>
                                            </th>
                                            <th>
                                                <center>Precio Venta</center>
                                            </th>

                                            <th>
                                                <center>Fecha ingreso</center>
                                            </th>
                                            <th>
                                                <center>Email</center>
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
                                        foreach ($productos_datos as $productos_dato) {
                                          $id_producto = $productos_dato['id_producto'];      
                                        ?>
                                            <tr>
                                                <td><?php echo $contador = $contador + 1; ?></td>
                                                <td><?php echo $productos_dato['codigo']; ?></td>
                                                <td><?php echo $productos_dato['categoria']; ?></td>
                                                <td>
                                                    <img src="<?php echo $URL . "/almacen/img_productos/" . $productos_dato['imagen']; ?>" width="100%" alt="">
                                                </td>
                                                <td><?php echo $productos_dato['nombre']; ?></td>
                                                <td><?php echo $productos_dato['descripcion']; ?></td>
                                                <td><?php echo $productos_dato['stock']; ?></td>
                                                <td><?php echo $productos_dato['precio_compra']; ?></td>
                                                <td><?php echo $productos_dato['precio_venta']; ?></td>
                                                <td><?php echo $productos_dato['fecha_ingreso']; ?></td>
                                                <td><?php echo $productos_dato['email']; ?></td>
                                                <td>
                                                    <center>
                                                        <div class="btn-group">
                                                            <a href="<?php echo $URL; ?>/almacen/show.php?id=<?php echo $id_producto; ?>" type="button" class="btn btn-info btn-sm"><i class="fas fa-eye"></i> Ver</a>
                                                            <a href="<?php echo $URL; ?>/almacen/update.php?id=<?php echo $id_producto; ?>" type="button" class="btn btn-success btn-sm"><i class="fas fa-edit"></i> Editar</a>
                                                            <a href="<?php echo $URL; ?>/almacen/delete.php?id=<?php echo $id_producto; ?>" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Borrar</a>
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
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Productos",
                "infoEmpty": "Mostrando 0 a 0 de 0 Usuarios",
                "infoFiltered": "(Filtrado de _MAX_ total Productos)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Productos",
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