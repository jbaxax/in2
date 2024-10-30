<?php

$sql_compras = "SELECT *, 
                pro.codigo as codigo, pro.nombre as nombre_producto, pro.descripcion as descripcion, pro.stock as stock,
                pro.stock_minimo as stock_minimo, pro.stock_maximo as stock_maximo, pro.precio_compra as precio_compra,
                pro.precio_venta as precio_venta, pro.fecha_ingreso as fecha_ingresa, pro.imagen as imagen
                FROM tb_compras as co INNER JOIN tb_almacen as pro 
                ON co.id_producto = pro.id_producto";

$query_compras = $pdo->prepare($sql_compras);
$query_compras->execute();
$compras_datos = $query_compras->fetchAll(fetch_style: PDO::FETCH_ASSOC);
