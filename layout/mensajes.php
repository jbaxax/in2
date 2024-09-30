<?php
// Verificar si hay un mensaje en la sesión
if(isset($_SESSION['mensaje']) && isset($_SESSION['icono'])){
    $respuesta = $_SESSION["mensaje"];
    $icono = $_SESSION['icono'];
    ?>
    <script>
       // Mostrar mensaje de error con SweetAlert2
       Swal.fire({
            position: "top-end",
            icon: "<?php echo $icono ?>",
            title: "<?php echo $respuesta ?>",
            showConfirmButton: false,
            timer: 2500,
          });
    </script>
  <?php
    // Eliminar el mensaje de la sesión después de mostrarlo
    unset($_SESSION['mensaje']);
    unset($_SESSION['icono']);
  }
?>