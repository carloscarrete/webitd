<?php
$archivo = $_FILES['file']['name'];
if(isset($archivo) && $archivo!=""){
    $tipo = $_FILES['file']['type'];
    $tamano = $_FILES['file']['size'];
    $temp = $_FILES['file']['tmp_name'];

    if(!((strpos($tipo,"gif") || strpos($tipo,"jpeg") || strpos($tipo,"jpg") || strpos($tipo,"png")) && ($tamano<500000))){
        echo '<div><b>Error, por favor verifique el tamaño del archivo y que haya seleccionado un formato de  imagen valido, ya sea, jpeg, jpg, gif o png.</b></div>';

    }else{
        if(move_uploaded_file($temp,'../imgs/productos/'.$archivo)){
            chmod('imagenes/'.$archivo,0777);
            echo '<div><b>Se ha subido correctamente la imagen</b></div>';
            echo '<p><img src="imagenes/'.$archivo.'"></p>';
        }else{
            echo '<div><b>Ocurrio un error al intentar guardar el archivo.</b></div>';

        }
    }
}


?>