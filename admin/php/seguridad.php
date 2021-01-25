<?php
    session_start();
    if($_SESSION['autentificado']!='SI' || $_SESSION['grupo']!='Admin'){
        header("Location: ../index.html");
        echo "Datos erroneos";
        exit();
    }
    
?>