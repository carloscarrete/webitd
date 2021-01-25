<!DOCTYPE html>
<html lang="es-MX">

<head>
    <title>
        Carrito de Compras
    </title>
    <meta charset="utf-8">
    <meta keywords="">
    <meta description="">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="estilos/estilos.css">
    <link rel="stylesheet" type="text/css" href="estilos/bootstrap.min.css">
    <link rel="stylesheet" href="estilos/font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <script src="./js/slider.js"></script>  
</head>

<body>
    <header>

        <h1 id="encabezado"><img src="img/logo2.png" id="logo">Gamer-Tec
            <i class="fa fa-gamepad" aria-hidden="true"></i>
        </h1>
        <nav id="mainNav" class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01"
                aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                        <a class="nav-link" href="./index.html">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Productos</a>
                            <div class="dropdown-menu">
                            <a class="dropdown-item" href="./computadoras.php">Computadoras</a>
                            <a class="dropdown-item" href="./perifericos.php">Periféricos</a>
                            <a class="dropdown-item" href="./componentes.php">Componentes</a>
                            <a class="dropdown-item" href="./accesorios.php">Accesorios</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="./productos.php">Todo</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./componentes.php">Componentes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./software.php">Software</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Buscar...">
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">
                        <img src="img/search.png"></button>
                        <img src="img/perfil.png"></button>
                        <img src="img/carrito.png"></button>

                </form>
            </div>
        </nav>

       
    </header>
    <!--FIN DE LA NAVEGACIÓN-->
    <!--EL BREADCUM-->
    <nav aria-label="breadcrumb">
    </nav>
    <main>
    <div class="container mt-3">
        <div class="row">
                            <?php
                    include("./admin/php/conexion.php"); 
                    $consulta="select * from productos WHERE idCa=71";
                    $resultado = mysqli_query($enlace,$consulta);
                    while($row=mysqli_fetch_row($resultado)){
                        ?>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card-header p-0 border-0">
                        <img class="img-fluid rounded-top" src="./admin/imgs/productos/<?php echo $row[6]?>" alt="Card image cap">
                        <div class="card-body bg-dark rounded-bottom">
                        <center>
                        <h5 class="card-title"><?php echo $row[1]?></h5>
                            <p class="card-text"><?php echo $row[2]?></p>
                            <p class="card-text">Cantidad: <?php echo $row[3]?></p>
                            <a href="#" class="btn btn-primary">$ <?php echo $row[4]?></a>
                        </center>

                        </div>
                        </div>
                        </div>
                        <?php

                    }

                ?>
        </div>
    </div>
    </main>
    <footer>
        <div>CONTACTO <br>
        Puede ponerse en contacto a traves de nuestro número de teléfono mediante WhatsApp el cual es 6181572410. Estamos disponisbles 24/7
       para poder atender todas tus preguntas.</div>
        <div>NAVEGACIÓN <br> Casa Redonda 606, 16 de Septiembre, 34030 Durango, Dgo.</div>
        <div>INFORMACIÓN <br> Somos la mejor empresa en Tecnologia en Durango, podemos realizar cualquier otización y armar un equipo a tus medidas</div>
    </footer>
</body>

</html>