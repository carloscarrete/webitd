<?php
include('conexion.php');

$query = mysqli_query($enlace,"SELECT * FROM `categorias`");

echo '<table class="table" id="miTabla">
                <thead class="table-dark"> 
                    <tr>
                      <th scope="col" class="x">#</th>
                      <th scope="col">Nombre</th>
                      <th scope="col" class="x">Descripción</th>
                      <th scope="col" class="x">Imagen</th>
                      <th scope="col">Modificar</th>
                      <th scope="col">Eliminar</th>
                    </tr>
                  </thead>
                  <tbody>';
$contador = 0;
while($row=mysqli_fetch_array($query)){
    $contador++;
    echo '<tr class="">
    <th scope="row" class="x">'.$contador.'</th>
    <td>'.$row['nombre'].'</td>
    <td class="x">'.$row['descripcion'].'</td>
    <td class="x"><img style="width:auto; height:50px;" src="../imgs/categorias/'.$row['imagen'].'"></td>
    <td>
    <a href="#"><img src="../img/edit.png" data-toggle="modal" data-target="#modalEdicion" 
    onclick="document.getElementById(&quot;nombreDes&quot;).value=&quot;'.$row['nombre'].'&quot;;
    document.getElementById(&quot;descripcion&quot;).value=&quot;'.$row['descripcion'].'&quot;
    document.getElementById(&quot;idNew&quot;).value=&quot;'.$row['id'].'&quot;"></a>
    </td>
    <td>
    <a href="#"><img src="../img/delete.png" data-toggle="modal" data-target="#exampleModal" 
    onclick="document.getElementById(&quot;catBaja&quot;).innerHTML=&quot;'.$row['nombre'].'&quot;;
    document.getElementById(&quot;id&quot;).value=&quot;'.$row['id'].'&quot;"></a>
    </td>
  </tr>';
}

echo '</tbody>
    </table>';

mysqli_close($enlace);

//<a href="#"><img src="../img/edit.png" data-toggle="modal" data-target="#modalEdicion" onclick="modificarDes('.$row['nombre'].'||'.$row['descripcion'].'||'.$row['imagen'].'||'.$row['cat_padre'].')"></a>

?>