<?php
include("conexion.php");
$email = $_POST['email'];
$pss = $_POST['pss'];


$query = mysqli_query($enlace,"SELECT * FROM `usuarios` WHERE `email`='".$email."' and `contrasena`='".$pss."'");

if($query){
    while($row = mysqli_fetch_array($query)){
        session_start();
        $_SESSION['autentificado']='SI';
        $_SESSION['nombre']=$row['nombre'];
        $_SESSION['grupo']=$row['grupo'];
        echo "Hola ".$_SESSION['nombre']."(<a href='./admin/salir.php'>Salir</a>)";

        exit();
    }
}else{
    echo "Datos erroneos";
}
mysqli_close($enlace);

?>