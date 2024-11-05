<?php
// Incluir archivo de configuración
include('../app/config.php');

// Incluir archivo de manejo de sesión
include('../layout/sesion.php');

// Incluir la primera parte del layout (encabezado, menú, etc.)
include('../layout/parte1.php');


include('../app/controllers/almacen/listado_de_productos.php');
include('../app/controllers/proveedores/listado_de_proveedores.php');
include('../app/controllers/compras/listado_de_compras.php');
?>

<div class="content-wrapper">
    <!-- Encabezado de contenido (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Registro de una nueva compra</h1>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Contenido principal -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">


                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Completa el formulario</h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                    <!-- /.card-tools -->
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div style="display:flex">
                                        <h5>Datos del producto</h5>
                                        <div style="width: 20px">

                                        </div>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-buscar_producto">
                                            <i class="fa fa-search"></i>
                                            Buscar producto
                                        </button>
                                        <div class="modal fade" id="modal-buscar_producto">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header" style="background-color: #28a745; color: white">
                                                        <h4 class="modal-title">Busqueda producto</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">


                                                        <div class="table table-responsive">
                                                            <table id="example1" class="table table-bordered table-striped  table-sm">
                                                                <thead>
                                                                    <tr>
                                                                        <th>
                                                                            <center>Nro</center>
                                                                        </th>
                                                                        <th>
                                                                            <center>Seleccionar</center>
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
                                                                            <td>
                                                                                <button class="btn btn-info" id="btn_seleccionar<?php echo $id_producto ?>">
                                                                                    Seleccionar
                                                                                </button>
                                                                                <script>
                                                                                    $('#btn_seleccionar<?php echo $id_producto ?>').click(function() {
                                                                                        var id_producto = "<?php echo $productos_dato['id_producto']; ?>";
                                                                                        $('#id_producto').val(id_producto);

                                                                                        var codigo = "<?php echo $productos_dato['codigo']; ?>";
                                                                                        $('#codigo').val(codigo);

                                                                                        var categoria = "<?php echo $productos_dato['categoria']; ?>";
                                                                                        $('#categoria').val(categoria)
                                                                                        var nombre = "<?php echo $productos_dato['nombre']; ?>";

                                                                                        $('#nombre_producto').val(nombre)
                                                                                        var descripcion = "<?php echo $productos_dato['descripcion']; ?>";


                                                                                        $('#descripcion_producto').val(descripcion)

                                                                                        var stock = "<?php echo $productos_dato['stock']; ?>";
                                                                                        $('#stock').val(stock)
                                                                                        $('#stock_actual').val(stock)

                                                                                        var stock_minimo = "<?php echo $productos_dato['stock_minimo']; ?>";

                                                                                        $('#stock_minimo').val(stock_minimo)

                                                                                        var stock_maximo = "<?php echo $productos_dato['stock_maximo']; ?>";
                                                                                        $('#stock_maximo').val(stock_maximo)

                                                                                        var precio_compra = "<?php echo $productos_dato['precio_compra']; ?>";
                                                                                        $('#precio_compra').val(precio_compra)

                                                                                        var precio_venta = "<?php echo $productos_dato['precio_venta']; ?>";
                                                                                        $('#precio_venta').val(precio_venta)

                                                                                        var fecha_ingreso = "<?php echo $productos_dato['fecha_ingreso']; ?>";
                                                                                        $('#fecha_ingreso').val(fecha_ingreso)

                                                                                        var email = "<?php echo $productos_dato['email']; ?>";

                                                                                        $('#email').val(email);

                                                                                        var ruta_img = "<?php echo $URL . "/almacen/img_productos/" . $productos_dato['imagen']; ?>"
                                                                                        $('#img_producto').attr({
                                                                                            src: ruta_img
                                                                                        });

                                                                                        $('#modal-buscar_producto').modal('toggle');
                                                                                    });
                                                                                </script>
                                                                            </td>
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
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                        </div>
                                    </div>


                                    <hr>
                                    <div class="row" style="font-size:12px">
                                        <div class="col-md-9">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <input type="text" id="id_producto" hidden>
                                                        <label for="">Codigo:</label>

                                                        <input type="text" class="form-control" id="codigo" disabled>

                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="">Categoria:</label>
                                                        <div style="display: flex">
                                                            <input type="text" class="form-control" id="categoria" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="">Nombre del producto:</label>
                                                        <input type="text" name="nombre" class="form-control" id="nombre_producto" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label for="">Usuario</label>
                                                    <input type="text" class="form-control" id="email" disabled>

                                                </div>
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label for="">Descripcion:</label>
                                                        <textarea name="descripcion" rows="2" class="form-control" id="descripcion_producto" disabled> </textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="">Stock:</label>
                                                        <input type="number" name="stock" id="stock" class="form-control" style="background-color: yellow" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="">Stock minimo:</label>
                                                        <input type="number" name="stock_minimo" id="stock_minimo" class="form-control" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="">Stock maximo:</label>
                                                        <input type="number" name="stock_maximo" id="stock_maximo" class="form-control" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="">Precio compra:</label>
                                                        <input type="number" name="precio_compra" id="precio_compra" class="form-control" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="">Precio venta:</label>
                                                        <input type="number" name="precio_venta" id="precio_venta" class="form-control" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="">Fecha de ingreso:</label>
                                                        <input type="date" name="fecha_ingreso" id="fecha_ingreso" class="form-control" disabled>
                                                    </div>
                                                </div>


                                            </div>

                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Imagen del producto</label>
                                                <center>
                                                    <img src="<?php echo $URL . "/almacen/img_productos/" . $imagen; ?>" id="img_producto" width="100%" alt="">
                                                </center>

                                            </div>
                                        </div>
                                    </div>
                                    <hr>

                                    <div style="display:flex">
                                        <h5>Datos del proveedor</h5>
                                        <div style="width: 20px">

                                        </div>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-buscar_proveedor">
                                            <i class="fa fa-search"></i>
                                            Buscar proveedor
                                        </button>
                                        <div class="modal fade" id="modal-buscar_proveedor">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header" style="background-color: #28a745; color: white">
                                                        <h4 class="modal-title">Busqueda producto</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">


                                                        <div class="table table-responsive">
                                                            <table id="example2" class="table table-bordered table-striped">
                                                                <thead>
                                                                    <tr>
                                                                        <th>
                                                                            <center>Nro</center>
                                                                        </th>
                                                                        <th>
                                                                            <center>Seleccionar</center>
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
                                                                                <button class="btn btn-info" id="btn_seleccionar_proveedor<?php echo $id_proveedor ?>">
                                                                                    Seleccionar
                                                                                </button>
                                                                                <script>
                                                                                    $('#btn_seleccionar_proveedor<?php echo $id_proveedor ?>').click(function() {

                                                                                        var id_proveedor = "<?php echo $id_proveedor; ?>";
                                                                                        $('#id_proveedor').val(id_proveedor);

                                                                                        var nombre_proveedor = "<?php echo $nombre_proveedor; ?>";
                                                                                        $('#nombre_proveedor').val(nombre_proveedor);

                                                                                        var celular = "<?php echo $proveedores_dato['celular']; ?>";
                                                                                        $('#celular').val(celular);

                                                                                        var telefono = "<?php echo $proveedores_dato['telefono']; ?>";
                                                                                        $('#telefono').val(telefono);

                                                                                        var empresa = "<?php echo $proveedores_dato['empresa']; ?>";
                                                                                        $('#empresa').val(empresa);

                                                                                        var email_proveedor = "<?php echo $proveedores_dato['email']; ?>";
                                                                                        /* aqui */
                                                                                        $('#email_proveedor').val(email_proveedor);

                                                                                        var direccion_proveedor = "<?php echo $proveedores_dato['direccion']; ?>";
                                                                                        $('#direccion').val(direccion_proveedor);







                                                                                        $('#modal-buscar_proveedor').modal('toggle');


                                                                                        /* $('#modal-buscar_producto').modal('toggle'); */
                                                                                    });
                                                                                </script>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $nombre_proveedor; ?>
                                                                            </td>
                                                                            <td>
                                                                                <a href="https://wa.me/51<?php echo $proveedores_dato['celular']; ?>" target="_blank" class="btn btn-success">
                                                                                    <i class="fa fa-phone"></i>
                                                                                    <?php echo $proveedores_dato['celular']; ?>
                                                                                </a>

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
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                        </div>
                                    </div>

                                    <hr>
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="text" id="id_proveedor" hidden>
                                                    <label for="">Nombre del proveedor </label>
                                                    <input type="text" id="nombre_proveedor" class="form-control" disabled>

                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Celular</label>
                                                    <input type="text" id="celular" class="form-control" disabled>

                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Telefono </label>
                                                    <input type="text" id="telefono" class="form-control" disabled>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Empresa </label>
                                                    <input type="text" id="empresa" class="form-control" disabled>

                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Email </label>
                                                    <input type="email" id="email_proveedor" class="form-control" disabled>

                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="">Direccion </label>
                                                    <textarea name="" id="direccion" class="form-control" disabled></textarea>

                                                </div>
                                            </div>
                                        </div>

                                    </div>








                                    <!-- /.card-body -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-outline card-primary">
                                <div class="card-header">
                                    <h3 class="card-title"> Detalle de la compra</h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                    <!-- /.card-tools -->
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <?php
                                                $contador_de_compras = 1;
                                                foreach ($compras_datos as $compras_dato) {
                                                    $contador_de_compras = $contador_de_compras + 1;
                                                }
                                                ?>
                                                <label for="">Numero de la compra</label>
                                                <input type="text" value="<?php echo $contador_de_compras; ?>" class="form-control" disabled>
                                                <input type="text" value="<?php echo $contador_de_compras; ?>" id="nro_compra" hidden>

                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Fecha de la compra</label>
                                                <input type="date" class="form-control" id="fecha_compra">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Comprobante de la compra</label>
                                                <input type="text" class="form-control" id="comprobante">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Precio de la compra</label>
                                                <input type="text" class="form-control" id="precio_compra_controlador">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Stock actual</label>
                                                <input type="text" style="background-color: yellow;" id="stock_actual" class="form-control" disabled>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Stock total</label>
                                                <input type="text" " id=" stock_total" class="form-control" disabled>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Cantidad de la compra</label>
                                                <input type="number" id="cantidad_compra" class="form-control">
                                            </div>
                                            <script>
                                                $('#cantidad_compra').keyup(function() {
                                                    var stock_actual = $('#stock_actual').val();
                                                    var stock_compra = $('#cantidad_compra').val();

                                                    var total = parseInt(stock_actual) + parseInt(stock_compra);

                                                    $('#stock_total').val(total);
                                                })
                                            </script>
                                        </div>


                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Usuario</label>
                                                <input type="text" class="form-control" value="<?php echo $email_sesion ?>" disabled>
                                            </div>
                                        </div>




                                    </div>

                                    <hr>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button class="btn btn-primary btn-block" id="btn_guardar_compra">Guardar compra</button>
                                        </div>
                                    </div>
                                    <script>
                                        $('#btn_guardar_compra').click(function() {
                                            var id_producto = $('#id_producto').val;
                                            var nro_compra = $('#nro_compra').val();
                                            var fecha_compra = $('#fecha_compra').val();
                                            var comprobante = $('#comprobante').val();
                                            var precio_compra = $('#precio_compra_controlador').val();
                                            var cantidad_compra = $('#cantidad_compra').val();
                                            var id_usuario = '<?php echo $id_usuario_sesion ?>'

                                            if (id_producto == "") {
                                                $('#id_producto').focus();
                                                alert("CAMPOS VACIOS");
                                            } else if (fecha_compra == "") {
                                                $('#fecha_compra').focus();
                                                alert("CAMPOS VACIOS");
                                            } else if (comprobante == "") {
                                                $('#comprobante').focus();
                                                alert("CAMPOS VACIOS");
                                            } else if (precio_compra == "") {
                                                $('#precio_compra_controlador').focus();
                                                alert("CAMPOS VACIOS");
                                            } else if (cantidad_compra == "") {
                                                $('#cantidad_compra').focus();
                                                alert("CAMPOS VACIOS");
                                            } else {
                                                var url = "../app/controllers/compras/create.php";

                                                $.get(url, {
                                                    id_producto: id_producto,
                                                    fecha_compra: fecha_compra,
                                                    comprobante: comprobante,
                                                    precio_compra_controlador: precio_compra_controlador,
                                                    cantidad_compra: cantidad_compra,
                                                    

                                                }, function(datos) {
                                                    $('#respuesta').html(datos);

                                                });
                                            }
                                        });
                                    </script>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>


                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<?php
// Incluir la segunda parte del layout (pie de página, scripts, etc.)
include('../layout/mensajes.php');
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


        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script>


<script>
    $(function() {
        // Inicializar DataTable con opciones personalizadas
        $("#example2").DataTable({
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


        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script>