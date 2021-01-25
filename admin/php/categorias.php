<?php
include('conexion.php');
$query = mysqli_query($enlace,"SELECT * FROM `categorias`");

echo '<select name="cat_padre">
            <option value="0">Ninguna</option>';
            
while($row=mysqli_fetch_array($query)){
    echo '<option value='.$row['id'].'>'.$row['nombre'].'</option>';
}

echo '</select>';

mysqli_close($enlace);


?>