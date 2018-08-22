<?php
    session_start();
    if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1 AND $_SESSION['user_type']!=1) {
        header("location: login.php");        
    exit;
    }
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
        <link rel="stylesheet" type="text/css" href="materialize/css/securos.css" media="screen,projection">
        <link rel="stylesheet" type="text/css" href="materialize/css/issTy.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <script>
            function selector(valor){
                if(valor=="1"){
                    document.getElementById("nombre").style.display = "block";
                    document.getElementById("correo").style.display = "block";
                    document.getElementById("usuario").style.display = "block";
                    document.getElementById("contraseña").style.display = "block";
                    document.getElementById("rcontraseña").style.display = "block";
                    document.getElementById("btnAdmin").style.display = "block";
                    document.getElementById("empresa").style.display = "none";
                    document.getElementById("telefono").style.display = "block";
                    document.getElementById("btnCliente").style.display = "none";
                }
                if(valor=="0"){
                    document.getElementById("nombre").style.display = "block";
                    document.getElementById("correo").style.display = "block";
                    document.getElementById("usuario").style.display = "block";
                    document.getElementById("contraseña").style.display = "block";
                    document.getElementById("rcontraseña").style.display = "block";
                    document.getElementById("btnAdmin").style.display = "none";
                    document.getElementById("empresa").style.display = "block";
                    document.getElementById("telefono").style.display = "block";
                    document.getElementById("btnCliente").style.display = "block";

                }
            }
        </script>
    </head>
    <body>
        <nav class="securos-colorb">
    <div class="nav-wrapper">
      <a href="main.php"><img src="img/iss_logo_en_horizontal_blue.png" class="brand-logo responsive-img" style="border-radius: 10px;" height="150px" width="200px" /></a>
      <span href="main.php" class="brand-logo center iss hide-on-small-only">Panel de Control de Licencias</span>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#modal0" class="modal-trigger"><i class="material-icons right">search</i>Buscar HRU</a></li>
        <li><a href="#!" class="modal-trigger"><i class="material-icons right">person_add</i>Crear cuenta</a></li>
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
          <input required id="searchHRU" type="text" class="validate">
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
<div class="section white">
      <div class="row container">
        <h2 class="header">Crear nueva cuenta</h2>
        <p class="grey-text text-darken-3 lighten-3 flow-text">Las cuentas <b>Administradoras</b> sólo son para uso interno de ISS.<br>Las cuentas <b>Cliente</b> sólo deberán ser creadas cuando ya se tiene un proyecto establecido.</p>
      </div>
</div>
<div class="row">
    <div class="col s12 m3 l3"></div>
    <div class="col s12 m6 l6"> <label>Tipo de cuenta que desea crear</label>
                                    <select class="browser-default" id="admin" onchange="selector((this.value))">
                                        <option value="#" selected>---</option>
                                        <option value="1">Administrador</option>
                                        <option value="0">Cliente</option>
                                    </select></div>
    <div class="col s12 m3 l3"></div>                   
</div>
<div class="row" style="display:none;" id="nombre">
    <div class="col s12 m3 l3"></div>
    <div class="input-field col s12 m6 l6"><input required id="full_name" type="text" class="validate"><label for="full_name">Nombre completo</label></div>
    <div class="col s12 m3 l3"></div>    
</div>
<div class="row" style="display:none;" id="correo">
    <div class="col s12 m3 l3"></div>
    <div class="input-field col s12 m6 l6"><input required id="mail" type="text" class="validate"><label for="mail">Correo electronico empresarial</label></div>
    <div class="col s12 m3 l3"></div>
</div>
<!--DATOS CLIENTE-->
<div class="row" style="display:none;" id="empresa">
    <div class="col s12 m3 l3"></div>
    <div class="input-field col s12 m6 l6"><input required id="company" type="text" class="validate"><label for="company">Empresa</label></div>
    <div class="col s12 m3 l3"></div>
</div>
<div class="row" style="display:none;" id="telefono">
    <div class="col s12 m3 l3"></div>
    <div class="input-field col s12 m6 l6"><input required id="telephone" type="text" class="validate"><label for="telephone">Telefono de contacto</label></div>
    <div class="col s12 m3 l3"></div>
</div>
<!--FIN DATOS CLIENTE-->
<div class="row" style="display:none;" id="usuario">
    <div class="col s12 m3 l3"></div>
    <div class="input-field col s12 m6 l6"><input required id="username" type="text" class="validate"><label for="username">Usuario</label></div>
    <div class="col s12 m3 l3"></div>
</div>    
<div class="row" style="display:none;" id="contraseña">
    <div class="col s12 m3 l3"></div>
    <div class="input-field col s12 m6 l6"><input required id="password" type="password" class="validate"><label for="password">Contraseña</label></div>
    <div class="col s12 m3 l3"></div>
</div>
<div class="row" style="display:none;" id="rcontraseña">
    <div class="col s12 m3 l3"></div>
    <div class="input-field col s12 m6 l6"><input required id="passwordr" type="password" class="validate"><label for="mail">Repetir contraseña</label></div>
    <div class="col s12 m3 l3"></div>
</div><br>
<div class="row" style="display:none;" id="btnAdmin">
    <div class="col s12 m3 l3"></div>
    <div class="col s12 m6 l6 center-align"><button class="btn securos-colorb waves-effect" id="submit_btn" href="#">Crear cuenta Administradora</button></div>
    <div class="col s12 m3 l3"></div>
</div>
<div class="row" style="display:none;" id="btnCliente">
    <div class="col s12 m3 l3"></div>
    <div class="col s12 m6 l6 center-align"><button class="btn orange waves-effect" id="submit_btn" href="#">Crear cuenta Cliente</button></div>
    <div class="col s12 m3 l3"></div>
</div>
<div class="row">
    <div class="col s12 m3 l3"></div>
    <div class="col s12 m6 l6 center-align"><span id="output"></span></div>
    <div class="col s12 m3 l3"></div>
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
            $("#submit_btn").click(function(event){
                //alert("Working");
                var parametros = "firstname=" + document.getElementById("full_name").value + "&user_name=" + document.getElementById("username").value + "&user_email=" + document.getElementById("mail").value + "&is_admin=" + $("#admin")[0].selectedIndex + "&user_password_new=" + document.getElementById("password").value + "&user_password_repeat=" + document.getElementById("passwordr").value + "&phone=" + document.getElementById("telefono").value;
                //alert(parametros);
               $.ajax({
                  type: "POST",
                    url: "ajax/create_user.php",
                    data: parametros,
                     beforeSend: function(objeto){
                        $("#output").html('<img src="./img/ajax-loader.gif"> Cargando...');
                      },
                    success: function(datos){
                        //alert("Finished");
                        $("#output").html(datos);
                    }
               }); 
            });
        </script>
    </body>
</html>
