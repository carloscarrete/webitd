<?php
include("conexion.php");
$categoria=$_POST['cat_name'];
$descripcion=($_POST['descripcion']) ? $_POST['descripcion'] : 'NULL';
$imagen="imgs/categorias/".$_POST['imgCat'];
$catPadre=($_POST['cat_padre']) ? $_POST['cat_padre'] : 0;



$sql = "INSERT INTO categorias (id, nombre, descripcion, imagen, cat_padre) VALUES (NULL,'$categoria', '$descripcion', '$imagen', '$catPadre');";
if(mysqli_query($enlace,$sql)){
    echo "Categoria agregada correctamente";
}else{
    echo "Algo salio mal";
}
mysqli_close($enlace);
?>