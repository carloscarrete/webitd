<?php
include("conexion.php");
$categoria=$_POST['nombreDes'];
$descripcion=($_POST['descripcion']) ? $_POST['descripcion'] : 'NULL';
$nombreArchivo = $_FILES['imgCatD']['name'];
$catPadre=($_POST['cat_padre']) ? $_POST['cat_padre'] : 0;
$id = $_POST['idNew'];

$sql="UPDATE categorias set nombre='$categoria',
descripcion='$descripcion',
imagen='$nombreArchivo',
cat_padre='$catPadre'
where id='$id'";
echo $result=mysqli_query($enlace,$sql);

mysqli_close($enlace);
?>