<?php

define('SERVIDOR','localhost');
define('USUARIO','root');
define('PASSWORD','');
define('BD','sistemadeventas');

$servidor = "mysql:dbname=".BD.";host=".SERVIDOR;

try{
    $pdo = new PDO($servidor,USUARIO,PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    //echo "Conexion exitosa";

}catch (PDOException $e){
    print_r($e);

    echo "Error al conectar a la base de datos";
}


//$URL = "http://localhost:3000/in2";
$URL = "http://localhost:3000";

date_default_timezone_set("America/Lima");
$fechaHora = date("Y-m-d H:i:s");


// Verificar si hay un mensaje en la sesión
if(isset($_SESSION['mensaje'])){
    $respuesta = $_SESSION["mensaje"];?>
    <script>
       // Mostrar mensaje de error con SweetAlert2
       Swal.fire({
            position: "top-end",
            icon: "error",
            title: "<?php echo $respuesta ?>",
            showConfirmButton: false,
            timer: 2500,
          });
    </script>
  <?php
    // Eliminar el mensaje de la sesión después de mostrarlo
    unset($_SESSION['mensaje']);
  }
?>


