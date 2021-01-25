<?php
include("conexion.php");
$producto=$_POST['producto'];
$descripcion=($_POST['descripcion']) ? $_POST['descripcion'] : 'NULL';
$cantidad=$_POST['cantidad'];
$precio=$_POST['precio'];
$nombreArchivo = $_FILES['imgCat']['name'];
$catPadre=($_POST['cat_padre']) ? $_POST['cat_padre'] : 0;



$sql = "INSERT INTO productos (id, Nombre, Descripcion, Cantidad, Precio, idCa, Imagen) VALUES (NULL,'$producto', '$descripcion', '$cantidad', '$precio','$catPadre','$nombreArchivo');";
if(mysqli_query($enlace,$sql)){
    echo "Categoria agregada correctamente";
}else{
    echo "Algo salio mal";
}
mysqli_close($enlace);
?>