<?php
include("conexion.php");
$nombre=$_POST['nombreDes'];
$descripcion=($_POST['descripcionDes']) ? $_POST['descripcionDes'] : 'NULL';
$cantidad=$_POST['cantidadDes'];
$nombreArchivo = $_FILES['imgCatD']['name'];
$precio=($_POST['precioDes']) ? $_POST['precioDes'] : 0;
$categoria=($_POST['cat_padre']) ? $_POST['cat_padre'] : 0;
$id = $_POST['idNew'];

$sql="UPDATE productos set Nombre='$nombre',
Descripcion='$descripcion',
Cantidad='$cantidad',
Precio='$precio',
idCa = '$categoria',
Imagen = '$nombreArchivo'
where id='$id'";
echo $result=mysqli_query($enlace,$sql);

mysqli_close($enlace);
?>