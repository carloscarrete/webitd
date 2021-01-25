<?php
include('conexion.php');

$id_cat=$_POST['id'];

$query = mysqli_query($enlace, "DELETE FROM  `productos` WHERE `id`=".$id_cat);

if($query){
    echo "Se elimino correctamente";
}else{
    echo "Algo salio mal";
}

mysqli_close($enlace);


?>