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


?>


