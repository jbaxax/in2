<?php
include('../../config.php');

$id_proveedor = $_GET['id_proveedor'];
$nombre_proveedor = $_GET['nombre_proveedor'];
$celular = $_GET['celular'];
$telefono = $_GET['telefono'];
$empresa = $_GET['empresa'];
$email = $_GET['email'];
$direccion = $_GET['direccion'];

$sentencia = $pdo->prepare("UPDATE tb_proveedores SET nombre_proveedor=:nombre_proveedor,
                                                celular=:celular,
                                                telefono=:telefono,
                                                empresa=:empresa,
                                                email=:email,
                                                direccion=:direccion,
                                                fyh_actualizacion=:fyh_actualizacion WHERE id_proveedor=:id_proveedor");

$sentencia->bindParam('nombre_proveedor', $nombre_proveedor);
$sentencia->bindParam('celular', $celular);
$sentencia->bindParam('telefono', $telefono);
$sentencia->bindParam('empresa', $empresa);
$sentencia->bindParam('email', $email);
$sentencia->bindParam('direccion', $direccion); 
$sentencia->bindParam('fyh_actualizacion', $fechaHora);
$sentencia->bindParam('id_proveedor', $id_proveedor);


if ($sentencia->execute()) {
    session_start();
    $_SESSION['mensaje'] = "Proveedor registrado";
    $_SESSION['icono'] = "success";
    //header('Location:' . $URL . '/categoria/');

    ?>
    <script>
        location.href = "<?php echo $URL; ?>/proveedores"
    </script>
    <?php

}else{
    session_start();
    $_SESSION['mensaje'] = "Error no se registro la categoria";
    $_SESSION['icono'] = "error";
    ?>
    <script>
        location.href = "<?php echo $URL; ?>/proveedores"
    </script>
    <?php
}


?>