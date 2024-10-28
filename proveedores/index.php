<?php
// Incluir archivo de configuración
include('../app/config.php');

// Incluir archivo de manejo de sesión
include('../layout/sesion.php');

// Incluir la primera parte del layout (encabezado, menú, etc.)
include('../layout/parte1.php');

// Incluir el controlador para listar usuarios
include('../app/controllers/proveedores/listado_de_proveedores.php');

?>

<div class="content-wrapper">
    <!-- Encabezado de contenido (encabezado de página) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 ">Listado de Proveedores <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                            <i class="fa fa-plus"></i> Nuevo
                        </button></h1>

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
                            <h3 class="card-title">Categorias registradas</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            <center>Nro</center>
                                        </th>
                                        <th>
                                            <center>Nombre del proveedor</center>
                                        </th>
                                        <th>
                                            <center>Celular</center>
                                        </th>
                                        <th>
                                            <center>Telefono</center>
                                        </th>
                                        <th>
                                            <center>Empresa</center>
                                        </th>
                                        <th>
                                            <center>Email</center>
                                        </th>
                                        <th>
                                            <center>Direccion</center>
                                        </th>
                                        <th>
                                            <center>Accion</center>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $contador = 0;
                                    // Iterar sobre los datos de usuarios
                                    foreach ($proveedores_datos as $proveedores_dato) {
                                        $id_proveedor = $proveedores_dato['id_proveedor'];
                                        $nombre_proveedor = $proveedores_dato['nombre_proveedor'];
                                    ?>
                                        <tr>
                                            <td>
                                                <center><?php echo $contador = $contador + 1; ?></center>
                                            </td>
                                            <td>
                                                <?php echo $nombre_proveedor; ?>
                                            </td>
                                            <td>
                                                <?php echo $proveedores_dato['celular']; ?>
                                            </td>
                                            <td>
                                                <?php echo $proveedores_dato['telefono']; ?>
                                            </td>
                                            <td>
                                                <?php echo $proveedores_dato['empresa']; ?>
                                            </td>
                                            <td>
                                                <?php echo $proveedores_dato['email']; ?>
                                            </td>
                                            <td>
                                                <?php echo $proveedores_dato['direccion']; ?>
                                            </td>

                                            <td>
                                                <center>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-update<?php echo $id_proveedor; ?>">
                                                            <i class="fa fa-edit"></i> Editar
                                                        </button>
                                                        <!-- modal para editar categorias -->
                                                        <div class="modal fade" id="modal-update<?php echo $id_proveedor; ?>">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header" style="background-color: #28a745; color: white">
                                                                        <h4 class="modal-title">Editar proveedor</h4>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">


                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="">Nombre del proveedor<b>*</b> </label>
                                                                                    <input type="text" id="nombre_proveedor<?php echo $id_proveedor; ?>" value="<?php echo $nombre_proveedor ?>" class="form-control">
                                                                                    <small style="color:red;display:none" id="lbl_nombre">*Este campo es requerido</small>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="">Celular<b>*</b> </label>
                                                                                    <input type="text" id="celular<?php echo $id_proveedor; ?>" value="<?php echo $proveedores_dato['celular'] ?>" class="form-control">
                                                                                    <small style="color:red;display:none" id="lbl_celular">*Este campo es requerido</small>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="">Telefono </label>
                                                                                    <input type="text" id="telefono<?php echo $id_proveedor; ?>" class="form-control" value="<?php echo $proveedores_dato['telefono'] ?>">
                                                                                    <small style="color:red;display:none" id="lbl_telefono">*Este campo es requerido</small>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="">Empresa<b>*</b> </label>
                                                                                    <input type="text" id="empresa<?php echo $id_proveedor; ?>" class="form-control" value="<?php echo $proveedores_dato['empresa'] ?>">
                                                                                    <small style="color:red;display:none" id="lbl_empresa">*Este campo es requerido</small>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="">Email </label>
                                                                                    <input type="email" id="email<?php echo $id_proveedor; ?>" class="form-control" value="<?php echo $proveedores_dato['email'] ?>">
                                                                                    <small style="color:red;display:none" id="lbl_email">*Este campo es requerido</small>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="">Direccion<b>*</b> </label>
                                                                                    <textarea name="" id="direccion<?php echo $id_proveedor; ?>" class="form-control"><?php echo $proveedores_dato['direccion'] ?></textarea>
                                                                                    <small style="color:red;display:none" id="lbl_direccion">*Este campo es requerido</small>
                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                    </div>
                                                                    <div class="modal-footer justify-content-between">
                                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                                                        <button type="button" class="btn btn-success" id="btn-update<?php echo $id_proveedor; ?>">Actualizar</button>

                                                                    </div>


                                                                </div>

                                                            </div>
                                                            <!-- /.modal-content -->
                                                        </div>
                                                        <!-- /.modal-dialog -->
                                                    </div>
                                                    <!-- /.modal para editar proveedors-->

                                                    <script>
                                                        $('#btn-update<?php echo $id_proveedor; ?>').click(function() {
                                                            var nombre_proveedor = $('#nombre_proveedor<?php echo $id_proveedor; ?>').val();
                                                            var celular = $('#celular<?php echo $id_proveedor; ?>').val();
                                                            var telefono = $('#telefono<?php echo $id_proveedor; ?>').val();
                                                            var empresa = $('#empresa<?php echo $id_proveedor; ?>').val();
                                                            var email = $('#email<?php echo $id_proveedor; ?>').val();
                                                            var direccion = $('#direccion<?php echo $id_proveedor; ?>').val();

                                                            var id_proveedor = '<?php echo $id_proveedor; ?>';

                                                            if (nombre_proveedor == "") {
                                                                $('#nombre_proveedor').focus();
                                                                $('#lbl_nombre').css('display', 'block');
                                                            } else if (celular == "") {
                                                                $('#celular').focus();
                                                                $('#lbl_celular').css('display', 'block');
                                                            } else if (empresa == "") {
                                                                $('#empresa').focus();
                                                                $('#lbl_empresa').css('display', 'block');
                                                            } else if (direccion == "") {
                                                                $('#direccion').focus();
                                                                $('#lbl_direccion').css('display', 'block');
                                                            } else {
                                                                var url = "../app/controllers/proveedores/create.php";

                                                                $.get(url, {
                                                                    nombre_proveedor: nombre_proveedor,
                                                                    celular: celular,
                                                                    telefono: telefono,
                                                                    empresa: empresa,
                                                                    email: email,
                                                                    direccion: direccion,

                                                                }, function(datos) {
                                                                    $('#respuesta').html(datos);

                                                                });
                                                            }

                                                        })
                                                    </script>
                                                    <div id="respuesta_update<?php echo $id_categoria; ?>"></div>
                        </div>
                        </center>
                        </td>
                        </tr>
                    <?php
                                    }
                    ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>
                                <center>Nro</center>
                            </th>
                            <th>
                                <center>Nombre del proveedor</center>
                            </th>
                            <th>
                                <center>Celular</center>
                            </th>
                            <th>
                                <center>Telefono</center>
                            </th>
                            <th>
                                <center>Empresa</center>
                            </th>
                            <th>
                                <center>Email</center>
                            </th>
                            <th>
                                <center>Direccion</center>
                            </th>
                            <th>
                                <center>Accion</center>
                            </th>
                        </tr>
                    </tfoot>
                    </table>
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
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Proveedores",
                "infoEmpty": "Mostrando 0 a 0 de 0 Usuarios",
                "infoFiltered": "(Filtrado de _MAX_ total Proveedores)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Proveedores",
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


