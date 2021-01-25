<?php
include("./php/seguridad.php");
?>
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
  <link rel="stylesheet" type="text/css" href="estilos/estilosAdmin.css">
  <link rel="stylesheet" type="text/css" href="../estilos/bootstrap.min.css">
  <link rel="stylesheet" href="../estilos/font-awesome-4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
</head>

<body>
<?php
  error_reporting(0);

      include('header.php');
  ?>

  <main>
    <!-- Formulario "agregar categoría"-->
    <img id="btoAgregarCat" src="../img/agregar.png" onclick="document.getElementById('id01').style.display='block'">

    <!-- The Modal -->
    <div id="id01" class="modal">
      <span onclick="document.getElementById('id01').style.display='none'" class="close"
        title="Close Modal">&times;</span>

      <!-- Modal Content -->
      <form class="modal-content animate" method="POST" enctype="multipart/form-data" id="formulario">
        <div class="form-group">
          <label for="nombreCat">Nombre del producto:</label>
          <input type="text" name="producto" id="producto" class="form-control">
        </div>
        <div class="form-group">
          <label for="descCat">Descripción:</label>
          <textarea name="descripcion" placeholder="Escribe la descripción del producto..." id="descripcion"
            class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="descCat">Cantidad del producto:</label>
            <textarea name="cantidad" placeholder="Escribe la cantidad del producto..." id="cantidad"
              class="form-control"></textarea>
          </div>
          <div class="form-group">
            <label for="descCat">Precio del producto:</label>
            <textarea name="precio" placeholder="Escribe el precio del producto..." id="precio"
              class="form-control"></textarea>
          </div>

        <div class="form-group">
          <label for="cat_padre">Categoria del producto</label>
          <div id="optCats"></div>
        </div>

        <div class="form-group">
          <label for="imgCat">Imagen</label>
          <input type="file" class="form-control-file" id="imgCat" name="imgCat">
        </div>

        <div class="container" style="background-color:#f1f1f1">

          <button id="btnEnviar" type="submit">Enviar</button>
          <button type="button" onclick="document.getElementById('id01').style.display='none'"
            class="cancelbtn">Cancel</button>
        </div>
      </form>
    </div>
    <!-- Fin Formulario nueva categoría -->

    <h2>
      Productos
    </h2>
    <div class="alert alert-dismissible alert-info" id="msjbox" style="display: none; width: 100%;">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <span class="" id="mensaje">Mensaje</span>
    </div>
    <span id="TablaCats">

    </span>
    <!--

            <table class="table" id="miTabla">
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
                  <tbody>
                    <tr>
                      <th scope="row" class="x">1</th>
                      <td>Computadoras</td>
                      <td class="x">Computadoras ensambladas</td>
                      <td class="x"><img src=""></td>
                      <td><img src="../img/edit.png"></td>
                      <td><img src="../img/delete.png"></td>
                    </tr>
                    <tr>
                        <th scope="row" class="x">2</th>
                        <td>Periféricos</td>
                        <td class="x">Periféricos para la computadora</td>
                        <td class="x"><img src=""></td>
                        <td><img src="../img/edit.png"></td>
                        <td><img src="../img/delete.png"></td>
                      </tr>
                      <tr>
                        <th scope="row" class="x">3</th>
                        <td>Componentes</td>
                        <td class="x">Componentes para la computadora</td>
                        <td class="x"><img src=""></td>
                        <td><img src="../img/edit.png"></td>
                        <td><img src="../img/delete.png"></td>
                      </tr>
                      <tr>
                        <th scope="row" class="x">4</th>
                        <td>Accesorios</td>
                        <td class="x">Accesorios para la computadora</td>
                        <td class="x"><img src=""></td>
                        <td><img src="../img/edit.png"></td>
                        <td><img src="../img/delete.png"></td>
                      </tr>
                      <tr>
                        <th scope="row" class="x">5</th>
                        <td>Audio</td>
                        <td class="x">Dispositivos para audio</td>
                        <td class="x"><img src=""></td>
                        <td><img src="../img/edit.png"></td>
                        <td><img src="../img/delete.png"></td>
                      </tr>
                  </tbody>
            </table>
                              -->

    <div class="modal fade" id="exampleModal" tabindex="-10" aria-labelledby="exampleModalLabel" aria-hidden="false">
      <div class="modal-dialog" >
        <div class="modal-content" style="width: 600px;" id="contenido">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Eliminar Producto
               "<span id="catBaja"></span>"
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <form class="modal-content animate" enctype="multipart/form-data" id="formBajaCat">
          ¿Estas Seguro que deseas eliminar este Producto?
          <input type="hidden" name="id" id="id">
                    <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal" id="noEliminar">No</button>
            <button type="submit" class="btn btn-primary" id="btnEliminar" data-dismiss="modal">Si</button>
          </div>
          </form>
        </div>
      </div>
    </div>



      <!-- Modificar -->
      <form class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg role="document>
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
            </div>
            <div class="modal-body">
                <input type="text" hidden="" id="idpersona" name="">
                <label>Nombre de categoria</label>
                <input id="nombreDes" type="text" name="nombreDes" class="form-control input-sm">
                <label>Descripción</label>
                <input id="descripcionDes" type="text" name="descripcionDes"  class="form-control input-sm">
                <label>Cantidad</label>
                <input id="cantidadDes" type="text" name="cantidadDes"  class="form-control input-sm">
                <label>Precio</label>
                <input id="precioDes" type="text" name="precioDes"  class="form-control input-sm">
                <label>Categoría de</label>
                <div id="optCatsDos"></div>
                <label>Imagen</label>
                <input type="file" class="form-control input-sm" id="imgCatD" name="imgCatD">
                <input type="hidden" name="idNew" id="idNew">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" id="actualizadatos" data-dismiss="modal">Actualizar</button>
              
            </div>
          </div>
        </div>
      </form>

    <div>
      <ul class="pagination">
        <li class="page-item disabled">
          <a class="page-link" href="#">&laquo;</a>
        </li>
        <li class="page-item active">
          <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">4</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">5</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">&raquo;</a>
        </li>
      </ul>
    </div>
  </main>
  <!--FOOTER-->
  
  <iframe src="footer.html" id="ifFooter" scrolling="no"></iframe>
  <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>    
  <script src="../js/scriptsProducto.js"></script>
</body>

</html>