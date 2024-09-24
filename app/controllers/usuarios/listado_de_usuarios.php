<?php

$sql_usuarios = "SELECT * FROM tb_usuarios";
$query_usuarios = $pdo->prepare($sql_usuarios);
$query_usuarios->execute();
$usuarios_datos = $query_usuarios->fetchAll(fetch_style: PDO::FETCH_ASSOC);

 

?>