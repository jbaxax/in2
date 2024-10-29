<?php

$sql_compras = "SELECT * FROM tb_compras";

$query_compras = $pdo->prepare($sql_compras);
$query_compras->execute();
$compras_datos = $query_compras->fetchAll(fetch_style: PDO::FETCH_ASSOC);
