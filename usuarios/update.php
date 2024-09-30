<?php
// Incluir archivo de configuración
include('../app/config.php');

// Incluir archivo de manejo de sesión
include('../layout/sesion.php');

// Incluir la primera parte del layout (encabezado, menú, etc.)
include('../layout/parte1.php');

// Incluir el archivo de controladores
include('../app/controllers/usuarios/update_usuario.php');

?>

<div class="content-wrapper">
    <!-- Encabezado de contenido (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Actualizar datos del usuario</h1>
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
              <h3 class="card-title">Datos del usuario</h3>

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
                  <!-- Formulario para crear un nuevo usuario -->
                  <form action="../app/controllers/usuarios/update.php" method="post">
                    <input type="hidden" name="id_usuario" value="<?php echo $id_usuario_get; ?>">
                    <div class="form-group">
                      <label for="">Nombres</label>
                      <input type="text" name="nombres" class="form-control" value="<?php echo $nombres; ?>">
                    </div>
                    <div class="form-group">
                      <label for="">Email</label>
                      <input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
                    </div>
                    <div class="form-group">
                      <label for="">Contraseña</label>
                      <input type="text" name="password_user" class="form-control" >
                    </div>
                    <div class="form-group">
                      <label for="">Repita la contraseña</label>
                      <input type="text" name="password_repeat" class="form-control" >
                    </div>

                    <hr>
                    <div class="form-group">
                      <a href="index.php" class="btn btn-secondary">Cancelar</a>
                      <button type="submit" class="btn btn-primary">Guardar</button>
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

// Incluir el archivo de mensajes
include('../layout/mensajes.php');

// Incluir la segunda parte del layout (pie de página, scripts, etc.)
include('../layout/parte2.php');
?>