<!-- modal para registrar proveedores -->
<div class="modal fade" id="modal-default">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Creacion de nuevo proveedor</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Nombre del proveedor<b>*</b> </label>
                            <input type="text" id="nombre_proveedor" class="form-control">
                            <small style="color:red;display:none" id="lbl_nombre">*Este campo es requerido</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Celular<b>*</b> </label>
                            <input type="text" id="celular" class="form-control">
                            <small style="color:red;display:none" id="lbl_celular">*Este campo es requerido</small>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Telefono </label>
                            <input type="text" id="telefono" class="form-control">
                            <small style="color:red;display:none" id="lbl_telefono">*Este campo es requerido</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Empresa<b>*</b> </label>
                            <input type="text" id="empresa" class="form-control">
                            <small style="color:red;display:none" id="lbl_empresa">*Este campo es requerido</small>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Email </label>
                            <input type="email" id="email" class="form-control">
                            <small style="color:red;display:none" id="lbl_email">*Este campo es requerido</small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Direccion<b>*</b> </label>
                            <textarea name="" id="direccion" class="form-control"></textarea>
                            <small style="color:red;display:none" id="lbl_direccion">*Este campo es requerido</small>
                        </div>
                    </div>
                </div>


            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" id="btn-create">Guardar</button>

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal para registrar categorias-->






<script>
    $('#btn-create').click(function() {
        var nombre_proveedor = $('#nombre_proveedor').val();
        var celular = $('#celular').val();
        var telefono = $('#telefono').val();
        var empresa = $('#empresa').val();
        var email = $('#email').val();
        var direccion = $('#direccion').val();

        if (nombre_proveedor == "") {
            $('#nombre_proveedor').focus();
            $('#lbl_nombre').css('display', 'block');
        } else if (celular == "") {
            $('#celular').focus();
            $('#lbl_celular').css('display', 'block');
        } else if (empresa == "") {
            $('#empresa').focus();
            $('#lbl_empresa').css('display', 'block');
        } else if (direccion == "") {
            $('#direccion').focus();
            $('#lbl_direccion').css('display', 'block');
        } else {
            var url = "../app/controllers/proveedores/create.php";

            $.get(url, {
                nombre_proveedor: nombre_proveedor,
                celular: celular,
                telefono: telefono,
                empresa: empresa,
                email: email,
                direccion: direccion,

            }, function(datos) {
                $('#respuesta').html(datos);

            });
        }

    })
</script>

<div id="respuesta"></div>