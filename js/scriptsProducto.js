consulta("../admin/php/categorias.php","optCats");
consulta("../admin/php/categorias.php","optCatsDos");


consulta("../admin/php/consultaProductos.php","TablaCats");


function consulta(file, html){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById(html).innerHTML=this.responseText;
      }
    };
    xhttp.open("GET", file, true);
    xhttp.send();
  }

  document.getElementById('btnEnviar').addEventListener("click",insertarCat);
  
  function insertarCat(e){
    e.preventDefault();
    let formulario = document.querySelector('#formulario');
    let datos = new FormData(formulario);
    datos.append('ajax',2);
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById('msjbox').style.display= "inline-block";
        document.getElementById('mensaje').innerHTML="Se ha agregado el producto de manera correcta";
        document.getElementById('id01').style.display= "none";
        consulta("../admin/php/consultaProductos.php","TablaCats");
        console.log([...datos]);
        subirImagen();

      }
    };
    xhttp.open("POST", "../admin/php/altaProductos.php", true);
    xhttp.send(datos);
  }

  function subirImagen(){
    var img = document.getElementById('imgCat').files[0];
    //var img = $('imgCat')[0].files;
    var formData = new FormData();
    formData.append('file',img);
    $.ajax({
        type:"POST",
        url:"../admin/php/subirImagenProducto.php",
        data:formData,
        processData: false,
        contentType: false,
        success:function(response){
            console.log(response);

        },
        error : function(jqXHR,textStatus,error) {
            console.log(response);
        }
      });
}

document.getElementById('btnEliminar').addEventListener("click",eliminarCat);
  function eliminarCat(e){
    e.preventDefault();
    let formulario = document.querySelector('#formBajaCat');
    let datos = new FormData(formulario);
    datos.append('ajax',2);
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        consulta("../admin/php/consultaProductos.php","TablaCats");
        document.getElementById('msjbox').style.display= "inline-block";
        document.getElementById('mensaje').innerHTML="Producto Eliminado";
        document.getElementById('id01').style.display = "none";
        console.log([...datos]);
      }
    };
    xhttp.open("POST", "../admin/php/eliminarProducto.php", true);
    xhttp.send(datos);
  }

  function subirImagenDos(){
    var img = document.getElementById('imgCatD').files[0];
    //var img = $('imgCat')[0].files;
    var formData = new FormData();
    formData.append('file',img);
    $.ajax({
        type:"POST",
        url:"../admin/php/subirImagenProducto.php",
        data:formData,
        processData: false,
        contentType: false,
        success:function(response){
            console.log(response);

        },
        error : function(jqXHR,textStatus,error) {
            console.log(response);
        }
      });
}

document.getElementById('actualizadatos').addEventListener("click",actualizar);

function actualizar(e){
    e.preventDefault();
    let formulario = document.querySelector('#modalEdicion');
    let datos = new FormData(formulario);
    datos.append('ajax',2);
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        subirImagenDos();
        consulta("../admin/php/consultaProductos.php","TablaCats");
        document.getElementById('msjbox').style.display= "inline-block";
        document.getElementById('mensaje').innerHTML="Producto actualizado";
        document.getElementById('id01').style.display = "none";
        console.log([...datos]);
      }
    };
    xhttp.open("POST", "../admin/php/actualizarProducto.php", true);
    xhttp.send(datos);
  }