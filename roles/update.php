<?php
// Incluir archivo de configuración
include('../app/config.php');

// Incluir archivo de manejo de sesión
include('../layout/sesion.php');

// Incluir la primera parte del layout (encabezado, menú, etc.)
include('../layout/parte1.php');


include('../app/controllers/roles/update_roles.php');
?>

<div class="content-wrapper">
    <!-- Encabezado de contenido (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Actualizar rol</h1>
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    <!-- Contenido principal -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-5">
          <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title">Datos del rol</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <!-- Formulario para crear un nuevo rol -->
                  <form action="../app/controllers/roles/update.php" method="post">
                    <div class="form-group">
                      <input type="hidden" name="id_rol" value="<?php echo $id_rol_get ?>">
                      <label for="">Nombre del rol</label>
                      <input type="text" name="rol" class="form-control" value="<?php echo $rol; ?>" required>
                    </div>
                    <hr>
                    <div class="form-group">
                      <a href="index.php" class="btn btn-secondary">Cancelar</a>
                      <button type="submit" class="btn btn-success">Actualizar</button>
                    </div>


                  </form>
                </div>
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
// Incluir la segunda parte del layout (pie de página, scripts, etc.)
include('../layout/mensajes.php');
include('../layout/parte2.php');
?>