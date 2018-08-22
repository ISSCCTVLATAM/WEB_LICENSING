<?php

    // Para saber si sí hizo login o no. Esto se necesita poner en todas las
    // subpáginas para que no entre si no ha hecho login

    session_start();
  if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
        header("location: login.php");
        
    exit;
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>HOME | ISS</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" type="text/css" href="materialize/css/securos.css" media="screen,projection">
    <link rel="stylesheet" type="text/css" href="materialize/css/issTy.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body onload="initializeSearch()">
	<nav class="securos-colorb">
    <div class="nav-wrapper">
      <img src="img/iss_logo_en_horizontal_blue.png" class="brand-logo responsive-img" style="border-radius: 10px;" height="150px" width="200px" />
      <span href="#!" class="brand-logo center iss hide-on-small-only">Panel de Control de Licencias</span>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#modal0" class="modal-trigger"><i class="material-icons right">search</i>Buscar HRU</a></li>
        <li><a href="user_creator.php" class="modal-trigger"><i class="material-icons right">person_add</i>Crear cuenta</a></li>
        <li><a href="login.php?logout"><i class="material-icons right">close</i>Salir</a></li>
      </ul>
    </div>
    
  </nav><br> 
  <!-- Modal Structure -->
  <div id="modal0" class="modal">
    <div class="modal-content">
      <h4>Buscar Licencia por HRU</h4>
      <p>Por favor ingresa el HRU a buscar en la plataforma.
    <br><br>
    <div class="row">
      <div class="input-field col s12 m12 l12">
          <input id="searchHRU" type="text" class="validate">
          <label for="searchHRU">HRU</label>
          </div>
    </div>
      </p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat red white-text">cancelar</a>
      <a href="#!" class="modal-close waves-effect waves-green btn-flat securos-colorb white-text">Buscar</a>
    </div>
  </div>
  <!--SIDENAV-->
  <ul id="slide-out" class="side-nav securos-colorb">    
      <li>
        <div class="user-view">
          <a href="#main.php"><img class="responsive-img" src="img/iss_logo_en_horizontal_blue.png"></a>
          <a><span class="white-text name"><?php echo $_SESSION['full_name'];?></span></a>
          <a><span class="white-text email"><?php echo $_SESSION['user_email'];?></span></a>
        </div>
      </li>
       <div class="divider"></div>
       <li><a class="flow-text white-text"><i class="material-icons white-text">arrow_drop_down</i>Menú de opciones</a></li>
      <li><a href="key-register-form.php" class="white-text"><i class="white-text material-icons">create</i>Registrar Licencia</a></li>
        <li><a href="#!" class="white-text"><span class="new badge red">4</span><i class="white-text material-icons">delete_forever</i>Keys por vencer</a></li>
        <li><a href="mailto:?Subject=Formulario%20de%20Solicitud%20de%20Licencia&amp;body=Que%20tal,%0D%0A%0D%0AIngresa%20a%20la%20siguiente%20liga%20para%20solictar%20una%20licencia.%20Lee%20cuidadosamente%20y%20llena%20todos%20los%20campos%20que%20se%20te%20solicitan:%0D%0A%0D%0ALINK:%20http://localhost:8081/weblic/key-request-form.php" target="_top" class="white-text"><i class="white-text material-icons">contact_mail</i>Enviar solicitud de licencia</a></li>
         <li><a href="#!" class="white-text"><i class="white-text material-icons">group</i>Lista de Cientes</a></li>
         <li>
           <ul class="collapsible">
          <li>
            <div class="collapsible-header white-text">&nbsp;&nbsp;&nbsp;<i class="material-icons white-text">search</i>&nbsp;&nbsp;&nbsp;Buscar</div>
            <div class="collapsible-body">
              <ul class="collection">
                <a href="#!" class="collection-item">Buscar por HRU</a>
                <a href="#!" class="collection-item">Buscar por Cliente</a>
            </ul>
            </div>
          </li>
        </ul>
      </li>
        <!--<li><a href="{{ URl('/development') }}" class="white-text"><i class="white-text material-icons">book</i>Reports</a></li>-->
      <li><div class="divider"></div></li>
    </ul>
    <div class="fixed-action-btn">
    <a href="#" data-activates="slide-out" class="orange pulse securos-color btn-floating btn-large button-collapse">
      <i class="large material-icons">menu</i>
    </a>    
 </div> 
