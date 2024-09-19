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
    $contador = $contador + 1; 
    $email_tabla = $usuario['email'];
    $nombres = $usuario['nombres'];
}

if($contador == 0){
    //echo "Datos incorrectos";
    session_start();
    $_SESSION['mensaje'] = "Error datos incorrectos";
    header('Location:'.$URL.'/login');
}else{
    echo "Datos correctos";
    session_start();
    $_SESSION['sesion_email'] = $email;
    header('Location:'.$URL.'/index.php' );
}

?>