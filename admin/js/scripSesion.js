document.getElementById('acceder').addEventListener("click",sesion);

function sesion(e){
    e.preventDefault();
    let formulario = document.querySelector('#miLogin');
    let datos = new FormData(formulario);
    datos.append('ajax',2);
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById('loginSesion').innerHTML=this.responseText;
      }
    };
    xhttp.open("POST", "./admin/php/login.php", true);
    xhttp.send(datos);
  }

