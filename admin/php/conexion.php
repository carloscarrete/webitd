<?php
$user = "carrito";
$user_db = "carrito2020";
$server = "localhost";
$password = "XT6KEOBBjSQQ7lZS";
$enlace = mysqli_connect($server, $user, $password, $user_db);

if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

//echo "Éxito: Se realizó una conexión apropiada a MySQL! La base de datos mi_bd es genial." . PHP_EOL;
//echo "Información del host: " . mysqli_get_host_info($enlace) . PHP_EOL;

//mysqli_close($enlace);
?>
