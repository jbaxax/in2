<?php

include('../../config.php');


$id_proveedor = $_GET['id_proveedor'];


$sentencia = $pdo->prepare("DELETE FROM tb_proveedores WHERE id_proveedor=:id_proveedor");

$sentencia->bindParam('id_proveedor', $id_proveedor);

if ($sentencia->execute()) {
    session_start();
    $_SESSION['mensaje'] = "Proveedor eliminado";
    $_SESSION['icono'] = "success";
    //header('Location:' . $URL . '/categoria/');

    ?>
    <script>
        location.href = "<?php echo $URL; ?>/proveedores"
    </script>
    <?php

}else{
    session_start();
    $_SESSION['mensaje'] = "Error no se elimino el proveedor";
    $_SESSION['icono'] = "error";
    //header('Location:' . $URL . '/categoria/');
    ?>
    <script>
        location.href = "<?php echo $URL; ?>/proveedores"
    </script>
    <?php
}


?>