<!--FIN SIDENAV-->
  <div class="row">
    <div class="col s12 m12 l12">
       <div class="section white">
      <div class="row container">
        <h2 class="header">Ultimas Licencias agregadas</h2>
        <p class="grey-text text-darken-3 lighten-3">Visualizacion de las ultimas licencias registradas en la plaforma.</p>
      </div>
    </div>
      <table class="striped responsive-table centered">
        <thead>
          <tr>
              <th>Proyecto</th>
              <th>HRU Principal</th>
              <th>Usuario que Solicita</th>
              <th>Empresa</th>
              <th>Comentarios</th>
              <th>Información Adicional</th>
          </tr>
        </thead>

        <tbody id="datain">
         
            <!-- Generated by Query!!!! -->
            
        </tbody>
      </table>
    </div>
  </div>
  <!-- Modal Structure -->
  <div id="modal1" class="modal ">
    <div class="modal-content">
      <h4>Detalles de licencia</h4>
      <p>A continuación se muestra a detalle toda la información relacionada a la Licencia.
        <div class="divider"></div>
    <br>
    <div class="row">
      <div class="col s12 m4 l4">
          <label >Cliente: </label><h5>MAGNA</h5>
      </div>
      <div class="col s12 m4 l4">
          <label >Proyecto: </label><h5>MAGNA Mecanismos Face</h5>
      </div>
      <div class="col s12 m4 l4"><label >Email: </label><h5>soporte@magna.com</h5></div>
    </div>
    <div class="row">
      <div class="col s12 m8 l8">
        <label >HRU de configuración: </label><h5>C15C34D9E219A19C65825F29C4D00B7F</h5>
      </div>
      <div class="col s12 m4 l4"><label >Numero de cambio: </label><h5>1</h5></div>
    </div>
    <div class="row">
      <div class="col s12 m3 l3"><label >Fecha de creación: </label><h5>12-07-2018</h5></div>
      <div class="col s12 m3 l3"><label >Fecha de Inicio: </label><h5>12-07-2018</h5></div>
      <div class="col s12 m3 l3"><label >Fecha de termino: </label><h5>12-10-2018</h5></div>
      <div class="col s12 m3 l3"><label >Días restantes: </label><h5>180 días</h5></div>
    </div>
    <div class="row">
      <div class="col s12 m3 l3"><label >Tipo de Producto: </label><h5>Enterprise</h5></div>
      <div class="col s12 m3 l3"><label >Versión de SecurOS: </label><h5>9.6</h5></div>
      <div class="col s12 m3 l3"><label >Idioma: </label><h5>Español</h5></div>
      <div class="col s12 m3 l3"><label >Pais: </label><h5>México</h5></div>
    </div>
    <div class="row">
      <div class="col s12 m3 l3"><label >Serial/ID: </label><h5>9089956</h5></div>
      <div class="col s12 m6 l6"><label >Comentario: </label><h5>La pidio en modo urgente</h5></div>
      <div class="col s12 m3 l3"><label >Creador: </label><h5>Gerardo Maya</h5></div>
    </div>
      </p>
      <div class="divider"></div>
      <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat securos-colorb white-text">Listo</a>
    </div>
    </div>
  </div>





	<footer class="page-footer securos-colorb">
	        <div class="footer-copyright">
	           <div class="container">
	            © 2018 Intelligent Security Systems
	            <a class="grey-text text-lighten-4 right" href="http://isscctv.com/">Sitio ISS</a>
	            </div>
	        </div>
	</footer>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="materialize/js/materialize.min.js"></script>
<script type="text/javascript" src="materialize/js/securos.js"></script>


<script>
    function initializeSearch()
    {
        $.ajax({
                  type: "POST",
                    url: "ajax/get_new_licenses_requests.php",
                    data: "",
                     beforeSend: function(objeto){
                        // Display loading gif
                      },
                    success: function(datos){
                        $("#datain").html(datos);
                        eval("updateTable(jsonin);");
                    }
               }); 
    }
    
    function updateTable(jsonvar)
    {
        // Proyecto | HRU Principal | Creador | Comentario | Detalles
        
        /*
            document.getElementById("datain").innerHTML += "<tr>";
            for(var it in jsonin[i]){
                document.getElementById("datain").innerHTML += "<td>";
                console.log(jsonin[i][it]);
                document.getElementById("datain").innerHTML += jsonvar[i][it];
                document.getElementById("datain").innerHTML += "</td>";
                console.log("JUMP");
            }
            document.getElementById("datain").innerHTML += "</tr>";
        */
        
        for(var i=0;i<jsonin.length;i++)
        {
            var modalid = i+1;
            document.getElementById("datain").innerHTML += "<tr><td>" + jsonvar[0]["project_name"] + "</td><td>" + JSON.parse(jsonin[0]["license_details"])["servers"][0]["hru"] + "</td><td>" + jsonvar[0]["full_name"] + "</td><td>" + jsonvar[0]["enterprise_name"] + "</td><td>" + jsonvar[0]["comment"] + "</td><td><a href=\"#modal" + modalid + "\" class=\"btn waves-effect waves-ligh modal-trigger\">+INFO</a></td></tr>";
        }
        
    }
</script>
	
</body>
</html>