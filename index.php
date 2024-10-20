<?php
// Incluir archivo de configuración
include('app/config.php');

// Incluir archivo de manejo de sesión
include('layout/sesion.php');

// Incluir la primera parte del layout (encabezado, menú, etc.)
include('layout/parte1.php');


include('app/controllers/usuarios/listado_de_usuarios.php');

include('app/controllers/roles/listado_de_roles.php');

?>
<div class="content-wrapper">
  <!-- Encabezado de contenido (encabezado de página) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0">Bienvenido al SISTEMA DE VENTAS - <?php echo $rol_sesion ?> </h1>
        </div><!-- /.col --> 

      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Contenido principal -->
  <div class="content">
    <div class="container-fluid">
      Contenido
      <br><br>
      <div class="row">
        
        
        <div class="col-lg-3 col-6">

          <div class="small-box bg-warning">
            <div class="inner">
            <?php
            $contador_de_usuarios = 0;
            foreach($usuarios_datos as $usuarios_dato){
              $contador_de_usuarios = $contador_de_usuarios + 1; 
            }
            ?>  
            <h3><?php echo $contador_de_usuarios ?></h3>
              <p>Usuarios Registrados</p>
            </div>
            <a href="<?php echo $URL; ?>/usuarios/create.php">
            <div class="icon">
              <i class="fas fa-user-plus"></i>
            </div>
            </a>
            <a href="<?php echo $URL; ?>/usuarios" class="small-box-footer">
              Mas detalle <i class="fas fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <div class="col-lg-3 col-6">

          <div class="small-box bg-info">
            <div class="inner">
            <?php
            $contador_de_roles = 0;
            foreach($roles_datos as $roles_dato){
              $contador_de_roles = $contador_de_roles + 1; 
            }
            ?>  
            <h3><?php echo $contador_de_roles ?></h3>
              <p>Roles Registrados</p>
            </div>
            <a href="<?php echo $URL; ?>/roles/create.php">
            <div class="icon">
              <i class="fas fa-user-plus"></i>
            </div>
            </a>
            <a href="<?php echo $URL; ?>/roles" class="small-box-footer">
              Mas detalle <i class="fas fa-arrow-circle-right"></i>
            </a>
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
include('layout/parte2.php');
?>