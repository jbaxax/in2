<?php
// Iniciar la sesión
session_start();

// Verificar si existe una sesión activa
if(isset($_SESSION['sesion_email'])){
    // Obtener el email de la sesión actual
    $email_sesion = $_SESSION['sesion_email'];
    
    // Consulta SQL para obtener los datos del usuario
    $sql = "SELECT * FROM tb_usuarios WHERE email='$email_sesion'";
    $query = $pdo->prepare($sql);
    $query->execute();
    $usuarios = $query->fetchAll(fetch_style: PDO::FETCH_ASSOC);

    // Extraer el nombre del usuario de los resultados
    foreach($usuarios as $usuario){
        $nombres_sesion = $usuario['nombres'];
    }
} else {
    // Si no hay sesión activa, redirigir al login
    echo "No existe";
    header('location:'.$URL.'/login');
}
?>