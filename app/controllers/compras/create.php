<?php

include('../../config.php');

$id_producto = $_GET['id_producto'];
$fecha_compra = $_GET['fecha_compra'];
$comprobante = $_GET['comprobante'];
$precio_compra_controlador = $_GET['precio_compra_controlador'];
$cantidad_compra = $_GET['cantidad_compra'];


$nombreDelArchivo = date("Y-m-d-h-i-s");
$filename = $nombreDelArchivo."__".$_FILES["image"]["name"];
$location = "../../../almacen/img_productos/".$filename;

move_uploaded_file($_FILES['image']['tmp_name'],$location);






$sentencia = $pdo->prepare("INSERT INTO tb_almacen 
       (codigo, nombre, descripcion, stock, stock_minimo, stock_maximo, 
       precio_compra, precio_venta, fecha_ingreso, imagen, id_usuario, 
       id_categoria, fyh_creacion) 
VALUES 
       (:codigo, :nombre, :descripcion, :stock, :stock_minimo, :stock_maximo,
       :precio_compra, :precio_venta, :fecha_ingreso, :imagen, :id_usuario,
       :id_categoria, :fyh_creacion)");

$sentencia->bindParam(':codigo', $codigo);
$sentencia->bindParam(':nombre', $nombre);
$sentencia->bindParam(':descripcion', $descripcion);
$sentencia->bindParam(':stock', $stock);
$sentencia->bindParam(':stock_minimo', $stock_minimo);
$sentencia->bindParam(':stock_maximo', $stock_maximo);
$sentencia->bindParam(':precio_compra', $precio_compra);
$sentencia->bindParam(':precio_venta', $precio_venta);
$sentencia->bindParam(':fecha_ingreso', $fecha_ingreso);
$sentencia->bindParam(':imagen', $filename);
$sentencia->bindParam(':id_usuario', $id_usuario);
$sentencia->bindParam(':id_categoria', $id_categoria);
$sentencia->bindParam(':fyh_creacion', $fechaHora);


if ($sentencia->execute()) {
    session_start();
    $_SESSION['mensaje'] = "Nuevo producto registrado";
    $_SESSION['icono'] = "success";
    header('Location:' . $URL . '/almacen/');
}else{
    session_start();
    $_SESSION['mensaje'] = "Error no se registro el nuevo rol";
    $_SESSION['icono'] = "error";
    header('Location:' . $URL . '/almacen/create.php');
}




