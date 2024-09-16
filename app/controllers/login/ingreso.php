<?php

include('../../config.php');

$email = $_POST['email'];
$password_user = $_POST['password_user'];

$contador = 0;
$sql = "SELECT * FROM tb_usuarios WHERE email = '$email' and password_user='$password_user'";
$query = $pdo->prepare($sql);
$query->execute();
$usuarios = $query->fetchAll(fetch_style: PDO::FETCH_ASSOC);

foreach($usuarios as $usuario){
    $contador = $contado + 1; 
    $email_tabla = $usuario['email'];
    echo $nombres_tabla = $usuario['nombres'];
}

if($contador == 0){
    echo "Datos incorrectos";
}
?>