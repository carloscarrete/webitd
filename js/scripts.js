function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      myFunction(this);
    }
  };
  xhttp.open("GET", "../admin/xml/categorias.xml", true);
  xhttp.send();
}
consulta("../admin/php/categorias.php","optCats");

consulta("../admin/php/categorias.php","optCatsDos");


consulta("../admin/php/consulta.php","TablaCats");

/*
function myFunction(xml) {
  var i;
  var xmlDoc = xml.responseXML;
  var table =
    "<thead class='table-dark'> <tr> <th scope='col' class='x'>#</th> <th scope='col'>Nombre</th> <th scope='col' class='x'>Descripción</th>   <th scope='col' class='x'>Imagen</th> <th scope='col'>Modificar</th> <th scope='col'>Eliminar</th> </tr> </thead> <tbody>";
  var x = xmlDoc.getElementsByTagName("producto");
  for (i = 0; i < x.length; i++) {
    table +=
      "<tr><td scope='row' class='x'>" +(i+1)+"</td>" + "<td>"
      x[i].getElementsByTagName("nombre")[0].childNodes[0].nodeValue +
      "</td><td class='x'>" +
      x[i].getElementsByTagName("descripcion")[0].childNodes[0].nodeValue +
      "</td><td class='x'>" +
      x[i].getElementsByTagName("imagen")[0].childNodes[0].nodeValue +
      
      +"</td></tr>";
  }
  document.getElementById("miTabla ").innerHTML = table+"</tbody>";
}
*/

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
  xhttp.onreadystatechange = function(response) {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById('msjbox').style.display= "inline-block";
      document.getElementById('mensaje').innerHTML="Se ha agregado la categoria de manera correcta";
      document.getElementById('id01').style.display= "none";
      consulta("../admin/php/consulta.php","TablaCats");
      console.log([...datos]);
      subirImagen();
    }
  };
  xhttp.open("POST", "../admin/php/alta.php", true);
  xhttp.send(datos);
}


document.getElementById('btnEliminar').addEventListener("click",eliminarCat);
function eliminarCat(e){
  e.preventDefault();
  let formulario = document.querySelector('#formBajaCat');
  let datos = new FormData(formulario);
  datos.append('ajax',2);
  console.log([...datos]);
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      consulta("../admin/php/consulta.php","TablaCats");
      document.getElementById('msjbox').style.display= "inline-block";
      document.getElementById('mensaje').innerHTML="Categoria Eliminada";
      document.getElementById('id01').style.display = "none";
      console.log([...datos]);
    }
  };
  xhttp.open("POST", "../admin/php/eliminarCat.php", true);
  xhttp.send(datos);
}

function subirImagen(){
  var fd = new FormData();
  //var files = $('#imgCat')[0].files;
  //var files = $('#imgCat').files[0];
  var files = document.getElementById("imgCat").files[0];
  fd.append('file',files);
  for (var value of fd.values()) {
    console.log(value);
 }

  $.ajax({
    url:"../admin/php/subirImagen.php",
		type:"POST",
    data:fd,
    processData: false,
    contentType: false,
		success:function(response){
      console.log("Respuesta?" + response)
    },
    error: function (jqXHR,textStatus,errorMessage) {
      console.log("errorMessage")
    }
	});
}

function subirImagenDos(){
  var fd = new FormData();
  var files = document.getElementById("imgCatD").files[0];
  fd.append('file',files);


  $.ajax({
    url:"../admin/php/subirImagen.php",
		type:"POST",
    data:fd,
    processData: false,
    contentType: false,
		success:function(response){
      console.log("Respuesta?" + response)
    },
    error: function (jqXHR,textStatus,errorMessage) {
      console.log("errorMessage")
    }
	});
}
document.getElementById('actualizadatos').addEventListener("click",modificarDes);




function modificarDes(e){
  e.preventDefault();
  let formulario = document.querySelector('#modalEdicion');
  let datos = new FormData(formulario);
  datos.append('ajax',2);
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function(response) {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById('msjbox').style.display= "inline-block";
      document.getElementById('mensaje').innerHTML="Se ha agregado la categoria de manera correcta";
      document.getElementById('id01').style.display= "none";
      consulta("../admin/php/consulta.php","TablaCats");
      console.log([...datos]);
      subirImagenDos();
    }
  };
  xhttp.open("POST", "../admin/php/actualizar.php", true);
  xhttp.send(datos);
	
}
