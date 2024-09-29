<?php
// Incluir archivo de configuración
include('app/config.php');

// Incluir archivo de manejo de sesión
include('layout/sesion.php');

// Incluir la primera parte del layout (encabezado, menú, etc.)
include('layout/parte1.php');

?>
<div class="content-wrapper">
    <!-- Encabezado de contenido (encabezado de página) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Bienvenido al SISTEMA DE VENTAS</h1>
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    <!-- Contenido principal -->
    <div class="content">
      <div class="container-fluid">
        <div class="as">aaa</div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
<?php
// Incluir la segunda parte del layout (pie de página, scripts, etc.)
include('layout/parte2.php');
?>


